(($) => {
  Drupal.behaviors.about_slider = {
    attach() {
      const $slider = $('.aboutus_slider_container__slider_content');
      if ($slider.length > 0) {
        $($slider)
          .not('.slick-initialized')
          .slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            responsive: [
              {
                breakpoint: 960,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                },
              },
              {
                breakpoint: 416,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                },
              },
            ],
          });
      }
    },
  };
})(jQuery);
