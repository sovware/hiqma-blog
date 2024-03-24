<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>

<div class="sovWare__discount-banner limited-time-banner">
	<div class="container">
		<div class="limited-time-banner-info">
			<div class="row align-items-center">
				<div class="col-lg-9 col-md-8">
					<div class="limited-time-banner-left">
						<div class="limited-time-banner-left__img">
							<img src="<?php echo Helper::get_img( 'limited-offer.gif' );?>" alt="Release Icon - WPWax" />
						</div>
						<div class="limited-time-banner-left__text">
							<h3 class="title">Limited Time Offer! Up To 40% OFF</h3>
							<p class="paragraph">Seize the Moment! Enjoy Exclusive and Once in a Lifetime Offer During Ramadan</p>	
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="limited-time-banner-right">
						<div class="btn-wrapper">
							<a href="<?php echo THEME_DEAL_URL; ?>" class="btn offer-btn">
								Secure Your Lifetime Deal
								<?php echo wpwax_icon( 'uil uil-arrow-right', false); ?>
							</a>
							<div class="offer-ending-time">OFFER ENDS ON MARCH 31</div>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="disc-close" aria-label="close the deal banner">
				<?php echo wpwax_icon( 'uil uil-times', false); ?>
			</a>
		</div>
	</div>
</div>