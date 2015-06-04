jQuery(document).ready(function($) {
	// Get the main WC image as a variable
	var wcih_main_imgage = $( 'a.woocommerce-main-image' ).attr( 'href' );
	// This is what will happen when you hover a product thumb
	$(".thumbnails a").hover(
		// Swap out the main image with the thumb
		function(){	    	
	    	var photo_fullsize = $('.thumbnails a').attr('href');
		  	$('.woocommerce-main-image img').attr('src', photo_fullsize);
	    },
	    // Return the main image to the original
	    function(){
	    	$('.woocommerce-main-image img').attr('src', wcih_main_imgage);
		}
	);
});