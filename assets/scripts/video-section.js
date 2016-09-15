(function($) {
  var video         = $('#video-section-bg'),
      videoPlayed   = false;

  video.bind('ended', function() {
    videoPlayed = true;
  });

  // Calculate if the element is scrolled in view so that at least a quarter of the video is in view
  function scrolledIntoView(el) {
    var docViewTop    = $(window).scrollTop(),
        docViewBottom = docViewTop + $(window).height(),
        elTop         = $(el).offset().top,
        elHeight      = $(el).height(),
        elBottom      = elTop + elHeight;

    return ( (elTop + elHeight*0.25 <= docViewBottom) && (elBottom - elHeight*0.25 >= docViewTop) );
  }

  $(window).scroll(function() {
    if ( scrolledIntoView('.video-section') && videoPlayed === false ) {
      video.get(0).play();
      console.log('play');
    }
    else if (videoPlayed === false) {
      video.get(0).pause();
      console.log('pause');
    }
  });
})(jQuery);
