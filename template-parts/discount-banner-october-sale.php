<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>

<div class="sovWare__discount-banner theme-bfcm theme-special theme-october">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="discount-mobileView d-none">
					<h4></h4>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			
			<div class="col-xl-3">
				<div class="discount-content">
					<div class="discount-countdwon">
						<ul class="list-unstyled">
							<li><span class="loader-dot"></span><span>Days</span></li>
                    		<li><span class="loader-dot"></span><span>Hours</span></li>
                    		<li><span class="loader-dot"></span><span>Minutes</span></li>
                    		<li><span class="loader-dot"></span><span>Seconds</span></li>
						</ul>
					</div>
					<!-- <div class="pricing-deal-counter">
						<ul class="theme-sell-left list-unstyled pricing-deal-count ml-0">
                    		<li><span class="loader-dot"></span></li>
                    		<li><span class="loader-dot"></span></li>
                        </ul>
						<span class="deal-warn">Purchases</span>
					</div> -->
				</div>
			</div>
            <div class="col-xl-9">
				<div class="discount-info">
					<div class="row align-items-center">
						<div class="col-xl-3">
                            <div class="discount-info-wrap d-flex align-items-center">
                                <span class="short-text">October Special Offer</span>
                            </div>
						</div>
						<div class="col-xl-9">
                            <div class="discount-info-content d-flex">
                                <div class="special-banner-text d-flex">
                                    <h5 class="dis-title"> <span>Save up to</span> <span class="off-percentage">50%</span></h5>
                                    <span class="dis-title-extra">on any purchase</span>
                                </div>
                                
                                <a href="<?php echo THEME_PLUGIN_URL; ?>" class="btn btn-get">Grab the Deal</a>
                            </div>
                            
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="disc-close" aria-label="close the deal banner">
		<?php echo wpwax_icon( 'uil uil-times', false); ?>
	</a>
</div>