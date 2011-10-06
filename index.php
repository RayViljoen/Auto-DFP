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

// Make sure session is started
@session_start();

require_once 'api/src/Google/Api/Ads/Dfp/Lib/DfpUser.php';
require 'DFP/Data.php';
require 'DFP/Admin.php';
require 'DFP/Ads.php';


// Plugin setup on activation
register_activation_hook( __FILE__, array('Auto_DFP_Data', 'setup'));


// TEMP MENU DISABLED AS IT WILL ONLY CAUSE =(

// Create DFP Admin Menu

add_action('admin_menu', function(){
  add_options_page(
  	'Auto DFP Settings',
  	'Auto DFP',
  	'manage_options',
  	'dfp_options',
  	function(){ new Auto_DFP_Admin(); });
});



// Load JS to load and create ads. - HEADER
add_action('wp_head', function(){
	$inst = new Auto_DFP_Ads();
	$inst->adLoaderHeader();
});

// Check for AJAX notification of unlisted adUnit
if(isset($_GET['new_dfp_tag'])){
	Auto_DFP_Data::createSlotAsync();
}

// Check for AJAX delete adunit.
if(isset($_GET['dfp_remove_slot'])){
	Auto_DFP_Data::removeSlotAsync();
}

// Shortcode and function for ad include
add_shortcode('dfp', 'dfpTag');

function dfpTag($attr, $class=null){
	
	// Check if shortcode
	if(is_array($attr)){
	
		$size = isset($attr['size']) ? $attr['size'] : null ;
		$class = isset($attr['class']) ? $attr['class'] : null ;
		
	}else{ $size = $attr; }
	
	if(!$size){
		$err  = '<p style=" display:inline; color: white; padding: 3px 5px;';
		$err .= 'font-weight:bold; background: red;">Missing ad size. e.g. 120x60</p>';
				
		return $err;
	}

	$inst = new Auto_DFP_Ads();
	$tag = $inst->adLoaderInline($size);
	
	// Also wrap span with dfp attribute. Allows ad slots to be spidered from admin.
	$tag = '<div dfp="'.$size.'" class="'.$class.'" >'.$tag.'</div>';
	return $tag;
}
