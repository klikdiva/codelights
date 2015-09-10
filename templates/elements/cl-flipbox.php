<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Output a single flipbox element.
 *
 * @var $link string URL of the overall flipbox anchor
 * @var $front_icon string The name of the front icon if present (ex: 'star' / 'fa-star')
 * @var $front_icon_style string Front icon style type: 'default' / 'circle'
 * @var $front_icon_size string Front icon size: 'xs' / 's' / 'm' / 'l' / 'xl'
 * @var $front_icon_color string
 * @var $front_icon_bgcolor string
 * @var $front_image int ID of the WP attachment image
 * @var $front_title string
 * @var $front_text string
 * @var $front_bgcolor string
 * @var $front_border_style string Front border style: 'none' / 'dotted' / 'dashed' / 'solid' / 'double'
 * @var $front_border_color string
 * @var $front_border_size string Front border size: '1px' / '2px' / ... / '9px'
 * @var $back_image int ID of the WP attachment image
 * @var $back_title string
 * @var $back_text string Back-side text
 * @var $back_button_label string Back button label
 * @var $back_button_size string Back button size: 'xs' / 's' / 'm' / 'l' / 'xl'
 * @var $back_button_color string
 * @var $back_button_bgcolor string
 * @var $back_bgcolor string
 * @var $back_border_style string Back border style: 'none' / 'dotted' / 'dashed' / 'solid' / 'double'
 * @var $back_border_color string
 * @var $back_border_size string Back border size: '1px' / '2px' / ... / '9px'
 * @var $animation string Animation type: 'cardflip' / 'cubesides' / 'emptybox' / 'coveropen'
 * @var $direction string Animation direction: 'n' / 'ne' / 'e' / 'se' / 's' / 'sw' / 'w' / 'nw'
 * @var $animation_duration int In milliseconds
 * @var $animation_easing string
 * @var $width mixed In pixels or percents: '100' / '100%'
 * @var $height int In pixels
 * @var $el_class string Extra class name
 *
 * TODO Add one more layout http://css-flip-box-3d.firchow.net/
 */

// Main element classes, inner css and additional attributes
$classes = ' animation_' . $animation . ' direction_' . $direction;

$tag = 'div';
$atts = '';
if ( ! empty( $link ) ) {
	$link = cl_parse_vc_link( $link );
	// Altering whole element's div with anchor when it has a link
	$tag = 'a';
	$atts .= ' href="' . esc_attr( $link['url'] ) . '" title="' . esc_attr( $link['title'] ) . '" target="' . esc_attr( $link['target'] ) . '"';
}

$inner_css = '';
if ( ! empty( $width ) ) {
	if ( strpos( $width, '%' ) !== FALSE ) {
		$inner_css .= 'width:' . floatval( $width ) . '%;';
	} else {
		$inner_css .= 'width:' . intval( $width ) . 'px;';
	}
}
if ( ! empty( $height ) ) {
	$inner_css .= 'height:' . intval( $height ) . 'px;';
}
if ( ! empty( $inner_css ) ) {
	$inner_css = ' style="' . esc_attr( $inner_css ) . '"';
}
if ( ! empty( $el_class ) ) {
	$classes .= ' ' . $el_class;
}
$output = '<' . $tag . $atts . ' class="cl-flipbox' . $classes . '"' . $inner_css . '>';

