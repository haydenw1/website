var popdown = {
  visible: false,

  addMenuListeners: function(menu) {
    console.log(menu);
    menu.addEventListener("touch", function() {
      if (popdown.visible == false) {
        popdown.displayMenu(event, menu);
      } else {

      }
    });
    menu.addEventListener("click", function() {
      if (popdown.visible == false) {
        popdown.displayMenu(event, menu);
      } else {

      }
    });
  },


  displayMenu: function(event, menu){
    console.log(event);
    console.log(menu);

    //var navs = document.getElementsByClassName("nv");
    //for(x = 0; x < navs.length; x++) {
    //  console.log(navs[x]);
    //  navs[x].style.display = "block";
    //}
    d3.selectAll(".nv")
      .style("display","block")
      .style("float","none");
  }
}

$( document ).ready(function(){
  if (document.body.clientWidth <= 850) {
    var menu = document.getElementById("menu");
    //var menu = menuEl[0];
    console.log(menu);
    popdown.addMenuListeners(menu);
  }


  window.addEventListener("resize", function() {
    console.log("sizin");
    if (document.body.clientWidth <= 850) {
      var menu = document.getElementById("menu");
      //var menu = menuEl[0];
      //console.log(menu);
      popdown.addMenuListeners(menu);
    }
  });
});



