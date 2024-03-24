<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

if (!isset($content_width)) {
	$content_width = 1140;
}

$theme_data = wp_get_theme(get_template());
// $theme_version = $theme_data->get('Version');
$theme_version = filemtime( __FILE__ );


/**
 * Enqueue Google Fonts
 */
function wpb_add_google_fonts() {
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');


/*-------------------------------------
#. Constants 
---------------------------------------*/
define('THEME_OPTIONS', 'wpwax');
define('THEME_SCRIPT_VERSION', $theme_version);

define('THEME_LIB_DIR', get_template_directory() . '/lib/' );
define('THEME_INC_DIR', get_template_directory() . '/inc/' );

// URL
define('THEME_MEMEBERSHIP_URL', site_url('/pricing/') );
define('THEME_CAREER_URL', site_url('/career/') );
define('THEME_THEME_URL', site_url('/themes/') );
define('THEME_PLUGIN_URL', site_url('/plugins/') );
define('THEME_TESTIMONIALS_URL', site_url('/testimonial/') );
define('THEME_LOGIN_URL', site_url('/login/') );
define('THEME_REGISTER_URL', site_url('/sign-up/') );
define('THEME_CONTACT_URL', site_url('/contact/') );
define('THEME_REFUND_POLICY_URL', site_url('/refund-policy/') );
define('THEME_SUPPORT_POLICY_URL', site_url('/support-policy/') );
define('THEME_PRIVACY_POLICY', site_url('/privacy-policy/') );
define('THEME_TERMS_CONDITIONS', site_url('/terms-conditions/') );
define('THEME_BF_DEAL_URL', site_url('/black-friday-deal/') );
define('THEME_AFFILIATE_URL', site_url('/affiliate-dashboard/') );
define('THEME_DEAL_URL', site_url('/discount-deal/'));
define('THEME_LEGAL_PAGES_ROADMAP', site_url('/legal-pages-pro-roadmap/'));
define('THEME_WOCOMERCE_CAROUSEL_SLIDER_GRID_ULTIMATE_ROADMAP', site_url('/woocommerce-product-carousel-slider-grid-ultimate-roadmap/'));
define('THEME_LEGAL_PAGES_DOC', site_url('/docs/legal-pages/'));
define('THEME_WOCOMERCE_CAROUSEL_SLIDER_GRID_ULTIMATE_DOC', site_url('/docs/woocommerce-product-carousel-slider-grid-ultimate/'));

// External URL
define('THEME_DIRECTORIST', 'https://directorist.com/');
define('THEME_HELPGENT', 'https://wpwax.com/helpgent/');
define('THEME_DIRECTORIST_THEMES', 'https://directorist.com/themes/');
define('THEME_DIRECTORIST_PRICING', 'https://directorist.com/pricing/');
define('THEME_HELPGENT_PRICING', 'https://wpwax.com/helpgent/pricing/');
define('PLUGIN_WOOCOMERCE_P_C_S_G_U_PRO', 'https://demo.wpwax.com/plugin/woocommerce-product-carousel-slider-and-grid-ultimate-demo-slider/');
define('PLUGIN_WOOCOMERCE_POST_GRID_PRO', 'https://demo.wpwax.com/plugin/post-carousel-theme-1/');
define('PLUGIN_WOOCOMERCE_L_S_U_P_PRO', 'https://demo.wpwax.com/plugin/logo-showcase-ultimate-carousel-slider-grid/');
define('PRODUCT_CAROUSEL_SLIDER_GRID', 'https://wpwax.com/product/woocommerce-product-carousel-slider-grid-ultimate-pro/');
define('THEME_DOCS_URL', 'https://wpwax.com/docs/' );
define('PRODUCT_LOGO_SHOWCASE', 'https://wpwax.com/product/logo-showcase-ultimate-pro/#single-plugin-pricing-plan' );
define('PRODUCT_LEGAL_PAGES', 'https://wpwax.com/product/legal-pages-pro/' );
define('PRODUCT_POST_GRID_SLIDER', 'https://wpwax.com/product/post-grid-carousel-ultimate-pro/' );
define('DIR_THEME_DISCOUNT_DEAL', 'https://wpwax.com/discount-deal/');


// HelpGent 
define('THEME_HELPGENT_BASE_URL', site_url('/helpgent') );
define('THEME_HELPGENT_BENEFITS', THEME_HELPGENT_BASE_URL . '/benefits/' );
define('THEME_HELPGENT_FEATURES', THEME_HELPGENT_BASE_URL . '/features/' );
define('THEME_HELPGENT_CONVERSATIONAL_FORMS', THEME_HELPGENT_BASE_URL . '/conversational-forms/' );
define('THEME_HELPGENT_HOW_IT_WORKS', THEME_HELPGENT_BASE_URL . '/how-it-works/' );
define('THEME_HELPGENT_INTEGRATIONS', THEME_HELPGENT_BASE_URL . '/integrations/' );
define('THEME_HELPGENT_ROADMAP', THEME_HELPGENT_BASE_URL . '/roadmap/' );
define('THEME_HELPGENT_DOCUMENTATION', THEME_HELPGENT_BASE_URL . '/documentation/' );
define('THEME_HELPGENT_SUPPORT', THEME_HELPGENT_BASE_URL . '/support/' );
define('THEME_HELPGENT_ABOUT', THEME_HELPGENT_BASE_URL . '/about/' );

// Conditional URL
if ( function_exists('EDD') ) {
	define('THEME_DASHBOARD_URL', get_permalink( edd_get_option( 'purchase_history_page' ) ) );
}
else {
	define('THEME_DASHBOARD_URL', '' );
}

/*-------------------------------------
#. Includes
---------------------------------------*/
if (is_admin()) {
	require_once THEME_LIB_DIR . 'codestar-framework/codestar-framework.php';
}
require_once THEME_LIB_DIR . 'az-svg/init.php';
require_once THEME_LIB_DIR . 'sv-posts.php';

require_once THEME_INC_DIR . 'helper.php';
require_once THEME_INC_DIR . 'helper-functions.php';
require_once THEME_INC_DIR . 'options.php';
require_once THEME_INC_DIR . 'theme.php';
require_once THEME_INC_DIR . 'general.php';
require_once THEME_INC_DIR . 'scripts.php';
require_once THEME_INC_DIR . 'edd.php';
require_once THEME_INC_DIR . 'shortcodes.php';