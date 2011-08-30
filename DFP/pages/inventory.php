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
	foreach($sitePages as$url){
		$siteURLs[] = $url->guid;
	}
	
	// Create unique token to prevent unauthorised slot creation.
	$dfpSyncID = uniqid();
	update_option( 'dfpSyncToken', $dfpSyncID );
	echo '<span id="dfpSyncToken" style="display:none">'.$dfpSyncID.'</span>';
		
?>
		<h3 id="dfpSync" >
			Update Ad Units.<br />
			<span>* All ad units will be checked and can take several minutes.</span>
			<button class="button" >Run Update</button>
		</h3>
		
	<?php if( count($pendSlots) > 0 ){ ?>
	<div class="liveSlots inventSlots">
		<h4>Existing Slots:</h4>
		<ul>
		<?php
			foreach($liveSlots as $slot){
				echo '<li>'.$slot->adunit.'<a href="#" ></a></li>';
			}
		?>		
		</ul>
	</div>	<?php } ?>
	
	<?php if( count($pendSlots) > 0 ){ ?>
	<div class="pendingSlots inventSlots">
		<h4>New Slots Found:</h4>
		<ul>
		<?php
			foreach($pendSlots as $slot){
				echo '<li>'.$slot->adunit.'<a href="#" ></a></li>';
			}
		?>		
		</ul>
	</div>	<?php } ?>

<?php

	// Auto DFP JS path
	$jsPath = plugins_url( '/js/', __DIR__ );
	// Include Sync script
	echo "<script type='text/javascript' src='".$jsPath."adSync.js' ></script>";
	echo "<script type='text/javascript' > var dfpPageLinks = ".json_encode($siteURLs)." </script>";


/*
	echo '<pre>';
	print_r(
	$siteURLs
	);
	echo '</pre>';
*/
?>