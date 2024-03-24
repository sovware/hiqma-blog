<?php

/**
 * This template is used to display the profile editor with [edd_profile_editor]
 */
global $current_user;

if (is_user_logged_in()) :
	$user_id      = get_current_user_id();
	$first_name   = get_user_meta($user_id, 'first_name', true);
	$last_name    = get_user_meta($user_id, 'last_name', true);
	$display_name = $current_user->display_name;
	$address      = edd_get_customer_address($user_id);
	$states       = edd_get_shop_states($address['country']);
	$state 		  = $address['state'];

	if (edd_is_cart_saved()) { ?>
		<?php $restore_url = add_query_arg(array('edd_action' => 'restore_cart', 'edd_cart_token' => edd_get_cart_token()), edd_get_checkout_uri()); ?>
		<div class="edd_success edd-alert edd-alert-success"><strong><?php _e('Saved cart', 'easy-digital-downloads'); ?>:</strong> <?php printf(__('You have a saved cart, <a href="%s">click here</a> to restore it.', 'easy-digital-downloads'), esc_url($restore_url)); ?></div>
	<?php } ?>

	<?php edd_print_errors(); ?>

	<?php do_action('edd_profile_editor_before'); ?>
	
	<div class="dashboard-contents__single">
		<form id="edd_profile_editor_form" class="edd_form" action="<?php echo edd_get_current_page_url(); ?>" method="post">

			<?php do_action('edd_profile_editor_fields_top'); ?>
			<div class="dashboard-contents__profileForm">
				<div class="row">
					<div class="col-lg-8">
						<fieldset id="edd_profile_personal_fieldset profile-form-block">
							<legend id="edd_profile_name_label">Account Details</legend>
							<div class="form-element form-row">
								<div class="form-group col-md-6">
									<label for="edd_first_name"><?php _e('First Name', 'easy-digital-downloads'); ?></label>
									<input name="edd_first_name" id="edd_first_name" class="text edd-input" type="text" value="<?php echo esc_attr($first_name); ?>" placeholder="e.g. John" />
								</div>
								<div class="form-group col-md-6">
									<label for="edd_last_name"><?php _e('Last Name', 'easy-digital-downloads'); ?></label>
									<input name="edd_last_name" id="edd_last_name" class="text edd-input" type="text" value="<?php echo esc_attr($last_name); ?>" placeholder="e.g. Smith" />
								</div>
							</div>
							<div class="form-element form-row">
								<div class="form-group col-md-6">
									<label for="edd_display_name"><?php _e('Display Name', 'easy-digital-downloads'); ?></label>
									<div class="select-wrapper">
										<select name="edd_display_name" id="edd_display_name" class="select edd-select">
											<?php if (!empty($current_user->first_name)) : ?>
												<option <?php selected($display_name, $current_user->first_name); ?> value="<?php echo esc_attr($current_user->first_name); ?>"><?php echo esc_html($current_user->first_name); ?></option>
											<?php endif; ?>
											<option <?php selected($display_name, $current_user->user_nicename); ?> value="<?php echo esc_attr($current_user->user_nicename); ?>"><?php echo esc_html($current_user->user_nicename); ?></option>
											<?php if (!empty($current_user->last_name)) : ?>
												<option <?php selected($display_name, $current_user->last_name); ?> value="<?php echo esc_attr($current_user->last_name); ?>"><?php echo esc_html($current_user->last_name); ?></option>
											<?php endif; ?>
											<?php if (!empty($current_user->first_name) && !empty($current_user->last_name)) : ?>
												<option <?php selected($display_name, $current_user->first_name . ' ' . $current_user->last_name); ?> value="<?php echo esc_attr($current_user->first_name . ' ' . $current_user->last_name); ?>"><?php echo esc_html($current_user->first_name . ' ' . $current_user->last_name); ?></option>
												<option <?php selected($display_name, $current_user->last_name . ' ' . $current_user->first_name); ?> value="<?php echo esc_attr($current_user->last_name . ' ' . $current_user->first_name); ?>"><?php echo esc_html($current_user->last_name . ' ' . $current_user->first_name); ?></option>
											<?php endif; ?>
										</select>
									</div>
									<?php do_action('edd_profile_editor_name'); ?>
								</div>
								<div class="form-group col-md-6">
									<?php do_action('edd_profile_editor_after_name'); ?>
									<label for="edd_email"><?php _e('Primary Email Address', 'easy-digital-downloads'); ?></label>
									<?php $customer = new EDD_Customer($user_id, true); ?>
									<?php if ($customer->id > 0) : ?>

										<?php if (1 === count($customer->emails)) : ?>
											<input name="edd_email" id="edd_email" class="text edd-input required" type="email" value="<?php echo esc_attr($customer->email); ?>" />
										<?php else : ?>
											<?php
											$emails           = array();
											$customer->emails = array_reverse($customer->emails, true);

											foreach ($customer->emails as $email) {
												$emails[$email] = $email;
											}

											$email_select_args = array(
												'options'          => $emails,
												'name'             => 'edd_email',
												'id'               => 'edd_email',
												'selected'         => $customer->email,
												'show_option_none' => false,
												'show_option_all'  => false,
											);

											echo EDD()->html->select($email_select_args);
											?>
										<?php endif; ?>
									<?php else : ?>
										<input name="edd_email" id="edd_email" class="text edd-input required" type="email" value="<?php echo esc_attr($current_user->user_email); ?>" />
									<?php endif; ?>

									<?php do_action('edd_profile_editor_email'); ?>
								</div>
							</div>
							<?php do_action('edd_profile_editor_after_email'); ?>

						</fieldset>

					</div>

					<div class="col-lg-8">
						<fieldset id="edd_profile_password_fieldset profile-form-block">

							<legend id="edd_profile_password_label"><?php _e('Change Password', 'easy-digital-downloads'); ?></legend>
							<div class="form-element form-row">
								<div class="form-group col-md-6">
									<label for="edd_user_pass"><?php _e('New Password', 'easy-digital-downloads'); ?></label>
									<input name="edd_new_user_pass1" id="edd_new_user_pass1" class="password edd-input" type="password" placeholder="Password"/>
								</div>
								<div class="form-group col-md-6">
									<label for="edd_user_pass"><?php _e('Re-enter Password', 'easy-digital-downloads'); ?></label>
									<input name="edd_new_user_pass2" id="edd_new_user_pass2" class="password edd-input" type="password" placeholder="Password"/>
									<?php do_action('edd_profile_editor_password'); ?>
								</div>
							</div>
							<?php do_action('edd_profile_editor_after_password'); ?>

						</fieldset>

						<?php do_action('edd_profile_editor_after_password_fields'); ?>
					</div>

					<div class="col-lg-8">

						<?php do_action('edd_profile_editor_after_personal_fields'); ?>

						<fieldset id="edd_profile_address_fieldset profile-form-block">

							<legend id="edd_profile_billing_address_label"><?php _e('Billing Address', 'easy-digital-downloads'); ?></legend>
							<div class="form-element form-row">
								<div class="form-group col-md-6">
									<label for="edd_address_line1"><?php _e('Address 1', 'easy-digital-downloads'); ?></label>
									<input name="edd_address_line1" id="edd_address_line1" class="text edd-input" type="text" value="<?php echo esc_attr($address['line1']); ?>" placeholder="Address 1"/>
								</div>
								<div class="form-group col-md-6">
									<label for="edd_address_line2"><?php _e('Address 2', 'easy-digital-downloads'); ?></label>
									<input name="edd_address_line2" id="edd_address_line2" class="text edd-input" type="text" value="<?php echo esc_attr($address['line2']); ?>" placeholder="Address 2"/>
								</div>
							</div>
							<div class="form-element form-row">
								<div class="form-group col-md-6">
									<label for="edd_address_city"><?php _e('City', 'easy-digital-downloads'); ?></label>
									<input name="edd_address_city" id="edd_address_city" class="text edd-input" type="text" value="<?php echo esc_attr($address['city']); ?>" placeholder="City"/>
								</div>
								<div class="form-group col-md-6">
									<label for="edd_address_zip"><?php _e('Zip / Postal Code', 'easy-digital-downloads'); ?></label>
									<input name="edd_address_zip" id="edd_address_zip" class="text edd-input" type="text" value="<?php echo esc_attr($address['zip']); ?>" placeholder="Zip"/>
								</div>
							</div>
							<div class="form-element form-row">
								<div class="form-group col-lg-6">
									<label for="edd_address_country"><?php _e('Country', 'easy-digital-downloads'); ?></label>
									<div class="select-wrapper">
										<select name="edd_address_country" id="edd_address_country" class="select edd-select" data-nonce="<?php echo wp_create_nonce('edd-country-field-nonce'); ?>">
											<?php foreach (edd_get_country_list() as $key => $country) : ?>
												<option value="<?php echo $key; ?>" <?php selected($address['country'], $key); ?>><?php echo esc_html($country); ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="form-group col-lg-6">
									<label for="edd_address_state"><?php _e('State / Province', 'easy-digital-downloads'); ?></label>
									<?php if (!empty($states)) : ?>
										<div class="select-wrapper">
											<select name="edd_address_state" id="edd_address_state" class="select edd-select">
												<?php
												foreach ($states as $state_code => $state_name) {
													echo '<option value="' . $state_code . '"' . selected($state_code, $state, false) . '>' . $state_name . '</option>';
												}
												?>
											</select>
										</div>
									<?php else : ?>
										<input name="edd_address_state" id="edd_address_state" class="text edd-input" type="text" value="<?php echo esc_attr($state); ?>" />
									<?php endif; ?>

									<?php do_action('edd_profile_editor_address'); ?>
								</div>
							</div>
							<?php do_action('edd_profile_editor_after_address'); ?>

						</fieldset>
						<fieldset>
							<legend id="edd_profile_billing_address_label"><?php _e('Support Key', 'easy-digital-downloads'); ?></legend>
							<div class="form-element form-row support-pin">
								<div class="form-group col-lg-6">
									<?php echo do_shortcode( '[sovware_support_key]' );?>
								</div>
							</div>
						</fieldset>

						<?php do_action('edd_profile_editor_after_address_fields'); ?>


						<fieldset id="edd_profile_submit_fieldset">
							<div class="form-element form-row">
								<div class="form-group col-12 mb-0">
									<div class="edd_profile_submit_wrap">
										<input type="hidden" name="edd_profile_editor_nonce" value="<?php echo wp_create_nonce('edd-profile-editor-nonce'); ?>" />
										<input type="hidden" name="edd_action" value="edit_user_profile" />
										<input type="hidden" name="edd_redirect" value="<?php echo esc_url(edd_get_current_page_url()); ?>" />
										<input name="edd_profile_editor_submit" id="edd_profile_editor_submit" type="submit" class="btn btn-lg btn-primary btn-raised edd_submit edd-submit" value="<?php _e('Save Changes', 'easy-digital-downloads'); ?>" />
									</div>
								</div>
							</div>
						</fieldset>

						<?php do_action('edd_profile_editor_fields_bottom'); ?>

						<?php if (isset($_GET['updated']) && $_GET['updated'] == true && !edd_get_errors()) { ?>
							<div class="edd_success edd-alert edd-alert-success"><strong><?php _e('Success', 'easy-digital-downloads'); ?>:</strong> <?php _e('Your profile has been edited successfully.', 'easy-digital-downloads'); ?></div>
						<?php } ?>

					</div>
				</div>
			</div>

		</form><!-- #edd_profile_editor_form -->
	</div>

	<?php do_action('edd_profile_editor_after'); ?>

<?php
else :
	do_action('edd_profile_editor_logged_out');
endif;
