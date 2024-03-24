<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?> 
<div class="dir-mega-menu dir-mega-menu--plugin dir-mega-menu-resource">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<div class="dir-mega-menu__item">
					<div class="row">
						<div class="col-12">
							<div class="dir-mega-menu__list">
								<a href="<?php echo esc_url( THEME_HELPGENT ); ?>" rel="nofollow" class="mega-list-single media color-helpgent">
								<span class="mega-list-icon"><img width="18" height="26" src="<?php echo Helper::get_img( 'helpgent-icon.png' );?>"></span>
									<div class="mega-list-content media-body">
										<h6>HelpGent <span class="new-badge">new</span></h6>
										<p>Your help agent for video, voice, text 
messaging, and screen sharing</p>
									</div>
								</a>
								<a href="<?php echo esc_url( THEME_DIRECTORIST ); ?>" target="_blank" class="mega-list-single media color-directorist">
									<span class="mega-list-icon"><img width="18" height="26" src="<?php echo Helper::get_img( 'directorist-icon.png' );?>"></span>
									<div class="mega-list-content media-body">
										<h6>Directorist</h6>
										<p>Create unlimited business directory 
listing websites</p>
									</div>
								</a>
								<a href="<?php echo esc_url( PRODUCT_CAROUSEL_SLIDER_GRID ); ?>" class="mega-list-single media color-product-grid">
									<span class="mega-list-icon"><?php echo Helper::the_svg('icons/product-slider-icon'); ?></span>
									<div class="mega-list-content media-body">
										<h6>Product Carousel Slider & Grid</h6>
										<p>Display products using Carousel, Slider, 
and Grid on your websites</p>
									</div>
								</a>
								<a href="<?php echo esc_url( PRODUCT_LOGO_SHOWCASE ); ?>" class="mega-list-single media color-logo-showcase">
									<span class="mega-list-icon"><?php echo Helper::the_svg('icons/logo-showcase-icon'); ?></span>
									<div class="mega-list-content media-body">
										<h6>Logo Showcase</h6>
										<p>Set up & show your logo responsively 
just using a shortcode</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="dir-mega-menu__item">
					<div class="row">
						<div class="col-12">
							<div class="dir-mega-menu__list">
								<a href="<?php echo esc_url( PRODUCT_LEGAL_PAGES ); ?>" rel="nofollow" class="mega-list-single media color-legal-pages">
									<span class="mega-list-icon"><?php echo Helper::the_svg('icons/legal-pages-icon'); ?></span>
									<div class="mega-list-content media-body">
										<h6>Legal Pages</h6>
										<p>Place suitable legal pages on your 
websites based on your service</p>
									</div>
								</a>
								<a href="<?php echo esc_url( PRODUCT_POST_GRID_SLIDER ); ?>" class="mega-list-single media color-grid-slider">
									<span class="mega-list-icon"><?php echo Helper::the_svg('icons/post-slider-icon'); ?></span>
									<div class="mega-list-content media-body">
										<h6>Post Grid, Slider & Carousel</h6>
										<p>Display your blog posts in grid, slider, & 
carousel</p>
									</div>
								</a>
								<a href="https://wpwax.com/plugins/" class="btn btn-primary btn-transparent btn-demo view-product" rel="nofollow">View all products<?php echo Helper::the_svg('ionic-ios-arrow-round-forward'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .dir-mega-menu -->