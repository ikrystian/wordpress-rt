$( window ).on( 'load', function() {
	$( 'select' ).selectric({
		onRefresh: function() {

		},
	});

	$( '.opening-hours__button' ).on( 'click', function() {
		$( '.opening-hours__content' ).toggleClass( 'opening-hours__content--opened' );
	} );

	$( '#toggle-nav' ).on( 'click', function() {
		//!todo zmiana tekstu przycisku
		$( '.nav-container' ).toggleClass( 'nav-container--opened' );
	} );

	$( '.contrast-button' ).on( 'click', function() {
		$( 'body' ).toggleClass( 'dark-theme' );
	} );

	const menuLinks = $( '.nav-container__menus .menu a' );
	$( menuLinks ).on( 'mouseenter', function() {
		menuLinks.not( $( this ) ).addClass( 'not-active' );
	} ).on( 'mouseleave', function() {
		menuLinks.removeClass( 'not-active' );
	} );

	$('.filters-button').on('click', function() {
		$('.filters').slideToggle();
	});

	$( '#clear-filters' ).on( 'click', function() {
		$( 'select' ).selectric( 'refresh' );
	} );
} );

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
	const currentScrollPos = window.pageYOffset;
	if (prevScrollpos > currentScrollPos) {
		document.getElementById( 'header' ).style.top = '0';
	} else {
		document.getElementById( 'header' ).style.top = '-108px';
	}
	prevScrollpos = currentScrollPos;
};
