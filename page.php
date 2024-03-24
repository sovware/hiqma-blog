<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$layout = get_post_meta( get_the_ID(), 'theme_layout', true );
$has_banner = isset( $layout['banner'] ) ? $layout['banner'] : true;
$has_sidebar = isset( $layout['sidebar'] ) ? $layout['sidebar'] : false;
$class = $has_sidebar ? 'col-md-8 col-sm-12 col-12' : 'col-12';

get_header();

if ( $has_banner ) {
	get_template_part( 'template-parts/content', 'banner' );
}
?>

<div class="content-area">
	<div class="container">
		<div class="row">
			<div class="<?php echo $class; ?>">
				<div class="main-content">

					<?php

					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content', 'page' );
					} ?>

				</div>
			</div>

			<?php

			if ( $has_sidebar ) {
				get_sidebar();
			} ?>

		</div>
	</div>
</div>

<?php
get_footer();