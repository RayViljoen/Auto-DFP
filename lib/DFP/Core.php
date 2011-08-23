<?php

/**
 * Main class for handling services, login etc.
 * @package Auto DFP
 * @author Ray Viljoen
 */

class Auto_DFP
{
	/**
	 * Application Name.
	 * @var string
	 */
	private $name = 'Auto-DFP';
	
	/**
	 * Plugin URL links errors to help pages etc.
	 * @var string
	 */
	protected $pluginURL = 'http://wordpress.org/extend/plugins/Auto-DFP/';

	/**
	 * DFP API Version.
	 * @var string
	 */
	private $api = 'v201107';

	/**
	 * DFP User Instance.
	 * @var object
	 */
	protected $user;

	
	/**
	 * DFP service being used.
	 * @var object
	 */
	protected $service;

	
	/**
	 * User logged in status.
	 * @var BOOL
	 */
	protected $loggedIn = FALSE;
	

	//=============================================================
	//       					METHODS
	//=============================================================


	/**
	 * Handles DFP api access auth & account login.
	 * Creates autorised service object.
	 * @param [string DFP Service]
	 * @return object
	 */
	protected function login($service = FALSE)
	{	
		// Get user Info
		$wpUser = wp_get_current_user();
		$wpUser = $wpUser->ID;
		
		// Get wp url
		$wpURL = get_bloginfo('url');
		
		if(isset($_POST['dfp_password']) && isset($_POST['dfp_username']) ){
			$password = $_POST['dfp_password'];
			$username = $_POST['dfp_username'];
			// Optional Network ID
			$networkid = (isset($_POST['dfp_network'])) ? $_POST['dfp_network'] : NULL;
			$authToken = NULL;
			
		// Check if user id already authenticated through session.
		}elseif(isset($_SESSION['DFP']['authToken']) && isset($_SESSION['DFP']['userID'])){
			// Make sure of session
			if( ($wpUser == $_SESSION['DFP']['userID']) && ($wpURL == $_SESSION['DFP']['url']) ){
				$username = $_SESSION['DFP']['username'];
				$authToken = $_SESSION['DFP']['authToken'];
				// Optional Network ID
				$networkid = isset($_SESSION['DFP']['networkID']) ? $_SESSION['DFP']['networkID'] : NULL;
				$password = NULL;		
			}
		}else{
			// Log exception
			self::log('BLANK LOGIN: wp_user '.$wpUser);
			return FALSE;
		}
		// Try Login
		try {
			// Create new user
			$this->user = new DfpUser( NULL, $username, $password, $this->name, $networkid, NULL, $authToken );			
			
			// Get authtoken
			$authToken = $this->user->GetAuthToken();
			
			// Update session
			$this->setSession($username, $networkid, $authToken, $wpUser, $wpURL);
			
			// Log successful user login
			if($password != NULL){
				self::log('SUCCESSFUL LOGIN: '.'wp_user '.$wpUser );
			}
			
			// Create requested service			
			if($service){
				$this->getService($service);
			}
			
			return $authToken;

		} catch (Exception $e) {
			// Remove Session data
			self::logout();
			// Log exception
			self::log('LOGIN ERROR: '.$e->GetMessage());
			return FALSE;
		}
	}
	
	
	/**
	 * Accesses one of the DFP Services.
	 * @param string $serviceType options:
			CompanyService
			CreativeService
			CustomTargetingService
			ForecastService
			InventoryService
			LabelService
			LineItemCreativeAssoci...
			LineItemService
			NetworkService
			OrderService
			PlacementService
			PublisherQueryLanguage...
			ReportService
			UserService
	 */
	protected function getService($serviceType)
	{
		$this->service = $this->user->GetService($serviceType, $this->api);
	}
	
	
	/**
	 * Updates session vars.
	 * @param string $username, string $networkid, string $authToken, number $wpUser, string $wpURL
	 * @return void
	 */
	private function setSession($username, $networkid, $authToken, $wpUser, $wpURL)
	{
		$_SESSION['DFP']['username'] = $username;
		$_SESSION['DFP']['authToken'] = $authToken;
		$_SESSION['DFP']['userID'] = $wpUser;
		$_SESSION['DFP']['networkID'] = $networkid;
		$_SESSION['DFP']['url'] = $wpURL;
	}
	
	
	
	
	/**
	 * Return path to plugin.
	 * @return string
	 */
	public static function pluginPath()
	{ 
		return( plugins_url('/', dirname(__DIR__)) );
	}
	

	/**
	 * Get all dfp ad units.
	 * @param void
	 * @return object
	 */
	private function GetAllAdUnits() {
		// Get the InventoryService.
		$inventoryService = $this->user->GetService('InventoryService', $this->api);

		// Create array to hold all ad units.
		$adUnits = array();

		// Set defaults for page and statement.
		$page = new AdUnitPage();
		$filterStatement = new Statement();
		$offset = 0;

		do {
			// Create a statement to get all ad units.
			$filterStatement->query = 'LIMIT 500 OFFSET ' . $offset;

			// Get creatives by statement.
			$page = $inventoryService->getAdUnitsByStatement($filterStatement);

			if (isset($page->results)) {
				$adUnits = array_merge($adUnits, $page->results);
			}

			$offset += 500;
		} while ($offset < $page->totalResultSetSize);

		return $adUnits;
	}
	
	
	/**
	 * Log user out by destroying session.
	 * @param void
	 * @return BOOL
	 */
	protected static function logout()
	{
		return session_destroy();
	}
	
	
	/**
	 * Logs message to daily log with timestamp.
	 * @param string $message
	 * @return void
	 */
	protected static function log($message = NULL)
	{	
		$path = dirname(__FILE__) . '/../../logs/'.date( "d-m-y" );
		$logFile = fopen($path, 'a');
		$message = '('.time().') '.$message."\n";
		fwrite($logFile, $message);
		fclose($logFile);
	}

}