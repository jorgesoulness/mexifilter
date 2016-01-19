//Scripts Galeria
$(window).load(function () {
    $(document).ready(function(){
		collage();
        $('.Collage').collageCaption();
    });
});

function collage() {
    $('.Collage').removeWhitespace().collagePlus(
        {
            'fadeSpeed'     : 2000,
            'targetHeight'  : 200,
            'effect'        : 'effect-3',
            'direction'     : 'vertical'
        }
    );
};

var resizeTimer = null;
$(window).bind('resize', function() {
        // hide all the images until we resize them
    $('.Collage .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
    if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
});