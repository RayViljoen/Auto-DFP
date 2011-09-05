// Get token
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
function dfpSlotNotification( newSlot, id ){
	
	var query = "?new_dfp_tag=" + id + "&dfp_tag_size=" + newSlot + "&dfp_token=" +  dfpSyncToken;
	dfpAjax( query, function(){
		console.log('Notification sent for ' + newSlot + ' on page ' + id);
	});
}

// Check html for adSlots and pass addSlot to dfpSlotNotification
function dfpAdSlots( html, id ){
	
	var htmlWrap = '<div>' + html + '</div>';
	var slots = jQuery(htmlWrap).find('[dfp]');
	
	console.log( slots );
	
	if( slots.length ){
		jQuery.each( slots, function(){
			var adSlot = jQuery(this).attr('dfp');
			
			console.log(adSlot);
					
			dfpSlotNotification(adSlot, id);
		});
	}
}


// Sync button
jQuery('#dfpSync a').click(function(){
		
	// Loop through pages
	jQuery.each( dfpPageLinks, function( key, val ){
		dfpAdSlots( val, key );
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
