<?php

/**
 * Template Name: Career Page
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header();
?>

<section class="career-intro pt-190 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="sovware-banner__content">
                    <h1 class="display-2">Join a team that <br> <span class="color-violet">you dream of!</span> </h1>
                    <p>We are wpWaxians — a team of passionate digital <br> technology experts who work constantly to
                        make life easier. <br> We’re self driven by a singular purpose: to help businesses <br> succeed.
                    </p>
                    <a href="#open_positions" class="btn btn-primary btn-raised">View all open positions</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="sovware-banner__img position-relative">
                    <div class="shade-bg"></div>
                    <img src="<?php echo Helper::get_svg('career-man.svg'); ?>" alt="Join to wpWax team that you dream of!">
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .about-intro -->

<section class="about-brif-area pt-140 pb-135">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="brif-img"><img src="<?php echo Helper::get_svg('career-brif.svg'); ?>" alt="Explore Your Best Professional Self From wpWax"></div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="brif-content">11
                    <h2 class="display-2">Explore Your Best <br> Professional Self From Here</h2>
                    <p>We believe in giving back! Work environment matters a lot to flourish <br> your professionalism.
                        wpWax provides such an environment that helps <br> to unleash your full potential and make the
                        best use of your talent.</p>
                    <p>Culture is crucial and it's an important part of our company. We take <br> pride in creating a
                        work environment that is fun, challenges, rewards <br> and motivating to everyone involved. We
                        are connected by an integrated <br> sense of purpose to create the best products that push the
                        boundaries <br> of web technology.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .about-brif-area -->

<section class="benefit-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <h2 class="display-2">Perks & Benefits</h2>
                    <p>We know each team member performs the best when they get what they <br> deserve. Working at wpWax
                        is a real blast, but <br> it also comes with awesome perks & benefits.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="benefit-box">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="benifit-single pink">
                                <div class="benifit-single__inner">
                                    <div class="benifit-single__icon">
                                        <div class="icon-box box-pink">
                                            <?php echo Helper::the_svg('icons/hand-shake'); ?>
                                        </div>
                                    </div>
                                    <div class="benifit-single__content">
                                        <h5>Friendly Environment</h5>
                                        <p>We maintain an eco-friendly <br> working environment that will help <br> you
                                            to focus on your work and <br> motivates you to produce good <br> work.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="benifit-single success">
                                <div class="benifit-single__inner">
                                    <div class="benifit-single__icon">
                                        <div class="icon-box box-success">
                                            <?php echo Helper::the_svg('icons/hand-shake'); ?>
                                        </div>
                                    </div>
                                    <div class="benifit-single__content">
                                        <h5>Competitive Salary</h5>
                                        <p>At wpWax, you’ll enjoy a competitive salary with an extended scope of growth.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="benifit-single violet">
                                <div class="benifit-single__inner">
                                    <div class="benifit-single__icon">
                                        <div class="icon-box box-violet">
                                            <?php echo Helper::the_svg('icons/hand-shake'); ?>
                                        </div>
                                    </div>
                                    <div class="benifit-single__content">
                                        <h5>Healthy Foods</h5>
                                        <p>Most of our members are foodie <br> and we're happy to provide healthy <br>
                                            foods to them. Sometime, we like to <br> arrange a sudden treat with <br>
                                            delicious items in order to make <br> them feel special.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="benifit-single primary">
                                <div class="benifit-single__inner">
                                    <div class="benifit-single__icon">
                                        <div class="icon-box box-primary">
                                            <?php echo Helper::the_svg('icons/hand-shake'); ?>
                                        </div>
                                    </div>
                                    <div class="benifit-single__content">
                                        <h5>wpWax Annual Retreat</h5>
                                        <p>Each year, we try to give two tours <br> at least to keep our stars
                                            refreshing <br> and energetic. One is in the middle <br> of the year and
                                            another one is in the <br> last part of the year.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="benifit-single warning">
                                <div class="benifit-single__inner">
                                    <div class="benifit-single__icon">
                                        <div class="icon-box box-warning">
                                            <?php echo Helper::the_svg('icons/hand-shake'); ?>
                                        </div>
                                    </div>
                                    <div class="benifit-single__content">
                                        <h5>Special Allowance & Bonuses</h5>
                                        <p>Wpwax offers a special allowance <br> for medical, honeymoon, care of <br>
                                            newborn and his mother. It also <br> provides competitive festival <br>
                                            bonuses over the time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="benifit-single info">
                                <div class="benifit-single__inner">
                                    <div class="benifit-single__icon">
                                        <div class="icon-box box-info">
                                            <?php echo Helper::the_svg('icons/hand-shake'); ?>
                                        </div>
                                    </div>
                                    <div class="benifit-single__content">
                                        <h5>Paid & Unpaid Time-off</h5>
                                        <p>We enjoy providing 2 days off a <br> week, competitive generic holidays <br>
                                            on marriage, festivals, paid & sick <br> leaves in a year.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="inside-gallery pt-130">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <h2 class="display-2">Inside <span class="color-primary">wpWax</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="about-gallery__box d-flex mb-20 pl-40">
                    <div class="about-gallery__wrapper d-flex align-items-end">
                        <div class="about-gallery__image"><img
                                src="<?php echo Helper::get_img('gallery/career-1.jpg'); ?>" alt="SovWare Workstation"></div>
                        <div class="about-gallery__image"><img
                                src="<?php echo Helper::get_img('gallery/career-2.jpg'); ?>" alt="SovWare Table Tennis"></div>
                        <div class="about-gallery__image"><img src="<?php echo Helper::get_img('gallery/7.jpg'); ?>" alt="SovWare Team Cox's Bazar">
                        </div>
                    </div>
                </div>
                <div class="about-gallery__box">
                    <div class="about-gallery__wrapper d-flex align-items-start">
                        <div class="about-gallery__image"><img
                                src="<?php echo Helper::get_img('gallery/career-4.jpg'); ?>" alt="Team View SovWare"></div>
                        <div class="about-gallery__image"><img src="<?php echo Helper::get_img('gallery/5.jpg'); ?>" alt="Team SovWare">
                        </div>
                        <div class="about-gallery__image"><img src="<?php echo Helper::get_img('gallery/6.jpg'); ?>" alt="wpWax Team">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- ends: .inside-gallery -->

<section class="circular-area pt-130 pt-100" id="open_positions">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <span class="about-intro__subtitle color-primary">OPEN POSITIONS</span>
                    <h2 class="display-2">Be a Part of Something Great</span></h2>
                    <p>Take a look at our current opportunities. We would love to <br> have you on board!</p>
                </div>
            </div>
        </div>
        <?php if (Theme::$options['job_opening']) : ?>
        <?php get_template_part('template-parts/open-jobs'); ?>
        <?php else : ?>
        <p class="no-job text-center">Currently there is no open jobs, we'll update this page when a position is
            available.</p>
        <?php endif; ?>
    </div>
</section>

<section class="cta-area mb-45">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-box gradient-reverse-bg theme-2">
                    <div class="cta-content d-flex">
                        <div class="cta-content__left"><img src="<?php echo Helper::get_svg('cta-1.svg'); ?>" alt="Join wpWax Team"></div>
                        <div class="cta-content__right">
                            <h2 class="display-3">Didn't find the perfect <br>role for you?</h2>
                            <p>We may be able to find the role that matches your skill <br> set perfectly. Tell us about
                                you and we would love to get <br> in touch with you shortly.</p>
                            <a href="<?php echo esc_url(THEME_CONTACT_URL); ?>" class="btn btn-primary btn-raised">Apply
                                Here</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();