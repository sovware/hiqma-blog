<?php
/**
 * Template Name: Home Page
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style(  'tiny-slider' );
	wp_enqueue_script( 'tiny-slider' );
	wp_enqueue_script( 'waypoints' );
	wp_enqueue_script( 'jquery-counterup' );
}, 14 );

get_header();
?>

<section class="overflow-hidden sovware-banner-area position-relative gradientHmBanner">
	<div class="sovware-banner pt-200 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="sovware-banner__content">
						<h1 class="">A Reliable Marketplace <br> for WordPress <span class="color-success">Plugins</span> <br> <span class="text-lighter">&</span> <span class="color-pink">Themes</span> </h1>
						<p>We create professional WordPress based products to empower and help your business grow faster.</p>
						<a href="<?php echo esc_url( THEME_PLUGIN_URL ); ?>" class="btn btn-primary">Explore Products</a>
						<div class="mt-40 badge-wrap">
							<span class="badge badge-wide badge-rounded">Trusted by over <span class="color-pink digit">50,000</span> happy customers worldwide</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="sovware-banner__img grid--out">
						<div class="shade-bg"></div>
						<img width="770" hight="550" src="<?php echo Helper::get_img('wp-banner.png');?>" alt="WordPress Plugins & Themes of wpWax">
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .sovware-banner-area -->


<section class="popular-plugin-area pt-120">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center section-header">
					<h2 class="display-3">Featured WordPress Plugins</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="product-card product-card--2">
					<div class="product-card__img">
						<a href="https://wpwax.com/helpgent/">
							<img width="480" height="280" src="<?php echo Helper::get_img('blog-bg1.png');?>" alt="HelpGent">
						</a>
					</div>
					<div class="mt-20 badge-wrap">
							<span class="badge badge-sm badge-success badge-rounded">Featured Plugin</span>
							<span class="badge badge-sm badge-danger badge-rounded">NEW</span>
						</div>
					<div class="product-card__top">
						<h2 class="product-title">
							<a href="https://wpwax.com/helpgent/" target="_self">HelpGent</a>
						</h2>
						<p>Engage in a better way with your audience on a more personal level</p>
					</div>
					<div class="product-actions">
						<a href="https://wpwax.com/helpgent/" target="_self" class="btn btn-primary btn-transparent">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="product-card product-card--2">
					<div class="product-card__img">
						<a href="https://directorist.com/">
							<img width="480" height="280" src="<?php echo Helper::get_img('blog-bg2.png');?>" alt="HelpGent">
						</a>
					</div>
					<div class="mt-20 badge-wrap">
							<span class="badge badge-sm badge-success badge-rounded">Featured Plugin</span>
							<span class="badge badge-cs badge-rounded color-dark"><span class="badge badge-xs badge-danger badge-rounded">10,000+</span>Happy customers</span>
						</div>
					<div class="product-card__top">
						<h2 class="product-title">
							<a href="https://directorist.com/" target="_self">Directorist</a>
						</h2>
						<p>Create unlimited business directory listing websites</p>
					</div>
					<div class="product-actions">
						<a href="https://directorist.com/" target="_self" class="btn btn-primary btn-transparent">View Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .popular-plugin-area -->

<section class="popular-plugin-area pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center section-header">
					<h2 class="display-3">Popular WordPress Plugins</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="product-card-box">
					<div class="row">
						<?php
						$query = Helper::home_product_query( 'plugin' );
						while ($query->have_posts()) {
							$query->the_post();
							?>
							<div class="col-lg-4">
								<?php get_template_part('template-parts/card-plugin'); ?>
							</div>
							<?php
						}
						wp_reset_postdata();
						?>
					</div>
				</div><!-- ends: .product-card-box -->
				<div class="text-center view-all-action mt-25">
					<a href="<?php echo esc_url( THEME_PLUGIN_URL ); ?>" class="btn-link">Browse All Plugins<?php echo Helper::the_svg( 'icons/arrow-right' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .popular-plugin-area -->

<section class="popular-theme-area pb-120">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center section-header">
					<h2 class="display-3">Best WordPress Directory Theme</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="product-card-box">
					<div class="row">
						<div class="col-lg-4">
							<div class="product-card theme-2">
								<div class="product-card__img">
									<a href="https://directorist.com/product/dclassified/" target="_blank">
										<img width="320" height="213" src="<?php echo Helper::get_img('/themes/dClassified.png');?>" alt="WordPress Plugins & Themes of wpWax" >
									</a>
								</div>

								<div class="product-card__top">
									<h5 class="product-title"><a href="https://directorist.com/product/dclassified/" target="_blank">dClassified</a></h5>
									<p>The Best Classified Ads WordPress Theme for Classified Listing Business</p>
								</div>
								
								<div class="product-actions">
									<a href="https://demo.directorist.com/theme/dclassified/" class="btn btn-primary btn-transparent" target="_blank">Preview</a>
									<a href="https://directorist.com/product/dclassified/" target="_blank" class="btn btn-white btn-outlined">Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="product-card theme-2">
								<div class="product-card__img">
									<a href="https://directorist.com/product/drestaurant/" target="_blank">
										<img width="320" height="213" src="<?php echo Helper::get_img('/themes/dRestaurant.png');?>" alt="WordPress Themes - wpWax" >
									</a>
								</div>

								<div class="product-card__top">
									<h5 class="product-title"><a href="https://directorist.com/product/drestaurant/" target="_blank">dRestaurant</a></h5>
									<p>Restaurant Directory Theme for WordPress</p>
								</div>
								
								<div class="product-actions">
									<a href="https://demo.directorist.com/theme/drestaurant/" class="btn btn-primary btn-transparent" target="_blank">Preview</a>
									<a href="https://directorist.com/product/drestaurant/" target="_blank" class="btn btn-white btn-outlined">Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="product-card theme-2">
								<div class="product-card__img">
									<a href="https://directorist.com/product/dhotels/" target="_blank">
										<img width="320" height="213" src="<?php echo Helper::get_img('/themes/dHotels.png');?>" alt="WordPress Plugins & Themes of wpWax" >
									</a>
								</div>

								<div class="product-card__top">
									<h5 class="product-title"><a href="https://directorist.com/product/dhotels/" target="_blank">dHotels</a></h5>
									<p>The Best Hotel Directory WordPress Theme</p>
								</div>
								
								<div class="product-actions">
									<a href="https://demo.directorist.com/theme/dhotels/" class="btn btn-primary btn-transparent" target="_blank">Preview</a>
									<a href="https://directorist.com/product/dhotels/" target="_blank" class="btn btn-white btn-outlined">Details</a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- ends: .product-card-box -->
				<div class="text-center view-all-action mt-25">
					<a href="<?php echo esc_url( THEME_DIRECTORIST_THEMES ); ?>" target="_blank" class="btn-link">Browse All Themes<?php echo Helper::the_svg( 'icons/arrow-right' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .popular-theme-area -->

<section class="theme-feature-area pb-120">
	<div class="shape shape-bg theme-feature-bg">
		<?php echo Helper::the_svg('shapes/shape-bg-1'); ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="theme-feature-box">
					<div class="row">
						<div class="col-12">
							<div class="text-center section-header">
								<h2 class="display-3">What Makes <span class="color-primary">wpWax</span> Special</h2>
								<p>We provide extensive user-centric WordPress based solutions with our amazing <br> products around the world. Wpwax is special for</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="theme-feature-item">
								<div class="theme-feature-item__icon icon-box box-circle box-md gradientVioletReverse">
									<?php echo Helper::the_svg('icons/toggle'); ?>
								</div>
								<div class="theme-feature-item__content">
									<h5>Customize Without Code​</h5>
									<p>Change the design through a range of <br> options in the WordPress Customizer. No <br> coding knowledge necessary!</p>
								</div>
							</div>
							<div class="theme-feature-item">
								<div class="theme-feature-item__icon icon-box box-circle box-md gradientSuccessReverse">
									<?php echo Helper::the_svg('icons/hand-dollar'); ?>
								</div>
								<div class="theme-feature-item__content">
									<h5>User-friendly UI & UX</h5>
									<p>User-centric product creation is our prime <br> concern. Our products are based on <br> maintaining the most user-friendly UI and <br> UX.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="theme-feature-item">
								<div class="theme-feature-item__icon icon-box box-circle box-md gradientWarningReverse">
									<?php echo Helper::the_svg('icons/edit'); ?>
								</div>
								<div class="theme-feature-item__content">
									<h5>Extensive Documentation</h5>
									<p>Check out our detailed online documentation <br> and video tutorials to find out more about what you can do.</p>
								</div>
							</div>
							<div class="theme-feature-item">
								<div class="theme-feature-item__icon icon-box box-circle box-md gradientBlue">
									<?php echo Helper::the_svg('icons/sync'); ?>
								</div>
								<div class="theme-feature-item__content">
									<h5>Risk-Free, Double Guarantee</h5>
									<p>If you find problems getting our products <br> to work, we're more than happy to provide <br> a full refund up to 14 days after <br> the purchase was made.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="theme-feature-item">
								<div class="theme-feature-item__icon icon-box box-circle box-md gradientInfo">
									<?php echo Helper::the_svg('icons/info-book'); ?>
								</div>
								<div class="theme-feature-item__content">
									<h5>Constant Updates</h5>
									<p>We are continuously working on improving our products to give you the best experience. Each time we update, we try to ensure adding value to make your life way easier.</p>
								</div>
							</div>
							<div class="theme-feature-item">
								<div class="theme-feature-item__icon icon-box box-circle box-md gradientDanger">
									<?php echo Helper::the_svg('icons/user-chat'); ?>
								</div>
								<div class="theme-feature-item__content">
									<h5>World Class Dedicated Support</h5>
									<p>We can take pride as our dedicated <br> support team is always there for you to <br> solve your issues and make things easier to <br> run your website.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="theme-feature-counter d-flex justify-content-between">
					<div class="text-center theme-feature-counter__single gradient-pink">
						<div class="theme-feature-counter__icon">
							<?php echo Helper::the_svg( 'icons/users' ); ?>
						</div>
						<div class="theme-feature-counter__content">
							<span class="counter-count">20</span>
							<span class="counter-sign">+</span>
							<p class="count-text">Team Members</p>
						</div>
					</div>
					<div class="text-center theme-feature-counter__single gradient-warning">
						<div class="theme-feature-counter__icon">
							<?php echo Helper::the_svg( 'icons/eye-2' ); ?>
						</div>
						<div class="theme-feature-counter__content">
							<span class="counter-count">22</span>
							<span class="counter-sign">+</span>
							<p class="count-text">Amazing Products</p>
						</div>
					</div>
					<div class="text-center theme-feature-counter__single gradient-primary">
						<div class="theme-feature-counter__icon">
							<?php echo Helper::the_svg( 'icons/dwonload' ); ?>
						</div>
						<div class="theme-feature-counter__content">
							<span class="counter-count">1</span>
							<span class="counter-sign">M+</span>
							<p class="count-text">Product Downloads</p>
						</div>
					</div>
					<div class="text-center theme-feature-counter__single gradient-success">
						<div class="theme-feature-counter__icon">
							<?php echo Helper::the_svg( 'icons/smile-cap' ); ?>
						</div>
						<div class="theme-feature-counter__content">
							<span class="counter-count">50</span>
							<span class="counter-sign">K</span>
							<p class="count-text">Happy Customers</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .theme-feature-area -->

<section class="wpWax-testimonial-area pb-120">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center section-header">
					<h2 class="display-3">Trusted by over 50,000+ customers</h2>
				</div><!-- ends: .section-header --> 
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="wpWax-client-testimonial-wrap">
				<div id="tns-controls" class="tns-controls">
					<button type="button" id="prev" data-controls="prev">
						<?php echo wpwax_icon( 'uil uil-angle-left-b', false); ?>
					</button>
					<button type="button" id="next" data-controls="next">
						<?php echo wpwax_icon( 'uil uil-angle-right-b', false); ?>
					</button>
				</div>
					<div class="wpWax-client-testimonial">
						<div class="text-center wpWax-client-testimonial__single">
							<div class="wpWax-client-testimonial-shadbox shadebox-gradientPrimary"></div>
							<div class="wpWax-client-testimonial__content">
								<div class="testimonial-quote quote-primary"><?php echo Helper::the_svg( 'icons/quote-rotate' ); ?></div>
								<h4 class="testimonial-single-title">Useful plugin and it is working perfect for me</h4>
								<p>This plug-in help me with all my legal page on my personal website and all of my clients too. some of detail on the page may need a little bit adjustment. but over all, it is helpful for person who don’t know how to write the legal page for themself and don’t know what kind of legal page that we need for our website.. this will be guideline to help improve the website.</p>
								
								<div class="testimonial-author media">
									<div class="testimonial-author__image">
										<img width="50" height="50" src="<?php echo Helper::get_img( 'clients/4.jpeg' );?>" alt="357maelai">
									</div>
									<div class="testimonial-author__info media-body">
										<h6 class="author-title">357maelai</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center wpWax-client-testimonial__single">
							<div class="wpWax-client-testimonial-shadbox shadebox-gradientPrimary"></div>
							<div class="wpWax-client-testimonial__content">
								<div class="testimonial-quote quote-primary"><?php echo Helper::the_svg( 'icons/quote-rotate' ); ?></div>
								<h4 class="testimonial-single-title">Great plugin, great support!</h4>
								<p>The plugin has several options with which one can modify the look of it. I especially want to complement the great support I got. I asked whether it would be possible to get a new feature to the plugin and it didn’t take long and they had updated the plugin to include the requested feature. Great plugin and a great team behind it!</p>
								<div class="testimonial-author media">
									<div class="testimonial-author__image">
										<img width="50" height="50"  src="<?php echo Helper::get_img( 'blank-avatar.jpg' );?>" alt="wpWax Person Placeholder">
									</div>
									<div class="testimonial-author__info media-body">
										<h6 class="author-title">artbykim</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center wpWax-client-testimonial__single">
							<div class="wpWax-client-testimonial-shadbox shadebox-gradientPrimary"></div>
							<div class="wpWax-client-testimonial__content">
								<div class="testimonial-quote quote-primary"><?php echo Helper::the_svg( 'icons/quote-rotate' ); ?></div>
								<h4 class="testimonial-single-title">best plugin</h4>
								<p>For my workplace project I had to use a plugin, I was looking for a plugin to meet my needs, it is extremely great and powerful and solved my problem. I have to say the support team solved my problem with very good, respectful and compassionate behavior. I suggest you use this plugin.❤️❤️❤️❤️</p>
								<div class="testimonial-author media">
									<div class="testimonial-author__image">
										<img width="50" height="50"  src="<?php echo Helper::get_img( 'blank-avatar.jpg' );?>" alt="wpWax Person Placeholder">
									</div>
									<div class="testimonial-author__info media-body">
										<h6 class="author-title">mrbugx</h6>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ends: .wpWax-client-testimonial -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="text-center view-all-action mt-35">
					<a href="<?php echo esc_url( THEME_TESTIMONIALS_URL ); ?>" class="btn-link">See All Reviews<?php echo Helper::the_svg( 'icons/arrow-right' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .theme-feature-area -->

<section class="mb-20 cta-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center cta-box gradient-bg-primary">
					<h2 class="display-3">We're Confident Enough About<br>Our Products</h2>
					<p>Take a look at all of our free and premium products. We believe that <br> you’ll love them!</p>
					<div class="btn-list">
						<a href="<?php echo esc_url( THEME_PLUGIN_URL ); ?>" class="btn btn-primary btn-raised">Browse Plugins</a>
						<a href="<?php echo esc_url( THEME_THEME_URL ); ?>" class="btn btn-success btn-raised">Browse Themes</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .cta-area -->


<?php
get_footer();
