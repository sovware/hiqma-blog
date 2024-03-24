<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

$url   = urlencode( get_the_permalink() );
$title = urlencode( get_the_title() );

$sharer = array(
	'facebook' => "http://www.facebook.com/sharer.php?u=$url",
	'twitter'  => "https://twitter.com/intent/tweet?source=$url&text=$title:$url",
	'linkedin' => "http://www.linkedin.com/shareArticle?mini=true&url=$url&title=$title",
	'pinterest'=> "http://pinterest.com/pin/create/button/?url=$url&description=$title",
);
?>

<div class="blog-share">
	<span>Share </span>
	<ul>
		<li>
			<a class="facebook" href="<?php echo $sharer['facebook']; ?>" target="_blank" title="<?php esc_html_e('Facebook', 'directorist'); ?>"><?php echo wpwax_icon( 'uil uil-facebook-f', false); ?><span>Share</span></a>
		</li>
		<li>
			<a class="twitter" href="<?php echo $sharer['twitter']; ?>" target="_blank" title="<?php esc_html_e('Twitter', 'directorist') ?>"><?php echo wpwax_icon( 'uil uil-twitter', false); ?><span>Tweet</span></a>
		</li>

		<li>
			<a class="pinterest" href="<?php echo $sharer['pinterest']; ?>" target="_blank" title="<?php esc_html_e('Pinterest', 'directorist') ?>"><?php echo Helper::the_svg( 'icons/pinterest' ); ?><span>Share</span></a>
		</li>
		<li>
			<a class="linkedin" href="<?php echo $sharer['linkedin']; ?>" target="_blank" title="<?php esc_html_e('LinkedIn', 'directorist') ?>"><?php echo wpwax_icon( 'uil uil-linkedin', false); ?><span>Share</span></a>
		</li>
		<li>
			<a class="link copy-to-clickboard" data-url="<?php the_permalink(); ?>" href="#" title="<?php esc_html_e('Copy to Clickboard', 'directorist') ?>"><?php echo wpwax_icon( 'uil uil-link-h', false); ?><span>Copy</span></a>
		</li>
	</ul>
</div>