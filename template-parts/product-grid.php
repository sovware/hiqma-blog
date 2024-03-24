<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$class = $args;

$helpgent_id = Helper::get_helpgent_download_id();
$args = [
	'post_type'    => 'download',
	'posts_per_page'    => -1,
	'post__not_in'    => [3348,3341,3273, $helpgent_id],
	'meta_query' => array(
		array(
			'key'     => 'theme_product_type',
			'value'   => 'plugin',
			'compare' => 'IN',
		),
	),
];

$query = new \WP_Query($args);

?>

<section class="swbd_product-area theme-bfcm pb-100 <?php echo esc_attr( $class ); ?>">
	<div class="container">
        <?php if( $class ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center">
                        <h2 class="display-3">WordPress Plugins</h2>
                    </div><!-- ends: .section-header -->
                </div>
            </div>
        <?php endif; ?>
		<div class="row">
			<div class="col-12">
				<div class="swbd_bfcm-product-box">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<div class="product-card theme-bfcm">
								<div class="product-card__offer-badge">
									<img src="<?php echo Helper::get_svg('55-off-badge2.svg');?>">
								</div>
								<div class="product-card__img">
									<a href="https://directorist.com/pricing/" target="_blank"><img src="<?php echo Helper::get_img( 'directorist.png' );?>"></a>
								</div>
								<div class="product-card__top">
									<h5 class="product-title"><a href="<?php echo THEME_DIRECTORIST; ?>" target="_blank">Directorist - The Most Complete WordPress Directory Plugin</a></h5>
								</div>
								<div class="product-card__bottom d-flex justify-content-between align-items-center">
									<span class="price-info pink"><span class="currency">$</span><span class="price">55</span><span class="text">Starting from</span></span>
									<a href="https://directorist.com/pricing/" target="_blank" class="btn btn-primary btn-md btn-raised">Get Now</a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="product-card theme-bfcm">
								<div class="product-card__offer-badge">
									<img src="<?php echo Helper::get_svg('70-off-badge.svg');?>">
								</div>
								<div class="product-card__img">
									<a href="https://wpwax.com/helpgent/pricing/"><img src="<?php echo Helper::get_img( 'helpgent.png' );?>"></a>
								</div>
								<div class="product-card__top">
									<h5 class="product-title"><a href="<?php echo THEME_HELPGENT; ?>">Helpgent - A Better Way to Connect With Your Audiences.</a></h5>
								</div>
								<div class="product-card__bottom d-flex justify-content-between align-items-center">
									<span class="price-info pink"><span class="currency">$</span><span class="price">79</span><span class="text">Starting from</span></span>
									<a href="https://wpwax.com/helpgent/pricing/" class="btn btn-primary btn-md btn-raised">Get Now</a>
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
								$price = Helper::edd_main_price( $price, 1, $download_id );
							} else {
								$price = edd_price($download_id,false);
							}
							?>

							<div class="col-xl-4 col-md-6">
								<div class="product-card theme-bfcm">
									<div class="product-card__offer-badge">
										<img src="<?php echo Helper::get_svg('55-off-badge2.svg');?>">
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