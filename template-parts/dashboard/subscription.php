<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

use EDD_Subscriptions_DB;

$license_keys = edd_software_licensing()->get_license_keys_of_user( get_current_user_id(), 0, 'any', false );

do_action( 'edd_sl_license_keys_before' );
?>
<div class="table-lg-responsive table-default">
	<table class="table-subscription">
		<thead>
			<tr>
				<?php do_action('edd_sl_license_keys_header_before'); ?>
				<th class="itme-title">Subscription</th>
				<th class="s-status">Status</th>
				<th class="s-price">Price</th>
				<th class="text-center s-expire">Expiry Date <br>(Auto-Renewals)</th>
				<th class="s-activation">Activations</th>
				<th class="s-actions">Actions</th>
				<?php do_action('edd_sl_license_keys_header_after'); ?>
			</tr>
		</thead>
		<tbody>
			<?php
			if ( $license_keys ) {
				foreach ( $license_keys as $license ) {
					// possible values: active,expired,disabled
					$status = edd_software_licensing()->get_license_status( $license->ID );
					if ($status == 'inactive') {
						$status = 'active';
					}

					$payment_id = edd_software_licensing()->get_payment_id( $license->ID );

					$subscription = EDD::get_subscription_data( $payment_id );
					$renewal_date = ! empty( $subscription->expiration ) ? date_i18n( 'F d, Y', strtotime( $subscription->expiration ) ) : __( 'N/A', 'edd-recurring' );

					$child_keys = edd_software_licensing()->get_child_licenses( $license->ID );
					$price_id = edd_software_licensing()->get_price_id( $license->ID );
					$download_id = edd_software_licensing()->get_download_id( $license->ID );

					$current_price = edd_price($download_id, false, $price_id);
					if (!edd_software_licensing()->is_lifetime_license( $license->ID )) {
						$license_length = edd_software_licensing()->get_license_length( $license->ID, $payment_id, $download_id );

						if ($license_length == '+1 years') {
							$license_length_text = '/year';
						}
						elseif($license_length == '+1 months') {
							$license_length_text = '/month';
						}
						elseif($license_length == '+1 weeks') {
							$license_length_text = '/week';
						}
						elseif($license_length == '+1 days') {
							$license_length_text = '/day';
						}
						else {
							$license_length_text = '/'.$license_length;
						}
					}
					else {
						$license_length_text = '';
					}

					// $price_text = $license_length_text ? sprintf('%s<span class="price-length">%s</span>', $current_price, $license_length_text) : $current_price;
					$discount = edd_sl_get_renewal_discount_percentage( $license->ID );
					?>
					<tr>
						<?php do_action( 'edd_sl_license_keys_row_start', $license->ID ); ?>
						<td>
							<div class="edd_sl_item_name">
								<?php echo edd_software_licensing()->get_download_name( $license->ID ); ?>
								<?php if( $price_id ) : ?>
									<span class="edd_sl_key_sep"> - </span>
									<span class="edd_sl_key_price_option"><?php echo edd_get_price_option_name( edd_software_licensing()->get_download_id( $license->ID ), $price_id ); ?></span>
								<?php endif; ?>
							</div>
							<input type="text" readonly="readonly" class="edd_sl_license_key" value="<?php echo esc_attr( edd_software_licensing()->get_license_key( $license->ID ) ); ?>" />
							<?php if ( ! empty( $child_keys ) ) : ?>
								<a href="" data-toggle="modal" data-target="#bundleList" class="mt-2 d-block">
									View More
								</a>

								<!-- Modal -->
								<div class="modal fade" id="bundleList" tabindex="-1" aria-labelledby="bundleListLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="bundleListLabel"><?php _e( 'Bundle Licenses', 'edd_sl' ); ?></h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<ul class="m-0 edd-sl-child-licenses list-unstyled">
													<?php foreach ( $child_keys as $child_key ) : ?>
														<li class="mb-3 edd-sl-child">
															<span class="mb-2 d-block">
																<?php echo edd_software_licensing()->get_download_name( $child_key->ID ); ?>
																<?php
																if ( ! edd_software_licensing()->force_increase() ) {
																	$url = esc_url( add_query_arg( array( 'license_id' => $child_key->ID, 'action' => 'manage_licenses', 'payment_id' => $payment_id ), get_permalink( edd_get_option( 'purchase_history_page' ) ) ) );
																	?>
																	&nbsp;&ndash;&nbsp;<a href="<?php echo $url; ?>"><?php _e( 'Manage Sites', 'edd_sl' ); ?></a>
																	<?php
																}
																?>
															</span>
															<input type="text" readonly="readonly" class="edd_sl_license_key" value="<?php echo esc_attr( edd_software_licensing()->get_license_key( $child_key->ID ) ); ?>" />
														</li>
													<?php endforeach; ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</td>

						<td><span class="<?php echo $status;?>"><?php echo ucwords($status);?></span></td>

						<td class="text-nowrap">
							<strong>Initial:</strong> <?php echo $current_price;?>/<?php echo $subscription->period ?? 'year';?>
							<br>
							<?php if ( is_object( $subscription) && method_exists( $subscription, 'can_cancel' ) && $subscription->can_cancel() ) : ?>
								<span class="edd_subscription_billing_cycle">
									<strong>Renewal Payment:</strong> <?php echo edd_currency_filter( edd_format_amount( $subscription->recurring_amount ), edd_get_payment_currency_code( $subscription->parent_payment_id ) ); ?>/<?php echo $subscription->period;?>
								</span>
							<?php endif;?>
							<?php echo $discount? sprintf('<div>(%s%% off if %s now)</div>', $discount, $status == 'active' ? 'extend' : 'renew') : '';?>
						</td>
						<td class="text-center text-nowrap">
							<div class="edd_sl_item_expiration">
								<?php if( edd_software_licensing()->is_lifetime_license( $license->ID ) ) : ?>
									<?php _e( 'Never', 'edd_sl' ); ?>
								<?php else: ?>
									<?php echo date_i18n( 'F j', edd_software_licensing()->get_license_expiration( $license->ID ) ); ?>
								<?php endif; ?>

							</div>

							<?php if (  is_object( $subscription) && method_exists( $subscription, 'can_cancel' ) && $subscription->can_cancel() ) : ?>
								<span class="edd_subscription_renewal_date">(Auto-renews)</span>
							<?php endif; ?>

							<?php // do_action( 'edd_sl_license_key_details', $license->ID ); ?>
						</td>
						<td>
							<div>
								<span class="edd_sl_limit_used"><?php echo edd_software_licensing()->get_site_count( $license->ID ); ?></span>
								<span class="edd_sl_limit_sep">&nbsp;/&nbsp;</span>
								<span class="edd_sl_limit_max"><?php echo edd_software_licensing()->license_limit( $license->ID ); ?></span>
							</div>
						</td>

						<td >
							<div class="flex-wrap table-actions d-flex align-items-center justify-content-end">
								
								<?php if( edd_sl_license_has_upgrades( $license->ID ) && 'expired' !== edd_software_licensing()->get_license_status( $license->ID ) ) : ?>
									<div class="d-flex flex-column">
										<a class="btn btn-xs btn-info btn-transparent upgrade-plan justify-content-center" href="<?php echo esc_url( add_query_arg( array( 'view' => 'upgrades', 'license_id' => $license->ID, 'action' => 'manage_licenses', 'payment_id' => 	$payment_id ), get_permalink( edd_get_option( 'purchase_history_page' ) ) ) ); ?>">
									
										<?php _e( 'Upgrade', 'edd_sl' ); ?></a>
										<small class="mx-1 text-danger"><?php echo $discount ? sprintf('<div>Upgrade now & Save %s%%</div>', $discount ) : '';?></small>
									</div>

								<?php elseif ( edd_sl_license_has_upgrades( $license->ID ) && 'expired' == edd_software_licensing()->get_license_status( $license->ID ) ) : ?>
									<a class="btn btn-xs btn-success btn-transparent" href="<?php echo edd_software_licensing()->get_renewal_url( $license->ID ); ?>" title="<?php esc_attr_e( 'Renew license', 'edd_sl' ); ?>">
										<?php _e( 'Renew', 'edd_sl' ); ?>
									</a>
								<?php endif; ?>

								<div class="d-flex align-items-center more-actions-wrapper dropdown">
									<button type="button" class="more-actions" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo wpwax_icon( 'uil uil-ellipsis-h', false); ?></button>
									<ul class="show-me-in-dots more-actions-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
										<?php if( ! edd_software_licensing()->force_increase() && ( 'expired' !== $license->status && 'disabled' !== $license->status ) ) : ?>
											<li>
												<a href="<?php echo esc_url( add_query_arg( array( 'license_id' => $license->ID, 'action' => 'manage_licenses', 'payment_id' => $payment_id ), get_permalink( edd_get_option( 'purchase_history_page' ) ) ) ); ?>"><?php _e( 'Manage', 'edd_sl' ); ?></a>
											</li>
										<?php endif; ?>

										<?php if( edd_sl_renewals_allowed() ) : ?>
											<?php if( ! edd_software_licensing()->is_lifetime_license( $license->ID ) && edd_software_licensing()->can_extend( $license->ID ) ) : ?>
												<li>
													<a href="<?php echo edd_software_licensing()->get_renewal_url( $license->ID ); ?>" title="<?php esc_attr_e( 'Extend license', 'edd_sl' ); ?>"><?php _e( 'Extend', 'edd_sl' ); ?></a>
												</li>
											<?php endif; ?>
										<?php endif; ?>
										
										<li>
											<a target="_blank" class="edd_sl_purchase_number" href="<?php echo esc_url( edd_get_success_page_uri( '?payment_key=' . edd_get_payment_key( $payment_id ) ) ); ?>" title="<?php esc_attr_e( 'View Purchase Record', 'edd_sl' ); ?>">View</a>
										</li>
										
										<li>
										<?php if( is_object( $subscription) && method_exists( $subscription, 'can_cancel' ) && $subscription->can_cancel() ) : ?>
											<a href="<?php echo esc_url( $subscription->get_cancel_url() ); ?>" class="edd_subscription_cancel">
												<?php echo edd_get_option( 'recurring_cancel_button_text', __( 'Cancel', 'edd-recurring' ) ); ?>
											</a>
										<?php endif; ?>
										</li>
									</ul>
								</div>
							</div>
						</td>
						<?php do_action( 'edd_sl_license_keys_row_end', $license->ID ); ?>
					</tr>
					<?php
				}
			}
			else { ?>
				<tr class="edd_sl_license_row">
					<td colspan="6" class="text-left"><?php _e( 'You currently have no licenses', 'edd_sl' ); ?></td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</div>

<?php
do_action( 'edd_sl_license_keys_after' );