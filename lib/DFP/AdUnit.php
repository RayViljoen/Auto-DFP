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
	 * Application Name.
	 * @var string
	 */
	//private $name = 'Auto-DFP';
	
	public static function adUnit($size = FALSE)
	{
		if(!$size){
			return '<a href="'.$inst->plugin_url.'" target="_blank" style="padding:3px 5px; background:red; color:#000; font-weight:bold;">Please provide a ad size. e.g. 300x250</a> ';
		}
		
		// Create instance of self
		$inst = new self();
		return 'HELLO';
	}

}