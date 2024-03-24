<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

use \CSF;

if (!class_exists('CSF')) {
	return;
}

$prefix = THEME_OPTIONS;

$theme = wp_get_theme();

// Theme Options
CSF::createOptions($prefix, array(
	'framework_title'   => $theme->get('Name'),
	'menu_title'        => esc_html__('Theme Options', 'directorist'),
	'menu_slug'         => $prefix . '-options',
	'menu_type'         => 'submenu',
	'menu_parent'       => 'themes.php',
	'theme'             => 'dark',
	'menu_capability'   => 'publish_pages',
));

CSF::createSection(
	$prefix,
	array(
		'title'   => esc_html__('General', 'directorist'),
		'icon'    => 'fas fa-globe-asia',
		'fields'  => array(
			array(
				'id'       => 'preloader',
				'type'     => 'switcher',
				'title'    => esc_html__('Preloader', 'directorist'),
				'default'  => false,
			),
			array(
				'id'       => 'discount_banner',
				'type'     => 'switcher',
				'title'    => esc_html__('Discount Banner', 'directorist'),
				'default'  => false,
			),
			array(
				'id'       => 'discount_time',
				'type'     => 'text',
				'title'    => esc_html__('Discount Time Until', 'directorist'),
				'subtitle' => 'eg. 2021-09-30 11:00:00',
			),
			array(
				'id'       => 'job_opening',
				'type'     => 'switcher',
				'title'    => esc_html__('Job Openings', 'directorist'),
				'default'  => true,
			),
			array(
				'id'       => 'home_themes',
				'type'     => 'text',
				'title'    => 'Homepage Themes',
				'desc'     => 'Comma seperated list of 3 themes ids eg. 1,5,8',
			),
			array(
				'id'       => 'home_plugins',
				'type'     => 'text',
				'title'    => 'Homepage Plugins',
				'desc'     => 'Comma seperated list of 3 plugins ids eg. 1,5,8',
			),
		)
	)
);

CSF::createSection(
	$prefix,
	array(
		'title'   => esc_html__('Pricing', 'directorist'),
		'icon'    => 'fas fa-dollar-sign',
		'fields'  => array(
			array(
				'type'     => 'heading',
				'title'    => 'Discount Codes',
			),
			array(
				'id'       => 'sitewide_coupon',
				'type'     => 'text',
				'title'    => 'Sitewide Coupon',
			),
		)
	)
);

// Page Meta
$prefix = 'theme_layout';
CSF::createMetabox($prefix, array(
	'title'     => 'Layout',
	'post_type' => 'page',
	'context'   => 'side',
));

CSF::createSection(
	$prefix,
	array(
		'fields' => array(
			array(
				'id'       => 'sidebar',
				'type'     => 'switcher',
				'title'    => esc_html__('Display Sidebar', 'directorist'),
				'default'  => false,
			),
			array(
				'id'       => 'banner',
				'type'     => 'switcher',
				'title'    => esc_html__('Display Banner', 'directorist'),
				'default'  => true,
			),
			array(
				'id'       => 'trheader',
				'type'     => 'switcher',
				'title'    => esc_html__('Transparent Header', 'directorist'),
				'default'  => false,
			),
		)
	)
);

$prefix = 'theme_product_type';
CSF::createMetabox($prefix, array(
	'title'     => 'Product Type',
	'post_type' => 'download',
	'context'   => 'side',
	'data_type' => 'unserialize',
));

CSF::createSection(
	$prefix,
	array(
		'fields' => array(
			array(
				'id'       => $prefix,
				'type'     => 'radio',
				'title'    => 'Type',
				'options'    => array(
					'theme'  => 'Theme',
					'plugin' => 'Plugin',
					'other'  => 'Other',
				),
				'default'    => 'plugin'
			),
			array(
				'id'       => 'theme_product_is_freebies',
				'type'     => 'radio',
				'title'    => 'Freebies?',
				'options'    => array(
					'no'   => 'No',
					'yes'  => 'Yes',
				),
				'default'    => 'no'
			),
		)
	)
);

$prefix = 'theme_product_meta';
CSF::createMetabox($prefix, array(
	'title'     => 'Product Meta',
	'post_type' => 'download',
	'context'   => 'normal',
));

CSF::createSection(
	$prefix,
	array(
		'fields' => array(
			array(
				'id'       => 'top_title',
				'type'     => 'text',
				'title'    => 'Top Title',
			),
			array(
				'id'       => 'top_subtitle',
				'type'     => 'textarea',
				'title'    => 'Top Subtitle',
				'subtitle' => 'HTML Tags Allowed',
			),
			array(
				'id'       => 'short_description',
				'type'     => 'textarea',
				'title'    => 'Short Description',
				'subtitle' => 'HTML Tags Allowed',
			),
			array(
				'id'       => 'top_img',
				'type'     => 'media',
				'title'    => 'Top Image',
			),
			array(
				'id'       => 'top_new_badge',
				'type'     => 'checkbox',
				'title'    => 'New Badge',
				'default' => false
			),
			array(
				'id'       => 'last_update_date',
				'type'     => 'text',
				'title'    => 'Last Update Date',
			),
			array(
				'id'       => 'release_date',
				'type'     => 'text',
				'title'    => 'Release Date',
			),
			array(
				'id'       => 'version',
				'type'     => 'text',
				'title'    => 'Current Version',
			),
			array(
				'id'       => 'requirements',
				'type'     => 'textarea',
				'title'    => 'Requirements',
			),
			array(
				'id'       => 'doc_url',
				'type'     => 'text',
				'title'    => 'Documentation URL',
			),
			array(
				'id'       => 'changelog_url',
				'type'     => 'text',
				'title'    => 'Changelog URL',
			),
			array(
				'id'       => 'demo_url',
				'type'     => 'text',
				'title'    => 'Demo URL',
			),
			array(
				'id'       => 'external_url',
				'type'     => 'text',
				'title'    => 'External Link',
				'subtitle' => 'In case of product hosted on Themeforest/other sites',
			),
			array(
				'id'       => 'child_theme',
				'type'     => 'text',
				'title'    => 'Child Theme Download Link',
				'subtitle' => 'Only applicable for themes',
			),
		)
	)
);

// Job Meta
$prefix = 'theme_job_info';
CSF::createMetabox($prefix, array(
	'title'     => 'Information',
	'post_type' => 'theme_job',
	// 'context'   => 'side',
));

CSF::createSection(
	$prefix,
	array(
		'fields' => array(
			array(
				'id'       => 'apply_form_shortcode',
				'type'     => 'text',
				'title'    => 'Apply Form Shortcode',
			),
			array(
				'id'       => 'job_type',
				'type'     => 'text',
				'title'    => 'Type',
				'placeholder' => 'eg. Fulltime/Remote',
			),
			array(
				'id'       => 'vacancy_no',
				'type'     => 'text',
				'title'    => 'No. of Vacancies',
				'placeholder' => 'eg. 3',
			),
		)
	)
);