<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
use Sovware\Theme\Lib\SVG\WP_SVG;

$id = get_the_ID();
$product_meta = get_post_meta($id, 'theme_product_meta', true);

$type = Helper::product_type($id);
$title = isset($product_meta['top_title']) ? trim($product_meta['top_title']) : '';
$subtitle = isset($product_meta['top_subtitle']) ? trim($product_meta['top_subtitle']) : '';
$description = isset($product_meta['short_description']) ? trim($product_meta['short_description']) : '';
$img_id = !empty($product_meta['top_img']['id']) ? $product_meta['top_img']['id'] : get_post_thumbnail_id();
$img = $img_id ? WP_SVG::get_attachment_image($img_id, 'full') : '';
$is_new = !empty($product_meta['top_new_badge']) ? true : false;
$product_meta_list = Helper::product_meta_list($product_meta);

$has_doc = !empty($product_meta['doc_url']) ? true : false;
$has_changelog = !empty($product_meta['changelog_url']) ? true : false;

get_header();
?>
<div id="primary" class="product-type-<?php echo esc_attr( $type );?> content-area p-0">
    <?php while (have_posts()) {
		the_post();
		?>
    <div class="product-top-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <?php if ($is_new){ ?>
                    <h1 class="product-top-title display-3 dir-new-item"><span><?php echo esc_html( $title );?></span>
                        <span class="dir-badge">New</span>
                    </h1>
                    <?php
						}
						else { ?>
                    <h1 class="product-top-title display-3"><?php echo esc_html( $title );?></h1>
                    <?php
						}
						?>

                    <p class="product-top-subtitle"><?php echo wp_kses_post($subtitle); ?></p>

                    <?php get_template_part('edd-template-parts/price-select'); ?>
                </div>
                <div class="col-lg-6">
                    <div class="product-img">
                        <?php echo $img; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php if ($description || !empty($product_meta_list)): ?>
    <div class="product-main-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-content">
                        <div><?php echo wp_kses_post($description); ?></div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="product-meta-area">
                        <ul class="product-meta">
                            <?php foreach ($product_meta_list as $item) { ?>
                            <li class="d-flex">
                                <div class="product-meta__title">
                                    <?php echo $item['icon']; ?><?php echo $item['title']; ?></div>
                                <div class="product-meta__desc"><?php echo $item['content']; ?></div>
                            </li>
                            <?php } ?>
                        </ul>

                        <?php if ($has_doc || $has_changelog){ ?>
                        <div class="product-meta-btns">
                            <?php if ($has_doc) { ?>
                            <a class="product-doc-link btn btn-md btn-primary btn-transparent"
                                href="<?php echo $product_meta['doc_url']; ?>"
                                target="_blank"><?php echo wpwax_icon( 'uil uil-file-alt', false); ?>Documentation</a>
                            <?php } ?>

                            <?php if ($has_changelog) { ?>
                            <a class="product-changelog-link" href="<?php echo $product_meta['changelog_url']; ?>"
                                target="_blank">View Changelog</a>
                            <?php } ?>
                        </div>
                        <?php } ?>

                        <span class="shape-c"></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php
		if (!empty($custom_content)) {
			echo $custom_content;
		}
		elseif ( did_action( 'elementor/loaded' ) && \Elementor\Plugin::$instance->db->is_built_with_elementor( $id ) ) {
			the_content();
		}
		else {
			echo '<div class="container py-5">';
			the_content();
			echo '</div>';
		}
	}
	?>
</div>
<?php
get_footer();