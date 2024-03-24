<?php
/**
 * Template Name: Book Showcase Pro
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>100% responsive and display nicely on any devices including mobile and tablets.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Supports all modern browsers.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Super light weight.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>High quality code and security.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Does not slow down your site.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display books in a very beautiful 3D style.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Display Unlimited number of books.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Pagination.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Shortcode Generator.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Ability to Add front cover image for the book.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Ability to add back cover image for the book.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Choose unique style for every book.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Add beautiful color to your every book.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Download button inside the book.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Books categorization.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Displaying books by book id, month, year, category and author.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control the font size of title and the author name.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control the style of your book button.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control the style of pagination.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Control the style of pagination inside the book.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>You can change the style of book download button.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Many more...</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));