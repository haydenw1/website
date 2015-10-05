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

    d3.selectAll(".na")
      .style("display","block")
      .style("float","none");

    d3.select(menu).select("svg").style("fill","rgb(4, 216, 238)")

    popdown.visible = true;
  },

  hideMenu: function(event, menu){
    d3.selectAll(".na")
      .style("display","none")

    d3.select(menu).select("svg").style("fill","#fff");

    popdown.visible = false;
  },
}

var squadUp = {
  denzel: "hb",
  daniel: "55@ri",
  tom: "w6",
  jamie: "t.edu",

  foxx: "07) ",
  craig: "(6",
  washington: "2 - 4017",
  hardy: "34",

  throwDown: function(which) {
    if (which === "email") {
      d3.select("#email")
        .html(squadUp.denzel + squadUp.tom + squadUp.daniel + squadUp.jamie);

      d3.select(squadUp.showEmail)
        .style("cursor","auto")
        .transition()
        .style("background-color", "#424242")
        .style("color", "#424242");

      d3.select(squadUp.copyEmail)
        .on("click", function() {
          
          //  src: http://stackoverflow.com/questions/985272/selecting-text-in-an-element-akin-to-highlighting-with-your-mouse
          SelectText("email")

          // src: http://stackoverflow.com/questions/400212/how-do-i-copy-to-the-clipboard-in-javascript
          try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
          } catch (err) {
            console.log('Oops, unable to copy');
          }
        })
        .style("display","block")
        .transition()
        .style("background-color", "#ee6704")
        .style("color", "#fff")

    } else {
      d3.select("#phone")
        .html(squadUp.craig + squadUp.foxx + squadUp.hardy + squadUp.washington);

      d3.select(squadUp.showPhone)
        .style("cursor","auto")
        .transition()
        .style("background-color", "#424242")
        .style("color", "#424242");

      d3.select(squadUp.copyPhone)
        .on("click", function() {
          
          //  src: http://stackoverflow.com/questions/985272/selecting-text-in-an-element-akin-to-highlighting-with-your-mouse
          SelectText("phone")
          
          // src: http://stackoverflow.com/questions/400212/how-do-i-copy-to-the-clipboard-in-javascript
          try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
          } catch (err) {
            console.log('Oops, unable to copy');
          }
        })
        .style("display","block")
        .transition()
        .style("background-color", "#ee6704")
        .style("color", "#fff");
    }
  },
}

$( document ).ready(function(){
  if (document.body.clientWidth <= 850) {
    var menu = document.getElementById("menu");
    popdown.addMenuListeners(menu);
  } else {
    var menu = document.getElementById("menu");
    popdown.addMenuListeners(menu);
  }

  squadUp.showEmail = document.getElementById("showEmail");
  squadUp.copyEmail = document.getElementById("copyEmail");
  squadUp.showPhone = document.getElementById("showPhone");
  squadUp.copyPhone = document.getElementById("copyPhone");

  /*squadUp.showEmail.addEventListener("click", function() {
    if(!squadUp.email) {
      squadUp.throwDown("email");
    }
    squadUp.email = true;
  });

  squadUp.showPhone.addEventListener("click", function() {
    if(!squadUp.phone) {
      squadUp.throwDown("phone");
    }
    squadUp.phone = true;
  });*/


  d3.select(squadUp.showEmail)
    .on("click", function() {
      if(!squadUp.email) {
        squadUp.throwDown("email");
        squadUp.email = true;
      }
    })
    .on("touch", function() {
      if(!squadUp.email) {
        squadUp.throwDown("email");
        squadUp.email = true;
      }
    });

  d3.select(squadUp.showPhone)
    .on("click", function() {
      if(!squadUp.phone) {
        squadUp.throwDown("phone");
        squadUp.phone = true;
      }
    })
    .on("touch", function() {
      if(!squadUp.phone) {
        squadUp.throwDown("phone");
        squadUp.phone = true;
      }
    });

  $( window ).scroll(function() {
    if( $( window ).scrollTop() > 0 && window.outerWidth > 850) {
      d3.select(".keep-nav")
        .style("box-shadow","0px 0px 5px rgba(0,0,0,.3)")
        //.transition()
        //.style("background", "#fff");
    } else if ( $( window ).scrollTop() == 0 && window.outerWidth > 850 ) {
      d3.select(".keep-nav")
        .style("box-shadow","0px 0px 0px rgba(0,0,0,0)")
        //.transition()
        //.style("background", "#f7f7f5");
    }
  });
//box-shadow: 0px 0px 5px rgba(0,0,0,.3);
 //   background-color: #fff;

});


function SelectText(element) {
    var doc = document
        , text = doc.getElementById(element)
        , range, selection
    ;    
    if (doc.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(text);
        range.select();
    } else if (window.getSelection) {
        selection = window.getSelection();        
        range = document.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
    }
}
