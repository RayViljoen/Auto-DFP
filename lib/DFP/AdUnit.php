<?php

/**
 * Class get called from either an ad shortcode or a themed template_tag.
 * Handles output/creation of new adUnits.
 * @package Auto DFP
 * @author Ray Viljoen
 */

class Auto_DFP_AdUnit extends Auto_DFP
{
	/**
	 * Size of adUnit eg. 250x100.
	 * @var string
	 */
	private $adSize;
	
	/**
	 * DFP tag for outputting ad.
	 * @var string
	 */
	private $adTag;
	

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