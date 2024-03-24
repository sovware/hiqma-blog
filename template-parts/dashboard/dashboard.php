<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$id = get_current_user_id();
$name = get_the_author_meta('display_name', $id);
$email = get_the_author_meta('user_email', $id);
$logout_url = wp_logout_url(THEME_LOGIN_URL);
$avatar = get_avatar($id, 50, null, null, array('class' => 'rounded-circle'));
$stats = edd_get_purchase_stats_by_user( $id );
$order_count = !empty($stats['purchases']) ? $stats['purchases'] : 0;

$active_plans = array();
$license_keys = edd_software_licensing()->get_license_keys_of_user( $id );
foreach ($license_keys as $license) {
    if ( $license->status != 'expired' ) {
        $active_plans[] = $license->post_title;
    }
}
?>

<div class="row">
	<div class="col-lg-4">
		<div class="text-center dashboard-contents__avatar dashboard-box">
			<div class="avatar-image">
				<?php echo $avatar;?>
			</div>
			<h4 class="avatar-username"><?php echo $name; ?></h4>
			<?php if (!empty($email)): ?>
				<div class="avatar-email"><?php echo $email; ?></div>
			<?php endif; ?>

			<a class="btn btn-primary btn-transparent avatar-logut-btn" href="<?php echo $logout_url;?>"><?php echo wpwax_icon( 'uil uil-sign-in-alt', false); ?>Sign Out</a>
			<div class="shape shape-bottom"><?php echo Helper::the_svg( 'shapes/leaf-shape' ); ?> </div>
		</div>
	</div>
	<div class="col-lg-8">
		<div class="dashboard-contents__info dashboard-box">
			<div class="row">
				<div class="col-xl-6">
					<div class="dashboard-contents__infoBox infoBox-order media align-items-center">
						<div class="infoBox-icon icon-box gradientWarningDiagonal box-sm box-circle">
							<?php echo Helper::the_svg( 'icons/bin' ); ?>
						</div>
						<div class="infoBox-content media-body">
							<h5 class="infoBox-content__title">My Orders</h5>
							<span class="infoBox-content__count"><?php echo $order_count;?></span>
						</div>
						<a class="dashboard-contents__link stretched-link" href="<?php echo add_query_arg( 'tab', 'orders', THEME_DASHBOARD_URL );?>"><?php echo Helper::the_svg( 'icons/arrow-right' ); ?></a>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="dashboard-contents__infoBox media align-items-center">
						<div class="infoBox-icon icon-box gradientPrimaryDiagonal box-sm box-circle">
							<?php echo Helper::the_svg( 'icons/list-box' ); ?>
						</div>
						<div class="infoBox-content media-body">
							<h5 class="infoBox-content__title">Current Subscriptions</h5>
							<div class="infoBox-content__planList">
								<?php
								if (!empty($active_plans)) { ?>
									<ul class="mb-0 ml-0 list-unstyled">
										<?php
										foreach ($active_plans as $plan){
											echo "<li>$plan</li>";
										}
										?>
									</ul>
									<?php
								}
								else {
									echo "<span>None</span>";
								}
								?>
							</div>
						</div>
						<a class="dashboard-contents__link stretched-link" href="<?php echo add_query_arg( 'tab', 'subscriptions', THEME_DASHBOARD_URL );?>"><?php echo Helper::the_svg( 'icons/arrow-right' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>