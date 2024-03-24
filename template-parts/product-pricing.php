<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

if ( isset( $args['download_id'] ) && ! empty( $args['download_id'] ) ) {
    $download_id = $args['download_id'];
} else {
    $download_id = get_the_ID();
}

?>

<div class="pricing-plan-area pt-110 bfcm_pricing-plan single-product-pricing-bg" id="single-plugin-pricing-plan">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="text-center section-header theme-small">
                    <h2 class="display-3">Flexible Pricing for Everyone</h2>
                </div>
            </div>
        </div>
        <div class="pricing-plan-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="pricing-header">
                        <label class="wpwax-pricing-switch">
                            <div class="pricing-header__toggle">
                                <input type="checkbox" class="pricing-switch">
                                <span class="switch-annual">Annual</span>
                                <span class="switch-lifetime">Lifetime</span>
                                <!-- <span class="sliding-ball"></span> -->
                            </div>
                            <span class="pricing-save-badge">
                                <img src="<?php echo Helper::get_svg('save-badge.svg');?>" alt="wpWax Save 30%">
                            </span>
                        </label>
                    </div>
                    <div class="pricing-body">
                        <div class="pricing-plan-box fade show" id="yearly-access">
                            <div class="prcing-plans d-flex">
                                <div class="prcing-plans__single bfcm-pricing-single">
                                    <?php echo Helper::discount_label_html(1); ?>
                                    <div class="prcing-plans__top">
                                        <h5>1 Site</h5>
                                        <span class="pricing-price">
                                            <?php echo Helper::edd_price_html( $download_id, 1 );?>
                                            <span class="day-limit">/ year</span>
                                        </span>
                                        <p>Unlock all the possibilities for 1 Site - Best for personal use</p>
                                    </div>
                                    <div class="prcing-plans__list">
                                        <ul class="mb-0 ml-0 list-unstyled">
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">1 Website License </span></li>
                                            
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">1 Year Updates</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">1 Year Priority Support</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">14 Days Money Back Guarantee</span></li>
                                        </ul>
                                    </div>
                                    <div class="prcing-plans__bottom">
                                        <a href="<?php echo Helper::edd_checkout_url($download_id,1); ?>" class="btn btn-primary btn-md btn-transparent">Buy Now</a>
                                    </div>
                                </div>
                                <div class="prcing-plans__single bfcm-pricing-single active">
                                    <div class="pricing-shadow"></div>
                                    <?php echo Helper::discount_label_html(2); ?>
                                    <span class="popular-pricing">Most Popular</span>
                                    <div class="prcing-plans__top">
                                        <h5>5 Sites</h5>
                                        <span class="pricing-price">
                                            <?php echo Helper::edd_price_html( $download_id, 2 );?>
                                            <span class="day-limit">/ year</span>
                                        </span>
                                        <p>Unlock all the possibilities for 5 Sites - Best for multisite owners</p>
                                    </div>
                                    <div class="prcing-plans__list">
                                        <ul class="mb-0 ml-0 list-unstyled">
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">5 Websites License </span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">1 Year Updates</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">1 Year Priority Support</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">14 Days Money Back Guarantee</span></li>
                                        </ul>
                                    </div>
                                    <div class="prcing-plans__bottom">
                                        <a href="<?php echo Helper::edd_checkout_url($download_id,2); ?>" class="btn btn-primary btn-md btn-raised">Buy Now</a>
                                    </div>
                                </div>
                                <div class="prcing-plans__single bfcm-pricing-single pricing-unlimited">
                                    <?php echo Helper::discount_label_html(3); ?>
                                    <div class="prcing-plans__top">
                                        <h5>Unlimited Sites</h5>
                                        <span class="pricing-price">
                                            <?php echo Helper::edd_price_html( $download_id, 3 );?>
                                            <span class="day-limit">/ year</span>
                                        </span>
                                        <p>Unlock all the possibilities for unlimited sites - Best for agency</p>
                                    </div>
                                    <div class="prcing-plans__list">
                                        <ul class="mb-0 ml-0 list-unstyled">
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">UnlimitedWebsites License </span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">1 Year Updates</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">1 Year Priority Support</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">14 Days Money Back Guarantee</span></li>
                                        </ul>
                                    </div>
                                    <div class="prcing-plans__bottom">
                                        <a href="<?php echo Helper::edd_checkout_url($download_id,3); ?>" class="btn btn-primary btn-md btn-transparent">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-plan-box fade" id="lifetime-access">
                            <div class="prcing-plans d-flex">
                                <div class="prcing-plans__single bfcm-pricing-single theme-ramadan">
                                    <?php echo Helper::discount_label_html(4); ?>
                                    <div class="prcing-plans__top">
                                        <h5>1 Site</h5>
                                        <span class="pricing-price">
                                            <?php echo Helper::edd_price_html( $download_id, 4 );?>
                                        </span>
                                        <p>Unlock all the possibilities for 1 Site - Best for personal use</p>
                                    </div>
                                    <div class="prcing-plans__list">
                                        <ul class="mb-0 ml-0 list-unstyled">
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">1 Website License </span></li>
                                            
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">Lifetime Updates</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">Lifetime Priority Support</span></li>
                                        </ul>
                                    </div>
                                    <div class="prcing-plans__bottom">
                                        <a href="<?php echo Helper::edd_checkout_url($download_id,4); ?>" class="btn btn-primary btn-md btn-transparent">Buy Now</a>
                                    </div>
                                </div>
                                <div class="prcing-plans__single bfcm-pricing-single theme-ramadan active">
                                    <?php echo Helper::discount_label_html(5); ?>
                                    <div class="pricing-shadow"></div>
                                    <div class="prcing-plans__top">
                                        <h5>5 Sites</h5>
                                        <span class="pricing-price">
                                            <?php echo Helper::edd_price_html( $download_id, 5 );?>
                                        </span>
                                        <p>Unlock all the possibilities for 5 Sites - Best for multisite owners</p>
                                    </div>
                                    <div class="prcing-plans__list">
                                        <ul class="mb-0 ml-0 list-unstyled">
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">5 Websites License </span></li>
                                            
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">Lifetime Updates</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">Lifetime Priority Support</span></li>
                                        </ul>
                                    </div>
                                    <div class="prcing-plans__bottom">
                                        <a href="<?php echo Helper::edd_checkout_url($download_id,5); ?>" class="btn btn-primary btn-md btn-raised">Buy Now</a>
                                    </div>
                                </div>
                                <div class="prcing-plans__single bfcm-pricing-single theme-ramadan pricing-unlimited">
                                    <?php echo Helper::discount_label_html(6); ?>
                                    <div class="prcing-plans__top">
                                        <h5>Unlimited Sites</h5>
                                        <span class="pricing-price">
                                            <?php echo Helper::edd_price_html( $download_id, 6 );?>
                                        </span>
                                        <p>Unlock all the possibilities for unlimited sites - Best for agency</p>
                                    </div>
                                    <div class="prcing-plans__list">
                                        <ul class="mb-0 ml-0 list-unstyled">
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">Unlimited Websites License </span></li>
                                            
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">Lifetime Updates</span></li>
                                            <li><img src="<?php echo Helper::get_svg('icons/check.svg');?>"><span class="list-text">Lifetime Priority Support</span></li>
                                        </ul>
                                    </div>
                                    <div class="prcing-plans__bottom">
                                        <a href="<?php echo Helper::edd_checkout_url($download_id,6); ?>" class="btn btn-primary btn-md btn-transparent">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-120">
            <div class="col-lg-6">
                <div class="free-subscription-box d-none">
                    <h3>Download the Free Version</h3>
                    <p>To get it free, please provide your regular email</p>
                    <form action="#">
                        <div class="free-subscription-form">
                            <div class="free-subscription-form__input">
                                <div class="form-group has-icon-left">
                                    <img src="<?php echo Helper::get_svg('icons/Icon-email.svg');?>">
                                    <input type="text" class="form-element" placeholder="Enter Your Email">
                                </div>
                            </div>
                            
                            <button class="btn bt-success free-subscribe">Download</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- ends: .pricing-plan-area -->