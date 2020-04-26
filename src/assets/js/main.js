
$( window ).on( 'load', function() {
	$('.loader').fadeOut();

	$( 'select' ).selectric();

	$( '.owl-carousel' ).owlCarousel( {
		stagePadding: 50,
		loop: true,
		items: 2,
		dots: false,
		nav: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1,
				stagePadding: 0,
			},
			960: {
				items: 2,
			},
		},
	} );

	$( '.opening-hours__button' ).on( 'click', function() {
		$( '.opening-hours__content' ).slideToggle();
	} );

	$( '#toggle-nav' ).on( 'click', function() {
		//!todo zmiana tekstu przycisku
		$( 'body' ).toggleClass( 'disabled' );
		$( '.nav-container' ).toggleClass( 'nav-container--opened' );
	} );

	$( '.contrast-button' ).on( 'click', function() {
		$( 'body' ).toggleClass( 'dark-theme' );
	} );

	$( '#back' ).on( 'click', function() {
		window.history.back();
	} );

	const menuLinks = $( '.nav-container__menus .menu a' );
	$( menuLinks ).on( 'mouseenter', function() {
		menuLinks.not( $( this ) ).addClass( 'not-active' );
	} ).on( 'mouseleave', function() {
		menuLinks.removeClass( 'not-active' );
	} );

	$( '.filters-button' ).on( 'click', function() {
		$( '.filters' ).slideToggle();
	} );

	$( '#clear-filters' ).on( 'click', function() {
		$( 'select' ).selectric( 'refresh' );
	} );

	$( '.guide__button' ).on( 'click', function() {
		$( this ).next().slideToggle();
	} );

	$( '.post__hide' ).on( 'click', function() {
		$( this ).parent().parent().fadeOut();
	} );

	$( '.fontSize button' ).on( 'click', function() {
		let fontSize = $( this ).attr( 'data-font' );
		$( 'body' ).css( 'font-size', `${ fontSize }px` );
	} );

	$( '.tabs a' ).on( 'click', function( e ) {
		e.preventDefault();
		$( '.tabs a' ).removeClass( 'active' );
		$( this ).addClass( 'active' );
	} );

	let sliderImage = document.getElementById( 'slider-image' );
	if (sliderImage) {
		VANTA.BIRDS( {
			el: '#slider-image',
			mouseControls: true,
			touchControls: true,
			minHeight: 200.00,
			minWidth: 200.00,
			scale: 1.00,
			scaleMobile: 1.00,
			color1: 0xffffff,
			color2: 0xfff000,
			colorMode: 'lerp',
			backgroundAlpha: 0.00,
		} );
	}

	$('#go-to-top').on('click', function() {
		$('#logo').focus();
	})
} );

let prevScrollpos = window.pageYOffset;
let navbar = document.getElementById( 'sub-menu' );
if (navbar) {
	var sticky = navbar.offsetTop;
}
window.onscroll = function() {
	const currentScrollPos = window.pageYOffset;
	if (prevScrollpos > currentScrollPos) {
		document.getElementById( 'header' ).style.top = '0';
	} else {
		document.getElementById( 'header' ).style.top = '-108px';
	}
	prevScrollpos = currentScrollPos;
	if (navbar) {
		stickyMenu();
	}
};

function stickyMenu() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add( 'sub-menu--sticky' );
	} else {
		navbar.classList.remove( 'sub-menu--sticky' );
	}
}
