<?php
/**
 * Template Name: Theme - Rida
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>3 different Home Page Versions (Image, Slider, and Video versions)</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>One-click Demo Import</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>The mighty Drag-and-drop Unyson Page Builder</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Very easy to customize</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Powerful but easy Theme Options</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Very Lightweight.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>1000+ beautiful icons</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Free google font</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>SEO optimized</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Widget Ready</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Necessary updates time by time.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>8+ shortcodes</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Translation-Ready</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Lightbox and sortable portfolio</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Dedicated support</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Sidebar support</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Google map</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Lightbox and sortable dynamic portfolio</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Contact form support with Contact form 7 plugin</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Masonry Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));