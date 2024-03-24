<?php
/**
 * Template Name: Winter Sale Pricing Page
 *
 * @author  Sovware
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

<section class="pricing-intro-area position-relative bfcm_pricing-intro ws-bg" style="background-image: url('<?php echo Helper::get_img( 'new-year-bg.jpg' );?>');background-size: contain;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="pricing-intro-content text-center theme-bfcm">
					<div class="bfcm-img">
						<img src="<?php echo Helper::get_svg('sale-img.svg');?>" alt="wpWax Business Site">
					</div>
					<h1 class="display-3 intro-title">Don't miss out this exclusive <br>year-end MEGA offer</h1>
					<p class="start-end">Sale will end after</p>
					<div class="offer-countdown">
						<ul class="list-unstyled">
							<li><span class="loader-dot"></span><span>Days</span></li>
                    		<li><span class="loader-dot"></span><span>Hours</span></li>
                    		<li><span class="loader-dot"></span><span>Minutes</span></li>
                    		<li><span class="loader-dot"></span><span>Seconds</span></li>
						</ul>
					</div>
					<!-- <div class="pricing-deal-counter">
                        <span class="pricing-deal-text">Discount will be the same ONLY for next </span>
						<ul class="theme-sell-left list-unstyled pricing-deal-count ml-0">
                    		<li><span class="loader-dot"></span></li>
                    		<li><span class="loader-dot"></span></li>
                        </ul>
                        <span class="deal-warn">Purchases</span>
                    </div> -->
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .pricing-intro-area -->

<section class="swbd_product-area theme-bfcm pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="swbd_bfcm-product-box">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<div class="product-card theme-bfcm">
								<div class="product-card__offer-badge">
									<img src="<?php echo Helper::get_svg('50-off-badge.svg');?>" alt="wpWax Business Site">
								</div>
								<div class="product-card__img">
									<a href="<?php echo THEME_DIRECTORIST; ?>" target="_blank"><img src="<?php echo Helper::get_img( 'directorist.png' );?>" alt="wpWax Business Site"></a>
								</div>
								<div class="product-card__top">
									<h5 class="product-title"><a href="<?php echo THEME_DIRECTORIST; ?>" target="_blank">Directorist - The Most Complete WordPress Directory Plugin</a></h5>
								</div>
								<div class="product-card__bottom d-flex justify-content-between align-items-center">
									<span class="price-info pink"><span class="currency">$</span><span class="price">55</span><span class="text">Starting from</span></span>
									<a href="<?php echo THEME_DIRECTORIST; ?>" target="_blank" class="btn btn-primary btn-md btn-raised">Get Now</a>
								</div>
							</div>
						</div>
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
								$price = Helper::edd_main_price( $price, $download_id );
							} else {
								$price = edd_price($download_id,false);
							}
							?>

							<div class="col-xl-4 col-md-6">
								<div class="product-card theme-bfcm">
									<div class="product-card__offer-badge">
										<img src="<?php echo Helper::get_svg('50-off-badge.svg');?>" alt="wpWax Business Site">
									</div>
									<div class="product-card__img">
										<a href="<?php echo $url; ?>"><?php echo $img; ?></a>
									</div>
									<div class="product-card__top">
										<h5 class="product-title"><a href="<?php echo $url; ?>"><?php the_title(); ?></a></h5>
									</div>
									<div class="product-card__bottom d-flex justify-content-between align-items-center">
										<span class="price-info pink"><span class="currency">$</span><span class="price"><?php echo $price;?></span><span class="text">Starting from</span></span>
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

<div class="money-back-block mb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="money-backbox d-flex">
					<div class="money-backbox__left">
						<div class="money-backbox__image">
							<img src="<?php echo Helper::get_img( 'refund-img.png' );?>" alt="Money Back Guarantee!">
						</div>
					</div>
					<div class="money-backbox__right">
						<h2>100% Risk-Free Money Back Guarantee!</h2>
						<p>We think users' satisfaction is our prime achievement. However, if the plugin still doesn’t serve your purposes, we’ll be more than happily to refund 100% of your payment within 14 days of your purchase. No questions will be asked!  Learn more about our <a target="__blank" href="<?php echo THEME_REFUND_POLICY_URL;?>" class="btn-link"> refund policy.</a></p>
						<div class="founder-signature">
							<img src="<?php echo Helper::get_svg('ceo-sign.svg');?>" alt="Masud Rana">
							<h4 class="founder-name">Masud Rana</h4>
							<p>CEO & Founder</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .money-back-block -->

<?php get_footer(); ?>