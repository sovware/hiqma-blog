<?php
/**
 * Template Name: Team Pro
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>6 Premium Quality and Modern Themes for displaying your members in very beautiful way.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>2 Premium Sliders themes.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Controls how many members to display on each slide.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>All themes and Sliders are 100% responsive. So, they display on every device perfectly.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Touch Enabled Slider.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>You can show custom team header.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Custom Team Title.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Custom Team Details.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>You can arrange members by Designation (s).</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>You can arrange members by ID (s).</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>You can arrange members Randomly.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control the number of members to display on each page.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Show or Hide Pagination.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Customize pagination color.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Customize pagination text and you may use fonts awesome icons on pagination text too.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Font Awesome supports.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unlimited colors and style options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Complete control on fonts size.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>100% Object Oriented codes.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Bullet-proof security.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>and many useful features.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));