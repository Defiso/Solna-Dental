(function($) {
  var video         = $('#video-section-bg'),
      videoPlayed   = false;

  video.bind('ended', function() {
    videoPlayed = true;
  });

  function scrolledIntoView(el) {
    var docViewTop    = $(window).scrollTop(),
        docViewBottom = docViewTop + $(window).height(),
        elTop         = $(el).offset().top,
        elBottom      = elTop + $(el).height();

    return ( (elBottom <= docViewBottom) && (elTop >= docViewTop) );
  }

  $(window).scroll(function() {
    if ( scrolledIntoView('.video-section') && videoPlayed === false ) {
      video.get(0).play();
    }
    else if (videoPlayed === false) {
      video.get(0).pause();
    }
  });
})(jQuery);
