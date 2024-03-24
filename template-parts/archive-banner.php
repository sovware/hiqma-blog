<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>

<div class="row">
	<div class="col-md-8">
		<h4><?php echo Helper::get_the_archive_title(); ?></h4>
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