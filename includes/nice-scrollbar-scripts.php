<?php
// Add Scripts
function nsb_add_scripts(){
	// if(is_admin()){
		wp_enqueue_script('jquery');
		
	// }
	
	wp_enqueue_script('nice-scroll-min-js', plugins_url() . '/nice-scrollbar/js/jquery.nicescroll.min.js');
	wp_enqueue_script('nsb-main-script', plugins_url() . '/nice-scrollbar/js/main.js');
}

add_action('wp_enqueue_scripts', 'nsb_add_scripts');

//color picker
add_action( 'admin_enqueue_scripts', 'nsb_admin_scripts' );
function nsb_admin_scripts($hook) {
 wp_enqueue_style('nsb-main-style', plugins_url() . '/nice-scrollbar/css/style.css');
	wp_enqueue_style('nsb-jquery-ui', plugins_url() . '/nice-scrollbar/css/jquery-ui.css');
 wp_enqueue_style( 'wp-color-picker' );
wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-slider');
 wp_enqueue_script( 'active-wp-jquery', plugins_url().'/nice-scrollbar/js/active-wp-jquery-ui.js', array( 'wp-color-picker','jquery' ), false, true );
}

