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
    <div class="container container_section container_section_story">

      <div class="section section_projects">
        <p class="display display--section">SW T-Shirt Design</p>
        <p class="description description--section-top description--section-top--small">This was a project for Silver Wings, an organization at the Rochester Institute of Technology of which I am a member.</p>
        <a href="silverWings.php">
          <p class="button button--small button--small--right">Learn more about Silver Wings</p>
        </a>
      </div>


      <h1>Introduction</h1>
      <p>My Silver Wings chapter wanted a new tshirt
      to be printed and sold. I created a design that improved on previous designs while keeping the Silver Wings patriotic spirit.

      <div class="swipeSlider" id="3">
      </div>

      <!--
      <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/images/sw_tshirt_white.jpg"/>
        <p class="description description--image description--image--tall">T-shirt design with white text on a dark gray t-shirt</p>
      </div>
      -->

      <h1>Design</h1>
      <p>My design features the Silver Wings motto in a strong typeface with distressed
      letters, and an american flag masked to create that last word: "serve". I made two color schemes (above): one
      design with white type on a dark gray shirt, and one with blue type on a light gray shirt.</p>

      <h1>Summary</h1>
      <p>This t-shirt design fits the strong volunteer efforts and selflessness of
       Silver Wings members by using a thick typeface with distressed letters.
       <span class="bold">The flag added color to the design, but it makes the word "serve" harder to read</span> (maybe to a point that it should have been removed or altered).</p>
      <p>The design was put to a vote, and the blue type version was printed (personally I liked the white version better).</p>

      <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/tshirt/sw_tshirt_issue.jpg"/>
        <p class="description description--image description--image--tall">Printed t-shirt width color issues (see below)</p>
      </div>

      <p>There were some problems with the flag colors and the t-shirt color in the final t-shirt print (above). Next time I will need to secure a final proof from the company before printing.</p>

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
    $( document ).ready( function() {
      swipeSlider.setUp( testData.tshirt);
    });

  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
