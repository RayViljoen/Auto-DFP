<?php
/*
Plugin Name: Auto DFP
Plugin URI: http://catn.com/community/plugins/
Description: Automate DFP for WordPress.
Version: 1.0
Author: Ray Viljoen
Author URI: http://fubra.com
*/

error_reporting( E_ALL);

session_start();
session_regenerate_id();

require_once 'api/src/Google/Api/Ads/Dfp/Lib/DfpUser.php';
require 'lib/DFP/Core.php';
require 'lib/DFP/Admin.php';
require 'lib/DFP/AdUnit.php';

// Create DFP Admin Menu
add_action('admin_menu', function(){
  add_options_page(
  	'Auto DFP Settings',
  	'Auto DFP',
  	'manage_options',
  	'dfp_options',
  	function(){ new Auto_DFP_Admin(); });
});


// Shortcode calls Auto_DFP_AdUnit to output ad.
add_shortcode( 'DFP_AD', function($size){
	return Auto_DFP_AdUnit::adUnit($size);
});

// Alternitive to shortcode for use in themes
function DFP_AD($size){
	Auto_DFP_AdUnit::adUnit($size);
}