<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>
  <script src="js/autosize_textarea/autosize.min.js"></script>
  <!--<script src="js/emailCopy.js"></script>-->
  <script src="js/validate.min.js"></script>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="section section_contact">
      <div class="gradient"></div>
      <p class="display display--section">Contact</p>
      <p class="description description--section-top">Use the form below to send me an email, or copy my email address and use your own mail client to contact me.</p>
    </div>

    <div class="overwatch--projects">
      <div class="container container_section container_section--contact">
        <div class="container_below-header">
          <!--<h2 class="contact no-padding">Copy My Email Address</h2>-->
          <input class="email-address" id="emailAddressCopy" value="hbw6955@rit.edu" readonly="true">

          <a class="button button--email-copy" onclick="clip(this,'emailAddressCopy')">COPY<span class="tooltip"><span>Copy failed on this device!</span> Use your device copy command to store the selected text.</span></a>

          <h2 class="contact no-padding">Email Form</h2>
          <form action="" method="post" class="email--form" name="emailform">

            <label class="email" for="basic">Name</label>
            <input class="email" type="" value="" name="name" id="inputName" onfocus="$( '#form-errors' ).fadeOut();"/>

            <label class="email" for="basic">Email</label>
            <input class="email" type="" value="" name="email" id="inputEmail" onfocus="$( '#form-errors' ).fadeOut();" />

            <label class="email" for="textarea-a">Email Message</label>
            <textarea class="textarea" name="message" value="" id="textarea-a" rows='5' onfocus="$( '#form-errors' ).fadeOut();"></textarea>

            <button class="button button--email-send" type="submit" name="submitted">Send to hbw6955@rit.edu</button>
          </form>
        </div><!--end of below header container-->
      </div>
    </div>

    <div class="blackout blackout_form-errors" id="form-errors">
      <div class="blackout_center-message blackout_center-message--form-errors" id="form-errors-inner-div">

      </div>
    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <?php

    /*
      if (isset($_REQUEST['submitted'])) {
        $errors = array();
        // Check for a proper First name
        if (!empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
        $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
        if (preg_match($pattern,$name)){ $name = $_REQUEST['name'];}
        else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
        } else {$errors[] = 'You forgot to enter your name.';}
      }

*/
      if (isset($_REQUEST['submitted'])) {
        //if (empty($errors)) {
          $to = "hbw6955@rit.edu"; // this is your Email address
          $from = $_POST['email']; // this is the sender's Email address
          $name = $_POST['name'];
          $message = $_POST['message'];
          $subject = "EMAIL FROM WEBSITE";

          $messageToMe = $name . " " . " wrote the following:" . "\n\n" . $message;

          $headers = "From:" . $from;
          mail($to,$subject,$messageToMe,$headers);

          //header('Location: contactSuccess.php');
         // <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
          //  <title>Hayden Wagner</title>
          //  <link rel="stylesheet" type="text/css" href="css/wagner.css"/>
          //$name = '';
          //$from = '';
          //$message = '';

          echo '<div class="blackout">
              <div class="blackout_center-message">
                <h1>Success!</h1>
                <p>Your message was sent to Hayden Wagner <span>(hbw6955@rit.edu)</span></p>
                <a class="button" href="contact.php">Stay on contact page</a>
                <a class="button" href="index.php">Go to homepage</a>
              </div>
            </div>';
        //}
      }

      /*

      if (isset($_REQUEST['submitted'])) {
        // Print any error messages.
        if (!empty($errors)) {
          echo '<div class="blackout">
              <div class="blackout_center-message">
                <h1>Message failed!</h1>
                <p>Please correct the following errors:';
          // Print each error.
          foreach ($errors as $msg) { echo '<p>'. $msg . '</p>';}
          echo '
                <a class="button" href="contact.php">Fix errors</a>
                <a class="button" href="index.php">Go to homepage</a>

              </div>
            </div>';
        }
      }
      */

    ?>


  </body>
  <script>
    var tooltipShowing = false;

    new FormValidator('emailform', [{
        name: 'name',
        rules: 'required|alpha_numeric'
    }, {
        name: 'email',
        rules: 'required|valid_email',
    }, {
        name: 'message',
        rules: 'required'
    }], function(errors, event) {
        //var errClass = "blackout_center-message--form-errors";
        //var errorDiv = $( "." + errClass )[0];
        $( "#form-errors" ).fadeIn();
        $( "#form-errors" ).click(function(){
          $( "#form-errors" ).fadeOut();
        });
        $( ".blackout_center-message--form-errors" ).html("");

        if (errors.length > 0) {
          for ( var i = 0; i < errors.length; i++) {
            var errP = document.createElement("p");
            errP.innerHTML = errors[i].message;
            $( ".blackout_center-message--form-errors" )[0].appendChild( errP );
          }
        }
    });

    $('.email--form').on('keydown', 'input', function (event) {
        if (event.which == 13) {
          console.log(this);
            if ( this.id === "inputName" ) {
              $( '#inputEmail' ).focus();
              event.preventDefault();
            } else if ( this.id === "inputEmail" ) {
              console.log( $( '#textarea-a' ) );
              $( '#textarea-a' ).focus();
              event.preventDefault();
            }
        }
    });

    function clip(elClick, elSelect) {
      var timer;

      if ( tooltipShowing ) {
        clearTimeout( timer );
        fade( "tooltip" );
        return;
      }

      elSelect = document.getElementById( elSelect );
      //elSelect.select();
      //elSelect.setSelectionRange(0,99);
      //try {
      if( document.execCommand('copy') ) {
        elSelect.select();
        document.execCommand('copy')
        elClick.className += " button--email-copy--successful";
        elClick.innerHTML = "&#10003";
        elSelect.className += " email-address--successful";

        //$( "#copy-warning" ).stop().fadeIn( "fast", function(){
        //  //window.setTimeout(fadeWarning, 5000);
        //  console.log("you have been warned");
        //});
      } else {

        elClick.className += " button--email-copy--unsuccessful";
        elSelect.readOnly = false;
        elSelect.select();
        elSelect.setSelectionRange(0,99);
        //elClick.innerHTML = "x";
        if ( !tooltipShowing ) {
          $( ".tooltip" ).stop().fadeIn( "fast", function(){
            tooltipShowing = true;
            timer = window.setTimeout( fade , 5000, "tooltip");
            console.log("you have been warned");
          });
        }
      }
    }


    function fade( elClass ) {
      console.log( elClass );
      $( "." + elClass  ).stop().fadeOut( 1000 );
      tooltipShowing = false;
    }

  </script>
</html>

