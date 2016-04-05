verticalCenter = {

  currentPadding: [],

  center: function( className, option ) {

    className = $( '.' + className);

    for ( i = 0; i < className.length; i++ ) {
      var parentHeight = className[i].parentNode.clientHeight;
      var height = className[i].clientHeight;
      var heightBounding = className.height();


      //if ( option === "nav" && verticalCenter.currentPadding[ className.selector ] ){
      //  console.log( height );
      //  height = height - verticalCenter.currentPadding[ className.selector ];
      //  console.log( height );
      //}
//
      //var paddingAmount = ( parentHeight - height ) / 2;

      var paddingAmount = ( parentHeight - heightBounding ) / 2;

      //console.log(parentHeight);
      //console.log(height);
      //console.log(paddingAmount);

      //if ( option == "nav" ) {
        //paddingAmount--;
      //}

      $( className[i] ).css("padding-top", paddingAmount + "px");
      $( className[i] ).css("margin", 0);

      verticalCenter.currentPadding[ className.selector ] = paddingAmount;

    }
  }
};
