<?php
/**
 * Template Name: Theme - AppsPress
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Clean, Modern & Beautiful Design</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unyson Page Builder</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Fully Responsive</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Bootstrap 4</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>One click demo installation</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Working Contact Form</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>MailChimp Integrated</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Blog, Blog Single Post Included</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Font Awesome, Ionicons, & Linearicons (free)</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Super Easy To Customize</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Well Commented Code</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Well documented</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Left and right sidebar position</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Widget ready</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>3 post formats: standard, audio, video</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Blog and post sharing option</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Custom widgets</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Social profile links</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));