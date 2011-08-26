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

require_once 'api/src/Google/Api/Ads/Dfp/Lib/DfpUser.php';
require 'DFP/Data.php';
require 'DFP/Admin.php';
require 'DFP/Ads.php';


// Plugin setup on activation
register_activation_hook( __FILE__, array('Auto_DFP_Data', 'setup'));


// Create DFP Admin Menu
add_action('admin_menu', function(){
  add_options_page(
  	'Auto DFP Settings',
  	'Auto DFP',
  	'manage_options',
  	'dfp_options',
  	function(){ new Auto_DFP_Admin(); });
});


// ========================================
// 		TRY CALLING THE NEXT 2 functions WITH 1 INSATNCE ( add_action scope issue )
// ========================================

// Load JS to load and create ads. - HEADER
add_action('wp_head', function(){	
	$inst = new Auto_DFP_Ads();
	$inst->adLoaderHeader();
});


// Load JS to load and create ads. - FOOTER
add_action('wp_footer', function(){	
	$inst = new Auto_DFP_Ads();
	$inst->adLoaderFooter();
});


// Check for AJAX notification of unlisted adUnit
if(isset($_GET['new_dfp_tag'])){
	Auto_DFP_Ads::tagNewSlot();
}