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
	 * Called remotely via AJAX notification.
	 * Creates new pending ad slot.
	 * @param void.
	 * @return void
	 */
	public static function remoteCreateSlot()
	{
		// Data instance
		$data = new self();
		
		// Compare tokens
		$clientToken = $_GET['dfp_token'];
		$serverToken = get_option('dfpSyncToken');
		
		if( $clientToken !== $serverToken ){
			Auto_DFP_Admin::log( '"CREATE SLOT" FAILED: TOKENS DID NOT MATCH.' );
			return FALSE;
		}
		
		// Format size
		$fSize = $_GET['dfp_tag_size'];
		$fSize = str_replace( ' ', '', $fSize );
		$fSize = str_replace( 'X', 'x',  $fSize);
		
		// Create size array for adUnit
		$size = explode( 'x', $fSize );

		// Make sure there's no spaces
		$adUnit = str_replace(' ', '_', $adUnit);

		// Get page id
		$page = intval($_GET['new_dfp_tag']);
		
		// Check slot can be created
		if( !$page || !$size ){
			
			Auto_DFP_Admin::log('Invalid new adUnit with: size='.$_GET['dfp_tag_size'].'&new_dfp_tag='.$_GET['new_dfp_tag']);
			return FALSE;
		}
		
		// Build adUnit name
		$pageAtts = get_page( $page );
		$adUnit = get_bloginfo('name');
		$ancestors = $pageAtts->ancestors;
		
		// If page is not top level, build ad name based on ancestors
		if(count($ancestors)){
			$ancestors = array_reverse($ancestors);
			foreach($ancestors as $id){
				$adUnit .= '_'.get_page($id)->post_name;
			}
		}
		$adUnit .= '_'.$pageAtts->post_name.'_'.$fSize;
		
		// Make sure there's no spaces
		$adUnit = str_replace(' ', '_', $adUnit);

		// Create slot
		$result = $data->createSlot( $adUnit, $page, $size );
	}
	
	
	/**
	 * Check single slot exists.
	 * @param  string $adUnit
	 * @return BOOL
	 */
	public function checkSlot($adUnit)
	{
		global $wpdb;
		
		$query = "SELECT `adunit` FROM {$this->tableName} WHERE `adunit` = '{$adUnit}'";
		$result = $wpdb->get_row($query);
		return $result;
	}


	/**
	 * Creates adUnit slot in DB.
	 * @param  string $adUnit, array $size (width, height), string $url, [BOOL $approved]
	 * @return void
	 */
	public function createSlot( $adUnit, $page, $size, $approved = FALSE )
	{
		global $wpdb;
		
		// Check slot does not already exist.
		if($this->checkSlot( $adUnit )){
			return FALSE;
		}
		
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
			$limit = "WHERE `page` = {$id} AND `local_status` = '{$status}'";
		}elseif( $id ){
			$limit = "WHERE `page` = {$id}";
		}elseif( $status ){
			$limit = "WHERE `local_status` = '{$status}'";
		}

		$query = "SELECT * FROM {$this->tableName} ".$limit;
				
		// Return adUnit slots as object and include default slot.
		$result = $wpdb->get_results($query);
		return $result;
	}


	/**
	 * Removes adUnit slot in DB. 
	 * @param string $aduit
	 * @return number
	 */
	public function removeSlot($adunit)
	{
		$result = $wpdb->query("DELETE FROM {$this->tableName} WHERE `adunit` = '{$adunit}'");
		return $result;
	}

	/**
	 * Removes adUnit slot in DB from ajax call. 
	 * @param string $aduit
	 * @return number
	 */
	public function removeSlotAsync()
	{	
		global $wpdb;
		
		$data = new self();
		
		// Compare tokens
		$clientToken = $_GET['dfp_token'];
		$serverToken = get_option('dfpSyncToken');
		
		if( $clientToken !== $serverToken ){
			Auto_DFP_Admin::log( '"REMOVE SLOT" FAILED: TOKENS DID NOT MATCH.' );
			return FALSE;
		}

		// Get adunit name
		$adunit = $_GET['dfp_remove_slot'];
		
		$query = "DELETE FROM {$data->tableName} WHERE `adunit` = '{$adunit}'";
		$result = $wpdb->query($query);
		
		return $result;
	}


	/**
	 * Updates locally aproved adUnit slot once added to lic=ve account.
	 * @param void
	 * @return void
	 */
	public function updateMergedLocal( $slot = NULL )
	{
		global $wpdb;
		
		if(!$slot){ throw new Exception('Error: Cannot update unknown slot.'); }
		
		$result = $wpdb->update( 
			$this->tableName, 
			array( 'dfp_status' => 1 ),
			array( 'adunit' => $slot ),
			array( '%d' ),
			array( '%s' )
		);
		return $result;
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
	
	/**
	 * Updates all pening slots to live status. 
	 * @param void
	 * @return void
	 */
	public function approvePendingLocal()
	{
		global $wpdb;
		
		$result = $wpdb->update( 
						$this->tableName,
						array( 'local_status' => 'active' ),
						array( 'local_status' => 'pending' ),
						array( '%s' ), array( '%s' )
					);
		return $result;
	}


}