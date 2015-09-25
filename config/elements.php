<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

return array(

	'cl-counter' => array(
		'base' => 'cl-counter',
		'name' => __( 'Counter', 'codelights' ),
		'description' => __( 'Animated text with numbers', 'codelights' ),
		'class' => '',
		'category' => 'CodeLights',
		'icon' => 'icon-cl-counter',
		'params' => array(
			array(
				'param_name' => 'initial',
				'heading' => __( 'Initial string', 'codelights' ),
				'description' => __( 'Initial string with all the prefixes, suffixes and decimal marks if needed.', 'codelights' ),
				'type' => 'textfield',
				'std' => '0',
			),
			array(
				'param_name' => 'final',
				'heading' => __( 'Final string', 'codelights' ),
				'description' => __( 'Final value the way it should look like, when the animation ends.', 'codelights' ),
				'type' => 'textfield',
				'std' => '100',
			),
			array(
				'param_name' => 'animation',
				'heading' => __( 'Digits Animation Type', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'None', 'codelights' ) => 'none',
					__( 'Slide Up', 'codelights' ) => 'slideup',
					__( 'Slide Down', 'codelights' ) => 'slidedown',
				),
				'std' => 'none',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'param_name' => 'size',
				'heading' => __( 'Font Size', 'codelights' ),
				'type' => 'textfield',
				'std' => '20',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'param_name' => 'substring',
				'heading' => __( 'Substring', 'codelights' ),
				'type' => 'textfield',
				'std' => '',
			),
			array(
				'param_name' => 'el_class',
				'heading' => __( 'Extra class name', 'us' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'us' ),
				'type' => 'textfield',
//				'weight' => 10,
			),
		),
	),
	'cl-flipbox' => array(
		'base' => 'cl-flipbox',
		'name' => __( 'FlipBox', 'codelights' ),
		'description' => __( 'Two-sided content element, flipping on hover', 'codelights' ),
		'class' => '',
		'category' => 'CodeLights',
		'icon' => 'icon-cl-flipbox',
		'params' => array(
			/**
			 * Front Side
			 */
			array(
				'param_name' => 'front_icon',
				'heading' => __( 'Icon', 'codelights' ),
				'type' => 'textfield',
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 290,
			),
			array(
				'param_name' => 'front_icon_style',
				'heading' => __( 'Icon Style', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Simple', 'codelights' ) => 'default',
					__( 'Inside the Solid circle', 'codelights' ) => 'circle',
				),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'dependency' => array( 'element' => 'front_icon', 'not_empty' => TRUE ),
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 280,
			),
			array(
				'param_name' => 'front_icon_size',
				'heading' => __( 'Icon Style', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Extra-Small', 'codelights' ) => 'xs',
					__( 'Small', 'codelights' ) => 's',
					__( 'Medium', 'codelights' ) => 'm',
					__( 'Large', 'codelights' ) => 'l',
					__( 'Extra-Large', 'codelights' ) => 'xl',
				),
				'std' => 'm',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'dependency' => array( 'element' => 'front_icon', 'not_empty' => TRUE ),
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 270,
			),
			array(
				'param_name' => 'front_icon_color',
				'heading' => __( 'Icon Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'dependency' => array( 'element' => 'front_icon', 'not_empty' => TRUE ),
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 260,
			),
			array(
				'param_name' => 'front_icon_bgcolor',
				'heading' => __( 'Icon Background', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'dependency' => array( 'element' => 'front_icon', 'not_empty' => TRUE ),
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 250,
			),
			array(
				'param_name' => 'front_image',
				'heading' => __( 'Image', 'codelights' ),
				'type' => 'attach_image',
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 240,
			),
			array(
				'param_name' => 'front_title',
				'heading' => __( 'Title', 'codelights' ),
				'type' => 'textfield',
				'admin_label' => TRUE,
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 230,
			),
			array(
				'param_name' => 'front_text',
				'heading' => __( 'Text', 'codelights' ),
				'type' => 'textarea',
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 220,
			),
			array(
				'param_name' => 'front_bgcolor',
				'heading' => __( 'Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 210,
			),
			array(
				'param_name' => 'front_border_color',
				'heading' => __( 'Border Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 200,
			),
			array(
				'param_name' => 'front_border_size',
				'heading' => __( 'Border Size', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					sprintf( __( '%dpx', 'codelights' ), 1 ) => '1px',
					sprintf( __( '%dpx', 'codelights' ), 2 ) => '2px',
					sprintf( __( '%dpx', 'codelights' ), 3 ) => '3px',
					sprintf( __( '%dpx', 'codelights' ), 4 ) => '4px',
					sprintf( __( '%dpx', 'codelights' ), 5 ) => '5px',
					sprintf( __( '%dpx', 'codelights' ), 6 ) => '6px',
					sprintf( __( '%dpx', 'codelights' ), 7 ) => '7px',
					sprintf( __( '%dpx', 'codelights' ), 8 ) => '8px',
					sprintf( __( '%dpx', 'codelights' ), 9 ) => '9px',
				),
				'std' => '1px',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Front Side', 'codelights' ),
				'weight' => 190,
			),
			/**
			 * Back Side
			 */
			array(
				'param_name' => 'back_image',
				'heading' => __( 'Image', 'codelights' ),
				'type' => 'attach_image',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 180,
			),
			array(
				'param_name' => 'back_title',
				'heading' => __( 'Title', 'codelights' ),
				'type' => 'textfield',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 170,
			),
			array(
				'param_name' => 'back_text',
				'heading' => __( 'Text', 'codelights' ),
				'type' => 'textarea',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 160,
			),
			array(
				'param_name' => 'back_btn_label',
				'heading' => __( 'Button Label', 'codelights' ),
				'type' => 'textfield',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 150,
			),
			array(
				'param_name' => 'back_btn_size',
				'heading' => __( 'Button Label', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Extra-Small', 'codelights' ) => 'xs',
					__( 'Small', 'codelights' ) => 's',
					__( 'Medium', 'codelights' ) => 'm',
					__( 'Large', 'codelights' ) => 'l',
					__( 'Extra-Large', 'codelights' ) => 'xl',
				),
				'std' => 'm',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 140,
			),
			array(
				'param_name' => 'back_btn_color',
				'heading' => __( 'Button Text Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 130,
			),
			array(
				'param_name' => 'back_button_bgcolor',
				'heading' => __( 'Button Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 120,
			),
			array(
				'param_name' => 'back_bgcolor',
				'heading' => __( 'Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 110,
			),
			array(
				'param_name' => 'back_border_color',
				'heading' => __( 'Border Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 100,
			),
			array(
				'param_name' => 'back_border_size',
				'heading' => __( 'Border Size', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					sprintf( __( '%dpx', 'codelights' ), 1 ) => '1px',
					sprintf( __( '%dpx', 'codelights' ), 2 ) => '2px',
					sprintf( __( '%dpx', 'codelights' ), 3 ) => '3px',
					sprintf( __( '%dpx', 'codelights' ), 4 ) => '4px',
					sprintf( __( '%dpx', 'codelights' ), 5 ) => '5px',
					sprintf( __( '%dpx', 'codelights' ), 6 ) => '6px',
					sprintf( __( '%dpx', 'codelights' ), 7 ) => '7px',
					sprintf( __( '%dpx', 'codelights' ), 8 ) => '8px',
					sprintf( __( '%dpx', 'codelights' ), 9 ) => '9px',
				),
				'std' => '1px',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Back Side', 'codelights' ),
				'weight' => 90,
			),
			/**
			 * Animation
			 */
			array(
				'param_name' => 'animation',
				'heading' => __( 'Animation Type', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Card Flip', 'codelights' ) => 'cardflip',
					__( 'Cube Tilt', 'codelights' ) => 'cubetilt',
					__( 'Cube Flip', 'codelights' ) => 'cubeflip',
					__( 'Cover Open', 'codelights' ) => 'coveropen',
				),
				'group' => __( 'Animation', 'codelights' ),
				'weight' => 80,
			),
			array(
				'param_name' => 'direction',
				'heading' => __( 'Animation Direction', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Up', 'codelights' ) => 'n',
					__( 'Up-Right', 'codelights' ) => 'ne',
					__( 'Right', 'codelights' ) => 'e',
					__( 'Down-Right', 'codelights' ) => 'se',
					__( 'Down', 'codelights' ) => 's',
					__( 'Down-Left', 'codelights' ) => 'sw',
					__( 'Left', 'codelights' ) => 'w',
					__( 'Up-Left', 'codelights' ) => 'nw',
				),
				'std' => 'w',
				'group' => __( 'Animation', 'codelights' ),
				'weight' => 70,
			),
			array(
				'param_name' => 'animation_duration',
				'heading' => __( 'Duration', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					sprintf( __( '%d ms', 'codelights' ), 100 ) => '100ms',
					sprintf( __( '%d ms', 'codelights' ), 200 ) => '200ms',
					sprintf( __( '%d ms', 'codelights' ), 300 ) => '300ms',
					sprintf( __( '%d ms', 'codelights' ), 400 ) => '400ms',
					sprintf( __( '%d ms', 'codelights' ), 500 ) => '500ms',
					sprintf( __( '%d ms', 'codelights' ), 600 ) => '600ms',
					sprintf( __( '%d ms', 'codelights' ), 700 ) => '700ms',
					sprintf( __( '%d ms', 'codelights' ), 800 ) => '800ms',
					sprintf( __( '%d ms', 'codelights' ), 900 ) => '900ms',
					sprintf( __( '%d ms', 'codelights' ), 1000 ) => '1000ms',
					sprintf( __( '%d ms', 'codelights' ), 1100 ) => '1100ms',
					sprintf( __( '%d ms', 'codelights' ), 1200 ) => '1200ms',
				),
				'std' => '600ms',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Animation', 'codelights' ),
				'weight' => 60,
			),
			array(
				'param_name' => 'animation_easing',
				'heading' => __( 'Easing', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Linear', 'codelights' ) => 'linear',
					'easeInOutSine' => 'easeInOutSine',
					'easeInQuad' => 'easeInQuad',
					'easeInOutCirc' => 'easeInOutCirc',
					'easeInBack' => 'easeInBack',
					'easeOutBack' => 'easeOutBack',
					'easeInOutBack' => 'easeInOutBack',
				),
				'std' => 'easeInOutSine',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Animation', 'codelights' ),
				'weight' => 50,
			),
			/**
			 * General Settings
			 */
			array(
				'param_name' => 'link',
				'heading' => __( 'FlipBox Link', 'codelights' ),
				'type' => 'vc_link',
				'group' => __( 'General Settings', 'codelights' ),
				'weight' => 40,
			),
			array(
				'param_name' => 'width',
				'heading' => __( 'Width', 'codelights' ),
				'type' => 'textfield',
				'std' => '100%',
				'group' => __( 'General Settings', 'codelights' ),
				'weight' => 30,
			),
			array(
				'param_name' => 'height',
				'heading' => __( 'Height', 'codelights' ),
				'description' => __( 'Leave blank to use the maximum side height', 'codelights' ),
				'type' => 'textfield',
				'std' => '',
				'group' => __( 'General Settings', 'codelights' ),
				'weight' => 20,
			),
			array(
				'param_name' => 'el_class',
				'heading' => __( 'Extra class name', 'us' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'us' ),
				'type' => 'textfield',
				'group' => __( 'General Settings', 'codelights' ),
				'weight' => 10,
			),
		),
	),
	'cl-ib' => array(
		'base' => 'cl-ib',
		'name' => __( 'Interactive Banner', 'codelights' ),
		'description' => __( 'Hoverable image with additional data', 'codelights' ),
		'class' => '',
		'category' => 'CodeLights',
		'icon' => 'icon-cl-ib',
		'params' => array(
			/**
			 * Content
			 */
			array(
				'param_name' => 'image',
				'heading' => __( 'Image', 'codelights' ),
				'type' => 'attach_image',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Content', 'codelights' ),
				'weight' => 210,
			),
			array(
				'param_name' => 'size',
				'heading' => __( 'Image Size', 'codelights' ),
				'type' => 'dropdown',
				'value' => cl_image_sizes_select_values(),
				'std' => 'large',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Content', 'codelights' ),
				'weight' => 200,
			),
			array(
				'param_name' => 'title',
				'heading' => __( 'Title', 'codelights' ),
				'type' => 'textfield',
				'admin_label' => TRUE,
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Content', 'codelights' ),
				'weight' => 190,
			),
			array(
				'param_name' => 'title_size',
				'heading' => __( 'Title Font Size', 'codelights' ),
				'description' => __( 'In pixels, at 300px banner width', 'codelights' ),
				'type' => 'textfield',
				'std' => '25',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'dependency' => array( 'element' => 'title', 'not_empty' => TRUE ),
				'group' => __( 'Content', 'codelights' ),
				'weight' => 180,
			),
			array(
				'param_name' => 'text',
				'heading' => __( 'Text', 'codelights' ),
				'type' => 'textarea',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Content', 'codelights' ),
				'weight' => 170,
			),
			array(
				'param_name' => 'text_size',
				'heading' => __( 'Text Font Size', 'codelights' ),
				'description' => __( 'In pixels, at 300px banner width', 'codelights' ),
				'type' => 'textfield',
				'std' => '16',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'dependency' => array( 'element' => 'text', 'not_empty' => TRUE ),
				'group' => __( 'Content', 'codelights' ),
				'weight' => 160,
			),
			array(
				'param_name' => 'icon',
				'heading' => __( 'Icon', 'codelights' ),
				'type' => 'textfield',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Content', 'codelights' ),
				'weight' => 150,
			),
			array(
				'param_name' => 'icon_size',
				'heading' => __( 'Icon Font Size', 'codelights' ),
				'description' => __( 'In pixels, at 300px banner width', 'codelights' ),
				'type' => 'textfield',
				'std' => '40',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'dependency' => array( 'element' => 'icon', 'not_empty' => TRUE ),
				'group' => __( 'Content', 'codelights' ),
				'weight' => 140,
			),
			array(
				'param_name' => 'link_type',
				'heading' => __( 'Link Type', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'No Link', 'codelights' ) => 'none',
					__( 'Whole Banner', 'codelights' ) => 'banner',
					__( 'Separate Button', 'codelights' ) => 'btn',
				),
				'group' => __( 'Content', 'codelights' ),
				'weight' => 130,
			),
			array(
				'param_name' => 'btn_label',
				'heading' => __( 'Button Label', 'codelights' ),
				'type' => 'textfield',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Content', 'codelights' ),
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'btn' ) ),
				'weight' => 120,
			),
			array(
				'param_name' => 'btn_size',
				'heading' => __( 'Button Font Size', 'codelights' ),
				'description' => __( 'In pixels, at 300px banner width', 'codelights' ),
				'type' => 'textfield',
				'std' => '30',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'dependency' => array( 'element' => 'btn_label', 'not_empty' => TRUE ),
				'group' => __( 'Content', 'codelights' ),
				'weight' => 110,
			),
			array(
				'param_name' => 'btn_color',
				'heading' => __( 'Button Text Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Content', 'codelights' ),
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'btn' ) ),
				'weight' => 100,
			),
			array(
				'param_name' => 'btn_bgcolor',
				'heading' => __( 'Button Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Content', 'codelights' ),
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'btn' ) ),
				'weight' => 90,
			),
			array(
				'param_name' => 'link',
				'heading' => __( 'Link', 'codelights' ),
				'type' => 'vc_link',
				'group' => __( 'Content', 'codelights' ),
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'banner', 'btn' ) ),
				'weight' => 80,
			),
			/**
			 * Animation
			 */
			array(
				'param_name' => 'animation',
				'heading' => __( 'Animation Type', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Melete', 'codelights' ) => 'melete',
					__( 'Soter', 'codelights' ) => 'soter',
					__( 'Phorcys', 'codelights' ) => 'phorcys',
					__( 'Aidos', 'codelights' ) => 'aidos',
					__( 'Caeros', 'codelights' ) => 'caeros',
					__( 'Hebe', 'codelights' ) => 'hebe',
					__( 'Aphelia', 'codelights' ) => 'aphelia',
					__( 'Nike', 'codelights' ) => 'nike',
				),
				'group' => __( 'Animation', 'codelights' ),
				'weight' => 70,
			),
			array(
				'param_name' => 'direction',
				'heading' => __( 'Animation Direction', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Up', 'codelights' ) => 'n',
					__( 'Right', 'codelights' ) => 'e',
					__( 'Down', 'codelights' ) => 's',
					__( 'Left', 'codelights' ) => 'w',
				),
				'std' => 'w',
				'group' => __( 'Animation', 'codelights' ),
				'weight' => 60,
			),
			array(
				'param_name' => 'animation_duration',
				'heading' => __( 'Duration', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					sprintf( __( '%d ms', 'codelights' ), 100 ) => '100ms',
					sprintf( __( '%d ms', 'codelights' ), 200 ) => '200ms',
					sprintf( __( '%d ms', 'codelights' ), 300 ) => '300ms',
					sprintf( __( '%d ms', 'codelights' ), 400 ) => '400ms',
					sprintf( __( '%d ms', 'codelights' ), 500 ) => '500ms',
					sprintf( __( '%d ms', 'codelights' ), 600 ) => '600ms',
					sprintf( __( '%d ms', 'codelights' ), 700 ) => '700ms',
					sprintf( __( '%d ms', 'codelights' ), 800 ) => '800ms',
					sprintf( __( '%d ms', 'codelights' ), 900 ) => '900ms',
					sprintf( __( '%d ms', 'codelights' ), 1000 ) => '1000ms',
					sprintf( __( '%d ms', 'codelights' ), 1100 ) => '1100ms',
					sprintf( __( '%d ms', 'codelights' ), 1200 ) => '1200ms',
				),
				'std' => '600ms',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Animation', 'codelights' ),
				'weight' => 50,
			),
			array(
				'param_name' => 'animation_easing',
				'heading' => __( 'Easing', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Linear', 'codelights' ) => 'linear',
					'easeInOutSine' => 'easeInOutSine',
					'easeInQuad' => 'easeInQuad',
					'easeInOutCirc' => 'easeInOutCirc',
					'easeInBack' => 'easeInBack',
					'easeOutBack' => 'easeOutBack',
					'easeInOutBack' => 'easeInOutBack',
				),
				'std' => 'easeInOutSine',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Animation', 'codelights' ),
				'weight' => 40,
			),
			/**
			 * General Settings
			 */
			array(
				'param_name' => 'width',
				'heading' => __( 'Width', 'codelights' ),
				'type' => 'textfield',
				'std' => '100%',
				'group' => __( 'General Settings', 'codelights' ),
				'weight' => 30,
			),
			array(
				'param_name' => 'ratio',
				'heading' => __( 'Aspect Ratio', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					'2x1 (' . __( 'Landscape', 'codelights' ) . ')' => '2x1',
					'3x2 (' . __( 'Landscape', 'codelights' ) . ')' => '3x2',
					'4x3 (' . __( 'Landscape', 'codelights' ) . ')' => '4x3',
					'1x1 (' . __( 'Square', 'codeligths' ) . ')' => '1x1',
					'3x4 (' . __( 'Portrait', 'codelights' ) . ')' => '3x4',
					'2x3 (' . __( 'Portrait', 'codelights' ) . ')' => '2x3',
					'1x2 (' . __( 'Portrait', 'codelights' ) . ')' => '1x2',
				),
				'std' => '3x2',
				'group' => __( 'General Settings', 'codelights' ),
				'weight' => 20,
			),
			array(
				'param_name' => 'el_class',
				'heading' => __( 'Extra class name', 'us' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'us' ),
				'type' => 'textfield',
				'group' => __( 'General Settings', 'codelights' ),
				'weight' => 10,
			),
		),
	),

);

