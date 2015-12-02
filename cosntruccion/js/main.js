//Scripts Generales
//var altura = $('.ContHeader').offset().top + 40;
var altura = $('.ContHeader').offset().top;
	
$(window).on('scroll', function(){
    if ( $(window).scrollTop() > 100 ){
        $('.ContHeader').addClass('menu-fixed');
        $('#contHead').removeClass('container').addClass('container-fluid');
    } else {
        $('.ContHeader').removeClass('menu-fixed');
        $('#contHead').removeClass('container-fluid').addClass('container');
    }
});