<?php

/**
 * Template Name: Black Friday - 2023
 *
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

 namespace Sovware\Theme;

 $args = [
     'post_type'    => 'download',
     'posts_per_page'    => -1,
     'post__not_in'    => [3348,3341,3273],
     'meta_query' => array(
         array(
             'key'     => 'theme_product_type',
             'value'   => 'plugin',
             'compare' => 'IN',
         ),
     ),
 ];
 
 $query = new \WP_Query($args);
 
 get_header();
 ?>

<section class="pricing-intro-area position-relative bfcm_pricing-intro bfcm-bg"
	style="background-image: url('<?php echo Helper::get_img( 'black-friday.png' );?>');">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center pricing-intro-content theme-bfcm theme-comming-soon">
					<div class="mb-40 bfcm-img">
						<img src="<?php echo Helper::get_svg('bfcm-campaign.svg');?>"
							alt="business directory plugin for wordpress">
					</div>
					<div class="deal-sale-content">
						<h1 class="intro-title display-2">ENJOY THE BIGGEST SALE OF THE YEAR <br> Don't Miss Out</h1>
						<!-- <p class="start-end">The Deal is Ending After</p>
						<div class="offer-countdown">
							<ul class="list-unstyled">
								<li><span class="loader-dot"></span><span>Days</span></li>
								<li><span class="loader-dot"></span><span>Hours</span></li>
								<li><span class="loader-dot"></span><span>Minutes</span></li>
								<li><span class="loader-dot"></span><span>Seconds</span></li>
							</ul>
						</div> -->
						<div class="pricing-deal-counter">
                            <span class="pricing-deal-text">Discount will be the same ONLY for next </span>
                            <ul class="ml-0 theme-sell-left list-unstyled pricing-deal-count">
                                <li><span class="loader-dot"></span></li>
                                <li><span class="loader-dot"></span></li>
                            </ul>
                            <span class="deal-warn">Purchases</span>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .pricing-intro-area -->

<section class="swbd_product-area theme-bfcm pb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="product-card product-card--3 theme-bfcm">
					<div class="product-card__offer-badge">
						<img src="<?php echo Helper::get_svg('50-off-badge-new.svg');?>">
					</div>
					<div class="product-card__img">
						<a href="https://wpwax.com/helpgent/pricing/"><img
								src="<?php echo Helper::get_img( 'helpgent-bfcm-2023.png' );?>"></a>
					</div>
					<div class="product-card__top">
						<h5 class="product-title"><a href="<?php echo THEME_HELPGENT; ?>">HelpGent - A Better Way to
								Connect With Your Audiences</a></h5>
					</div>
					<div class="product-card__bottom d-flex justify-content-between align-items-center">
						<span class="price-info pink"><span class="currency">$</span><span class="price">49</span><span
								class="text">Starting from</span></span> 
						<a href="https://wpwax.com/helpgent/pricing/" class="btn btn-primary btn-md btn-raised">Get
							Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-card product-card--3 theme-bfcm">
					<div class="product-card__offer-badge">
						<img src="<?php echo Helper::get_svg('50-off-badge-new.svg');?>">
					</div>
					<div class="product-card__img">
						<a href="https://directorist.com/pricing/" target="_blank"><img
								src="<?php echo Helper::get_img( 'direcotorist-bfcm-2023.png' );?>"></a>
					</div>
					<div class="product-card__top">
						<h5 class="product-title"><a href="<?php echo THEME_DIRECTORIST; ?>" target="_blank">Directorist
								- The Most Complete WordPress Directory Plugin</a></h5>
					</div>
					<div class="product-card__bottom d-flex justify-content-between align-items-center">
						<span class="price-info pink"><span class="currency">$</span><span class="price">55</span><span
								class="text">Starting from</span></span>
						<a href="https://directorist.com/pricing/" target="_blank"
							class="btn btn-primary btn-md btn-raised">Get Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="swbd_bfcm-product-box">
					<div class="row product-items-pricing">
						<?php
						while ($query->have_posts()) {
							$query->the_post();
							$id = $download_id = get_the_ID();
							$url = get_the_permalink();
							$img_id = get_post_thumbnail_id();
							$img = wp_get_attachment_image( $img_id, 'blogs' );
							
							if ( edd_has_variable_prices( $download_id ) ) {
								$prices = edd_get_variable_prices( $download_id );
								$price = $prices[1];
								$price = Helper::edd_main_price( $price, 1, $download_id );
							} else {
								$price = edd_price($download_id,false);
							}
							?>

						<div class="col-xl-4 col-md-6">
							<div class="product-card theme-bfcm">
								<div class="product-card__offer-badge">
									<img src="<?php echo Helper::get_svg('50-off-badge-new.svg');?>">
								</div>
								<div class="product-card__img">
									<a href="<?php echo $url; ?>"><?php echo $img; ?></a>
								</div>
								<div class="product-card__top">
									<h5 class="product-title"><a href="<?php echo $url; ?>"><?php the_title(); ?></a>
									</h5>
								</div>
								<div class="product-card__bottom d-flex justify-content-between align-items-center">
									<span class="price-info pink"><span class="currency">$</span><span
											class="price"><?php echo $price;?></span><span class="text">Starting
											from</span></span>
									<a href="<?php echo $url; ?>" class="btn btn-primary btn-md btn-raised">Get Now</a>
								</div>
							</div>
						</div>

						<?php
						}
						wp_reset_postdata();
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .swbd_product-area -->

<?php get_footer(); ?>