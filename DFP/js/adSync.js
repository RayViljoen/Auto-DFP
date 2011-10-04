
// Self invoking function handles all async spidering and notifications.
(function (URLs, authToken) {

	"use strict";

// ============ VARS ========================

	var numURLs; // Number of urls passed

// ==========================================


	// Reference number of URLs passed.
	numURLs = (function () {

		var url, num = 0;
		for (url in URLs ) { if (URLs.hasOwnProperty(url)) { num += 1; } }
		return num;

	}());


	// Sends async notification to createSlotAsync() PHP function
	function dfpSlotNotification(id, newSlot) {

		var query,
			response;

		// Build query as GET only.
		// Path is irrelevant as plugin loads anywhere hence the authToken.

		query  = "?new_dfp_tag=" + id;			// Page ID
		query += "&dfp_tag_size=" + newSlot;	// Ad Unit Size
		query += "&dfp_token=" +  authToken;	// Auth Token

		// Send notification
		jQuery.ajax({
			
			url: query,
			async: false,
			success: function (res) {
						
				// Create proper php response to handle ====== TODO
				console.log(id + ' : ' + newSlot);
				response = res;
			},
			error: function(e){
				response = e;
			}
			
		});
		return response;
	}


	// Parse ajax response and pass to notifier.
	function dfpResponseHandler(id, res) {

		// Find all ad slots from res html
		var slots = jQuery(res).find('[dfp]');

		// Check html contains ad slots
		if (slots.length) {
			jQuery.each(slots, function () {
				
				// Get value of ad slot
				var adSlot = jQuery(this).attr('dfp');
				// Pass ad slot value to dfpSlotNotification()
				return dfpSlotNotification(id, adSlot);
			});
		}
		
		return 'No Slots Found';
	}


	// Log Error ====== Create gui error TODO
	function dfpErrorHandler(id, e) {
		console.log(id + ' : ' + e);
	}
	
	
	// Attach click handler to sync button.
	jQuery('#dfpSync a').click(function () {
	
		// Show progress bar
		var progBar = jQuery('#dfpProgress'),
			urlsArr = [];
		
		progBar.fadeIn(500, function(){
			
			var dfpProgIncr,
				progress = 0,
				i = 0;
			
			// Calculate progress increment (only used to animate progress bar accurately)
			dfpProgIncr = 380/numURLs
				
			// Iterate over urls object and create array
			jQuery.each(URLs, function (id, permalink) {
				// Add to array
				urlsArr[i] = {'id': id, 'permalink': permalink};
				i += 1;
			});
			
			// Reset counter
			i = 0;
			
			// Increments page id, progress bar and calls self untill all pages spidered
			function syncSpider(obj){
				
				var permalink = obj.permalink,
					id = obj.id;
				
				// Increment progress bar
				progress += dfpProgIncr;
				
				// Animate progress bar then spider
				progBar.find('span').animate({'width': progress}, 1, function(){
				
					// Do SYNC request for each url. 
					jQuery.ajax({ url: permalink, dataType: 'html',
					
						// Using sync mode as to avoid overloading & connection limits.
						async: false,
										
						// Success Handler.
						success: function (res) {
							var serverRes = dfpResponseHandler(id, res);
							//console.log(serverRes);
						},
		
						// Error Handler
						error: function (e) {
							var serverRes = dfpErrorHandler(id, e);
							//console.log(serverRes);				
						},
						// On complete check if any more pages need spidering and call self
						complete: function(){
							
							i += 1;
							
							if(urlsArr[i]){
								syncSpider(urlsArr[i]);
							}else{
								progBar.fadeOut(500, function(){
									document.location.reload();
								});
							}
						}
					});
				
				});
			}
			
			// Start Spidering
			syncSpider(urlsArr[i]);
		});
				
		return false; // Null link
	});


	// Attach click handler to delete slot.
	// Sends async notification to delete ad slot - Handled server side
	jQuery('.inventSlots li a').click(function () {

		var adUnit, query;

		// Get ad unit name
		adUnit = jQuery(this).parent('li');

		// Build query as GET only.
		// Path is irrelevant as plugin loads anywhere hence the authToken.
		query  = "?dfp_remove_slot=" + adUnit.text();
		query += "&dfp_token=" + authToken;

		// Send notification
		jQuery.get(query, function () {

			adUnit.fadeOut(500);
		// Create proper php response to handle ====== TODO

		});

		return false; // Null link
	});


}(siteURLs, dfpAuthToken)); // Pass PHP generated variables.



// ======================================================================================================

