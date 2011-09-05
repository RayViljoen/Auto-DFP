// Get token
var dfpSyncToken = jQuery('#dfpSyncToken').text();

// Spider all urls and pass html to callback.
function dfpAjax( url, callback ){
	jQuery.ajax({
	  	url: url,
	  	dataType: 'html',
	  	context: document.body,
	  	cache: false,
	  	success: function(data){ callback( data, url); },
	  	error: function( request ){ console.error('A problem occured:' + url + ' Could not be reached.'); }
	});
}

// Send AJAX notification to create new pending ad slot
function dfpSlotNotification( newSlot, url ){
	
	// Extract page ID from GUID
	var pageID = url.slice( url.indexOf('page_id=') );
	pageID = pageID.replace('page_id=', '');
	
	var query = "?new_dfp_tag=" + pageID + "&dfp_tag_size=" + newSlot + "&dfp_token=" +  dfpSyncToken;
	
	dfpAjax( query, function(){
		console.log('Notification sent for ' + newSlot + ' on page ' + pageID);
	});
	
}

// Check html for adSlots and pass addSlot to dfpSlotNotification
function dfpAdSlots( html, url ){
	
	var slots = jQuery(html).find('[dfp]');
	
	if( slots.length ){
		jQuery.each( slots, function(){
			var adSlot = jQuery(this).attr('dfp');
			dfpSlotNotification(adSlot, url);
		});
	}
}


// Sync button
jQuery('#dfpSync a').click(function(){
		
	// Loope through pages
	jQuery.each( dfpPageLinks, function(){
		dfpAjax( this, dfpAdSlots );
	});
	return false;
});

// Remove slot
jQuery('.inventSlots li a').click(function(){
	
	var adUnitItem = jQuery(this).parent('li');
	var adUnit = adUnitItem.text();
	var query = "?dfp_remove_slot=" + adUnit + "&dfp_token=" + dfpSyncToken;
	
	dfpAjax( query, function(){
		console.log('Slot ' + adUnit + ' removed');
		adUnitItem.fadeOut(500);
	});
	
	return false;
});
