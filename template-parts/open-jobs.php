<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$jobdata = array();

$jobs = get_posts(array(
	'post_type' => 'theme_job',
	'posts_per_page'  => -1,
));

foreach ( $jobs as $job ) {
	$cat = get_the_terms( $job, 'theme_job_category' );
	$meta = get_post_meta( $job->ID, 'theme_job_info', true );

	if (empty($cat[0])) {
		continue;
	}

	$catname = $cat[0]->name;

	$jobdata[$catname][] = array(
		'obj'  => $job,
		'type' => !empty($meta['job_type']) ? $meta['job_type'] : '',
	);
}
?>

<div class="row justify-content-center">
	<div class="col-lg-8">
		<?php foreach ($jobdata as $catname => $fields): ?>
			<div class="circular-block">
				<h6 class="circular-title"><?php echo esc_html( $catname );?></h6>
				<div class="circular-table table-responsive">
					<table class="table">
						<tbody>
							<?php foreach ($fields as $value): ?>
								<tr>
									<td class="job-title">
										<h6><?php echo esc_html( $value['obj']->post_title );?></h6>
									</td>
									<td class="job-type">
										<span><?php echo $value['type'];?></span>
									</td>
									<td class="action text-right">
										<a href="<?php echo get_the_permalink( $value['obj'] );?>" class="btn-link">Details<?php echo Helper::the_svg( 'icons/arrow-right' ); ?></a>
									</td>
								</tr>
								<tr class="height-10 box-shadow-0">
									<td style="visibility: hidden; padding: 0; line-height: 0" colspan="3">&nbsp;</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>