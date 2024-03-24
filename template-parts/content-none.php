<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */
?>

<div class="col-md-12 text-center">

	<section class="no-results not-found">

		<h2 class="page-title"><?php esc_html_e('Nothing Found', 'directorist'); ?></h2>

		<?php if (is_home() && current_user_can('publish_posts')) : ?>

			<p>
				<?php echo wp_kses_post('Ready to publish your first post? <a href="' . esc_url(admin_url('post-new.php')) . '">Get started here</a>', 'directorist') ?>
			</p>

		<?php elseif (is_search()) : ?>

			<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'directorist'); ?></p>

			<?php //get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e("It seems we can't find what you're looking for. Perhaps searching can help.", 'directorist'); ?></p>
			<?php //get_search_form(); ?>

		<?php endif; ?>

	</section>

</div>