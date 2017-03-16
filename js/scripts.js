$( document ).ready(function() {
	
    ////// ANALYTICS //////

    $('.js-twitter-share').on('click', function(){
        ga('send', {
            hitType: 'event',
            eventCategory: 'Share',
            eventAction: 'Twitter-share'
        });
    });

    ////// SUBSCRIBER //////

    $('.js-subscribe-close').on("click", function(){
        showMessage();
    });

    $('.subscribe-msg__link').on("click", function(){
        showMessage();
    });

    function showMessage(){
        $('.subscribe-msg').toggleClass('subscribe-msg--active');
    }

    doOnce();

    function doOnce() {
        if (document.cookie.replace(/(?:(?:^|.*;\s*)Theprdct_subscribe\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
            setTimeout(showMessage, 25000);
            var CookieDate = new Date;
            CookieDate.setFullYear(CookieDate.getFullYear( ) +1);
            document.cookie = "Theprdct_subscribe=true; expires=" + CookieDate.toGMTString( ) + ";";
        }
    }

    ////// NAV //////

    $('.nav__btn').on("click", function(){
        $('nav').toggleClass('nav--closed');
        $('nav').toggleClass('nav--open');
    });

    $('.nav__display-toggle').on('click', function(){
        $('nav').toggleClass('nav__display-name--active');
        $('nav').toggleClass('nav__display-company--active');
    });

});
