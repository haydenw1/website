var navMenu = {
  visible: false,
  resizeTimeout: undefined,
  inProgress: undefined,
  largeMenu: undefined,
  menuDropMem: {},

  setUp: function() {

    navMenu.touchScroll("popup");

    var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    var navHeight = ( windowHeight * 0.075 ) + "px";

    if ( windowWidth > 768 ) {
      navMenu.largeMenu = true;
    } else {
      navMenu.largeMenu = false;
    }

    navMenu.keepNav = document.getElementsByClassName( "keep-nav" )[0];
    navMenu.holder = document.getElementsByClassName( "popup-holder" )[0];
    navMenu.nameNav = document.getElementsByClassName( "name" )[0];
    navMenu.gradient = document.getElementsByClassName( "gradient" )[0];
    navMenu.menuDrops = document.getElementsByClassName( "menu_drop" );
    navMenu.menuDropDivs = document.getElementsByClassName("menu_drop--hidden" );

    navMenu.scrollHeight = navMenu.holder.scrollHeight;

    if ( navMenu.gradient ) navMenu.gradientHeight = navMenu.gradient.clientHeight;

    navMenu.pathArray = $( ".menu_svg" ).find( "path" );
    navMenu.holder.style.display = "none";

    if ( $('.section' ) ) navMenu.changeKeepNavColor();
  },

  addMenuListeners: function( element ) {
    if ( $( "." + element ) ) {
      var menu = $( "." + element )[ 0 ];
    }

    menu.addEventListener( "click", function() {
      if ( navMenu.visible === false ) {
        navMenu.displayMenu();
      } else {
        navMenu.hideMenu();
      }
    });

    menu.addEventListener( "touchstart", function( event ) {
      event.stopPropagation();
    });

    document.body.addEventListener( "touchstart" , function() {
      if ( navMenu.visible ) {
        navMenu.hideMenu();
      }
    });

    navMenu.holder.addEventListener( "touchmove", function( event ) {
      //event.stopPropagation();
      event.preventDefault();
    });

    navMenu.holder.addEventListener( "touchstart", function( event ) {
      event.stopPropagation();
      //event.preventDefault();
      //console.log("prevent that scroll hopefully not disable link");
    });


    for ( var i = 0; i < navMenu.menuDrops.length; i++ ) {
      var drop = navMenu.menuDrops[i];
      drop.addEventListener("click", function( event ) {
        event.stopPropagation();
        event.preventDefault();
        navMenu.menuDropActive( this );
      });

      navMenu.menuDropMem[ drop.id ] = {};
      navMenu.menuDropMem[ drop.id ].open = false;
      // -1 because dropdiv is array still

      navMenu.menuDropMem[ drop.id ].dropdown = navMenu.menuDropDivs[ drop.id - 1 ];

    }

  },


  changeKeepNavColor: function() {
    navMenu.keepNav.style.transition = "none";
    navMenu.keepNav.style.background = $('.section').css("background");
    navMenu.keepNavColor = $('.section').css("background");
  },


  displayMenu: function() {

    navMenu.keepNav.style.transition = "background 0.35s";

    if ( !navMenu.keepNavColor) navMenu.keepNavColor = $( navMenu.keepNav ).css("background");
    //navMenu.keepNavShadow = $( navMenu.keepNav ).css("box-shadow");

    navMenu.holder.style.background = navMenu.keepNavColor;
    navMenu.holder.style.display = "block";
    $( navMenu.holder ).stop().animate({
      height: navMenu.scrollHeight + "px"
    }, 350, function() {
      navMenu.holder.style.height = "auto";
    });

    //navMenu.holder.style.display = "block";
    //navMenu.holder.style.height = navMenu.scrollHeight + "px";
    //navMenu.keepNavColor = navMenu.keepNav.style.background;
    navMenu.holder.style.background = "#606060";
    navMenu.keepNav.style.background = "#424242";
    navMenu.keepNav.style.boxShadow = "rgba(0, 0, 0, 0.298039) 0px 2px 6px";

    //change text color
    //navMenu.nameNav.style.color = "#424242";

    //navMenu.pathArray.css( {
    //  fill: "#424242",
    //  transition: "0.35s"
    //});

    navMenu.visible = true;
  },

  hideMenu: function() {


    var holder = navMenu.holder;
    var pathArray = navMenu.pathArray;

    navMenu.inProgress = true;

    $( holder ).stop().animate({
      height: "0px",
    }, 350, function() {
      holder.style.display = "none";
      navMenu.inProgress = false;
    });

    navMenu.holder.style.background = navMenu.keepNavColor;
    navMenu.keepNav.style.background = navMenu.keepNavColor;
    //navMenu.keepNav.style.boxShadow = navMenu.keepNavShadow;
    if ( document.body.scrollTop === 0 ) navMenu.keepNav.style.boxShadow = "none";

//change text color
    //navMenu.nameNav.style.color = "#fff";

    //pathArray.css( {
    //  fill: "rgb(255, 255, 255)",
    //  transition: "0.35s"
    //});
    //
    navMenu.closeAllMenuDrop();

    navMenu.visible = false;
  },

  menuDropActive: function( el ) {
    console.log( el );
    var mem = navMenu.menuDropMem[ el.id ];

    if ( mem.open ) {
      //close
      navMenu.closeMenuDrop( el );
    } else {
      //mem.dropdown.style.background = "#909090";

      if ( !mem.dropHeight ) mem.dropHeight = mem.dropdown.scrollHeight;

      //mem.dropdown.style.height = mem.dropHeight + "px";
      $( mem.dropdown ).stop().animate({
        height: mem.dropHeight
      }, 150, function() {
        //holder.style.display = "none";
        //navMenu.inProgress = false;
      });

      //console.log(mem);
      console.log( el.querySelector("#menu_drop_svg") );
      if ( !mem.svgHolder ) mem.svgHolder = el.querySelector("#menu_drop_svg");
      $(mem.svgHolder).load('php_includes/downarrow.svg');

      mem.open = true;
    }
  },

  closeMenuDrop: function( el ) {
    var mem = navMenu.menuDropMem[ el.id ];
    console.log( "closing " + el);
     //mem.dropdown.style.height = "0px";
     //
    $( mem.dropdown ).stop().animate({
      height: "0px"
    }, 150, function() {
      //holder.style.display = "none";
      //navMenu.inProgress = false;
    });
    $(mem.svgHolder).load('php_includes/sidearrow.svg');

    mem.open = false;
  },

  closeAllMenuDrop: function() {
    console.log( navMenu.menuDropMem );
    var memAll = navMenu.menuDropMem;
    var numMenus = memAll.length;

    for ( i in memAll ) {
      var mem = memAll[i];

      $( mem.dropdown ).stop().animate({
        height: "0px"
      }, 150, function() {
        //holder.style.display = "none";
        //navMenu.inProgress = false;
      });
      $(mem.svgHolder).load('php_includes/sidearrow.svg');

      mem.open = false;
    }
  },

  isTouchDevice: function(){
      try{
          document.createEvent("TouchEvent");
          return true;
      }catch(e){
          return false;
      }
  },

  //enables scrolling with a div that has height set to auto
  touchScroll: function(id) {
      if(navMenu.isTouchDevice()){ //if touch events exist...
          var el=document.getElementById(id);
          var scrollStartPos=0;

          document.getElementById(id).addEventListener("touchstart", function(event) {
              scrollStartPos=this.scrollTop+event.touches[0].pageY;
              //event.preventDefault();
          },false);

          document.getElementById(id).addEventListener("touchmove", function(event) {
              this.scrollTop=scrollStartPos-event.touches[0].pageY;
              //event.preventDefault();
          },false);
      }
  },

  changeKeepNavBoxShadow: function() {
    var scroll = $( window ).scrollTop();

    if ( scroll > 0 ) {
        navMenu.keepNav.style.boxShadow = "0px 2px 6px rgba(0,0,0,.3)";
    } else if ( scroll === 0 ) {
        navMenu.keepNav.style.boxShadow = "0px 0px 0px rgba(0,0,0,0)";
    }
  },

};
