jQuery( document ).ready( function( $ ) {
	// Get the main WC image as a variable
	var wcih_main_imgage = $( 'img.attachment-shop_single' ).attr( 'srcset' );
	// console.log( 'Test 1: ' + wcih_main_imgage );
	// This is what will happen when you hover a product thumb
	$( '.single-product div.product .woocommerce-product-gallery .flex-control-thumbs' ).hover(
		// Swap out the main image with the thumb
		function() {
			console.log('sdf');
		//var photo_fullsize = $( this ).attr( 'srcset' );
			//$( '.woocommerce-main-image img' ).attr( 'srcset', photo_fullsize );
		},
		// Return the main image to the original
	  function() {
			//$( '.woocommerce-main-image img' ).attr( 'srcset', wcih_main_imgage );
		}


	);


});
