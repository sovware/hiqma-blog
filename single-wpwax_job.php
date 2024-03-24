<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header();
while (have_posts()):
	the_post();

	$meta = get_post_meta( get_the_ID(), 'theme_job_info', true );
	$jobdata = array(
		'type'        => !empty($meta['job_type']) ? $meta['job_type'] : '',
		'vacancies'   => !empty($meta['vacancy_no']) ? $meta['vacancy_no'] : '',
		'apply_form'  => !empty($meta['apply_form_shortcode']) ? $meta['apply_form_shortcode'] : '',
	);
	?>
	<div class="content-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="single-career-top">
						<a href="<?php echo THEME_CAREER_URL;?>" class="btn-link"><?php echo Helper::the_svg( 'icons/arrow-left' ); ?>See all positions</a>
						<div class="single-career-header">
							<div class="single-career-title d-flex justify-content-between align-items-start">
								<h2 class="display-3"><?php the_title();?></h2>
								<a href="#job-apply-form" class="btn btn-pink btn-apply btn-raised">Apply Now</a>
							</div>
							<ul class="circular-meta">
								<li><span>Jatrabari, Dhaka</span></li>
								<?php if (!empty($jobdata['type'])): ?>
									<li> <span><?php echo esc_html( $jobdata['type'] ); ?></span> </li>
								<?php endif; ?>

								<?php if (!empty($jobdata['vacancies'])): ?>
									<li> <span> No. of vacancies: <?php echo esc_html( $jobdata['vacancies'] ); ?></span></li>
								<?php endif; ?>
							</ul>
						</div>
					</div><!-- ends: .single-career-top -->
								
					<div class="job-content"><?php the_content(); ?></div>
					<div class="job-bottom-apply"><a class="btn btn-pink btn-apply btn-raised" href="#job-apply-form">Apply Now</a></div>
					<div class="job-apply-form" id="job-apply-form">
						<div class="shape shape-top">
							<img src="<?php echo Helper::get_img( 'circles/green-2.png' );?>">
						</div>
						<div class="shape shape-middle">
							<img src="<?php echo Helper::get_img( 'circles/pink-2.png' );?>">
						</div>
						<div class="shape shape-bottom">
							<img src="<?php echo Helper::get_img( 'circles/green-1.png' );?>">
						</div>
						<h5 class="apply-form-title">Submit Your Application</h5>
						<?php echo do_shortcode($jobdata['apply_form']); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
endwhile;
get_footer();