<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?> 
<div class="dir-mega-menu dir-mega-menu-resource">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-3">
				<div class="dir-mega-menu__item">
					<span class="dir-mega-menu__title">Help & Support</span>
					<div class="row">
						<div class="col-12">
							<div class="dir-mega-menu__list">
								<a href="<?php echo add_query_arg( 'tab', 'support', THEME_DASHBOARD_URL );?>" rel="nofollow" class="mega-list-single media danger">
									<span class="mega-list-icon"><?php echo Helper::the_svg('icons/chat'); ?></span>
									<div class="mega-list-content media-body">
										<h6>Support Center</h6>
										<p>Need help? Contact the wpWax support team</p>
									</div>
								</a>
								<a href="<?php echo esc_url( THEME_CONTACT_URL ); ?>" class="mega-list-single media warning">
									<span class="mega-list-icon"><?php echo Helper::the_svg('icons/envalope-open'); ?></span>
									<div class="mega-list-content media-body">
										<h6>Contact Us</h6>
										<p>Need help? Contact the wpWax support team</p>
									</div>
								</a>
								<a href="<?php echo esc_url( THEME_DOCS_URL ); ?>" class="mega-list-single media violet">
									<span class="mega-list-icon"><?php echo Helper::the_svg('icons/documents'); ?></span>
									<div class="mega-list-content media-body">
										<h6>Documentations</h6>
										<p>Check out our product specific user guides</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="dir-mega-menu__item ml-55">
					<span class="dir-mega-menu__title">Learning</span>
					<div class="row">
						<div class="col-12">
							<div class="dir-mega-menu__list">
								<a href="<?php echo esc_url( THEME_TESTIMONIALS_URL ); ?>" class="mega-list-single">
									<div class="mega-list-content">
										<h6>Testimonials</h6>
										<p>Take a look at what customers <br> say about wpWax</p>
									</div>
								</a>
								<a href="<?php echo site_url('/about-us/'); ?>" class="mega-list-single">
									<div class="mega-list-content">
										<h6>About Us</h6>
										<p>Learn more about team wpWax and its culture</p>
									</div>
								</a>
								<a href="<?php echo site_url('/about-us/#team'); ?>" class="mega-list-single">
									<div class="mega-list-content">
										<h6>Team</h6>
										<p>Behind every great human achievement, there is a team.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .dir-mega-menu -->