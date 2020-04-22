
$( window ).on( 'load', function() {
	$( 'select' ).selectric();

	$('.owl-carousel').owlCarousel({
		loop: true,
		items: 2,
		dots: false,
		nav: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			960: {
				items: 2
			}
		}
	});

	$( '.opening-hours__button' ).on( 'click', function() {
		$( '.opening-hours__content' ).toggleClass( 'opening-hours__content--opened' );
	} );

	$( '#toggle-nav' ).on( 'click', function() {
		//!todo zmiana tekstu przycisku
		$('body').toggleClass('disabled');
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

	$('.filters-button').on('click', function() {
		$('.filters').slideToggle();
	});

	$( '#clear-filters' ).on( 'click', function() {
		$( 'select' ).selectric( 'refresh' );
	} );

	$('.fontSize button').on('click', function() {
		let fontSize = $(this).attr('data-font');
		$('body').css('font-size', `${fontSize}px`);
	})
} );

let prevScrollpos = window.pageYOffset;
let navbar = document.querySelector(".sub-menu");
let sticky = navbar.offsetTop;

window.onscroll = function() {
	const currentScrollPos = window.pageYOffset;
	if (prevScrollpos > currentScrollPos) {
		document.getElementById( 'header' ).style.top = '0';
	} else {
		document.getElementById( 'header' ).style.top = '-108px';
	}
	prevScrollpos = currentScrollPos;

	stickyMenu()
};

function stickyMenu() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sub-menu--sticky")
	} else {
		navbar.classList.remove("sub-menu--sticky");
	}
}
