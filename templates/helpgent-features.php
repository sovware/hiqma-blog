<?php
/**
 * Template Name: HelpGent - Features
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

Scripts::load_helpgent_scripts();
get_header( 'helpgent' );
?>

<section class="helpgent-banner-area pt-155 pb-150">
	<div class="helpgent-banner2 helpgent-banner2--3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h6 class="color-warning">
					Powerful Features
					</h6>
					<h1>
					Something for 
everyone, more 
than meets the eye
					</h1>
					<p>
						Customers no longer have to wait on hold for a live agent, as they now have the freedom to
						start, pause, and resume the conversation when it’s convenient for them.
					</p>
					<a href="https://wordpress.org/plugins/helpgent/" class="btn btn-dark get-free btn-animate animate--dark">Get Started</a>
				</div>
				<div class="col-lg-6">
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

<section class="announcement-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="announcement announcement--4">
					<div class="row">
						<div class="col-xl-5 col-12">
							<div class="announcement__content">
								<h3>Video messaging</h3>
								<p>Sending video message is a breeze with HelpGent. It's amazing to have a face to face conversation without getting face to face.</p>
							</div>
						</div>
						<div class="col-xl-6 offset-xl-1 col-12">
							<img class="w-100" src="<?php echo Helper::get_svg('helpgent/feature1.svg');?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mt-40 mb-40 announcement-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="announcement announcement--4">
					<div class="row">
						<div class="col-xl-6 col-12">
							<div class="screen-recording">
								<img class="w-100" src="<?php echo Helper::get_svg('helpgent/feature2.svg');?>" alt="">
							</div>
						</div>
						<div class="col-xl-5 offset-xl-1 col-12">
							<div class="announcement__content">
								<h3>Screen recording</h3>
								<p>Give your customers an appealing way to share their problems with screen recordings, or you could simply share a video of your screen after recording with them, and you will gain a solid relationship with them and potential new clients.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="announcement-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="announcement announcement--4">
					<div class="row">
						<div class="col-xl-5 col-12">
							<div class="announcement__content">
								<h3>Voice messaging</h3>
								<p>HelpGent  lets you send and receive voice messages without having to be available at the same time.</p>
							</div>
						</div>
						<div class="col-xl-6 offset-xl-1 col-12">
							<div class="voice-recording">
								<img class="w-100" src="<?php echo Helper::get_svg('helpgent/feature3.svg');?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mt-40 mb-40 announcement-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="announcement announcement--4">
					<div class="row">
						<div class="col-xl-6 col-12">
							<img class="w-100" src="<?php echo Helper::get_svg('helpgent/feature4.svg');?>" alt="">

						</div>
						<div class="col-xl-5 offset-xl-1 col-12">
							<div class="announcement__content">
								<h3>Text Messaging</h3>
								<p>
								Text Messaging with HelpGent lets you have control over your conversations. You can select when to reply, without the pressure of feeling like you need to respond immediately.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="lead-form-area">
	<div class="container">
		<div class="row">
			<div class="mb-40 col-lg-6">
				<div class="lead-form lead-form--warning ">
					<div class="lead-form__content">
						<h4>Lead generation</h4>
						<p>
						HelpGent allows you to collect information from visitors who become leads once they submit messages to interact with you.
						</p>
					</div>
					<img class="justify-content-end" src="<?php echo Helper::get_img('helpgent/feature5.png');?>" alt="">
				</div>
			</div>
			<div class="mb-40 col-lg-6">
				<div class="lead-form h-100 lead-form--info">
					<div class="lead-form__content">
						<h4>Filter stored messages</h4>
						<p>Filter out all the conversations based on numerous tags. You can also search the specific conversation by video, voice, name and email.
						</p>
					</div>
					<img class="justify-content-end" src="<?php echo Helper::get_svg('helpgent/feature6.svg');?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="announcement-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="announcement announcement--4">
					<div class="row">
						<div class="col-xl-5 col-12">
							<div class="announcement__content">
								<h3>Form customization</h3>
								<p>Customize your conversation form as your wish. You’ll get two different beautiful themes to furnish your conversation form.</p>
							</div>
						</div>
						<div class="col-xl-6 offset-xl-1 col-12">
							<img class="w-100" src="<?php echo Helper::get_svg('helpgent/feature7.svg');?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mt-40 mb-40 announcement-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="announcement announcement--4">
					<div class="row">
						<div class="col-xl-6 col-12">
							<img class="w-100" src="<?php echo Helper::get_svg('helpgent/feature8.svg');?>" alt="">

						</div>
						<div class="col-xl-5 offset-xl-1 col-12">
							<div class="announcement__content">
								<h3>Personalized
									welcome message</h3>
								<p>Send a personalized message to welcome your onboarding prospects. You can set up a thank you page for your audience as well!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="announcement-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="announcement announcement--4">
					<div class="row">
						<div class="col-xl-5 col-12">
							<div class="announcement__content">
								<h3>Back-end Admin Portal</h3>
								<p>Get a powerful back-end portal to control all the conversations happened over time. With a back-end portal, you get the control and insight you need to take your customer relations to the next level.</p>
							</div>
						</div>
						<div class="col-xl-6 offset-xl-1 col-12">
							<img class="w-100" src="<?php echo Helper::get_svg('helpgent/feature9.svg');?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mt-40 mb-40 announcement-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="announcement announcement--4">
					<div class="row">
						<div class="col-xl-6 col-12">
							<img class="w-100" src="<?php echo Helper::get_svg('helpgent/feature10.svg');?>" alt="">

						</div>
						<div class="col-xl-5 offset-xl-1 col-12">
							<div class="announcement__content">
								<h3>Front-end Audience Portal</h3>
								<p>With HelpGent, you can have a friendly front-end portal to give your audience to connect with you. This portal helps to give your visitors the ability to easily access information or share feedback with you and your business.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mb-20 helpgent-cta helpgent-cta--2">
	<div class="container">
		<div class="row">
		<div class="col-12">
				<div class="helpgent-cta__box gradient-bg-primary">
					<div class="row align-items-center">
						<div class="col-md-5">
							<img src="<?php echo Helper::get_svg('cta-section.svg');?>" alt="">
						</div>
						<div class="col-lg-7">
							<div class="helpgent-cta__content">
							<div class="display-2">try <span class="text-initial">HelpGent</span> today with ease!</div>
								<div class="btn-list">
									<a href="https://wpwax.com/helpgent/pricing/" class="btn btn-white btn-animate animate--light">Give HelpGent a Try</a>
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