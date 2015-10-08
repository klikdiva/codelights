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
				'heading' => __( 'Initial Counter value', 'codelights' ),
				'description' => __( 'Initial string with all the prefixes, suffixes and decimal marks if needed.', 'codelights' ),
				'type' => 'textfield',
				'std' => '0',
			),
			array(
				'param_name' => 'final',
				'heading' => __( 'Final Counter value', 'codelights' ),
				'description' => __( 'Final value the way it should look like, when the animation ends.', 'codelights' ),
				'type' => 'textfield',
				'std' => '100',
			),
			array(
				'param_name' => 'duration',
				'heading' => __( 'Animation Duration', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					sprintf( __( '%s s', 'codelights' ), '0.5' ) => '500ms',
					sprintf( __( '%s s', 'codelights' ), '1' ) => '1000ms',
					sprintf( __( '%s s', 'codelights' ), '1.5' ) => '1500ms',
					sprintf( __( '%s s', 'codelights' ), '2' ) => '2000ms',
					sprintf( __( '%s s', 'codelights' ), '3' ) => '3000ms',
					sprintf( __( '%s s', 'codelights' ), '4' ) => '4000ms',
					sprintf( __( '%s s', 'codelights' ), '5' ) => '5000ms',
					sprintf( __( '%s s', 'codelights' ), '6' ) => '6000ms',
					sprintf( __( '%s s', 'codelights' ), '7' ) => '7000ms',
					sprintf( __( '%s s', 'codelights' ), '8' ) => '8000ms',
					sprintf( __( '%s s', 'codelights' ), '9' ) => '9000ms',
					sprintf( __( '%s s', 'codelights' ), '10' ) => '10000ms',
				),
				'std' => '600ms',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
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
				'param_name' => 'title',
				'heading' => __( 'Counter Title', 'codelights' ),
				'type' => 'textfield',
				'std' => '',
			),
			array(
				'param_name' => 'value_size',
				'heading' => __( 'Value Font Size', 'codelights' ),
				'type' => 'textfield',
				'std' => '20',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'title_size',
				'heading' => __( 'Title Font Size', 'codelights' ),
				'type' => 'textfield',
				'std' => '20',
				'dependency' => array( 'element' => 'title', 'not_empty' => TRUE ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'value_color',
				'heading' => __( 'Value Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'title_color',
				'heading' => __( 'Title Color', 'codelights' ),
				'type' => 'colorpicker',
				'dependency' => array( 'element' => 'title', 'not_empty' => TRUE ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'el_class',
				'heading' => __( 'Extra class name', 'codelights' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'codelights' ),
				'type' => 'textfield',
				'group' => __( 'Custom', 'codelights' ),
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
			 * General
			 */
			array(
				'param_name' => 'link_type',
				'heading' => __( 'Link', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'No Link', 'codelights' ) => 'none',
					__( 'Add link to the whole FlipBox', 'codelights' ) => 'container',
					__( 'Add link as a separate button', 'codelights' ) => 'btn',
				),
			),
			array(
				'param_name' => 'link',
				'heading' => __( 'Link URL', 'codelights' ),
				'type' => 'vc_link',
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'container', 'btn' ) ),
			),
			array(
				'param_name' => 'back_btn_label',
				'heading' => __( 'Button Label', 'codelights' ),
				'type' => 'textfield',
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'btn' ) ),
			),
			array(
				'param_name' => 'back_btn_bgcolor',
				'heading' => __( 'Button Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'btn' ) ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'param_name' => 'back_btn_color',
				'heading' => __( 'Button Text Color', 'codelights' ),
				'type' => 'colorpicker',
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'btn' ) ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
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
				'edit_field_class' => 'vc_col-sm-6 vc_column',
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
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'param_name' => 'duration',
				'heading' => __( 'Animation Duration', 'codelights' ),
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
			),
			array(
				'param_name' => 'easing',
				'heading' => __( 'Animation Easing', 'codelights' ),
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
			),
			/**
			 * Front Side
			 */
			array(
				'param_name' => 'front_icon_type',
				'heading' => __( 'Icon to Display', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'None', 'codelights' ) => 'none',
					__( 'FontAwesome Icon', 'codelights' ) => 'font',
					__( 'Custom Image', 'codelights' ) => 'image',
				),
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_icon_name',
				'heading' => __( 'Icon Name', 'codelights' ),
				'type' => 'textfield',
				'dependency' => array( 'element' => 'front_icon_type', 'value' => array( 'font' ) ),
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_icon_size',
				'heading' => __( 'Icon Size (px)', 'codelights' ),
				'type' => 'textfield',
				'std' => '20',
				'dependency' => array( 'element' => 'front_icon_type', 'value' => array( 'font' ) ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_icon_style',
				'heading' => __( 'Icon Style', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Simple', 'codelights' ) => 'default',
					__( 'Circle Background', 'codelights' ) => 'circle',
					__( 'Square Background', 'codelights' ) => 'square',
				),
				'dependency' => array( 'element' => 'front_icon_type', 'value' => array( 'font' ) ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_icon_color',
				'heading' => __( 'Icon Color', 'codelights' ),
				'type' => 'colorpicker',
				'dependency' => array( 'element' => 'front_icon_type', 'value' => array( 'font' ) ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_icon_bgcolor',
				'heading' => __( 'Icon Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'dependency' => array( 'element' => 'front_icon_type', 'value' => array( 'font' ) ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_icon_image',
				'heading' => __( 'Image', 'codelights' ),
				'type' => 'attach_image',
				'dependency' => array( 'element' => 'front_icon_type', 'value' => array( 'image' ) ),
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_icon_image_width',
				'heading' => __( 'Image Width', 'codelights' ),
				'description' => __( 'In pixels or percents', 'codelights' ),
				'type' => 'textfield',
				'std' => '32px',
				'dependency' => array( 'element' => 'front_icon_type', 'value' => array( 'image' ) ),
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_title',
				'heading' => __( 'Title', 'codelights' ),
				'type' => 'textfield',
				'std' => 'FlipBox Title', // Not translatable
				'admin_label' => TRUE,
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_title_size',
				'heading' => __( 'Title Font Size (px)', 'codelights' ),
				'type' => 'textfield',
				'std' => '',
				'dependency' => array( 'element' => 'front_title', 'not_empty' => TRUE ),
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_desc',
				'heading' => __( 'Description', 'codelights' ),
				'type' => 'textarea',
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_bgcolor',
				'heading' => __( 'Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_textcolor',
				'heading' => __( 'Text Color', 'codelights' ),
				'type' => 'colorpicker',
				'group' => __( 'Front Side', 'codelights' ),
			),
			array(
				'param_name' => 'front_bgimage',
				'heading' => __( 'Background Image', 'codelights' ),
				'type' => 'attach_image',
				'group' => __( 'Front Side', 'codelights' ),
			),
			/**
			 * Back Side
			 */
			array(
				'param_name' => 'back_title',
				'heading' => __( 'Title', 'codelights' ),
				'type' => 'textfield',
				'std' => 'FlipBox Title', // Not translatable
				'group' => __( 'Back Side', 'codelights' ),
			),
			array(
				'param_name' => 'back_title_size',
				'heading' => __( 'Title Font Size (px)', 'codelights' ),
				'type' => 'textfield',
				'std' => '',
				'dependency' => array( 'element' => 'back_title', 'not_empty' => TRUE ),
				'group' => __( 'Back Side', 'codelights' ),
			),
			array(
				'param_name' => 'back_desc',
				'heading' => __( 'Description', 'codelights' ),
				'type' => 'textarea',
				'group' => __( 'Back Side', 'codelights' ),
			),
			array(
				'param_name' => 'back_bgcolor',
				'heading' => __( 'Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'group' => __( 'Back Side', 'codelights' ),
			),
			array(
				'param_name' => 'back_textcolor',
				'heading' => __( 'Text Color', 'codelights' ),
				'type' => 'colorpicker',
				'group' => __( 'Back Side', 'codelights' ),
			),
			array(
				'param_name' => 'back_bgimage',
				'heading' => __( 'Background Image', 'codelights' ),
				'type' => 'attach_image',
				'group' => __( 'Back Side', 'codelights' ),
			),
			/**
			 * Custom
			 */
			array(
				'param_name' => 'width',
				'heading' => __( 'Width', 'codelights' ),
				'description' => __( 'In pixels or percents', 'codelights' ),
				'type' => 'textfield',
				'std' => '100%',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'height',
				'heading' => __( 'Height', 'codelights' ),
				'description' => __( 'Leave blank use front height', 'codelights' ),
				'type' => 'textfield',
				'std' => '',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'valign',
				'type' => 'checkbox',
				'value' => array( __( 'Center-Align Content Vertically', 'codelights' ) => 'center' ),
				'std' => 'top',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'border_radius',
				'heading' => __( 'Border Radius', 'codelights' ),
				'type' => 'textfield',
				'std' => '0',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'border_size',
				'heading' => __( 'Border Width', 'codelights' ),
				'type' => 'textfield',
				'std' => '2',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'border_color',
				'heading' => __( 'Border Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'padding',
				'heading' => __( 'Padding', 'codelights' ),
				'type' => 'textfield',
				'std' => '20',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'el_class',
				'heading' => __( 'Extra class name', 'codelights' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'codelights' ),
				'type' => 'textfield',
				'group' => __( 'Custom', 'codelights' ),
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
				'heading' => __( 'Banner Image', 'codelights' ),
				'type' => 'attach_image',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'param_name' => 'size',
				'heading' => __( 'Image Size', 'codelights' ),
				'type' => 'dropdown',
				'value' => cl_image_sizes_select_values(),
				'std' => 'large',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
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
			),
			array(
				'param_name' => 'title',
				'heading' => __( 'Title', 'codelights' ),
				'type' => 'textfield',
				'admin_label' => TRUE,
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'param_name' => 'desc',
				'heading' => __( 'Description', 'codelights' ),
				'type' => 'textarea',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			array(
				'param_name' => 'link',
				'heading' => __( 'Link', 'codelights' ),
				'type' => 'vc_link',
			),
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
			),
			array(
				'param_name' => 'duration',
				'heading' => __( 'Animation Duration', 'codelights' ),
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
			),
			array(
				'param_name' => 'easing',
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
			),
			/**
			 * Custom
			 */
			array(
				'param_name' => 'bgcolor',
				'heading' => __( 'Background Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'textcolor',
				'heading' => __( 'Text Color', 'codelights' ),
				'type' => 'colorpicker',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'width',
				'heading' => __( 'Width', 'codelights' ),
				'type' => 'textfield',
				'std' => '100%',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'padding',
				'heading' => __( 'Padding', 'codelights' ),
				'type' => 'textfield',
				'std' => '5%',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'title_size',
				'heading' => __( 'Title Font Size', 'codelights' ),
				'description' => __( 'In pixels, at 300px banner width', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Tiny', 'codelights' ) => 'tiny',
					__( 'Small', 'codelights' ) => 'small',
					__( 'Medium', 'codelights' ) => 'medium',
					__( 'Large', 'codelights' ) => 'large',
					__( 'Huge', 'codelights' ) => 'huge',
				),
				'std' => 'medium',
				'dependency' => array( 'element' => 'title', 'not_empty' => TRUE ),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'title_tag',
				'heading' => __( 'Title Tag Name', 'codelights' ),
				'description' => __( 'For SEO purposes', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'div' => 'div',
				),
				'std' => 'div',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'el_class',
				'heading' => __( 'Extra class name', 'codelights' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'codelights' ),
				'type' => 'textfield',
				'group' => __( 'Custom', 'codelights' ),
			),
		),
	),
	'cl-itext' => array(
		'base' => 'cl-itext',
		'name' => __( 'Interactive Text', 'codelighs' ),
		'description' => __( 'Text with some dynamicatlly changing part', 'codelighs' ),
		'class' => '',
		'category' => 'CodeLights',
		'icon' => 'icon-cl-itext',
		'params' => array(
			/**
			 * General
			 */
			array(
				'param_name' => 'texts',
				'heading' => __( 'Text States', 'codelights' ),
				'description' => __( 'Each state from a new line', 'codelights' ),
				'type' => 'textarea',
				'std' => 'We create great design' . "\n" . 'We create great websites' . "\n" . 'We create great code',
			),
			array(
				'param_name' => 'animation_type',
				'heading' => __( 'Type', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					__( 'Whole part replace', 'codelights' ) => 'replace',
					__( 'Terminal-like replace', 'codelights' ) => 'terminal',
					__( 'Modify the shortest way', 'codelights' ) => 'shortest',
				),
				'std' => 'replace',
			),
			array(
				'param_name' => 'duration',
				'heading' => __( 'Animation Duration', 'codelights' ),
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
			),
			array(
				'param_name' => 'delay',
				'heading' => __( 'Delay', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					sprintf( _n( '%d second', '%d seconds', 1, 'codelights' ), 1 ) => '1000ms',
					sprintf( _n( '%d second', '%d seconds', 2, 'codelights' ), 2 ) => '2000ms',
					sprintf( _n( '%d second', '%d seconds', 3, 'codelights' ), 3 ) => '3000ms',
					sprintf( _n( '%d second', '%d seconds', 4, 'codelights' ), 4 ) => '4000ms',
					sprintf( _n( '%d second', '%d seconds', 5, 'codelights' ), 5 ) => '5000ms',
					sprintf( _n( '%d second', '%d seconds', 6, 'codelights' ), 6 ) => '6000ms',
					sprintf( _n( '%d second', '%d seconds', 7, 'codelights' ), 7 ) => '7000ms',
					sprintf( _n( '%d second', '%d seconds', 8, 'codelights' ), 8 ) => '8000ms',
					sprintf( _n( '%d second', '%d seconds', 9, 'codelights' ), 9 ) => '9000ms',
					sprintf( _n( '%d second', '%d seconds', 10, 'codelights' ), 10 ) => '10000ms',
				),
				'std' => '5000ms',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
			/**
			 * Custom
			 */
			array(
				'param_name' => 'font_size',
				'heading' => __( 'Font Size', 'codelights' ),
				'description' => __( 'In pixels', 'codelights' ),
				'type' => 'textfield',
				'std' => '20',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'dynamic_bold',
				'heading' => '',
				'type' => 'checkbox',
				'value' => array( __( 'Bold Dynamic Text', 'codelights' ) => TRUE ),
				'std' => TRUE,
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'color',
				'heading' => __( 'Basic Text Color', 'codelights' ),
				'type' => 'colorpicker',
				'std' => '',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'dynamic_color',
				'heading' => __( 'Dynamic Text Color', 'codelights' ),
				'type' => 'colorpicker',
				'std' => '',
				'edit_field_class' => 'vc_col-sm-6 vc_column',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'tag',
				'heading' => __( 'Tag Name', 'codelights' ),
				'description' => __( 'For SEO purposes', 'codelights' ),
				'type' => 'dropdown',
				'value' => array(
					'div' => 'div',
					'h1' => 'h1',
					'h2' => 'h2',
					'h3' => 'h3',
					'p' => 'p',
				),
				'std' => 'div',
				'group' => __( 'Custom', 'codelights' ),
			),
			array(
				'param_name' => 'el_class',
				'heading' => __( 'Extra class name', 'codelights' ),
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'codelights' ),
				'type' => 'textfield',
				'group' => __( 'Custom', 'codelights' ),
			),
		),
	),
);

