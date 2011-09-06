<?php		
	// Get all ad slots.
	$pendSlots = $this->data->getPageSlots( NULL, 'pending' );
	$liveSlots = $this->data->getPageSlots( NULL, 'active' );
		
	$sitePages = get_pages(array(
		'post_type' => 'page',
		'hierarchical' => 0,
		'post_status' => array( 'publish', 'pending', 'draft' )
	));
	// Get all page urls to perform sync
	$siteURLs = array();
	foreach($sitePages as $url){  		
		$siteURLs[$url->ID] = get_permalink($url->ID);
	}
	
	// Create unique token to prevent unauthorised slot creation.
	$dfpSyncID = uniqid();
	update_option( 'dfpSyncToken', $dfpSyncID );
	echo '<span id="dfpSyncToken" style="display:none">'.$dfpSyncID.'</span>';
		
?>		
	<?php if( count($liveSlots) > 0 ){ ?>
	<div class="liveSlots inventSlots">
		<h4>Existing Slots:</h4>
		<ul>
		<?php
			foreach($liveSlots as $slot){
				echo '<li>'.$slot->adunit.'<a href="#" ></a></li>';
			}
		?>		
		</ul>
		
		<form action="" method="post">
			<input type="hidden" name= "dfp_merge" value="1" />
			<input type="submit" value="Merge To Account" class="button add-new-h2" />
		</form>

		
	</div>	<?php } ?>
	
	<div class="pendingSlots inventSlots">
		<h4 id="dfpSync" >
			Find New Ad Slots.<a href="" class="button add-new-h2" >Find Slots</a>
		</h4>
	<?php if( count($pendSlots) > 0 ){ ?>
		<h4>Pending Slots:</h4>
		<ul>
		<?php
			foreach($pendSlots as $slot){
				echo '<li>'.$slot->adunit.'<a href="#" ></a></li>';
			}
		?>		
		</ul>
				
		<form action="" method="post">
			<input type="hidden" name= "dfp_approve" value="1" />
			<input type="submit" value="Approve All" class="button add-new-h2" />
		</form>
			
	<?php } ?></div>	

<?php

	// Auto DFP JS path
	$jsPath = plugins_url( '/js/', __DIR__ );
	// Include Sync script
	echo "<script type='text/javascript' src='".$jsPath."adSync.js' ></script>";
	echo "<script type='text/javascript' > var dfpPageLinks = ".json_encode($siteURLs)." </script>";

	//$units = $this->dfpGetAdUnits();

/*
	echo '<pre>';
	var_dump(
	$siteURLs
	);
	echo '</pre>';
*/

?>