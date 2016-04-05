<!DOCTYPE html>
<html class="html--no-scroll" lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>
  <script src="js/autosize_textarea/autosize.min.js"></script>
  <script src="js/emailCopy.js"></script>
  <script src="js/blackout.js"></script>
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
    <div class="container container_section">
      <div class="container_below-header">
      <!--<h2 class="contact no-padding">Copy My Email Address</h2>-->
      <p class="email-address" id="email-to-copy">
        hbw6955@rit.edu
      </p>

      <a class="button button--email-copy" id="email-copy-button">COPY</a>

      <h2 class="contact no-padding">Email Form</h2>
      <form action="email.php" method="post" class="email--form">

        <label class="email" for="basic">Name</label>
        <input class="email" type="text" name="name"/>

        <label class="email" for="basic">Email</label>
        <input class="email" type="email" name="email"/>

        <label class="email" for="textarea-a">Email Message</label>
        <textarea class="email" name="message" id="textarea-a" value=""></textarea>

        <button class="button button--email-send" type="submit" name="submit">Send to hbw6955@rit.edu</button>
      </form>


      </div><!--end of below header container-->

    </div>
    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="blackout">
      <div class="blackout_center-message">
        <h1>Success!</h1>
        <p>Your message was sent to Hayden Wagner <span>(hbw6955@rit.edu)</span></p>
        <a class="button" onclick="blackout.close()">Stay on contact page</a>
        <a class="button" href="index.php">Go to homepage</a>
      </div>
    </div>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>

    emailCopy.setUp();
    autosize(document.querySelectorAll('textarea'));

  </script>
</html>

