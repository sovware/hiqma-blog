<?php
/**
 * This template is used to display the registration form with [edd_register]
 */

use Sovware\Theme\Helper;

global $edd_register_redirect;

?>

<?php if (!is_user_logged_in()) : ?>
	<div class="form-box position-relative">
		<div class="shape shape-left"><?php echo Helper::the_svg('shapes/shape-circle'); ?></div>
		<form id="edd_register_form" class="edd_form" action="" method="post">
			<div class="form-register">
				
				<?php if (class_exists('NextendSocialLogin')): ?>
					<div class="social-login">
						<?php echo do_shortcode('[nextend_social_login]'); ?>
						<div class="form-devider-line">
							<span class="line-text">Or</span>
						</div>
					</div>	
				<?php endif; ?>

				<?php do_action('edd_print_errors'); ?>

				<?php do_action('edd_register_form_fields_top'); ?>
				
				<fieldset>

					<?php do_action('edd_register_form_fields_before'); ?>
					<div class="form-element">
						<div class="form-group">
							<label for="edd-user-login"><?php _e('Username', 'easy-digital-downloads'); ?></label>
							<input id="edd-user-login" class="required edd-input" type="text" name="edd_user_login" placeholder="Lowercase/Number  e.g. john81" />
						</div>
					</div>
					<div class="form-element">
						<div class="form-group">
							<label for="edd-user-email"><?php _e('Email', 'easy-digital-downloads'); ?></label>
							<input id="edd-user-email" class="required edd-input" type="email" name="edd_user_email" placeholder="name@company.com" />
						</div>
					</div>
					<div class="form-element">
						<div class="form-group">
							<label for="edd-user-pass"><?php _e('Password', 'easy-digital-downloads'); ?></label>
							<input id="edd-user-pass" class="password required edd-input" type="password" name="edd_user_pass" placeholder="Password" />
						</div>
					</div>
					<div class="form-element">
						<div class="form-group">
							<label for="edd-user-pass2"><?php _e('Confirm Password', 'easy-digital-downloads'); ?></label>
							<input id="edd-user-pass2" class="password required edd-input" type="password" name="edd_user_pass2" placeholder="Confirm Password" />
						</div>
					</div>
					<?php do_action('edd_register_form_fields_before_submit'); ?>
					<div class="form-element">
						<div class="form-group">
							<input type="hidden" name="edd_honeypot" value="" />
							<input type="hidden" name="edd_action" value="user_register" />
							<input type="hidden" name="edd_redirect" value="<?php echo esc_url($edd_register_redirect); ?>" />
							<input class="btn btn-primary btn-raised btn-md edd-submit" name="edd_register_submit" type="submit" value="<?php esc_attr_e('Sign Up', 'easy-digital-downloads'); ?>" />
						</div>
					</div>
					
					<?php do_action('edd_register_form_fields_after'); ?>
				</fieldset>
			</div>
			
			<div class="form-bottom">
				<p>Already have an account? <a href="<?php echo esc_url( THEME_LOGIN_URL );?>">Log In</a></p>
			</div>
			<?php do_action('edd_register_form_fields_bottom'); ?>
		</form>
	</div>

<?php else : ?>

	<?php do_action('edd_register_form_logged_in'); ?>

<?php endif; ?>