<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
extract( $args );
?>

<section class="legal-pages-cta">
	<div class="product-cta">
		<img class="product-cta__img" width="398" height="332" src="<?php echo Helper::get_img( 'blog/legal-pages-posts.png' );?>" alt="directorist blog post">
		<img class="product-cta__shape-bottom-right" width="207" height="207" src="<?php echo Helper::get_img( 'blog/circle.png' );?>" alt="directorist subscribe">
		<div class="product-cta__content">
			<button class="top" type="button">
				<img src="<?php echo Helper::get_img( 'blog/legal-pages-logo-white.png' );?>" alt="helpgent">
				Legal Pages
			</button>
			<h2 class="mt-0 product-cta__title"><?php echo esc_html( $title ); ?></h2>
			<p class="product-cta__subtitle"><?php echo esc_html( $description ); ?></p>
			<a target="_blank" href="https://wpwax.com/product/legal-pages-pro/" class="get-started">
				Get Started
			</a>
		</div>
	</div>
</section>