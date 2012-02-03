<?php
/*
Plugin Name: CF Expiring Content Shortcode 
Plugin URI: http://crowdfavorite.com/wordpress/plugins/expiring-content-shortcode 
Description: Allows you to designate content in a post or page to expire on a given date. Example usage: [expires on="2010-01-01"]Your content here[/expires]
Version: 1.0 
Author: Crowd Favorite
Author URI: http://crowdfavorite.com
*/

// ini_set('display_errors', '1'); ini_set('error_reporting', E_ALL);

function cfecs_shortcode($args = array(), $content = '') {
	extract(shortcode_atts(
		array(
			'on' => 'tomorrow', // tomorrow never comes
		),
		$args
	));
	if (strtotime($on) > time()) {
		return $content;
	}
	return '';
}
add_shortcode('expires', 'cfecs_shortcode');

//a:23:{s:11:"plugin_name";s:26:"Expiring Content Shortcode";s:10:"plugin_uri";s:69:"http://crowdfavorite.com/wordpress/plugins/expiring-content-shortcode";s:18:"plugin_description";s:76:"Allows you to designate content in a post or page to expire on a given date.";s:14:"plugin_version";s:3:"1.0";s:6:"prefix";s:5:"cfexs";s:12:"localization";s:26:"expiring-content-shortcode";s:14:"settings_title";N;s:13:"settings_link";N;s:4:"init";b:0;s:7:"install";b:0;s:9:"post_edit";b:0;s:12:"comment_edit";b:0;s:6:"jquery";b:0;s:6:"wp_css";b:0;s:5:"wp_js";b:0;s:9:"admin_css";b:0;s:8:"admin_js";b:0;s:8:"meta_box";b:0;s:15:"request_handler";b:0;s:6:"snoopy";b:0;s:11:"setting_cat";b:0;s:14:"setting_author";b:0;s:11:"custom_urls";b:0;}

?>