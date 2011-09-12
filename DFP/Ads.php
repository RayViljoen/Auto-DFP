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
	
	
	/**
	 * Return dfp name structure from page ID.
	 * @param number $id.
	 * @return string
	 */
	private function getNameStructure(){
		
		global $post;
		
		// Build adUnit name
		$adUnit = get_bloginfo('name');
		$ancestors = $post->ancestors;
		
		// If page is not top level, build ad name based on ancestors
		if(count($ancestors)){
			$ancestors = array_reverse($ancestors);
			foreach($ancestors as $id){
				$adUnit .= '_'.get_page($id)->post_name;
			}
		}elseif($post->post_parent){
			
			$parent = get_page($post->post_parent)->post_name;
			$adUnit .= '_'.$parent;
		}
		
		$pageName = (!is_page()) ? 'blog' : $post->post_name;
		
		$adUnit .= '_'.$pageName.'_'.$_GET['dfp_tag_size'];
		
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
		
		// Check if we are dealing with the blog
		$dbID = (is_page()) ? $post->ID : get_option('page_for_posts');
						
		// Get all ad slots for page
		$adSlots = $this->getSlotsFormatted($dbID);

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
	
	
	/**
	 * Inserts inline tags to display ad.
	 * @param string $size.
	 * @return string
	 */
	public function  adLoaderInline($size)
	{	
		global $post;
				
		$name = $this->getNameStructure();
		$name .= $size;
		
		return "<script> GA_googleFillSlot('".$name."'); </script>";
	}
	
}