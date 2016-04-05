var navMenu = {

  visible: false,
  resizeTimeout: undefined,
  inProgress: undefined,
  menuDropMem: {},



  setUp: function() {
    var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    var navHeight = ( windowHeight * 0.075 ) + "px";

    navMenu.mainBar = document.getElementsByClassName( "keep-nav" )[0];
    navMenu.menu = document.getElementsByClassName( "popup-holder" )[0];
    navMenu.gradient = document.getElementsByClassName( "gradient" )[0];
    navMenu.menuDropdowns = document.getElementsByClassName( "menu_drop" );
    navMenu.menuDropdownOptions = document.getElementsByClassName("menu_drop--hidden" );

    navMenu.scrollHeight = navMenu.menu.scrollHeight;

    if ( navMenu.gradient ) navMenu.gradientHeight = navMenu.gradient.clientHeight;

    navMenu.pathArray = $( ".menu_svg" ).find( "path" );
    navMenu.menu.style.display = "none";

    if ( $('.section' ) ) navMenu.changeMainBarColor();
    navMenu.touchScroll("popup");
  },



  addMenuListeners: function( element ) {
    var menu;

    if ( $( "." + element ) ) menu = $( "." + element )[ 0 ];

    menu.addEventListener( "click", function() {
      if ( navMenu.visible === false ) {
        navMenu.displayMenu();
      } else {
        navMenu.hideMenu();
      }
    });

    menu.addEventListener( "touchstart", function( event ) { event.stopPropagation(); });
    navMenu.menu.addEventListener( "touchmove", function( event ) { event.preventDefault(); });
    navMenu.menu.addEventListener( "touchstart", function( event ) { event.stopPropagation(); });

    document.body.addEventListener( "touchstart" , function() {
      if ( navMenu.visible ) navMenu.hideMenu();
    });


    for ( var i = 0; i < navMenu.menuDropdowns.length; i++ ) {
      var drop = navMenu.menuDropdowns[i];
      drop.addEventListener("click", function( event ) {
        event.stopPropagation();
        event.preventDefault();
        navMenu.menuDropdownAction( this );
      });

      navMenu.menuDropMem[ drop.id ] = {};
      navMenu.menuDropMem[ drop.id ].open = false;
      // -1 because dropdiv is array still
      navMenu.menuDropMem[ drop.id ].dropdown = navMenu.menuDropdownOptions[ drop.id - 1 ];
    }
  },



  changeMainBarColor: function() {
    navMenu.mainBar.style.transition = "none";
    navMenu.mainBar.style.background = $('.section').css("background");
    navMenu.keepNavColor = $('.section').css("background");
  },


  //called in the scroll.js file
  changeKeepNavBoxShadow: function() {
    var scroll = $( window ).scrollTop();

    if ( scroll > 0 ) {
        navMenu.mainBar.style.boxShadow = "0px 2px 6px rgba(0,0,0,.3)";
    } else if ( scroll === 0 ) {
        navMenu.mainBar.style.boxShadow = "0px 0px 0px rgba(0,0,0,0)";
    }
  },



  displayMenu: function() {
    if ( !navMenu.keepNavColor) navMenu.keepNavColor = $( navMenu.mainBar ).css("background");

    navMenu.menu.style.background = navMenu.keepNavColor;
    navMenu.menu.style.display = "block";
    navMenu.menu.style.background = "#606060";
    navMenu.mainBar.style.transition = "background 0.35s";
    navMenu.mainBar.style.background = "#424242";
    navMenu.mainBar.style.boxShadow = "rgba(0, 0, 0, 0.298039) 0px 2px 6px";

    $( navMenu.menu ).stop().animate({
      height: navMenu.scrollHeight + "px"
    }, 350, function() {
      navMenu.menu.style.height = "auto";
    });

    if ( quicklinks ) quicklinks.closeMobileQuicklinks();
    navMenu.visible = true;
  },



  hideMenu: function() {
    var menu = navMenu.menu;
    var pathArray = navMenu.pathArray;

    navMenu.menu.style.background = navMenu.keepNavColor;
    navMenu.mainBar.style.background = navMenu.keepNavColor;
    if ( document.body.scrollTop === 0 ) navMenu.mainBar.style.boxShadow = "none";

    navMenu.inProgress = true;
    $( menu ).stop().animate({
      height: "0px",
    }, 350, function() {
      menu.style.display = "none";
      navMenu.inProgress = false;
    });

    navMenu.closeAllMenuDropdown();

    navMenu.visible = false;
  },



  menuDropdownAction: function( el ) {
    var mem = navMenu.menuDropMem[ el.id ];

    if ( mem.open ) {
      navMenu.closeMenuDropdown( el, mem );
    } else {
      navMenu.openMenuDropdown( el, mem );
    }
  },



  openMenuDropdown: function( el, mem ) {
    if ( !mem.dropHeight ) mem.dropHeight = mem.dropdown.scrollHeight;

    $( mem.dropdown ).stop().animate({
      height: mem.dropHeight
    }, 150);

    if ( !mem.svgHolder ) mem.svgHolder = el.querySelector("#menu_drop_svg");
    $(mem.svgHolder).load('php_includes/downarrow.svg');

    mem.open = true;
  },



  closeMenuDropdown: function( el, mem ) {
    $( mem.dropdown ).stop().animate({
      height: "0px"
    }, 150);

    $(mem.svgHolder).load('php_includes/sidearrow.svg');

    mem.open = false;
  },



  closeAllMenuDropdown: function() {
    var memAll = navMenu.menuDropMem;
    var numMenus = memAll.length;

    for ( i in memAll ) {
      var mem = memAll[i];

      $( mem.dropdown ).stop().animate({
        height: "0px"
      }, 150);

      $(mem.svgHolder).load('php_includes/sidearrow.svg');

      mem.open = false;
    }
  },


  //check if device has touch functionality --- off internet
  isTouchDevice: function(){
      try{
          document.createEvent("TouchEvent");
          return true;
      }catch(e){
          return false;
      }
  },



  //enables scrolling with a div that has height set to auto -- off internet
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

};
