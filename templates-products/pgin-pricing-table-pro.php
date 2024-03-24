<?php
/**
 * Template Name: Pricing Table Pro
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Full control of how the pricing table displays.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Many options to control the design of the pricing table.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>6 Beautiful Themes.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Ability to add ribbon to any package and customize the style and text of the ribbon.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unlimited pricing tables, columns and rows.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control the font sizes of the table.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Font Awesome icon support.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unique settings for each Pricing Table.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Advanced shortcode generator.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>100% Responsive and mobile friendly.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Support all modern browsers.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Translation ready.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Very lightweight.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Codes are highly optimized.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>It does not make your database heavy.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Codes are written using modern coding standards.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>All codes are highly secured and all inputs are strictly validated to ensure 100% security.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>And many more features.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));