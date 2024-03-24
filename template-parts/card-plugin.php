<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
use Sovware\Theme\Lib\SVG\WP_SVG;

$product_meta = get_post_meta(get_the_ID(), 'theme_product_meta', true);

if ( !empty($product_meta['external_url']) ) {
	$url = $product_meta['external_url'];
	$target = '_blank';
}
else {
	$url = get_the_permalink();
	$target = '_self';
}

$img_id = get_post_thumbnail_id();
$img = wp_get_attachment_image( $img_id, 'blogs' );
?>
<div class="product-card">
	<div class="product-card__img">
		<a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><?php echo $img; ?></a>
	</div>
	<div class="product-card__top">
		<h5 class="product-title"><a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><?php the_title(); ?></a></h5>
		<?php the_excerpt(); ?>
	</div>
	<div class="product-actions">
		<a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="btn btn-primary btn-transparent">Details</a>
	</div>
</div>