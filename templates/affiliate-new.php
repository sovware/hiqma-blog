<?php
/**
 * Template Name: Affiliate New
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
            <div class="order-last col-lg-6">
                <div class="affiliate-intro__image">
                    <video autoplay="" loop="" muted="" src="<?php echo Helper::get_img( 'affiliate-hero.mp4' );?>"  playsinline=""></video>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="affiliate-intro__content">
                    <h2>Join wpWax Affiliate Program and Earn Up to <span class="commission-text">40% Commissions!</span></h2>
                    <p>Interested in making a huge commission using your traffic through affiliate marketing? Become one of the valuable wpWax affiliates and make it happen today.</p>
                    <a href="<?php echo THEME_AFFILIATE_URL;?>" class="btn btn-primary btn-affiliate">Become an Affiliate</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-commission box-bg box-warning">
    <div class="affiliate-commission__card">
        <div class="container">
            <div class="text-center section-header">
                <h3 class="display-3">Choose how you wish to earn commissions</h3>
                <p>wpWax affiliate program that lets you decide the way you earn. Earn money from <br> the products you love while helping others achieve their dreams.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 mb-md-30">
                    <div class="affiliate-commission__category">
                        <h4 class="affiliate-commission__category--title">Bronze</h4>
                        <img class="affiliate-commission__category--img" src="<?php echo Helper::get_img( 'affiliate/bronze.png' );?>" alt="affiliate directory" />
                        <span class="affiliate-commission__category--rate">20%</span>
                        <p class="affiliate-commission__category--desc">20% commission on <span class="commission-base-amount">$0 - $1499</span><br> per month revenue.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-md-30">
                    <div class="affiliate-commission__category">
                        <h4 class="affiliate-commission__category--title">Silver</h4>
                        <img class="affiliate-commission__category--img" src="<?php echo Helper::get_img( 'affiliate/silver.png' );?>" alt="affiliate directory" />
                        <span class="affiliate-commission__category--rate">30%</span>
                        <p class="affiliate-commission__category--desc">30% commission on <span class="commission-base-amount">$1500 - $3000</span><br> per month revenue.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="affiliate-commission__category">
                        <h4 class="affiliate-commission__category--title">Gold</h4>
                        <img class="affiliate-commission__category--img" src="<?php echo Helper::get_img( 'affiliate/gold.png' );?>" alt="affiliate directory" />
                        <span class="affiliate-commission__category--rate">40%</span>
                        <p class="affiliate-commission__category--desc">40% commission on <span class="commission-base-amount">$3000+</span><br> per month revenue.</p>
                    </div>
                </div>
            </div>
            <div class="text-center btn-part mt-50">                
                <a href="<?php echo THEME_AFFILIATE_URL;?>" class="btn btn-primary btn-affiliate">Become an Affiliate</a>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-process">
    <div class="container">
        <div class="text-center section-header">
            <h3 class="display-3">We Provide the Assistance You Need to Succeed</h3>
            <p>We believe that success starts with understanding your goals, and we help you achieve them by offering personalized support and resources.</p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-1">
                        <?php echo Helper::the_svg( 'affiliate/1' ); ?>
                    </div>
                    <h4>High Paying Commission Rate</h4>
                    <p>We offer the most competitive affiliate commission among all WordPress based affiliate programs.</p>
                </div>
            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-2">
                        <?php echo Helper::the_svg( 'affiliate/2' ); ?>
                    </div>
                    <h4>Dedicated Affiliate Managers</h4>
                    <p>Our affiliate managers are always available to help you process any aspect of the cloud affiliate platform. We will address any kind of question you may have, and we also provide access to top-tier information.</p>
                </div>
            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-3">
                        <?php echo Helper::the_svg( 'affiliate/3' ); ?>
                    </div>
                    <h4>Affiliate-friendly Tracking System</h4>
                    <p> We aim to promote a transaction that lasts for 90 days to ensure that all your sales are properly tracked and you receive full revenue for all your hard work.</p>
                </div>
            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-1">
                        <?php echo Helper::the_svg( 'affiliate/4' ); ?>
                    </div>
                    <h4> Easy-to-Use Dashboard</h4>
                    <p>Get the most user-friendly affiliate dashboard that gives you all the information you need to manage your campaigns.</p>
                </div>
            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-2">
                        <?php echo Helper::the_svg( 'affiliate/5' ); ?>
                    </div>
                    <h4>Detailed Performance Reporting</h4>
                    <p>Access affiliate performance reports in your affiliate control panel to monitor the efficiency and success of your marketing strategies and affiliate approaches.</p>
                </div>
            </div><!-- ends: .col-lg-4 -->
            <div class="col-lg-4">
                <div class="affiliate-process__single">
                    <div class="affiliate-process__icon gdnt-3">
                        <?php echo Helper::the_svg( 'affiliate/6' ); ?>
                    </div>
                    <h4>Beautiful Brand Assets</h4>
                    <p>Get the brand assets, creatives including logos, banners which are numerous sizes and to great on any website.</p>
                </div>
            </div><!-- ends: .col-lg-4 -->
        </div>
    </div>
</section>

<section class="affiliate-feature box-bg box-pink">
    <div class="affiliate-feature__content">
        <div class="container">
            <div class="text-center section-header">
                <h3 class="display-3">What Makes wpWax’s Products Easy to Sell?</h3>
                <p>The products on wpWax Marketplace are easy to sell because they are high quality and professional. People love the products of wpWax that are made by experienced professionals who know how to make them look great and work flawlessly. It has a wide variety of products to choose from, so there is something for everyone.</p>
            </div>
            
            <div class="row affiliate-feature__list">
                <div class="col-lg-6">
                    <div class="affiliate-feature__single">
                        <h4 class="affiliate-feature__title">Easy to Use Product</h4>
                        <p class="affiliate-feature__desc">wpWax offers the most lightweight, user-friendly plugins & themes that allows users to improve the efficiency of work on any website</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="affiliate-feature__single">
                        <h4 class="affiliate-feature__title">Highly Customizable</h4>
                        <p class="affiliate-feature__desc">All the products at wpWax have a user-friendly and customizable design that allows ambitious individuals to make a personalized web experience. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="affiliate-feature__single">
                        <h4 class="affiliate-feature__title">World-class Products</h4>
                        <p class="affiliate-feature__desc">wpWax offers a wide range of products to meet your needs ensuring that your experience is seamless and stress-free.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="affiliate-feature__single">
                        <h4 class="affiliate-feature__title">Dedicated Support</h4>
                        <p class="affiliate-feature__desc">At wpWax, we love to care for our users. You shouldn't have to worry about having a dedicated support facility. We're here to help you with any questions you may have about our products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-started">
    <div class="container">
        <div class="text-center section-header">
            <h3 class="display-3">How to Get Started</h3>
        </div>
        
        <div class="row">
            <div class="col-lg-7 mb-md-30">
                <div class="affiliate-started__features">
                    <div class="affiliate-started__single">
                        <div class="affiliate-started__single--icon primary">
                            <span>01.</span>
                        </div>
                        <div class="affiliate-started__single--content">
                            <h4 class="affiliate-started__single--title">Become An Affiliate</h4>
                            <p class="affiliate-started__single--desc"> It’s easy to join! Simply register as an affiliate.</p>
                        </div>
                    </div>
                    <div class="affiliate-started__single">
                        <div class="affiliate-started__single--icon pink">
                            <span>02.</span>
                        </div>
                        <div class="affiliate-started__single--content">
                            <h4 class="affiliate-started__single--title">Send Traffic to wpWax</h4>
                            <p class="affiliate-started__single--desc">Educate people about our product and drive them to solve</p>
                        </div>
                    </div>
                    <div class="affiliate-started__single">
                        <div class="affiliate-started__single--icon success">
                            <span>03.</span>
                        </div>
                        <div class="affiliate-started__single--content">
                            <h4 class="affiliate-started__single--title">Earn More Commissions</h4>
                            <p class="affiliate-started__single--desc">Enjoy up to 40 common fuel on each successful purchase.</p>
                        </div>
                    </div>
                    <div class="btn-part">                        
                        <a href="<?php echo THEME_AFFILIATE_URL;?>" class="btn btn-primary btn-affiliate">Become an Affiliate</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="affiliate-started__img">
                    <img src="<?php echo Helper::get_img( 'affiliate/a3.png' );?>" alt="Get Started Affiliate" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-guideline box-bg box-gray">
    <div class="affiliate-guideline__contents">
        <div class="text-center section-header">
            <h3 class="display-3">Guidelines</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="affiliate-guideline__list affiliate-guideline__list--one">
                        <h3>Please <span>Do</span> <?php echo Helper::the_svg( 'icons/show' ); ?></h3>
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
                        <h3>Please <span>Don't</span> <?php echo Helper::the_svg( 'icons/show' ); ?></h3>
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
</section>

<section class="affiliate-faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="a-section-title">Frequently Asked Questions</h3>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="affiliate-faq__contents">
                    <div class="accordion" id="affiliate-faq-accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How does wpWax affiliate work?</a>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#affiliate-faq-accordion">
                                <div class="card-body">
                                It’s pretty simple! wpWax affiliate program rewards you if you direct new customers to purchase products from our site.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How do I join your affiliate program?</a>
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
                                Of course, feel free to share anything to us <a href="https://wpWax.com/contact/">here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/product', 'grid', 'affiliate-product-grid' ) ?>

<section class="affiliate-cta">
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-12">
                <h3>Join wpWax Affiliate Program and <br> Start Earning Today!</h3>
                <a href="<?php echo THEME_AFFILIATE_URL;?>" class="btn btn-primary btn-affiliate">Become an Affiliate</a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
