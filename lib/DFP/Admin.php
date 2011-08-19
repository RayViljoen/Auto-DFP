<?php

// HANDLES ADMIN MENU.
class Auto_DFP_Admin extends Auto_DFP
{
	
	/**
	 * Whether to display the 'settings saved' message on the admin page.
	 * @var bool
	 */
	private $saved = FALSE;

	
	// Called from admin hook.
	// Creates new instance of self & processes and outputs admin menu.
	public static function menu()
	{	
		// Create new Auto DFP instance
		$dfp = new self();
		
		// Show Admin Menu
		$dfp->getMenuPage();
	}
	
	private function getMenuPage()
	{
		include dirname(__FILE__) . '/../Admin/page.php';
	}
	
}