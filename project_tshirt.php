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
        <p class="display display--section">SW T-Shirt Design</p>
        <p class="description description--section-top description--section-top--small">This was a project for Silver Wings, an organization at the Rochester Institute of Technology of which I am a member.</p>
        <p class="button button--small button--small--right">Learn more about Silver Wings</p>
      </div>


      <h1>Problems</h1>
      <ul>
        <li>Our chapter needed a new t-shirt to sell to raise funds</li>
        <li>Older t-shirt designs were not very cool looking</li>
      </ul>

      <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/images/sw_tshirt_white.jpg"/>
        <p class="description description--image description--image--tall">T-shirt design with white text on a dark gray t-shirt</p>
      </div>

      <h1>Solutions</h1>
      <ul>
        <li>A design featuring the Silver Wings motto in a strong typeface with distressed letters</li>
        <li>American flag mask on the word "serve"</li>
        <li>Two color schemes (above): one design with blue type on a light gray shirt, and one with white type on a darker gray shirt</li>
      </ul>

      <h1>Summary</h1>
      <p>This t-shirt design fits the spirit of Silver Wings by using a thick typface with distressed letters. The flag added color to the design, but it makes the word "serve" harder to read.</p>
      <p>The design was put to a vote, and the blue type version was printed (personally I liked the white version better).</p>

      <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/images/sw_tshirt_issue.jpg"/>
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
  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
