<?php
/**
 * Template Name: Themes Page
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$args = [
	'post_type'    => 'download',
	'posts_per_page'    => -1,
	'meta_query' => array(
		array(
			'key'     => 'theme_product_type',
			'value'   => 'theme',
			'compare' => 'IN',
		),
	),
];

$query = new \WP_Query($args);

get_header();
?>

<section class="wpwax-product-banner position-relative pb-70 pt-190">
	<div class="shape banner-shape"><?php echo Helper::the_svg( 'shapes/Intersection' ); ?></div>
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-8">
				<div class="wpwax-product-banner__content text-center">
					<h1 class="display-3">WordPress Themes</h1>
					<p>Pick the most customizable and niche-oriented responsive WordPress <br> themes to manage your WordPress websites effortlessly.</p>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .atbd-theme-intro -->

<section class="plugin-list-area pb-120">
	<div class="container">
		<div class="row">
			<?php
			while ($query->have_posts()) {
				$query->the_post();
				?>
				<div class="col-lg-4">
					<?php get_template_part('template-parts/card-theme'); ?>
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</section><!-- ends: .plugin-list-area -->

<?php
get_footer();