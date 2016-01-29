var navMenu = {
  visible: false,

  addMenuListeners: function( element ) {
    if ( $( "." + element ) ) {
      var menu = $( "." + element )[ 0 ];
    }

    menu.addEventListener( "touch", function() {
      if ( navMenu.visible === false ) {
        navMenu.displayMenu( event, menu );
      } else {
        navMenu.hideMenu( event, menu );
      }
    });
    menu.addEventListener( "click", function() {
      if ( navMenu.visible === false ) {
        navMenu.displayMenu( event, menu );
      } else {
        navMenu.hideMenu( event, menu );
      }
    });
  },


  displayMenu: function( event, menu ) {
    console.log( event );
    console.log( menu );

    var holder = $( ".nv-holder" )[ 0 ];
    var scrollHeight = holder.scrollHeight;

    //$( ".nv-holder" ).css( "height", scrollHeight + "px" );//.css( "float","none" );
    $( ".nv-holder" ).stop().animate({
      height: scrollHeight + "px",
    }, 350);

    //$( ".menu_svg" ).find( "path" ).stop().animate({
    //  fill: "rgb(4, 216, 238)",
    //}, 350);

    var pathArray = $( ".menu_svg" ).find( "path" );

    pathArray.css( {
      fill: "rgb(4, 216, 238)",
      transition: "0.35s"
    });

    //d3.select( menu ).select( "svg" ).style( "fill","rgb(4, 216, 238)" );

    navMenu.visible = true;
  },

  hideMenu: function( event, menu ) {

    var holder = $( ".nv-holder" )[ 0 ];

    $( ".nv-holder" ).stop().animate({
      height: "0px",
    }, 500);

    var pathArray = $( ".menu_svg" ).find( "path" );

    pathArray.css( {
      fill: "rgb(255, 255, 255)",
      transition: "0.5s"
    });
    //d3.select( menu ).select( "svg" ).style( "fill","#fff" );

    navMenu.visible = false;
  },
};
