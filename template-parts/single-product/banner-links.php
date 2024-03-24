<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$id            = get_the_ID();
$product_meta  = get_post_meta( $id, 'theme_product_meta', true );
$has_doc       = ! empty( $product_meta['doc_url'] ) ? true : false;
$has_changelog = ! empty( $product_meta['changelog_url'] ) ? true : false;
?>

<div class="wpwax-signle-product-banner__links">

	<?php if ( $has_changelog ): ?>
		<a href="<?php echo $product_meta['changelog_url']; ?>" target="_blank"><img src="<?php echo Helper::get_svg( 'icons/add-check.svg' ); ?>" alt="wpwax"><span>Changelog</span></a>
	<?php endif;?>

	<?php if ( $has_doc ): ?>
		<a href="<?php echo $product_meta['doc_url']; ?>" target="_blank"><img src="<?php echo Helper::get_svg( 'icons/file.svg' ); ?>" alt="wpwax"><span>Documentation</span></a>
	<?php endif;?>

</div>