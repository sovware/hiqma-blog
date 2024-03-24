<?php
/**
 * Template Name: HelpGent - Home
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
	<div class="helpgent-banner pt-180 pb-90">
		<div class="container">
			<div class="text-center helpgent-banner__content">
				<a href="<?php echo esc_url( THEME_HELPGENT_CONVERSATIONAL_FORMS ); ?>" class="helpgent-banner-slug">
					<span class="helpgent-banner-badge">
						new
					</span>
					Conversational/multi-step forms
					<?php echo Helper::the_svg('helpgent/arrow-right');?>
				</a>
				<h1 class="display-1">A better way to <br>
				<img
						src="<?php echo Helper::get_img('helpgent/big-text.png');?>" alt="connect"><span
						class="opacity">with
						your<br></span>audiences</h1>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="helpgent-toolkit-area">
	<div class="helpgent-toolkit pb-90 mb-mobileMd-x-15">
		<div class="container">
			<div class="row">
				<div class="mb-4 col-lg-6 mb-md-0">
					<div class="helpgent-toolkit__video-wrapper">
						<div class="helpgent-toolkit__video-container" id="video-container">
							<video class="feature-banner" height="400" autoplay="" loop="" muted=""
								src="<?php echo Helper::get_img( 'helpgent/screen-per.mp4"' );?>"
								playsinline=""></video>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="helpgent-toolkit__content">
						<p>
							Get the power to communicate with your audiences, customers, clients, or desired ones
							asynchronously with the most personalized communication system using <strong>video
								messaging, voice messaging, text messaging, screen recording</strong> with voiceover,
							and exclusive <strong>conversational forms</strong> feature.
						</p>
						<div class="button-group">
							<a href="https://wpwax.com/helpgent/pricing/"
								class="btn btn-dark get-start btn-animate animate--dark">Get
								Started</a>
							<!-- <a href="https://wordpress.org/plugins/helpgent/" class="btn get-free-now">Try For
								Free</a> -->
						</div>
						<div class="toolkit-features-list toolkit-features-list__customW">
							<ul>
								<li>
									<img src="<?php echo Helper::get_img('helpgent/video-message.png');?>"
										alt="Video Message">Video Message
								</li>
								<li>
									<img src="<?php echo Helper::get_img('helpgent/voice-message.png');?>"
										alt="Voice Message">Voice Message
								</li>
								<li>
									<img src="<?php echo Helper::get_img('helpgent/text-message.png');?>"
										alt="Text Messages">Text Messages
								</li>
								<li>
									<img src="<?php echo Helper::get_img('helpgent/screen-record.png');?>"
										alt="Screen Record">Screen Record
								</li>
								<li>
									<img src="<?php echo Helper::get_img('helpgent/conversation-icon.png');?>"
										alt="Conversational/Multi-step Forms">Conversational/Multi-step Forms
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mb-5 helpgent-audience-area mb-md-0">
	<div class="pt-40 pb-10 helpgent-audience mb-mobileMd-x-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="helpgent-audience-list gradient-primary h-100">
						<h4>Increase audience engagement</h4>
						<ul>
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-primary.png');?>"
									alt="checkmark">Be engaging to customer inquiries & response them humanly
							</li>
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-primary.png');?>"
									alt="checkmark">Let your audience understand your responses & engage conveniently
							</li>
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-primary.png');?>"
									alt="checkmark">Respond clearly, concisely, and friendly through asynchronous video
								communication
							</li>
						</ul>
						<img src="<?php echo Helper::get_img('helpgent/audience-engagement.png');?>" alt="checkmark">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="helpgent-audience-list gradient-warning h-100">
						<h4>Increase Satisfaction & Retention</h4>
						<ul class="mb-20">
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
									alt="checkmark">Get rid of the hassle of having to be in the same place at the same
								time
							</li>
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
									alt="checkmark">Provide a more personal touch to your customer in seconds with video
								messaging
							</li>
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
									alt="checkmark">Give your customer a way through screen recording to show the issues
								they may face
							</li>
						</ul>
						<img src="<?php echo Helper::get_img('helpgent/audience-satisfaction.png');?>" alt="checkmark">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="helpgent-audience-list gradient-success h-100">
						<h4>Increase Potential sales</h4>
						<ul>
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
									alt="checkmark">Convert prospects into customers and keep sales lights on.
							</li>
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
									alt="checkmark">Make your website profitable by engaging with asynchronous video
								messaging
							</li>
							<li>
								<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
									alt="checkmark">Create back-and-forth communication that's interactive and engaging
								in order to strengthen your sales.

							</li>
						</ul>
						<img src="<?php echo Helper::get_img('helpgent/businessman-with-investment-profit.png');?>"
							alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="helpgent-banner-area">
	<div class="helpgent-banner mb-mobileMd-x-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center bg-white helpgent-banner__2 pt-110 pb-65">
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
								<div class="helpgent-banner__content">
									<h2 class="display-2">Your all in one communication toolkit</h2>
								</div>
							</div>
						</div>
						<div class="helpgent-toolkit__content">
							<div class="toolkit-features-list">
								<ul class="nav scroll-md-active" id="myTab" role="tablist">
									<li>
										<a class="active" id="video-tab" data-toggle="tab" href="#video" role="tab"
											aria-controls="video" aria-selected="true">
											<img src="<?php echo Helper::get_img('helpgent/video-message.png');?>"
												alt="">Video
											Message
										</a>
									</li>
									<li>
										<a id="voice-tab" data-toggle="tab" href="#voice" role="tab"
											aria-controls="voice" aria-selected="false">
											<img src="<?php echo Helper::get_img('helpgent/voice-message.png');?>"
												alt="">Voice
											Message
										</a>
									</li>
									<li>
										<a id="text-tab" data-toggle="tab" href="#text" role="tab" aria-controls="text"
											aria-selected="false">
											<img src="<?php echo Helper::get_img('/helpgent/text-message.png');?>"
												alt="">Text
											Messages
										</a>
									</li>
									<li>
										<a id="screen-tab" data-toggle="tab" href="#screen" role="tab"
											aria-controls="screen" aria-selected="false">
											<img src="<?php echo Helper::get_img('helpgent/screen-record.png');?>"
												alt="">Screen
											Record
										</a>
									</li>
									<li>
										<a id="conversation-tab" data-toggle="tab" href="#conversation" role="tab"
											aria-controls="conversation" aria-selected="false">
											<img src="<?php echo Helper::get_img('helpgent/conversation-icon.png');?>"
												alt="">Conversational Forms
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="video" role="tabpanel"
								aria-labelledby="video-tab">
								<p>HelpGent allows you to have asynchronous video messaging to communicate with anyone,
									anytime, without needing to be available at the same time.</p>
							</div>
							<div class="tab-pane fade" id="voice" role="tabpanel" aria-labelledby="voice-tab">
								<p>With asynchronous voice messaging with HelpGent, you can leave a voice message for
									someone and they can respond at their convenience in the same way.</p>
							</div>
							<div class="tab-pane fade" id="screen" role="tabpanel" aria-labelledby="screen-tab">
								<p>With the HelpGent screen recording & sharing feature, you can present any question
									you want to get the answer in a form of asynchronous messaging.</p>
							</div>
							<div class="tab-pane fade" id="text" role="tabpanel" aria-labelledby="text-tab">
								<p>Communicate through engaging text messages by HelpGent that will get your audience
									talking asynchronously with an ease.</p>
							</div>
							<div class="tab-pane fade" id="conversation" role="tabpanel" aria-labelledby="text-tab">
								<p>Transform conversations with interactive conversational & multi-step forms using
									HelpGent</p>
							</div>
						</div>
						<div class="helpgent-toolkit__video-wrapper">
							<div class="helpgent-toolkit__video-container max-h560">
								<video class="h-none" autoplay="" loop="" muted=""
									src="<?php echo Helper::get_img( 'helpgent/promo.mp4' );?>" playsinline=""></video>
								<div class="play-button-wrapper play-button-wrapper__2">
									<a title="Play video" class="play-video play-video__2"
										href="https://www.youtube.com/watch?v=G83LEzSKoHM">
										<!-- SVG Play Button -->
										<img src="<?php echo Helper::get_svg('play-dark.svg');?>" alt="">
									</a>
								</div>
							</div>
						</div>
						<a href="https://wpwax.com/helpgent/pricing/"
							class="btn btn-dark get-free btn-animate animate--dark">Get
							Started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="helpgent-blog-area mb-100 mb-mobileMd-x-15">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="m-0 helpgent-blog">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-11">
							<div class="text-center helpgent-blog__title">
								<h2 class="display-2 sb-40">
									Reimagine user interactions with your audience</h2>
								<p class="mt-40 mx-70 mb-45">
									We're on a mission to transform communication, making it more engaging, efficient,
									and user-friendly.  You can create interactive, dynamic, and engaging forms that
									take your user interactions to the next level.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-sm-40">
							<div class="helpgent-blog__article2 big-contents-wrapper h-100">
								<div class="big-contents">
									<div class="row align-items-center">
										<div class="col-md-6">
											<div class="content mr-58">
												<h6>Screen per question with <br> frontend User dashboard</h6>
												<p>
													Break down your forms into easy-to-follow screens, each with a video
													explanation. No more confusion or uncertainty – your users will know
													exactly what to do. Give your users a centralized hub for further
													communication. From checking their responses to engaging with your
													team, it's all at their fingertips.
												</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="video-area">
											<video class="video-one" autoplay="" loop="" muted=""
									src="<?php echo Helper::get_img( 'helpgent/screen-per.mp4' );?>" playsinline=""></video>
											</div>
										</div>
									</div>


								</div>
							</div>
						</div>
						<div class="col-md-6 mb-sm-40">
							<div class="helpgent-blog__article4">
								<h6>Conditional logic & admin collaboration</h6>
								<p class="mb-40">
										Tailor the user experience based on their input. Conditional logic ensures that
										each
										user's journey is personalized and relevant. Let multiple admins join the
										conversation. Your team can provide support and insights, ensuring users get the
										assistance they need.
									</p>
									<video class="video-two" autoplay="" loop="" muted=""
									src="<?php echo Helper::get_img( 'helpgent/logic-preview.mp4' );?>" playsinline=""></video>
							</div>
						</div>
						<div class="col-md-6 mb-sm-40">
							<div class="helpgent-blog__article4">
								<h6>Save incomplete form responses</h6>
								<p class="mb-40">
										Dive into the power of HelpGent's "Save Incomplete Data" feature, providing you with a comprehensive view of user insights, even from forms left unsubmitted or abandoned. It's a tool designed to capture every user's input, contributing to a deeper understanding of audience needs and preferences.
									</p>
									<video class="video-three" autoplay="" loop="" muted="" src="<?php echo Helper::get_img( 'helpgent/response.mp4' );?>" playsinline=""></video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="helpgent-blog-area mb-100 mb-lg-40 mt-67 mb-mobileMd-x-15">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="helpgent-blog">
					<div class="row justify-content-center">
						<div class="col-xl-8">
							<div class="text-center helpgent-blog__title">
								<h2 class="display-2">
									Why use <span class="text-initial">HelpGent</span>
								</h2>
								<p class="mx-10 mb-53">
									Experience the future of communication with HelpGent. Engage, interact, and gather
									valuable insights like never before. Join the conversation now and take your
									customer engagement to the next level.
								</p>
							</div>
						</div>
						<div class="col-lg-6 mb-50">
							<div class="helpgent-blog__article">
								<div class="img-area">
									<video class="video-one" autoplay="" loop="" muted=""
									src="<?php echo Helper::get_img( 'helpgent/communication.mp4' );?>" playsinline=""></video>
								</div>
								<h2>Conversational forms for better communication</h2>
								<p>
									HelpGent conversational forms are the key to unlocking better communication. They
									engage, they personalize, and they transform the way you connect with your audience.
								</p>
							</div>
						</div>
						<div class="col-lg-6 mb-50">
							<div class="helpgent-blog__article">
								<div class="img-area">
									<video class="video-two" autoplay="" loop="" muted=""
									src="<?php echo Helper::get_img( 'helpgent/message.mp4' );?>" playsinline=""></video>
								</div>
								<h2>Get personalized customer support with video message & screen recording</h2>
								<p>
									Our personalized support system will make sure your needs are always met. With
									asynchronous video messaging & screen recording, you'll be able to see and hear your
									customer. Along with voice & textual messages, a video record of your screen lets
									the agent see the issues in more detail.
								</p>
							</div>
						</div>
						<div class="col-lg-6 mb-50">
							<div class="helpgent-blog__article">
								<div class="img-area">
								<video class="video-three" autoplay="" loop="" muted=""
									src="<?php echo Helper::get_img( 'helpgent/vocalize.mp4' );?>" playsinline=""></video>
								</div>
								<h2>Vocalize your message</h2>
								<p>
									Voice messaging by HelpGent adds a personal touch to your communication. Engage your
									audience with the warmth and authenticity of your spoken words, making connections
									that leave a lasting impact.
								</p>
							</div>
						</div>
						<div class="mb-20 col-lg-6">
							<div class="helpgent-blog__article">
								<div class="img-area">
								<video class="video-four" autoplay="" loop="" muted=""
									src="<?php echo Helper::get_img( 'helpgent/flexible.mp4' );?>" playsinline=""></video>
								</div>
								<h2>Text Message for flexible communication</h2>
								<p>
									HelpGent asynchronous text messaging offers the flexibility to communicate on your
									terms. Send and receive messages at your convenience, allowing for more productive
									and stress-free conversations.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="streamlining-area pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="streamlining">
					<div class="items-center row">
						<div class="col-xl-7 col-12 mb-xl-0 mb-30">
							<div class="streamlining__content">
								<h2>
									Streamlining your workflow with <br> leading integrations
								</h2>
								<p>
								HelpGent is designed to streamline your workflow, providing you with a seamless and efficient experience with noteworthy integrations like Google Drive, Directorist, Bunny Cloud Storage, with many more in the pipeline!
								</p>
							</div>
						</div>
						<div class="col-xl-5 col-12">
							<img src="<?php echo Helper::get_svg('helpgent/integration-img.svg');?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="helpgent-pricing-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center helpgent-pricing">
					<div class="row justify-content-center">
						<div class="col-xl-8">
							<div class="helpgent-pricing__title">
								<h2 class="display-2">
									What makes <span class="text-initial">HelpGent</span> special from all traditional
									methods
								</h2>
							</div>
						</div>
					</div>
					<div class="helpgent-pricing-content">
						<div class="row justify-content-center">
							<div class="col-lg-12">
								<div class="helpgent-pricing__buttons">
									<ul class="nav scroll-md-active" role="tablist">
										<li>
											<a class="active" id="live-tab" data-toggle="tab" href="#live" role="tab"
												aria-controls="live" aria-selected="true">
												Live Chat
												<span>vs</span>
												HelpGent
											</a>
										</li>
										<li>
											<a id="contact-tab" data-toggle="tab" href="#contact" role="tab"
												aria-controls="contact" aria-selected="false">
												Traditional Contact
												<span>vs</span>
												HelpGent
											</a>
										</li>
										<li>
											<a id="widget-tab" data-toggle="tab" href="#widget" role="tab"
												aria-controls="widget" aria-selected="false">
												Floating Chat Widgets
												<span>vs</span>
												HelpGent
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-12">
								<div class="tab-content">
									<div class="tab-pane fade show active" id="live" role="tabpanel"
										aria-labelledby="live-tab">
										<div class="row">
											<div class="col-lg-6 mb-30">
												<div class="helpgent-pricing__list gradient-warning">
													<h5>Live Chat</h5>
													<ul>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															<div>
																Live Chat happens real-time
															</div>
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Requires synchronous feedback from the
															recipients
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															<div>Live Chat supports instant messaging
															</div>
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Conversation history cannot be found for
															further use
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Can’t recover the interrupted conversation
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-6 mb-sm-30">
												<div class="helpgent-pricing__list gradient-success">
													<h5>HelpGent</h5>
													<ul>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															<div>Using HelpGent,conversation happens
																over
																time</div>
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															Allows Asynchronous feedback from the
															recipient
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															<div>
																HelpGent doesn’t need to send messages
																instantly as you get the flexibility
															</div>
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															Conversation history is preserved for further
															use
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															You can recover the interrupted conversation
															anytime
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="contact" role="tabpanel"
										aria-labelledby="contact-tab">
										<div class="row">
											<div class="col-lg-6 mb-30">
												<div class="helpgent-pricing__list gradient-warning h-100">
													<h5>Traditional Contact</h5>
													<ul>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															After a person closes the site with your contact form, all
															answers disappear. They won’t be able to reread them
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Much spam anticipated
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Doesn’t allow any video and audio messaging
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Doesn’t allow any screen recording & sharing
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Not that much personalized
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-6 mb-30">
												<div class="helpgent-pricing__list gradient-success h-100">
													<h5>HelpGent</h5>
													<ul>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															You can recover all conversation happened using HelpGent
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															Not spammy at all
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															HelpGent allows video and audio messaging with ease
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															Allow screen recording & sharing
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															Much personalized
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="widget" role="tabpanel" aria-labelledby="widget-tab">
										<div class="row">
											<div class="col-lg-6 mb-30">
												<div class="helpgent-pricing__list gradient-warning h-100">
													<h5>Floating Chat Widgets</h5>
													<ul>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Constant presence of chat widgets can be disruptive to the
															user
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Often block key page content
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															One needs to connect with customers in real time for
															delivering
															customer support
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															Do good but cost more
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-warning.png');?>"
																alt="">
															No screen sharing option
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-6 mb-30">
												<div class="helpgent-pricing__list gradient-success h-100">
													<h5>HelpGent</h5>
													<ul>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															Doesn’t create any annoyance for users
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															No chance to block any page
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															It doesn’t require you to connect with your clients in real
															time
															for offering customer support

														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															Does big while costs less
														</li>
														<li>
															<img src="<?php echo Helper::get_img('helpgent/checkmark-success.png');?>"
																alt="">
															Screen sharing is a big YES
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="mt-10 button-group mb-30">
								<a href="https://wpwax.com/helpgent/pricing/" class="helpgent-default btn-animate animate--dark">
													get started	
													</a>
								</div>
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
				<div class="announcement announcement--3 gradient-1">
					<div class="text-center row justify-content-center">
						<div class="mb-4 col-xl-9 col-12 mb-sm-0">
							<div class="announcement__content">
								<h3><span class="text-initial">HelpGent</span> in
									numbers</h3>
								<p>The numbers & reality are 100% factual. Statistics shows the real numbers & numbers
									always speak the truth. HelpGent can help you understand these numbers as indicated
									by the statistics.</p>
							</div>
						</div>
						<div class="mx-4 row mx-sm-0">
							<div class="col-xl-3 col-md-6 mb-30">
								<div class="announcement__box">
									<div class="announcement__boxColumn-6">
										<h3 class="display-3">68%</h3>
										<p>68% of consumers prefer watching videos to learn about new products
											or
											services,
											as compared to other forms.</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 mb-30">
								<div class="announcement__box">
									<div class="announcement__boxColumn-6">
										<h3 class="display-3">50%</h3>
										<p>Nearly 50% of people watch more than five videos a day. It’s clear,
											video
											communication is ubiquitous.</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 mb-30">
								<div class="announcement__box">
									<div class="announcement__boxColumn-6">
										<h3 class="display-3">95%</h3>
										<p>Viewers retain 95% of a message when they watch it in a video
											compared to
											10%
											when reading it in text.</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 mb-30">
								<div class="announcement__box">
									<div class="announcement__boxColumn-6">
										<h3 class="display-3">300%</h3>
										<p>A multi-step form beats a traditional web form, with an increase in
											terms
											of
											conversions that can even reach an astonishing 300%.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feature-on-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="feature-on-area__title">Featured On</h2>
				<ul class="feature-on-area__box">
					<li>
						<img src="<?php echo Helper::get_img('helpgent/wpmet.png');?>"
																alt="">
					</li>
					<li>
						<img src="<?php echo Helper::get_img('helpgent/ultimate-block.png');?>"
																alt="">
					</li>
					<li>
						<img src="<?php echo Helper::get_img('helpgent/wp-leaders.png');?>"
																alt="">
					</li>
					<li>
						<img src="<?php echo Helper::get_img('helpgent/NewsBreak.png');?>"
																alt="">
					</li>
					<li>
						<img src="<?php echo Helper::get_img('helpgent/wpxpo.png');?>"
																alt="">
					</li>
					<li>
						<img src="<?php echo Helper::get_img('helpgent/Time-business-news.png');?>"
																alt="">
					</li>
					<li>
						<img src="<?php echo Helper::get_img('helpgent/WP-Table-Builder.png');?>"
																alt="">
					</li>
					<li>
						<img src="<?php echo Helper::get_img('helpgent/WPFame.png');?>"
																alt="">
					</li>
					<li>
						<img src="<?php echo Helper::get_img('helpgent/theme-winter.png');?>"
																alt="">
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="helpgent-carousel-area">
	<div class="container">
		<div class="justify-content-center row">
			<div class="col-xl-7 col-md-9">
				<div class="helpgent-carousel-wrapper">
					<div class="text-center helpgent-carousel">
						<div class="helpgent-carousel__quote">
							<img src="<?php echo Helper::get_img('helpgent/quote.png');?>"
																	alt="">
						</div>
						<div class="helpgent-carousel__title">
							A Potential Yet Game-Changing Communication Tool in WordPress!
						</div>
						<p class="helpgent-carousel__des">
						I’ve picked the plugin lately and I must say I’m thoroughly impressed with its features and capabilities. The ability to communicate via video, voice, and text messaging, along with the added functionality of screen recording, is a game-changer for customer support and online communication.
						</p>
						<div class="helpgent-carousel__separate"></div>
						<h6 class="helpgent-carousel__author-title">Preachquest</h6>
						<span class="helpgent-carousel__author-position">WordPress.org Forums</span>
					</div>
					<div class="text-center helpgent-carousel">
						<div class="helpgent-carousel__quote">
							<img src="<?php echo Helper::get_img('helpgent/quote.png');?>"
																	alt="">
						</div>
						<div class="helpgent-carousel__title">
							A Potential Yet Game-Changing Communication Tool in WordPress!
						</div>
						<p class="helpgent-carousel__des">
						I’ve picked the plugin lately and I must say I’m thoroughly impressed with its features and capabilities. The ability to communicate via video, voice, and text messaging, along with the added functionality of screen recording, is a game-changer for customer support and online communication.
						</p>
						<div class="helpgent-carousel__separate"></div>
						<h6 class="helpgent-carousel__author-title">Preachquest</h6>
						<span class="helpgent-carousel__author-position">WordPress.org Forums</span>
					</div>
					<div class="text-center helpgent-carousel">
						<div class="helpgent-carousel__quote">
							<img src="<?php echo Helper::get_img('helpgent/quote.png');?>"
																	alt="">
						</div>
						<div class="helpgent-carousel__title">
							A Potential Yet Game-Changing Communication Tool in WordPress!
						</div>
						<p class="helpgent-carousel__des">
						I’ve picked the plugin lately and I must say I’m thoroughly impressed with its features and capabilities. The ability to communicate via video, voice, and text messaging, along with the added functionality of screen recording, is a game-changer for customer support and online communication.
						</p>
						<div class="helpgent-carousel__separate"></div>
						<h6 class="helpgent-carousel__author-title">Preachquest</h6>
						<span class="helpgent-carousel__author-position">WordPress.org Forums</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mb-20 mb-40 helpgent-cta mt-100">
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