panAndZoom = {

  data: {},

  setUp: function( object ) {
    console.log(object);

    this.data = object;
    console.log(this.data);
    this.domImgs = $( '.panAndZoom' );
    console.log(this.domImgs);

    for( var i = 0; i < this.domImgs.length; i++ ) {
      var id = this.domImgs[i].id;
      this.domImgs[i].src = this.data[id].images[i].src;
      this.animate( this.domImgs[i], id );
    }
  },

  animate: function( img, id ) {
    img.style.left = "0px";
    $( img ).load(function(){
      console.log(img.clientWidth);
      console.log(img.clientHeight);
    });

    $(img).animate({
      left: "-1728px",
      //top: "-353px"
      //bottom: "-5px"
    }, 25000, "linear", function(){
      panAndZoom.animate( img, id );
    });
  }
};
