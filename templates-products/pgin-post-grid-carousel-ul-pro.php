<?php
/**
 * Template Name: Post Grid, Slider and Carousel Ultimate Pro
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
            <div class="col-lg-8">
                <div class="wpwax-signle-product-banner__text theme-p-g-c-u text-center">
                    <h2>Post Grid, Slider and Carousel Ultimate Pro</h2>
                    <p>Display your blog posts in numerous grids & carousels to convert <br>readers into users.</p>
                    <div class="wpwax-signle-product-banner__button">
                        <a href="#single-plugin-pricing-plan"
                            class="btn btn-raised btn-success"><?php echo wpwax_icon( 'uil uil-shopping-cart', false); ?>Get
                            Now</a>
                        <a href="<?php echo PLUGIN_WOOCOMERCE_POST_GRID_PRO;?>" target="_blank"
                            class="btn btn-raised btn-primary"><?php echo wpwax_icon( 'uil uil-desktop', false); ?>Live
                            Preview</a>
                        <a href="https://wpwax.com/post-grid-carousel-ultimate-pro-roadmap/"
                            class="btn btn-outlined btn-white">Roadmap</a>
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
                    <a href="https://www.youtube.com/watch?v=hAVqsDftmF4"
                        class="wpwax-single-product-video-trigger"><?php echo Helper::the_svg( 'icons/play' ); ?></a>
                </div>
                <img src="<?php echo Helper::get_img( 'single-product/post-grid-carousel/single-img.png' );?>"
                    alt="Post Grid, Slider and Carousel Ultimate Pro">
            </div>
        </div>
    </div>
</section>

<section class="wpwax-single-product-overview pt-40 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="wpwax-single-product-overview-single media bg-success">
                    <div class="wpwax-single-product-overview-single__icon">
                        <img src="<?php echo Helper::get_svg('smile-cap.svg');?>" alt="wpWax Happy Customers">
                    </div>
                    <div class="wpwax-single-product-overview-single__content media-body">
                        <h4 class="wpwax-single-product-overview-single__content--counter">
                            <span class="wpwax-single-product-overview-single__content--count">1,000</span>
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
                            <span class="wpwax-single-product-overview-single__content--count">20,500</span>
                            <span class="wpwax-single-product-overview-single__content--sign">+</span>
                        </h4>
                        <p class="wpwax-single-product-overview-single__text">Total Downloads</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="wpwax-single-product-overview-single media bg-warning">
                    <div class="wpwax-single-product-overview-single__icon">
                        <img src="<?php echo Helper::get_svg('layers.svg');?>" alt="wpWax Grid & Carousel Styles">
                    </div>
                    <div class="wpwax-single-product-overview-single__content media-body">
                        <h4 class="wpwax-single-product-overview-single__content--counter">
                            <span class="wpwax-single-product-overview-single__content--count">20</span>
                            <span class="wpwax-single-product-overview-single__content--sign">+</span>
                        </h4>
                        <p class="wpwax-single-product-overview-single__text">Grid & Carousel Styles</p>
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
                <img class="mt-neg-md-15 mb-neg-md-30"
                    src="<?php echo Helper::get_img( 'single-product/post-grid-carousel/2.png' );?>"
                    alt="Easy Shortcode Generator and insert shortcode easily with Gutenberg editor">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 mb-md-30">
                    <div class="wpwax-product-feature-content">
                        <h3>Easy Shortcode Generator and insert shortcode easily with Gutenberg editor</h3>
                        <p>Post grid and carousel Ultimate Pro offers you an easy shortcode generator for each grid and
                            carousel you create. You can use the Gutenberg Editor to insert shortcodes on any page or
                            post on your site.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-features-area">
    <div class="container">
        <div class="row align-items-center pb-40 pb-md-0 mb-n-md-60 mt-sm-30">
            <div class="col-lg-6">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>20+ Different Themes for Carousel, Grid, Sortable Grid and Masonry!</h3>
                        <p>Beautify different layouts of your site like Carousel, Grid, Sortable Grid, and Masonry with
                            the stunning 21 themes the Post Grid and Carousel Ultimate Pro offers you. Each of them
                            adorns with specific designs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1">
                <img src="<?php echo Helper::get_img( 'single-product/post-grid-carousel/3.png' );?>"
                    alt="20+ Different Themes for Carousel, Grid, Sortable Grid and Masonry!">
            </div>
        </div>
        <div class="row align-items-center pb-20">
            <div class="col-lg-6 order-1 order-lg-0">
                <img src="<?php echo Helper::get_img( 'single-product/post-grid-carousel/4.png' );?>"
                    alt="Display popular, featured, latest, older and random posts">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 mt-m-70 mt-sm-30">
                    <div class="wpwax-product-feature-content">
                        <h3>Display popular, featured, latest, older and random posts</h3>
                        <p>Save your users valuable time by displaying your posts in different types like popular,
                            featured, latest, older and random. Make them free from the hassle of scrolling the mouse up
                            & down to find their favorite posts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-features-area">
    <div class="container">
        <div class="row align-items-center pb-40 pb-0">
            <div class="col-lg-6">
                <div class="pr-100 pr-m-0 pl-md-0 order-lg-1 order-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Display posts by category, IDs, tag, month, and year</h3>
                        <p>Every inch of your website counts. Organize your posts according to the category, IDs, tag,
                            month, and year. Let users pleasantly explore your posts so that they can provide better
                            feedback after reading them.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1 mt-md-30">
                <img src="<?php echo Helper::get_img( 'single-product/post-grid-carousel/5.png' );?>"
                    alt="Display posts by category, IDs, tag, month, and year">
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-features-area wpwax-single-product-feature-bg theme-2 pt-100 pb-60 pb-md-0">
    <div class="container">
        <div class="row justify-content-center pb-50">
            <div class="col-lg-8">
                <div class="wpwax-featured-product-content text-center">
                    <h2>100% Responsive & Mobile friendly</h2>
                    <p>Display your posts no matter what kinds of devices your users use. Post Grid and Carousel
                        Ultimate Pro is fully responsive on tablets and laptops. Moreover, this plugin is so friendly
                        for mobile phone users.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img src="<?php echo Helper::get_img( 'single-product/post-grid-carousel/6.png' );?>"
                    alt="100% Responsive & Mobile friendly">
            </div>
        </div>
        <div class="row align-items-center pb-20 pb-md-0">
            <div class="col-lg-6 order-1 order-lg-0">
                <img src="<?php echo Helper::get_img( 'single-product/post-grid-carousel/8.png' );?>"
                    alt="Customizable Post Title, Content, Image, Author Name, Date, Category, etc">
            </div>
            <div class="col-lg-6 order-lg-0 order-0">
                <div class="pl-100 pl-m-0 pr-md-0 mt-m-70 mt-md-0">
                    <div class="wpwax-product-feature-content">
                        <h3>Customizable Post Title, Content, Image, Author Name, Date, Category, etc</h3>
                        <p>Improve your posts’ quality by updating different elements using this awesome plugin. You Can
                            customize your posts based on the post title, content, image, author name, date, category,
                            etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpwax-product-feature-box-area wpwax-single-product-feature-bg pt-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header theme-small text-center">
                    <h2 class="display-3">Powerful Features</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Show/Hide Post Title, Content, Image, Author
                            Name, Date, Category, etc.e</h4>
                        <p>Display your posts by showing/hiding post title, content, image, author name, date, category,
                            etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Multiple Options for Post Terms Such As
                            Category, Post Tag, or Post Format</h4>
                        <p>You can use multiple options to classify your post terms such as category, post tag, or post
                            format.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Control Font Size, Weight, Alignment of Post
                            Title and Content</h4>
                        <p>Make your posts more eye-catching by adjusting the font size, weight, alignment of the post
                            title, and content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Specify the Scrolling Direction and Speed
                        </h4>
                        <p>You can help readers adjust their vision more comfortably by specifying the scrolling
                            direction and speed of your posts.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Dynamic Ajax Pagination</h4>
                        <p>Don’t let your users get bored just only for slow-loading pages. Display ajax pagination to
                            address users with a faster page loading experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Social Share Buttons</h4>
                        <p>You can share your blog posts more quickly among different social media platforms using the
                            ‘Social Share’ buttons.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Customizable Columns for Any Device</h4>
                        <p>Based on your needs, customize the number of columns for your posts on numerous devices like
                            tablets, laptops, and mobile.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title"> Excerpt Length Control</h4>
                        <p>You can control the length of your posts excerpt so that users can get an initial idea about
                            your posts within some specific lines.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Button and Link-Type “Read More”</h4>
                        <p>Display the ‘Read More’ option for your posts in two stunning ways like ‘Button’ and
                            ‘Link-Type’ for your users. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Show/Hide Navigation</h4>
                        <p>You can show/hide the ‘Navigation’ option to let your users see your posts more easily one
                            after another.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Customize the Navigation Arrows</h4>
                        <p>You can customize the navigation ‘Arrow color’ and ‘Hover Color’ to give a pleasant look to
                            your users’ eyes.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Image Resizing and Cropping</h4>
                        <p>Make your posts more proportionate and eye-catching to the users by enabling/disabling the
                            ‘Image Resizing & Cropping’ option.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Support All Modern Browsers</h4>
                        <p>You can smoothly use this plugin on any browser you want because it is fully supportive of
                            all modern browsers.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Autoplay and Repeat Carousel Items</h4>
                        <p>Make your users free from the hassle of scrolling the mouse repeatedly by activating the
                            ‘Autoplay’ and ‘Repeat Posts’ for carousel items.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo helper::get_svg('check-bold.svg');?>" alt="Check Bold">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">Button and Link-Type “Read More”</h4>
                        <p>Display the ‘Read More’ option for your posts in two stunning ways like ‘Button’ and
                            ‘Link-Type’ for your users. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="wpwax-single-product-feature-box theme-more">
                    <div class="wpwax-single-product-feature-box__icon">
                        <img src="<?php echo Helper::get_svg('check-violet.svg');?>" alt="Check Violet">
                    </div>
                    <div class="wpwax-single-product-feature-box__content">
                        <h4 class="wpwax-single-product-feature-box__title">And many more features</h4>
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