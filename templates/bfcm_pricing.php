<?php
/**
 * Template Name: Black Friday Pricing Page
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header();
?>

<section class="pricing-intro-area position-relative bfcm_pricing-intro bfcm-bg" style="background-image: url('<?php echo Helper::get_img( 'bfcm-bg.png' );?>');">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="pricing-intro-content text-center theme-bfcm">
					<div class="bfcm-img">
						<img src="<?php echo Helper::get_svg('bfcm_img_wpwax_70.svg');?>">
					</div>
					<h1 class="display-2 intro-title">Don't miss out this exclusive <br>year-end MEGA offer</h1>
					<p class="start-end">Sale will end after</p>
					<div class="offer-countdown">
						<ul class="list-unstyled"><li>00<span>Days</span></li><li>00<span>Hours</span></li><li>00<span>Minutes</span></li><li>00<span>Seconds</span></li></ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .pricing-intro-area -->

<?php get_template_part( 'template-parts/product-grid' ) ?>

<div class="money-back-block mb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="money-backbox d-flex">
					<div class="money-backbox__left">
						<div class="money-backbox__image">
							<img src="<?php echo Helper::get_img( 'refund-img.png' );?>" alt="Money Back Guarantee!">
						</div>
					</div>
					<div class="money-backbox__right">
						<h2>100% Risk-Free Money Back Guarantee!</h2>
						<p>We think users' satisfaction is our prime achievement. However, if the plugin still doesn’t serve your purposes, we’ll be more than happily to refund 100% of your payment within 14 days of your purchase. No questions will be asked!  Learn more about our <a target="__blank" href="<?php echo THEME_REFUND_POLICY_URL;?>" class="btn-link"> refund policy.</a></p>
						<div class="founder-signature">
							<img src="<?php echo Helper::get_svg('ceo-sign.svg');?>" alt="Masud Rana">
							<h4 class="founder-name">Masud Rana</h4>
							<p>CEO & Founder</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .money-back-block -->

<?php get_footer(); ?>
