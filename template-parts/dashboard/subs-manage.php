<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
<a class="dashboard-return-btn btn btn-primary mb-4" href="<?php echo add_query_arg( 'tab', 'subscriptions', THEME_DASHBOARD_URL );?>">Go to Dashboard Menu</a>
<?php
echo EDD::soft_license_page_content();