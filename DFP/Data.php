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
	public function dfpCreateSlot( $adUnit, $size, $url, $approved = FALSE )
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

		 return $wpdb;
	}


	/**
	 * Checks adUnit slot in DB. 
	 * @param void
	 * @return void
	 */
	public function dfpCheckSlot()
	{
	
	}


	/**
	 * Removes adUnit slot in DB. 
	 * @param void
	 * @return void
	 */
	public function dfpRemoveSlot()
	{
	
	}


	/**
	 * Updates adUnit slot in DB. 
	 * @param void
	 * @return void
	 */
	public function dfpUpdateSlot()
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