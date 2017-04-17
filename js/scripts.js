$( document ).ready(function() {
	
    ////// ANALYTICS //////

    $('.js-twitter-share').on('click', function(){
        ga('send', {
            hitType: 'event',
            eventCategory: 'Share',
            eventAction: 'Twitter-share--popup'
        });
    });

    $('.js-subscribe--footer').on('click', function(){
        ga('send', {
            hitType: 'event',
            eventCategory: 'Subscribe',
            eventAction: 'subscribe--footer'
        });
    });

    $('.js-subscribe--popup').on('click', function(){
        ga('send', {
            hitType: 'event',
            eventCategory: 'Subscribe',
            eventAction: 'subscribe--popup'
        });
    });

    ////// NAV //////

    $('.nav__btn').on("click", function(){
        $('.nav__items').toggleClass('nav__mobile');
    });

});
