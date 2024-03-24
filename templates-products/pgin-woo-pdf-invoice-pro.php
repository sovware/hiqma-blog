<?php
/**
 * Template Name: WooCommerce PDF invoice & More Pro
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
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Generate, Download and Print PDF invoice with QR Code.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Generate, download or print PDFs for shipping level, delivery note and dispatch level.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Download PDF invoice with 3 different pre-made templates.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Let customers to access their invoices from customer’s My Account page at any time</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Admin authorization options to download or show number of invoice from customer’s My Account page</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Send email from order table with the invoice attachment</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Match the template structure with Latest Accounting Standard</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Let customer allows to access their Invoice on Thankyou Page</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Personalize the download button interface on Thankyou Page</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Invoice mark as paid with custom Paid Mark</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Generate invoice number as order number or use custom number</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Automatically add bank details if the order is payable by Direct Bank Transfer</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Template footer section’s with your business slogan and web address</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Add another footer section containing terms & condition or return policy for your customer</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Fully integrated with WooCommerce</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Customizable font color for every PDFs</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Custom endpoint for My Account page</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Customizable date format to show into PDFs</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Support Custom Currency</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Use custom paper size that fits to your printer</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> QR Code with invoice summary</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>One click PDFs Download</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Very lightweight</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Translation ready</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));