<?php
session_start();

function nsb_add_func(){
global $nsb_options;
$bar_color = $nsb_options['bar_color'];
$bar_width = $nsb_options['bar_width'];	
// Register the script

wp_enqueue_script('nsb_handle', plugins_url() . '/nice-scrollbar/js/myscript.js');

// Localize the script with new data
$nsb_translation_array = array(
	'bar_color' => __( $bar_color , 'plugin-domain' ),
	'bar_width' => __( $bar_width , 'plugin-domain' ),
);
wp_localize_script( 'nsb_handle', 'nsb_object', $nsb_translation_array );

// Enqueued script with localized data.
wp_enqueue_script( 'nsb_handle' );

}

add_action('wp_enqueue_scripts', 'nsb_add_func');