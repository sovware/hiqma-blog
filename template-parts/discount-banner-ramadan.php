<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>

<div class="sovWare__discount-banner theme-bfcm theme-ramadan">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="discount-mobileView d-none">
					<h4></h4>
				</div>
			</div>
		</div>
		<div class="discount-info discount-info-ramadan">
			<div class="row align-items-center">
				<div class="col-lg-4">
					<span class="short-text">Ramadan Special Deal</span>
				</div>
				<div class="col-lg-3">
					<h5 class="dis-title">Enjoy up to<span class="off-percentage">25%</span> OFF</h5>
				</div>
				<div class="col-lg-3">
					<!-- <div class="discount-countdwon">
						<ul class="list-unstyled">
							<li><span class="loader-dot"></span><span>Days</span></li>
							<li><span class="loader-dot"></span><span>Hours</span></li>
							<li><span class="loader-dot"></span><span>Minutes</span></li>
							<li><span class="loader-dot"></span><span>Seconds</span></li>
						</ul>
					</div> -->
				</div>
				<div class="col-lg-2">
					<div class="discount-content discount-content-ramadan">
						<a href="<?php echo THEME_DEAL_URL; ?>" class="btn btn-get">Grab the Deal</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="disc-close" aria-label="close the deal banner">
		<?php echo wpwax_icon( 'uil uil-times', false); ?>
	</a>
</div>