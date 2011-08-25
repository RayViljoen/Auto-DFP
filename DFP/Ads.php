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
	 * DFP tag for outputting ad.
	 * @var string
	 */
	private $adTag;
	
	/**
	 * Plugin URL links errors to help pages etc.
	 * @var string
	 */
	private static $pluginURL = 'http://wordpress.org/extend/plugins/Auto-DFP/';

	

	//=============================================================
	//       					METHODS
	//=============================================================


	/**
	 * Handles site adUnit.
	 * Either creates slot or outputs existing ad.
	 * @param string $size eg. 250x100.
	 * @return string
	 */
	public static function adUnit($size)
	{
		if( $size ){
		// Format size param.
		$size = explode('x', strtolower($size), 2);
		if(isset($size[0])){ $adSize[] = intval($size[0]); }
		if(isset($size[1])){ $adSize[] = intval($size[1]); }
		
		// If size is valid, create an instance of self and return unit content.
			if(count($adSize) == 2){
				
				// Instance of self
				$inst = new self($adSize);
				
				// Reference instance of Auto_DFP_Data
				$inst->data = new Auto_DFP_Data();
				
				return 'YES'; // RETURN AD CODE HERE ----- 
			}
		}
		// If Size didn't match and ad content wasn't returned, display error in tag.
		return '<a href="'.self::$pluginURL.'" target="_blank" style="padding:3px 7px; background:red; color:#fff; font-weight:bold;">Please provide a ad size. e.g. 300x250</a> ';
	}
	
	
	/**
	 * adUnit constructor.
	 * @param string $size.
	 * @return string
	 */
	private function __construct()
	{
		
		
		
	}

}