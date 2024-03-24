<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

use BetterDocs_Helper;

class General_Setup {

	protected static $instance = null;

	public function __construct() {
		add_action('after_setup_theme',   array($this, 'theme_setup'));
		add_action('widgets_init',        array($this, 'register_sidebars'), 5);
		add_action('wp_head',             array($this, 'pingback'));
		add_filter('body_class',          array($this, 'body_classes'));
		add_action('wp_head',             array($this, 'noscript_hide_preloader'), 1);
		add_action('wp_body_open',        array($this, 'preloader'));
		add_action('pre_get_posts',       array($this, 'ignore_sticky_posts'));
		add_filter( 'comment_form_fields', array( $this, 'move_textarea_to_bottom' ) );
		add_filter('post_class',          array($this, 'hentry_config'));
		add_action('after_setup_theme',   array($this, 'post_type'));
		add_action('init',                array($this, 'restrict_admin_area'));

		add_filter('wpcf7_autop_or_not', '__return_false');
		add_filter('wpcf7_skip_spam_check', '__return_true');

		add_filter('walker_nav_menu_start_el', array($this, 'load_mega_menu_template'), 10, 2 );
		add_filter('nav_menu_css_class',       array($this, 'add_mega_menu_parent_class'), 10, 2);
		
		add_filter('elementor/widgets/wordpress/widget_args', array($this, 'elementor_widget_args'));

		// Update time
		add_action('wp_ajax_theme_update_time',          array( $this, 'ajax_update_time' ) );
		add_action('wp_ajax_nopriv_theme_update_time',   array( $this, 'ajax_update_time' ) );
		// Remaining time
		add_action('wp_ajax_theme_remaining_time',          array( $this, 'ajax_remaining_time' ) );
		add_action('wp_ajax_nopriv_theme_remaining_time',   array( $this, 'ajax_remaining_time' ) );

		// Remaining Days
		add_action('wp_ajax_theme_remaining_days',          array( $this, 'theme_remaining_days' ) );
		add_action('wp_ajax_nopriv_theme_remaining_days',   array( $this, 'theme_remaining_days' ) );

		// Sell Left
		add_action('wp_ajax_theme_sell_left',               array( $this, 'ajax_sell_left' ) );
		add_action('wp_ajax_nopriv_theme_sell_left',        array( $this, 'ajax_sell_left' ) );

		add_action('betterdocs_before_live_search_form',        array( $this, 'betterdocs_before_live_search_form' ) );

		// Discount Banner
		$this->discount_banner();

		add_filter( 'helpgent_user_capability', [$this, 'helpgent_user_capability']);
		add_filter( 'helpgent_admin_roles', [$this, 'helpgent_admin_roles']);
	}

