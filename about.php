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


        <div class="section section_about">
          <p class="display display--section display--section--about">About</p>
          <!--<p class="description description--section-top">Use the form below to send me an email, or copy my email address and use your own mail client to contact me.</p>-->
        </div>



        <p>
          I am currently a 4th year student at the Rochester Institute of Technology (RIT)
          in the Media Arts and Technology program (Bachelor of Science).
        </p>

        <p>
          In addition to classes I play rugby for RIT, and I am in an organization called Silver Wings.</p>

          <div class="div--overflow-hidden">
            <a href="silverWings.php">
              <p class="button button--small button--small--right button--small--right--in-text button--small--right--in-text--about">Learn about Silver Wings</p>
            </a>
          </div>

          <div class="swipeSlider" id="0">
          </div>



        <h2>My Major</h2>
        <p>
          The Media Arts and Technology (MAAT) program at RIT is focused
          on teaching students aspects of design and layout,
          web development and interactive media, and management in the media industry.
        </p>

        <p>
          During my time as a student in the MAAT program I have been specifically interested in user interaction development and interface design, as well as
          business and project management.</p>

          <div class="div--overflow-hidden">
            <a href="projects.php">
              <p class="button button--small button--small--right button--small--right--in-text button--small--right--in-text--about">View my projects</p>
            </a>
          </div>

          <h2>Experience</h2>

          <p>
           Part-time work and a full-time cooperative education (co-op) position have prepared
           me to apply the techniques I have practiced in the classroom to real world applications.
           <p>

           <div class="div--overflow-hidden">
            <a href="coop.php">
              <p class="button button--small button--small--right button--small--right--in-text button--small--right--in-text--about">Learn more about co-op</p>
            </a>
          </div>

          <!--

          <h2>4+1 MBA</h2>
          <p>After I graduate from the MAAT
          program in May of 2016, I plan on getting a Master of Business Administration degree
          in one year with RIT's 4+1 MBA program.</p>

          <div class="div--overflow-hidden">
            <a href="mba4plus1.php">
              <p class="button button--small button--small--right button--small--right--in-text button--small--right--in-text--about">Learn about the 4+1 MBA Program</p>
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
    //
    swipeSlider.setUp( testData.about );

  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
