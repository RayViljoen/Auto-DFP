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
	 * Size of adUnit eg. 250x100.
	 * @var string
	 */
	private $adSize;
	
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
	public static function adUnit($size = FALSE)
	{
		// Format size.
		$size = str_replace(' ', '', $size);
		preg_match('/[0-9]{1,4}x[0-9]{1,4}/', $size, $validSize);
		$validSize = $validSize[0];
		
		// If a valid size, create an instance of self and return unit content.
		if(isset($validSize)){
			
			// Instance of self
			$inst = new self($validSize);
			
			
			// RETURN AD CONTENT HERE ---------------- TODO ---------------- FINAL
			/* TEMP */ return $inst->adSize; /* TEMP */
			
			
		}
		// If Size didn't match and ad content wasn't returned, display error in tag.
		return '<a href="'.self::$pluginURL.'" target="_blank" style="padding:3px 7px; background:red; color:#fff; font-weight:bold;">Please provide a ad size. e.g. 300x250</a> ';
	}
	
	
	/**
	 * adUnit constructor.
	 * @param string $size.
	 * @return string
	 */
	private function __construct($size)
	{
		$this->adSize = $size;
	}

}