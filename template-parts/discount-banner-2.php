<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$target_time = new \DateTime('2020-12-06 9:00:00', new \DateTimeZone('Asia/Dhaka'));
$remaining_time = $target_time->getTimestamp() - time();
$remaining_time = $remaining_time*1000;
?>

<div class="sovWare__discount-banner theme-bfcm">
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
				<div class="discount-info">
					<div class="row align-items-center">
						<div class="col-lg-4">
							<span class="short-text">BIG Sale!</span>
						</div>
						<div class="col-lg-8">
							<h5 class="dis-title"><span class="off-percentage">UP TO 70% OFF!</span> <span class="title-text">Enjoy the Biggest Gift of the Year</span></h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-5">
				<div class="discount-content">
					<div class="discount-countdwon" data-remaining="<?php echo $remaining_time;?>">

					</div>
					<a href="<?php echo THEME_BF_DEAL_URL; ?>" class="btn btn-get">Grab the Deal</a>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="disc-close" aria-label="close the deal banner">
		<?php echo wpwax_icon( 'uil uil-times', false); ?>
	</a>
</div>