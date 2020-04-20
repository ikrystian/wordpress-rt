import * from 'jquery';

$(window).on('load', () => {

	$('#toggle-nav').on('click', function() {
		$('.nav-container').toggleClass('nav-container--opened');
	});

});
