const slider = ($) => {
    Drupal.behaviors.slider = {
        attach(context) {
            const $context = $(context);
            $context.find('.gallery-img').slick({
                infinite: true,
                autoplay: true,
                arrows: false,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            arrows: false,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            })

            const $cont = $(context);
            $cont.find('.event-img').slick({
                infinite: true,
                autoplay: true,
                arrows: false,
                dots: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            })
        }
    };
};
slider(jQuery);


// document.addEventListener("DOMContentLoaded", () => {
//     var loader = document.getElementById("pageload");
//     window.addEventListener("load", function() {
//         loader.style.display = "none";
//     })
// });