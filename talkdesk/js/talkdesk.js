jQuery(document).ready(function() {


	// Fixing the main menu on top & hide the top menu, when scroll down	
	jQuery(window).scroll(function() {
				
		if (jQuery(this).scrollTop() > 1 && jQuery(window).width() > 540 ) {  
    		
    		jQuery('#grngrdn-site-header').addClass("sticky");
  		}
  		else {
    		
    		jQuery('#grngrdn-site-header').removeClass("sticky");
  		}
	});



	// Animate menu icon
	jQuery('#menu-burguer').click(function() {
    	
    	var clicks = jQuery(this).data('clicks');
    	
    	if (clicks) {
			jQuery("#top-menu").animate({"top":"-100", "opacity": 0}, 500, "easeInOutExpo");
			jQuery("#grngrdn-main-nav").delay(250).animate({"top":"-300", "opacity": 0}, 500, "easeInOutExpo");
			jQuery("#menu-burguer .lines").removeClass("close");
    	} else {
			jQuery("#top-menu").delay(500).animate({"top":"55", "opacity": 1}, 500, "easeInOutExpo");
			jQuery("#grngrdn-main-nav").animate({"top":"115", "opacity": 1}, 1000, "easeInOutExpo");
			jQuery("#menu-burguer .lines").addClass("close");
    	}
    	jQuery(this).data("clicks", !clicks);
  	});


	// Category filter
	// All category option set as default 
  	jQuery("#main-categories #category-all").addClass("current");

  	// Categories buttons function
	jQuery("#category-all").click(function() {

		jQuery("#main-thumbs li.all").css({display:"block"});
		jQuery("#main-thumbs li").not(".all").css({display:"none"});
		jQuery(this).addClass("current");
		jQuery("#main-categories li").not("#category-all").removeClass("current");	
	});

	jQuery("#category-chat").click(function() {

		jQuery("#main-thumbs li.chat").css({display:"block"});
		jQuery("#main-thumbs li").not(".chat").css({display:"none"});
		jQuery(this).addClass("current");
		jQuery("#main-categories li").not("#category-chat").removeClass("current");
	});

	jQuery("#category-crm").click(function() {

		jQuery("#main-thumbs li.crm").css({display:"block"});
		jQuery("#main-thumbs li").not(".crm").css({display:"none"});
		jQuery(this).addClass("current");
		jQuery("#main-categories li").not("#category-crm").removeClass("current");
	});

	jQuery("#category-commerce").click(function() {

		jQuery("#main-thumbs li.commerce").css({display:"block"});
		jQuery("#main-thumbs li").not(".commerce").css({display:"none"});
		jQuery(this).addClass("current");
		jQuery("#main-categories li").not("#category-commerce").removeClass("current");	
	});

	jQuery("#category-helpdesk").click(function() {

		jQuery("#main-thumbs li.helpdesk").css({display:"block"});
		jQuery("#main-thumbs li").not(".helpdesk").css({display:"none"});
		jQuery(this).addClass("current");
		jQuery("#main-categories li").not("#category-helpdesk").removeClass("current");
	});

	jQuery("#category-other").click(function() {

		jQuery("#main-thumbs li.other").css({display:"block"});
		jQuery("#main-thumbs li").not(".other").css({display:"none"});
		jQuery(this).addClass("current");
		jQuery("#main-categories li").not("#category-other").removeClass("current");
	});


	// Slideshow 
	// Set the time of each panel pause befor slides 
	var speed = 5000;
	var run = setInterval('rotate()', speed);	
	
	// Get the main container with to be responsive
	var item_width = jQuery('#main-panel li.panel-item').outerWidth(); 
	var left_value = item_width * (-1); 

	// Make the carousel
	jQuery('#main-panel li.panel-item:first').before(jQuery('#main-panel li.panel-item:last'));
	jQuery('#main-panel ul#panel').css({'left' : left_value});

	// Preview button 
	jQuery('#prev').click(function() {

		var left_indent = parseInt(jQuery('#main-panel ul#panel').css('left')) + item_width;

		jQuery('#main-panel ul#panel:not(:animated)').animate({'left' : left_indent}, 1500, "easeInOutExpo", function(){    
			jQuery('#main-panel li.panel-item:first').before(jQuery('#main-panel li.panel-item:last'));           
			jQuery('#main-panel ul#panel').css({'left' : left_value});
		
		});

		return false;
            
	});

 	// Next button
	jQuery('#next').click(function() {
		
		var left_indent = parseInt(jQuery('#main-panel ul#panel').css('left')) - item_width;
		
		jQuery('#main-panel ul#panel:not(:animated)').animate({'left' : left_indent}, 1500, "easeInOutExpo", function () {
            
			jQuery('#main-panel li.panel-item:last').after(jQuery('#main-panel li.panel-item:first'));                 	
			jQuery('#main-panel ul#panel').css({'left' : left_value});
		
		});
		         
		return false;
		
	});        
	
	//if mouse hover, pause the auto rotation, otherwise rotate it
	jQuery('#main-panel').hover(
		
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	); 
        
});

//function to click next link
function rotate() {
	jQuery('#next').click();
}
