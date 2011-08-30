function jsLoader( post, adSlots ){
	
	// WordPress Page ID passed from php ( sort of... )
	var ID = post;
	
	// Object of adslots for current page. 'approved' & 'pending'.
	var availSlots = adSlots;
		
	// Called on each adSlot to load ad.
	jQuery('[dfp]').each(function(){
	
		var slot = jQuery(this).attr('dfp');
		
		if( availSlots['status'] === 'approved' ){

			jQuery(this).prepend(
				'<script type="text/javascript">GA_googleFillSlot("' + availSlots[slot].name + '");</script>'
			);
		}
	});
}