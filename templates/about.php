<?php

/**
 * Template Name: About Page
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header();
?>

<section class="about-intro pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center about-intro__text">
                    <span class="about-intro__subtitle color-pink">Who we are</span>
                    <h1 class="pt-20 pb-20 m-0 display-1">A Team of Highly Skilled and Dedicated Professionals</h1>
                    <p>We’re the people of diverse expertises to make your web experience even better. <br> We started
                        off our journey with the belief of diversity and inclusion to make your <br> business grow
                        faster.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .about-intro -->

<div class="about-gallery">
    <div class="about-gallery__masonry d-flex">
        <div class="about-gallery__left d-flex">
            <div class="about-gallery__item item-long">
                <img src="<?php echo Helper::get_img('gallery/about-1.jpg'); ?>" alt="SovWare Workstation">
            </div>
            <div class="about-gallery__item item-long">
                <img src="<?php echo Helper::get_img('gallery/about-2.jpg'); ?>" alt="SovWare Table Tennis">
            </div>
        </div>
        <div class="about-gallery__right d-flex flex-column">
            <div class="about-gallery__item item-wide">
                <img src="<?php echo Helper::get_img('gallery/about-3.jpg'); ?>" alt="SovWare">
            </div>
            <div class="about-gallery__item item-wide">
                <img src="<?php echo Helper::get_img('gallery/9.jpg'); ?>" alt="Team SovWare">
            </div>
        </div>
    </div>
</div><!-- ends: .about-gallery -->

<section class="about-brif-area pt-110 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="sovware-shape shape-brif">
                    <img src="<?php echo Helper::get_img('circles/circle-group.png'); ?>" alt="Placeholder Image">
                </div>
                <div class="section-header">
                    <span class="color-primary sub-title">Our mission</span>
                    <h2 class="display-2">We Bake Intuitive Web <br> Based Tools to Power Up <br> Businesses Around the
                        <br> Globe</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="brif-content">
                    <p>Our common goal is to make the world a better place by serving people's needs in the best way
                        possible, especially through our amazing products and services.</p>
                    <p>Being a team of 25+ awesome members, we always focus on delivering e customer centric products.
                        Therefore, we always like to think out of the box while planning a project and create something
                        that our customers like. Our ultimate mission is to become a one stop web based solution
                        provider where anyone can serve different types of purposes.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .about-brif-area -->

<section class="our-value-area bg-gray pt-110 pb-30">
    <div class="container">
        <div class="row">
            <div class="text-center col-12">
                <div class="section-header">
                    <h2 class="display-1">Values at wpWax</h2>
                    <p>Having clear values as a company helps us ensure that we all are on the same page & driving <br>
                        towards the same direction.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="value-single">
                    <h4>Customer Satisfaction</h4>
                    <p>Our team incorporates the virtues of candor and transparency to understand the customers need
                        that helps us to corroborate customer satisfaction.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-single">
                    <h4>Trustworthiness</h4>
                    <p>We have been developing products since 2015 with diligence to ensure quality and build strong
                        relationships with our users, setting new standards of trust. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-single">
                    <h4>Constant Improvement</h4>
                    <p>We reinvest our success back for team refinements and focus on enhancing the standard of the
                        products for the sustainability and prosperity of our company.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="value-single">
                    <h4>Teamwork</h4>
                    <p>We work collectively to facilitate our dreams of creating amazing products and generate ideas
                        more effectively to ensure the success of our company. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-single">
                    <h4>Recreation & Sports</h4>
                    <p>We believe recreation is a form of resurgence and boosts efficiency. We play table tennis and
                        cricket to rejuvenate our minds and to keep our body fit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-single">
                    <h4>Diversity</h4>
                    <p>We are a diverse team of 18 members with different views and experiences, harnessing them to
                        develop innovative and industry-standard products. </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .our-value-area -->

<section class="team-area pt-110 pb-30" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center section-header">
                    <h2 class="display-2">Meet Our Leadership</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/1.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Masud Rana</h6>
                        <span class="team-single__designation">CEO & Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/2.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Robiul Islam Sumon</h6>
                        <span class="team-single__designation">Co-Founder & Chairman</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/3.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Ripon Sardar</h6>
                        <span class="team-single__designation">Senior Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/4.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Abdur Rahim</h6>
                        <span class="team-single__designation">COO & Chief Design Officer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/8.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Md Obidullah (obiPlabon)</h6>
                        <span class="team-single__designation">Chief Technology Officer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/6.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Rafiz Sejim</h6>
                        <span class="team-single__designation">Chief Product Officer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/7.png'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Syed Sazzadul Bari</h6>
                        <span class="team-single__designation">Chief Marketing Officer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/9.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Rafiqul Islam</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/10.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Shamim Ahmed</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/12.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Nazmul Hasan</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/13.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Armanul Islam</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/27.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Md Habibur Rahman</h6>
                        <span class="team-single__designation">Administrative Officer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/14.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Syed Galib Ahmed</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/15.png'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Rezaul Islam</h6>
                        <span class="team-single__designation">UI/UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/16.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Rabbi Islam</h6>
                        <span class="team-single__designation">Frontend Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/17.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Tanjim Hasan</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/20.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Saikat Hasan</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/21.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Md Mehedi Hasan</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/22.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Hamim Khan</h6>
                        <span class="team-single__designation">Technical Content Writer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/23.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Fahim Fida</h6>
                        <span class="team-single__designation">Technical Content Writer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/26.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Rashedul Islam</h6>
                        <span class="team-single__designation">Support Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/29.png'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Ibrahim Riaz</h6>
                        <span class="team-single__designation">Frontend Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/31.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Md Shakil Hossen</h6>
                        <span class="team-single__designation">Mobile App Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/32.png'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Ashik Rahman</h6>
                        <span class="team-single__designation">Motion Graphics Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/33.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Rafiul Islam</h6>
                        <span class="team-single__designation">Graphic Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/34.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Al-Amin Khan</h6>
                        <span class="team-single__designation">Support Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/35.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Mahfuz Alam</h6>
                        <span class="team-single__designation">Support Lead</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/36.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>AKM Aminul Islam</h6>
                        <span class="team-single__designation">Business Development Analyst</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/37.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Md Al Amin</h6>
                        <span class="team-single__designation">Software Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/38.png'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Abrar Faysal</h6>
                        <span class="team-single__designation">Support Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center team-single">
                    <figure><img src="<?php echo Helper::get_img('team/39.jpg'); ?>" alt="directory listing website"></figure>
                    <div class="team-single__content">
                        <h6>Talha Arefin</h6>
                        <span class="team-single__designation">Support Engineer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .team-area -->

<section class="cta-area mb-45">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center cta-box gradient-bg-primary">
                    <h2 class="display-3">Let's Make the World Easier <br> Together Through Technology</h2>
                    <a href="<?php echo esc_url(THEME_CAREER_URL); ?>" class="btn btn-pink btn-raised">Join Our Growing
                        Team</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .cta-area -->

<?php
get_footer();
