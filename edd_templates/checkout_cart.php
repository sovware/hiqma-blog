<?php
/**
 *  This template is used to display the Checkout page when items are in the cart
 */

use Sovware\Theme\EDD;
use Sovware\Theme\Helper;

global $post; ?>
<div class="table-responsive table-checkout-wrapper table-default">
	<table id="edd_checkout_cart" <?php if ( ! edd_is_ajax_disabled() ) { echo 'class="ajaxed"'; } ?>>
		<thead>
			<tr class="edd_cart_header_row">
				<?php do_action( 'edd_checkout_table_header_first' ); ?>
				<th class="edd_cart_item_name"><?php _e( 'Item Name', 'easy-digital-downloads' ); ?></th>
				<th class="edd_cart_item_price"><?php _e( 'Item Price', 'easy-digital-downloads' ); ?></th>
				<th class="edd_cart_actions"><?php _e( 'Actions', 'easy-digital-downloads' ); ?></th>
				<?php do_action( 'edd_checkout_table_header_last' ); ?>
			</tr>
		</thead>
		<tbody>
			<?php $cart_items = edd_get_cart_contents(); ?>
			<?php do_action( 'edd_cart_items_before' ); ?>
			<?php if ( $cart_items ) : ?>
			<?php foreach ( $cart_items as $key => $item ) : ?>
			<tr class="edd_cart_item" id="edd_cart_item_<?php echo esc_attr( $key ) . '_' . esc_attr( $item['id'] ); ?>"
				data-download-id="<?php echo esc_attr( $item['id'] ); ?>">
				<?php do_action( 'edd_checkout_table_body_first', $item ); ?>
				<td class="edd_cart_item_name">
					<?php
								if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $item['id'] ) ) {
									echo '<div class="edd_cart_item_image">';
										echo get_the_post_thumbnail( $item['id'], apply_filters( 'edd_checkout_image_size', array( 25,25 ) ) );
									echo '</div>';
								}
								$item_title = edd_get_cart_item_name( $item );
								echo '<span class="edd_checkout_cart_item_title">' . esc_html( $item_title ) . '</span>';

								/**
								 * Runs after the item in cart's title is echoed
								 * @since 2.6
								 *
								 * @param array $item Cart Item
								 * @param int $key Cart key
								 */
								do_action( 'edd_checkout_cart_item_title_after', $item, $key );
							?>
				</td>
				<td class="edd_cart_item_price">
					<?php
							echo edd_cart_item_price( $item['id'], $item['options'] );
							do_action( 'edd_checkout_cart_item_price_after', $item );
							?>
				</td>
				<td class="edd_cart_actions">
					<?php if( edd_item_quantities_enabled() && ! edd_download_quantities_disabled( $item['id'] ) ) : ?>
					<input type="number" min="1" step="1" name="edd-cart-download-<?php echo $key; ?>-quantity"
						data-key="<?php echo $key; ?>" class="edd-input edd-item-quantity"
						value="<?php echo edd_get_cart_item_quantity( $item['id'], $item['options'] ); ?>" />
					<input type="hidden" name="edd-cart-downloads[]" value="<?php echo $item['id']; ?>" />
					<input type="hidden" name="edd-cart-download-<?php echo $key; ?>-options"
						value="<?php echo esc_attr( json_encode( $item['options'] ) ); ?>" />
					<?php endif; ?>
					<?php do_action( 'edd_cart_actions', $item, $key ); ?>
					<a class="edd_cart_remove_item_btn"
						href="<?php echo esc_url( wp_nonce_url( edd_remove_item_url( $key ), 'edd-remove-from-cart-' . $key, 'edd_remove_from_cart_nonce' ) ); ?>"><?php _e( 'Remove', 'easy-digital-downloads' ); ?></a>
				</td>
				<?php do_action( 'edd_checkout_table_body_last', $item ); ?>
			</tr>
			<?php endforeach; ?>
			<?php endif; ?>
			<?php do_action( 'edd_cart_items_middle' ); ?>
			<!-- Show any cart fees, both positive and negative fees -->
			<?php if( edd_cart_has_fees() ) : ?>
			<?php foreach( edd_get_cart_fees() as $fee_id => $fee ) : ?>
			<tr class="edd_cart_fee" id="edd_cart_fee_<?php echo $fee_id; ?>">

				<?php do_action( 'edd_cart_fee_rows_before', $fee_id, $fee ); ?>

				<td class="edd_cart_fee_label"><?php echo esc_html( $fee['label'] ); ?></td>
				<td class="edd_cart_fee_amount">
					<?php echo esc_html( edd_currency_filter( edd_format_amount( $fee['amount'] ) ) ); ?></td>
				<td>
					<?php if( ! empty( $fee['type'] ) && 'item' == $fee['type'] ) : ?>
					<a
						href="<?php echo esc_url( edd_remove_cart_fee_url( $fee_id ) ); ?>"><?php _e( 'Remove', 'easy-digital-downloads' ); ?></a>
					<?php endif; ?>

				</td>

				<?php do_action( 'edd_cart_fee_rows_after', $fee_id, $fee ); ?>

			</tr>
			<?php endforeach; ?>
			<?php endif; ?>

			<?php do_action( 'edd_cart_items_after' ); ?>
		</tbody>
		<tfoot>

			<?php if( has_action( 'edd_cart_footer_buttons' ) ) : ?>
			<tr class="edd_cart_footer_row<?php if ( edd_is_cart_saving_disabled() ) { echo ' edd-no-js'; } ?>">
				<th colspan="<?php echo edd_checkout_cart_columns(); ?>">
					<?php do_action( 'edd_cart_footer_buttons' ); ?>
				</th>
			</tr>
			<?php endif; ?>

			<?php if( edd_use_taxes() && ! edd_prices_include_tax() ) : ?>
			<tr class="edd_cart_footer_row edd_cart_subtotal_row"
				<?php if ( ! edd_is_cart_taxed() ) echo ' style="display:none;"'; ?>>
				<?php do_action( 'edd_checkout_table_subtotal_first' ); ?>
				<th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_subtotal">
					<?php _e( 'Subtotal', 'easy-digital-downloads' ); ?>:&nbsp;<span
						class="edd_cart_subtotal_amount"><?php echo edd_cart_subtotal(); ?></span>
				</th>
				<?php do_action( 'edd_checkout_table_subtotal_last' ); ?>
			</tr>
			<?php endif; ?>

			<tr class="edd_cart_footer_row edd_cart_discount_row"
				<?php if( ! edd_cart_has_discounts() )  echo ' style="display:none;"'; ?>>
				<?php do_action( 'edd_checkout_table_discount_first' ); ?>
				<th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_discount">
					<?php edd_cart_discounts_html(); ?>
				</th>
				<?php do_action( 'edd_checkout_table_discount_last' ); ?>
			</tr>

			<?php if( edd_use_taxes() ) : ?>
			<tr class="edd_cart_footer_row edd_cart_tax_row"
				<?php if( ! edd_is_cart_taxed() ) echo ' style="display:none;"'; ?>>
				<?php do_action( 'edd_checkout_table_tax_first' ); ?>
				<th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_tax">
					<?php _e( 'Tax', 'easy-digital-downloads' ); ?>:&nbsp;<span class="edd_cart_tax_amount"
						data-tax="<?php echo edd_get_cart_tax( false ); ?>"><?php echo esc_html( edd_cart_tax() ); ?></span>
				</th>
				<?php do_action( 'edd_checkout_table_tax_last' ); ?>
			</tr>

			<?php endif; ?>

			<tr class="edd_cart_footer_row">
				<?php do_action( 'edd_checkout_table_footer_first' ); ?>
				<th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_total">
					<?php _e( 'Total', 'easy-digital-downloads' ); ?>: <span class="edd_cart_amount"
						data-subtotal="<?php echo edd_get_cart_subtotal(); ?>"
						data-total="<?php echo edd_get_cart_total(); ?>"><?php edd_cart_total(); ?></span></th>
				<?php do_action( 'edd_checkout_table_footer_last' ); ?>
			</tr>
		</tfoot>
	</table>
