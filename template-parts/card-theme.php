<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$product_meta = get_post_meta(get_the_ID(), 'theme_product_meta', true);

if ( !empty($product_meta['external_url']) ) {
    $url = $product_meta['external_url'];
    $target = '_blank';
}
else {
    $url = get_the_permalink();
    $target = '_self';
}
?>
<div class="product-card theme-2">
    <div class="product-card__img">
        <a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><?php the_post_thumbnail('blogs') ?></a>
    </div>
    <div class="product-card__top">
        <h5 class="product-title"><a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><?php the_title(); ?></a></h5>
        <?php the_excerpt(); ?>
    </div>
    
    <div class="product-actions">
        <?php if ( !empty( $product_meta['demo_url'] ) ): ?>
            <a href="<?php echo esc_url( $product_meta['demo_url'] ); ?>" class="btn btn-primary btn-transparent" target="_blank">Preview</a>
        <?php endif; ?>
        <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="btn btn-white btn-outlined">Details</a>
    </div>
</div>