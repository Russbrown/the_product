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


