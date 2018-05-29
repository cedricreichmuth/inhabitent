/*header position & color*/
(function ($) {
    'use strict';
    window.onscroll = function() {myFunction()};

    function myFunction() {
      if (document.documentElement.scrollTop > 820) {
        $('.page-template #masthead.site-header').css({'background-color': 'hsla(0,0%,100%,.85)', 'position': 'fixed', 'color': '#248A83'});
    } else{
        $('.page-template #masthead.site-header').css({'background-color': 'transparent', 'position': 'absolute', 'color': 'white'});
    }
}
}(jQuery));
