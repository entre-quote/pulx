$(function () {
    $('.mobile-menu-opener').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('menu-is-opened');
    });

    $('.mobile-menu-closer').click(function(e) {
        e.preventDefault();
        $('body').toggleClass('menu-is-opened');
    });
 
 });