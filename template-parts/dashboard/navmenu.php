<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
<div class="dashboard-tab-menu">
	<ul class="dashboard-tab-menu__nav nav" id="myTab" role="tablist">
		<li class="dashboard-tab-menu__item">
			<a href="#dashboard" aria-controls="dashboard" role="tab" data-toggle="tab" class="<?php Helper::print_active_dashboard_class('dashboard', 'nav');?>">
			<?php echo wpwax_icon( 'uil uil-create-dashboard', false); ?>
			<?php esc_attr_e('Dashboard', 'martplace'); ?>
		</a>
		</li>
		<li class="dashboard-tab-menu__item">
			<a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="<?php Helper::print_active_dashboard_class('orders', 'nav');?>"><?php echo wpwax_icon( 'uil uil-shopping-basket', false); ?><?php esc_attr_e('Orders', 'martplace'); ?></a>
		</li>
		<li class="dashboard-tab-menu__item">
			<a href="#subscriptions" aria-controls="subscriptions" role="tab" data-toggle="tab" class="<?php Helper::print_active_dashboard_class('subscriptions', 'nav');?>"><i class=""></i><?php echo wpwax_icon( 'uil uil-bill', false); ?>Subscription</a>
		</li>
		<li class="dashboard-tab-menu__item">
			<a href="#downloads" aria-controls="downloads" role="tab" data-toggle="tab" class="<?php Helper::print_active_dashboard_class('downloads', 'nav');?>"><?php echo wpwax_icon( 'uil uil-download-alt', false); ?>Downloads</a>
		</li>
		<li class="dashboard-tab-menu__item">
			<a href="#support" aria-controls="support" role="tab" data-toggle="tab" class="<?php Helper::print_active_dashboard_class('support', 'nav');?>"><?php echo wpwax_icon( 'uil uil-headphones', false); ?><?php esc_attr_e('Support', 'martplace'); ?></a>
		</li>
		<li class="dashboard-tab-menu__item">
			<a href="#account" aria-controls="account" role="tab" data-toggle="tab" class="<?php Helper::print_active_dashboard_class('account', 'nav');?>"><?php echo wpwax_icon( 'uil uil-user-square', false); ?></span><?php esc_attr_e('Profile', 'martplace'); ?></a>
		</li>
	</ul>
</div>