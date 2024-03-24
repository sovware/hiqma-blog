<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
extract( $args );
?>

<section class="helpgent-cta-2">
	<div class="product-cta">
		<div data-jarallax data-speed="0.2" class="jarallax">
			<img class="jarallax-img" style="background-image: url('<?php echo Helper::get_img( 'blog/scroll-img.png' );?>')" alt="">
		</div>
		<div class="product-cta__content">
			<button class="top" type="button">
				<img src="<?php echo Helper::get_img( 'blog/helpgent-logo.png' );?>" alt="helpgent">
				HelpGent
			</button>
			<h2 class="mt-0 product-cta__title"><?php echo esc_html( $title ); ?></h2>
			<p class="product-cta__subtitle"><?php echo esc_html( $description ); ?></p>
			<div class="button-wrapper">
				<a target="_blank" href="https://wpwax.com/helpgent/" class="get-started">
					Get Started
				</a>
				<a target="_blank" href="https://demo.wpwax.com/helpgent/" class="btn-light-all">
					Try Demo
				</a>
			</div>
		</div>
	</div>
</section>