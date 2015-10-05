var popdown = {
  visible: false,

  addMenuListeners: function(menu) {
    console.log(menu);
    menu.addEventListener("touch", function() {
      if (popdown.visible == false) {
        popdown.displayMenu(event, menu);
      } else {
        popdown.hideMenu(event, menu)
      }
    });
    menu.addEventListener("click", function() {
      if (popdown.visible == false) {
        popdown.displayMenu(event, menu);
      } else {
        popdown.hideMenu(event, menu);
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
    d3.selectAll(".na")
      .style("display","block")
      .style("float","none");

    d3.select(menu).select("svg").style("fill","rgb(4, 216, 238)")
     // .attr("fill","#ee6704");
     popdown.visible = true;
  },

  hideMenu: function(event, menu){
    console.log(event);
    console.log(menu);
    console.log("hideee");


    //var navs = document.getElementsByClassName("nv");
    //for(x = 0; x < navs.length; x++) {
    //  console.log(navs[x]);
    //  navs[x].style.display = "block";
    //}
    
    //d3.selectAll(".na")
    //  .style("display","block")
    // .style("float","none");

        d3.selectAll(".na")
      .style("display","none")
      //.style("float","right");

    d3.select(menu).select("svg").style("fill","#fff");
    popdown.visible = false;
  },
}

$( document ).ready(function(){
  if (document.body.clientWidth <= 850) {
    var menu = document.getElementById("menu");
    //var menu = menuEl[0];
    console.log(menu);
    popdown.addMenuListeners(menu);
    //popdown.hideMenu("touch", menu);
    //popdown.visible = false;
  } else {
    var menu = document.getElementById("menu");
    popdown.addMenuListeners(menu);
  }


  window.addEventListener("resize", function() {
    console.log("sizin");
    if (document.body.clientWidth <= 850) {
     // var menu = document.getElementById("menu");
      //var menu = menuEl[0];
      //console.log(menu);
      //popdown.visible = false;
      //popdown.addMenuListeners(menu);
      //popdown.hideMenu("touch", menu);
      //   d3.selectAll(".na")
      //.style("display","none")
      //.style("float","right");
      //popdown.displayMenu("touch", menu);
      //popdown.madeWhole = false;
      //if(popdown.visible) {
        //popdown.hideMenu("touch", menu);
      //}
    }
    //} else
     if (document.body.clientWidth > 850) {

      //console.log(window.clientWidth);
      //    d3.selectAll(".na")
      //.style("display","inline-block")
      //.style("float","right");
      //popdown.madeWhole = true;
      //d3.select(menu).select("svg").style("fill","#fff");
      //popdown.visible = true;
    }
  });
});



