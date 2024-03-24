<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

class Helper {

	public static function requires($filename, $dir = false)
	{
		require_once self::get_file_path($filename, $dir);
	}

	public static function includes($filename, $dir = false) {
		include self::get_file_path($filename, $dir);
	}

	public static function get_img($filename) {
		$path = '/assets/img/' . $filename;
		return self::get_file_uri($path);
	}

	public static function get_svg($filename) {
		$path = '/assets/svg/' . $filename;
		return self::get_file_uri($path);
	}

	public static function get_css($filename) {
		$path = '/assets/css/' . $filename . '.css';
		return self::get_file_uri($path);
	}

	public static function get_js($filename) {
		$path = '/assets/js/' . $filename . '.js';
		return self::get_file_uri($path);
	}

	public static function get_vendor_assets($file) {
		$path = '/assets/vendors/' . $file;
		return self::get_file_uri($path);
	}

	public static function get_icon_src( $icon ) {
		$file = self::get_icon_file( $icon );

		if ( ! $file ) {
			return 'Mehedi';
		}

		$url = self::get_file_uri( '/assets/icons/' . $file);

		return $url;
	}

	private static function get_icon_file( $icon ) {
		return self::get_unicons_file( $icon );
	}

	private static function get_unicons_file( $icon ) {
		$slice = explode( ' ', $icon );

		if ( 'uil' === $slice[0] ) {
			$filename = str_replace( 'uil-', '', $slice[1] );
			$dir      = 'unicons/svgs/line/';
		} elseif ( 'uis' === $slice[0] ) {
			$filename = str_replace( 'uis-', '', $slice[1] );
			$dir      = 'unicons/svgs/solid/';
		} else {
			return 'Hasan';
		}

		return $dir . $filename . '.svg';
	}

	public static function get_template_part($template, $args = array()) {
		extract($args);

		$template = '/' . $template . '.php';

		$file = get_template_directory() . $template;

		require $file;
	}

	public static function get_template_content($template, $args = null) {
		ob_start();
		get_template_part($template, null, $args );
		return ob_get_clean();
	}

	private static function get_file_path($filename, $dir = false) {
		if ($dir) {
			$file = get_template_directory() . '/' . $dir . '/' . $filename;
		} else {
			$file = get_template_directory() . '/inc/' . $filename;
		}

		return $file;
	}

	private static function get_file_uri($path) {
		$file = get_template_directory_uri() . $path;
		return $file;
	}

	public static function the_svg($filename) {
		$dir = 'assets/svg';
		$filename = $filename . '.svg';
		$file = self::get_file_path($filename, $dir);
		$svg = file_get_contents($file);
		$svg = trim($svg);

		return $svg;
	}

	public static function print_active_dashboard_class($type,$for) {
		$tab = isset($_GET['tab']) ? $_GET['tab'] : 'dashboard';

		$class = '';
		if ($for=='nav' && $tab == $type ) {
			$class = 'active';
		}

		if ($for=='content' && $tab == $type) {
			$class = 'active show';
		}

		echo $class;
	}

	public static function multisite_switch() {
		if (is_multisite()) {
			switch_to_blog(1);
		}
	}

	public static function multisite_restore() {
		if (is_multisite()) {
			restore_current_blog();
		}
	}

	public static function filter_content($content) {
		// wp filters
		$content = wptexturize($content);
		$content = convert_smilies($content);
		$content = convert_chars($content);
		$content = wpautop($content);
		$content = shortcode_unautop($content);

		// remove shortcodes
		$pattern = '/\[(.+?)\]/';
		$content = preg_replace($pattern, '', $content);

		// remove tags
		$content = strip_tags($content);

		return $content;
	}

	public static function get_nav_menu_args($name) {
		$nav_menu_args = array('theme_location' => $name, 'container' => 'nav', 'fallback_cb' => false, 'menu_class' => $name);
		return $nav_menu_args;
	}

	public static function comments_callback($comment, $args, $depth) {
		Helper::get_template_part('template-parts/comments-callback', compact('comment', 'args', 'depth'));
	}

	public static function uniqueid() {
		$time = microtime();
		$time = str_replace(array(' ', '.'), '-', $time);
		$id = 'u-' . $time;
		return $id;
	}

	public static function product_type($id) {
		$product_type = get_post_meta($id, 'theme_product_type', true);
		return $product_type ? $product_type : 'other';
	}

