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
      <p class="display display--section display--section--about">Silver Wings</p>
      <p class="description description--section-top">Silver Wings is a national co-ed professional organization with a chapter located at the Rochester Institute of Technology.</p>
    </div>

    <div class="overwatch">

      <div class="container container_section container_section_story">

        <h1>Background</h1>

        <p>Silver Wings is a national co-ed professional organization that is made
        up of civilians dedicated to developing our members personally and professionally,
        volunteering in our communities, and educating others about national defense.</p>

        <p>Silver Wings is associated with the U.S. Air Force and several other
        military organizations. Some of our members are Air Force Reserve Officers'
        Training Corps (AFROTC) cadets acting in a civilian capacity; however, I
        am not a cadet (just an interested civilian).</p>

        <h2>My Involvement</h2>
        <p>In my freshman year of college my roommate convinced me to come to a meeting for the newly created Silver Wings chapter on campus. I liked the atmosphere of the meetings, the attitudes of the other members, and the opportunities for personal and professional growth; I have been involved in Silver Wings ever since.</p>

        <h1>Silver Wings Images</h1>
        <div class="swipeSlider" id="0"></div>


        <h1>Positions Held</h1>
        <h2 id="spareOrphan">National Public Affairs Officer</h2>
        <p class="date_body-text">April 2015 - Present</p>
        <p>I am currently the Silver Wings National Public Affairs Officer; in this position I am responsible for designing and creating media assets and managing promotional projects. I have worked on web development, asset management, social media campaigns, and improvements to organizational programs.</p>
        <p>In this position I have been given the opportunity to travel to Chicago, Washington D.C., and Seattle for various Silver Wings functions, and I will be going to Dallas this spring for our annual national conclave. The other National Staff members and I were elected at our last national conclave in April 2015.</p>

        <h2 id="spareOrphan">Chapter Public Affairs Officer</h2>
        <p class="date_body-text">April 2014 - April 2015</p>
        <p>In this position I managed the chapter's social media accounts, took pictures at events, and organized volunteer opportunities.</p>


        <h1>Value</h1>

        <p>My time in Silver Wings has taught me the importance of communication
        and the difficulties that come with undertaking new projects and initiatives,
        particularly across long distances.</p>



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
      swipeSlider.setUp( testData.silverWings);
    });
    quicklinks.setUp();
  </script>
</html>


