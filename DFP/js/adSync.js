// Get token
var dfpSyncToken = jQuery('#dfpSyncToken').text();

var i = 0;

// Spider all urls and pass html to callback.
function dfpAjax( url, id, callback ){	
	jQuery.ajax({
	  	url: url,
	  	dataType: 'html',
	  	context: document.body,
	  	cache: false,
	  	success: function(data){ callback( data, url, id); },
	  	error: function( request ){ console.error( request.responseText + ' - ' + url); }
	});
}


// Send AJAX notification to create new pending ad slot
function dfpSlotNotification( newSlot, url, id ){
		
	var query = "?new_dfp_tag=" + id + "&dfp_tag_size=" + newSlot + "&dfp_token=" +  dfpSyncToken;
	
	dfpAjax( query, function(){
		console.log('Notification sent for ' + newSlot + ' on page ' + id);
	});
}


// Check html for adSlots and pass addSlot to dfpSlotNotification
function dfpAdSlots( html, url, id ){
	
	var slots = jQuery(html).find('[dfp]');
	
	if( slots.length ){
		jQuery.each( slots, function(){
			
			i += 1;
			console.log(i);
			
			var adSlot = jQuery(this).attr('dfp');
			
					
			dfpSlotNotification(adSlot, url, id);
		});
	}
}


// Sync button
jQuery('#dfpSync a').click(function(){
		
	// Loope through pages
	jQuery.each( dfpPageLinks, function( key, val ){
		
		dfpAjax( val, key, dfpAdSlots );
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
