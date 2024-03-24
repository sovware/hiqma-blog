<?php
/**
 * Template Name: Memorable day Pricing Page
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header();
?>

<section class="pricing-intro-area position-relative bfcm_pricing-intro memorable-day-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pricing-intro-content text-center theme-bfcm theme-ramadan theme-eid">
                    <div class="memorable-sale-img">
                        <img src="<?php echo Helper::get_svg('memorable-intro-img.svg');?>">
                    </div>
                    <!-- Without Deals -->
                    <h2>Celebrate Memorial Day with <span class="highlighted">25%</span> off on plans! </h2>
                    <p class="start-end">Offer Will End After</p>
                    <div class="offer-countdown memorable-countdown"></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .pricing-intro-area -->

<div class="pricing-plan-area pb-140 bfcm_pricing-plan">
    <div class="container">
        <div class="pricing-plan-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="pricing-body">
                        <div class="prcing-plans d-flex justify-content-center">
                            <div class="prcing-plans__single bfcm-pricing-single">
                                <div class="prcing-plans__top">
                                    <h5>Agency Bundle 1 Year</h5>
                                    <ul class="pricing-meta list-unstyled">
                                        <li><span class="color-primary primary">11 Products</span></li>
                                        <li><span class="color-info info">Unlimited Sites</span></li>
                                    </ul>
                                    <span class="pricing-price">
                                        <span class="old-price"><del>$139.99</del></span>
                                        <span class="currency">$</span>
                                        <span class="price-text">104.99</span>
                                        <span class="day-limit">/ year</span>
                                    </span>
                                </div>
                                <div class="prcing-plans__list">
                                    <ul class="list-unstyled mb-0 ml-0">
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Product Carousel Slider and Grid Ultimate Pro for
                                                WooCommerce</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Logo Showcase Ultimate Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Post Grid, Slider and Carousel Ultimate Pro</span>
                                        </li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">TableGen – Data Table Generator</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Legal Pages Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Team Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Pricing Table Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Post Slider Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">WooCommerce Product Carousel Slider Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Logo Carousel Slider Pro</span></li>
                                    </ul>
                                </div>
                                <div class="prcing-plans__bottom">
                                    <a href="<?php echo Helper::edd_checkout_url(18576,1); ?>"
                                        class="btn btn-primary btn-md btn-transparent">Buy Now</a>
                                </div>
                            </div>
                            <div class="prcing-plans__single bfcm-pricing-single active">
                                <div class="pricing-shadow"></div>
                                <div class="prcing-plans__top">
                                    <span class="badge badge-sm bg-pink badge-top">Best Value</span>
                                    <h5>Agency Bundle Lifetime</h5>
                                    <ul class="pricing-meta list-unstyled">
                                        <li><span class="color-primary">11 Products</span></li>
                                        <li><span class="color-info">Unlimited Sites</span></li>
                                    </ul>
                                    <span class="pricing-price">
                                        <span class="old-price"><del>$399.99</del></span>
                                        <span class="currency">$</span>
                                        <span class="price-text">299.99</span>
                                    </span>
                                </div>
                                <div class="prcing-plans__list">
                                    <ul class="list-unstyled mb-0 ml-0">
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Product Carousel Slider and Grid Ultimate Pro for
                                                WooCommerce</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Logo Showcase Ultimate Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Post Grid, Slider and Carousel Ultimate Pro</span>
                                        </li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">TableGen – Data Table Generator</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Legal Pages Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Team Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Pricing Table Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Post Slider Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">WooCommerce Product Carousel Slider Pro</span></li>
                                        <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span
                                                class="list-text">Logo Carousel Slider Pro</span></li>
                                    </ul>
                                </div>
                                <div class="prcing-plans__bottom">
                                    <a href="<?php echo Helper::edd_checkout_url(18576,2); ?>"
                                        class="btn btn-primary btn-md btn-raised">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- ends: .pricing-plan-area -->

<div class="money-back-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="money-backbox d-flex">
                    <div class="money-backbox__left">
                        <div class="money-backbox__image">
                            <img src="<?php echo Helper::get_img( 'refund-img.png' );?>" alt="Money Back Guarantee!">
                        </div>
                    </div>
                    <div class="money-backbox__right">
                        <h2>100% Risk-Free <br> Money Back Guarantee!</h2>
                        <p>If you realize that our product doesn't meet your need within the first 14 days following the
                            purchase date, we’ll be happy to honor you for a full refund. No questions asked!</p>
                        <a target="__blank" href="<?php echo THEME_REFUND_POLICY_URL;?>" class="btn-link">Our Refund
                            Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- ends: .money-back-block -->

<section class="our-value-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-header">
                    <h1 class="display-2">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-accordion">
                    <div class="faq-accordion__single acive">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-1" aria-expanded="true"
                                aria-controls="faq-body-1">
                                <span class="header-text">Can I purchase single extensions?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-1" class="faq-single-body collapse show">
                            <div class="body-inner">
                                <p>
                                    Yes, you can definitely purchase the individual extensions based on the
                                    functionalities you want to add to your website. Please go through the <a
                                        href="<?php echo THEME_PLUGIN_URL;?>">list of Plugins</a> we offer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-2" aria-expanded="true"
                                aria-controls="faq-body-2">
                                <span class="header-text">Do you have a refund policy?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-2" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>
                                    Yes, we have 14 days money-back guarantee. If you think the product is not a perfect
                                    fit for your needs we will refund you within the first 14 days of your purchase.
                                    Read our <a target="__blank" href="<?php echo THEME_REFUND_POLICY_URL;?>">refund
                                        policy.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-3" aria-expanded="true"
                                aria-controls="faq-body-3">
                                <span class="header-text">What happens if I do not renew my license?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-3" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>
                                    If you do not wish to renew, the extension/theme will function properly but you
                                    won't receive support and updates.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-4" aria-expanded="true"
                                aria-controls="faq-body-4">
                                <span class="header-text">Is it mandatory to purchase the extensions?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-4" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>No, you can keep using the free version of Directorist as long as you need. However,
                                    extensions can be extremely helpful to extend the functionalities of your Directory
                                    website and boost user satisfaction significantly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-6" aria-expanded="true"
                                aria-controls="faq-body-6">
                                <span class="header-text">Do I have to pay extra for support?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-6" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>No! You do not have to pay extra for support as long as you have a valid license. If
                                    your license expires you need to renew to continue receiving support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-7" aria-expanded="true"
                                aria-controls="faq-body-7">
                                <span class="header-text">Can I cancel at any time?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-7" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>Yes, you can cancel anytime and no questions will be asked. You’ll still be able to
                                    use the plugin without updates and support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-8" aria-expanded="true"
                                aria-controls="faq-body-8">
                                <span class="header-text">What payment methods are accepted?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-8" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>We accept PayPal payments as well as all major credit cards including Visa,
                                    Mastercard, American Express.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-9" aria-expanded="true"
                                aria-controls="faq-body-9">
                                <span class="header-text">I need help with other inquiries, can you assist?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-9" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>Surely! You can ask us any questions through our live chat or our <a
                                        href="<?php echo THEME_CONTACT_URL;?>"> support page.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-10" aria-expanded="true"
                                aria-controls="faq-body-10">
                                <span class="header-text">Can I upgrade my license?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-10" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>Yes, you can upgrade your license to any yearly or lifetime plan anytime within the
                                    subscription period. Just log in to your wpwax account and navigate to Dashboard →
                                    Subscription → Upgrade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between"
                                data-toggle="collapse" data-target="#faq-body-11" aria-expanded="true"
                                aria-controls="faq-body-11">
                                <span class="header-text">Do I need to pay the full price during the upgrade?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-11" class="faq-single-body collapse">
                            <div class="body-inner">
                                <p>No, you need to pay the difference only and the difference will be calculated based
                                    on the days remaining.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .our-value-area -->

<?php get_footer(); ?>