<?php
/**
 * Template Name: Plugins Page
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$helpgent_id = Helper::get_helpgent_download_id();
$args = [
	'post_type'    => 'download',
	'posts_per_page'    => -1,
	'post__not_in'    => [3348,3341,$helpgent_id],
	'meta_query' => array(
		array(
			'key'     => 'theme_product_type',
			'value'   => 'plugin',
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
			<div class="col-lg-6">
				<div class="wpwax-product-banner__content text-center">
					<h1 class="display-3">WordPress Plugins</h1>
					<p>Get advanced, professional & cost-effective WordPress <br> plugins to power up your business using WordPress.</p>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .atbd-theme-intro -->

<section class="popular-plugin-area  mt-xl-0 mt-50">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="product-card product-card--2 mb-40">
					<div class="product-card__img">
						<a href="https://wpwax.com/helpgent/">
							<img src="<?php echo Helper::get_img('blog-bg1.png');?>" alt="HelpGent">
						</a>
					</div>
					<div class="badge-wrap mt-20">
							<span class="badge badge-sm badge-success badge-rounded">Featured Plugin</span>
							<span class="badge badge-sm badge-danger badge-rounded">NEW</span>
						</div>
					<div class="product-card__top">
						<h2 class="product-title">
							<a href="https://wpwax.com/helpgent/" target="_self">HelpGent</a>
						</h2>
						<p>Engage in a better way with your audience on a more personal level</p>
					</div>
					<div class="product-actions">
						<a href="https://wpwax.com/helpgent/" target="_self" class="btn btn-primary btn-transparent">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-card product-card--2 mb-40">
					<div class="product-card__img">
						<a href="https://directorist.com/">
							<img src="<?php echo Helper::get_img('blog-bg2.png');?>" alt="HelpGent">
						</a>
					</div>
					<div class="badge-wrap mt-20">
							<span class="badge badge-sm badge-success badge-rounded">Featured Plugin</span>
							<span class="badge badge-cs badge-rounded color-dark"><span class="badge badge-xs badge-danger badge-rounded">10,000+</span>Happy customers</span>
						</div>
					<div class="product-card__top">
						<h2 class="product-title">
							<a href="https://directorist.com/" target="_self">Directorist</a>
						</h2>
						<p>Create unlimited business directory listing websites</p>
					</div>
					<div class="product-actions">
						<a href="https://directorist.com/" target="_self" class="btn btn-primary btn-transparent">View Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- ends: .popular-plugin-area -->

<section class="plugin-list-area pb-120">
	<div class="container">
		<div class="row">
			<?php
			while ($query->have_posts()) {
				$query->the_post();
				?>
				<div class="col-lg-4">
					<?php get_template_part('template-parts/card-plugin'); ?>
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