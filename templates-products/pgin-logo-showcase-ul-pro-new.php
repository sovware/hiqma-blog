<?php
/**
 * Template Name: Logo Showcase Ultimate Pro New
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
                    <h2>Logo Showcase Ultimate Pro</h2>
                    <p>Set up your WordPress logo slider and showcase it in a responsive way using a shortcode with just
                        a few clicks.</p>
                    <div class="wpwax-signle-product-banner__button">
                        <a href="<?php echo PLUGIN_WOOCOMERCE_L_S_U_P_PRO;?>" target="_blank"
                            class="btn btn-raised btn-primary"><?php echo wpwax_icon( 'uil uil-desktop', false); ?>Live
                            Preview</a>
                        <a href="#single-plugin-pricing-plan"
                            class="btn btn-raised btn-success"><?php echo wpwax_icon( 'uil uil-shopping-cart', false); ?>Get
                            Now</a>
                    </div>

                    <?php get_template_part( 'template-parts/single-product/banner-links' ) ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-single-product-img theme-video-trigger">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpwax-single-product-video-trigger-box">
                    <a href="https://www.youtube.com/watch?v=-LYwBu783yc"
                        class="wpwax-single-product-video-trigger"><?php echo Helper::the_svg( 'icons/play' ); ?></a>
                </div>
                <img src="<?php echo Helper::get_img( 'single-product/logo-showcase/single-img.png' );?>"
                    alt="Logo Showcase Ultimate Pro">
            </div>
        </div>
    </div>
</section>

<section class="wpwax-single-product-overview pt-40 pb-130">
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
        <div class="row align-items-center pb-20">
            <div class="col-lg-6 order-1 order-lg-0">
                <img class="mt-neg-md-15 mb-neg-md-30" src="<?php echo Helper::get_svg('woocomerce-carousel/2.svg');?>"
                    alt="Easy Shortcode Based Logo Showcase">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 m-md-b">
                    <div class="wpwax-product-feature-content">
                        <h3>Easy Shortcode Based Logo Showcase</h3>
                        <p>Logo Showcase Ultimate Pro comes with an auto-generated shortcode facility that you can use
                            to insert logo slider inside pages and posts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-features-area">
    <div class="container">
        <div class="row align-items-center pb-40">
            <div class="col-lg-6">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>24+ Amazing Grid Widgets & Sliders</h3>
                        <p>showcase logo widgets with options of the slider or grid widgets to choose from and make the
                            most out of the website by increasing the brand value.</p>
                        <ul class="feature-list list-unstyled ml-0 mb-0 pl-0">
                            <li><?php echo Helper::the_svg( 'icons/check-green' ); ?> <span
                                    class="feature-list__text">100% Responsive carousel and grid themes with all modern
                                    browsers</span></li>
                            <li><?php echo Helper::the_svg( 'icons/check-green' ); ?> <span
                                    class="feature-list__text">16 modern carousel themes</span></li>
                            <li><?php echo Helper::the_svg( 'icons/check-green' ); ?> <span class="feature-list__text">8
                                    modern grid themes</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1">
                <img src="<?php echo Helper::get_img( 'single-product/logo-showcase/3.png' );?>"
                    alt="24+ Amazing Grid Widgets & Sliders">
            </div>
        </div>
        <div class="row align-items-center pb-20">
            <div class="col-lg-6 order-1 order-lg-0">
                <img src="<?php echo Helper::get_img( 'single-product/logo-showcase/4.png' );?>"
                    alt="Showcase Your Logos by Category, ID, and More">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 mt-m-70">
                    <div class="wpwax-product-feature-content">
                        <h3>Showcase Your Logos by Category, ID, and More</h3>
                        <p>Logo Showcase Ultimate allows you to display all your preferred logos in various ways. You
                            can display your logos by category, ID, randomly, yearly, latest, and older published.</p>
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
                    <h2>Display a Number of Logos and Control them in Responsive Ways</h2>
                    <p>Want to show a personalized logo? Logo Showcase Ultimate Pro allows you to have a comprehensive
                        way to make it happen. You can display all your logos in a fully responsive way through all the
                        devices.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img src="<?php echo Helper::get_img( 'single-product/logo-showcase/5.png' );?>"
                    alt="Display a Number of Logos and Control them in Responsive Ways">
            </div>
        </div>
        <div class="row align-items-center pb-50">
            <div class="col-lg-6">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Use Personalized Grid/Carousel Elements</h3>
                        <p>Customize & style the logo slider with grid/carousel elements as your need. You can modify or
                            change Grid/Carousel title color and font size using options.</p>
                        <ul class="feature-list list-unstyled ml-0 mb-0 pl-0">
                            <li><?php echo Helper::the_svg( 'icons/check-green' ); ?> <span
                                    class="feature-list__text">An easy way to manage grid/carousel elements.</span></li>
                            <li><?php echo Helper::the_svg( 'icons/check-green' ); ?> <span
                                    class="feature-list__text">Enable/Disable image hover effect.</span></li>
                            <li><?php echo Helper::the_svg( 'icons/check-green' ); ?> <span
                                    class="feature-list__text">Tooltip position, font size, text, and background color
                                    change options.</span></li>
                            <li><?php echo Helper::the_svg( 'icons/check-green' ); ?> <span
                                    class="feature-list__text">Navigation arrows, background, and hover color change
                                    options.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1">
                <img src="<?php echo Helper::get_img( 'single-product/logo-showcase/6.png' );?>"
                    alt="Use Personalized Grid/Carousel Elements">
            </div>
        </div>
        <div class="row align-items-center pb-10">
            <div class="col-lg-6 order-1 order-lg-0">
                <img src="<?php echo Helper::get_img( 'single-product/logo-showcase/7.png' );?>"
                    alt="Auto Resize and Cropping Option to Adjust the New Images">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 m-md-b">
                    <div class="wpwax-product-feature-content">
                        <h3>Auto Resize and Cropping Option to Adjust the New Images</h3>
                        <p>Images are crucial for optimizing your website. With Logo carousel, you’ll get options to
                            resize and crop logo images for serving your purposes. You can adjust all the resized images
                            with any kind of theme you want to use.</p>
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
                <div class="section-header theme-small text-center">
                    <h2 class="display-3">Powerful Features</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="wpwax">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">100% Responsive Logo Showcase</h4>
                        <p>Get a fully responsive logo showcase facility with types of devices.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="wpWax Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Enable/Disable Hover Effect</h4>
                        <p>Control the hover effect on the logo by enabling/disabling the hover effect.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="wpWax Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Specify the Number of Logos</h4>
                        <p>Define how many logos you want to put on your logo slider to showcase.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="wpWax Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Choose Between Touch & Swipe</h4>
                        <p>Get the Touch & Swipe enabled for the devices like iPhone, iPad, Android, and so on.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="wpWax Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Dynamic Ajax Pagination</h4>
                        <p>Experience the rocket-fast pagination while you need to move to the next pages.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box min-height-320">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="wpWax Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Column Customization</h4>
                        <p>Customize any column that you need for serving your purposes on any kind of device.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="wpWax Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Autoplay & Repeat Carousel Items</h4>
                        <p>Use the autoplay & repeat option for your carousel items for having continuous sliding flow.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="wpWax Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title"> Specify the Scrolling Direction & Speed
                        </h4>
                        <p> Define the speed and direction of the slider while it’s working on your website.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wpwax-single-product-feature-box media theme-2">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo Helper::get_svg('check-bold.svg');?>" alt="wpWax Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content media-body">
                        <h4 class="wpwax-single-product-feature-box__title">And many more...</h4>
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
                                <img src="<?php echo Helper::get_img( 'clients/12.png' );?>" alt="latrock">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">flatrock</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>Great App Backed by great support</h4>
                        <p>It’s not often you get this level of support and quick response from a developer. I had some
                            suggestions regarding listing Alphabetically and by Category at the same time, Musad added
                            that feature to the version update almostimmediately so all could benefit. Great job! I
                            highly recommend this plug-in!</p>
                        <p>Besides that, the tool is very easy to use and does what it should!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/4.png' );?>" alt="wells100">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">wells100</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>Great Job</h4>
                        <p>Best Logo plugin I’ve found.</p>
                    </div>
                </div>
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/ihtsharm.png' );?>" alt="ihtsharm">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">ihtsham</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>amazing support</h4>
                        <p>The plugin does the job we were looking for, the most amazing thing is the support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-testimonial-card">
                    <div class="wpwax-testimonial-card__author">
                        <div class="wpwax-testimonial-card__author--info">
                            <div class="wpwax-testimonial-card__author-img">
                                <img src="<?php echo Helper::get_img( 'clients/9.png' );?>" alt="Tiago Brazil">
                            </div>
                            <div class="wpwax-testimonial-card__author--content">
                                <div class="wpwax-testimonial-card__author--rating">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                    <img src="<?php echo helper::get_svg('icons/star.svg');?>">
                                </div>
                                <h5 class="wpwax-testimonial-card__author-name">Tiago Brazil</h5>
                            </div>
                        </div>
                        <div class="wpwax-testimonial-card__site-logo">
                            <img src="<?php echo Helper::get_img( 'wordpress.png' );?>" alt="WordPress">
                        </div>
                    </div>
                    <div class="wpwax-testimonial-card__content">
                        <h4>Great plugin!</h4>
                        <p>This plugin is really awesome. Adds, manages and displays partner or customer logos and the
                            best, you can choose to sort the logos display or select by categories. I am very satisfied.
                        </p>
                        <p>I bought the PRO version</p>
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

                    <?php Helper::faq_html('Does this plugin work with any theme or page builders?','Theoretically, yes, the plugin should work with any theme or page builders. Also, a dedicated support team is always ready to help you with any issues you might come across.');?>

                    <?php Helper::faq_html('Is the plugin responsive?','Yes, Logo Showcase Ultimate Pro works with all types of devices.');?>

                    <?php get_template_part('template-parts/product-common-faqs'); ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .our-value-area -->


<?php
get_footer();