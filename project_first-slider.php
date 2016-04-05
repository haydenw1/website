<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <script type="text/javascript" src="http://www.haydenwagner.com/js/d3/d3.min.js" charset="utf-8"></script>
  <script src="js/oldDots.js"></script>
  <script src="js/slider/json/sliderJSON.js"></script>
  <script src="js/slider/slider.js"></script>
  <link rel="stylesheet" type="text/css" href="css/slider/main.css">

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="section section_projects">
      <div class="gradient"></div>
      <p class="display display--section">First Website Image Slider</p>

      <!--<div class="description-button-holder">-->
        <p class="description description--section-top">This was an independent project that helped me learn more about writing JavaScript.</p>
        <!--<a href="project_new-slider.php">
          <p class="button button--in-text button--in-text--description-right">View my new slider project</p>
        </a>
      </div>-->

    </div>

    <div class="overwatch">

    <div class="container container_section container_section_story">

      <h1>Introduction</h1>
      <p>I started this project because I wanted a way to show a series of images on my website, and because I
      wanted practice writing JavaScript and D3.js (a JavaScript visualization library).

      <h1>Approach</h1>

      <p>This image slider used a JSON data file that listed the images and their server
      location for each different slider. A JavaScript constructor function sets up the HTML elements,
      gives them CSS classes for styling, adds event listeners to them, and adds them to the DOM.
      When users would mouse over or click the right or left arrow the current image would
      animate to the opposite direction, and a new image would animate in from that direction.</p>

      <p>Although there are several drawbacks to using D3 to animate the cycling of the image
      slider, one benefit is that it was easy to loop back to the first image when the user cycled
      through all the other images.</p>


      <!-- <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/first-slider/first-slider_card.jpg"/>
        <p class="description description--image description--image--tall">Screenshot of the finished image slider</p>
      </div> -->
      <div id="testSlider"></div>

      <h1>Positives</h1>
      <ul>
        <li>I was able get the slider to cycle the images correctly</li>
        <li>D3 animations allowed the slider to "recycle" from the last image back to the first, and do the same in the opposite direction</li>
        <li>The position indicators (shown below) are animated correctly and aesthetically pleasing.</li>
      </ul>

      <div id="dot-holder">
      </div>

      <h1>Negatives</h1>
        <ul>
          <li>The slider has no swipe option for mobile users to cycle images</li>
          <li>The slider does not preload images (they load when cycled to the first time)</li>
          <li>It uses jQuery and D3.js (more dependencies means the website has to load more resources)</li>
          <li>The code to cycle images is complicated and unnecessary</li>
          <li>There are some text display issues on mobile devices</li>
        </ul>

      <h1>Summary</h1>
      <p>This project was great way for me to practice writing JavaScript, and it challenged me to brainstorm and create a solution to a problem from scratch. Due to the negatives listed above, I have since abandoned this image slider and made a new, mobile-first slider that I currently use on my website.</p>

      <h2>New Slider Project Link</h2>
      <a href="project_new-slider.php">
        <div class="project-card project-card--in-text-link">
          <div class="div--card-height-limiter">
            <img class="image image_project" src="assets/projects/new-slider/new-slider_card.png"/>
          </div>
          <p class="title title_project">New Website Image Slider</p>
          <p class="date date_project">January 2016</p>
        </div>
      </a>

    </div>

    <div class="quicklinks">
    </div>

    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>
    dots.make();
    quicklinks.setUp();
    new Slider("testSlider");
  </script>
</html>

