$( document ).ready(function(){
  //searches every <p> tag to find the last space between words with a regex, and
  //adds a non-breaking space there. Avoids element with id = "spareOrphan";
  //*src: http://www.webdevdoor.com/jquery/preventing-widows-websites-jquery/
  $('p,li').not('#spareOrphan , .display').each(function(){
      var string = $(this).html();
      string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
      $(this).html(string);
  });
});
