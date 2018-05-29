/*toggle class*/
(function ($) {
    'use strict';
    $('.search-submit').on('click', function() {
      var io = this.io ^= 1;
        $('.fieldset label, .fieldset input').animate({'width': io ? 0 : 200});
        $('.fieldset label, .fieldset input').focus();
        $('.search-form').on('submit',function(){
          var newurl = window.location.href('?s=' + $('.search-field').val());
          window.location.assign(newurl);
    });
});
}(jQuery));