</div>

<?php if( ! EDD::has_helpgent() ) : ?>

	<div class="up-sell-alert alert fade show" role="alert">
		<div class="up-sell-alert__header">
			<h4 class="up-sell-alert__title">You might also be interested in</h4>
			<div class="up-sell-alert__close" data-dismiss="alert" aria-label="Close">
				<?php echo wpwax_icon( 'uil uil-times up-sell-alert__close-icon', false); ?>
			</div>
		</div>
		<div class="up-sell-alert__content">
		<h6 class="up-sell-alert__subtitle">Add <span class="highlight-primary">HelpGent</span> and receive a <span
					class="highlight-discount"><?php echo edd_get_discount_amount( edd_get_discount_id_by_code( 'GetHelpGent' ) ); ?>% discount</span> on your entire order.</h6>
			<div class="up-sell-items">
				<div class="up-sell-item">
					<figure>
						<div class="up-sell-item__icon helpgent-bg">
							<img src="<?php echo Helper::get_img( 'blog/helpgent-logo.png' );?>" alt="helpgent">
						</div>
						<figcaption class="up-sell-item__info">
							<div class="up-sell-item__left">
								<h4>HelpGent</h4>
								<p>Get the power to communicate with your customers with the most personalized communication
									system using video messaging, voice messaging, text messaging, and screen recording.</p>
							</div>
							<div class="up-sell-item__price">
								<sup>$</sup>99<small class="pricing_user">/ year</small>
							</div>
							<div class="up-sell-item__switch" onClick="location.href='checkout?edd_action=add_to_cart&download_id=<?php echo Helper::get_helpgent_download_id(); ?>&edd_options[price_id]=1&discount=GetHelpGent'">
								<label class="up-sell-switch">
									<input type="checkbox">
									<span class="slider"></span>
								</label>
							</div>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</div>

