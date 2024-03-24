<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>

<div class="sovWare__discount-banner theme-ws theme-bfcm theme-special ">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="discount-mobileView d-none">
					<h4></h4>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-12">
				<div class="discount-info">
					<div class="row align-items-center justify-content-between">
						<div class="col-xl-3">
                            <div class="discount-info-wrap">
                                <img src="<?php echo Helper::get_svg('newyear-top.svg');?>" alt="wordpress directory plugin">
                            </div>
						</div>
						<div class="col-xl-9">
							<div class="discount-info-content d-flex">
								<div class="special-banner-text d-flex">
									<h5 class="dis-title text-center"><span>Save Up To</span><span class="off-percentage">70%</span><span class="dis-title-extra"> on any purchase</span></h5>
								</div>
								<div class="discount-content ml-2">
									<a href="<?php echo THEME_DEAL_URL; ?>" class="btn btn-get">Grab the Deal</a>
								</div>
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