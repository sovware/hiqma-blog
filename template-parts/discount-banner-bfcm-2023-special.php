<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */
 
namespace Sovware\Theme;
?>
 
 <div class="sovWare__discount-banner theme-bfcm-count-right-2023 theme-bfcm theme-bfcm-new">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2 col-6">
				<div class="discount-info--special-left">
					<img src="<?php echo Helper::get_img( 'min-special.png' );?>" alt="wordpress directory plugin">
				</div>
			</div>
			<div class="col-lg-5 col-sm-6 d-sm-block d-none">
				<div class="discount-info--special-left-middle">
					<img src="<?php echo Helper::get_svg('min-special-text.svg');?>" alt="wordpress directory plugin">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6">
				<div class="discount-info--special-right-middle">
					<img src="<?php echo Helper::get_svg('black-friday-middle.svg');?>" alt="wordpress directory plugin">
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-12">
				<div class="discount-content">
					<?php $url = get_permalink(); ?>
					<?php if ( strpos( $url, 'helpgent' ) ) : ?>
						<a href="https://wpwax.com/helpgent/pricing/" class="btn btn-get">Grab the Deal</a>
					<?php else : ?>
						<a href="<?php echo DIR_THEME_DISCOUNT_DEAL; ?>" class="btn btn-get">Grab the Deal</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<a href="#" class="disc-close" aria-label="close the deal banner">
		<?php echo wpwax_icon( 'uil uil-times', false); ?>
	</a>
</div>