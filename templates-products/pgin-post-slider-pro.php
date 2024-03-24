<?php
/**
 * Template Name: Post Slider Pro
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
						<li class="has-child-list"><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Full control of how the slider displays.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Many options to control the design of the slider.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Four Themes.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Custom Post Type Supports</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Navigation Arrows display/hide option.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Advanced settings panel.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unique settings for each slider.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Advanced shortcode generator.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control number of posts to display on desktop, tablet and mobile devices.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Displaying posts from specific categories.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Displaying specific posts by ID.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Displaying posts by month and year.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>100% Responsive and mobile friendly.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Support all modern browsers.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Very lightweight.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Touch and Swipe Enabled so works great on devices like iPhone, iPad, Blackberry, Android etc.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unlimited posts display.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unlimited sliders.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Pagination.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Navigational arrow color and its background color change options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Post title font size, color, hover color change options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Border color and border hover color change options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Auto images resize and crop.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Autoplay control.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Slide Speed control.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Mouse over stop.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Translation ready</li>
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