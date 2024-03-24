<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
get_header();
?>

<div class="blog-content-area">
	<div class="container">
		<?php get_template_part('template-parts/blog-banner'); ?>

		<div class="row">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					?>
					<div class="col-lg-4 col-sm-6 mb-30">
						<?php get_template_part('template-parts/content'); ?>
					</div>
					<?php
				}
				get_template_part('template-parts/pagination');
			}
			else {
				get_template_part('template-parts/content-none');
			}
			?>
		</div>
	</div>
</div>
<?php
get_footer();