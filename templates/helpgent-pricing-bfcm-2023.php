<?php
/**
 * Template Name: HelpGent - New Year Sale 2023
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

Scripts::load_helpgent_scripts();
get_header( 'helpgent' );

if ( isset( $args['download_id'] ) && ! empty( $args['download_id'] ) ) {
    $download_id = $args['download_id'];
} else {
    $download_id = get_the_ID();
}
$download_id = Helper::get_helpgent_download_id();
?>

<section class="pricing-intro-area position-relative bfcm_pricing-intro new-year-bg deal-sale-intro pb-60" style="background-image: url('<?php echo Helper::get_img( 'new-year-sale-bg-2023.png' );?>');background-size: cover;background-position: center bottom;" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center pricing-intro-content theme-bfcm theme-ramadan">
                    <div class="bfcm-img">
						<img src="<?php echo Helper::get_svg('new-year-2023-hero.svg');?>" alt="wpWax Discount Deal">
                    </div>
					<h2>Don't miss out this exclusive <br> year-end MEGA offer</h2>
                    <p class="start-end">The Deal is Ending After</p>
					<div class="offer-countdown">
						<ul class="list-unstyled">
							<li><span class="loader-dot"></span><span>Days</span></li>
                    		<li><span class="loader-dot"></span><span>Hours</span></li>
                    		<li><span class="loader-dot"></span><span>Minutes</span></li>
                    		<li><span class="loader-dot"></span><span>Seconds</span></li>
						</ul>
					</div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .pricing-intro-area -->

<section class="pb-20 pt-100 helpgent-pricing-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="helpgent-pricing-switch">
                    <div class="helpgent-pricing-switch__wrapper">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" id="yearly-tab" data-toggle="tab" href="#yearly" role="tab"
                                    aria-controls="yearly" aria-selected="false">
                                    yearly
                                </a>
                            </li>
                            <li>
                                <a id="lifetime-tab" data-toggle="tab" href="#lifetime" role="tab"
                                    aria-controls="lifetime" aria-selected="true">
                                    lifetime
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active show" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                <div class="row justify-content-center">
                    <div class="mb-20 col-lg-4 col-md-6">
                        <div class="helpgent-pricing-plans__single">
                            <div class="helpgent-pricing-plans__top">
                                <h5 class="pricing-period">Grow</h5>
                                <p class="pricing-description">
                                    All the essentials you need to get the conversation started.
                                </p>
                                <span class="pricing-price">
                                    <?php echo Helper::edd_price_html( $download_id, 1 );?>
                                    <span class="day-limit">/year</span>
                                </span>
                            </div>
                            <div class="helpgent-pricing-plans__action">
                                <a href="<?php echo Helper::edd_checkout_url( $download_id, 1 ); ?>" rel="nofollow"
                                    class="btn btn-md">Get started</a>
                            </div>
                            <?php get_template_part( 'template-parts/helpgent-pricing-items', null, ['num_sites' => '1 Site'] ); ?>
                        </div>
                    </div>

                    <div class="mb-20 col-lg-4 col-md-6">
                        <div class="helpgent-pricing-plans__single popular-item pb-wrapper">
                            <div class="popular-badge">Best Value</div>
                            <div class="helpgent-pricing-plans__top">
                                <h5 class="pricing-period">Business</h5>
                                <p class="pricing-description">
                                    All the essentials you need to get the conversation started.
                                </p>
                                <span class="pricing-price">
                                    <?php echo Helper::edd_price_html( $download_id, 2 );?>
                                    <span class="day-limit">/year</span>
                                </span>
                            </div>
                            <div class="helpgent-pricing-plans__action">
                                <a href="<?php echo Helper::edd_checkout_url( $download_id, 2 ); ?>" rel="nofollow"
                                    class="btn btn-md btn-animate animate--dark">Get started</a>
                            </div>
                            
                            <?php get_template_part( 'template-parts/helpgent-pricing-items', null, ['num_sites' => '1-10 Sites'] ); ?>

                        </div>
                    </div>

                    <div class="mb-20 col-lg-4 col-md-6">
                        <div class="helpgent-pricing-plans__single">
                            <!-- <div class="popular-badge">Best Value</div> -->
                            <div class="helpgent-pricing-plans__top">
                                <h5 class="pricing-period">Ultimate</h5>
                                <p class="pricing-description">
                                    All the essentials you need to get the conversation started.
                                </p>
                                <span class="pricing-price">
                                    <?php echo Helper::edd_price_html( $download_id, 3 );?>
                                    <span class="day-limit">/year</span>
                                </span>
                            </div>
                            <div class="helpgent-pricing-plans__action">
                                <a href="<?php echo Helper::edd_checkout_url( $download_id, 3 ); ?>" rel="nofollow"
                                    class="btn btn-md">Get started</a>
                            </div>

                            <?php get_template_part( 'template-parts/helpgent-pricing-items', null, ['num_sites' => 'Unlimited Sites'] ); ?>

                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane" id="lifetime" role="tabpanel" aria-labelledby="lifetime-tab">
                <div class="row justify-content-center">
                    <div class="mb-20 col-lg-4 col-md-6">
                        <div class="helpgent-pricing-plans__single">
                            <div class="helpgent-pricing-plans__top">
                                <h5 class="pricing-period">Grow</h5>
                                <p class="pricing-description">
                                    All the essentials you need to get the conversation started.
                                </p>
                                <span class="pricing-price">
                                    <?php echo Helper::edd_price_html( $download_id, 4 );?>

                                </span>
                            </div>
                            <div class="helpgent-pricing-plans__action">
                                <a href="<?php echo Helper::edd_checkout_url( $download_id, 4 ); ?>" rel="nofollow"
                                    class="btn btn-md">Get started</a>
                            </div>                            
                            
                            <?php get_template_part( 'template-parts/helpgent-pricing-items', null, ['num_sites' => '1 Site'] ); ?>

                        </div>
                    </div>

                    <div class="mb-20 col-lg-4 col-md-6">
                        <div class="helpgent-pricing-plans__single popular-item pb-wrapper">
                            <div class="popular-badge">Best Value</div>
                            <div class="helpgent-pricing-plans__top">
                                <h5 class="pricing-period">Business</h5>
                                <p class="pricing-description">
                                    All the essentials you need to get the conversation started.
                                </p>
                                <span class="pricing-price">
                                    <?php echo Helper::edd_price_html( $download_id, 5 );?>

                                </span>
                            </div>
                            <div class="helpgent-pricing-plans__action">
                                <a href="<?php echo Helper::edd_checkout_url( $download_id, 5 ); ?>" rel="nofollow"
                                    class="btn btn-md btn-animate animate--dark">Get started</a>
                            </div>

                            <?php get_template_part( 'template-parts/helpgent-pricing-items', null, ['num_sites' => '1-10 Sites'] ); ?>

                        </div>
                    </div>

                    <div class="mb-20 col-lg-4 col-md-6">
                        <div class="helpgent-pricing-plans__single">
                            <!-- <div class="popular-badge">Best Value</div> -->
                            <div class="helpgent-pricing-plans__top">
                                <h5 class="pricing-period">Ultimate</h5>
                                <p class="pricing-description">
                                    All the essentials you need to get the conversation started.
                                </p>
                                <span class="pricing-price">
                                    <?php echo Helper::edd_price_html( $download_id, 6 );?>

                                </span>
                            </div>
                            <div class="helpgent-pricing-plans__action">
                                <a href="<?php echo Helper::edd_checkout_url( $download_id, 6 ); ?>" rel="nofollow"
                                    class="btn btn-md">Get started</a>
                            </div>

                            <?php get_template_part( 'template-parts/helpgent-pricing-items', null, ['num_sites' => 'Unlimited Sites'] ); ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-40 core-feature-area pt-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="core-feature">
                    <div class="text-center row justify-content-center">
                        <div class="col-md-7">
                            <h1>Core features</h1>
                            <p>
                                Discover the key functionalities, reap the benefits, and get the ultimate
                                value Using HelpGent.
                            </p>
                        </div>
                    </div>
                    <div class="row default justify-content-center">
                        <div class="mb-40 col-lg-4 col-md-6 default">
                            <div class="core-feature-item h-100">
                                <div class="img-area">
                                    <img src="<?php echo Helper::get_img('helpgent/video-message.png');?>" alt="">
                                </div>
                                <div class="core-feature-item__content">
                                    <h3>Video messaging</h3>
                                    <p>
                                        HelpGent allows you to have asynchronous video
                                        messaging to communicate with anyone, anytime,
                                        without needing to be available at the same time.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-40 col-lg-4 col-md-6 default">
                            <div class="core-feature-item h-100">
                                <div class="img-area">
                                    <img src="<?php echo Helper::get_img('helpgent/screen-record.png');?>" alt="">
                                </div>
                                <div class="core-feature-item__content">
                                    <h3>Screen recording</h3>
                                <p>
                                    With the HelpGent screen recording & sharing
                                    feature, you can present any question you want to
                                    get the answer in a form of asynchronous
                                    messaging.
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-40 col-lg-4 col-md-6 default">
                            <div class="core-feature-item h-100">
                                <div class="img-area">
                                    <img src="<?php echo Helper::get_img('helpgent/voice-message.png');?>" alt="">
                                </div>
                                <div class="core-feature-item__content">
                                   <h3>Voice messaging</h3>
                                <p>
                                    With asynchronous voice messaging with HelpGent, you can leave a voice message for
                                    someone and they can respond at their convenience in the same way.
                                </p> 
                                </div>
                                
                            </div>
                        </div>
                        <div class="mb-40 col-lg-4 col-md-6 default">
                            <div class="core-feature-item h-100">
                                <div class="img-area">
                                    <img src="<?php echo Helper::get_img('helpgent/text-message.png');?>" alt="">
                                </div>
                                <div class="core-feature-item__content">
                                    <h3>Text messaging</h3>
                                <p>
                                    Communicate through engaging text messages by HelpGent that will get your audience
                                    talking asynchronously with an ease.
                                </p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="mb-40 col-lg-4 col-md-6 default">
                            <div class="core-feature-item h-100">
                                <div class="img-area">
                                    <img src="<?php echo Helper::get_img('helpgent/Conversational-forms_2.png');?>" alt="">
                                </div>
                                <div class="core-feature-item__content">
                                <h3>Conversational Forms</h3>
                                <p>
                                Transform conversations with interactive conversational & multi-step forms using HelpGent.
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="money-back-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="money-backbox vip-pricing-theme d-flex">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="money-backbox__left h-100">
                                <div class="money-backbox__image h-100">
                                    <img src="<?php echo Helper::get_svg('money-back-helpgent-14.svg');?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="money-backbox__right">
                                <h3>100% Risk-Free<br> Money Back Guarantee!</h3>
                                <p>We think users’ satisfaction is our prime achievement. However, if the plugin still
                                    doesn’t serve your purposes, we’ll be more than happy to refund 100% of your payment
                                    within 14 days of your purchase. No questions will be asked! Learn more about our <a
                                        target="__blank" href="#">refund policy.</a>
                                </p>
                                <div class="founder-signature">
                                    <img src="<?php echo Helper::get_svg('ceo-sign.svg');?>" alt="">
                                    <h4 class="founder-name">Masud Rana</h4>
                                    <p>CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-value-area our-value-area--2">
    <div class="container">
        <div class="row">
            <div class="text-center col-12">
                <div class="section-header">
                    <h2 class="display-3">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-accordion" id="accordionExample">
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question1">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-1" aria-expanded="true"
                                aria-controls="faq-body-1">
                                <span class="header-text">Is HelpGent Free or Paid?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-1" class="faq-single-body collapse show" aria-labelledby="question1"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    HelpGent is a freemium plugin. It has a free version with limited features and a
                                    premium version with more features.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question2">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-2" aria-expanded="false"
                                aria-controls="faq-body-2">
                                <span class="header-text">Is registration mandatory for visitors to send a
                                    message?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-2" class="faq-single-body collapse" aria-labelledby="question2"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Absolutely not! Any visitors/guest can send video, voice, text, and screen
                                    recordings without registration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question3">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-3" aria-expanded="false"
                                aria-controls="faq-body-3">
                                <span class="header-text">How does the guest user receive replies and sends follow-up
                                    messages?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-3" class="faq-single-body collapse" aria-labelledby="question3"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    After sending a message, a guest token is sent to the guest user’s email to access
                                    the conversation and send follow-up messages.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question4">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-4" aria-expanded="false"
                                aria-controls="faq-body-4">
                                <span class="header-text">Is the conversation data encrypted/secured?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-4" class="faq-single-body collapse" aria-labelledby="question4"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Yes, all the information is stored in your database, not any 3rd party servers like
                                    in live chats.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question5">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-5" aria-expanded="false"
                                aria-controls="faq-body-5">
                                <span class="header-text">Can I replace my contact form with HelpGent?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-5" class="faq-single-body collapse" aria-labelledby="question5"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Yes, just replace it with the HelpGent form’s shortcode.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question6">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-6" aria-expanded="false"
                                aria-controls="faq-body-6">
                                <span class="header-text">Do the recipients get notified in real-time?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-6" class="faq-single-body collapse" aria-labelledby="question6"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Yes, the recipients as well as the admin get real-time notifications through email
                                    upon receiving replies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question7">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-8" aria-expanded="false"
                                aria-controls="faq-body-8">
                                <span class="header-text">Can I add a custom call to action on Thank You page?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-8" class="faq-single-body collapse" aria-labelledby="question8"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Yes, you have the option to add a custom call to action button.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question9">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-9" aria-expanded="false"
                                aria-controls="faq-body-9">
                                <span class="header-text">Can I use HelpGent with any theme?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-9" class="faq-single-body collapse" aria-labelledby="question9"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Yes, HelpGent should work wonders with all the major themes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question10">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-10" aria-expanded="false"
                                aria-controls="faq-body-10">
                                <span class="header-text">Do you have a refund policy?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-10" class="faq-single-body collapse" aria-labelledby="question10"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Yes, we have a 14-day money-back guarantee. If you think the product is not a
                                    perfect fit for your needs we will refund you within the first 14 days of your
                                    purchase.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question11">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-11" aria-expanded="false"
                                aria-controls="faq-body-11">
                                <span class="header-text">What happens if I do not renew my license?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-11" class="faq-single-body collapse" aria-labelledby="question11"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    If you do not wish to renew, the extension/theme will function properly but you
                                    won't receive support and updates.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question12">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-12" aria-expanded="false"
                                aria-controls="faq-body-12">
                                <span class="header-text">Can I cancel at any time?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-12" class="faq-single-body collapse" aria-labelledby="question12"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Yes, you can cancel anytime. You’ll still be able to use the plugin without updates
                                    and support, which is not recommended.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question13">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-13" aria-expanded="false"
                                aria-controls="faq-body-13">
                                <span class="header-text">What payment methods are accepted?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-13" class="faq-single-body collapse" aria-labelledby="question13"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    We accept PayPal payments as well as all major credit cards including Visa,
                                    Mastercard, and American Express.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question14">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-14" aria-expanded="false"
                                aria-controls="faq-body-14">
                                <span class="header-text">I need help with other inquiries, can you assist me?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-14" class="faq-single-body collapse" aria-labelledby="question14"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Surely! You can ask us any questions. We are always happy to assist. Contact us <a
                                        href="https://wpwax.com/contact/"> here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question15">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-15" aria-expanded="false"
                                aria-controls="faq-body-15">
                                <span class="header-text">Can I upgrade my license?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-15" class="faq-single-body collapse" aria-labelledby="question15"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    Yes, you can upgrade your license to any yearly or lifetime plan anytime within the
                                    subscription period. Just log in to your wpwax account and navigate to Dashboard →
                                    Subscription → Upgrade.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question16">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-16" aria-expanded="false"
                                aria-controls="faq-body-16">
                                <span class="header-text">Do I need to pay the full price during the upgrade?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-16" class="faq-single-body collapse" aria-labelledby="question16"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    No, you need to pay the difference only and the difference will be calculated based
                                    on the days remaining.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion__single">
                        <div class="faq-single-header" id="question17">
                            <h6 class="faq-single-header__title d-flex align-items-center justify-content-between collapsed"
                                data-toggle="collapse" data-target="#faq-body-17" aria-expanded="false"
                                aria-controls="faq-body-17">
                                <span class="header-text">Where are the videos and audio stored?</span>
                                <?php echo wpwax_icon( 'uil uil-angle-down', false); ?>
                            </h6>
                        </div>
                        <div id="faq-body-17" class="faq-single-body collapse" aria-labelledby="question17"
                            data-parent="#accordionExample">
                            <div class="body-inner">
                                <p>
                                    All the data is stored on your WordPress server, giving you full control over
                                    everything. Media offloading in external clouds like Google Drive will also be
                                    available soon.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer( 'helpgent' );