var blackout = {
  close: function() {
    $( 'html' ).removeClass('html--no-scroll');
    $( '.blackout' ).fadeOut();
  }
};
