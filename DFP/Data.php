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
	 * Creates plugin db table. 
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
							`url` VARCHAR( 255 ) NOT NULL ,
							`status` VARCHAR( 255 ) NOT NULL
							) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
		$wpdb->query($createTableQuery);
	}
	

}