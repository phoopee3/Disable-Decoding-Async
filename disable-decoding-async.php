<?php 
/*
	Plugin Name: Disable Decoding Async
	Plugin URI: https://jasonlawton.com/plugins/disable-decoding-async
	Description: Activate this plugin to disable WordPress from adding decoding=async to your images.
	Tags: lazy load, lazyload, images, lazy, load
	Author: Jason Lawton
	Author URI: https://jasonlawton.com/
	Version: 1.0.0
	Requires PHP: 5.6.20
	License: GPL v2 or later
*/

if (!defined('ABSPATH')) die();

function disable_wp_img_tag_add_decoding_attr($attr, $attachment = null) {
	return false;
}
add_filter('wp_img_tag_add_decoding_attr', 'disable_wp_img_tag_add_decoding_attr');