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
      <p class="display display--section">SW T&#8209;Shirt Design</p>

      <div class="description-button-holder">
        <p class="description description--section-top">This was a project for Silver Wings, an organization at the Rochester Institute of Technology of which I am a member.</p>
        <a href="silverWings.php">
          <p class="button button--in-text button--in-text--description-right">Learn more about Silver Wings</p>
        </a>
      </div>
    </div>

    <div class="overwatch">

    <div class="container container_section container_section_story">

      <h1>Introduction</h1>
      <p>
        My Silver Wings chapter wanted a new t-shirt to be printed and sold. I
        created a design that improved on previous designs while showing our
        organization's patriotic spirit.
      </p>


      <h1>Approach</h1>

      <h2>Design</h2>
      <p>
        My design features the Silver Wings motto in a strong typeface with distressed
        letters, and an American flag masked to create the last word: "serve". I made two
        color schemes (below): one design with white type on a dark gray shirt, and one
        with blue type on a light gray shirt.
      </p>

      <div class="swipeSlider" id="3"></div>

      <h2>Text Layout and Effects</h2>

      <p>The text and other design elements in the t-shirt design were laid out in InDesign—once I finalized the layout I used Photoshop to add the distressed effect to the design.</p>


      <h1>Summary</h1>
      <p>
        This t-shirt design fits the strong volunteer efforts and selflessness of
        Silver Wings members by using a thick typeface with distressed letters.
        <span class="bold">The flag added color to the design, but it makes the word
        "serve" harder to read</span> (to a point that it should have been removed or altered).
      </p>

      <div class="div--image--tall">
        <img class="image image--tall" src="assets/projects/tshirt/sw_tshirt_issue.jpg"/>
        <p class="description description--image description--image--tall">Printed t-shirt width color issues (see below)</p>
      </div>

      <h1>Possible Improvements</h1>
      <ul>
        <li>There were some problems with the flag and t-shirt colors in the
        final print (shown above). Next time I will need to request a proof from
        the printing company before finalizing the print job.</li>
        <li>The design to be printed was put to a vote, and the blue version was selected. I think the white version of the design would end up looking better on a grey t-shirt.</li>
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
      swipeSlider.setUp( testData.tshirt);
    });

    quicklinks.setUp();

  </script>
</html>