	public static function product_meta_list($product_meta) {
		$product_meta_list = array();

		if (!empty($product_meta['last_update_date'])) {
			$product_meta_list[] = array(
				'icon' => wpwax_icon('uil uil-sync', false),
				'title' => 'Last Updated',
				'content' => $product_meta['last_update_date'],
			);
		}

		if (!empty($product_meta['release_date'])) {
			$product_meta_list[] = array(
				'icon' => wpwax_icon('uil uil-schedule', false),
				'title' => 'Released',
				'content' => $product_meta['release_date'],
			);
		}


		if (!empty($product_meta['version'])) {
			$product_meta_list[] = array(
				'icon' => wpwax_icon('uil uil-layer-group', false),
				'title' => 'Current Version',
				'content' => $product_meta['version'],
			);
		}

		if (!empty($product_meta['requirements'])) {
			$product_meta_list[] = array(
				'icon' => wpwax_icon('uil uil-file-check-alt', false),
				'title' => 'Requirements',
				'content' => $product_meta['requirements'],
			);
		}

		return $product_meta_list;
	}

	public static function cart_max_price_id() {
		$price_id = 0;
		$cart = edd_get_cart_contents();

		foreach ($cart as $item) {
			if ( !empty( $item['options']['price_id'] ) ) {
				$pid = (int) $item['options']['price_id'];
				if ( $pid > $price_id ) {
					$price_id = $pid;
				}
			}
		}
		return $price_id;
	}

	public static function discounted_amount( $price_id ) {

		switch ( $price_id ) {
			case 1:
				$amount = 15;
				break;

			case 2:
				$amount = 20;
				break;

			case 3:
				$amount = 25;
				break;

			case 4:
				$amount = 30;
				break;

			case 5:
				$amount = 35;
				break;

			case 6:
				$amount = 40;
				break;

			default:
				$amount = 0;
		}

		return $amount;
	}

	public static function custom_discount_label_html( $price_id ) {
		$amount = self::discounted_amount( $price_id );
		if ( !$amount ) {
			return '';
		}

		$html = '<span class="pricing-discount theme-2"><strong>'.$amount.'%</strong>Off</span>';
		return $html;
	}

	public static function faq_html( $ques, $ans, $raw_ans=false ) {
		$id = self::uniqueid();
		?>
		<div class="faq-accordion__single">
			<div class="faq-single-header">
				<h6 class="faq-single-header__title d-flex align-items-center justify-content-between" data-toggle="collapse"
					data-target="#<?php echo $id; ?>" aria-expanded="true" aria-controls="<?php echo $id; ?>">
					<span class="header-text"><?php echo $ques; ?></span>
					<?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
				</h6>
			</div>
			<div id="<?php echo $id; ?>" class="faq-single-body collapse">
				<div class="body-inner">
					<?php if ($raw_ans): ?>
					<?php echo $ans; ?>
					<?php else: ?>
					<p><?php echo $ans; ?></p>
					<?php endif ?>
				</div>
			</div>
		</div>
	<?php }

	public static function discount_label_html( $price_id ) {
		// return '';

		$amount = self::discounted_amount( $price_id );
		if ( !$amount ) {
			return '';
		}

		$html = '<span class="pricing-discount theme-2"><strong>'.$amount.'%</strong>Off</span>';
		return $html;
	}

	public static function get_env(){
		$site_url =  home_url();

		if ( strpos( $site_url, 'wpwax.com' ) ) {
			return 'production';
		}
		if( strpos( $site_url, 'kowsar/wpwax' ) ) {
			return 'staging';
		}

		return 'local';
	}

	public static function get_helpgent_download_id() {
		if( 'production' == self::get_env() ) {
			return 34827;
		}

		if( 'staging' == self::get_env() ) {
			return 902;
		}

		if( 'local' == self::get_env() ) {
			return 177195;
		}

		return 0;
	}

	public static function get_legal_pages_download_id() {
		if( 'production' == self::get_env() ) {
			return 3315;
		}

		if( 'staging' == self::get_env() ) {
			return 3315;
		}

		if( 'local' == self::get_env() ) {
			return 3315;
		}

		return 0;
	}

	public static function get_helpgent_roadmap_contact() {
		if( 'production' == self::get_env() ) {
			return do_shortcode( '[contact-form-7 id="35222" title="Submit your new idea"]' );
		}

		if( 'staging' == self::get_env() ) {
			return do_shortcode( '[contact-form-7 id="900" title="Submit your new idea"]' );
		}

		if( 'local' == self::get_env() ) {
			return do_shortcode( '[contact-form-7 id="128627" title="Submit your new idea"]' );
		}
	}

