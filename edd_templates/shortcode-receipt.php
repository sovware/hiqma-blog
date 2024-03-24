<?php
/**
 * This template is used to display the purchase summary with [edd_receipt]
 */

use Sovware\Theme\Helper;
use Sovware\Theme\EDD;

global $edd_receipt_args;

$payment   = get_post($edd_receipt_args['id']);

if (empty($payment)) : ?>
<div class="edd_errors edd-alert edd-alert-error">
    <?php _e('The specified receipt ID appears to be invalid', 'easy-digital-downloads'); ?>
</div>
<?php
	return;
endif;

$meta   = edd_get_payment_meta($payment->ID);
$cart   = edd_get_payment_meta_cart_details($payment->ID, true);
$user   = edd_get_payment_meta_user_info($payment->ID);
$email  = edd_get_payment_user_email($payment->ID);
$status = edd_get_payment_status($payment, true);
?>

<div class="purchase-confirmation-area dashboard-contents">
    <div class="dashboard-contents__product-details dashboard-box pb-100">
        <div class="purchase-status mb-40">
            <ul class="pl-0 mb-0 ml-0">

                <li>Order No: <span>#<?php echo edd_get_payment_number($payment->ID); ?></span></li>

                <?php if (filter_var($edd_receipt_args['date'], FILTER_VALIDATE_BOOLEAN)) { ?>
                <li>Order Date: <span>
                        <?php echo date_i18n(get_option('date_format'), strtotime($meta['date'])); ?></span></li>
                <?php } ?>

                <li class="edd_receipt_payment_status <?php echo strtolower($status); ?>">Status:
                    <span><?php echo $status; ?></span>
                </li>

            </ul>
        </div>

        <?php if (filter_var($edd_receipt_args['products'], FILTER_VALIDATE_BOOLEAN)) { ?>
        <div class="dir-product-details mb-50">
            <h4><?php echo apply_filters('edd_payment_receipt_products_title', __('Product Details', 'easy-digital-downloads')); ?>
            </h4>
            <div class="table-responsive table-default">
                <table id="edd_purchase_receipt_products" class="edd-table">

                    <thead>
                        <th class="p-name"><?php _e('Product', 'easy-digital-downloads'); ?></th>
                        <th class="p-status"><?php _e('Price', 'easy-digital-downloads'); ?></th>
                        <th class="p-status"><?php _e('Expire', 'easy-digital-downloads'); ?></th>
                        <th class="p-license"><?php _e('License', 'easy-digital-downloads'); ?></th>

                        <?php if (edd_use_skus()) { ?>
                        <th class="p-downloads"><?php _e('SKU', 'easy-digital-downloads'); ?></th>
                        <?php
							}

							if (edd_item_quantities_enabled()) { ?>
                        <th><?php _e('Quantity', 'easy-digital-downloads'); ?></th>
                        <?php
							} ?>

                        <th class="p-action"><?php _e('Download', 'easy-digital-downloads'); ?></th>
                    </thead>

                    <tbody>
                        <?php if ($cart) {

								foreach ($cart as $key => $item) {

									if (!apply_filters('edd_user_can_view_receipt_item', true, $item)) {
										continue;
									}

									$product_meta = get_post_meta($item['id'], 'theme_product_meta', true);
									$child_theme = isset($product_meta['child_theme']) ? $product_meta['child_theme'] : '';

									if (empty($item['in_bundle'])) {
										$price_id       = edd_get_cart_item_price_id($item);
										$download_files = edd_get_download_files($item['id'], $price_id);
										$license = edd_software_licensing()->get_license_by_purchase( $payment->ID, $item['id'] );

										if ($license) {
											$expiration = edd_software_licensing()->get_license_expiration($license->ID);
											$date = ($expiration == 'lifetime') ? 'Never' : date_i18n('F j, Y', $expiration );
											$license_key = edd_software_licensing()->get_license_key($license->ID);
										}
										else {
											$date = $license_key = '';
										}
										?>

                        <tr>
                            <td>
                                <div class="edd_purchase_receipt_product_name">
                                    <?php echo esc_html($item['name']); ?>
                                    <?php if (edd_has_variable_prices($item['id']) && !is_null($price_id)) { ?>
                                    <span
                                        class="edd_purchase_receipt_price_name">&nbsp;&ndash;&nbsp;<?php echo esc_html(edd_get_price_option_name($item['id'], $price_id, $payment->ID)); ?></span>
                                    <?php } ?>
                                </div>

                                <?php do_action('edd_purchase_receipt_after_files', $item['id'], $payment->ID, $meta, $price_id); ?>
                            </td>
                            <td>
                                <?php if( empty( $item['in_bundle'] ) ) : // Only show price when product is not part of a bundle ?>
                                <?php echo edd_currency_filter( edd_format_amount( $item[ 'price' ] ) ); ?>
                                <?php endif; ?>
                            </td>

                            <td> <?php echo esc_html( $date ); ?> </td>

                            <td>
                                <input type="text" readonly="readonly" class="key-box edd_sl_license_key"
                                    value="<?php echo esc_attr( $license_key ); ?>">
                            </td>

                            <?php if (edd_use_skus()) { ?>
                            <td><?php echo edd_get_download_sku($item['id']); ?></td>
                            <?php }

											if (edd_item_quantities_enabled()) { ?>
                            <td><?php echo $item['quantity']; ?></td>
                            <?php } ?>

                            <td>
                                <?php
												$price_id       = edd_get_cart_item_price_id($item);
												$download_files = edd_get_download_files($item['id'], $price_id);
												$notes          = edd_get_product_notes($item['id']);

												if ($edd_receipt_args['notes'] && !empty($notes)) { ?>
                                <div class="edd_purchase_receipt_product_notes">
                                    <?php echo wp_kses_post(wpautop($notes)); ?>
                                </div>
                                <?php
												}

												if (EDD::is_all_access_product($item['id'])) {
													echo EDD::all_access_download_btn($item['id']);
												}

												if (edd_is_payment_complete($payment->ID) && edd_receipt_show_download_files($item['id'], $edd_receipt_args, $item)) :
													if (!empty($download_files) && is_array($download_files)) :
														?>
                                <ul class="edd_purchase_receipt_files">
                                    <?php
															foreach ($download_files as $filekey => $file) {
																?>
                                    <li class="edd_download_file">
                                        <a href="<?php echo esc_url(edd_get_download_file_url($meta['key'], $email, $filekey, $item['id'], $price_id)); ?>"
                                            class="btn btn-success btn-xs btn-transparent edd_download_file_link"><?php echo wpwax_icon( 'uil uil-cloud-download', false); ?>Download</a>
                                    </li>
                                    <?php
																do_action('edd_receipt_files', $filekey, $file, $item['id'], $payment->ID, $meta);
															}
															?>

                                    <?php if ( $child_theme ): ?>
                                    <li class="edd_download_file">
                                        <a href="<?php echo esc_url($child_theme); ?>"
                                            class="btn btn-success btn-xs btn-transparent edd_download_file_link"><?php echo wpwax_icon( 'uil uil-cloud-download', false); ?>Download
                                            Child Theme</a>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                                <?php
													elseif (edd_is_bundled_product($item['id'])) :
														$price_id         = edd_get_cart_item_price_id($item);
														$bundled_products = edd_get_bundled_products($item['id'], $price_id);
														?>
                                <a href="" data-toggle="modal" data-target="#download-files-modal"
                                    class="btn btn-success btn-xs btn-transparent edd_download_file_link">View Files</a>

                                <div class="modal fade" id="download-files-modal" tabindex="-1"
                                    aria-labelledby="download-files-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="download-files-modalLabel">Download Files
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="edd_purchase_receipt_files">
                                                    <?php
																			foreach ($bundled_products as $bundle_item) :
																				$download_files = edd_get_download_files(edd_get_bundle_item_id($bundle_item), edd_get_bundle_item_price_id($bundle_item));

																				if (!$download_files || !is_array($download_files)) {
																					continue;
																				}
																				?>
                                                    <li class="edd_bundled_product ml-0 mb-2 d-block">
                                                        <span
                                                            class="edd_bundled_product_name d-block mb-1"><?php echo edd_get_bundle_item_title($bundle_item); ?></span>
                                                        <ul
                                                            class="edd_bundled_product_files list-unstyled pl-0 mb-0 ml-0">
                                                            <?php
																						foreach ($download_files as $filekey => $file) :
																							?>
                                                            <li class="edd_download_file ml-0 mr-2">
                                                                <a href="<?php echo esc_url(edd_get_download_file_url($meta['key'], $email, $filekey, $bundle_item, $price_id)); ?>"
                                                                    class="btn btn-success btn-xs btn-transparent edd_download_file_link">Download</a>
                                                            </li>
                                                            <?php
																							do_action('edd_receipt_bundle_files', $filekey, $file, $item['id'], $bundle_item, $payment->ID, $meta);
																						endforeach;
																						?>
                                                        </ul>
                                                    </li>
                                                    <?php
																			endforeach;
																			?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
													else :
														echo '<ul class="edd_purchase_receipt_files"><li>' . apply_filters('edd_receipt_no_files_found_text', __('No downloadable files found.', 'easy-digital-downloads'), $item['id']) . '</li></ul>';
													endif; ?>
                                <?php endif; ?>

                                <?php
												// Allow extensions to extend the product cell
												do_action('edd_purchase_receipt_after_files', $item['id'], $payment->ID, $meta, $price_id);
												?>
                            </td>

                        </tr>
                        <?php } ?>

                        <?php } ?>

                        <?php } ?>
                        <?php if (($fees = edd_get_payment_fees($payment->ID, 'item'))) : ?>
                        <?php foreach ($fees as $fee) : ?>
                        <tr>
                            <td class="edd_fee_label"><?php echo esc_html($fee['label']); ?></td>
                            <?php if (edd_item_quantities_enabled()) : ?>
                            <td></td>
                            <?php endif; ?>
                            <td class="edd_fee_amount">
                                <?php echo edd_currency_filter(edd_format_amount($fee['amount'])); ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>

                </table>
            </div>
        </div>
        <?php } ?>

        <div class="dir-order-total table-infoList mb-50">
            <h4>Order Total</h4>
            <table id="edd_purchase_receipt" class="edd-table">
                <thead>
                    <?php do_action('edd_payment_receipt_before', $payment, $edd_receipt_args); ?>
                </thead>

                <tbody>

                    <?php if (filter_var($edd_receipt_args['payment_key'], FILTER_VALIDATE_BOOLEAN)) : ?>
                    <tr>
                        <td><strong><?php _e('Payment Key', 'easy-digital-downloads'); ?>: </strong></td>
                        <td><?php echo edd_get_payment_meta($payment->ID, '_edd_payment_purchase_key', true); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php if (filter_var($edd_receipt_args['payment_method'], FILTER_VALIDATE_BOOLEAN)) : ?>
                    <tr>
                        <td><strong><?php _e('Payment Method', 'easy-digital-downloads'); ?>: </strong></td>
                        <td><?php echo edd_get_gateway_checkout_label(edd_get_payment_gateway($payment->ID)); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php if (($fees = edd_get_payment_fees($payment->ID, 'fee'))) : ?>
                    <tr>
                        <td><strong><?php _e('Fees', 'easy-digital-downloads'); ?>: </strong></td>
                        <td>
                            <ul class="edd_receipt_fees">
                                <?php foreach ($fees as $fee) : ?>
                                <li>
                                    <span class="edd_fee_label"><?php echo esc_html($fee['label']); ?></span>
                                    <span class="edd_fee_sep">&nbsp;&ndash;&nbsp;</span>
                                    <span
                                        class="edd_fee_amount"><?php echo edd_currency_filter(edd_format_amount($fee['amount'])); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php if (filter_var($edd_receipt_args['discount'], FILTER_VALIDATE_BOOLEAN) && isset($user['discount']) && $user['discount'] != 'none') : ?>
                    <tr>
                        <td><strong><?php _e('Discount(s)', 'easy-digital-downloads'); ?>: </strong></td>
                        <td><?php echo $user['discount']; ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php if (edd_use_taxes()) : ?>
                    <tr>
                        <td><strong><?php _e('Tax', 'easy-digital-downloads'); ?>: </strong></td>
                        <td><?php echo edd_payment_tax($payment->ID); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php if (filter_var($edd_receipt_args['price'], FILTER_VALIDATE_BOOLEAN)) : ?>

                    <tr>
                        <td><strong><?php _e('Subtotal', 'easy-digital-downloads'); ?>: </strong></td>
                        <td>
                            <?php echo edd_payment_subtotal($payment->ID); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><strong><?php _e('Total Price', 'easy-digital-downloads'); ?>: </strong></td>
                        <td><?php echo edd_payment_amount($payment->ID); ?></td>
                    </tr>

                    <?php endif; ?>

                    <?php do_action( 'edd_payment_receipt_after', $payment, $edd_receipt_args ); ?>

                </tbody>
            </table>
        </div>

        <?php do_action('edd_payment_receipt_after_table', $payment, $edd_receipt_args); ?>


        <?php

		global $current_user;

		$user_id  = get_current_user_id();
		$address  = edd_get_customer_address($user_id);
		$customer = new EDD_Customer($user_id, true);

		$email  = $customer->email;
		$emails = $customer->emails;
		$name   = $customer->name;

		$locations =  $address['line1'] ? $address['line1'] . '</br>' : '';
		$locations .= $address['line2'] ? $address['line2'] . '</br>' : '';
		$locations .= $address['city'] ? $address['city'] . '</br>' : '';
		$locations .= $address['zip'] ? $address['zip'] . '</br>' : '';
		$locations .= $address['country'] ? $address['country'] . '</br>' : '';
		$locations .= $address['state'] ? $address['state'] . '</br>' : '';

		?>

        <div class="dir-order-customer-details table-infoList">
            <h4>Customer Details</h4>
            <table>
                <tbody>
                    <tr>
                        <td>Email</td>
                        <td>
                            <?php
							if (1 === count($customer->emails)) {
								echo $email;
							} else {
								foreach ($emails as $email) {
									echo $email . "</br>";
								}
							} ?>
                        </td>
                    </tr>

                    <?php if ($locations) { ?>
                    <tr>
                        <td>Billing Address</td>
                        <td>
                            <?php echo $locations; ?>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>