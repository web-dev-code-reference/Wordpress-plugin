<?php

/**
 * Plugin Name: Facebook Footer Link
 * Description: Ads a Facebook profile Link to the end of posts
 * Version: 1.0
 * Author: Alexies Iglesia
 */

 // Exit if Accessed Directly  so that it can't be accessed by other
 if (!defined('ABSPATH')){
    exit;
 }

// Global Options Variable
$ffl_options = get_option('ffl_settings');


 //Load Scripts. Plugin_dir_path reference our plugin folder
 require_once(plugin_dir_path(__File__).'/includes/facebook-footer-link-scripts.php');

//Load Content
 require_once(plugin_dir_path(__File__).'/includes/facebook-footer-link-content.php');

if (is_admin()){
     //Load Settings
    require_once(plugin_dir_path(__File__).'/includes/facebook-footer-link-settings.php');
}

