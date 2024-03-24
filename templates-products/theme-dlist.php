<?php
/**
 * Template Name: Theme - Dlist
 * Template Post Type: download
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
ob_start();
?>

<div class="product-features">
	<div class="container">
		<div class="row align-items-center pb-120 content-first">
			<div class="col-lg-6">
				<img class="img-shadow" src="<?php echo Helper::get_img('single-product/compare-listing-1.png');?>">
			</div>
			<div class="col-lg-6">
				<div class="pl-100 pr-md-0 m-md-b">
					<h2 class="display-4 mb-25">Admin Can Customize The <br> Form Field and Other <br> Layouts</h2>
					<p>Admin can customize layout of post as he/she want. We provided a lot of customization option such as toggling the visibility of any module.</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="pr-100 pl-md-0 m-md-b order-lg-1 order-0">
					<h2 class="display-4 mb-25">Admin Can Customize The <br> Form Field and Other <br> Layouts</h2>
					<p>Admin can customize layout of post as he/she want. We provided a lot of customization option such as toggling the visibility of any module.</p>
				</div>
			</div>
			<div class="order-1 col-lg-6 order-lg-0">
				<img class="img-shadow" src="<?php echo Helper::get_img('single-product/compare-listing-2.png');?>">
			</div>
		</div>
	</div>
</div><!-- ends: .product-features -->
<div class="product-key-features">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="shape shape-bottom">
					<?php echo Helper::the_svg('shapes/circle-primary'); ?>
				</div>
				<div class="features-box">
					<h2 class="text-center display-3">Key Features</h2>
					<ul class="list-unstyled">
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Compare multiple listings(up to 5) in a single comparison table.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Compare the price, rating, category of multiple listings.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Supports custom fields to compare the directory items.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Display the compare button on All Listings and Single Listings page.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Display the compare button on Related Listings.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Display the compare button on the User Dashboard and Author Profile page.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Option to exclude the compare button on specific pages.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Ability to set the limit of comparing listings ranging from 2-5.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Fully translatable and 100% responsive.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<div class="product-gallery">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center section-header">
					<h1 class="display-3">Screenshots</h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="gallery-single">
					<figure>
						<a href=""><img src="<?php echo Helper::get_img('single-product/compare-listing/Compare_from_listings_page.jpg'); ?>" alt=""></a>
						<figcaption>
							<a href="<?php echo Helper::get_img('single-product/compare-listing/Compare_from_listings_page.jpg'); ?>"><?php echo wpwax_icon( 'uil uil-eye', false); ?></a>
						</figcaption>
					</figure>
					<span>Compare from listings page</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="gallery-single">
					<figure>
						<a href=""><img src="<?php echo Helper::get_img('single-product/compare-listing/Compare_in_single_listing_page.png'); ?>" alt=""></a>
						<figcaption>
							<a href="<?php echo Helper::get_img('single-product/compare-listing/Compare_in_single_listing_page.png'); ?>"><?php echo wpwax_icon( 'uil uil-eye', false); ?></a>
						</figcaption>
					</figure>
					<span>Compare in single listing page</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="gallery-single">
					<figure>
						<a href=""><img src="<?php echo Helper::get_img('single-product/compare-listing/Compare_page.jpg'); ?>" alt=""></a>
						<figcaption>
							<a href="<?php echo Helper::get_img('single-product/compare-listing/Compare_page.jpg'); ?>"><?php echo wpwax_icon( 'uil uil-eye', false); ?></a>
						</figcaption>
					</figure>
					<span>Compare page</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="gallery-single">
					<figure>
						<a href=""><img src="<?php echo Helper::get_img('single-product/compare-listing/Compared-listings.jpg'); ?>" alt=""></a>
						<figcaption>
							<a href="<?php echo Helper::get_img('single-product/compare-listing/Compared-listings.jpg'); ?>"><?php echo wpwax_icon( 'uil uil-eye', false); ?></a>
						</figcaption>
					</figure>
					<span>Compared-listings</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="gallery-single">
					<figure>
						<a href=""><img src="<?php echo Helper::get_img('single-product/compare-listing/Limit_exceed_notice.png'); ?>" alt=""></a>
						<figcaption>
							<a href="<?php echo Helper::get_img('single-product/compare-listing/Limit_exceed_notice.png'); ?>"><?php echo wpwax_icon( 'uil uil-eye', false); ?></a>
						</figcaption>
					</figure>
					<span>Limit exceed notice</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="gallery-single">
					<figure>
						<a href=""><img src="<?php echo Helper::get_img('single-product/compare-listing/Settings.png'); ?>" alt=""></a>
						<figcaption>
							<a href="<?php echo Helper::get_img('single-product/compare-listing/Settings.png'); ?>"><?php echo wpwax_icon( 'uil uil-eye', false); ?></a>
						</figcaption>
					</figure>
					<span>Settings</span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));