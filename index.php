<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%% NAVIGATION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%% NAVIGATION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="container">

      <a href="about.php" class="display">
        <div class="front front_about">
          <p class="display display--front">About</p>
          <!--<div class="shadow"></div>-->
        </div>
      </a>

      <a href="projects.php" class="display">
        <div class="front front_projects">
          <img class="panAndZoom"/>
          <p class="display display--front">Projects</p>
        </div>
      </a>

      <a href="contact.php" class="display">
        <div class="front front_contact">
          <p class="display display--front">Contact</p>
        </div>
      </a>

    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/footer.php" ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


  </body>
  <script>
    verticalCenter.center( "display--front");

    $( document ).ready( function() {
      panAndZoom.setUp( testData );
    });

    navMenu.frontPage = true;
  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
