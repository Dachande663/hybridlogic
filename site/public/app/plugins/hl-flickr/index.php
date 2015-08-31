<?php
/*
Plugin Name: HL Flickr
Plugin URI: http://hybridlogic.co.uk
Description: Load and display your Flickr photos.
Version: 1.0.0
Author: Luke Lanchester
Author URI: http://hybridlogic.co.uk
Created: 2015-08-31
Updated: 2015-08-31
Requires: slab-core
*/


// Define
define('HL_FLICKR_INIT', true);
define('HL_FLICKR_DIR', plugin_dir_path(__FILE__));
define('HL_FLICKR_URL', plugin_dir_url(__FILE__));


// Init
add_action('slab_loaded', function($slab){

	$slab->autoloader->registerNamespace('HybridLogic\Photos', HL_FLICKR_DIR . 'src');

	$slab->router->get('photos', 'HybridLogic\Photos\Controller\FlickrController@getPhotos');
	$slab->router->get('photos/{id}', 'HybridLogic\Photos\Controller\FlickrController@getPhoto');

});
