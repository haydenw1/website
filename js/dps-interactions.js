var dpsInteractions = {

 base: function () {
    console.log(document.body.clientHeight);
    console.log(window.innerHeight);

    //var upScrollButton = document.createElement('div');
    //$(upScrollButton).addClass("interaction--upbutton")
    //  .html("&#8673;")
    //  .appendTo($("body"));

    this.deviceHeight = window.innerHeight;
    this.deviceWidth = window.innerWidth;
    this.totalHeight = document.body.clientHeight;



    //dpsInteractions.blink.setUp();
    dpsInteractions.seeMore.setUp();

    //document.addEventListener("scroll", function() {
    //  console.log("scrollAmount");
    //  var scrollAmount = document.body.scrollTop;
    //  if ( scrollAmount > deviceHeight * 3 ) {
    //    //$(upScrollButton).show();
    //    $( upScrollButton ).fadeIn( "slow" );
    //  } else {
    //    $( upScrollButton ).fadeOut( "slow" );
    //  }
    //});
//
//    //upScrollButton.addEventListener("touchstart", function() {
//    //  console.log("touched");
//    //  $("html, body").animate({ scrollTop: 0 }, 1000);
    //});



  },

  tap: {

    tapDetails: {
      touch: {},
      show: {},
    },

    setUp: function(){
      var touchArray, showArray, interactionLabelArray, interactionActiveSignifierArray;

      //this.interactionIdentifier = $( '.interaction--tap_holder' ).attr("id"); /////////////////////have to change to support multiple tap holder elements!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

      this.touchArray = $( '.interaction--touch' );
      this.showArray = $( '.interaction--show' );
      this.interactionLabelArray = $( '.interaction--label' );
      this.interactionActiveSignifierArray = $( '.interaction--active-signifier' );

      var tArr = this.touchArray;
      var sArr = this.showArray;
      var tDTouch = this.tapDetails.touch;
      var tDShow = this.tapDetails.show;

      for( a = 0; a < this.touchArray.length; a++ ) {
        var idString = tArr[a].id.toString();
        if ( tDTouch.hasOwnProperty( idString ) ) {
          tDTouch[ idString ].options.push( tArr[a] );
          tDTouch[ idString ].elementsActive.push( false );
        } else {
          tDTouch[ idString ] = {};
          tDTouch[ idString ].options = [ tArr[a] ];
          tDTouch[ idString ].elementsActive = [ false ];
          tDTouch[ idString ].active = false;
        }

        var tap = this;
        if ( typeof window.addEventListener === 'function' ){
          (function ( _t ) {
            _t.addEventListener("touchstart", function() {
              tap.checkIfElementIsActive( _t );
            });
          })( tap.touchArray[a]);
        }
      }

      for( a = 0; a < this.showArray.length; a++ ) {
        var idString = sArr[a].id.toString();
        if ( tDShow.hasOwnProperty( idString ) ) {
          tDShow[ idString ].options.push( sArr[a] );
          tDShow[ idString ].elementsActive.push( false );
        } else {
          tDShow[ idString ] = {};
          tDShow[ idString ].options = [ sArr[a] ];
          tDShow[ idString ].elementsActive = [ false ];
          tDShow[ idString ].active = false;
        }
      }
    },

    checkIfElementIsActive: function( touchedElement ) {
      console.log(touchedElement);
      var tap = this
        , idString = touchedElement.id.toString()
        , touchOb = tap.tapDetails.touch;

      if ( touchOb.hasOwnProperty( idString ) ) {
        var touchOptions = touchOb[ idString ].options;
        var elementLocation = touchOptions.indexOf( touchedElement );
        var touchElActive = touchOb[ idString ].elementsActive;

        if ( touchElActive[ elementLocation ] === false ) {

          tap.checkForElementMatch( touchedElement, idString );

          if ( dpsInteractions.seeMore.hasSeeMoreButton( touchedElement.id ) ) {
            dpsInteractions.seeMore.showOrHideSeeMoreButton( touchedElement.id, "in" );
          }

          touchOb[ idString ].active = true;
          touchElActive[ elementLocation ] = true;

          for( var a = 0; a < touchElActive.length; a++ ) {
            if ( a != elementLocation ) {
              touchElActive[ a ] = false;
            }
          }


        } else if ( touchElActive[ elementLocation ] === true ) {

          tap.checkForElementMatch( touchedElement, idString );

          dpsInteractions.seeMore.touchSeeMoreContract( dpsInteractions.seeMore.findButton( touchedElement.id ) );

          if ( dpsInteractions.seeMore.hasSeeMoreButton( touchedElement.id ) ) {
            dpsInteractions.seeMore.showOrHideSeeMoreButton( touchedElement.id, "out" );
          }


          touchOb[ idString ].active = false;
          touchElActive[ elementLocation ] = false;
        }

        if ( touchOb[ idString ].active === false ) {
          tap.showOrHideLabel( touchedElement.id, "in" );
        } else {
          tap.showOrHideLabel( touchedElement.id, "out" );
        }

      }
    },

    checkForElementMatch: function( touchedElement, id ) {
      var touchedTitle = touchedElement.title
        , tap = this
        , touchOb = tap.tapDetails.touch
        , showOb = tap.tapDetails.show;

      console.log( touchedTitle );

      if ( showOb.hasOwnProperty( id ) ) {
        var showOptions = showOb[ id ].options;
        var showElActive = showOb[ id ].elementsActive;

        for ( var i = 0; i < showOptions.length; i++ ) {
          if ( showOptions[i].title == touchedTitle && showElActive[i] === false ) {
              tap.showOrHideElement( showOptions[i], "in" );
              //tap.showOrHideActiveSignifier( touchedTitle, "in" );
              showOb[ id ].active = true;
              showElActive[i] = true;
          } else if ( showOptions[i].title == touchedTitle && showElActive[i] === true ) {
              tap.showOrHideElement( showOptions[i], "out" );
              //tap.showOrHideActiveSignifier( touchedTitle, "out" );
              showOb[ id ].active = false;
              showElActive[i] = false;
          } else if ( showOptions[i].title != touchedTitle && showElActive[i] === true ) {
              tap.showOrHideElement( showOptions[i], "out" );
              //tap.showOrHideActiveSignifier( touchedTitle, "out" );
              //showOb[ id ].active = false;
              showElActive[i] = false;
          }
        }

      }


      //for ( a = 0; a < showArr.length; a++ ) {
//      //  if ( showArr[a].title == touchedTitle && showArr[a].hidden === true ) {
//
//      //    tap.showOrHideElement( showArr[a], "in" );
//      //    tap.showOrHideActiveSignifier( showArr[a].title, "in" );
//
//      //  } else if ( showArr[a].title == touchedTitle && showArr[a].hidden === false ) {
//
//      //    tap.showOrHideElement( showArr[a], "out" );
//      //    tap.showOrHideActiveSignifier( showArr[a].title, "out" );
//
//      //  } else if ( showArr[a].title !== touchedTitle && showArr[a].hidden === false ) {
//
      //    tap.showOrHideElement( showArr[a], "out" );
      //    tap.showOrHideActiveSignifier( showArr[a].title, "out" );
      //  }
      //}
    },

    showOrHideElement: function( element, action ) {
      var tap = this;

      console.log( element );
      if ( action == "in" ) {
        $( element ).stop().fadeIn( "slow" );
        tap.showOrHideActiveSignifier( element.title, "in" );
        //element.hidden = false;
      } else if ( action == "out" ) {
        $( element ).stop().fadeOut( "fast" );
        tap.showOrHideActiveSignifier( element.title, "out" );
        //element.hidden = true;
      }
      //return;
    },

    showOrHideLabel: function( touchLabelId, action ) {
      var tap = this
        , labelArr = tap.interactionLabelArray;
      console.log( touchLabelId );
      console.log( action );

      for ( i = 0; i < labelArr.length; i++ ) {

        if ( labelArr[i].id == touchLabelId ) {

          if ( action == "in" ) {
            var touchLabelString = touchLabelId.toString();

            if ( dpsInteractions.seeMore.buttonDetails[touchLabelString].expanded == true ) {

              //fetch jquery button reference because stored button reference does not contain parent reference, which is needed in 'touchSeeMoreContract'
              //var button = $( '#' + touchLabelId + '.interaction--button' )[0];
              //dpsInteractions.seeMore.touchSeeMoreContract( button );
              //dpsInteractions.seeMore.showOrHideSeeMoreButton( button, "out" );
            }

            if ( dpsInteractions.blink.hasBlink( tap.interactionLabelArray[i] ) ) {
              dpsInteractions.blink.turnBlinkOn( tap.interactionLabelArray[i] );
            }
            //$( labelArr[i] ).css( "opacity", 0 );
            //$( labelArr[i] ).css( "visibility", "visible" );
            $( labelArr[i] ).stop().fadeIn( "fast" );


          } else if ( action == "out" ) {

            if ( dpsInteractions.blink.hasBlink( labelArr[i] ) ) {
              dpsInteractions.blink.turnBlinkOff( tap.interactionLabelArray[i] );
            }
            //$( labelArr[i] ).css( "visibility", "hidden" );
            $( labelArr[i] ).stop().fadeOut( "fast" );
          }
        }
      }
    },

    showOrHideActiveSignifier: function( signifierTitle, action ) {
      var tap = this
        , sigArr = tap.interactionActiveSignifierArray;

      for ( i = 0; i < sigArr.length; i++ ) {
        if ( sigArr[i].title == signifierTitle ) {
          if ( action == "in" ) {
            $( sigArr[i] ).stop().fadeIn( "slow" );
          } else if ( action == "out" ) {
            $( sigArr[i] ).stop().fadeOut( "fast" );
          }
        }
      }
    }

  },


  seeMore: {

    //expanded: [],
    //buttonsVisible: [],
    //buttonParents: [],
    //
    buttonDetails: {},

    setUp: function () {
      buttonArr = $( '.interaction--see-more--button' ).toArray();
      holderArr = $( '.interaction--see-more--holder').toArray();

      this.buttonArray = buttonArr;
      this.holderArray = holderArr;

      for ( var a = 0; a < buttonArr.length; a++ ){
        var idString = buttonArr[a].id.toString();

        if ( typeof window.addEventListener === 'function' ){
          (function (_a) {
              _a.addEventListener('click', function(){
                  console.log(_a);
                  dpsInteractions.seeMore.touchSeeMoreExpand( _a );
              });
          })(buttonArr[a]);
        }

        this.buttonDetails[ idString ] = {
          button: buttonArr[a],
        }

        if ( $( buttonArr[a] ).hasClass( "interaction--see-more--button--default-hidden" ) ) {
          this.buttonDetails[ idString ].visible = false;
        } else {
          this.buttonDetails[ idString ].visible = true;
        }

        this.buttonDetails[ idString ].expanded = false;

        for ( var i = 0; i < holderArr.length; i++ ) {
          var holderIdString = holderArr[i].id.toString();
          if ( this.buttonDetails.hasOwnProperty( holderIdString ) ) {
            this.buttonDetails[ holderIdString ].holder = holderArr[i];
            this.buttonDetails[ holderIdString ].holderHeight = $( holderArr[i] ).height();
          }
        }

        //this.buttons[ buttonArr[a].id ] = buttonArr[a];
        //this.buttonParents[ buttonArray[a].id ] = array[a].parentNode;
      }

      console.log(this.buttonArray);
      console.log(this.buttonDetails);

    },

    showOrHideSeeMoreButton: function( element, action ) {
      console.log(element);
      console.log(action)

      var seeMore = this
        , arr = seeMore.buttonArray;

      for ( i = 0; i < arr.length; i++ ) {
        if ( arr[i].id == element ) {
          if ( action == "in" ) {

            if( dpsInteractions.blink.hasBlink( arr[i] ) ) {
              dpsInteractions.blink.turnBlinkOn( arr[i] );
            }

            $( arr[i] ).stop().fadeTo( 100, 1 );
          } else if ( action == "out" ) {

            if( dpsInteractions.blink.hasBlink( arr[i] ) ) {
              dpsInteractions.blink.turnBlinkOff( arr[i] );
            }


            //$( arr[i] ).css( "opacity", 0 );
            $( arr[i] ).stop().fadeTo( 100, 0 );
            console.log( "jamalangadingdong");
            console.log( arr[i] );
          }
        }
      }
    },

    touchSeeMoreExpand: function( button, scroll ) {
      var seeMore = this
        , buttonId = button.id
        , buttonIdString = buttonId.toString()
        , detailsObject
        , selectedHolder
        , buttonArrPos
        , buttonClone;

      if ( !scroll && $(button).hasClass("interaction_accordion") ) {
        scroll = true;
      } else {
        scroll = false;
      }

      detailsObject = seeMore.buttonDetails[ buttonIdString ];
      selectedHolder = detailsObject.holder;

      $( selectedHolder ).animate({height: $( selectedHolder ).get(0).scrollHeight}, 500 );

      buttonArrPos = seeMore.buttonArray.indexOf(button);
      buttonClone = button.cloneNode(true);

      button.parentNode.replaceChild(buttonClone, button);

      seeMore.buttonArray[buttonArrPos] = buttonClone;

      if( /Read/.test(buttonClone.innerHTML) ) {
        console.log(buttonClone.innerHTML);
        buttonClone.innerHTML = "<p>- Read Less</p>";
      }


      if ( $ ( buttonClone ).find( "span" ).length > 0) {
        var theSpan = $ ( buttonClone ).find( "span" )[0];
        theSpan.innerHTML = "&ndash;";
      }


      buttonClone.addEventListener('click', function() {
        (function (_b) {
          seeMore.touchSeeMoreContract( _b, true );
        })(buttonClone);
      });

      dpsInteractions.blink.replaceBlinkReference( button, buttonClone );


      var offsetHeight = selectedHolder.scrollHeight;
      console.log( offsetHeight );

      if ( scroll ) {
        $( window ).scrollTo( $( selectedHolder ), 500, { limit: false, offset: 500 });
        console.log( selectedHolder );

        //var offset = $( selectedHolder ).offset();
        //offset.top -= ( dpsInteractions.deviceWidth / 3 );

        //$('html, body').animate({
        //    scrollTop: offset.top,
        //    scrollLeft: offset.left
        //});
      }

      seeMore.buttonDetails[buttonIdString].expanded = true;
    },

    findButton: function( touchedId ) {
      var seeMore = this
        , arr = seeMore.buttonArray
        , button;

      for ( i = 0; i < arr.length; i++ ) {
        if ( arr[i].id == touchedId ) {
            button = arr[i];
            console.log(button);
        }
      }
      return button;
    },

    touchSeeMoreContract: function( button, scroll ) {
      var seeMore = this
        , buttonId = button.id
        , buttonIdString = buttonId.toString()
        , detailsObject
        , selectedHolder
        , height
        , buttonArrPos
        , buttonClone;

      if ( !scroll || $(button).hasClass("interaction_accordion") ) {
        scroll = false;
      }

      detailsObject = seeMore.buttonDetails[ buttonIdString ];
      selectedHolder = detailsObject.holder;
      height = detailsObject.holderHeight;

      $( selectedHolder ).animate({height: height}, 500 );

      buttonArrPos = seeMore.buttonArray.indexOf(button);
      buttonClone = button.cloneNode(true);

      button.parentNode.replaceChild(buttonClone, button);

      seeMore.buttonArray[buttonArrPos] = buttonClone;

      if ( /Read/.test(buttonClone.innerHTML) ) {
        console.log(buttonClone.innerHTML);
        buttonClone.innerHTML = "<p>+ Read More</p>";
      }


      if ( $ ( buttonClone ).find( "span" ).length > 0 ) {
        var theSpan = $ ( buttonClone ).find( "span" )[0];
        theSpan.innerHTML = "+";
      }


      buttonClone.addEventListener('click', function() {
        (function (_b) {
          seeMore.touchSeeMoreExpand( _b );
        })(buttonClone);
      });

      dpsInteractions.blink.replaceBlinkReference( button, buttonClone );

      if ( scroll ) {
        var offsetHeight = ( dpsInteractions.deviceWidth / 3 );

        $( window ).scrollTo( $( selectedHolder ), 500, { offset: -offsetHeight });
        console.log( selectedHolder );

        //var offset = $( selectedHolder ).offset();
        //offset.top -= ( dpsInteractions.deviceWidth / 3 );
//
//        //$('html, body').animate({
//        //    scrollTop: offset.top,
//        //    scrollLeft: offset.left
        //});
      }

      seeMore.buttonDetails[buttonIdString].expanded = false;
    },

    hasSeeMoreButton: function( touchedId ) {
      var seeMore = this
        , arrContainsId = false;

      for ( var i = 0; i < seeMore.buttonArray.length; i++ ) {
        if ( seeMore.buttonArray[i].id == touchedId ) {
          arrContainsId = true;
          break;
        }
      }

      if ( arrContainsId === true ) {
        console.log( "that button is here" );
        return true;
      } else {
        return false;
      }
    }

  },



  blink : {

    //blinkLocation: {},
    //blinkActive : [],
    objectDetails : {},

    setUp: function() {
      var array = $( '.interaction--blink' ).toArray();

      this.blinkArray = array;

      for ( var i = 0; i < array.length; i++ ){
        var titleString = array[i].title;

        this.objectDetails[ titleString ] = {
          object: array[i],
        };

        if ( $( array[i] ).css( "opacity" ) == 0 ) {// || ($( array[a] ).css( "display" ) == "none" ) ) {
          this.objectDetails[ titleString ].blinkActive = false;
        } else {
          this.objectDetails[ titleString ].blinkActive = true;
        }
      }

      console.log(this.objectDetails);

      dpsInteractions.blink.makeBlink();
    },

    makeBlink: function(){
      var blink = dpsInteractions.blink
        , objDet = blink.objectDetails;

      for ( var x in objDet ) {
        if ( objDet[x].blinkActive === false ) {
          continue;
        }

        $( objDet[x].object ).fadeTo( 1000, 0.5, function() {
          $( this ).fadeTo( 1000, 1, function() {
          });
        });
      }
      setTimeout( blink.makeBlink, 3000);
    },

    hasBlink: function ( element ) {
      if ( $( element ).hasClass( "interaction--blink" ) ) {
        return true;
      }
      return false;
    },

    turnBlinkOff: function( element ) {
      var blink = dpsInteractions.blink
        , objDet = blink.objectDetails;

      for ( var x in objDet ) {
        if ( objDet[x].object == element ) {
          objDet[x].blinkActive = false;
          break;
        }
      }
    },

    turnBlinkOn: function( element ) {
      var blink = dpsInteractions.blink
        , objDet = blink.objectDetails;

      for ( var x in objDet ) {
        if ( objDet[x].object == element ) {
          objDet[x].blinkActive = true;
          break;
        }
      }
    },

    replaceBlinkReference: function( oldElement, newElement ) {
      var blink = dpsInteractions.blink
        , objDet = blink.objectDetails;

      for ( var x in objDet ) {
        if ( objDet[x].object == oldElement ) {
          objDet[x].object = newElement;
          break;
        }
      }
    }
  },

};
