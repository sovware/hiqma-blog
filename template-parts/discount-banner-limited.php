<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$time           = Theme::$options['discount_time'];
$zone           = 'Asia/Dhaka';
$target_time    = new \DateTime( $time, new \DateTimeZone( $zone ) );
$remaining_time = $target_time->getTimestamp() - time();
$remaining_time = $remaining_time;
$time_left      = $remaining_time - $time;
$days_left      = ceil( (  ( $time_left / 24 ) / 60 ) / 60 );
$days_or_day	= $days_left == 1 ? "{$days_left} Day" : "{$days_left} Days";
?>

<div class="sovWare__discount-banner theme-bfcm theme-eid">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="discount-mobileView d-none">
					<h4></h4>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-xl-9">
				<div class="discount-info discount-info-eid">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<span class="short-text">Stack Your Savings With Up to 50% Off</span>
						</div>
						<div class="col-lg-7">
							<h5 class="dis-title">Plugin as Low as $25 | Sale Extended Till June 5</h5>	
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3">
				<div class="discount-content discount-content-eid">
					<h4 class="day-left"><span id="days_left"><?php echo $days_or_day; ?></span> Left!</h4>
					<a href="<?php echo THEME_PLUGIN_URL; ?>" class="btn btn-get">Grab the Deal</a>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="disc-close" aria-label="close the deal banner">
		<?php echo wpwax_icon( 'uil uil-times', false); ?>
	</a>
</div>
