<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

class Scripts {

	public $version;
	protected static $instance = null;

	public function __construct() {
		$this->version = THEME_SCRIPT_VERSION;

		add_action( 'wp_enqueue_scripts',          array( $this, 'register_scripts' ), 12 );
		add_action( 'wp_enqueue_scripts',          array( $this, 'enqueue_scripts' ), 15 );
	}

	public static function instance() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function register_scripts() {
		// Bootstrap
		wp_register_style( 'bootstrap',     Helper::get_vendor_assets( 'bootstrap/css/bootstrap.min.css' ), array(), $this->version );
		wp_register_script( 'bootstrap',    Helper::get_vendor_assets( 'bootstrap/js/bootstrap.bundle.min.js' ), array( 'jquery' ), $this->version, true );

		// Unicons - https://iconscout.com/unicons/explore/line
		// wp_register_style( 'unicons',       'https://unicons.iconscout.com/release/v2.1.9/css/unicons.css', array(), $this->version );

		// Tiny Slider
		wp_register_style( 'tiny-slider',   Helper::get_vendor_assets( 'tiny-slider/tiny-slider.css' ), array(), $this->version );
		wp_register_script( 'tiny-slider',  Helper::get_vendor_assets( 'tiny-slider/tiny-slider.min.js' ), array( 'jquery' ), $this->version, true );

		// Waypoints
		wp_register_script( 'waypoints', Helper::get_vendor_assets( 'waypoints.min.js' ), array( 'jquery' ), $this->version, true );

		// CounterUp
		wp_register_script( 'jquery-counterup', Helper::get_vendor_assets( 'jquery.counterup.min.js' ), array( 'jquery' ), $this->version, true );

		// CountDown
		wp_register_script( 'jquery-countdown', Helper::get_vendor_assets( 'jquery.countdown.min.js' ), array( 'jquery' ), $this->version, true );

		// Domurl
		wp_register_script( 'domurl', Helper::get_vendor_assets( 'url.min.js' ), array( 'jquery' ), $this->version, true );

		// Headroom
		wp_register_script( 'headroom', Helper::get_vendor_assets( 'headroom.min.js' ), array( 'jquery' ), $this->version, true );

		// Magnific Popup
		wp_register_script( 'magnific-popup', Helper::get_vendor_assets( 'magnific-popup/jquery.magnific-popup.min.js' ), array( 'jquery' ), $this->version, true );
		wp_register_style( 'magnific-popup', Helper::get_vendor_assets( 'magnific-popup/magnific-popup.css' ), array(), $this->version, 'all' );


		// Magnific Popup
		wp_register_script( 'jarallax', Helper::get_vendor_assets( 'jarallax/jarallax.min.js' ), array( 'jquery' ), $this->version, true );
		wp_register_style( 'jarallax', Helper::get_vendor_assets( 'jarallax/jarallax.min.css' ), array(), $this->version, 'all' );
		
		// Main Style
		wp_register_style( 'wpwax-style',  Helper::get_css( 'style' ), array(), $this->version );
		
		// Main js
		wp_register_script( 'wpwax-main',  Helper::get_js( 'main' ), array( 'jquery' ), $this->version, true );
	
	}

	public function enqueue_scripts() {
		// Bootstrap
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_script( 'bootstrap' );

		// Unicons
		// wp_enqueue_style( 'unicons' );

		// CountDown
		wp_enqueue_script( 'jquery-countdown' );

		// Headroom
		wp_enqueue_script( 'headroom' );
		
		if ( is_single() && 'download' == get_post_type() ) {
			// magnific-popup
			wp_enqueue_style( 'magnific-popup' );
			wp_enqueue_script( 'magnific-popup' );
		}
		
		// Theme
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		wp_enqueue_style('wpwax-style');
		wp_enqueue_script( 'wpwax-main' );

		// Localized data
		$localized_data = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'discountTime' => Theme::$options['discount_time'],
			'nonce' => wp_create_nonce( 'wpwaxtheme-site-default' ),
		);
		wp_localize_script( 'wpwax-main', 'ThemeObj', $localized_data );		
	}

	public static function load_helpgent_scripts() {
		add_action( 'wp_enqueue_scripts', function() {
			wp_enqueue_style(  'tiny-slider' );
			wp_enqueue_script( 'tiny-slider' );
			wp_enqueue_script( 'waypoints' );
			wp_enqueue_script( 'jquery-counterup' );

			wp_enqueue_style( 'magnific-popup' );
			wp_enqueue_script( 'magnific-popup' );
			wp_enqueue_style( 'jarallax' );
			wp_enqueue_script( 'jarallax' );
		}, 14 );
	}
}

Scripts::instance();