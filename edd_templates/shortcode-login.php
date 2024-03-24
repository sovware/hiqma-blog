<?php
/**
 * This template is used to display the login form with [edd_login]
 */

use Sovware\Theme\Helper;

global $edd_login_redirect;
if (!is_user_logged_in()) :
?>
	<div class="form-box position-relative">
		<div class="shape shape-left"><?php echo Helper::the_svg('shapes/shape-circle'); ?></div>
		<form id="edd_login_form" class="edd_form" action="" method="post">
			<div class="form-login">
				<?php 
				// Show any error messages after form submission
				edd_print_errors(); 
				?>
				<fieldset>
					<?php do_action('edd_login_fields_before'); ?>
					<div class="form-element">
						<div class="form-group">
							<label for="edd_user_login"><?php _e('Username or Email', 'easy-digital-downloads'); ?></label>
							<input name="edd_user_login" id="edd_user_login" class="edd-required edd-input" type="text" />
						</div>
					</div>
					<div class="form-element">
						<div class="form-group">
							<label for="edd_user_pass"><?php _e('Password', 'easy-digital-downloads'); ?></label>
							<input name="edd_user_pass" id="edd_user_pass" class="edd-password edd-required edd-input" type="password" />
						</div>
					</div>
					<div class="form-element">
						<div class="form-group d-flex justify-content-between remember-group">
							<label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e('Remember Me', 'easy-digital-downloads'); ?></label>
							<a class='lost-passLink' href="<?php echo wp_lostpassword_url(); ?>"><?php _e('Forgot Password?', 'easy-digital-downloads'); ?></a>
						</div>
					</div>
					
					<div class="form-element">
						<div class="form-group mb-0">
							<div class="edd-login-submit">
								<input type="hidden" name="edd_redirect" value="<?php echo esc_url($edd_login_redirect); ?>" />
								<input type="hidden" name="edd_login_nonce" value="<?php echo wp_create_nonce('edd-login-nonce'); ?>" />
								<input type="hidden" name="edd_action" value="user_login" />
								<input id="edd_login_submit" type="submit" class="btn btn-primary btn-raised btn-md" value="<?php _e('Log In', 'easy-digital-downloads'); ?>" />
							</div>
						</div>
					</div>
					
					<?php if (class_exists('NextendSocialLogin')): ?>
						<div class="form-devider-line">
							<span class="line-text">Or</span>
						</div>

						<?php echo do_shortcode('[nextend_social_login]'); ?>						
					<?php endif; ?>

					<?php do_action('edd_login_fields_after'); ?>

				</fieldset>
			</div>
			<div class="form-bottom bg-gray-normal">
				<p>Don't have an account? <a href="<?php echo esc_url( THEME_REGISTER_URL );?>">Sign Up</a></p>
			</div>
		</form>
	</div>
<?php else : ?>

	<?php do_action('edd_login_form_logged_in'); ?>

<?php endif; ?>