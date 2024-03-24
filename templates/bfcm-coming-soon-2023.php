<?php

/**
 * Template Name: BFCM Coming Soon 2023
 *
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

 namespace Sovware\Theme;
?>
<?php get_header(); ?>

<section class="pricing-intro-area position-relative bfcm_pricing-intro bfcm-bg" style="background-image: url('<?php echo Helper::get_img( 'deal-bg.png' );?>');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center pricing-intro-content theme-bfcm theme-comming-soon">
                    <div class="mb-40 bfcm-img">
                        <img src="<?php echo Helper::get_svg('bfcm-and-after-2023.svg');?>" alt="business directory plugin for wordpress">
                    </div>
                    <div class="deal-sale-content">
                    <h1 class="intro-title display-2">ENJOY THE BIGGEST SALE OF THE YEAR <br> Don't Miss Out</h1>
                        <p class="start-end">The Deal is Launching After</p>
                        <div class="offer-countdown">
                            <ul class="list-unstyled">
                                <li><span class="loader-dot"></span><span>Days</span></li>
                                <li><span class="loader-dot"></span><span>Hours</span></li>
                                <li><span class="loader-dot"></span><span>Minutes</span></li>
                                <li><span class="loader-dot"></span><span>Seconds</span></li>
                            </ul>
					    </div>
                        <p>An exclusive offer is on the horizon. Be the first to get notified!</p>
                    </div>
                    <div class="subscription-box__form">
                        <?php echo do_shortcode('[fluentform id="4"]'); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .pricing-intro-area -->

<?php
get_footer();