<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>

<div class="sovWare__discount-banner theme-bfcm theme-memorable">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="discount-mobileView d-none">
					<h4></h4>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-xl-7">
				<div class="discount-info discount-info-eid discount-info-memorable">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<span class="short-text">wpWax Offering <br>Memorial Day Discount!</span>
						</div>
						<div class="col-lg-7">
							<h5 class="dis-title">Enjoy up to<span class="off-percentage">25%</span> OFF</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-5">
				<div class="discount-content discount-content-eid discount-content-memorable">
					<div class="discount-countdwon"></div>
					<a href="<?php echo THEME_MEMEBERSHIP_URL; ?>" class="btn btn-get">Grab the Deal</a>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="disc-close" aria-label="close the deal banner">
		<?php echo wpwax_icon( 'uil uil-times', false); ?>
	</a>
</div>