<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$download_data = EDD::get_user_download_data();

if ( !empty($download_data['themes']) || !empty($download_data['plugins']) ) {
	do_action( 'edd_before_download_history' ); ?>
	<div class="table-default table-responsive">
		<table class="table-downloads">

			<thead>
				<tr class="edd_download_history_row">
					<th class="edd_download_download_name">Product</th>
					<th class="edd_download_download_files">Download</th>
				</tr>
			</thead>

			<?php if (!empty($download_data['themes'])){ ?>
				<tr><td colspan="2"><h4 class="mb-0">Themes</h4></td></tr>
				<?php
				foreach ($download_data['themes'] as $data) {
					EDD::download_row_html($data);
				}
			}

			if (!empty($download_data['plugins'])) { ?>
				<tr><td colspan="2"><h5 class="mb-0">Extensions</h5></td></tr>
				<?php
				foreach ($download_data['plugins'] as $data) {
					EDD::download_row_html($data);
				}
			}
			?>

		</table>
	</div>
	
	<?php
	do_action( 'edd_after_download_history' );
}
else { ?>
	<p class="edd-no-downloads"><?php _e( 'You have not purchased any downloads', 'easy-digital-downloads' ); ?></p>
	<?php
}