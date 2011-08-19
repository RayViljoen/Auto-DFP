<?php
/*
Plugin Name: Auto DFP
Plugin URI: http://catn.com/community/plugins/
Description: Automate DFP for WordPress.
Version: 1.0
Author: Ray Viljoen
Author URI: http://fubra.com
*/

require_once 'api/src/Google/Api/Ads/Dfp/Lib/DfpUser.php';
require 'lib/DFP/Core.php';
require 'lib/DFP/Admin.php';

// Create DFP Admin Menu
add_action('admin_menu', function(){
  add_options_page(
  	'Auto DFP Settings',
  	'Auto DFP',
  	'manage_options',
  	'dfp-options',
  	function(){ Auto_DFP_Admin::menu(); });
});

