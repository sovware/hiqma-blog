<?php
/**
 * Template Name: WooCommerce Product Carousel Slider Pro
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>On sale, best selling, top rated and featured products display.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display by ID, sku, tags, category, month and year.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display products randomly.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Product excerpt and option to limit excerpt word.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display/hide excerpt with font size and color change options.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Enable/disable hover effect on product image.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Ribbon/badge for on sale, featured and out of stock products.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Customize ribbon/badge.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Edit “read more” and ribbon/badge text.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display/hide out of stock products.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>5 different themes.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>4 different header styles.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>2 different styles for pagination.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>2 different styles for navigation.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Scroll by per item or page.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Specify the scrolling direction.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control number of products to display on desktop, tablet and mobile devices.</li>
					</ul>
                    <h2 class="text-center display-3 mt-30">Also It Has Features Like:</h2>
                    <ul class="list-unstyled">
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Advanced settings panel.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unique settings for each carousel slider.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Advanced shortcode generator. No more pain of understanding shortcode attributes and write them.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unlimited products display.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Unlimited carousel slider.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control number of products to be displayed.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Auto images resize and crop.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Image upscaling enable/disable.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Autoplay control.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Slide Speed control.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Mouse over stop.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display/hide Title, pirce, star ratings, excerpt and cart button.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Navigational arrow color and background color change options.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Product title font size, color, hover color change options.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Price font size and color change options.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Product Star Ratings size and color change options.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Excerpt font size and color change options.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Cart button background color, font size and font color change options.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>100% Responsive and mobile friendly.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Touch and Swipe Enabled so works great on devices like iPhone, iPad, Blackberry, Android etc.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Support all modern browsers.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Very lightweight.</li>
                        <li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Translation ready.</li>
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