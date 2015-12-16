//Scripts Generales
(function($){
            
            //Plugin activation
            $(window).enllax();
            
//            $('#some-id').enllax();
            
//            $('selector').enllax({
//                type: 'background', // 'foreground'
//                ratio: 0.5,
//                direction: 'vertical' // 'horizontal'
//            });
})(jQuery);

function MenuEffex() {
	scrollPos = ($(document).scrollTop() / 200);
	if(scrollPos <= 1) {
		$('#headMenu').css({
			'box-shadow' : '0px 1px 3px rgba(151, 151, 151, '+scrollPos+')',
			backgroundColor:'rgba(255,255,255,'+scrollPos+')'
		});	
	}
}
        
$(document).ready(function() {
    $('#openMenuMobile').click(function() {
        var menuCont = $('#MenuMobileContent');
            bodycont = $('body');
            fx3d = $('#cont3D');
            headerCont = $('#headMenu');
        if(menuCont.hasClass('menu--content')){
            menuCont.addClass('menu--Visible');
            bodycont.addClass('overflowOculta');
            fx3d.addClass('yes_efectoTresde').removeClass('no_efectoTresde');
            headerCont.addClass('ocultaHead').removeClass('viewHead');
        }else{
            menuCont.removeClass('menu--Visible');
            bodycont.removeClass('overflowOculta');
            fx3d.removeClass('yes_efectoTresde').addClass('no_efectoTresde');
            headerCont.removeClass('ocultaHead').addClass('viewHead');
        }
    });
    
    setTimeout(function() {
        $('.CloseMenu').click(function() {
            $('#MenuMobileContent').removeClass('menu--Visible');
            $('body').removeClass('overflowOculta');
            fx3d.removeClass('yes_efectoTresde').addClass('no_efectoTresde');
            headerCont.removeClass('ocultaHead').addClass('viewHead');
        });    
    }, 100);
    
    $(window).scroll(function() {
		MenuEffex();
	});
});