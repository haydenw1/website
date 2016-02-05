swipeSlider = {

  sliderDetails: {},
  data: {},


  setUp: function ( object ) {
    this.data = object;
    this.domDivs = $( '.swipeSlider' );
    console.log(this.domDivs);

    var sliderCount = 0;
    var windowWidth = window.innerWidth;
    var imageWidthPerc = 0.85;
    var imageWidth = windowWidth * imageWidthPerc;
    var imagePadding = windowWidth * 0.025;
    var imageTotalWidth = imageWidth + imagePadding;
    var swipeDiv;



    for ( var key in this.data ) {
      var count = this.data[ key ].images.length;
      this.data[ key ].centeredPositions = [];
      this.data[ key ].halfImageTotal = imageTotalWidth / 2;
      console.log(this.data[ key ]);

      //for ( var x in this.data[ key ].images ) {
      //  count++;
      //}
      console.log(count);

      //var swipeDiv = document.createElement( 'div' );
      //swipeDiv.className = "swipeSlider_swipe-div";
      for ( var i = 0; i < this.domDivs.length; i++ ) {
        if ( this.domDivs[i].id === key ) {
          swipeDiv = this.domDivs[i];
          this.data[ key ].swipeDiv = swipeDiv;
        }
      }

      console.log( swipeDiv );

      var imageDivWidth = ( count * imageWidth ) + ( ( count ) * imagePadding );
      var imageDiv = document.createElement( 'div' );
      imageDiv.className = "swipeSlider_image-div";
      imageDiv.id = swipeDiv.id;
      imageDiv.style.width = imageDivWidth + "px";
      imageDiv.style[ "padding-left" ] = ( ( 100 - ( 100 * imageWidthPerc ) ) / 2 ) + "%";
      this.data[ key ].imageDiv = imageDiv;

      for ( var a = 0; a < count; a++ ) {
        console.log(key);
        this.data[ key ].centeredPositions.push( a * imageTotalWidth );
        this.data[ key ].images[a].position = a * imageTotalWidth;

        var img = document.createElement( 'img' );
        img.className = "swipeSlider_image";
        img.id = swipeDiv.id;
        img.src = this.data[ key ].images[ a ].src;
        img.style.width = imageWidth + "px";
        img.style[ "margin-right" ] = imagePadding + "px";

        this.data[ key ].images[a].element = img;
        imageDiv.appendChild( img );

        var natH = $( img ).prop( "naturalHeight" );
        var natW = $( img ).prop( "naturalWidth" );

        var setHeight = ( imageWidth * natH ) / natW;
        swipeDiv.style.height = setHeight + "px";

        console.log( setHeight );

      }

      this.setSwipeListeners( swipeDiv );

      swipeDiv.appendChild( imageDiv );
      //document.body.appendChild( swipeDiv );

      this.changeHeight( this.data[ key ], 0 );
      //this.sliderDetails[ key ] = this.data[ key ];
    }
    console.log( this.data );




    //this.sliderDetails.centeredPositions = [];
    //this.sliderDetails.halfImageTotal = imageTotalWidth / 2;

    //for ( var i = 0; i < count; i++ ) {
    //  this.sliderDetails.centeredPositions.push( i * imageTotalWidth );
    //}

    //var swipeDiv = document.createElement( 'div' );
    //swipeDiv.className = "swipeSlider_swipe-div";

    //var imageDiv = document.createElement( 'div' );
    //imageDiv.className = "swipeSlider_image-div";
    //imageDiv.style.width = imageDivWidth + "px";
    //imageDiv.style[ "padding-left" ] = ( ( 100 - ( 100 * imageWidthPerc ) ) / 2 ) + "%";

    //var id = "1";

    //var one = this.sliderDetails[ id ] = {};
    //one.swipeDiv = swipeDiv;
    //one.imageDiv = imageDiv;

    //for ( var x in object ) {
    //  var img = document.createElement( 'img' );
    //  img.className = "swipeSlider_image";
    //  img.src = object[ x ].image;
    //  img.style.width = imageWidth + "px";
    //  img.style[ "margin-right" ] = imagePadding + "px";
    //  imageDiv.appendChild( img );
    //}

    /*
    if ( typeof window.addEventListener === 'function' ){
      (function ( _sD ) {
        _sD.addEventListener("touchstart", function( event ) {
          swipeSlider.handleStart( event );
        });
      })( swipeDiv );
    }

    if ( typeof window.addEventListener === 'function' ){
      (function ( _sD ) {
        _sD.addEventListener("touchmove", function( event ) {
          swipeSlider.handleMove( event );
        });
      })( swipeDiv );
    }

    if ( typeof window.addEventListener === 'function' ){
      (function ( _sD ) {
        _sD.addEventListener("touchend", function() {
          swipeSlider.handleEnd();
        });
      })( swipeDiv );
    }
*/


    //swipeDiv.appendChild( imageDiv );
    //document.body.appendChild( swipeDiv );
  },

  setSwipeListeners: function ( swipeDiv ) {
    if ( typeof window.addEventListener === 'function' ){
      (function ( _sD ) {
        _sD.addEventListener("touchstart", function( event ) {
          swipeSlider.handleStart( event );
        });
      })( swipeDiv );
    }

    if ( typeof window.addEventListener === 'function' ){
      (function ( _sD ) {
        _sD.addEventListener("touchmove", function( event ) {
          swipeSlider.handleMove( event );
        });
      })( swipeDiv );
    }

    if ( typeof window.addEventListener === 'function' ){
      (function ( _sD ) {
        _sD.addEventListener("touchend", function() {
          swipeSlider.handleEnd();
        });
      })( swipeDiv );
    }
  },

  handleStart: function( evt ) {
    console.log( evt.touches[0] );
    console.log( evt.target.id );
    this.data[ evt.target.id ].xStart = evt.touches[0].pageX;
    //swipeSlider.sliderDetails.xStart = evt.touches[0].pageX;
    //if( !swipeSlider.sliderDetails.xUpdate) {
      //swipeSlider.sliderDetails.xUpdate = evt.touches[0].pageX;
    //}
    //swipeSlider.sliderDetails.yStart = evt.touches[0].pageY;
  },

  handleMove: function( evt ) {
    //console.log( evt.touches[0].pageX );
    //console.log(evt);
    var id = evt.target.id;

    if ( evt.path[ 1 ].className == "swipeSlider_image-div") {
      var el = evt.path[ 1 ];
      this.data[ id ].el = el;
    }
    if ( this.data[ id ].el === undefined ) return;

    var x = evt.touches[0].pageX;
    var xS = this.data[ id ].xStart;

   // console.log(!swipeSlider.sliderDetails.xUpdate);
    //console.log(swipeSlider.sliderDetails.xUpdate);

    if( !this.data[ id ].xUpdate ) {
      this.data[ id ].xUpdate = 0;
    }

    var xU = this.data[ id ].xUpdate;

    //if ( x > xU ) {
      var elLeft = $( this.data[ id ].el ).css("left");
      var regLeftNum =/\d+/;
      var elLeftNum = Number( regLeftNum.exec(elLeft) );

      var difference = Number( x - xS + xU );
      //xU = x;
      elLeftNum = difference;

      //console.log(difference);
      this.data[ id ].xCurrent = difference;

      this.data[ id ].el.style.left = Math.floor( elLeftNum ) + "px";
    //}
    //
    console.log( id );
    this.lastTouchedId = id;

    //if ( x < xU ) {
      //var elLeft = $(el).css("left");
      //var regLeftNum =/\d+/;
      //var elLeftNum = Number( regLeftNum.exec(elLeft) );
//
//      //var difference = Number( xU - x );
//      //xU = x;
//      //elLeftNum = -difference;
//
      //el.style.left = Math.floor( elLeftNum ) + "px";
    //}


    //console.log( evt.path[ 1 ].className );

    if ( evt.path[ 1 ].className == "swipeSlider_image-div") {
      //swipeSlider.sliderDetails.target = ( evt.path[ 1 ] );
      //var el = evt.path[ 1 ];
      //el.style.right = "20px";
    }
  },

  handleEnd: function() {
    //console.log( "Last x position was " + swipeSlider.sliderDetails.xCurrent );

    var sD = this.data[ this.lastTouchedId ];
    console.log( sD );
    var xC = sD.xCurrent;
    var cP = sD.centeredPositions;

    sD.xUpdate = sD.xCurrent;
    console.log(sD);


    for ( var i = 0; i < cP.length; i++ ) {

      var cV = cP[ i ];

      if ( ( cV === 0 ) && ( -xC < cV ) ) {

        $( sD.el ).animate( {
          left: -cV + "px"
        }, 250 );

        sD.xUpdate = cV;

      } else if ( ( i == cP.length - 1 ) && ( -xC > cV ) ) {

        $( sD.el ).animate( {
          left: -cV + "px"
        }, 250 );

        sD.xUpdate = -cV;

      } else if ( ( -xC < ( cV + sD.halfImageTotal ) ) && ( -xC > ( cV - sD.halfImageTotal - 1 ) ) ) {

        $( sD.el ).animate( {
          left: -cV + "px"
        }, 250 );

        sD.xUpdate = -cV;

      } else {

      }
      this.changeHeight( sD);
    }
  },

  changeHeight: function( obj, start ) {
    if ( start != undefined ) {
      var pos = start;
    } else {
      var pos = -obj.xUpdate;
    }

    console.log( -obj.xUpdate );
    var images = obj.images;
    for( var i = 0; i < images.length; i++ ) {
      if ( images[i].position == pos ) {
        console.log( images[i].position );
        console.log( obj.xUpdate );
        images[i].element.className = "swipeSlider_image--selected";
      } else {
        images[i].element.className = "swipeSlider_image";
      }
    }
  }

  //copyTouch: function( touch ) {
  //  return { identifier: touch.identifier, pageX: touch.pageX, pageY: touch.pageY };
  //}
};
