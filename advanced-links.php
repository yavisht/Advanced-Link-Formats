<?php
/*
Plugin Name: Advanced Link Styling
Plugin URI: http://www.ykat.com.au
Description: Custom link styling options. Made for the original theme.
Version: 1
Author: Yavisht Katgara
Author URI: http://www.ykat.com.au
Text Domain: advanced-link-styling
Domain Path: /languages
*/

/* Adding "Formats" drop-down */
add_filter( 'mce_buttons_2', 'tuts_mce_editor_buttons' );
 
function tuts_mce_editor_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

/* Add options in dropdown */
add_filter( 'tiny_mce_before_init', 'tuts_mce_before_init' );

function tuts_mce_before_init( $settings ) {

    $style_formats = array(
        array(
            'title' => 'Document Link',
			'block' => 'div',
            'classes' => 'document_link',
			'wrapper' => true
            ),
        array(
            'title' => 'Testimonial',
            'selector' => 'p',
            'classes' => 'testimonial',
        ),
        array(
            'title' => 'Warning Box',
            'block' => 'div',
            'classes' => 'warning box',
            'wrapper' => true
        ),
        array(
            'title' => 'Red Uppercase Text',
            'inline' => 'span',
            'styles' => array(
                'color' => '#ff0000',
                'fontWeight' => 'bold',
                'textTransform' => 'uppercase'
            )
        )
    );

    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
}
?>
