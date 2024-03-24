<?php

/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$author_name        = get_the_author_meta( 'display_name', $post->post_author );
$author_name        = $author_name ? $author_name : get_the_author_meta( 'nickname', $post->post_author );
$author_description = get_the_author_meta( 'user_description', $post->post_author );
$avatar             = get_avatar( get_the_author_meta( 'user_email' ) );

if ( !empty( $author_description ) ) { ?>
	<div class="blog-author-box media">
		<div class="auth-img">
			<?php echo $avatar; ?>
		</div>
		<div class="auth-details media-body">
			<span>Written by</span>
			<h2><?php echo $author_name; ?></h2>
			<p><?php echo $author_description; ?></p>
		</div>
	</div>
	<?php
}