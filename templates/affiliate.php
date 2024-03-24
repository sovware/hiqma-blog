<?php
/**
 * Template Name: Affiliate
 *
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
get_header();
?>

<section class="affiliate-intro">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="affiliate-intro__content">
                    <h1>Join wpWax <br> Affiliate Program and <br> Start Earning Right Now</h1>
                    <p>Interested in making a huge commission using your traffic through affiliate marketing? Become one of the valuable wpWax affiliates and make it happen today.</p>
                    <a href="<?php echo THEME_AFFILIATE_URL;?>" class="btn btn-primary">Become an Affiliate</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="affiliate-intro__image">
                    <img src="<?php echo Helper::get_img( 'affiliate/a1.png' );?>" alt="Join wpWax Affiliate Program">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-commission">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-md-1">
                <div class="text-center affiliate-commission__card">
                    <div class="affiliate-commission__card--contents">
                        <span class="commission-subtitle">How much commission?</span>
                        <h3>Earn upto <span>20%</span> for each referral!</h3>
                        <p>We offer attractive affiliate commissions for each successful sale through your affiliate link. You can achieve something great by helping to make others' life great!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="a-section-title">Here is how it works</h3>
            </div>
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-1">
                        <img src="<?php echo Helper::get_img( 'affiliate/horn.png' );?>" alt="Become an affiliate">
                    </div>
                    <h4>Become an affiliate</h4>
                    <p>It’s easy to join! Simply register as an affiliate</p>
                </div>
            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-2">
                        <img src="<?php echo Helper::get_img( 'affiliate/note.png' );?>" alt="Send Traffic to wpWax">
                    </div>
                    <h4>Send Traffic to wpWax</h4>
                    <p>Educate people about our products and drive them to solve their problems with our products</p>
                </div>
            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-3">
                        <img src="<?php echo Helper::get_img( 'affiliate/percent.png' );?>" alt="Earn More Commissions">
                    </div>
                    <h4>Earn More Commissions</h4>
                    <p>Enjoy 20% commission on each successful sale</p>
                </div>
            </div><!-- ends: .col-lg-4 -->

            <div class="text-center col-lg-12 affiliate-process__btn">
                <a href="<?php echo THEME_AFFILIATE_URL;?>" class="btn btn-primary">Become an Affiliate</a>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-guideline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="a-section-title">Guidelines</h3>
            </div>
            <div class="col-lg-12">
                <div class="affiliate-guideline__contents">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="affiliate-guideline__list affiliate-guideline__list--one">
                                <h3>Please <span>Do</span></h3>
                                <ul class="list-unstyled">
                                    <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Create quality content for our products.</li>
                                    <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Advertise our products through educating amongst the recipients.</li>
                                    <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Create case study, YouTube videos, comparative posts relating to our products</li>
                                    <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Grow the WordPress affiliate community and provide relevant suggestion with enough cooperation</li>
                                    <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Promoting our products through social media and email marketing</li>
                                    <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Creating educational content to educate our products </li>
                                    <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Using our visuals like logos and banners</li>
                                </ul>
                            </div>
                        </div><!-- ends: .col-lg-6 -->
                        <div class="col-md-6">
                            <div class="affiliate-guideline__list affiliate-guideline__list--two">
                                <h3>Please <span>Don't</span></h3>
                                <ul class="list-unstyled">
                                    <li><?php echo wpwax_icon( 'uil uil-times-circle', false); ?> Distort any information to get more sales</li>
                                    <li><?php echo wpwax_icon( 'uil uil-times-circle', false); ?> Creating controversial content for promotion</li>
                                    <li><?php echo wpwax_icon( 'uil uil-times-circle', false); ?> Creating spammy content relating to our products</li>
                                    <li><?php echo wpwax_icon( 'uil uil-times-circle', false); ?> Using own affiliate link for own purchase</li>
                                    <li><?php echo wpwax_icon( 'uil uil-times-circle', false); ?> Any illicit approach to manipulate the sales volume</li>
                                </ul>
                            </div>
                        </div><!-- ends: .col-lg-6 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="a-section-title">Affiliate FAQ</h3>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="affiliate-faq__contents">
                    <div class="accordion" id="affiliate-faq-accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How does wpWax affiliate work?
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#affiliate-faq-accordion">
                            <div class="card-body">
                            It’s pretty simple! wpWax affiliate program rewards you if you direct new customers to purchase products from our site.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I join your affiliate program?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#affiliate-faq-accordion">
                            <div class="card-body">
                            It’s super easy! Just navigate through <a href="<?php echo THEME_AFFILIATE_URL;?>">the link</a> and become the wpWax affiliate
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <a class="text-left collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">What is the minimum payout limit?</a>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#affiliate-faq-accordion">
                                <div class="card-body">There is no minimum payout limit for commission withdrawals. If the commission is older than 14 days we will send it to your PayPal account automatically.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <a class="text-left collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSix">When can I request a withdrawal of my earnings?</a>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#affiliate-faq-accordion">
                                <div class="card-body">Your funds are usually held for at least 14 days to avoid fraud transactions and chargebacks. You do not need to make any withdrawal requests, if the order is 14 days old or more we will automatically send the commission directly to your PayPal email on the 10th-15th day of every month. </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <a class="text-left collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Why I did not get paid on the 10th-15th of the month?</a>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#affiliate-faq-accordion">
                                <div class="card-body">There is a “14-days to maturity” rule to ensure if the payment for the order is legit and also to be sure if the customer decided to get a refund or has filed a dispute. So, suppose you earned a commission on the 10th instant of the month, you do not qualify to get paid on the 15th since it does not fulfill the 30 day rule. So, you will get the payment on the next payment cycle.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <a class="text-left collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                If my question isn’t listed. How do I get further assistance?
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#affiliate-faq-accordion">
                            <div class="card-body">
                            Of course, feel free to share anything to us <a href="https://wpwax.com/contact/">through support channel</a>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-cta">
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-12">
                <h3>Join wpWax Affiliate Program and <br> Start Earning Today!</h3>
                <a href="<?php echo THEME_AFFILIATE_URL;?>" class="btn btn-primary">Become an Affiliate</a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>