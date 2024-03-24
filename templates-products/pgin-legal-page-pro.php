<?php
/**
 * Template Name: Legal page Pro
 * Template Post Type: download
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script( 'waypoints' );
	wp_enqueue_script( 'jquery-counterup' );
}, 14 );


$download_id = get_the_ID();

get_header();
?>

<section class="wpwax-signle-product-banner wpwax-single-product-banner-bg wpwax-single-product-banner-video theme-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="wpwax-signle-product-banner__text text-center">
                    <h2>Legal Pages Pro</h2>
                    <p>This plugin comes with options to place suitable legal pages on your websites.</p>
                    <div class="wpwax-signle-product-banner__button">
                        <a href="#single-plugin-pricing-plan"
                            class="btn btn-raised btn-success"><?php echo wpwax_icon( 'uil uil-shopping-cart', false); ?>Get
                            Now</a>
                    </div>
                    <div class="wpwax-signle-product-banner__links">
                        <a href="<?php echo esc_url( THEME_LEGAL_PAGES_DOC ); ?>"
                            target="_blank"><?php echo wpwax_icon( 'uil uil-file-alt', false); ?> Documentation</a>
                        <a href="<?php echo esc_url( THEME_LEGAL_PAGES_ROADMAP ); ?>"
                            target="_blank"><?php echo Helper::the_svg( 'icons/time-fast' ); ?> <span>Roadmap</span></a>
                    </div>
                    <?php get_template_part( 'template-parts/single-product/banner-links' ) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-single-product-video">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="wpwax-single-product-video-bg"
                    style="background-image: url('<?php echo Helper::get_img( '02_Legal Pages.png' );?>'); background-size: cover;">
                    <a href="https://www.youtube.com/watch?v=-7e350mgVZs"
                        class="wpwax-single-product-video-trigger"><?php echo Helper::the_svg( 'icons/play' ); ?> </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-single-product-overview pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="wpwax-single-product-overview-single media bg-success">
                    <div class="wpwax-single-product-overview-single__icon">
                        <img src="<?php echo Helper::get_svg('smile-cap.svg');?>" alt="wpWax Happy Customers">
                    </div>
                    <div class="wpwax-single-product-overview-single__content media-body">
                        <h4 class="wpwax-single-product-overview-single__content--counter">
                            <span class="wpwax-single-product-overview-single__content--count">10000</span>
                            <span class="wpwax-single-product-overview-single__content--sign">+</span>
                        </h4>
                        <p class="wpwax-single-product-overview-single__text">Happy Customers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-single-product-overview-single media bg-danger">
                    <div class="wpwax-single-product-overview-single__icon">
                        <img src="<?php echo Helper::get_svg('download.svg');?>" alt="wpWax Total Downloads">
                    </div>
                    <div class="wpwax-single-product-overview-single__content media-body">
                        <h4 class="wpwax-single-product-overview-single__content--counter">
                            <span class="wpwax-single-product-overview-single__content--count">54000</span>
                            <span class="wpwax-single-product-overview-single__content--sign">+</span>
                        </h4>
                        <p class="wpwax-single-product-overview-single__text">Total Downloads</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-single-product-overview-single media bg-warning">
                    <div class="wpwax-single-product-overview-single__icon">
                        <img src="<?php echo Helper::get_svg('layers.svg');?>" alt="wpWax Legal Page Ready Templates">
                    </div>
                    <div class="wpwax-single-product-overview-single__content media-body">
                        <h4 class="wpwax-single-product-overview-single__content--counter">
                            <span class="wpwax-single-product-overview-single__content--count">26</span>
                            <span class="wpwax-single-product-overview-single__content--sign">+</span>
                        </h4>
                        <p class="wpwax-single-product-overview-single__text">Legal Page Ready Templates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-feature-box-area wpwax-single-product-feature-bg pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center theme-small">
                    <h2 class="display-3">26 Legal Page Ready Templates</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo Helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Advertising Disclosures</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Terms of Use</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Cookie Privacy Policy</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Linking Policy</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Medical Disclaimer</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Affiliate Disclosure</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Digital Goods Refund Policy</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">GDPR Privacy Policy <span
                                class="badge badge-pink">new</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Confidentiality Disclosure</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">California Privacy Rights</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Earnings Disclaimer</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Refund-Policy</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Amazon Affiliate</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">FB Policy</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">GDPR Cookie Policy <span
                                class="badge badge-pink">new</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">End-user License Agreement</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Privacy Policy</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Disclaimer</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Affiliate Agreement</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Double Dart Cookie</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">About Us</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">California Consumer Privacy Act (CCPA) <span
                                class="badge badge-pink">new</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Forced Agreement to <br>the Terms</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">EU Privacy Policyy</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Testimonials Disclosure</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Antispam</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">External Links Policy</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">DMCA</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2 theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('icons/check-transparent.svg');?>"
                            alt="Transparent Check Icon">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">COPPA - Children’s Online Privacy Policy
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-features-area bg-gradient-feature pt-110 pb-90">
    <div class="container">
        <div class="row align-items-center pb-30">
            <div class="col-lg-5">
                <div class="pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Easy one-click legal template insertion into pages</h3>
                        <p>With just a simple mouse click, you can smoothly insert any legal template into a new page.
                            You don’t need to worry about designing the templates as they are well written to serve any
                            of your legal page needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-lg-0 order-1">
                <img src="<?php echo Helper::get_img( 'single-product/legal-pages/1.png' );?>"
                    alt="Easy one-click legal template insertion into pages">
            </div>
        </div>
        <div class="row align-items-center pb-0 mb-n-20">
            <div class="col-lg-7 order-1 order-lg-0">
                <img src="<?php echo Helper::get_img( 'single-product/legal-pages/2.png' );?>"
                    alt="Edit and Customize Legal Templates Using WP Editor">
            </div>
            <div class="col-lg-5 order-lg-0 order-0">
                <div class="pl-m-0 pr-md-0 m-md-b mt-m-40">
                    <div class="wpwax-product-feature-content">
                        <h3>Edit and Customize Legal Templates Using WP Editor</h3>
                        <p>Legal Pages offers you an advanced WP Editor to edit and customize legal templates. The
                            editor is flexible enough for you to add or delete any information in it based on your
                            demands. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center pb-40">
            <div class="col-lg-7">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Ability to Add a New Page Template or Custom Policy Templates</h3>
                        <p>Besides using the default templates, you have freedom to create a new page template based on
                            the information you provide manually. There is also an option to customize the default
                            policy templates according to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-lg-0 order-1">
                <img src="<?php echo Helper::get_img( 'single-product/legal-pages/3.png' );?>"
                    alt="Ability to Add a New Page Template or Custom Policy Templates">
            </div>
        </div>
        <div class="row align-items-center pb-40">
            <div class="col-lg-7 order-1 order-lg-0">
                <img src="<?php echo Helper::get_img( 'single-product/legal-pages/4.png' );?>"
                    alt="More Than 15 Shortcodes That Can Be Used on the Templates">
            </div>
            <div class="col-lg-5 order-lg-0 order-0">
                <div class="pl-m-0 pr-md-0 m-md-b mt-m-40">
                    <div class="wpwax-product-feature-content">
                        <h3>More Than 15 Shortcodes That Can Be Used on the Templates</h3>
                        <p>Design your customizable templates with more than 15 shortcodes this plugin offers you. These
                            shortcodes highlight your personal and website-related information and help you instantly
                            create new templates.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center pb-110">
            <div class="col-lg-5">
                <div class="pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Create Unlimited Pop-ups and Display on Any Page Using Shortcode</h3>
                        <p>Generate unlimited pop-ups using your content, or you can choose a default template and
                            customize its content based on your demands. Use the shortcodes to display the newly
                            generated pop-ups on any page.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-lg-0 order-1 text-right">
                <img src="<?php echo Helper::get_img( 'single-product/legal-pages/5.png' );?>"
                    alt="More Than 15 Shortcodes That Can Be Used on the Templates">
            </div>
        </div>
        <div class="row align-items-center pb-100">
            <div class="col-lg-7 order-1 order-lg-0">
                <img src="<?php echo Helper::get_img( 'single-product/legal-pages/6.png' );?>"
                    alt="Customize and Display Cookie Bars in Your Favorite Position">
            </div>
            <div class="col-lg-5 order-lg-0 order-0">
                <div class="pl-m-0 pr-md-0 m-md-b mt-m-40">
                    <div class="wpwax-product-feature-content">
                        <h3>Customize and Display Cookie Bars in Your Favorite Position</h3>
                        <p>Depending on your choice, you are free to customize and display cookie bars on your favourite
                            window positions. There are six cookie bar display positions for you; at the bottom, at
                            bottom-left, at bottom right, at the top, at top-left, at top-right.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="wpwax-single-product-feature-box theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Apply Personal and Site Information to the
                            Legal Pages Automatically</h4>
                        <p>Your time is precious. Considering this, Legal Pages saves your valuable time by
                            automatically updating the legal page with the personal and site information you provided in
                            the general settings before.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-single-product-feature-box theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">4 Different Cookie Bar Layout</h4>
                        <p>Design your cookie bar with four stunning layouts. So, attract users to your legal pages by
                            displaying a cookie bar with any of these eye-catching layouts. The four cookie bar layouts
                            are; block, classic, edgeless, wire.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-single-product-feature-box theme-4">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Create Pop-ups Based on the Legal Page
                            Templates</h4>
                        <p>Create pop-ups based on the 26 awesome legal page templates you get with this plugin. As
                            there is the scope to create pop-ups from different legal page templates, users will find
                            different content styles in different pop-ups.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-10 wpwax-award-winning-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="award-winning">
                    <div class="mb-0 display-6 lh-1 text-warning award-winning__left">
                        <img src="<?php echo helper::get_svg('award-wining.svg');?>">
                    </div>
                    <div class="mb-0 award-winning__right">
                        <h2>An Award Winning Plugin</h2>
                        <p class="mb-0">Create beautiful usability design is to improve the usability of a product,
                            which is an important part to guide the docs actual design your work with anyone.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/product-pricing'); ?>
<?php get_template_part('template-parts/product-support'); ?>
<?php get_template_part('template-parts/product-faq'); ?>

<?php
get_footer();