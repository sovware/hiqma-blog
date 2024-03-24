<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
extract( $args );
?>

<section class="sub-area legal-pages-color">
	<div class="sub-box">
		<div class="sub-box__left">
			<div class="sub-box__images">
				<img class="sub-box__images-img" width="270" height="173" src="<?php echo Helper::get_img( 'blog/legal-pgae-subscriber.png' );?>" alt="directorist subscribe">
				<button type="button">
					<img src="<?php echo Helper::get_img( 'blog/legal-pages-logo.png' );?>" alt="directorist">
					Legal Pages
				</button>
			</div>
		</div>
		<div class="sub-box__right">
			<h2 class="sub-box__title"><?php echo esc_html( $title ); ?></h2>
			<p class="sub-box__subtitle"><?php echo esc_html( $description ); ?></p>
			<div class="sub-box__form">
				<?php echo do_shortcode( '[fluentform id="3"]' ); ?>
			</div>
		</div>
	</div>
</section>