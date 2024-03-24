<?php

use Sovware\Theme\Helper;

if ( ! is_user_logged_in() ) {
	return;
}

$license_id  = absint( $_GET['license_id' ] );
$download_id = absint( edd_software_licensing()->get_download_id( $license_id ) );
$download    = new EDD_Download( $download_id );
$user_id     = edd_software_licensing()->get_user_id( $license_id );

if( ! current_user_can( 'manage_licenses' ) && $user_id != get_current_user_id() ) {
	return;
}

$color = edd_get_option( 'checkout_color', 'gray' );
$color = ( $color == 'inherit' ) ? '' : $color;


$license = edd_software_licensing()->get_license( $license_id );
// Retrieve all sites for the specified license
$sites = $license->get_activations();
?>
<?php edd_sl_show_errors(); ?>
<div class="dashboard-contents">
	<div class="license-handle-wrap dashboard-box">
		<h5 class="edd-sl-manage-license-header"><?php _e( 'Manage License', 'edd_sl' ); ?></h5>
		<p class="edd-sl-manage-license-details">
			<span class="edd-sl-manage-license-key"><?php _e( 'License', 'edd_sl' ); ?>: <?php echo '<code class="color-danger">' . $license->key . '</code>'; ?></span>
			<span class="edd-sl-manage-license-product"><?php _e( 'Product', 'edd_sl' ); ?>: <span><?php echo $download->get_name(); ?></span></span>
		</p>
		<div class="table-responsive table-site-url table-default">
			<table id="edd_sl_license_sites" class="edd_sl_table edd-table">
				<thead>
					<tr class="edd_sl_license_row">
						<?php do_action('edd_sl_license_sites_header_before'); ?>
						<th class="edd_sl_url"><?php _e( 'Site URL', 'edd_sl' ); ?></th>
						<th class="edd_sl_actions"><?php _e( 'Actions', 'edd_sl' ); ?></th>
						<?php do_action('edd_sl_license_sites_header_after'); ?>
					</tr>
				</thead>
				<?php if ( $sites ) : ?>
					<?php foreach ( $sites as $site ) : ?>
						<tr class="edd_sl_license_row">
							<?php do_action( 'edd_sl_license_sites_row_start', $license_id ); ?>
							<td><?php echo $site->site_name; ?></td>
							<td><a href="<?php echo wp_nonce_url( add_query_arg( array( 'edd_action' => 'deactivate_site', 'site_id' => $site->site_id, 'license' => $license_id ) ), 'edd_deactivate_site_nonce', '_wpnonce' ); ?>"><?php _e( 'Deactivate Site', 'edd_sl' ); ?></a></td>
							<?php do_action( 'edd_sl_license_sites_row_end', $license_id ); ?>
						</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<tr class="edd_sl_license_row">
						<?php do_action( 'edd_sl_license_sites_row_start', $license_id ); ?>
						<td colspan="2"><?php _e( 'No sites have been activated for this license', 'edd_sl' ); ?></td>
						<?php do_action( 'edd_sl_license_sites_row_end', $license_id ); ?>
					</tr>
				<?php endif; ?>
			</table>
		</div>

		<?php $status   = $license->status; ?>
		<?php $at_limit = $license->is_at_limit(); ?>

		<?php if ( ! $at_limit && ( $status == 'active' || $status == 'inactive' ) && 'disabled' !== $status ) : ?>
		<div class="add-url-form">
			<form method="post" id="edd_sl_license_add_site_form" class="edd_sl_form">
				<div>
					<h6 class="add-url-title"><?php _e( 'Use this form to authorize a new site URL for this license. Enter the full site URL.', 'edd_sl' ); ?></h6>
					<div class="url-input-wrap d-flex">
						<div class="form-element element-url">
							<div class="form-group">
								<input type="text" name="site_url" class="edd-input" value="http://"/>
							</div>
						</div>
						<div class="form-element">
							<div class="form-group">
								<input type="submit" class="btn btn-primary btn-raised" value="<?php _e( 'Add Site', 'edd_sl' ); ?>"/>
								<input type="hidden" name="license_id" value="<?php echo esc_attr( $license_id ); ?>"/>
								<input type="hidden" name="edd_action" value="insert_site"/>
								<?php wp_nonce_field( 'edd_add_site_nonce', 'edd_add_site_nonce', true ); ?>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
	
<?php endif; ?>
