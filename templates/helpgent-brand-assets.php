<?php
/**
 * Template Name: HelpGent - Brand Assets
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

Scripts::load_helpgent_scripts();
get_header( 'helpgent' );
?>
<section class="helpgent-banner-area">
	<div class="helpgent-banner helpgent-banner--brand pt-180 pb-90">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xxl-6 col-md-8">
				<div class="helpgent-banner__content text-center">
						<h1><span class="text-initial">HelpGent</span><br> Brand Assets and Guidelines</h1>
						<p>Our visual language reflects our values and our community. Simple, yet diverse. Understated and timeliness, yet bold and vibrant. Here are tips for when you’re representing our brand.</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="logo-brand-area mb-100">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-11">
				<div class="logo-brand mb-40">
					<div class="logo-brand__all-assets">
					<h2>HelpGent Logo</h2>
						<a href="https://wpwax.com/wp-content/uploads/helpgent-brand-assets/HelpGent-Brand-Assets.zip" class="btn btn-dark get-free btn-animate animate--dark loading-animate"><?php echo Helper::the_svg( 'download-icon' ); ?>Download All Assets</a>
					</div>
					<p>Our visual language reflects our values and our community. Simple, yet diverse. Understated and timeliness, yet bold and vibrant. Here are tips for when you’re representing our brand.</p>
					<div class="logo-brand__individual">
						<div class="logo-brand__item">
							<h4>Dark Logo</h4>
							<div class="main-logo dark">
								<?php echo Helper::the_svg( 'HelpGent-Logo-dark' ); ?>
							</div>
							<div class="main-logo__individual">
								<a href="../assets/svg/helpgent/helpgent-black-logo.svg" download><?php echo Helper::the_svg( 'download-icon' ); ?>svg</a>
								<a href="../assets/img/helpgent/helpgent-black-logo.png" download><?php echo Helper::the_svg( 'download-icon' ); ?>png</a>
								<a href="https://wpwax.com/wp-content/uploads/helpgent-brand-assets/eps/helpgent-black-logo.eps" download><?php echo Helper::the_svg( 'download-icon' ); ?>eps</a>
							</div>
						</div>
						<div class="logo-brand__item">
							<h4>White Logo</h4>
							<div class="main-logo white">
								<?php echo Helper::the_svg( 'HelpGent-Logo-white' ); ?>
							</div>
							<div class="main-logo__individual">
								<a href="../assets/svg/helpgent/helpgent-black-logo.svg" download><?php echo Helper::the_svg( 'download-icon' ); ?>svg</a>
								<a href="../assets/img/helpgent/helpgent-white-logo.png" download><?php echo Helper::the_svg( 'download-icon' ); ?>png</a>
								<a href="https://wpwax.com/wp-content/uploads/helpgent-brand-assets/eps/helpgent-white-logo.eps" download><?php echo Helper::the_svg( 'download-icon' ); ?>eps</a>
							</div>
						</div>
						<div class="logo-brand__item">
							<h4>HelpGent Icon</h4>
							<div class="main-logo-icon">
								<div class="main-logo-icon__dark">
									<?php echo Helper::the_svg( 'helpgent-logo-dark-icon' ); ?>
								</div>
								<div class="main-logo-icon__white">
									<?php echo Helper::the_svg( 'helpgent-logo-white-icon' ); ?>
								</div>
							</div>
							<div class="main-logo__individual">
								<a href="https://wpwax.com/wp-content/uploads/helpgent-brand-assets/svg/helpgent-black&white-icon.zip"><?php echo Helper::the_svg( 'download-icon' ); ?>svg</a>
								<a href="https://wpwax.com/wp-content/uploads/helpgent-brand-assets/png/helpgent-black&white-icon.zip"><?php echo Helper::the_svg( 'download-icon' ); ?>png</a>
								<a href="https://wpwax.com/wp-content/uploads/helpgent-brand-assets/eps/helpgent-black&white-icon.zip"><?php echo Helper::the_svg( 'download-icon' ); ?>eps</a>
							</div>
						</div>
					</div>
				</div>
				<div class="logo-brand">
					<div class="logo-guideline">
						<h2>HelpGent Logo</h2>
						<p>We’re a pretty laid-back crowd. But, when it comes to our logo, we ask that you please:</p>
						<ul class="logo-guideline-list">
							<li>
							Always use the flags and logotype together, or just the flags. Don’t use the logotype on its own.
							</li>
							<li>
							Give the logo some space—don’t clutter it with other text or graphics.
							</li>
							<li>
							Don’t use colors in the logo that aren’t included in our brand colors (see above).
							</li>
						</ul>
						<p>That’s it! Thanks for following these rules. We appreciate it—and you!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer( 'helpgent' );