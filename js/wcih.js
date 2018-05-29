jQuery( document ).ready( function( $ ) {
	// Get the main WC image as a variable
	var wcih_main_image = $( '.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a img' ).first().attr( 'srcset' );
	// This is what will happen when you hover a product thumb
	$( '.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image:not(:first) a img' ).hover(
		// Swap out the main image with the thumb
		function() {
		var photo_fullsize = $( this ).attr( 'srcset' );
			$( '.woocommerce-product-gallery__image a img' ).first().attr( 'srcset', photo_fullsize );
		},
		// Return the main image to the original
	  	function() {
			$( '.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a img' ).first().attr( 'srcset', wcih_main_image );
		}
	);
});
