<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

class Theme {

	protected static $instance;

	// Sitewide static variables
	public static $options;

	private function __construct() {
		add_action( 'after_setup_theme', array( $this, 'set_options' ) );
	}

	public static function instance() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function set_options(){
		$options = get_option( THEME_OPTIONS, array() );
		self::$options  = $options;
	}
}

Theme::instance();