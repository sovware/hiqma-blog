<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$id = get_current_user_id();

$payments = edd_get_users_purchases( $id, 20, true, 'any' );

if ( $payments ) :
	do_action( 'edd_before_purchase_history', $payments );
	?>
	<div class="table-default table-responsive">
		<table class="table-order">
			<thead>
				<tr class="edd_purchase_row">
					<?php do_action('edd_purchase_history_header_before'); ?>
					<th class="edd_purchase_id">Order</th>
					<th class="edd_purchase_date"><?php _e('Date','easy-digital-downloads' ); ?></th>
					<th class="edd_purchase_status">Status</th>
					<th class="edd_purchase_amount"><?php _e('Amount','easy-digital-downloads' ); ?></th>
					<th class="edd_purchase_invoice">Invoice</th>
					<th class="edd_purchase_details"></th>
					<?php //do_action('edd_purchase_history_header_after'); ?>
				</tr>
			</thead>
			<?php foreach ( $payments as $payment_post ) : ?>
				<?php
				$payment = new \EDD_Payment( $payment_post->ID );
				$status = edd_get_payment_status( $payment, true );
				$cart = edd_get_payment_meta_cart_details( $payment->ID, true );
				$item_count = !empty($cart) && is_array($cart) ? count($cart) : 0;
				$item_count_text = _nx( sprintf('for %s item', $item_count), sprintf('for %s items', $item_count), $item_count, 'order item count' );

				$pdf_invoice_link = edd_pdf_invoices()->get_pdf_invoice_url( $payment->ID );

				$settings = get_option( 'edd_settings' );
				if (class_exists('EDDInvoices') && !empty($settings['edd-invoices-page'])) {
					$invoice_link = add_query_arg( array( 'payment_id' => $payment->ID ), get_permalink( $settings['edd-invoices-page'] ) );
				}
				else {
					$invoice_link = '';
				}
				?>
				<tr class="edd_purchase_row">
					<?php do_action( 'edd_purchase_history_row_start', $payment->ID, $payment->payment_meta ); ?>
					<td class="edd_purchase_id">#<?php echo $payment->number ?></td>
					<td class="edd_purchase_date"><?php echo date_i18n( get_option('date_format'), strtotime( $payment->date ) ); ?></td>
					<td class="edd_purchase_status"><?php echo $status;?></td>
					<td class="edd_purchase_amount">
						<span class="edd_purchase_amount color-primary"><?php echo edd_currency_filter( edd_format_amount( $payment->total ) ); ?></span><span class="dir-purchase-item-count"><?php echo $item_count_text;?></span>
					</td>
					<td class="edd_purchase_invoice">
						<a class="d-block color-info" href="<?php echo esc_url( $pdf_invoice_link );?>">Download</a>
						<?php if ($invoice_link): ?>
							<a class="d-block color-info" target="_blank" href="<?php echo esc_url( $invoice_link );?>">Generate</a>
						<?php endif; ?>
					</td>
					<td class="text-right edd_purchase_details">
						<?php if( $payment->status != 'publish' ) : ?>
							<span class="edd_purchase_status <?php echo $payment->status; ?>"><?php echo $payment->status_nicename; ?></span>
							<?php if ( $payment->is_recoverable() ) : ?>
								&mdash; <a class="btn btn-xs btn-secondary" href="<?php echo $payment->get_recovery_url(); ?>"><?php _e( 'Complete Purchase', 'easy-digital-downloads' ); ?></a>
							<?php endif; ?>
						<?php else: ?>
							<a class="btn btn-xs btn-secondary" href="<?php echo esc_url( add_query_arg( 'payment_key', $payment->key, edd_get_success_page_uri() ) ); ?>">
							<?php echo wpwax_icon( 'uil uil-eye', false); ?>
							<?php _e( 'View', 'easy-digital-downloads' ); ?></a>
						<?php endif; ?>
					</td>
					<?php //do_action( 'edd_purchase_history_row_end', $payment->ID, $payment->payment_meta ); ?>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<?php
		echo edd_pagination( 
			array(
				'type'  => 'purchase_history',
				'total' => ceil( edd_count_purchases_of_customer() / 20 ) // 20 items per page
			)
		);
	?>
	<?php do_action( 'edd_after_purchase_history', $payments ); ?>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p class="edd-no-purchases"><?php _e('You have not made any purchases','easy-digital-downloads' ); ?></p>
<?php endif;