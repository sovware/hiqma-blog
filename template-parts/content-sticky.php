<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$id = get_the_id();
$content = get_post_field( 'post_content', $id );
$reading_time = Helper::reading_time( $content );
$time_text = (1 == $reading_time) ? $reading_time . ' min read' : $reading_time . ' mins read';
?>
<div class="col-12 mb-50">
	<div <?php post_class( 'sticky-blog blog-each' ); ?>>

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="image-sticky-blogs">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'sticky-blogs' ); ?>
				</a>
			</div>
		<?php } ?>

		<div class="sticky-blogs-contents">

			<span class="featured-badge">Top Article</span>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<?php echo wp_trim_words(Helper::filter_content($content), 23); ?>

			<ul class="blog-excerpt">
				<li class="blog-date"><?php echo Helper::time_link(); ?></li>
				<li class="blog-category"><?php echo get_the_category_list( ' ' ); ?></li>
				<li class="blog-read-time"><?php echo $time_text; ?></li>
			</ul>

		</div>

	</div>
</div>