$helper_classes = ' easing_' . $animation_easing;
$helper_inner_css = '';
if ( ! empty( $animation_duration ) ) {
	$helper_inner_css .= '-webkit-transition-duration:' . $animation_duration . ';transition-duration:' . $animation_duration . ';';
}
if ( ! empty( $helper_inner_css ) ) {
	$helper_inner_css = ' style="' . esc_attr( $helper_inner_css ) . '"';
}
$output .= '<div class="cl-flipbox-h' . $helper_classes . '"' . $helper_inner_css . '>';
$front_inner_css = '';
if ( ! empty( $front_bgcolor ) ) {
	$front_inner_css .= 'background-color: ' . $front_bgcolor . ';';
}
if ( ! empty( $front_border_style ) AND $front_border_style != 'none' ) {
	$front_inner_css .= 'border: ' . $front_border_size . ' ' . $front_border_style . ' ' . $front_border_color;
}
if ( ! empty( $front_inner_css ) ) {
	$front_inner_css = ' style="' . esc_attr( $front_inner_css ) . '"';
}
$output .= '<div class="cl-flipbox-front"' . $front_inner_css . '>';
if ( ! empty( $front_icon ) ) {
	cl_enqueue_assets( 'font-awesome' );
	$output .= '<div class="cl-flipbox-front-icon style_' . $front_icon_style . ' size_' . $front_icon_size . '" ';
	$output .= 'style="';
	if ( ! empty( $front_icon_bgcolor ) ) {
		$output .= 'background-color:' . $front_icon_bgcolor . ';';
	}
	if ( $front_icon_style == 'circle' AND ! empty( $front_icon_color ) ) {
		$output .= 'border-color:' . $front_icon_color . ';';
	}
	$output .= '">';
	$output .= '<i class="' . cl_prepare_icon_class( $front_icon ) . '" style="';
	if ( ! empty( $front_icon_color ) ) {
		$output .= 'color:' . $front_icon_color . ';';
	}
	$output .= '"></i>';
	$output .= '</div>';
}
if ( ! empty( $front_image ) AND ( $front_image_html = wp_get_attachment_image( $front_image, 'medium' ) ) ) {
	$output .= '<div class="cl-flipbox-front-image">' . $front_image_html . '</div>';
}
if ( ! empty( $front_title ) ) {
	$output .= '<h4 class="cl-flipbox-front-title">' . $front_title . '</h4>';
}
if ( ! empty( $front_text ) ) {
	$output .= '<p class="cl-flipbox-front-text">' . $front_text . '</p>';
}
$output .= '</div>';

$back_inner_css = '';
if ( ! empty( $back_bgcolor ) ) {
	$back_inner_css .= 'background-color: ' . $back_bgcolor . ';';
}
if ( ! empty( $back_border_style ) AND $back_border_style != 'none' ) {
	$back_inner_css .= 'border: ' . $back_border_size . ' ' . $back_border_style . ' ' . $back_border_color;
}
if ( ! empty( $back_inner_css ) ) {
	$back_inner_css = ' style="' . esc_attr( $back_inner_css ) . '"';
}
$output .= '<div class="cl-flipbox-back"' . $back_inner_css . '>';
if ( ! empty( $back_image ) AND ( $back_image_html = wp_get_attachment_image( $back_image, 'medium' ) ) ) {
	$output .= '<div class="cl-flipbox-back-image">' . $back_image_html . '</div>';
}
if ( ! empty( $back_title ) ) {
	$output .= '<h4 class="cl-flipbox-back-title">' . $back_title . '</h4>';
}
if ( ! empty( $back_text ) ) {
	$output .= '<p class="cl-flipbox-back-text">' . $back_text . '</p>';
}
if ( ! empty( $back_button_label ) ) {
	$back_button_inner_css = '';
	if ( ! empty( $back_button_color ) ) {
		$back_button_inner_css .= 'color:' . $back_button_color . ';';
	}
	if ( ! empty( $back_button_bgcolor ) ) {
		$back_button_inner_css .= 'background-color:' . $back_button_bgcolor . ';';
	}
	if ( ! empty( $back_button_inner_css ) ) {
		$back_button_inner_css = ' style="' . $back_button_inner_css . '"';
	}
	$output .= '<div class="cl-flipbox-back-button size_' . $back_button_size . '"' . $back_button_inner_css . '>' . $back_button_label . '</div>';
}
$output .= '</div>';

$output .= '</div>';
$output .= '</' . $tag . '>';

echo $output;
