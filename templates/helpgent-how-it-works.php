<?php
/**
 * Template Name: HelpGent - How it works
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

Scripts::load_helpgent_scripts();
get_header( 'helpgent' );
?>

<section class="helpgent-banner-area pt-186 mb-130">
	<div class="helpgent-banner2 helpgent-banner2--4">
		<div class="container">
			<div class="text-center row justify-content-center">
				<div class="col-lg-10">
					<h6 class="color-info">
						How HelpGent works
					</h6>
					<h1>Get Face-to-Face & Build deeper Relationships with Your Prospect!
					</h1>
					<a href="https://wordpress.org/plugins/helpgent/" class="btn btn-dark get-free btn-animate animate--dark">Get Started |
						It's Free</a>
				</div>
				<div class="col-lg-8">
				<div class="helpgent-toolkit__video-wrapper">
						<div class="helpgent-toolkit__video-container" id="video-container">
							<video class="h-none" autoplay="" loop="" muted="" src="<?php echo Helper::get_img( 'helpgent/promo.mp4' );?>"  playsinline=""></video>

							<div class="play-button-wrapper">
								<a title="Play video" class="play-video"
									href="https://www.youtube.com/watch?v=G83LEzSKoHM">
									<!-- SVG Play Button -->
									<img src="<?php echo Helper::get_svg('play-dark.svg');?>" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="app-details-area">
	<div class="container">
		<div class="row">
			<div class="mb-40 col-12">
				<div class="app-details">
					<div class="row">
						<div class="col-xl-5 offset-xl-1 col-md-6 col-12">
							<div class="app-details__content">
								<div class="title-sub-name">01</div>
								<h3>Select an answer type</h3>
								<p>Get started by choosing the specific answer type from the chat window/contact form.</p>
								<div class="toolkit-features-list">
									<ul>
										<li>
											<img src="<?php echo Helper::get_svg('video-icon.svg');?>" alt="">Video
											Message
										</li>
										<li>
											<img src="<?php echo Helper::get_svg('screen-record-icon.svg');?>"
												alt="">Screen
											Message
										</li>
										<li>
											<img src="<?php echo Helper::get_svg('voice-record-icon.svg');?>"
												alt="">Voice
											Record
										</li>
										<li>
											<img src="<?php echo Helper::get_svg('text.svg');?>" alt="">Text
											Messages
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-6 col-12">
							<img class="w-100 single-img" src="<?php echo Helper::get_svg( 'helpgent/widget1.svg' );?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="mb-40 col-12">
				<div class="app-details">
					<div class="row">
						<div class="col-xl-4 offset-xl-1 col-md-6 col-12">
							<img class="w-100 single-img" src="<?php echo Helper::get_svg( 'helpgent/take-action.svg' );?>"
								alt="">
						</div>
						<div class="col-xl-5 offset-xl-1 col-md-6 col-12">
							<div class="app-details__content">
								<div class="title-sub-name">02</div>
								<h3>Take your action</h3>
								<p>Once you choose a conversation method, now, just hit the play button to take your action. Opt for a video or voice message; you also can have multiple options like text response, a screen share to have a healthy conversation.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-40 col-12">
				<div class="app-details">
					<div class="row">
						<div class="col-xl-4 offset-xl-1 col-md-6 col-12">
							<div class="app-details__content">
								<div class="title-sub-name">03</div>
								<h3>Send your message</h3>
								<p>Again, once you’re taking potential action, simply click on the send button to pass your message to the right person.</p>
							</div>
						</div>
						<div class="col-xl-6 offset-xl-1 col-md-6 col-12">
							<img class="w-100 single-img dropShadow" src="<?php echo Helper::get_svg( 'helpgent/widget2.svg' );?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="mb-40 col-12">
				<div class="app-details">
					<div class="row">
						<div class="col-xl-6 col-md-6 col-12">
							<img class="w-100 single-img" src="<?php echo Helper::get_svg( 'helpgent/take-action2.svg' );?>"
								alt="">
						</div>
						<div class="col-xl-4 offset-xl-1 col-md-6 col-12">
							<div class="app-details__content">
								<div class="title-sub-name">04</div>
								<h3>Tract your conversation</h3>
								<p>You have now the choice to follow or terminate the current conversation through your control panel. Regardless of what you do, the conversation will be saved as long as you have continued it or it has been disrupted by some other means.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="mb-40 col-12">
				<div class="app-details">
					<div class="row">
						<div class="col-xl-5 offset-xl-1 col-md-6 col-12">
							<div class="app-details__content">
								<div class="title-sub-name">05</div>
								<h3>Convert your
									prospects into leads</h3>
								<p>Once you have established a fruitful interaction with a client, turning them as your customer is just a matter of time.</p>
							</div>
						</div>
						<div class="col-xl-4 offset-xl-1 col-md-6 col-12">
							<img class="w-100 single-img" src="<?php echo Helper::get_img( 'widget1.png' );?>" alt="">
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>


<section class="mb-20 mb-40 helpgent-cta mt-70">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="helpgent-cta__box gradient-bg-primary">
					<div class="row align-items-md-center">
						<div class="col-12">
							<div class="helpgent-cta__content text-center">
								<div class="display-2">Get HelpGent & make your <br> communication fun </div>
								<div class="mt-lg-5 mt-30 btn-list">
									<a href="https://wpwax.com/helpgent/pricing/"
										class="btn btn-white btn-animate animate--light">Try HelpGent Today</a>
								</div>
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