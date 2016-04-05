<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="section section_projects">
      <div class="gradient"></div>
      <p class="display display--section">New Website Image Slider</p>

      <div class="description-button-holder">
        <p class="description description--section-top">An independent project to improve the functionality and looks of my first image slider</p>
        <a href="project_first-slider.php">
          <p class="button button--in-text button--in-text--description-right">View my first slider project</p>
        </a>
      </div>
    </div>

    <div class="overwatch">

      <div class="container container_section container_section_story">

        <h1>Inspiration</h1>
        <p>The look and operation of my new website images slider was inspired by the
        Spotify mobile app interface (shown below).</p>
        <p>Spotify shows the album artwork of the current music, as well as the artwork
        from the previous and the next song. You can swipe to go to the next song and the
        selected song's image is centered and larger.</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/new-slider/spotify1.jpg"/>
          <p class="description description--image description--image--tall">Screenshot of Spotify's mobile interface</p>
        </div>

        <h1>Approach</h1>
        <p>Below is an example of my image slider I created using JavaScript. My image slider is similar to
        the Spotify slider (and others image viewers, such as the iTunes album viewer) in that my slider shows the
        previous and next images on the left and right of the selected image, and my slider centers and enlarges the selected image.</p>

        <div class="swipeSlider swipeSlider--no-caption" id="0"></div>

        <h2>Swipe Movement</h2>
        <p>When a user swipes the “left” property of a div that holds the images is adjusted,
        so that the images appear to move with the user’s finger. After the used releases their
        finger the holder div is centered on the closest image, meaning that if the user swipes
        further than the halfway point between the current image and the next image then the slider
        will move to the next image.</p>
        <h2>Cycle Buttons</h2>
        <p>Buttons are offered to the user to cycle the images if they are on desktop or do not want
        to swipe between images. If a button is tapped or clicked the holder div will move so that the
        next image in that button’s direction is centered. The corresponding button will disappear if the
        current image is at the beginning or end of the available images.</p>


        <h1>Summary</h1>
        <p>This slider is an improvement on my first image slider because it is more visually appealing
        and it allows mobile users to swipe between images.</p>
        <p>Additionally, multiple image sliders can be easily added to any webpage, and captions can be added to the images (shown below).

        <div class="swipeSlider" id="1"></div>

        <div class="div--space-top">
          <h4>Image credits for example slider images</h4>
          <ul>
            <li class="small">1 (Beach) - Flickr user Carlos ZGZ</li>
            <li class="small">2 (Tree) - Flickr user Frayle</li>
            <li class="small">3 (Orange flower) - Flickr user Nik Osborne</li>
            <li class="small">4 (River) - Flickr user Image Catelog</li>
            <li class="small">5 (Autumn leaves) - Flickr user Nicholas A. Tonelli</li>
            <li class="small">6 (Beetle) - Flickr user Frayle</li>
          </ul>
        </div>

        <h1>Future Improvements</h1>
        <ul>
          <li>Currently the images only change size when they move into their final
          position&mdash;I want the image height to grow and shrink as the user is in the process of swiping.</li>
          <li>I want to incorporate the position indicators from my first image slider, so that the user knows
          how many total images are in the slider, and the position in the slider of the current image.</l1>
          <li>Long image captions will begin to change the size of the image&mdash;the caption should be able to be any length without affecting the size of its image.</li>
        </ul>

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
    $( document ).ready( function() {
      swipeSlider.setUp( testData.newSlider);
    });

    quicklinks.setUp();
  </script>
</html>


