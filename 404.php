<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$img = empty( Theme::$options['error_404img']['url'] ) ? Helper::get_svg( '404.svg' ) : Theme::$options['error_404img']['url'];

?>

<?php get_header();?>

<div id="primary" class="content-area error-page-area pb-100">
	<div class="container">
		<div class="error-page">

			<div class="error-page-img"><img src="<?php echo esc_url( $img );?>" alt="<?php esc_attr_e( '404', 'directorist' );?>"></div>
			<h1 class="error-code">404</h1>
			<h5><?php _e( "Sorry! the page you are looking for doesn't exist", 'directorist' ); ?></h5>
			<a class="btn btn-md btn-pink btn-raised" href="<?php echo home_url('/'); ?>">Return Home</a>

		</div>
	</div>
</div>

<?php get_footer(); ?>