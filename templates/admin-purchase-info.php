<?php
/**
 * Template Name: Purchase Info (Admin Only)
 *
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header();

$user= isset($_GET['user']) ? sanitize_text_field( $_GET['user'] ) : false;

$user_id = 99999999;

if ($user) {
    $user_data1 = get_user_by( 'email', $user );
    $user_data2 = get_user_by( 'login', $user );

    if ($user_data1) {
        $user_id = $user_data1->ID;
        $user_data = $user_data1;
    }
    if ($user_data2) {
        $user_id = $user_data2->ID;
        $user_data = $user_data2;
    }
}

$license_keys = edd_software_licensing()->get_license_keys_of_user( $user_id, 0, 'any', false );

do_action( 'edd_sl_license_keys_before' );
?>

<?php if (post_password_required()): ?>
    <div class="container">
        <?php echo get_the_password_form(); ?>
    </div>
<?php else: ?>

    <div class="container">
        <form>
            <p><input type="text" name="user" value="<?php echo $user ? $user : '';?>" id="input-purchase-code" placeholder="Enter username or email" /><input type="submit" value="Submit" class="btn btn-success"></p>
        </form>


        <?php if ($user && $user_id == 99999999): ?>
        	<h2>User '<?php echo $user;?>' doesn't exists</h2>
        <?php elseif($user): ?>
        	<h2>Details for user: <?php echo $user_data->display_name;?></h2>
        <?php endif; ?>

        <div class="table-responsive table-default">
            <table class="table-subscription">
                <thead>
                    <tr>
                        <?php do_action('edd_sl_license_keys_header_before'); ?>
                        <th class="itme-title">Subscription</th>
                        <th class="s-status">Status</th>
                        <th class="s-price">Price</th>
                        <th class="s-purchase">Purchase Date</th>
                        <th class="s-expire">Expiry Date</th>
                        <th class="s-activation">Activations</th>
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

                            $price_text = $license_length_text ? sprintf('%s<span class="price-length">%s</span>', $current_price, $license_length_text) : $current_price;

                            $discount = edd_sl_get_renewal_discount_percentage( $license->ID );
                            $discount_text = $discount? sprintf('<div>%s%% off if %s now</div>', $discount, $status == 'active' ? 'extend' : 'renew') : '';
                            $price_text .= $discount_text;
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
                                        <a href="" data-toggle="modal" data-target="#bundleList" class="d-block mt-2">
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
                                                        <ul class="edd-sl-child-licenses list-unstyled m-0">
                                                            <?php foreach ( $child_keys as $child_key ) : ?>
                                                                <li class="edd-sl-child mb-3">
                                                                    <span class="d-block mb-2">
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
                                    <?php do_action( 'edd_sl_license_key_details', $license->ID ); ?>
                                </td>

                                <td><span class="<?php echo $status;?>"><?php echo ucwords($status);?></span></td>

                                <td><?php echo $price_text;?></td>
                                
                                <!-- Purchase Date -->
                                <td>
                                    <div class="edd_sl_item_expiration <?php echo $status;?>">
                                        <?php echo ! empty( $license->date_created ) ? date_i18n( 'F j, Y', $license->date_created ) : ''; ?>
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="edd_sl_item_expiration <?php echo $status;?>">
                                        <?php if( edd_software_licensing()->is_lifetime_license( $license->ID ) ) : ?>
                                            <?php _e( 'Never', 'edd_sl' ); ?>
                                        <?php else: ?>
                                            <?php echo date_i18n( 'F j, Y', edd_software_licensing()->get_license_expiration( $license->ID ) ); ?>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="edd_sl_limit_used"><?php echo edd_software_licensing()->get_site_count( $license->ID ); ?></span>
                                        <span class="edd_sl_limit_sep">&nbsp;/&nbsp;</span>
                                        <span class="edd_sl_limit_max"><?php echo edd_software_licensing()->license_limit( $license->ID ); ?></span>
                                    </div>
                                </td>
                                <?php do_action( 'edd_sl_license_keys_row_end', $license->ID ); ?>
                            </tr>
                            <?php
                        }
                    }
                    else { ?>
                        <tr class="edd_sl_license_row">
                            <td colspan="6" class="text-left"><?php _e( 'No License information found', 'edd_sl' ); ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php endif; ?>

<?php
do_action( 'edd_sl_license_keys_after' );

get_footer();
