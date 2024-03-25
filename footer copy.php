<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
</div>
<footer class="site-footer border-top-1">
	<div class="container">
		<div class="pb-40 site-footer__top pt-80">
			<div class="row">
				
				<div class="col-md-3">
					<a class="footer-logo" aria-label="wpwax logo" href="<?php echo esc_url(home_url('/')); ?>"><?php echo Helper::the_svg( 'logo' ); ?></a>
					<div class="address-block">
						<address>HiqmaTrip Limited is a B2B and B2C Online Ticketing Platform which aims to build a dynamic and service oriented travel market in Bangladesh.</address>
					</div>
					<div class="footer-social">
						<ul class="mb-0 ml-0 icons list-unstyled">
							<li class="facebook-f" title="Facebook">
								<a aria-label="wpwax facebook" target="_blank" href="https://www.facebook.com/wpwax">
									<?php echo wpwax_icon( 'uil uil-facebook-f', false); ?>
								</a>
							<li class="twitter" title="Twitter"><a aria-label="wpwax twitter" target="_blank" href="https://twitter.com/wpwaxofficial">
								<?php echo wpwax_icon( 'uil uil-twitter', false); ?>
							</a></li>
							<li class="instagram" title="Instagram"><a aria-label="wpwax instagram" target="_blank" href="https://www.instagram.com/wpwaxofficial">
								<?php echo wpwax_icon( 'uil uil-instagram', false); ?>
							</a></li>
							<li class="linkedin" title="Linkedin"><a aria-label="wpwax linkedin" target="_blank" href="https://www.linkedin.com/company/wpwax">
								<?php echo wpwax_icon( 'uil uil-linkedin', false); ?>
							</a></li>
							<li class="wordpress" title="WordPress"><a aria-label="wpwax wordpress" target="_blank" href="https://profiles.wordpress.org/wpwax">
							<?php echo wpwax_icon( 'uil uil-wordpress', false); ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="widget">
						<h3 class="widgettitle">Company</h3>
						<?php wp_nav_menu(Helper::get_nav_menu_args('footer-2')); ?>							
					</div>
				</div>
				<div class="col-lg-2">
					<div class="widget">
						<h3 class="widgettitle">Contact</h3>
						<?php wp_nav_menu(Helper::get_nav_menu_args('footer-3')); ?>							
					</div>
				</div>
				<div class="col-lg-2">
					<div class="widget">
						<h3 class="widgettitle">Business with Us</h3>
						<?php wp_nav_menu(Helper::get_nav_menu_args('footer-4')); ?>							
					</div>
				</div>

				<div class="col-lg-3">
					<div class="widget widget_text footer-updated-text">
						<h3 class="widgettitle">Payment Method</h3>
						<a href="#" class="payment-method-img">
                              <img src="<?php echo Helper::get_img( 'method.png' );?>" alt="method">
						</a>
					</div>
				</div>
			</div>
		</div> 
		<div class="site-footer__bottom">
			<div class="row">
				<div class="col-md-6">
					<div class="copyright-text">&copy; hiqmatrip.com - <?php echo date("Y"); ?>. All Rights Reserved.</div>
				</div>
				<div class="col-md-6">
					<div class="text-right footer-navigation"><?php wp_nav_menu(Helper::get_nav_menu_args('footer')); ?></div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>