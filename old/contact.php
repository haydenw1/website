<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>HW Contact</title>

      <link rel="stylesheet" type="text/css" href="css/wagner.css"/>
      <!--<link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.4.5.min.css"/>-->
      <script src="js/jquery/jquery-1.12.0.min.js"></script>
      <script src="js/autosize_textarea/autosize.min.js"></script>
      <script src="js/emailCopy.js"></script>
    </head>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <p class="header">Hayden Wagner</p>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="container container_section">

      <div class="section section_contact">
        <p class="display display--section">Contact</p>
        <p class="description description--section-top">Use the form below to send me an email, or copy my email address and use your own mail client to contact me.</p>
      </div>

      <div class="container_below-header">
      <h2 class="contact">Copy My Email Address</h2>
      <p class="email-address" id="email-to-copy">
        hbw6955@rit.edu
      </p>

      <a class="button button--email-copy" id="email-copy-button">COPY</a>

      <h2 class="contact">Email Form</h2>
      <form action="email.php" method="post" class="email--form">

        <label class="email" for="basic">Name</label>
        <input class="email" type="text" name="name"/>

        <label class="email" for="basic">Email</label>
        <input class="email" type="email" name="email"/>

        <label class="email" for="textarea-a">Email Message</label>
        <textarea class="email" name="message" id="textarea-a" value="">
        I'm a basic textarea. If this is pre-populated with content, the height will be automatically adjusted to fit without needing to scroll. That is a pretty handy usability feature.
        </textarea>

        <button class="button button--email-send" type="submit" name="submit">Send to hbw6955@rit.edu</button>
      </form>


      </div><!--end of below header container-->

    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>
    //new Slider("index_port");
    //verticalCenter.center( "container", "front");
    emailCopy.setUp();
    autosize(document.querySelectorAll('textarea'));

  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
