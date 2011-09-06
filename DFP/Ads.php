<?php

/**
 * Client side ad handling.
 * Called from either theme function DFP_AD() or shortcode DFP_AD.
 * Requires 'size' param.
 * @package Auto DFP
 * @author Ray Viljoen
 */

class Auto_DFP_Ads
{	
	/**
	 * Reference to Auto_DFP_Data instance.
	 * @var object
	 */
	private $data;
	
	
	/**
	 * Plugin URL links errors to help pages etc.
	 * @var string
	 */
	private static $pluginURL = 'http://wordpress.org/extend/plugins/Auto-DFP/';

	
	//=============================================================
	//       					METHODS
	//=============================================================

	
	/**
	 * adUnit constructor.
	 * @param string $size.
	 * @return string
	 */
	public function __construct()
	{
		// Reference instance of Auto_DFP_Data
		$this->data = new Auto_DFP_Data();
	}
	
	
	/**
	 * Creates array of adSlots for a specific page ID.
	 * @param number $id.
	 * @return array
	 */
	private function getSlotsFormatted($id)
	{	
		// Request all existing adSlots for curretn page
		$slotsObj = $this->data->getPageSlots($id);
		
		// Create adUnit array - also used as object in js
		$adSlots = array();
		foreach( $slotsObj as $slot ){
			$adSlots[$slot->size_w.'x'.$slot->size_h] = array(
				'name'  => $slot->adunit,
				'status' => $slot->local_status
			);
		}		
		return $adSlots;
	}
	
	
	private function getNameStructure(){
		
		global $post;
		// Build adUnit name
		$pageAtts = get_page( $post->ID );
		$adUnit = get_bloginfo('name');
		$ancestors = $pageAtts->ancestors;
		
		// If page is not top level, build ad name based on ancestors
		if(count($ancestors)){
			$ancestors = array_reverse($ancestors);
			foreach($ancestors as $id){
				$adUnit .= '_'.get_page($id)->post_name;
			}
		}elseif($pageAtts->post_parent){
			
			$parent = get_page($pageAtts->post_parent)->post_name;
			$adUnit .= '_'.$parent;
		}
		$adUnit .= '_'.$pageAtts->post_name.'_'.$_GET['dfp_tag_size'];
		
		// Make sure there's no spaces
		$adUnit = str_replace(' ', '_', $adUnit);
		
		
		
		return $adUnit;
	}
	
	
	/**
	 * Loads in header javascript.
	 * @param void.
	 * @return string
	 */
	public function adLoaderHeader()
	{			
		global $post;
										
		$adUnitName = NULL;
		$publisherID = get_option('dfp_prop_code');
		
		// Get all ad slots for page
		$adSlots = $this->getSlotsFormatted($post->ID);
						
		// Load dfp Scripts and include global $post variables as JS
		echo "<script type='text/javascript'  src='http://partner.googleadservices.com/gampad/google_service.js'></script>";
		echo "<script>GS_googleAddAdSenseService('ca-pub-5419175785675578'); GS_googleEnableAllServices();</script>";
		echo "<script type='text/javascript'>";
	
		// print individual slot loaders
		foreach( $adSlots as $slot ){
			// Check slot has been approved & print hedaer unit
			if( $slot['status'] == 'active' ){
				echo "GA_googleAddSlot('".$publisherID."', '".$slot['name']."');";
			}
		}
		echo "</script>";
		echo "<script type='text/javascript'>GA_googleFetchAds();</script>";			
	}
	
	
	public function  adLoaderInline($size)
	{
		$name = $this->getNameStructure();
		$name .= $size;
		
		return "<script> GA_googleFillSlot('".$name."'); </script>";
	}
	
	
	/**
	 * Loads in footer javascript.
	 * @param void.
	 * @return string
	 */
	public function adLoaderFooter()
	{
		global $post;
		
		$name = $this->getNameStructure();
		
		// Get all ad slots for page
		$adSlots = $this->getSlotsFormatted($post->ID);
		
		// ready array for use in js
		$jsAdSlots = json_encode($adSlots);
		
		// Auto DFP JS path
		$jsPath = plugins_url( '/js/', __FILE__ );
				
		// Load jQuery if not already
	//	wp_enqueue_script( 'jquery' );
		
		// Include jsLoader & call with page id
/*
		echo "<script type='text/javascript' src='".$jsPath."writeCapture.js' ></script>";
		echo "<script type='text/javascript' src='".$jsPath."jquery.writeCapture.js' ></script>";
		echo "<script type='text/javascript' src='".$jsPath."adLoader.js' ></script>";
		echo "<script type='text/javascript'>jQuery(function(){ jsLoader(".$post->ID.", ".$jsAdSlots."); });</script>";
*/
	}

}