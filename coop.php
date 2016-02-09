<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>HW About</title>

      <link rel="stylesheet" type="text/css" href="css/wagner.css"/>
      <!--<link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.4.5.min.css"/>-->
      <script src="js/jquery/jquery-1.12.0.min.js"></script>
    </head>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <p class="header">Hayden Wagner</p>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="container container_section">


        <div class="section section_about">
          <p class="description description--section-top">Rochester Institute of Technology's</p>
          <p class="display display--section display--section--about">Co-op Program</p>
        </div>



        <p>
          Rochester Institute of Technology (RIT) requires students in some majors to participate in
          cooperative education (full-time employment in a position related to your college major) before
          they can graduate. Students must apply for a position and be hired, just like a normal job.
        </p>

        <p>
          My major (Media Arts and Technology) requires me to have two ten week terms of co-op before I graduate.
        </p>

        <h2>Co-op #1</h2>
        <p>
          Over the summer of 2015 I was hired by the School of Media Sciences at RIT, to develop and
          produce an interactive app with Adobe’s new Digital Publishing Solution software.
        </p>

        <div class="div--overflow-hidden">
            <a href="project_smsApp.php">
              <p class="button button--small button--small--right button--small--right--in-text button--small--right--in-text--about">View this co-op project</p>
            </a>
          </div>

        <h2>Hire me for my second co-op!</h2>
        <p>I am looking for a co-op position for summer 2016; please send me an email if you are interested in learning more about what I can do for your company!</p>

        <div class="div--overflow-hidden">
            <a href="contact.php">
              <p class="button button--small button--small--right button--small--right--in-text button--small--right--in-text--about">Contact me</p>
            </a>
          </div>

        <!--

          <div class="div--overflow-hidden">
            <a href="about.php">
              <p class="button button--small button--small--right button--small--right--in-text button--small--right--in-text--about">Back to About Section</p>
            </a>
          </div>

        -->

    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>
    //new Slider("index_port");
    //verticalCenter.center( "container", "front");

  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
