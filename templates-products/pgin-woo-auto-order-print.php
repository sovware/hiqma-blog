<?php
/**
 * Template Name: wooComerce-auto-order-print
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Automatically print new order information instantly.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Unlimited use of printers.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> 3 different themes for widget.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Print order 24/7.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Save order’s information to your Google Drive automatically.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));