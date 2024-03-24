<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$download_id = get_the_ID();
$product_meta = get_post_meta( $download_id, 'theme_product_meta', true );
$prices = edd_get_variable_prices( $download_id );
$purchase_text = !edd_is_free_download($download_id) ? 'Buy Now' : 'Free Download';
$title = isset($product_meta['top_title']) ? trim($product_meta['top_title']) : '';
$img_id = !empty($product_meta['top_img']['id']) ? $product_meta['top_img']['id'] : '';
$img = $img_id ? wp_get_attachment_url( $img_id ): '';
?>

<div id="dir-price-select" class="dir-price-select" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="name" content="<?php echo esc_html( $title ); ?>" />
    <link itemprop="image" href="<?php echo esc_url( $img ); ?>" />
    <form id="edd_purchase_<?php echo esc_attr($download_id); ?>"
        class="edd_download_purchase_form edd_purchase_<?php echo esc_attr($download_id); ?>" method="post">

        <?php if ( edd_has_variable_prices( $download_id ) ): ?>

        <div class="edd_price_options edd_single_mode">

            <?php if ( EDD::has_lifetime_license( $prices ) ): ?>
            <div class="sovware-price-type">
                <div class="pricing-header">
                    <label class="pricing-header__togglerText active" data-access="year">Yearly</label>
                    <div class="pricing-header__toggle">
                        <input type="checkbox" class="pricing-switch">
                        <span class="sliding-ball"></span>
                    </div>
                    <label class="pricing-header__togglerText" data-access="life">Lifetime</label>
                    <div class="pricing-header__message">
                        <?php echo Helper::the_svg('green-curve-arrow'); ?>
                        <span class="badge badge-sm bg-success">Save 30%</span>
                    </div>
                </div>
            </div>
            <?php endif ;?>

        </div>

        <ul class="edd-price-options-list">
            <?php if ($prices):
					$checked_key = isset( $_GET['price_option'] ) ? absint( $_GET['price_option'] ) : edd_get_default_variable_price( $download_id );

					foreach ($prices as $key => $price):
						$input_id = sprintf('edd_price_option_%s_%s', $download_id, $key);
						$lifetime_class = !empty($price['is_lifetime']) ? 'lifetime-license' : 'yearly-license show';
						$price_text = str_replace( array( '(Yearly)', '(Lifetime)' ), '', $price['name']);
						$del_price  = Helper::edd_del_price( $price );
						?>
            <li id="<?php printf('edd_price_option_%s_%s', $download_id, sanitize_key( $price['name'] ) ); ?>"
                itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="<?php echo $lifetime_class;?>">
                <label for="<?php echo $input_id;?>" class="dir-price-list d-flex">
                    <input type="radio" <?php checked( $checked_key, $key, true );?> name="edd_options[price_id][]"
                        id="<?php echo esc_attr($input_id);?>"
                        class="dir-price-list-left edd_price_option_<?php echo $download_id; ?>"
                        value="<?php echo esc_attr($key); ?>"
                        data-price="<?php echo edd_get_price_option_amount( $download_id, $key );?>">
                    <span class="dir-price-select-check"><?php echo Helper::the_svg('icons/check-small'); ?></span>
                    <span class="dir-price-select-border"></span>

                    <div class="dir-price-list-right">
                        <div class="edd_price_option_name" itemprop="description"><?php echo esc_html( $price_text );?>
                        </div>
                        <div class="edd_price_option_price">
                            <span>$</span><?php echo Helper::edd_main_price( $price, $key, $download_id );?>
                        </div>

                        <?php if ( $del_price ): ?>
                        <div class="edd_price_option_price old-price"> <span>$</span><?php echo $del_price;?> </div>
                        <?php endif; ?>

                        <meta itemprop="price"
                            content="<?php echo esc_attr( Helper::edd_main_price( $price , $key, $download_id ) );?>">
                        <meta itemprop="priceCurrency" content="<?php echo esc_attr( edd_get_currency() );?>">
                    </div>
                </label>
            </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>


        <?php elseif(!edd_is_free_download($download_id)): ?>
        <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
            <meta itemprop="priceCurrency" content="<?php echo esc_attr( edd_get_currency() );?>">
            <meta itemprop="price" content="0">
        </span>
        <div class="theme-single-price"><?php echo Helper::edd_single_price_html( $download_id ); ?></div>
        <?php endif; ?>

        <div class="edd_purchase_submit_wrapper d-flex">
            <div class="dir-purchase-btn">

                <?php if (!empty($product_meta['demo_url'])): ?>
                <a href="<?php echo $product_meta['demo_url'];?>" class="btn btn-primary btn-raised"
                    target="_blank"><?php echo wpwax_icon( 'uil uil-eye', false); ?><span>Preview</span></a>
                <?php endif; ?>

                <?php if ( edd_has_variable_prices( $download_id ) ): ?>

                <a href="<?php echo Helper::edd_checkout_url( $download_id, 1 );?>"
                    class="btn btn-success theme-variable-price-link"><span
                        class="edd-add-to-cart-label"><?php echo wpwax_icon( 'uil uil-shopping-cart-alt', false); ?>
                        Buy Now</span></a>

                <?php else: ?>
                <a href="<?php echo Helper::edd_checkout_url( $download_id );?>" class="btn btn-success"><span
                        class="edd-add-to-cart-label"><?php echo wpwax_icon( 'uil uil-shopping-cart-alt', false); ?>
                        <?php echo $purchase_text;?></span></a>
                <?php endif; ?>

            </div>
        </div>

    </form>

</div>