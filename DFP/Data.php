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
	public function createSlot( $adUnit, $page, $size, $approved = FALSE )
	{
		global $wpdb;

		// Check if default add status has been changed
		$status = $approved ? 'approved' : 'pending';
		// Create pending slot in DB ( unless $status )
		$affected = $wpdb->insert( $this->tableName, array( 
			
			'adunit' => $adUnit,
			'page' => $page,
			'size_w' => $size[0],
			'size_h' => $size[1],
			'local_status' => $status,
			'dfp_status' => 0
			
		 ), array( '%s', '%d', '%d', '%s', '%s', '%d' ));

		 return $affected;
	}
	
	
	/**
	 * Return adUnit slots. Can be limited to page or status.
	 * @param number $id, string $status
	 * @return object
	 */
	public function getPageSlots($id = NULL, $status = NULL)
	{
		global $wpdb;
		
		// Check if limited to page or status.
		
		if( $id && $status ){
			$limit = "WHERE `page` = {$id} AND `status` = '{$status}'";
		}elseif( $id ){
			$limit = "WHERE `page` = {$id}";
		}elseif( $status ){
			$limit = "WHERE `status` = '{$status}'";
		}
				
		$query = "SELECT * FROM {$this->tableName} ".$limit;
				
		// Return adUnit slots as object and include default slot.
		$result = $wpdb->get_results($query);
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
							`page` INT( 11 ) NOT NULL ,
							`size_w` INT( 11 ) NOT NULL ,
							`size_h` INT( 11 ) NOT NULL ,
							`local_status` VARCHAR( 255 ) NOT NULL,
							`dfp_status` INT( 11 ) NOT NULL
							) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
		$setupSuccess = $wpdb->query($createTableQuery);
		
		// Check table was created or throw error
		if(!$setupSuccess){
			throw new Exception('Error: Cannot create database table.');
		}
	}


}