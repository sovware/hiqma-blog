<?php
/**
 * Template Name: HelpGent - RoadMap
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

Scripts::load_helpgent_scripts();
get_header( 'helpgent' );
?>

<section class="helpgent-banner-area hrb">
	<div class="helpgent-roadmap-banner">
		<div class="container">
			<div class="text-center row align-items-center">
				<div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
					<button type="button" class="btn btn-idea" data-toggle="modal" data-target="#roadmapmodal">
						<?php echo Helper::the_svg( 'union2' ); ?>
						Submit your idea
					</button>
					<h1>
						<span class="text-initial">HelpGent Roadmap</span>
					</h1>
					<p>
						We are happy to share the roadmap of our journey with you.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="roadmap-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="helpgent-toolkit__content">
					<div class="toolkit-features-list">
						<ul class="nav scroll-md-active" role="tablist">
							<li>
								<a class="active" id="plan-tab" data-toggle="tab" href="#plan" role="tab"
									aria-controls="plan" aria-selected="true">
									In Progress
								</a>
							</li>
							<li>
								<a id="consideration-tab" data-toggle="tab" href="#consideration" role="tab"
									aria-controls="consideration" aria-selected="false">
									Backlog
								</a>
							</li>
							<li>
								<a id="launched-tab" data-toggle="tab" href="#launched" role="tab"
									aria-controls="launched" aria-selected="false">
									Launched
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="plan" role="tabpanel" aria-labelledby="plan-tab">
						<hr class="text-center hr-text" data-content="Q4-2023" />
						<div class="row">
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">In Progress</div>
									<h5>4th Layout Option- No media layout</h5>
									<p>Introducing the "No Media" layout for HelpGent – a streamlined and efficient option for users looking to create forms swiftly. With this layout, users can easily add elements without the need for individual media attachments on each screen. The simplicity of the "No Media" layout is complemented by a single background image that seamlessly reflects across all screens.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">In Progress</div>
									<h5>Terms & Condition and GDPR, Statement elements</h5>
									<p>With the TAC element, you can seamlessly incorporate terms and conditions into your forms, ensuring clarity and compliance. The GDPR Consent element empowers you to seek explicit consent from users, promoting transparency in data processing. Additionally, the Statement element offers a straightforward way to display essential statements, accompanied by a continue button for a smooth transition between form sections.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">In Progress</div>
									<h5>Quiz</h5>
									<p>With HelpGent, you can effortlessly create engaging quizzes within your forms. Craft questions, set options, and even define correct answers to evaluate user knowledge or preferences</p>
								</div>
							</div>
						</div>
						<hr class="text-center hr-text" data-content="Q1-2023" />
						<div class="row">
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Offload media to Google Drive</h5>
									<p>Media will be stored in Google Drive which will reduce server requests and load
										media faster to speed up your site</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Reply, Forward, and Edit messages</h5>
									<ul>
										<li>
											Reply: Reply to a specific message
										</li>
										<li>
											Forward: Forward a message to other users
										</li>
										<li>
											Edit: Typo? No worries, just edit the message
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Directorist Integration</h5>
									<p>Directorist Integration will let listing owners create contact forms with video,
										audio, & text functionality to connect with their clients. </p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Delete Messages</h5>
									<p>Delete a specific message completely</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="consideration" role="tabpanel" aria-labelledby="consideration-tab">
						<div class="row">

							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Payment System</h5>
									<p>Payment Forms in HelpGent! Easily collect payments for your services or products with our upcoming feature. Streamline transactions directly within your forms for added convenience.</p>
								</div>
							</div>


							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Unsplash Integration</h5>
									<p>Unleashing Unsplash Integration in HelpGent! Say goodbye to the hassle of media uploads. With our upcoming integration, you can effortlessly enhance your forms by directly accessing the vast libraries of Unsplash.</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Custom fields in text</h5>
									<p>Get more information from your users with additional fields like</p>
									<ul>
										<li>
											File Upload field
										</li>
										<li>
											Checkbox
										</li>
										<li>
											Radio
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Unsend or trash messages</h5>
									<ul>
										<li>
											When you unsend a message, it is no longer visible to anyone in the chat
										</li>
										<li>
											Trashing a message will store it in a Trash so you could recover them
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Multiple support agents</h5>
									<p>Add agents to manage the customers under the admin’s supervision</p>
									<ul>
										<li>
											Assign conversations to agents
										</li>
										<li>
											Agents can respond to assigned tickets or unassigned
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Real-time Notifications</h5>
									<ul>
										<li>
											When a user is online
										</li>
										<li>
											When a support agent is online
										</li>
										<li>
											Upon receiving a new message
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Under Consideration</div>
									<h5>Private Messages</h5>
									<p>One-to-one private conversation with your user</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Under Consideration</div>
									<h5>CRM Integration</h5>
									<p>Integration with the most requested CRM tool. Share with us your favorite tool
									</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Under Consideration</div>
									<h5>Facebook Messenger Integration </h5>
									<p>Research in progress. More info will be provided later</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Support Agent's role management</h5>
									<p>Add/Edit capabilities of the agents</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Under Consideration</div>
									<h5>Video Transcribe</h5>
									<p>Automatically transcribe videos to text</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Media optimization</h5>
									<p>Compress media efficiently for better optimization</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge">Planned</div>
									<h5>Youtube video embed</h5>
									<p>Embed a Youtube Video into the chatbox</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="launched" role="tabpanel" aria-labelledby="launched-tab">
						<div class="row">

							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Offload Media To Bunny Storage</h5>
									<p>Media will be stored in Bunny Storage which is one of the fasted and cheapest. It will significantly reduce server requests and load media faster to speed up your site</p>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Advanced Logic</h5>
									<p>Elevate your form-building experience with HelpGent's advanced logic feature. Now, you can add conditional rules to individual elements – redirect users to specific screens based on their choices, implement AND/OR logic for dynamic branching.</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Save incomplete data</h5>
									<p>Harness the power of every user interaction with HelpGent’s "Save Incomplete Data" feature. This functionality ensures that not a single piece of valuable user input goes unnoticed or lost. Even if a user doesn’t complete the entire form, their responses won't be in vain. Form owners can access and save the information entered up to that point, allowing for a richer and more comprehensive understanding of their audience’s needs and preferences.</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Multiple steps</h5>
									<p>Create multiple screens with conditional videos and make the form more
										interactive</p>
									<ul>
										<li>
											Has multiple use cases - get feedback, create job applications, service
											quotations, etc
										</li>
										<li>
											Create multiple steps with questions before getting input from the user
										</li>
										<li>
											Add videos to each step to engage users better
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Completed</div>
									<h5>Response Summary</h5>
									<p>Comprehensive report showcasing user preferences and responses. Easily track individual option choices, identify the top selections, and delve into detailed response data for informed decision-making.</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Delete Messages</h5>
									<p>Delete a specific message completely</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Offload media to Google Drive</h5>
									<p>Media will be stored in Google Drive which will reduce server requests and load
										media faster to speed up your site</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Reply, Forward, and Edit messages</h5>
									<ul>
										<li>
											Reply: Reply to a specific message
										</li>
										<li>
											Forward: Forward a message to other users
										</li>
										<li>
											Edit: Typo? No worries, just edit the message
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Directorist Integration</h5>
									<p>Directorist Integration will let listing owners create contact forms with video,
										audio, & text functionality to connect with their clients. </p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>All Contacts</h5>
									<p>Display a list of all your guests and registered users who contacted through
										HelpGent</p>
									<ul>
										<li>
											Collect leads
										</li>
										<li>
											Export to CSV and run campaigns in marketing tools
										</li>
										<li>
											Convert guests into potential users
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Screen Recording</h5>
									<p>With the screen recording option, you and your customers can send screen
										recordings from the chat window</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Customer Portal</h5>
									<p>Users can keep track of their conversations, manage and communicate using the
										front-end customer portal</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Guest User</h5>
									<p> Initially, anyone can send messages, including anonymous individuals who have
										not registered. After sending a message, a token is sent to the guest user's
										email to keep a track of the conversation and to follow up without having to
										register</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Unlimited Forms</h5>
									<p>Create unlimited forms with different intro videos, messages, and color
										combinations</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Display Forms on Selected Pages</h5>
									<p>Now that you have created a number of forms, you can now display them on selected
										pages</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Video Upload</h5>
									<p>Both users and the admin can upload videos from the dashboard or within the
										chatbox itself</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Video Recording</h5>
									<p>Record videos from the chat interface. You no longer have to leave the chat
										window to record a video</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Voice Recording</h5>
									<p>Enjoy the voice recording facility absolutely free of cost. Unlike other
										messaging systems, you have the option to preview the recording before sending
										it</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-30">
								<div class="roadmap-card h-100">
									<div class="roadmap-card__badge roadmap-card__badge--success">Launched</div>
									<h5>Tags on Conversation</h5>
									<p>Add tags to manage the conversations. It helps you to find certain conversations
										in a quick and hassle-free way</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal modal--roadmap fade" id="roadmapmodal" tabindex="-1" aria-labelledby="roadmapmodalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="p-0 modal-body">
				<?php echo Helper::get_helpgent_roadmap_contact(); ?>
			</div>
		</div>
	</div>
</div>


<?php
get_footer( 'helpgent' );