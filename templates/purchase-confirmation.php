<?php
/**
 * Template Name: Purchase Confirmation
 * 
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header(); 
?>

<div class="container">
	<div class="purchase-confirmation pt-60 pb-60">
		<?php
		if (is_user_logged_in()) { ?>
			<a class="dashboard-return-btn btn btn-primary mb-30" href="<?php echo esc_url(THEME_DASHBOARD_URL);?>">Go to Dashboard</a>
			<?php
		}
		
		echo do_shortcode('[edd_receipt]');
		?>
	</div> 
</div>

<?php
get_footer();