	public static function edd_discount_code( $price_id, $download_id = 0, $special = '' ) {
		$discount_option_name = 'sitewide_coupon';
		$discount_code = Theme::$options[$discount_option_name];

		if( 1 == $price_id ) {
			$discount_code = 'Special-1-Site';
		} else if ( 2 == $price_id ) {
			$discount_code = 'Special-5-Sites';
		} else if ( 3 == $price_id ) {
			$discount_code = 'Special-Unlimited-Sites';
		} else if ( 4 == $price_id ) {
			$discount_code = 'LTD-1-Site';
		} else if ( 5 == $price_id ) {
			$discount_code = 'LTD-5-Sites';
		} else if ( 6 == $price_id ) {
			$discount_code = 'LTD-Unlimited-Sites';
		}

		// Early Bird Price
		if ( $download_id && self::get_helpgent_download_id() == $download_id ) {
			if( 1 == $price_id ) {
				$discount_code = 'EarlyBird1';
			} else if ( 2 == $price_id ) {
				$discount_code = 'EarlyBird5';
			} else if ( 3 == $price_id ) {
				$discount_code = 'EarlyBirdUnlimited';
			} else if ( 4 == $price_id ) {
				$discount_code = 'LTD-EarlyBird1';
			} else if ( 5 == $price_id ) {
				$discount_code = 'LTD-EarlyBird5';
			} else if ( 6 == $price_id ) {
				$discount_code = 'LTD-EarlyBirdUnlimited';
			}

			if( 'DirectoristHelpGent' == $special) {
				if( 1 == $price_id ) {
					$discount_code = 'DirectoristHelpGent-1SY';
				} else if ( 2 == $price_id ) {
					$discount_code = 'DirectoristHelpGent-10SY';
				} else if ( 3 == $price_id ) {
					$discount_code = 'DirectoristHelpGent-USY';
				} else if ( 4 == $price_id ) {
					$discount_code = 'DirectoristHelpGent-1SLTD';
				} else if ( 5 == $price_id ) {
					$discount_code = 'DirectoristHelpGent-10SLTD';
				} else if ( 6 == $price_id ) {
					$discount_code = 'DirectoristHelpGent-USLTD';
				}
			}
		}

		if ( !$discount_code ) {
			return '';
		}

		return $discount_code;
	}

	public static function edd_checkout_url( $download_id, $price_id=false, $extra_param = '' ) {
		$discount_code = self::edd_discount_code( $price_id, $download_id );
		// $path = '/checkout?edd_action=add_to_cart&download_id='.$download_id;
		$path = "/checkout?edd_action=add_to_cart&download_id={$download_id}$extra_param";

		if( 'DirectoristHelpGent' === $extra_param ) {
			$discount_code = self::edd_discount_code( $price_id, $download_id, $extra_param  );
			$path = "/checkout?edd_action=add_to_cart&download_id={$download_id}";
		}
		
		if ( $price_id ) {
			$path .= '&edd_options[price_id]='.$price_id;
		}

		if ( $discount_code && ( ! $extra_param || 'DirectoristHelpGent' == $extra_param ) ) {
			$path .= '&discount='.$discount_code;
		}

		$url = site_url( $path );
		return $url;
	}

	public static function edd_price_html( $download_id, $price_id, $special = '' ) {
		$prices = edd_get_variable_prices( $download_id );
		$price = !empty( $prices[$price_id] ) ? $prices[$price_id] : $prices[1];

		$del_price  = self::edd_del_price( $price );
		$main_price = self::edd_main_price( $price, $price_id, $download_id, $special );
		if ( $del_price ) {
			$html = sprintf( '<span class="old-price"><del>$%s</del></span> <span class="currency">$</span> <span class="price-text">%s</span>', $del_price, $main_price );
		}
		else {
			$html = sprintf( '<span class="currency">$</span> <span class="price-text">%s</span>', $main_price );
		}

		return $html;
	}

	public static function edd_single_price_html( $download_id ) {
		$price = edd_get_download_price( $download_id );

		$discount_code = self::edd_discount_code( $price['index'], $download_id );

	
		if ( $discount_code ) {
			$sale_price = edd_get_discounted_amount( $discount_code, $price );
			$sale_price = ceil($sale_price);
			$html = sprintf( '<span class="old-price"><del>$%s</del></span> <span class="currency">$</span><span class="price-text">%s</span>', $price, $sale_price );
		}
		else {
			$html = sprintf( '<span class="currency">$</span><span class="price-text">%s</span>', $price );
		}

		return $html;	
	}

	public static function edd_custom_main_price( $price ) {
		return (int) $price['amount'];
	}

	public static function edd_del_price( $price ) {
		if ( !empty( $price['old_price'] ) ) {
			return (int) $price['old_price'];
		}
		else {
			return '';
		}
	}

