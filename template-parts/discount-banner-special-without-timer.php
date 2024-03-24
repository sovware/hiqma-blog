<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>

<div class="sovWare__discount-banner theme-bfcm theme-special py-sm-3 py-2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="discount-mobileView d-none">
					<h4></h4>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			
			<div class="col-xl-4">
				<div class="discount-info-wrap d-flex align-items-center">
					<span class="short-text">Special Offer</span>
				</div>
			</div>
            <div class="col-xl-8">
				<div class="discount-info  p-0">
					<div class="row align-items-center">
						<div class="col-xl-12">
                            <div class="discount-info-content d-flex">
                                <div class="special-banner-text d-flex">
									<h5 class="dis-title "> <span>Save up to</span> <span class="off-percentage">20%</span></h5>
                                    <span class="dis-title-extra d-none d-sm-inline-block">on any purchase</span>
                                </div>
                                
                                <a href="<?php echo THEME_DEAL_URL; ?>" class="btn btn-get">Grab the Deal</a>
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
