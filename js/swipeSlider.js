swipeSlider = {

  sliderDetails: {},
  data: {},


  setUp: function ( object ) {
    this.data = object;
    this.domDivs = $( '.swipeSlider' );
    console.log(this.domDivs);

    var sliderCount = 0;
    //var windowWidth = window.innerWidth; //maybe have to check and change on safari and other browsers?

    var windowWidth = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

    console.log( windowWidth );


    var imageWidthPerc = 0.85;
    var imageWidth = windowWidth * imageWidthPerc;
    var imagePadding = windowWidth * 0.025;
    var imageTotalWidth = imageWidth + imagePadding;
    var swipeDiv
      , natH
      , natW
      , imgHolderForMeasurements;



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
        swipeDiv = undefined;
        console.log(this.domDivs);
        console.log(key);

        if ( this.domDivs[i].id === key ) {
          swipeDiv = this.domDivs[i];
          this.data[ key ].swipeDiv = swipeDiv;
          swipeSlider.setUpScrollDiv( swipeDiv, count, imageWidth, imagePadding, imageWidthPerc, key, imageTotalWidth );
        }
      }
    }

      /*

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

        var captionDiv = document.createElement( 'div' );
        captionDiv.className = "swipeSlider_captionDiv";
        captionDiv.style.width = ( imageWidth + imagePadding ) + "px";

        var img = document.createElement( 'img' );
        img.className = "swipeSlider_image";
        img.id = swipeDiv.id;
        img.src = this.data[ key ].images[ a ].src;
        img.style.width = imageWidth + "px";
        img.style[ "margin-right" ] = imagePadding + "px";

        this.data[ key ].images[a].element = img;

        var caption = document.createElement( 'p' );
        caption.className = "swipeSlider_caption";

        if ( this.data[ key ].images[ a ].caption ) {
          caption.innerHTML = this.data[ key ].images[ a ].caption;
        }

        this.data[ key ].images[a].captionElement = caption;


        captionDiv.appendChild( img );
        captionDiv.appendChild( caption );
        imageDiv.appendChild( captionDiv );

        imgHolderForMeasurements = img;
      }

      $( imgHolderForMeasurements ).load( function() {
        natH = $( imgHolderForMeasurements ).prop( "naturalHeight" );
        natW = $( imgHolderForMeasurements ).prop( "naturalWidth" );

        console.log(natH);
        console.log(natW);

        var setHeight = ( imageWidth * natH ) / natW;
        swipeDiv.style.height = ( setHeight + 10) + "px";
        console.log( setHeight );
      });

      this.setSwipeListeners( swipeDiv );

      swipeDiv.appendChild( imageDiv );

      this.changeHeight( this.data[ key ], 0 );
    */

    console.log( this.data );

    window.onscroll = function (e) {
      swipeSlider.yScrolled = true;
      console.log( swipeSlider.yScrolled );
    }

  },


  setUpScrollDiv: function ( swipeDiv, count, imageWidth, imagePadding, imageWidthPerc, key, imageTotalWidth ) {

      console.log( swipeDiv );

      //console.log( $( '#' + key + '.swipeSlider' ) );

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

        var captionDiv = document.createElement( 'div' );
        captionDiv.className = "swipeSlider_captionDiv";
        captionDiv.style.width = ( imageWidth + imagePadding ) + "px";

        var img = document.createElement( 'img' );
        img.className = "swipeSlider_image";
        img.id = swipeDiv.id;
        img.src = this.data[ key ].images[ a ].src;
        img.style.width = imageWidth + "px";
        img.style[ "margin-right" ] = imagePadding + "px";

        this.data[ key ].images[a].element = img;

        var caption = document.createElement( 'p' );
        caption.className = "swipeSlider_caption";

        if ( this.data[ key ].images[ a ].caption ) {
          caption.innerHTML = this.data[ key ].images[ a ].caption;
        }

        this.data[ key ].images[a].captionElement = caption;


        captionDiv.appendChild( img );
        captionDiv.appendChild( caption );
        imageDiv.appendChild( captionDiv );

        this.data[ key ].measureImg = img;
      }

      console.log( this.data[ key ].measureImg );

      $( this.data[ key ].measureImg ).load( function() {
        natH = $( swipeSlider.data[ key ].measureImg ).prop( "naturalHeight" );
        natW = $( swipeSlider.data[ key ].measureImg ).prop( "naturalWidth" );

        console.log(natH);
        console.log(natW);

        var setHeight = ( imageWidth * natH ) / natW;
        console.log(setHeight);
        //swipeDiv.style.height = ( setHeight + 10) + "px";
        //swipeDiv.setAttribute( "height", ( setHeight + 10) + "px" );
        $( '#' + key + '.swipeSlider' ).css( "height", ( setHeight + 10) + "px" );
        console.log( setHeight );
      });

      this.setSwipeListeners( swipeDiv );

      swipeDiv.appendChild( imageDiv );

      this.changeHeight( this.data[ key ], 0 );
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
    if ( this.data[ evt.target.id ] ) {
      this.data[ evt.target.id ].xStart = evt.touches[0].pageX;
    }

    swipeSlider.yScrolled = false;
    console.log( swipeSlider.yScrolled );

  },

  handleMove: function( evt ) {

    if ( swipeSlider.yScrolled === true ) return;
    console.log( swipeSlider.yScrolled );

    if ( !evt.target.id ) {
      this.lastTouchedId = undefined;
      return;
    }
    var id = evt.target.id;

    if ( evt.path[ 2 ].className == "swipeSlider_image-div") {
      var el = evt.path[ 2 ];
      this.data[ id ].el = el;
    }
    if ( this.data[ id ].el === undefined ) return;

    var x = evt.touches[0].pageX;
    var xS = this.data[ id ].xStart;

    if( !this.data[ id ].xUpdate ) {
      this.data[ id ].xUpdate = 0;
    }

    var xU = this.data[ id ].xUpdate;

    var elLeft = $( this.data[ id ].el ).css("left");
    var regLeftNum =/\d+/;
    var elLeftNum = Number( regLeftNum.exec(elLeft) );
    var difference = Number( x - xS + xU );

    elLeftNum = difference;

    this.data[ id ].xCurrent = difference;
    this.data[ id ].el.style.left = Math.floor( elLeftNum ) + "px";

    console.log( id );
    this.lastTouchedId = id;


    if ( evt.path[ 1 ].className == "swipeSlider_image-div") {

    }
  },

  handleEnd: function() {
    //console.log( "Last x position was " + swipeSlider.sliderDetails.xCurrent );

    if ( !this.lastTouchedId ) return;

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
        images[i].captionElement.style.opacity = 1;

      } else {
        images[i].element.className = "swipeSlider_image";
        images[i].captionElement.style.opacity = 0;
      }
    }
  }

  //copyTouch: function( touch ) {
  //  return { identifier: touch.identifier, pageX: touch.pageX, pageY: touch.pageY };
  //}
};
