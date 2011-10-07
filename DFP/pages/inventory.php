<?php		

// Get all ad slots.
$pendSlots = $this->data->getPageSlots( NULL, 'pending' );
$liveSlots = $this->data->getPageSlots( NULL, 'active' );

// Get pages to use id's in permalink loop - next.
$sitePages = get_pages(array(
	'post_type' => 'page',
	'hierarchical' => 0,
	'post_status' => array( 'publish', 'pending', 'draft' )
));

// Get all page urls to perform spider.
$siteURLs = array();
foreach($sitePages as $url){
	$siteURLs[$url->ID] = get_permalink($url->ID);
}

// encode to use with js.
$siteURLs = json_encode($siteURLs);

// Create unique token to prevent unauthorised slot creation from diff paths.
$dfpAsyncAuthToken = uniqid();
// Store auth token so it can be retreived by async request handlers.
update_option( 'dfpSyncToken', $dfpAsyncAuthToken );

?>

<!-- ========================= START TEMPLATE ========================= -->

<h4 id="dfpSync" >Find New Ad Slots.<a href="" class="button add-new-h2" >Find Slots</a><div id="dfpProgress"><span></span></div></h4>
<h4 id="dfpAddNew" >Add Slot.
	<form method="post" name="manSlot" action="">
		<select name="new_dfp_tag">
			<option value="0">Page</option>
			
		<?php // Create option for each page with value of id
			
			foreach($sitePages as $page):
				echo '<option value="'.$page->ID.'">';
				echo $page->post_title.'</option>';
			endforeach;	  
		?>
	
		</select>
		<input type="text" value="Size" name="dfp_tag_size" />
		<input type="submit" value="Add" class="button add-new-h2" />
	</form>
</h4>
	
	
	<div class="liveSlots inventSlots">
	
		<h4>Existing Slots:</h4>
		
		<ul>
		<?php foreach($liveSlots as $slot): ?>
			<li>
				<?php echo $slot->adunit ?>
				<a href="#" ></a>
			</li>
		<?php endforeach; ?>
		</ul>
<?php if( count($liveSlots) > 0 ): ?>		
		<form action="" method="post">
			<input type="hidden" name= "dfp_merge" value="1" />
			<input type="submit" value="Merge To Account" class="button add-new-h2" />
		</form>
		<p class="hiddenNotif">No Ad Slots Found.</p>
<?php else: ?>
		<p class="notification">No Ad Slots Found.</p>
<?php endif; ?>
	</div>

	
	<div class="pendingSlots inventSlots">
		
		<h4>Pending Slots:</h4>
		
		<ul>
		<?php foreach($pendSlots as $slot): ?>
			<li>
				<?php echo $slot->adunit ?>
				<a href="#" ></a>
			</li>
		<?php endforeach; ?>
		</ul>
<?php if( count($pendSlots) > 0 ): ?>
		
		<form action="" method="post">
			<input type="hidden" name= "dfp_approve" value="1" />
			<input type="submit" value="Approve All" class="button add-new-h2" />
		</form>
		<p class="hiddenNotif">No Pending Ad Slots.</p>
<?php else: ?>
		<p class="notification">No Pending Ad Slots.</p>
<?php endif; ?>
	</div>

<!-- Create js variables. -->
<script type='text/javascript' >
	
	var siteURLs = <?php echo $siteURLs; ?> /* Pass in json object of all url's */
	var dfpAuthToken = '<?php echo $dfpAsyncAuthToken; ?>'; /* Pass in authToken also stored in wp_option */
			  	
</script>

<!-- Include Sync script ( uses php generated vars siteURLs, dfpAuthToken ) -->
<script type='text/javascript' src='<?php echo plugins_url( '/js/', __DIR__ ); ?>adSync.js' ></script>



