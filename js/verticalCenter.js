verticalCenter = {
  center: function( className, option ) {

    className = $( '.' + className);

    for ( i = 0; i < className.length; i++ ) {
      var parentHeight = className[i].parentNode.clientHeight;
      var height = className[i].clientHeight;
      var paddingAmount = ( parentHeight - height ) / 2;

      console.log(parentHeight);
      console.log(height);
      console.log(paddingAmount);

      if ( option == "nav" ) {
        paddingAmount--;
      }

      $( className[i] ).css("padding-top", paddingAmount + "px");
    }
  }
};
