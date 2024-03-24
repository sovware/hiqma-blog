<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

class Shortcodes {

	protected static $instance = null;

	public function __construct() {
		add_shortcode( 'wpwax_subscribe_to_newsletter_helpgent', [$this, 'wpwax_subscribe_to_newsletter_helpgent'] );
		add_shortcode( 'wpwax_subscribe_to_newsletter_helpgent_zoom', [$this, 'wpwax_subscribe_to_newsletter_helpgent_zoom'] );
		add_shortcode( 'wpwax_subscribe_to_newsletter_directorist', [$this, 'wpwax_subscribe_to_newsletter_directorist'] );
		add_shortcode( 'wpwax_subscribe_to_newsletter_legal_pages', [$this, 'wpwax_subscribe_to_newsletter_legal_pages'] );
		add_shortcode( 'wpwax_cta_directorist', [$this, 'wpwax_cta_directorist'] );
		add_shortcode( 'wpwax_cta_directorist_2', [$this, 'wpwax_cta_directorist_2'] );
		add_shortcode( 'wpwax_cta_directorist_free', [$this, 'wpwax_cta_directorist_free'] );
		add_shortcode( 'wpwax_cta_directorist_demo', [$this, 'wpwax_cta_directorist_demo'] );
		add_shortcode( 'wpwax_cta_helpgent', [$this, 'wpwax_cta_helpgent'] );
		add_shortcode( 'wpwax_cta_helpgent_2', [$this, 'wpwax_cta_helpgent_2'] );
		add_shortcode( 'wpwax_cta_legal_pages', [$this, 'wpwax_cta_legal_pages'] );
	}

	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	public function prepare_atts( $atts ) {
		return shortcode_atts( [
			'title'       => 'Get ready to get started?',
			'description' => 'Subscribe to our newsletter to receive timely updates and exclusive promotional offers..',
		], $atts );
	}

	public function wpwax_subscribe_to_newsletter_helpgent( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/subscribe-to-newsletter-helpgent', $atts );
	}

	public function wpwax_subscribe_to_newsletter_helpgent_zoom( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/subscribe-to-newsletter-helpgent-zoom', $atts );
	}

	public function wpwax_subscribe_to_newsletter_directorist( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/subscribe-to-newsletter-directorist', $atts );
	}

	public function wpwax_subscribe_to_newsletter_legal_pages( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/subscribe-to-newsletter-legal-pages', $atts );
	}

	public function wpwax_cta_directorist( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/wpwax-cta-directorist', $atts );
	}

	public function wpwax_cta_directorist_2( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/wpwax-cta-directorist-2', $atts );
	}

	public function wpwax_cta_directorist_free( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/wpwax-cta-directorist-free', $atts );
	}

	public function wpwax_cta_directorist_demo( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/wpwax-cta-directorist-demo', $atts );
	}

	public function wpwax_cta_helpgent( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/wpwax-cta-helpgent', $atts );
	}

	public function wpwax_cta_helpgent_2( $atts ) {
		wp_enqueue_style( 'jarallax' );
		wp_enqueue_script( 'jarallax' );

		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/wpwax-cta-helpgent-2', $atts );
	}

	public function wpwax_cta_legal_pages( $atts ) {
		$atts = $this->prepare_atts( $atts );

		return Helper::get_template_content( '/template-parts/lead-collection/wpwax-cta-legal-pages', $atts );
	}
}

Shortcodes::instance();