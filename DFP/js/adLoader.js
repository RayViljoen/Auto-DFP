
function jsLoader(){
	
	
	// Send async notification to dfp plugin.
	var notify = function(notificationURL){
			
			jQuery.ajax({
			  	url: notificationURL,
			  	context: document.body,
			  	cache: false,
			  	success: function(){ console.log('new dfp adslot created' + dfpURL);	},
			  	error: function(){ console.error('dfp tag creation failed'); }
			});
	}
	
	// Called on each adSlot to either load ad or send notification.
	// If notification is sent load default adSlot.
	var adSlot = function(){
		
		// use 'this' as only called on html object
				
	}


	jQuery('[dfp]').each(adSlot);
	
	var dfpURL = "?new_dfp_tag=xxx&dfp_tag_page=xxx";

}

// Run jsLoader
jQuery('document').ready(jsLoader);