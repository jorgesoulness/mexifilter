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
    $('.sliderProd').bxSlider({
	    mode: 'horizontal',
	  	speed: "500",
	  	pause: 4000,
	  	auto: 1,
	  	autoHover: 1,
	  	ticker: 0,
	  	controls: 1,
	  	pager: 0,
	  	autoControls: 0,
	  	slideMargin: 10,
	  	slideWidth: 360,
	    minSlides: 1,
	    maxSlides: 3,
	  	moveSlides: 1
	});
	$('.bx-wrapper').hover(
            function() {
                $('.bx-controls').addClass( "activeCotnrols" );
            }, function() {
                $('.bx-controls').removeClass( "activeCotnrols" );
            }
     );
});