(function($) {
  $(document).ready(function() {
    $(".modal-trigger").on("click", function(e) {
      e.preventDefault();
      $("body").addClass("modal-open");
    });

    $(".modal-fade-screen, .modal-close").on("click", function() {
      $("body").removeClass("modal-open");
    });

    $(".modal-inner").on("click", function(e) {
      e.stopPropagation();
    });
  });
})(jQuery);