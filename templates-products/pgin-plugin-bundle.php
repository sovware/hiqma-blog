<?php
/**
 * Template Name: Plugin Bundle
 * Template Post Type: download
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
ob_start();
?>

<div class="product-key-features wpwax_only-features pb-130">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="shape shape-bottom">
					<?php echo Helper::the_svg('shapes/circle-primary'); ?>
				</div>
				<div class="features-box">
					<h2 class="text-center display-3">Key Features</h2>
					<ul class="list-unstyled">
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Team Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Post Slider Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Legal Pages Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Pricing Table Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Book Showcase Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Logo Carousel Slider Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Logo Showcase Ultimate Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>WooCommerce Auto Order Print</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Post Grid, Slider and Carousel Ultimate Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>WooCommerce PDF Invoice & More Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>WooCommerce Product Carousel Slider Pro</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Product Carousel Slider and Grid Ultimate Pro for WooCommerce</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));