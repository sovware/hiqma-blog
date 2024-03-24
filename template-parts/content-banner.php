<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

if ( is_404() ) {
	$title = esc_html__( 'Page not Found', 'directorist' );
}
elseif ( is_home() ) {
	if ( get_option( 'page_for_posts' ) ) {
		$title = get_the_title( get_option( 'page_for_posts' ) );
	}
	else {
		$title = esc_html__( 'All Posts', 'directorist' );
	}
}
else{
	$title = get_the_title();
}

?>

<div class="banner">
	<div class="container">
		<div class="banner-content">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
</div>