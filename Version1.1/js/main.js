$(document).ready(function(){
    var typed_strings = $('.typed').data('typed-items');
    typed_strings = typed_strings.split(',')
    new Typed('.typed',{
        strings: typed_strings,
        loop: true,
        typeSpeed: 100,
        backspeed: 50,
        backDelay: 2000
    });

    // changing navbar color on scroll

    var myNav = $(".header");
    var nav = $(".navbar");
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > 200){
            myNav.addClass("fixed");
            nav.addClass("fixed");
        }else{
            myNav.removeClass("fixed");
            nav.removeClass("fixed");
        }
    });

});