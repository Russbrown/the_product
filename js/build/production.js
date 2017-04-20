$( document ).ready(function() {
	
    ////// ANALYTICS //////

    $('.js-twitter-share').on('click', function(){
        ga('send', {
            hitType: 'event',
            eventCategory: 'Share',
            eventAction: 'Twitter-share--popup'
        });
    });

    ////// NAV //////

    $('.nav__btn').on("click", function(){
        $('.nav__items').toggleClass('nav__mobile');
    });


    ////// tweet quote

    $('blockquote a').each( function(){
        var intent = $(this).attr("href");
        var url = document.location.href;
        var quote = $(this).prev('p').text();
        var newIntent = intent + "?url=" + url + "&text=" + quote;
        $(this).attr("href", newIntent);
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