	public static function instance() {
		if (null == self::$instance) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function helpgent_user_capability( $cap ) {
		return 'delete_others_posts';
	}

	public function helpgent_admin_roles($roles) {
		return ['editor'];
	}

	public function ajax_update_time(){
		$update_time = isset( $_POST['update_time'] ) && 'true' == $_POST['update_time'] ? true : false;
		$nonce 		 = isset( $_POST['_wpnonce'] ) ?  $_POST['_wpnonce'] : '';
		$is_valid	 = wp_verify_nonce( $nonce, 'wpwaxtheme-site-default' );

		if( $update_time && $is_valid ) {
			$time_now	   = strtotime( date( 'Y-m-d H:m:s' ) );
			$new_timestamp = $time_now + 86400;
			$new_time	   = date( 'Y-m-d H:m:s', $new_timestamp );

			Theme::$options['discount_time'] = $new_time;
			update_option( 'wpwax', Theme::$options );

			$zone 		 = 'Asia/Dhaka';
			$target_time = new \DateTime($new_time, new \DateTimeZone($zone));			
			echo $target_time->getTimestamp() - time();
		}
		wp_die();
	}
	
	public function ajax_remaining_time() {	
		$time = Theme::$options['discount_time'];
		$zone = 'Asia/Dhaka';

		$target_time 	= new \DateTime($time, new \DateTimeZone($zone));
		$remaining_time = $target_time->getTimestamp() - time();
		$remaining_time = $remaining_time*1000;

		echo $remaining_time;
		wp_die();
	}

	public function theme_remaining_days() {

		$time           = Theme::$options['discount_time'];
		$zone           = 'Asia/Dhaka';
		$target_time    = new \DateTime( $time, new \DateTimeZone( $zone ) );
		$remaining_time = $target_time->getTimestamp() - time();
		$remaining_time = $remaining_time;
		$time_left      = (int) $remaining_time - (int) $time;
		$days_left      = ceil( (  ( $time_left / 24 ) / 60 ) / 60 );
		$days_or_day	= $days_left == 1 ? "{$days_left} Day" : "{$days_left} Days";
		echo $days_or_day;
		
		wp_die();
	}

	public function ajax_sell_left() {
		$sell_left = EDD::sell_left_html(5290);
		echo $sell_left;
		wp_die();
	}

	public function discount_banner() {
		add_filter( 'body_class', function($classes) {
			if ( Theme::$options['discount_banner'] && !is_page( 'discount-deal' ) ) {
				$classes[] = 'has-discount-banner';
			}
			return $classes;
		} );

		add_action( 'wp_body_open', function(){
			if ( Theme::$options['discount_banner'] && ! is_page( 'pricing' ) ) {
				$url = get_permalink();
				if ( strpos( $url, 'helpgent' ) ) {
					get_template_part( 'template-parts/discount-banner-limited-time' );
				} else {
					get_template_part( 'template-parts/discount-banner-limited-time' );
				}
			}
		} );
	}

	public function theme_setup() {
		// Theme supports
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('automatic-feed-links');
		add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
		add_post_type_support('post', 'page-attributes');

		// Image sizes
		$sizes = array(
			'blogs' => array(330, 200, true), // Blog
			'sticky-blogs' => array(605, 367, true), // Blog
			'single-blog' => array(970, 588, true), // Single Post
			'theme' => array(347, 382, true), // theme
		);

		$this->add_image_sizes($sizes);

		// Register menus
		register_nav_menus(array(
			'primary'  => 'Primary',
			'helpgent-primary'  => 'HelpGent Primary',
			'blog'  => 'Blog Menu',
			'footer-2'  => 'Footer 2 Menu',
			'footer-3'  => 'Footer 3 Menu',
			'footer-4'  => 'Footer 4 Menu',
			'footer'  => 'Footer Bottom Menu',
			'footer-helpgent-1'  => 'Footer 1 HelpGent',
			'footer-helpgent-2'  => 'Footer 2 HelpGent',
			'footer-helpgent-3'  => 'Footer 3 HelpGent',
			'footer-helpgent-bottom-right'  => 'Footer HelpGent Bottom Right',
		));
	}

	public function restrict_admin_area() {
		if (current_user_can('shop_worker')) {
			// Release Access
			add_action('admin_menu', function () {
				remove_submenu_page('edit.php?post_type=download', 'edd-payment-history');
			}, 99);

			return;
		} else if (current_user_can('shop_manager')) {
			// Support Team Access
			add_action('admin_menu', function () {
				remove_menu_page('edit.php?post_type=download');
				remove_menu_page('edit.php?post_type=theme_job');
				remove_menu_page('edit.php?post_type=page');

				remove_menu_page('ai1wm_export');
				remove_menu_page('wpcf7');
				remove_menu_page('wpwax-options');
				remove_menu_page('edit.php');

				remove_submenu_page('themes.php', 'wpwax-options');

				remove_submenu_page('edit.php?post_type=download', 'view_shop_reports');
				remove_submenu_page('edit.php?post_type=download', 'edd-reports');

				remove_meta_box( 'dashboard_quick_press',   'dashboard', 'side' );      //Quick Press widget
				remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );      //Recent Drafts
				remove_meta_box( 'dashboard_primary',       'dashboard', 'side' );      //WordPress.com Blog
				remove_meta_box( 'dashboard_secondary',     'dashboard', 'side' );      //Other WordPress News
				remove_meta_box( 'dashboard_incoming_links','dashboard', 'normal' );    //Incoming Links
				remove_meta_box( 'dashboard_plugins',       'dashboard', 'normal' );    //Plugins
				remove_meta_box( 'dashboard_activity',       'dashboard', 'normal' );    //Plugins
				remove_meta_box( 'edd_dashboard_sales',       'dashboard', 'normal' );    //Plugins
				remove_meta_box( 'nx_analytics_dashboard_widget',       'dashboard', 'normal' );    //Plugins
			}, 99);

			add_filter( 'edd_is_admin_page', function($found, $page, $view,$passed_page, $passed_view){
				if( in_array( $page, ['edd-reports', 'edd-settings', 'edd-tools' ])) {
					echo 'Why you want to see this page?';
					exit();
				}
				return $found;
			}, 15, 5);
			return;
		} else if (current_user_can('edit_posts')) {
			return;
		} else {
			// Hide Admin Bar
			show_admin_bar(false);

			// Restrict wp-admin access
			if (is_admin() && !defined('DOING_AJAX')) {
				wp_redirect(THEME_DASHBOARD_URL);
				exit;
			}
		}
	}

