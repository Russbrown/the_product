$( document ).ready(function() {
	
    $('.js-twitter-share').on('click', function(){
        ga('send', {
            hitType: 'event',
            eventCategory: 'Share',
            eventAction: 'Twitter-share'
        });
    });

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

});
