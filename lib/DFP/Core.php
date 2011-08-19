<?php

// MAIN AUTO DFP CLASS
class Auto_DFP
{	
	/**
	 * Plugin path.
	 * @var string
	 */
	protected $pluginPath;
		
	//=============================================================
	//							METHODS
	//=============================================================
	
	// Core construct
	public function __construct()
	{
		$this->pluginPath = plugins_url(  '/', dirname(__DIR__) );
	}
	
		
	// Handles DFP auth.
	private function login()
	{	
		// Holds login details
		require( '../dev_config.php' );
		try {
			// Get DfpUser from credentials in "../auth.ini"
			// relative to the DfpUser.php file's directory.
			$user = new DfpUser( NULL, $username, $password, $networkid );

		} catch (Exception $e) {
			print $e->getMessage() . "\n";
		}
	}
}