	private function add_image_sizes($sizes) {
		foreach ($sizes as $size => $value) {
			add_image_size($size, $value[0], $value[1], $value[2]);
		}
	}
	
	public function move_textarea_to_bottom( $fields ) {
		$temp = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $temp;
		return $fields;
	}

	public function register_sidebars() {

		register_sidebar(array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		));

		//Blog sidebar
		register_sidebar(array(
			'name'          => 'Blog Sidebar',
			'id'            => 'blog-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		));
	}

	public function hentry_config($classes) {
		if (is_search() || is_page()) {
			$classes = array_diff($classes, array('hentry'));
		}
		return $classes;
	}

	public function pingback() {
		if (is_singular() && pings_open()) {
			printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
		}
	}

	public function body_classes($classes) {
		if (is_page()) {
			$layout = get_post_meta(get_the_ID(), 'theme_layout', true);
			if (!empty($layout['trheader'])) {
				$classes[] = 'trheader';
			}
		}
		elseif (is_home() || is_singular(array('post','download'))) {
			$classes[] = 'trheader';
		}
		
		return $classes;
	}

	public function noscript_hide_preloader() {
		// Hide preloader in case js disabled
		echo '<noscript><style>#theme-preloader{display:none;}</style></noscript>';
	}

	public function preloader() {
		if (Theme::$options['preloader']) {
			$preloader_img = Helper::get_img('preloader.gif');
			echo '<div id="theme-preloader" style="background-image:url(' . esc_url($preloader_img) . ');"></div>';
		}
	}

	public function elementor_widget_args($args) {
		$args['before_widget'] = '<div class="widget %2$s">';
		$args['after_widget']  = '</div>';
		$args['before_title']  = '<h3>';
		$args['after_title']   = '</h3>';
		return $args;
	}

	public function ignore_sticky_posts($query) {
		if ($query->is_main_query() && ($query->is_home() || $query->is_archive())) {
			$query->set('ignore_sticky_posts', 1);
		}
	}

	public function load_mega_menu_template($output, $item) {
		$description = trim($item->description);
		if (!empty($description)) {
			$template = 'template-parts/nav/' . $description;
			$output  .= Helper::get_template_content($template);
		}
		return $output;
	}

	public function add_mega_menu_parent_class($classes, $item) {
		$description = trim($item->description);
		if (!empty($description)) {
			$classes[] = 'has-dir-mega-menu';
		}
		return $classes;
	}

	public function post_type() {
		$post_types = array(
			'theme_job'     => array(
				'title'        => 'Job',
				'plural_title' => 'Jobs',
				'menu_icon'    => 'dashicons-megaphone',
				'rewrite'      => 'job',
				'supports'     => array( 'title','editor', )
			),
		);
		$taxonomies = array(
			'theme_job_category'       => array(
				'title'        => 'Job Category',
				'plural_title' => 'Job Categories',
				'post_types'   => 'theme_job',
			),
		);

		$SV_Posts = \SV_Posts::getInstance();
		$SV_Posts->add_post_types( $post_types );
		$SV_Posts->add_taxonomies( $taxonomies );
	}

	public function betterdocs_before_live_search_form($get_args) {
		if ( ! class_exists( 'BetterDocs_Helper') ) {
			return;
		}
		
		global $wp_query;

		$term_slug = $wp_query->query['knowledge_base'];
		$term	   = get_term_by( 'slug', $wp_query->query['knowledge_base'], 'knowledge_base');
		$tax 	   = BetterDocs_Helper::get_tax();
		
		if ( is_post_type_archive('docs') ) { 
			echo '<h1 class="text-center">wpWax Documentation</h1>';        
		} elseif ( $tax === 'knowledge_base') {
			printf( '<h1 class="text-center">%s</h1>', $term->name );
		}
	}
}

General_Setup::instance();