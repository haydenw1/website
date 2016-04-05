<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hayden Wagner</title>

      <link rel="stylesheet" type="text/css" href="css/wagner.css"/>
      <script src="http://www.haydenwagner.com/assets/jquery/jquery-1.11.3.min.js"></script>
      <script src="js/verticalCenter.js"></script>
    </head>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <p class="header">Hayden Wagner</p>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="container">

      <a href="about.php">
        <div class="front front_about">
          <p class="display display--front">About</p>
          <!--<div class="shadow"></div>-->
        </div>
      </a>

      <a href="projects.php">
        <div class="front front_projects">
          <p class="display display--front">Projects</p>
        </div>
      </a>

      <a href="contact.php">
        <div class="front front_contact">
          <p class="display display--front">Contact</p>
        </div>
      </a>

    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>
    //new Slider("index_port");
    verticalCenter.center( "container", "front");
  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
