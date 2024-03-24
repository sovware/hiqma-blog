<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
<div class="main-header">
	<span class="menu-trigger d-lg-none">
		<span></span>
		<span></span>
		<span></span>
	</span>
	<div class="site-branding">
		<div class="logo logo--multiple">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img class="main-logo" src="<?php echo Helper::get_svg('wp-wax-icon.svg');?>" alt="">
			</a>
			<a href="<?php echo esc_url( THEME_HELPGENT_BASE_URL  . '/'); ?>">
				<img class="main-logo d-none d-md-block" src="<?php echo Helper::get_svg('helpgent-logo.svg');?>" alt="">
				<img class="main-logo d-block d-md-none" src="<?php echo Helper::get_svg('helpgent-mobile-logo.svg');?>" alt="">
			</a>
		</div>
	</div>

	<div class="main-navigation-wrap d-flex align-items-center">
		<div class="main-navigation "><?php wp_nav_menu(Helper::get_nav_menu_args('helpgent-primary')); ?></div>

		<?php
		if (is_user_logged_in()) {
			$id = get_current_user_id();
			$name = get_the_author_meta('display_name', $id);
			$avatar = get_avatar($id, 50, null, null, array('class' => 'rounded-circle'));
			?>
			<div class="main-navigation__right">
				<div class="header-btn-group">
					<a href="https://wpwax.com/helpgent/pricing/" class="btn btn-dark btn-raised btn-xxs btn-app btn-animate animate--dark"><?php echo wpwax_icon( 'uil uil-download-alt',false,' d-flex align-items-center d-xs-none'); ?><span class="d-none d-xs-block"> Get Started</span></a>
				</div>
				<div class="author-info">
					<a href="#" class="author-avatar">
						<?php echo $avatar; ?>
						<?php if ($name): ?>
							<span class="author-name"><?php echo $name; ?></span>
						<?php endif; ?>
					</a>
					
					<div class="user-dropdown">
						<ul class="list-unstyled">
							<li><a href="<?php echo THEME_DASHBOARD_URL;?>">Dashboard</a></li>
							<li><a href="<?php echo add_query_arg( 'tab', 'orders', THEME_DASHBOARD_URL );?>">Orders</a></li>
							<li><a href="<?php echo add_query_arg( 'tab', 'subscriptions', THEME_DASHBOARD_URL );?>">Subscription</a></li>
							<li><a href="<?php echo add_query_arg( 'tab', 'downloads', THEME_DASHBOARD_URL );?>">Downloads</a></li>
							<li><a href="<?php echo add_query_arg( 'tab', 'support', THEME_DASHBOARD_URL );?>" rel="nofollow" >Support</a></li>
							<li><a href="<?php echo add_query_arg( 'tab', 'account', THEME_DASHBOARD_URL );?>">Profile</a></li>
							<li><span><?php echo wpwax_icon( 'uil uil-sign-out-alt', false); ?><a href=" <?php echo wp_logout_url(home_url('/')); ?> ">Sign Out</a></span></li>
						</ul>
					</div>
				</div>
			</div>
			<?php
		}
		else { 	?>
			<div class="header-btn-group">
				<a href="<?php echo THEME_LOGIN_URL;?>" class="btn btn-white btn-raised btn-xxs btn-login">
				<?php echo wpwax_icon( 'uil uil-user',true,' d-flex align-items-center d-xs-none'); ?><span class="d-none d-xs-block">Sign In</span></a>
				<a href="https://wpwax.com/helpgent/pricing/" class="btn btn-dark btn-raised btn-xxs btn-app btn-animate animate--dark"><?php echo wpwax_icon( 'uil uil-download-alt',false,' d-flex align-items-center d-xs-none'); ?><span class="d-none d-xs-block"> Get Started</span></a>
			</div>
			
		<?php } ?>
	</div>
	
</div>