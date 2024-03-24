<?php

/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
use \WP_Query;

$popular = !empty($_GET['popular']) ? true : false;
$cat = !empty($_GET['cat']) ? (int) $_GET['cat'] : false;
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

$count = 0;

if ($popular) {
	$args = array(
		'post_type'    => 'post',
		'meta_key'     => 'post_views_count',
		'orderby'      => 'meta_value_num',
		'order'        => 'DESC',
		'ignore_sticky_posts' => 1,
		'paged'        => $paged,
	);
}
elseif ($cat) {
	$args = array(
		'post_type'  => 'post',
		'ignore_sticky_posts' => 1,
		'cat'        => $id,
		'paged'      => $paged,
	);
}
else {
	$args = false;
}

if ( $args ) {
	$query = new WP_Query($args);
}

?>
<div class="row mt-40">
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			$count++;
			if ($count == 1) {
				get_template_part('template-parts/content-sticky');
			}
			else {
				?>
				<div class="col-lg-4 col-sm-6 mb-30">
					<?php get_template_part('template-parts/content'); ?>
				</div>
				<?php
			}
		}
	}
	else {
		get_template_part('template-parts/content-none');
	}
	?>
</div>