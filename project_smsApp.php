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
        <p class="display display--section">SMS App</p>
        <p class="description description--section-top description--section-top--small">This was my primary project in a cooperative education position that I was hired for in the summer of 2015.</p>
        <p class="button button--small button--small--right">Learn more about co-op</p>
      </div>


      <h1>Introduction</h1>
      <p>I worked on this project with another student my age; she was the "design lead" and I was the "technical lead" for the first few months of the project (the project is ongoing&mdash;I am still working on it, but she is not).</p>
      <p> Our main goal was to create an interactive application, using new Adobe software, that showcased the School of Media Sciences (SMS) at RIT to potential students, current students, and alumni.</p>

      <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/images/app/SMS_App_Icon_1-12.png"/>
        <p class="description description--image description--image--tall">School of Media Sciences application icon - designed by Kim Patt</p>
      </div>

      <h1>Adobe DPS</h1>
      <p>The Media Arts and Technology program at RIT has connections with Adobe employees in Adobe's digital publishing team; we were offered an opportunity to develop an application to serve as a student study using Adobe's new digital publishing beta.</p>
      <p>This software moves away from monthly digital publication releases towards fluid, contantly updating content with a higher level of user interaction.</p>

      <h1>My Role</h1>
      <p>As the "technical lead" of this project I was responsible for creating and testing interactive content, and handling app settings, layout, and distribution.</p>
      <p>Interactive articles for the app were created using HTML,CSS, and JavaScript to ensure proper device resizing and a high level of user interaction. Adobe's software allowed me to directly publish these html articles to our application.</p>
      <p>In addition to creating interactive content, I managed the app submission and distribution processes through the Apple App Store and the Google Play Store.</p>


      <h1>Summary</h1>
      <p>This project presented me with many challenges and helped further my understanding of how students in my major play a role in the media industry.</p>
      <p>I had to learn how to use new technologies and software, and work through difficulties to establish efficient project workflows.</p>

      <h1>Updates</h1>
      <p>This project continued after my co-op ended, and I am currently working on finishing it with a group of students in the School of Media Sciences at RIT.</p>
      <p>Updates regarding the current state of the app will be posted here.</p>


    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>
    //new Slider("index_port");
    //verticalCenter.center( "container", "front");
    //swipeSlider.setUp( testData );
  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
