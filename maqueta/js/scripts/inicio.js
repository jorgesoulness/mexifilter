//Scripts Inicio v1.0
$(document).ready(function() {
	$(document).on('init.slides', function() {
	    $('.loading-container').fadeOut(function() {
	      $(this).remove();
	    });
	});
	$('#slides').superslides({
		play: 5000,
		animation: 'fade',
		slide_easing: 'easeInOutCubic',
		slide_speed: 800,
		pagination: false,
        inherit_width_from: '.wide-heigSlider',
        inherit_height_from: '.wide-heigSlider'
    });
});