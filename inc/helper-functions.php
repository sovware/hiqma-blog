<?php

use Sovware\Theme\Helper;

function wpwax_icon( $icon, $echo = true, $class = '' ) {
	if ( ! $icon ) {
		return;
	}

	$icon_src = Helper::get_icon_src( $icon );

	if ( ! $icon_src ) {
		return;
	}

	$class = $class ? 'wpWax-icon-mask ' . $class : 'wpWax-icon-mask';

	$html = sprintf(
		'<i class="%1$s" aria-hidden="true" style="--wpWax-icon: url(%2$s)"></i>',
		esc_attr( $class ),
		esc_url( $icon_src )
	);

	if ( $echo ) {
		echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- already escaped
	} else {
		return $html;
	}
}