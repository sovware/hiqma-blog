<?php
/**
 * Template Name: Dashboard
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

if (!function_exists('EDD')) {
    die('Missing EDD Plugin');
}

if (!function_exists('edd_software_licensing')) {
    die('Missing EDD Software Licensing Plugin');
}

if (!function_exists('edd_pdf_invoices')) {
    die('Missing EDD PDF Invoice Plugin');
}

if ( !is_user_logged_in() ) {
    wp_redirect(THEME_LOGIN_URL);
    exit();
}

get_header();

$id = get_current_user_id();
?>
<div class="dashboard-content-wrapper gradientPrimaryLight">
    <div class="dashboard-intro-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-2 pt-140 pb-60 mb-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php if( ! empty( $_GET['edd-verify-success'] ) ) : ?>
                        <p class="dash-success-notice edd-account-verified edd_success">
                            <?php _e( 'Your account has been successfully verified!', 'easy-digital-downloads' ); ?>
                        </p>
                    <?php endif; ?>

                    <?php if (EDD::is_soft_license_page()): ?>
                         <?php get_template_part('template-parts/dashboard/subs-manage'); ?>
                    <?php else: ?>
                        <div class="dashboard-content-box dashboard_purchase">

                            <?php get_template_part('template-parts/dashboard/navmenu'); ?>

                            <div class="dashboard-contents tab-content">

                                <div role="tabpanel" class="tab-pane fade <?php Helper::print_active_dashboard_class('dashboard', 'content');?>" id="dashboard">
                                    <div class="dashboard-contents__single pb-110">
                                        <?php get_template_part('template-parts/dashboard/dashboard'); ?>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade <?php Helper::print_active_dashboard_class('orders', 'content');?>" id="orders">
                                    <div class="dashboard-contents__single pb-110">
                                        <div class="dashboard-contents__orders dashboard-box">
                                            <div class="dash-header">
                                                <h3>My Orders</h3>
                                            </div>
                                            <div class="dash-contents">
                                                <?php get_template_part('template-parts/dashboard/orders'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade <?php Helper::print_active_dashboard_class('subscriptions', 'content');?>" id="subscriptions">
                                    <div class="dashboard-contents__single pb-110">
                                        <div class="dashboard-contents__subscription dashboard-box">
                                            <div class="dash-header">
                                                <h3>Subscription Plan</h3>
                                            </div>
                                            <div class="dash-contents table-responsive rounded-lg">
                                                <?php get_template_part('template-parts/dashboard/subscription'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade <?php Helper::print_active_dashboard_class('downloads', 'content');?>" id="downloads">
                                    <div class="dashboard-contents__single pb-110">
                                        <div class="dashboard-contents__downloads dashboard-box">
                                            <div class="dash-header">
                                                <h3>Downloads</h3>
                                            </div>
                                            <div class="dash-contents table-responsive">
                                                <?php get_template_part('template-parts/dashboard/downloads'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade <?php Helper::print_active_dashboard_class('account', 'content');?>" id="account">
                                    <div class="dashboard-contents__single pb-110">
                                        <div class="dashboard-contents__profile dashboard-box">
                                            <div class="dash-header">
                                                <h4>My Profile</h4>
                                            </div>
                                            <div class="dash-contents">
                                                <?php get_template_part('template-parts/dashboard/profile'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade <?php Helper::print_active_dashboard_class('support', 'content');?>" id="support">
                                    <div class="dashboard-contents__single pb-110">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="dashboard-contents__support dashboard-box">
                                                    <?php get_template_part('template-parts/form-support'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- ends: .dashboard-content-wrapper -->

<?php
get_footer();