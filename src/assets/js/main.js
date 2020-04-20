$( window ).on( 'load', () => {
	$( '#toggle-nav' ).on( 'click', function() {
		//!todo zmiana tekstu przycisku
		$( '.nav-container' ).toggleClass( 'nav-container--opened' );
	} );

	$( '.opening-hours__button' ).on( 'click', function() {
		console.log( 'asd' );
		$( '.opening-hours__content' ).toggleClass( 'opening-hours__content--opened' );
	} );

} );

// zrobimy refactor do czystego js

