
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

		var query;

		// Build query as GET only.
		// Path is irrelevant as plugin loads anywhere hence the authToken.

		query  = "?new_dfp_tag=" + id;			// Page ID
		query += "&dfp_tag_size=" + newSlot;	// Ad Unit Size
		query += "&dfp_token=" +  authToken;	// Auth Token

		// Send notification
		jQuery.get(query, function () {

			console.log(id + ' : ' + newSlot);
			// Create proper php response to handle ====== TODO
		});
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
				dfpSlotNotification(id, adSlot);
			});
		}
	}


	// Log Error ====== Create gui error TODO
	function dfpErrorHandler(id, e) {
		console.log(e);
	}


	// Attach click handler to sync button.
	jQuery('#dfpSync a').click(function () {

		// Iterate over urls object
		jQuery.each(URLs, function (id, permalink) {

			// Do async request for each url. 
			jQuery.ajax({ url: permalink, dataType: 'html',

				// Success Handler.
				success: function (res) {
					dfpResponseHandler(id, res);
				},

				// Error Handler
				error: function (e) {
					dfpErrorHandler(id, e);
				}
			});
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

