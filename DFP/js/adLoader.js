
function jsLoader( post, adSlots ){
	
	// WordPress Page ID passed from php ( sort of... )
	var ID = post;
	
	// Object of adslots for current page. 'approved' & 'pending'.
	var availSlots = adSlots;
	
	// Send async notification to dfp plugin.
	var notify = function(notificationURL){
			
			jQuery.ajax({
			  	url: notificationURL,
			  	context: document.body,
			  	cache: false,
			  	success: function(){ console.log('new dfp adslot created'); },
			  	error: function(){ console.error('dfp tag creation failed'); }
			});
	}
	
	// Called on each adSlot to either load ad or send notification.
	// If notification is sent load default adSlot.
	jQuery('[dfp]').each(function(){
	
		var slot = jQuery(this).attr('dfp');
				
		if( availSlots[slot] === undefined ){ 
		
			notify("?new_dfp_tag=" + ID + "&dfp_tag_size=" + slot + "");
			
		}else if( availSlots['status'] === 'approved' ){

			jQuery(this).prepend(
				'<script type="text/javascript">GA_googleFillSlot("' + availSlots[slot].name + '");</script>'
			);
		}
	});
	
}