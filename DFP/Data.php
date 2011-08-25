<?php

/**
 * Handles all database functions.
 * @package Auto DFP
 * @author Ray Viljoen
 */

class Auto_DFP_Data
{
	/**
	 * Application Name.
	 * @var string
	 */
	private $tableName = 'autodfp';
	

	//=============================================================
	//       					METHODS
	//=============================================================
	
	
	/**
	 * Class constructor. 
	 * @param void
	 * @return void
	 */
	public function __construct()
	{
		global $wpdb;
		$this->tableName = 	$wpdb->prefix.$this->tableName;
	}


	/**
	 * Creates adUnit slot in DB. 
	 * @param  string $adUnit, array $size (width, height), string $url, [BOOL $approved]
	 * @return void
	 */
	public function createSlot( $adUnit, $size, $url, $approved = FALSE )
	{
		global $wpdb;

		// Check if default add status has been changed
		$status = $approved ? 'approved' : 'pending';
		// Create pending slot in DB ( unless $status )
		$affected = $wpdb->insert( $this->tableName, array( 
			
			'adunit' => $adUnit,
			'size_w' => $size[0],
			'size_h' => $size[1],
			'url' => $url,
			'status' => $status
			
		 ), array( '%s', '%d', '%d', '%s', '%s' ));

		 return $affected;
	}
	
	
	/**
	 * Return adUnit slots for given page(url). 
	 * @param string $url
	 * @return object
	 */
	public function getPageSlots($url)
	{
		global $wpdb;
			
		$result = $wpdb->get_row("SELECT `id` FROM {$this->tableName} WHERE `url` = {$url}");
		return $result;
	}


	/**
	 * Removes adUnit slot in DB. 
	 * @param void
	 * @return void
	 */
	public function removeSlot()
	{
	
	}


	/**
	 * Updates adUnit slot in DB. 
	 * @param void
	 * @return void
	 */
	public function updateSlot()
	{
	
	}

	
	/**
	 * Creates plugin db table on activation. 
	 * @param void
	 * @return void
	 */
	public static function setup()
	{	
		global $wpdb;
		
		$inst = new self();
		$createTableQuery = "CREATE TABLE IF NOT EXISTS `{$inst->tableName}` (
							`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
							`adunit` VARCHAR( 255 ) NOT NULL COMMENT 'DFP Ad Unit Name',
							`size_w` INT( 11 ) NOT NULL ,
							`size_h` INT( 11 ) NOT NULL ,
							`url` VARCHAR( 255 ) NOT NULL ,
							`status` VARCHAR( 255 ) NOT NULL
							) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
		$setupSuccess = $wpdb->query($createTableQuery);
		
		// Check table was created or throw error
		if($setupSuccess){
			
			$adUnit = str_replace( ' ', '_', get_bloginfo('name'));
			$size = array( '', '' );
			$url = get_bloginfo('url');
			$approved = TRUE;
			
			// Create placeholder adUnit to display while slot is pending
			$dbResult = $inst->dfpCreateSlot( $adUnit, $size, $url, $approved );
			
			// Make sure slot was created successfully
			if( !$dbResult ){
				throw new Exception('Error: Cannot create database entry.');
			}
		}else{
			throw new Exception('Error: Cannot create database table.');
		}
	}


}