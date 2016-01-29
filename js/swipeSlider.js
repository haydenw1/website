swipeSlider = {
  setUp: function ( object ) {
    var count = 0;
    console.log(object);


    for ( var key in object ) {
      console.log( object[ key ].image );
      count++;
    }

    var windowWidth = window.innerWidth;
    var imageWidthPerc = 0.85;
    var imageWidth = windowWidth * imageWidthPerc;
    console.log( imageWidth );
    var imagePadding = windowWidth * 0.025;
    console.log( imagePadding );
    var imageDivWidth = ( count * imageWidth ) + ( ( count ) * imagePadding );
    console.log( imageDivWidth );

    var swipeDiv = document.createElement( 'div' );
    swipeDiv.className = "swipeSlider_swipe-div";
    //swipeDiv.style.width = "100%";
    //swipeDiv.style.overflow = "hidden";

    var imageDiv = document.createElement( 'div' );
    imageDiv.className = "swipeSlider_image-div";
    imageDiv.style.width = imageDivWidth + "px";
    imageDiv.style[ "padding-left" ] = ( ( 100 - ( 100 * imageWidthPerc ) ) / 2 ) + "%";

    for ( var x in object ) {
      var img = document.createElement( 'img' );
      img.className = "swipeSlider_image";
      img.src = object[ x ].image;
      img.style.width = imageWidth + "px";
      img.style[ "margin-right" ] = imagePadding + "px";
      imageDiv.appendChild( img );
    }


    swipeDiv.appendChild( imageDiv );
    document.body.appendChild( swipeDiv );
  }
}
