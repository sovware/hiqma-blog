<?php
/**
 * Template Name: Login
 * 
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

if ( is_user_logged_in() ) {
    wp_redirect(THEME_DASHBOARD_URL);
    exit();
}

get_header();
?>

<section class="authentication-intro-area position-relative intro-box">
    <div class="shape banner-shape"><?php echo Helper::the_svg('shapes/authentication-bg'); ?></div>
    <div class="groupShape-intro__content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="display-3">Hey there</h1>
                    <p class="groupShape-intro__text">It's good to see you!</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- ends: .authentication-intro-area -->

<div class="login-area pb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <?php echo do_shortcode('[edd_login]'); ?>
            </div>
        </div>
    </div>
</div><!-- ends: .login-area -->

<?php
get_footer();