<?php elseif( EDD::has_helpgent() && ! EDD::has_legal_pages() ) : ?>

	<div class="up-sell-alert alert fade show" role="alert">
		<div class="up-sell-alert__header">
			<h4 class="up-sell-alert__title">You might also be interested in</h4>
			<div class="up-sell-alert__close" data-dismiss="alert" aria-label="Close">
				<?php echo wpwax_icon( 'uil uil-times up-sell-alert__close-icon', false); ?>
			</div>
		</div>
		<div class="up-sell-alert__content">
		<h6 class="up-sell-alert__subtitle">Add <span class="highlight-legal-pages">Legal Pages Pro</span> and receive a <span
					class="highlight-discount"><?php echo edd_get_discount_amount( edd_get_discount_id_by_code( 'GetLegalPages' ) ); ?>% discount</span> on your entire order.</h6>
			<div class="up-sell-items">
				<div class="up-sell-item">
					<figure>
						<div class="up-sell-item__icon legal-pages-pro-bg">
							<img src="<?php echo Helper::get_img( 'blog/legal-pages-logo.png' );?>" alt="Legal Pages">
						</div>
							<figcaption class="up-sell-item__info">
							<div class="up-sell-item__left">
								<h4>Legal Pages Pro</h4>
								<p>This plugin comes with options to place suitable legal pages on your websites</p>
							</div>
							<div class="up-sell-item__price">
								<sup>$</sup>39<small class="pricing_user">/ year</small>
							</div>
							<div class="up-sell-item__switch" onClick="location.href='checkout?edd_action=add_to_cart&download_id=<?php echo Helper::get_legal_pages_download_id(); ?>&edd_options[price_id]=1&discount=GetLegalPages'">
								<label class="up-sell-switch">
									<input type="checkbox">
									<span class="slider"></span>
								</label>
							</div>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</div>

<?php endif;?>