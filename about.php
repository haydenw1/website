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
    <div class="section section_about">
      <div class="gradient"></div>
      <p class="display display--section display--section--about">About</p>
    </div>

    <div class="overwatch">

      <div class="container container_section container_section_story container_section_story--no-first-header">

        <p>I am currently a 4th year student at the Rochester Institute of Technology (RIT)
          in the Media Arts and Technology program, and I am interested in front end development using various technologies.</p>

        <div class="swipeSlider swipeSlider--no-caption" id="0">
        </div>

        <h1>My Major</h1>
        <p>The Media Arts and Technology (MAAT) program at RIT is focused
          on teaching students aspects of design and layout,
          web development and interactive media, document publishing and printing, and management in the media industry.
          Graduates of the MAAT program earn a Bachelor of Science degree.</p>

        <p>During my time as a student in the MAAT program I have been specifically interested in front end development, web design and development, and
          business management.</p>

        <div class="div--button-shadow-padding">
          <a href="projects.php">
            <p class="button button--in-text button--in-text--about button--in-text--right">View my projects</p>
          </a>
        </div>

        <h1>Experience</h1>

        <h2>Work Experience</h2>

        <p>My work experience has prepared me to apply the techniques I have practiced in the classroom to real world applications.</p>

        <div class="div--button-shadow-padding">
          <a href="workExperience.php">
            <p class="button button--in-text button--in-text--about button--in-text--right">View my work experience</p>
          </a>
        </div>

        <h2>Cooperative Education</h2>

        <p>In the summer of 2015 I was hired to develop an application for the School of Media Sciences at the Rochester Institute of Technology</p>

        <div class="div--button-shadow-padding">
          <a href="coop.php">
            <p class="button button--in-text button--in-text--about button--in-text--right">Learn more about co-op</p>
          </a>
        </div>

        <h1>Activities</h1>
        <p>I play rugby on the RIT club rugby team, and I am in an organization called Silver Wings.</p>

        <h2>Silver Wings</h2>
        <p>Silver Wings is associated with the United States Air Force; we promote professional development of
        our members and service in our communities, as well as addition to many other great initiatives.</p>

        <div class="div--button-shadow-padding">
          <a href="silverWings.php">
            <p class="button button--in-text button--in-text--about button--in-text--right">Learn about Silver Wings</p>
          </a>
        </div>
      </div>

      <div class="quicklinks">

      </div>
    </div><!--end of overwatch div-->
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>
    swipeSlider.setUp( testData.about );
    quicklinks.setUp();
  </script>
</html>

