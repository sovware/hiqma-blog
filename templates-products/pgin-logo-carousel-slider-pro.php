<?php
/**
 * Template Name: Logo Carousel Slider Pro
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unique settings for each logo carousel slider.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unlimited logo carousel sliders with different logos.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Advanced shortcode generator. No more pain of understanding shortcode attributes and writing them.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Advanced settings panel.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Multiple logo carousel sliders on one page.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display logo in your desired order with easy Drag & Drop functionality.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Logos categorization.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Logos displaying from latest and older published, from specific categories, by logo id, from specific month and year.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control number of logos to display on desktop, tablet and mobile devices.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display logos randomly.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Custom widget with the ability to customize settings on widgets page.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Visual Composer Addon.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Right to left scrolling.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>A lot of variations in displaying navigation arrows.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Two different styles for pagination.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Tooltip.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Slide Speed control.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Mouse over stop option.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Super lightweight.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>RTL Language (eg. Arabic, Hebrew etc) Support.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Navigation arrows, background, hover color change options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Logo border color and hover color change options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Logo title font size, color, hover color change options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Tooltip font size, color, background color, hover color change options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Pagination color change option.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>100% Responsive and mobile friendly.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Touch and Swipe enabled so works great on devices like iPhone, iPad, Blackberry, Android etc.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Support all modern browsers.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>And many more...</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));