	public static function edd_main_price( $price, $price_id, $download_id, $special = '' ) {
		// return self::edd_custom_main_price( $price );
		$discount_code = self::edd_discount_code( $price_id, $download_id, $special );

		$regular_price = $price['amount'];

		if ( $discount_code ) {
			$sale_price = edd_get_discounted_amount( $discount_code, $regular_price );
			$main_price = ceil($sale_price);
		}
		else {
			$main_price = $regular_price;
		}

		return (int) $main_price;
	}

	// date of blog post
	public static function time_link() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		$time_string = sprintf(
			$time_string,
			get_the_date(DATE_W3C),
			get_the_date(),
			get_the_modified_date(DATE_W3C),
			get_the_modified_date()
		);
		return sprintf('<a href="%s" rel="bookmark">%s</a>', esc_url(get_permalink()), $time_string);
	}

	// blog post estimated reading time
	public static function reading_time($content = '') {
		$clean_content = strip_shortcodes($content);
		$clean_content = strip_tags($clean_content);
		$word_count    = str_word_count($clean_content);
		$time          = ceil($word_count / 250);
		return $time;
	}

	public static function setPostViews($postID) {
		$countKey = 'post_views_count';
		$count    = get_post_meta($postID, $countKey, true);
		if ('' == $count) {
			$count = 0;
			delete_post_meta($postID, $countKey);
			add_post_meta($postID, $countKey, '0');
		} else {
			$count++;
			update_post_meta($postID, $countKey, $count);
		}
	}

	public static function home_product_query( $type ) {
		if ( $type == 'theme' ) {
			$product_ids = Theme::$options['home_themes'];
			if ($product_ids) {
				$product_ids = explode(',', $product_ids );
			}
			$args = [
				'post_type'    => 'download',
				'posts_per_page'    => 3,
				'meta_query' => array(
					array(
						'key'     => 'theme_product_type',
						'value'   => 'theme',
						'compare' => 'IN',
					),
				),
			];

			if ( $product_ids ) {
				$args['post__in'] = $product_ids;
				$args['orderby'] = 'post__in';
			}

			$query = new \WP_Query($args);
		}

		else {
			$product_ids = trim( Theme::$options['home_plugins'] );
			if ($product_ids) {
				$product_ids = explode(',', $product_ids );
			}
			$args = [
				'post_type'    => 'download',
				'posts_per_page'    => 3,
				'meta_query' => array(
					array(
						'key'     => 'theme_product_type',
						'value'   => 'plugin',
						'compare' => 'IN',
					),
				),
			];

			if ( $product_ids ) {
				$args['post__in'] = $product_ids;
				$args['orderby'] = 'post__in';
			}
			// Hide HelpGent
			$args['post__not_in'] = [ self::get_helpgent_download_id() ];
			$query = new \WP_Query($args);
		}

		return $query;
	}


	public static function get_the_archive_title() {
		if ( is_search() ) {
			$title = esc_html__( 'Search Results for ', 'directorist' ) .'"'.get_search_query().'"';
		}elseif ( is_category() ) {
			/** translators: Category archive title. 1: Category name */
			$title = single_cat_title();
		} elseif ( is_tag() ) {
			/** translators: Tag archive title. 1: Tag name */
			$title = single_tag_title();
		} elseif ( is_author() ) {
			/** translators: Author archive title. 1: Author name */
			$title = get_the_author();
		} elseif ( is_year() ) {
			/** translators: Yearly archive title. 1: Year */
			$title = sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
		} elseif ( is_month() ) {
			/** translators: Monthly archive title. 1: Month name and year */
			$title = sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
		} elseif ( is_day() ) {
			/** translators: Daily archive title. 1: Date */
			$title = sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
		} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
				$title = _x( 'Asides', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
				$title = _x( 'Galleries', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
				$title = _x( 'Images', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
				$title = _x( 'Videos', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
				$title = _x( 'Quotes', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
				$title = _x( 'Links', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
				$title = _x( 'Statuses', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
				$title = _x( 'Audio', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
				$title = _x( 'Chats', 'post format archive title' );
			}
		} elseif ( is_post_type_archive() ) {
			/** translators: Post type archive title. 1: Post type name */
			$title = post_type_archive_title();
		} elseif ( is_tax() ) {
			$tax = get_taxonomy( get_queried_object()->taxonomy );
			/** translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
			$title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
		} else {
			$title = __( 'Archives' );
		}

		/**
		 * Filters the archive title.
		 *
		 * @since 4.1.0
		 *
		 * @param string $title Archive title to be displayed.
		 */
		return apply_filters( 'get_the_archive_title', $title );
	}
}
