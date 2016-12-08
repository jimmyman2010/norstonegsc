<?php
/*
Widget Name: Simple Gallery
Description: Display a gallery of images.
Author: SiteOrigin
Author URI: https://siteorigin.com
*/

class SiteOrigin_Widgets_SimpleGallery_Widget extends SiteOrigin_Widget {

	function __construct(){

		parent::__construct(
			'sow-simple-gallery',
			__('SiteOrigin Simple Gallery', 'so-widgets-bundle'),
			array(
				'description' => __('Display a gallery of images.', 'so-widgets-bundle'),
			),
			array(),
			false,
			plugin_dir_path( __FILE__ )
		);
	}

	/**
	 * Initialize the image grid, mainly to add scripts and styles.
	 */
	function initialize(){
		$this->register_frontend_styles( array(
			array(
				'sow-magnific-popup',
				plugin_dir_url(__FILE__) . 'css/magnific-popup.css',
			),
			array(
				'sow-simple-gallery',
				plugin_dir_url(__FILE__) . 'css/simple-gallery.css',
			)
		) );

		$this->register_frontend_scripts( array(
			array(
				'sow-jquery.magnific-popup.min',
				plugin_dir_url(__FILE__) . 'js/jquery.magnific-popup.min.js',
				array( 'jquery' )
			),
			array(
				'sow-simple-gallery',
				//plugin_dir_url(__FILE__) . 'js/simple-gallery' . SOW_BUNDLE_JS_SUFFIX . '.js',
				plugin_dir_url(__FILE__) . 'js/simple-gallery.js',
				array( 'jquery' )
			)
		) );
	}

	function get_widget_form(){

		return array(

			'images' => array(
				'type' => 'repeater',
				'label' => __('Images', 'so-widgets-bundle'),
				'item_name'  => __( 'Image', 'so-widgets-bundle' ),
				'item_label' => array(
					'selector'     => "[name*='title']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'image' => array(
						'type' => 'media',
						'label' => __('Image', 'so-widgets-bundle')
					),
					'title' => array(
						'type' => 'text',
						'label' => __('Image title', 'so-widgets-bundle')
					)
				)
			),

			'display' => array(
				'type' => 'section',
				'label' => __('Display', 'so-widgets-bundle'),
				'fields' => array(
					'attachment_size' => array(
						'label' => __('Image size', 'so-widgets-bundle'),
						'type' => 'image-size',
						'default' => 'full',
					),
					'layout' => array(
						'label' => __('Layout', 'so-widgets-bundle'),
						'type' => 'select',
						'default' => 'default',
						'options' => array(
							'default' => __('Default', 'so-widgets-bundle'),
							'full' => __('Full', 'so-widgets-bundle')
						)
					)
				)
			)
		);
	}

	/**
	 * Get the less variables for the image grid
	 *
	 * @param $instance
	 *
	 * @return mixed
	 */
	function get_less_variables( $instance ) {
		$less = array();
		if( isset( $instance['display']['spacing'] ) ) {
			$less['spacing'] = intval($instance['display']['spacing']) . 'px';
		}

		return $less;
	}
}

siteorigin_widget_register( 'sow-simple-gallery', __FILE__, 'SiteOrigin_Widgets_SimpleGallery_Widget' );
