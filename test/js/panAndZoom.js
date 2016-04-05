panAndZoom = {

  //data: {},

  setUp: function( object ) {
    console.log(object);

    this.data = object;
    this.windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if ( this.windowWidth > 900 ) this.windowWidth = 900;
    this.divHeight = parseInt( $('.front_projects').css("height") );
    console.log(this.divHeight);

    this.imgSources = [];
    this.lastRand = undefined;

    //console.log(this.data);
    this.domImg = $( '.panAndZoom' )[0];
    //console.log(this.domImg);

    for ( var x in this.data ) {
      for ( var a in this.data[x] ) {
        //console.log(x);
        //console.log(a);
        //console.log(this.data[x][a]);
        if ( this.data[x][a].images ) {
          for ( var b = 0; b < this.data[x][a].images.length; b++ ) {
            if ( this.data[x][a].images[b].panAndZoom === true ) {
              panAndZoom.imgSources.push( this.data[x][a].images[b].src );
            }
          }
        }
      }
    }

    console.log( this.imgSources );
    this.cycleSource();

    var imagesToPreload = [];
    for( var i = 0; i < panAndZoom.imgSources.length; i++ ) {
      imagesToPreload[i] = new Image();
      imagesToPreload[i].src = panAndZoom.imgSources[i];
      //console.log(imagesToPreload[i]);
    }
    //for( var i = 0; i < this.domImgs.length; i++ ) {
    //  var id = this.domImgs[i].id;
    //  this.domImgs[i].src = this.data[id].images[i].src;
    //  this.animate( this.domImgs[i], id );
    //}
  },

  cycleSource: function() {
    numSources = panAndZoom.imgSources.length;
    rand = Math.round( Math.random() * ( ( numSources + 0.49 ) - 1 ) );

    if ( rand == this.lastRand ) {
      panAndZoom.cycleSource();
    }

    panAndZoom.lastRand = rand;
    //console.log(rand);
    panAndZoom.domImg.src = panAndZoom.imgSources[ rand ];

    //$( this.domImg ).load( function(){
      panAndZoom.startMovement();
    //});
  },

  startMovement: function() {
    var img = this.domImg;

    $( img ).unbind('load').load( function(){
      img.style.left = "0px";
      var imgWidth = img.clientWidth;
      var imgHeight = img.clientHeight;
      //console.log(imgWidth + "at start");
      //console.log(img.clientHeight);

      var widthDifference = imgWidth - panAndZoom.windowWidth;
      var heightDifference = imgHeight - panAndZoom.divHeight;
      //console.log(heightDifference);
      var randomTopOffset = Math.random() * -heightDifference;
      //console.log(randomTopOffset);
      panAndZoom.currentTopOffsetPercent = randomTopOffset / heightDifference;
      //console.log(panAndZoom.currentTopOffsetPercent);
      //console.log(widthDifference);
      widthDifference = -widthDifference;
      var speed = -widthDifference * 14.7;
      //panAndZoom.currentSpeed = speed;
      //console.log(widthDifference);
      //console.log(speed);

      $(img).css("top", randomTopOffset);

      $(img).stop().animate({
        left: widthDifference,
        //top: randomTopOffset,
        //bottom: "-5px"
      }, speed, "linear", function(){
        panAndZoom.cycleSource();
      });
    });
  },

  resizeImage: function() {
    if ( !panAndZoom.data ) return;
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if ( panAndZoom.windowWidth == width ) {
       return;
    }
    //alert("differentWidths");
    panAndZoom.windowWidth = width;
    if ( panAndZoom.windowWidth > 900 ) panAndZoom.windowWidth = 900;
    panAndZoom.divHeight = parseInt( $('.front_projects').css("height") );

    var img = panAndZoom.domImg;
    //console.log( parseInt(img.style.left) );
    var distanceLeft = parseInt(img.style.left);

    if ( -distanceLeft > panAndZoom.windowWidth ) {
      console.log("left measure greater than new window width");
      panAndZoom.cycleSource();
    }



    var imgWidth = 2 * panAndZoom.windowWidth;
    var imgHeight = img.clientHeight;
    //console.log(imgWidth + "on resize");
    //console.log(panAndZoom.windowWidth);
    var widthDifference = imgWidth - ( panAndZoom.windowWidth + ( -distanceLeft ) ); //+ distanceLeft;
    var heightDifference = imgHeight - panAndZoom.divHeight;
    var randomTopOffset = panAndZoom.currentTopOffsetPercent * heightDifference; //Math.random() * -heightDifference;

    //console.log(-widthDifference);
    //console.log(distanceLeft);
    //console.log(panAndZoom.windowWidth);


    widthDifference = -widthDifference;

    console.log(distanceLeft);
    console.log(panAndZoom.windowWidth);
    console.log(widthDifference);
    var speed = -widthDifference * 14.7 ;
    console.log(speed + " is your speed in ms");

    $(img).css("top", randomTopOffset);

    $(img).stop().animate({
      left: -panAndZoom.windowWidth,
      //top: randomTopOffset,
      //bottom: "-5px"
    }, speed, "linear", function(){
      panAndZoom.cycleSource();
    });
  }
};
