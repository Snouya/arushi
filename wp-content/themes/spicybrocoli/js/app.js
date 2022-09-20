/** 
 * SBM JS Functions
 * All custom functions on this file MUST have the "sbm_" prefix to avoid conflicts.
 * */

    $(document).ready(function() {
        sbm_menuFixer();
    });

    $(window).resize(function(){
        sbm_menuFixer();
    });

    $(window).scroll(function(){
        sbm_menuFixer();
    });

    //ADD SCROLLED CLASS TO <body> WHEN PAGE IS SCROLLED DOWN
    function sbm_menuFixer(){
        var scrooll = $(window).scrollTop();
        var body = $('body');
        if (scrooll > 150) {
            body.addClass('scrolled');
        } else {
            body.removeClass('scrolled');
        }
    }
    
    //SMOOTHLY SCROLL TO TOP WHEN ANY <a> ELEMENTS WITH CLASS .scrolltotop IS CLICKLED
    function sbm_scrollToTop( e ){
        e.preventDefault();
        jQuery('html,body').animate({scrollTop:0}, 700);
    }
    $('.scrolltotop').on('click', sbm_scrollToTop);
    
    