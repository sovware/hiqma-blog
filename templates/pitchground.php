<?php
/**
 * Template Name: Pitchground
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

// EDD::instance()->generate_batch_coupon_code();
// die();

if ( ! is_user_logged_in() ) {
	wp_redirect( THEME_DASHBOARD_URL );
	exit();
}
$error = isset( $_POST['error'] ) ? sanitize_text_field( $_POST['error'] ) : null;

get_header();
?>

<section class="authentication-intro-area position-relative intro-box">
    <div class="shape banner-shape"><?php echo Helper::the_svg( 'shapes/authentication-bg2' ); ?></div>
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
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="regiater-form-wrapper">

				<?php if ( $error ): ?>
					<code class="text-center d-block mb-1"><?php echo esc_html( $error ); ?></code>
				<?php endif;?>
                <div class="regiater-form-wrapper__logos">
                    <div class="wp-wax">
                    <?php echo Helper::the_svg( 'logo' ); ?>
                    </div>
                    <div class="plus">
                    <?php echo Helper::the_svg( 'icons/plus' ); ?>
                    </div>
                    <div class="pithgorund">
                    <?php echo Helper::the_svg( 'pitchground' ); ?>
                    </div>
                </div>
				<form action="" method="post" id="pitchground-form">

					<div class="mb-4">
						<label for="coupon" class="form-label">Coupon Code</label>
						<input type="text" class="form-control" id="coupon" name="coupon" placeholder="PG-XXXXXXXXXXXX">
					</div>

					<div class="mb-4">
						<input type="submit" class="submit-button" id="submit" value="Submit">
					</div>
					<input type="hidden" class="form-control " name="pitchground">

				</form>

            </div>
        </div>
    </div>
</div>

<?php
get_footer();