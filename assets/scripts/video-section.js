(function($) {
  var video         = $('#video-section-bg'),
      videoPlayed   = false,
      isIOS         = true;

  video.bind('ended', function() {
    videoPlayed = true;
  });

  console.log(isIOS);

  if (isIOS) {

    var canvasVideo = new CanvasVideoPlayer({
      videoSelector: '#video-section-bg',
      canvasSelector: '.video-section-bg-ios',
      timelineSelector: false,
      pauseOnClick: false,
      audio: false
    });

  } else {
    // Use HTML5 video
    $('.video-section-bg-ios').hide();
  }

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
      canvasVideo.playPause()
    }
    else if (videoPlayed === false) {
      video.get(0).pause();
      canvasVideo.playPause()
    }
  });
})(jQuery);
