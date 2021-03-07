<?php

/**
 * Plugin Name: Social Links
 * Description: Adds social icons with links to profiles
 * Version: 1.0
 * Author: Evangelos Athanasiadis
 */


// Exit if Accesses directly
if(!defined('ABSPATH')) {
	exit;
}

// Load scripts
require_once(plugin_dir_path(__FILE__). '/includes/social-links-scripts.php');

// Load class
require_once(plugin_dir_path(__FILE__). '/includes/social-links-class.php');