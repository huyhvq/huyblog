jQuery(document).ready(function(){
/*global jQuery:false */
/*jshint devel:true, laxcomma:true, smarttabs:true */
"use strict";


	// scroll to top
	jQuery(".scrollTo_top").hide();
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.scrollTo_top').fadeIn();
			} else {
				jQuery('.scrollTo_top').fadeOut();
			}
		});

	jQuery('.scrollTo_top a').click(function(){
		jQuery('html, body').animate({scrollTop:0}, 500 );
		return false;
	});
	});
		
	// sticky sidebar
	if ( jQuery(window).width() > 1040) {   
		jQuery('.widgetable_sticky').scrollToFixed({marginTop: 60,zIndex:0});
	}

	// trigger + show menu on fire
	  
        jQuery('a#navtrigger').click(function(){ 
                jQuery('#navigation').toggleClass('shownav'); 
                jQuery(this).toggleClass('active'); 
                return false; 
        });
		
	/* searchtrigger */
	jQuery('a.searchOpen').on('click',function(){ 
			jQuery('#curtain').toggleClass('open'); 
            jQuery(this).toggleClass('opened'); 
			return false; 
	}); 
	
	jQuery('a.curtainclose').on('click',function(){ 
			jQuery('#curtain').removeClass('open'); 
			jQuery('a.searchOpen').removeClass('opened');
			return false; 
	});


	/* Tooltips */
	jQuery("body").prepend('<div class="tooltip"><p></p></div>');
	var tt = jQuery("div.tooltip");
	
	jQuery("#sidebar ul.social-menu li a,#footer ul.social-menu li a,.tmnf_icon").hover(function() {								
		var btn = jQuery(this);
			
			tt.children("p").text(btn.attr("title"));								
						
			var t = Math.floor(tt.outerWidth(true)/2),
				b = Math.floor(btn.outerWidth(true)/2),							
				y = btn.offset().top - 65,
				x = btn.offset().left - (t-b);
						
			tt.css({"top" : y+"px", "left" : x+"px", "display" : "block"});			
			   
		}, function() {		
			tt.hide();			
	});



	function lightbox() {
		// Apply PrettyPhoto to find the relation with our portfolio item
		jQuery("a[rel^='prettyPhoto']").prettyPhoto({
			// Parameters for PrettyPhoto styling
			animationSpeed:'fast',
			slideshow:5000,
			theme:'pp_default',
			show_title:false,
			overlay_gallery: false,
			social_tools: false
		});
	}
	
	if(jQuery().prettyPhoto) {
		lightbox();
	}

});
