jQuery(function($) {
    var menuBottom = $("#menu-bottom");
    var menuTop = $("#menu-top");
    $(window).scroll(function(){
        if($(this).scrollTop()>=0.55*$(window).height()){
            $('#page-menu').addClass('fixed');
            menuTop.css('display','block');
            menuBottom.css('display','none');
        }
        else if ($(this).scrollTop()<=0.45*$(window).height()){
            $('#page-menu').removeClass('fixed');
            menuBottom.css('display','block');
            menuTop.css('display','none');
        }
    });
})