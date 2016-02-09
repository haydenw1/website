panAndZoom = {

  data: {},

  setUp: function( object ) {
    console.log(object);

    this.data = object;
    this.windowWidth = window.innerWidth;
    this.imgSources = [];
    this.lastRand = undefined;

    console.log(this.data);
    this.domImg = $( '.panAndZoom' )[0];
    console.log(this.domImgs);

    for ( var x in this.data ) {
      for ( var a in this.data[x] ) {
        console.log(x);
        console.log(a);
        console.log(this.data[x][a]);
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
    //for( var i = 0; i < this.domImgs.length; i++ ) {
    //  var id = this.domImgs[i].id;
    //  this.domImgs[i].src = this.data[id].images[i].src;
    //  this.animate( this.domImgs[i], id );
    //}
  },

  cycleSource: function() {
    numSources = this.imgSources.length;
    rand = Math.round( Math.random() * ( numSources - 1 ) );

    if ( rand == this.lastRand ) {
      this.cycleSource();
    }

    this.lastRand = rand;
    console.log(rand);
    this.domImg.src = this.imgSources[ rand ];

    //$( this.domImg ).load( function(){
      panAndZoom.startMovement();
    //});
  },

  startMovement: function() {
    var img = this.domImg;

    $( img ).unbind('load').load( function(){
      img.style.left = "0px";
      var imgWidth = img.clientWidth;
      console.log(imgWidth);
      console.log(img.clientHeight);

      var widthDifference = imgWidth - panAndZoom.windowWidth;
      console.log(widthDifference);
      widthDifference = -widthDifference;
      var speed = -widthDifference * 14.7;
      console.log(widthDifference);
      console.log(speed);


      $(img).animate({
        left: widthDifference,
        //top: "-353px"
        //bottom: "-5px"
      }, speed, "linear", function(){
        panAndZoom.cycleSource();
      });
    });
  }
};
