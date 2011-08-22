<?php

/**
 * Outputs and processes admin menu.
 * @package Auto DFP
 * @author Ray Viljoen
 */
class Auto_DFP_Admin extends Auto_DFP
{
	
	/**
	 * Whether to display the 'settings saved' message on the admin page.
	 * @var bool
	 */
	private $saved = FALSE;
	
	
	//=============================================================
	//       					METHODS
	//=============================================================


	// Called from admin hook.
	// Processes and outputs admin menu.
	public function __construct()
	{	
		if(isset($_POST['dfplogout'])){
			self::logout();
			// set message to confirm logout - TODO --------------------
		}else{
			// Try Login
			$this->loggedIn = ($this->login()) ? TRUE : FALSE;
		}
		
		//========= OUTPUT ADMIN PAGE =========
		
		// Print Admin Stylesheet
		echo '<link rel="stylesheet" type="text/css" href="' .Auto_DFP::pluginPath().'/lib/Admin/style.css">';
		// Check if user is logged in and display appropriate admin page.
		if( $this->loggedIn ){
			include dirname(__FILE__) . '/../Admin/settings.php';
		}else{
			include dirname(__FILE__) . '/../Admin/login.php';
		}

	}
	
	
	
}