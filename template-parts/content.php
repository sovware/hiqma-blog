<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$id = get_the_id();
$content = Helper::reading_time( get_post_field( 'post_content', $id ) );
$time_text = (1 == $content) ? $content . ' min read' : $content . ' mins read';
?>

	<div <?php post_class( 'blog-each' ); ?>>
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="image-blogs">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'blogs' ); ?>
				</a>
			</div>
		<?php } ?>

		<div class="blogs-contents">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<ul class="blog-excerpt">
				<li class="blog-date"><?php echo Helper::time_link(); ?></li>
				<li class="blog-category"><?php echo get_the_category_list( ', ' ); ?></li>
				<li class="blog-read-time"><?php echo $time_text; ?></li>
			</ul>
		</div>
	</div>
