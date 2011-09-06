function jsLoader( post, adSlots ){
	

	
	// WordPress Page ID passed from php ( sort of... )
	var ID = post;
	
	// Object of adslots for current page. 'approved' & 'pending'.
	var availSlots = adSlots;
		
	// Called on each adSlot to load ad.
	jQuery('[dfp]').each(function(){
		
		var slot = jQuery(this).attr('dfp');
				
		
		if( availSlots[slot]['status'] === 'active' ){
							
/*
			var script = document.createElement( 'script' );
			script.type = 'text/javascript';
			script.text  = 'GA_googleFillSlot("' + availSlots[slot]['name'] + '");'
*/
			jQuery(this).writeCapture().html( '<script>GA_googleFillSlot("' + availSlots[slot]["name"] + '");</script>' );
		}
	});
}