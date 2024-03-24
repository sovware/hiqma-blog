<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */
 
namespace Sovware\Theme;
?>
 
 <div class="sovWare__discount-banner theme-bfcm-count-right-2023 theme-bfcm theme-bfcm-new">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-7 col-sm-12 col-3">
				<div class="discount-info">
					<div class="row align-items-center justify-lg-content-center">
						<div class="col-md-8">
                            <div class="discount-info-wrap d-flex align-items-center">
								<img class="d-sm-flex d-none" src="<?php echo Helper::get_svg('black-friday-top-23.svg');?>" alt="wordpress directory plugin">
								<img class="d-sm-none d-flex" src="<?php echo Helper::get_svg('mobile_BFCM.svg');?>" alt="wordpress directory plugin">
                                <!-- <span class="short-text d-none">Year-end MEGA Offer!</span> -->
								
                            </div>
						</div>
						<div class="col-md-4 col-sm-8 d-lg-flex-c">
                            <div class="discount-info-content d-flex">
                                <div class="special-banner-text d-flex">
                                    <h5 class="dis-title">
										<img src="<?php echo Helper::get_svg('black-friday-middle.svg');?>" alt="wordpress directory plugin">
									</h5>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-sm-12 col-9">
				<div class="discount-content">
					<!-- <div class="discount-countdwon">
						<ul class="list-unstyled">
							<li><span class="loader-dot"></span><span>Days</span></li>
                    		<li><span class="loader-dot"></span><span>Hour</span></li>
                    		<li><span class="loader-dot"></span><span>Min</span></li>
                    		<li><span class="loader-dot"></span><span>Sec</span></li>
						</ul>
					</div> -->
					<div class="top-deal-counter pricing-deal-counter d-flex align-items-center">
						<span class="top-deal-counter__text">Only for Next </span>
						<ul class="theme-sell-left list-unstyled deal-count">
                    		<li><span class="loader-dot"></span></li>
                    		<li><span class="loader-dot"></span></li>
                        </ul>
						<span class="top-deal-counter__text">Users</span>
					</div>
					<?php $url = get_permalink(); ?>
					<?php if ( strpos( $url, 'helpgent' ) ) : ?>
						<a href="https://wpwax.com/helpgent/pricing/" class="btn btn-get">Grab the Deal</a>
					<?php else : ?>
						<a href="<?php echo DIR_THEME_DISCOUNT_DEAL; ?>" class="btn btn-get">Grab the Deal</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="disc-close" aria-label="close the deal banner">
		<?php echo wpwax_icon( 'uil uil-times', false); ?>
	</a>
</div>