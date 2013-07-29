<?php
/*
Plugin Name: Headway Block: Image
Plugin URI: http://www.headway101.com/
Description: The "Image Block" lets you easily add images to your website.
Version: 1.1
Author: Headway101
Author URI: http://www.headway101.com
License: GNU GPL v2
*/
/*===================================*/
/* REGISTER BLOCK AND BLOCK FILES    */
/*===================================*/
function image_block_register() {

	if ( !class_exists('Headway') )
		return;
	require_once 'block.php';
	require_once 'block-options.php';
	return headway_register_block('HeadwayImageBlock', plugins_url(false, __FILE__));

}
add_action('after_setup_theme', 'image_block_register');
/*===================================*/
/* HEADWAY EXTEND UPDATE INFORMATION */
/*===================================*/
define('IMAGE_BLOCK_VERSION', '1.1');
function image_block_extend_updater() {

	if ( !class_exists('HeadwayUpdaterAPI') )
		return;

	$updater = new HeadwayUpdaterAPI(array(
		'slug' => 'image-block',
		'path' => plugin_basename(__FILE__),
		'name' => 'Headway Block: Image',
		'type' => 'block',
		'current_version' => IMAGE_BLOCK_VERSION
	));

}
add_action('init', 'image_block_extend_updater');