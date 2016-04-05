verticalCenter = {
  center: function( container, className ) {
    //container
    //front
    //container = $( '.' + container );
    className = $( '.' + className);

    //var mainHeight = $( container ).height();
    console.log(className);
    for ( i = 0; i < className.length; i++ ) {
      var height = className[i].clientHeight;
      var child = className[i].children[0];
      var childHeight = child.clientHeight;
      var paddingAmount = ( height - childHeight ) / 2;

      $( child ).css("padding-top", paddingAmount + "px");

      console.log(height);
      console.log(childHeight);


    }
  }
};
