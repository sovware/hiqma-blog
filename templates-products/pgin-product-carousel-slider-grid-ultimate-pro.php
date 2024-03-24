<?php
/**
 * Template Name: WooCommerce Product Carousel Slider Grid Ultimate Pro New
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

<section class="wpwax-signle-product-banner wpwax-single-product-banner-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="wpwax-signle-product-banner__text text-center">
                    <h2>Product Carousel Slider and Grid Ultimate Pro for WooCommerce</h2>
                    <p>Display WooCommerce products using beautiful Carousel, Slider, and Grid on your website to
                        attract the audience.</p>
                    <div class="wpwax-signle-product-banner__button">
                        <a href="<?php echo PLUGIN_WOOCOMERCE_P_C_S_G_U_PRO;?>" target="_blank"
                            class="btn btn-raised btn-primary"><?php echo wpwax_icon( 'uil uil-desktop', false); ?>Live
                            Preview</a>
                        <a href="#single-plugin-pricing-plan"
                            class="btn btn-raised btn-success"><?php echo wpwax_icon( 'uil uil-shopping-cart', false); ?>Get
                            Now</a>
                    </div>
                    <div class="wpwax-signle-product-banner__links">
                        <a href="<?php echo esc_url( THEME_WOCOMERCE_CAROUSEL_SLIDER_GRID_ULTIMATE_DOC ); ?>"
                            target="_blank"><?php echo wpwax_icon( 'uil uil-file-alt', false); ?> Documentation</a>
                        <a href="<?php echo esc_url( THEME_WOCOMERCE_CAROUSEL_SLIDER_GRID_ULTIMATE_ROADMAP ); ?>"
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
                    style="background-image: url('<?php echo Helper::get_img( 'woocomerce-grid-slider.png' );?>'); background-size: cover;">
                    <a href="https://www.youtube.com/watch?v=gTqz7b67bM8"
                        class="wpwax-single-product-video-trigger"><?php echo Helper::the_svg( 'icons/play' ); ?> </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="wpwax-single-product-img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php //echo Helper::get_img( 'single-product/woocomerce-carousel/single-img.png' );?>" alt="wpwax">
            </div>
        </div>
    </div>
</section> -->

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
                            <span class="wpwax-single-product-overview-single__content--count">120000</span>
                            <span class="wpwax-single-product-overview-single__content--sign">+</span>
                        </h4>
                        <p class="wpwax-single-product-overview-single__text">Total Downloads</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-single-product-overview-single media bg-warning">
                    <div class="wpwax-single-product-overview-single__icon">
                        <img src="<?php echo Helper::get_svg('layers.svg');?>" alt="wpWax Different Themes">
                    </div>
                    <div class="wpwax-single-product-overview-single__content media-body">
                        <h4 class="wpwax-single-product-overview-single__content--counter">
                            <span class="wpwax-single-product-overview-single__content--count">25</span>
                            <span class="wpwax-single-product-overview-single__content--sign">+</span>
                        </h4>
                        <p class="wpwax-single-product-overview-single__text">Different Themes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-features-area wpwax-single-product-feature-bg pt-100 pb-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Generate Shortcode and Use it on Any Page</h3>
                        <p>WooCommerce Product Carousel allows you to generate a special shortcode aging each of the
                            sliders you’re created. You can create your product slider with all your fancy and embed it
                            using an auto-generated shortcode</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1">
                <img class="mb-neg-md-60" src="<?php echo Helper::get_svg('woocomerce-carousel/2.svg');?>"
                    alt="Generate Shortcode and Use it on Any Page">
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-features-area">
    <div class="container">
        <div class="row align-items-center pb-20">
            <div class="col-lg-6 order-1 order-lg-0">
                <img class="mt-neg-md-15 mb-neg-md-30" src="<?php echo Helper::get_svg('woocomerce-carousel/3.svg');?>"
                    alt="Style Your Grid & Carousel Layout">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 m-md-b">
                    <div class="wpwax-product-feature-content">
                        <h3>Style Your Grid & Carousel Layout</h3>
                        <p>WooCommerce Product Carousel comprises options that can be used to style your product slider
                            with the grid system. You can also design your carousel layout as your preference.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center pb-40">
            <div class="col-lg-6">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Display Special Featured Listing Badges</h3>
                        <p>WooCommerce Product Carousel provides an opportunity for the site owner to display badges
                            like <strong>On Sale, Best Selling, Top-rated,</strong> and featured products. You also get
                            a ribbon/badge for showing out-of-stock products.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1">
                <img class="mt-neg-md-45 mb-neg-md-80" src="<?php echo Helper::get_svg('woocomerce-carousel/4.svg');?>"
                    alt="Display Special Featured Listing Badges">
            </div>
        </div>
        <div class="row align-items-center pb-40">
            <div class="col-lg-6 order-1 order-lg-0">
                <img class="mb-neg-md-50 mt-md-20" src="<?php echo Helper::get_svg('woocomerce-carousel/5.svg');?>"
                    alt="Demonstrate Products in Various Ways">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 m-md-b mt-m-40">
                    <div class="wpwax-product-feature-content">
                        <h3>Demonstrate Products in Various Ways</h3>
                        <p>As an owner of the eCommerce store, using the WooCommerce Product Slider plugin, you can have
                            numerous scopes to present your products. You can display your products by ID, SKU, tags,
                            category, month, year, and randomly as well./p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-features-area wpwax-single-product-feature-bg theme-2 pt-100">
    <div class="container">
        <div class="row justify-content-center pb-50">
            <div class="col-lg-7">
                <div class="wpwax-featured-product-content text-center">
                    <h2>Make Your Product Showcase Responsive</h2>
                    <p>WooCommerce Product Carousel is responsive to any kind of device you can use. You can control a
                        number of products on desktop, tablet, and mobile devices in the same responsive way.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img src="<?php echo Helper::get_svg('woocomerce-carousel/6.svg');?>"
                    alt="Make Your Product Showcase Responsive">
            </div>
        </div>
        <div class="row align-items-center pb-50">
            <div class="col-lg-6">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Stylize the Carousel Elements with Preferred Theme</h3>
                        <p>Want to design your slider as your own? Get an easy and flexible way to style carousel
                            elements to personalize your product slider. You will get grid and carousel layout styles to
                            personalize your product slider.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1">
                <img class="mb-neg-md-70" src="<?php echo Helper::get_svg('woocomerce-carousel/7.svg');?>"
                    alt="Stylize the Carousel Elements with Preferred Theme">
            </div>
        </div>
        <div class="row align-items-center pb-10">
            <div class="col-lg-6 order-1 order-lg-0">
                <img class="mb-neg-md-70" src="<?php echo Helper::get_svg('woocomerce-carousel/8.svg');?>"
                    alt="Resize Images and Crop Them Comprehensively">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 m-md-b">
                    <div class="wpwax-product-feature-content">
                        <h3>Resize Images and Crop Them Comprehensively</h3>
                        <p>Use the most fitted images for displaying your products through your slider. This plugin will
                            help you to have an auto image resize facility and crop it automatically to adjust with the
                            slider layout.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Customize Ribbon/Badge</h3>
                        <p>Personalize each of the Ribbons/badges by customizing with no time. You can edit “read more”
                            and ribbon/badge text as you wish to for on sale, featured, and out-of-stock products.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1">
                <img class="mt-neg-md-30 mb-neg-md-40" src="<?php echo Helper::get_svg('woocomerce-carousel/9.svg');?>"
                    alt="Customize Ribbon/Badge">
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-feature-box-area wpwax-single-product-feature-bg pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header theme-small text-center">
                    <h2 class="display-3">Powerful Features</h2>
                </div>
            </div>
        </div>
        <div class="row pb-90">
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Show a “Quick View” button for product
                            details</h4>
                        <p>If you want to know more details about the product, this will help you make it happen.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Add to wishlist option</h4>
                        <p>Make your preferred slider as favourite like bookmark using this option.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Marquee autoplay type</h4>
                        <p>Define the product slider as marquee autoplay to show product one after another.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Scroll by per item or page</h4>
                        <p>You can run your slider according to individual products or pages.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Specify the scrolling direction and speed
                        </h4>
                        <p> You can define the direction and speed of the slide show whether it is from the right or
                            left side.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box min-height-320">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Product excerpt and <br> limit its words
                        </h4>
                        <p>Craft the product excerpt and limit its words as your wish.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Edit `Read more’ and Ribbon/Badge texts</h4>
                        <p>You can write and edit the text of ‘Read more’ and Ribbon/Badge text using the option.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title"> Display/hide excerpt <br> with font size
                            and color change options</h4>
                        <p> Control the color and font size with display/hide options of excerpt.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title"> Ribbon/badge for <br> on sale, featured,
                            and <br> out-of-stock products</h4>
                        <p> You can set badge/ribbon for each status of your product like on sale, featured, and
                            out-of-stock.</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title"> Define the product numbers in various
                            devices</h4>
                        <p> Control the number of products to display on desktop, tablet, and mobile devices.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box min-height-340">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title"> Enable/disable hover effect on the product
                            image</h4>
                        <p> You can enable hover effect of an individual product item or you can disable it.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box min-height-340">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title"> Display/hide the out-of-stock products</h4>
                        <p>Make sure that your products are available or not in the store using options.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center theme-small">
                    <h2 class="display-3">Also It Has Features Like</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo Helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Advanced settings panel</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Unique settings for each carousel slider
                        </h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Unlimited products display</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Unlimited carousel slider</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Control number of products to be displayed
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Image upscaling enable/disable</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Display/hide Title, pirce, star ratings,
                            excerpt and cart button</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Autoplay control</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Slide Speed control</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Navigational arrow color and background
                            color change options</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Mouse over stop</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">100% Responsive and mobile friendly</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Support all modern browsers</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Translation ready</h4>
                    </div>
                </div>
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">Touch and Swipe Enabled so works great on
                            devices like iPhone, iPad, Blackberry, Android etc.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-single-product-testimonial-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/cavuapparel.png' );?>" alt="cavuapparel">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">cavuapparel</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>Very Functional Plugin for displaying products</h4>
                        <p>This plugin is an excellent addition to the Woocommerce product display. By allowing a Quick
                            Look and a Favorites function it gives any site a professional look...</p>
                    </div>
                </div>
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/esolutionni.png' );?>" alt="esolutionni">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">cavuapparel</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>this app and the support are first class</h4>
                        <p>these guys were so helpful – i love the plugin and am using the free version; they still gave
                            me support regardless.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/webily.png' );?>" alt="webily">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">webily</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>Very good plugin!</h4>
                        <p>I love the plugin. It helped me add product carousels to the homepage of my website.</p>
                    </div>
                </div>
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/zcesl53.png' );?>" alt="zcesl53">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">zcesl53</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>Great Plugin, with amazing support</h4>
                        <p>This plug-in works well, but that is true of a lot of plugins. What really makes the plugin
                            stand out is <br> 1) Flexibility – it has support for tags, categories and lots of other
                            fields that allow you to configure it to show exactly what...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/bythebootstrap.png' );?>"
                                    alt="bythebootstrap">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">bythebootstrap</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>Good plugin, with support to match</h4>
                        <p>This plugin did what I needed, which is pretty specific with detailed stylings. When I had an
                            issue inserting span tags into product titles, they made changes to their...</p>
                    </div>
                </div>
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/mrbugx.png' );?>" alt="mrbugx">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">mrbugx</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>best plugin</h4>
                        <p>For my workplace project I had to use a plugin, I was looking for a plugin to meet my needs,
                            it is extremely great and powerful and solved my problem...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/product-pricing'); ?>
<?php get_template_part('template-parts/product-support'); ?>

<section class="our-value-area pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-header">
                    <h1 class="display-3">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-accordion">

                    <?php Helper::faq_html('How to create shortcode?','<p><strong>Step - i:</strong> Create a new product carousel by clicking on the "Add New" from the "Woocommerce Product Ultimate" menu.</p><p> <strong>Step - ii:</strong> Customize different options of the carousel and click on the "Publish" button.</p><p> <strong>Step - iii:</strong> Copy the shortcode from the bottom of the page. For example: [wcpcsu id="123"]</p><p> <strong>Step - iv:</strong> Paste the shortcode on any page or post where you would like to display the product carousel.</p>', true);?>

                    <?php Helper::faq_html('Can I use all the features of the free version in pro?','Yes, you can use all features of free version in pro version');?>

                    <?php Helper::faq_html('Can this plugin be used to display product categories as well?','No, the plugin is capable of displaying the products only.');?>

                    <?php Helper::faq_html('Does this plugin work with any theme or page builders?','Theoretically, yes, the plugin should work with any WooCommerce compatible theme or page builders. Also, a dedicated support team is always ready to help you with any issues you might come across.');?>

                    <?php Helper::faq_html('Can I customize the product sliders or grids?','Yes, the plugin comes with all sorts of built-in settings to provide you customizability options. You can also make changes within the plugin codes to meet your custom needs.');?>


                    <?php get_template_part('template-parts/product-common-faqs'); ?>

                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .our-value-area -->

<?php
get_footer();