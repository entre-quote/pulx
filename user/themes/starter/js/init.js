//
(function($){

    var app = {

        init: function(){
            this.initBg();
            this.initMobileMenu();
        },

        initBg: function() {
            var images = ['bg-1.png','bg-2.png','bg-3.png','bg-4.png','bg-5.png','bg-6.png','bg-7.png','bg-8.png','bg-9.png'];
            $('html').css({'background-image': 'url(http://entre-quote.fr/pulx/user/themes/starter/images/bg/' + images[Math.floor(Math.random() * images.length)] + ')'});
        },

        initMobileMenu: function() {

            $('.mobile-menu-opener').click(function() {
                alert("plop")
                // e.preventDefault();
                // $('.mobile-nav').toggleClass('is-opened');
            });
        }

    };

    app.init();

})(jQuery);
