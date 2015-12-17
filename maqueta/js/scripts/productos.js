//Scripts productos
$(function() {
    //Menu
    function triggerMobileMenu() {
    
    $("#openMenuCat").click(function () {
        
        if ($("#CategoriasCont").hasClass('hide-nav')) {
            setTimeout(function(){
            $("#CategoriasCont").removeClass('hide-nav').addClass('show-nav');
            }, 100);    
        
        }else {
            
            setTimeout(function(){
            $("#CategoriasCont").removeClass('show-nav').addClass('hide-nav');
            }, 100);
            
            }
        return false;
    });
    
    }
    
    triggerMobileMenu();
});