<?php
/*
Plugin Name: Nice Scrollbar
Plugin URI: http://plugins.w3helps.com/nice-scrollbar
Description: Add nice scrollbar to your wordpress website. It is very dynamic. You can easily change your scrollbar size, color from wordpress dashboard.
Author: Amit Sarker
Author URI: http://amitsarker.com
Version: 1.1
*/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Global Options Variable
$nsb_options = get_option('nsb_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/nice-scrollbar-scripts.php');

// Load plugin implementation
require_once(plugin_dir_path(__FILE__).'/includes/nice-scrollbar-content.php');

if(is_admin()){
	// Load Settings
	require_once(plugin_dir_path(__FILE__).'/includes/nice-scrollbar-settings.php');
}