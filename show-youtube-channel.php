
<?php
/*
Plugin Name: show-youtube-channel
Plugin URI: https://github.com/vestigialcode/show-youtube-channel
Description: Display YouTube sub button and count
Version: 2020.3.1
Author: vestigialcode
Author URI: https://github.com/vestigialcode
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/inc/scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/inc/class.php');

// Register Widget
function register_youtubesubs(){
  register_widget('Youtube_Subs_Widget');
}

// Hook in function
add_action('widgets_init', 'register_youtubesubs')
