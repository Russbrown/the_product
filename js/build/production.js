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

( function() {
	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();
