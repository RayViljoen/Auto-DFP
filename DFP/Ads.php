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
/* 	private $adTag; */
	
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
/*
	public static function adUnit( $name, $size )
	{

		if( $size && $name ){
			
			// Remove spaces for use as string in adUnit name.
			$size = str_replace( ' ', '', $size );
			
			// Prepare name for adUnit
			$name = str_replace( ' ', '_', $name );
						
			// Format size param.
			$sizeSplit = explode('x', strtolower($size), 2);
			if(isset($size[0])){ $adSize[] = intval($size[0]); }
			if(isset($size[1])){ $adSize[] = intval($size[1]); }
		
			// If size is valid, create an instance of self and return unit content.
			if(count($adSize) == 2){

				// Instance of self
				$inst = new self();
				
				// Reference instance of Auto_DFP_Data
				$inst->data = new Auto_DFP_Data();
				
				// Return JS tag to display ad
				return $inst->generateTag( $name, $size );
			}
		}
		// If Size or Name is invalid, display error in tag.
		return '<p style="padding:3px 7px; text-align:center; background:red; color:#fff;">Please provide a valid ad name & size. <a style="color:#fff; font-weight:bold" href="'.self::$pluginURL.'" target="_blank" >See Instructions</a></p>';
	}
*/
	
	
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
	 * Called remotely via AJAX notification.
	 * Creates new pending ad slot.
	 * @param void.
	 * @return void
	 */
	public static function tagNewSlot()
	{
		
		$page = $_GET['dfp_tag_page'];
		$size = $_GET['new_dfp_tag'];
	
	}
	
	
	/**
	 * Creates head tag for all existing page adUnits.
	 * Also used to reference existing page adUnits to check for changes.
	 * @param void.
	 * @return string
	 */
	public function jsAdLoader()
	{			
		// HEADER JS
		add_action('wp_head', function(){
			
			global $post;
			
			// Request all existing adSlots
			
				
			$adUnitName = NULL;
			$publisherID = 'ca-pub-5419175785675578';
			
			// Load dfp Scripts and include global $post variables as JS
			echo("
				<script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'></script>
				<script type='text/javascript'>
					GS_googleAddAdSenseService('".$publisherID."');
					GS_googleEnableAllServices();
					GA_googleAddSlot('".$publisherID."', '".$adUnitName."');
					GA_googleFetchAds();
					var wpPageID = ".$post->ID.";
					var wpPageName = '".$post->post_name."';
				</script>
			");
		});
		
		// FOOTER JS
		add_action('wp_footer', function(){
			global $post;
			
			// jsLoader script path
			$jsLoaderScript = plugins_url( '/js/adLoader.js', __FILE__ );
			
			// Load jQuery if not already
			wp_enqueue_script( 'jquery' );
			
			// Create JS client script
			echo "<script type='text/javascript' src='".$jsLoaderScript."' ></script>";
	
		});
	}

}