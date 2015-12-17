//Scripts Internas Productos
$(document).ready(function() {
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