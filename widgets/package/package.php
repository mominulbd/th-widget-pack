<?php
/*
Widget Name: Themovation Package
Description:
Author: Themovation
Author URI: themovation.com
*/

class Themovation_SO_WB_Package_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(

			'th-package',

			__('Themovation Package', 'themovation-widgets'),

			array(
				'description' => __('', 'themovation-widgets'),
				'help'        => '',
			),

			array(
			),

			array(
				// Fields go here
			),

			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return '';
	}

	function get_style_name($instance) {
		return '';
	}
}
siteorigin_widget_register('th-package', __FILE__, 'Themovation_SO_WB_Package_Widget');
