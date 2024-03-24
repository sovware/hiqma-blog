<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$categories = array();

foreach ( get_the_category( get_the_ID() ) as $category ) {
	$categories[] = $category->term_id;
}

$id = get_the_ID();

$args = array(
	'posts_per_page'      => 2,
	'ignore_sticky_posts' => 1,
	'post__not_in' => array($id),
	'tax_query'           => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'term_id',
			'terms'    => $categories,
			'operator' => 'IN',
		),
	),
);

$related_posts = new \WP_Query( $args );

if ( $related_posts->have_posts() ) {
	?>
	<div class="related-articles">
		<h2>Related Articles</h2>
		<div class="row ">
			<?php
			while ( $related_posts->have_posts() ) {
				$related_posts->the_post();
				?>
				<div class="col-md-6">
					<?php get_template_part( 'template-parts/content' ); ?>
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
	<?php
}