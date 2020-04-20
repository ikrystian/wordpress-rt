$( window ).on( 'load', function() {
	$( '#toggle-nav' ).on( 'click', function() {
		//!todo zmiana tekstu przycisku
		$( '.nav-container' ).toggleClass( 'nav-container--opened' );
	} );

	$( '.opening-hours__button' ).on( 'click', function() {
		$( '.opening-hours__content' ).toggleClass( 'opening-hours__content--opened' );
	} );
	let menuLinks = $( '.menu-main-container a' );
	$( menuLinks ).on( 'mouseenter', function() {
		menuLinks.not( $( this ) ).addClass( 'not-active' );
	} ).on( 'mouseleave', function() {
		menuLinks.removeClass( 'not-active' );
	} );
} );
// zrobimy refactor do czystego js

