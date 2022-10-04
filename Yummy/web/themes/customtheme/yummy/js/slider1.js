// (function($) {
//     new WOW().init();
// }(jQuery))

// wow = new WOW({
//     boxClass: 'wow', // default
//     animateClass: 'animated', // default
//     offset: 0, // default
//     mobile: true, // default
//     live: true // default
// })
// wow.init();

// (function($) {
//     $(document).ready(function() {
//         new WOW().init();
//     }());
// }(jQuery));



(function($) {
    $(document).ready(function($) {
        if (typeof WOW === 'function') {
            // Check if class exists, then initialize WOW object.
            new WOW().init();
        }
    });
})(jQuery);