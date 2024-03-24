<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
extract( $args );
?>

<section class="dir-cta-2">
	<div class="product-cta">
		<img class="product-cta__img" width="475" height="440" src="<?php echo Helper::get_img( 'blog/dir-posts.png' );?>" alt="directorist blog post">
		<div class="product-cta__content">
			<h2 class="mt-0 product-cta__title"><?php echo esc_html( $title ); ?></h2>
			<p class="product-cta__subtitle"><?php echo esc_html( $description ); ?></p>
			<div class="button-wrapper">
				<a target="_blank" href="https://directorist.com/" class="get-started">
					Get Started
				</a>
				<a target="_blank" href="https://directorist.com/demos/" class="btn-light-all">
					Try Demo
				</a>
			</div>
		</div>
	</div>
</section>
