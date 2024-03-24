<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$content = Helper::reading_time( get_post_field( 'post_content', $post->ID ) );
$time_text = (1 == $content) ? $content . ' min read' : $content . ' mins read';

$author_name  = get_the_author_meta( 'display_name', $post->post_author );
$author_name  = $author_name ? $author_name : get_the_author_meta( 'nickname', $post->post_author );
$author_posts = get_author_posts_url( get_the_author_meta( 'ID', $post->post_author ) );
$avatar       = get_avatar( get_the_author_meta( 'user_email' ) );
?>

<ul class="blog-details-meta">
    <li class="blog-author">
		<div class="author-name">
			<a href="<?php echo esc_url($author_posts); ?>"><span><?php echo $author_name; ?></span></a>
			<?php echo Helper::time_link(); ?>
		</div>

    </li>
    <li class="blog-category"><?php echo get_the_category_list(' '); ?></li>
    <li class="blog-read-time"><?php echo $time_text; ?></li>
</ul>