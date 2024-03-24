<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

use \WP_Query;

$sticky = get_option('sticky_posts');
$sticky = !empty($sticky) ? $sticky : array(0);
$sticky_args = array(
	'posts_per_page'      => 1,
	'post__in'            => $sticky,
	'ignore_sticky_posts' => 1,
);

$popular = !empty($_GET['popular']) ? true : false;
$cat = !empty($_GET['catid']) ? (int) $_GET['catid'] : false;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$has_custom_query = false;

if ($popular) {
	$args = array(
		'post_type'    => 'post',
		'ignore_sticky_posts' => 1,
		'meta_key'     => 'post_views_count',
		'orderby'      => 'meta_value_num',
		'order'        => 'DESC',
		'paged'        => $paged,
	);
	$custom_query = new WP_Query($args);
	$has_custom_query = true;
} elseif ($cat) {
	$args = array(
		'post_type'  => 'post',
		'ignore_sticky_posts' => 1,
		'cat'        => $cat,
		'paged'      => $paged,
	);
	$custom_query = new WP_Query($args);
	$has_custom_query = true;
	$sticky_args['cat'] =  $cat;
}

$sticky_query = new WP_Query($sticky_args);

get_header();
?>

<div class="blog-content-area">
	<?php get_template_part('template-parts/blog-banner'); ?>
	<div class="blog-cards-area">
		<div class="blog-cards">
			<div class="container">
				<div class="row">
					<?php
					// Render 1 sticky post
					if ($sticky_query->have_posts()) {
						while ($sticky_query->have_posts()) {
							$sticky_query->the_post();
							get_template_part('template-parts/content-sticky');
						}
						wp_reset_postdata();
					}

					if ($has_custom_query) {
						// Render posts based on category/popular parameter
						if ($custom_query->have_posts()) {
							while ($custom_query->have_posts()) {
								$custom_query->the_post();
								?>
								<div class="col-lg-4 col-sm-6 mb-30">
									<?php get_template_part('template-parts/content'); ?>
								</div>
								<?php
							}
							get_template_part('template-parts/pagination');
							wp_reset_postdata();
						}
						else {
							?>
							<div class="col-lg-4 col-sm-6 mb-30">
								<?php get_template_part('template-parts/content'); ?>
							</div>
							<?php
						}
					}
					else {
						// Reneder default query
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								?>
								<div class="col-lg-4 col-sm-6 mb-30">
									<?php get_template_part('template-parts/content'); ?>
								</div>
								<?php
							}
							get_template_part('template-parts/pagination');
						}
						else {
							get_template_part('template-parts/content-none');
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
