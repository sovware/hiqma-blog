<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?> 
<div class="dir-mega-menu dir-mega-menu-resource">
	<div class="dir-mega-menu__item">
		<div class="dir-mega-menu__list">

			<a href="<?php echo esc_url( THEME_HELPGENT_ROADMAP ); ?>" rel="nofollow" class="mega-list-single media">
				<span class="mega-list-icon">
					<img src="<?php echo Helper::get_svg('roadmap.svg');?>" alt="">
				</span>
				<div class="mega-list-content media-body">
					<h6>Roadmap</h6>
					<p>See what you can gain</p>
				</div>
			</a>
			<a href="https://wpwax.com/docs/helpgent/" class="mega-list-single media">
				<span class="mega-list-icon">
					<img src="<?php echo Helper::get_svg('doc.svg');?>" alt="">
				</span>
				<div class="mega-list-content media-body">
					<h6>Documentation</h6>
					<p>Everything you need</p>
				</div>
			</a>
			<a href="<?php echo add_query_arg( 'tab', 'support', THEME_DASHBOARD_URL );?>" class="mega-list-single media">
				<span class="mega-list-icon">
					<img src="<?php echo Helper::get_svg('support3.svg');?>" alt="">
				</span>
				<div class="mega-list-content media-body">
					<h6>Support</h6>
					<p>See what you can gain</p>
				</div>
			</a>
			<a href="<?php echo esc_url( THEME_HELPGENT_ABOUT ); ?>" class="mega-list-single media">
				<span class="mega-list-icon">
					<img src="<?php echo Helper::get_svg('about.svg');?>" alt="">
				</span>
				<div class="mega-list-content media-body">
					<h6>About</h6>
					<p>See what you can gain</p>
				</div>
			</a>

		</div>
	</div>
</div><!-- ends: .dir-mega-menu -->