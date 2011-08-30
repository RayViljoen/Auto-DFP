var dfpSyncToken = jQuery('#dfpSyncToken').text();
	
// Spider all urls and pass html to callback.
function dfpAjax( url, callback ){
	jQuery.ajax({
	  	url: url,
	  	context: document.body,
	  	cache: false,
	  	success: function(data){ callback( data, url); },
	  	error: function(){ console.error('A problem occured:' + url + ' Could not be reached.'); }
	});
}

// Send AJAX notification to create new pending ad slot
function dfpSlotNotification( newSlot, url ){
	
	// Extract page ID from GUID
	var pageID = url.slice( url.indexOf('page_id=') );
	pageID = pageID.replace('page_id=', '');
	
	var query = "?new_dfp_tag=" + pageID + "&dfp_tag_size=" + newSlot ;
	
	dfpAjax( query, function(){
		console.log('Slot ' + newSlot + ' successfully created for page ' + pageID);
	});
	
}

// Check html for adSlots and pass addSlot to dfpSlotNotification
function dfpAdSlots( html, url){
	
	var slots = jQuery(html).find('[dfp]');
	
	if( slots.length ){
		jQuery.each( slots, function(){
			var adSlot = jQuery(this).attr('dfp');
			dfpSlotNotification(adSlot, url);
		});
	}
}


// Sync button
jQuery('#dfpSync button').click(function(){
	
	// Loope through pages
	jQuery.each( dfpPageLinks, function(){
		
		dfpAjax( this, dfpAdSlots );

	});
	
});

