emailCopy = {
  setUp: function() {
    console.log("we are setting up the button now!");

    emailCopy.emailButton = document.getElementById( "email-copy-button" );
    emailCopy.copy();
  },



  copy: function() {
    //.on("click", function() { ----> make event listener on the button without using d3

    emailCopy.emailButton.addEventListener( "click", function() {

      console.log("COPY");
      //  src: http://stackoverflow.com/questions/985272/selecting-text-in-an-element-akin-to-highlighting-with-your-mouse
      emailCopy.selectText("email-to-copy");

      // src: http://stackoverflow.com/questions/400212/how-do-i-copy-to-the-clipboard-in-javascript
      try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copying text command was ' + msg);
        emailCopy.emailButton.innerHTML = "&#10004;";
        emailCopy.emailButton.className = "button button--email-copy-successful";
      } catch (err) {
        console.log('Oops, unable to copy');
      }
    });
  },



  //http://stackoverflow.com/questions/985272/selecting-text-in-an-element-akin-to-highlighting-with-your-mouse
  selectText: function(element) {
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
};



