<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>

<div class="sovWare__discount-banner theme-early-bird">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-xl-12">
				<div class="discount-info">
					<div class="flex-wrap align-items-center d-flex gap-35 justify-content-center">
						<div class="discount-info-wrap d-flex align-items-center">
							<?php echo Helper::the_svg( 'helpgent/sale-signboard' ); ?>
							<span class="short-text">BFCM</span>
						</div>
						<div class="discount-info-content d-flex">
							<div class="special-banner-text d-flex">
								<h5 class="dis-title"><span>up to</span> <span class="off-percentage">50%</span>off</h5>
							</div>
						</div>
						<div class="discount-content">
							<div class="discount-countdown--early-bird">
								<ul class="list-unstyled">
									<li><span class="loader-dot"></span><span>Days</span></li>
									<li><span class="loader-dot"></span><span>Hours</span></li>
									<li><span class="loader-dot"></span><span>Mins</span></li>
									<li><span class="loader-dot"></span><span>Sec</span></li>
								</ul>
							</div>
						</div>
						<a href="<?php echo THEME_PLUGIN_URL; ?>" class="btn btn-get d-flex d-xl-none ">Grab the Deal</a>
					</div>
					<a href="https://wpwax.com/helpgent/pricing/" class="btn btn-get d-xl-flex d-none">Grab the Deal</a>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="disc-close" aria-label="close the deal banner">
		<?php echo wpwax_icon( 'uil uil-times', false); ?>
	</a>
</div>
