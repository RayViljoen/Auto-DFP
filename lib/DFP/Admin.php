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
	
	/**
	 * List of admin pages.
	 * @var array
	 */
	private $menu_items = array(
		'Inventory',
		'Ads',
		'Users'
	);
		
	
	//=============================================================
	//       					METHODS
	//=============================================================


	/**
	 * Called from admin hook. Processes and outputs admin menu. 
	 * @param void
	 * @return void
	 */
	public function __construct()
	{	
		// Get user Info
		$wpUser = wp_get_current_user();
		$wpUser = $wpUser->ID;
		
		// Check if user requested logout
		if(isset($_GET['dfp_logout'])){
			// Record Logout
			self::log('USER LOGOUT: '.'wp_user '.$wpUser );
			self::logout();
			// set message to confirm logout - TODO --------------------
		}else{
			// Try Login
			$this->loggedIn = ($this->login()) ? TRUE : FALSE;
		}
		//=====================================
		//			 OUTPUT ADMIN PAGE
		//=====================================
		
		// Print Admin Stylesheet
		echo '<link rel="stylesheet" type="text/css" href="' .Auto_DFP::pluginPath().'/lib/UI/style.css">';
		// Check if user is logged in and display appropriate admin page.
		if( $this->loggedIn ){
			include dirname(__FILE__) . '/../UI/pages/settings.php';
		}else{
			include dirname(__FILE__) . '/../UI/pages/login.php';
		}
	}
	
	
	/**
	 * Called from admin page. Prints page header and menu.
	 * @param void
	 * @return void
	 */
	protected function adminHeader()
	{
		echo '<div id="dfp" class="wrap">';
		echo '<div class="icon32 dfp_logo"><br></div>';
		echo '<h2>'.__( 'Auto DFP', 'menu-test' ).'</h2>';
		
		if($this->saved){
			echo '<div class="updated"><p><strong>';
			_e('settings saved.', 'menu-test' );
			echo '</strong></p></div>';
		};
		echo '<div class="dfp settings">';
		
		$default = (!isset($_GET['dfp_menu'])) ? 'class="active"' : NULL;
		
		echo '<ul id="dfp_menu">';
		echo '<li '.$default.'><a href="?page=dfp_options" >Default</a></li>';

		foreach($this->menu_items as $tab){
			$active = (isset($_GET['dfp_menu']) && $_GET['dfp_menu'] == strtolower($tab)) ? 'class="active"' : NULL;
			echo '<li '.$active.'><a href="?page=dfp_options&dfp_menu='.strtolower($tab).'" >'.$tab.'</a></li>';
		}
		echo '<li class="logout" ><a href="?page=dfp_options&dfp_logout=1" >Log Out</a></li>';
		echo '</ul>';

	}
	
	
	/**
	 * Called from admin page. Prints page footer.
	 * @param void
	 * @return void
	 */
	protected function adminFooter(){
		echo '</div></div>';
	}
}