var resizeTimeout;

window.addEventListener("resize", resizeThrottler, false);

function resizeThrottler(){
  // ignore resize events as long as an actualResizeHandler execution is in the queue
  if ( !resizeTimeout ) {
    resizeTimeout = setTimeout(function() {
      resizeTimeout = null;
      actualResizeHandler();

     // The actualResizeHandler will execute at a rate of 15fps
     }, 66);
  }
}

function actualResizeHandler() {
  var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  if ( windowWidth > 959 && $( window ).scrollTop() >= 120 ) quicklinks.setQuicklinksRight();

  if ( windowWidth < 960 ) {
    if ( !quicklinks.smallWindow ) {
      quicklinks.moveWithScrollSmallWindow();
      quicklinks.showMobileButton();
    }
  } else {
    if ( !quicklinks.largeWindow ) {
      quicklinks.moveWithScrollLargeWindow();
      quicklinks.hideMobileButton();
    }
  }

  if ( !navMenu.inProgress ) navMenu.hideMenu(0.1);

  if ( swipeSlider ) swipeSlider.resizeSliders();

  if ( panAndZoom ) panAndZoom.resizeImage();

  //center front page section names if the user changes screen sizes ( mostly for resizing mobile devices)
  if ( navMenu.frontPage === true ) verticalCenter.center( "display--front");
}


