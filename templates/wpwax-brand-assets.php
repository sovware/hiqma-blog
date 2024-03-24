<?php
/**
 * Template Name: WpWax - Brand Assets
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

Scripts::load_helpgent_scripts();
get_header( 'helpgent' );
?>
<section class="wpwax-banner-area">
	<div class="wpwax-banner wpwax-banner--brand pt-180 pb-90">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 col-md-9">
					<div class="wpwax-banner__content text-center">
						<h1><span class="text-initial">WpWax<br>Brand Assets and Guidelines</span></h1>
						<p>Our visual language reflects our values and our community. Simple, yet diverse. Understated
							and timeliness, yet bold and vibrant. Here are tips for when you’re representing our brand.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="logo-brand-area mb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-11">
				<div class="logo-brand mb-40">
					<div class="logo-brand__all-assets">
						<h2><span class="text-initial">WpWax</span> Logo</h2>
						<a href="https://wpwax.com/wp-content/uploads/wpwax-brand-assets/WpWax-Brand-Assets.zip"
							class="btn btn-primary get-free btn-animate animate--dark loading-animate"
							download><?php echo Helper::the_svg( 'download-icon' ); ?>Download All Assets</a>
					</div>
					<p>Our visual language reflects our values and our community. Simple, yet diverse. Understated and
						timeliness, yet bold and vibrant. Here are tips for when you’re representing our brand.</p>
					<div class="logo-brand__individual">
						<div class="logo-brand__item">
							<h4>Full Logo</h4>
							<div class="main-logo dark">
								<div class="dark">
									<?php echo Helper::the_svg( 'WpWax-Logo-dark' ); ?>
								</div>
								<div class="white">
									<?php echo Helper::the_svg( 'WpWax-Logo-white' ); ?>
								</div>
							</div>
							<div class="main-logo__individual">
								<a href="https://wpwax.com/wp-content/uploads/wpwax-brand-assets/svg/WpWax-Logo.zip"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>svg</a>
								<a href="https://wpwax.com/wp-content/uploads/wpwax-brand-assets/png/WpWax-logo.zip"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>png</a>
								<a href="https://wpwax.com/wp-content/uploads/wpwax-brand-assets/eps/WpWax-Icon.zip"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>eps</a>
							</div>
						</div>
						<div class="logo-brand__item">
							<h4>Monochrome Logo</h4>
							<div class="main-logo white">
								<div class="custom-image">
									<?php echo Helper::the_svg( 'Monochrome-logo' ); ?>
								</div>
								<div class="primary">
									<?php echo Helper::the_svg( 'Monochrome-logo' ); ?>
								</div>
							</div>
							<div class="main-logo__individual">
								<a href="../assets/svg/WpWax-Monochrome-Logo.svg"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>svg</a>
								<a href="../assets/img/WpWax-Monochrome-Logo.png"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>png</a>
								<a href="https://wpwax.com/wp-content/uploads/wpwax-brand-assets/eps/WpWax-Logo.eps"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>eps</a>
							</div>
						</div>
						<div class="logo-brand__item">
							<h4>WpWax Icon</h4>
							<div class="main-logo white">
								<div class="dark">
									<?php echo Helper::the_svg( 'WpWax-color-icon' ); ?>
								</div>
								<div class="primary">
									<?php echo Helper::the_svg( 'WpWax-white-icon' ); ?>
								</div>
							</div>
							<div class="main-logo__individual">
								<a href="https://wpwax.com/wp-content/uploads/wpwax-brand-assets/svg/WpWax-Icon.zip"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>svg</a>
								<a href="https://wpwax.com/wp-content/uploads/wpwax-brand-assets/png/WpWax-Icon.zip"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>png</a>
								<a href="https://wpwax.com/wp-content/uploads/wpwax-brand-assets/eps/WpWax-Icon.zip"
									download><?php echo Helper::the_svg( 'download-icon' ); ?>eps</a>
							</div>
						</div>
					</div>
				</div>
				<div class="logo-brand-color">
					<div class="row justify-content-center">
						<div class="col-xl-7 col-md-9 text-center">
							<div class="logo-brand-color__all-assets">
								<h1><span class="text-initial">WpWax Brand Colors</span></h1>
							</div>
							<p>Our visual language reflects our values and our community. Simple, yet diverse.
								Understated and timeliness, yet bold and vibrant. Here are tips for when you’re
								representing our brand.</p>
						</div>
					</div>
					<div class="logo-brand-color__individual">
						<div class="logo-brand__item">
							<div class="color-content primary"></div>
							<div class="content">
								<h5>Primary</h5>
								<div class="d-flex">
									<span>#834EFF</span>
								</div>
							</div>
						</div>
						<div class="logo-brand__item">
							<div class="color-content  logo-brand-gradient1"></div>
							<div class="content">
								<h5>Gradient</h5>
								<div class="d-flex">
									<span>#834EFF</span>
									<span>#D07EFF</span>
								</div>
							</div>
						</div>
						<div class="logo-brand__item">
							<div class="color-content  logo-brand-gradient2"></div>
							<div class="content">
								<h5>Gradient</h5>
								<div class="d-flex">
									<span>#FC5469</span>
									<span>#FCAF17</span>
								</div>
							</div>
						</div>
						<div class="logo-brand__item ">
							<div class="color-content  dark"></div>
							<div class="content">
								<h5>Black</h5>
								<div class="d-flex">
									<span>#35355E</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="logo-brand-area logo-brand-area--guidelines">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-11">
				<div class="logo-brand logo-brand--guidelines">
					<div class="row justify-content-center">
						<div class="col-xl-9 offset-xl-2">
							<div class="logo-guideline">
								<h2>WpWax Logo Usage Guidelines</h2>
								<p>We’re a pretty laid-back crowd. But, when it comes to our logo, we ask that you
									please:</p>
								<ul class="logo-guideline-list">
									<li>
										Always use the flags and logotype together, or just the flags. Don’t use the
										logotype on its
										own.
									</li>
									<li>
										Give the logo some space—don’t clutter it with other text or graphics.
									</li>
									<li>
										Don’t use colors in the logo that aren’t included in our brand colors (see
										above). </li>
								</ul>
								<p>That’s it! Thanks for following these rules. We appreciate it—and you!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer( 'helpgent' );