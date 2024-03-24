<?php
/**
 * Template Name: Theme - Extord
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Multi-purpose responsive theme</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Used for professional website, blog, landing page, agency website, business websites</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unlimited fonts and color use option</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Mostly customizable theme</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Sticky navigation, special template for creating beautiful landing page</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));