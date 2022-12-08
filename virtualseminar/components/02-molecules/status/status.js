(($) => {
  Drupal.behaviors.status = {
    attach() {
      setInterval(() => {
        $('.status--error').fadeToggle();
      }, 500);
    },
  };
})(jQuery);
