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
          <img class="image image_project" src="assets/projects/app/splashscreens-06 copy.jpg"/>
          <p class="title title_project">School of Media Sciences App</p>
          <p class="date date_project">May 2015 - Present</p>
        </div>
      </a>

      <a href="project_new-slider.php">
        <div class="project-card">
          <div class="div--card-height-limiter">
            <img class="image image_project" src="assets/projects/new-slider/new-slider_card.jpg"/>
          </div>
          <p class="title title_project">New Website Image Slider</p>
          <p class="date date_project">January 2016</p>
        </div>
      </a>

      <a href="project_tshirt.php">
        <div class="project-card">
          <div class="div--card-height-limiter">
            <img class="image image_project" src="assets/projects/tshirt/sw_tshirt_blue.jpg"/>
          </div>
          <p class="title title_project">Silver Wings T-shirt Design</p>
          <p class="date date_project">November 2014</p>
        </div>
      </a>

      <a href="project_first-slider.php">
        <div class="project-card">
          <div class="div--card-height-limiter">
            <img class="image image_project" src="assets/projects/first-slider/first-slider_card.jpg"/>
          </div>
          <p class="title title_project">First Website Image Slider</p>
          <p class="date date_project">September 2015</p>
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
    //verticalCenter.center( "container", "front");
    //swipeSlider.setUp( testData.omega );
  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
