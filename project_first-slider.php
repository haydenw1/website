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
      <script type="text/javascript" src="http://www.haydenwagner.com/assets/d3/d3.min.js" charset="utf-8"></script>
      <script src="js/verticalCenter.js"></script>
      <script src="assets/test/testData.js"></script>
      <script src="js/swipeSlider.js"></script>
      <script src="js/oldDots.js"></script>
    </head>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <p class="header">Hayden Wagner</p>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="container container_section container_section_story">

      <div class="section section_projects">
        <p class="display display--section">First Website Image Slider</p>
        <p class="description description--section-top">This was an independent project that helped me learn and practice writing JavaScript.</p>
      </div>


      <h1>Introduction</h1>
      <p>I started this project because I wanted a way to show a series of images on my website, and because I
      wanted practice with JavaScript constructor functions and D3.js (a JavaScript visualization library).

      <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/first-slider/first-slider_card.jpg"/>
        <p class="description description--image description--image--tall">Screenshot of the finished image slider</p>
      </div>


      <!--
      <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/images/sw_tshirt_white.jpg"/>
        <p class="description description--image description--image--tall">T-shirt design with white text on a dark gray t-shirt</p>
      </div>
      -->

      <h1>Positives</h1>
      <p>The positives of this project were I was able get the slider to cycle the images correctly, and the cycle buttons and position indicators (shown below) were animated and aesthetically pleasing.</p>

      <div id="dot-holder">
      </div>

      <h1>Negatives</h1>
      <p>The negative aspects of this image slider include:
        <ul>
          <li>No swipe option for mobile users to cycle images</li>
          <li>The code to cycle the images was complicated and unnecessary</li>
          <li>Slider had both jQuery and D3.js dependencies (more dependencies means the website had to load more resources)</li>
        </ul>
      </p>

      <h1>Summary</h1>
      <p>This project was a great source of JavaScript practice for me, and it challenged me to
      brainstorm and create a solution to a problem from scratch. Due to the negatives listed above, I have since abandoned this image slider and made a new, mobile-first slider that I now use on my website.</p>

      <div class="div--overflow-hidden">
        <a href="project_new-slider.php">
            <p class="button button--small button--small--right button--small--right--in-text button--small--right--in-text--project">View my new slider project</p>
        </a>
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
    //swipeSlider.setUp( testData );
    //$( document ).ready( function() {
    //  swipeSlider.setUp( testData.tshirt);
    //});
    dots.make();
  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
