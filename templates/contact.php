<?php
/**
 * Template Name: Contact Page
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
get_header();
?>

<section class="conatct-intro-area groupShape-intro">
    <div class="shape-curve"><?php echo Helper::the_svg('shapes/shape-curve-white'); ?></div>
    <div class="groupShape-intro__content">
        <div class="groupShape-intro__shape"><?php echo Helper::the_svg('shapes/contact-intro-shapes'); ?></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="display-3">We'd Love to Hear from You</h1>
                    <p class="groupShape-intro__text"> Your thoughtful suggestions and sincere feedback is important to us. Please, feel free to let us know anything you have in your mind.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .conatct-intro-area -->

<section class="contact-form-area pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="contact-form-box">
                    <?php get_template_part('template-parts/form-contact'); ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .contact-form-area -->

<?php
get_footer();