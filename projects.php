<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>HW Projects</title>

      <link rel="stylesheet" type="text/css" href="css/wagner.css"/>
      <script src="http://www.haydenwagner.com/assets/jquery/jquery-1.11.3.min.js"></script>
      <script src="js/verticalCenter.js"></script>
      <script src="assets/test/testData.js"></script>
      <script src="js/swipeSlider.js"></script>
    </head>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <p class="header">Hayden Wagner</p>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="container container_section">

      <div class="section section_projects">
        <p class="display display--section">Projects</p>
        <p class="description description--section-top">View different projects I have done in school, for an organization, or by myself.</p>
      </div>

      <a href="project_smsApp.php">
        <div class="project-card">
          <img class="image image_project" src="assets/projects/images/app/splashscreens-06 copy.png"/>
          <p class="title title_project">School of Media Sciences App</p>
          <p class="date date_project">May 2015 - Present</p>
        </div>
      </a>

      <a href="project_tshirt.php">
        <div class="project-card">
          <div class="div--card-height-limiter">
            <img class="image image_project" src="assets/projects/images/sw_tshirt_blue.jpg"/>
          </div>
          <p class="title title_project">Silver Wings T-shirt Design</p>
          <p class="date date_project">November 2014</p>
        </div>
      </a>

      <a href="project_tshirt.php">
        <div class="project-card">
          <div class="div--card-height-limiter">
            <img class="image image_project" src="assets/projects/images/sw_tshirt_blue.jpg"/>
          </div>
          <p class="title title_project">Silver Wings T-shirt Design</p>
          <p class="date date_project">November 2014</p>
        </div>
      </a>

      <div class="swipeSlider" id="3">
      </div>

      <div class="project-card">
        <img class="image image_project" src="assets/test/flickr_landscape_10_11.jpg"/>
        <p class="title title_project">Nevada Spedada</p>
        <p class="date date_project">15 September 2015</p>
      </div>


    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>
    //new Slider("index_port");
    //verticalCenter.center( "container", "front");
    swipeSlider.setUp( testData.omega );
  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
