<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
<div class="blog-banner-area">
	<div class="blog-banner-area__shape1"><img src="<?php echo Helper::get_svg('shapes/shape-rounded.svg'); ?>" alt="blog left design shape" height="293" width="585"></div>
	<div class="blog-banner-area__shape2"><?php echo Helper::the_svg("shapes/shape-circle-cut"); ?></div>
	<div class="container">
		<div class="text-center row justify-content-center">
			<div class="col-lg-6">
				<h1 class="display-2">HiqmaTrip Blog</h1>
				<p class="m-0">Let us help you plan your next journey — the one that will leave a lifetime of memories.</p>
			</div>
		</div>
		<div class="row pt-90 align-items-center">
			<div class="col-md-8">
				<div class="blog-navigation"><?php wp_nav_menu( Helper::get_nav_menu_args( 'blog' ) ); ?></div>
			</div>
			<div class="col-md-4">
				<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div class="blog-header__search">
						<input type="search" placeholder="Search blog..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
						<button type="submit" class="blog-header__search--btn"><?php echo wpwax_icon( 'uil uil-search', false); ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>