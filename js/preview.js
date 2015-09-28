$( document ).ready(function() {
  $( ".button.full" ).mouseover(function(){
    $( "#ajax-container" ).load("pages/"+ this.getAttribute("alt") + ".html").fadeIn();
  });

  $( ".button.full" ).mouseout(function(){
    var container = $( "#ajax-container" );
   // setTimeout(function() {
        container.stop(true).fadeOut(//function() {
         // container.empty();
       //}
       );
    //}, 250);
  });
});
