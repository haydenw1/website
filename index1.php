<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hayden Wagner</title>

      <link rel="stylesheet" type="text/css" href="css/wagner.css"/>
      <script src="http://www.haydenwagner.com/assets/jquery/jquery-1.11.3.min.js"></script>
      <script src="js/verticalCenter.js"></script>
      <script src="js/navMenu.js"></script>
      <script src="assets/test/testData.js"></script>
      <script src="js/panAndZoom.js"></script>
    </head>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>


    <!--%%%%%%%%%%%%%%%%%%%%%%%% NAVIGATION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="keep-nav">
      <div class="nav">

      <div class="menu_holder">
        <div class="menu" id="menu">
          <!-- SECOND PHP INCLUDE ***MENU*** %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
          <!-- Generator: Adobe Illustrator 16.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
              <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
              <svg class="menu_svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="60.278px" height="24.734px" viewBox="0 0 60.278 24.734" enable-background="new 0 0 60.278 24.734" xml:space="preserve">
              <g>
                <g>
                  <path d="M3.191,15.12c18,0,36,0,54,0c3.225,0,3.225-5,0-5c-18,0-36,0-54,0C-0.033,10.12-0.033,15.12,3.191,15.12L3.191,15.12z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M28.391,24.12c9.6,0,19.2,0,28.8,0c3.225,0,3.225-5,0-5c-9.6,0-19.2,0-28.8,0C25.167,19.12,25.167,24.12,28.391,24.12
                    L28.391,24.12z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M21.19,6.12c12,0,24,0,36,0c3.225,0,3.225-5,0-5c-12,0-24,0-36,0C17.966,1.12,17.966,6.12,21.19,6.12L21.19,6.12z"/>
                </g>
              </g>
              </svg>
            <!------end of menu include-->
        </div>
      </div>

      <a class="name-link_holder" href="index1.php">
          <div class="head nm link nameCenter" id="name">
            <!-- FIRST PHP INCLUDE ***LOGO*** %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
            <?php include "php_includes/logo.php"; ?>
            <span class="light-name">HAYDEN</span> WAGNER
          </div>
        </a>


        <div class="nv-holder" id="popup">
          <a href="about.php"><div class="head na link">About</div></a>
          <a href="projects.php"><div class="head na link">Projects</div></a>
          <a href="contact.php"><div class="head na link">Contact</div></a>
        </div>

        <a href="http://www.haydenwagner.com/ideas.php"><div class="head nv link">Contact</div></a>
        <a href="http://www.haydenwagner.com/portfolio.php"><div class="head nv link">Projects</div></a>
        <a href="http://www.haydenwagner.com/about.php"><div class="head nv link">About</div></a>




      </div>
    </div>
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
          <img class="panAndZoom" id="3"/>
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
    //new Slider("index_port");
    verticalCenter.center( "display--front");
    verticalCenter.center( "nameCenter", "nav");
    verticalCenter.center( "menu", "nav" );

    navMenu.addMenuListeners( "menu_holder" );

      panAndZoom.setUp( testData.omega );
  </script>
</html>

<!--
to do next

1. small script to center text vertically based on their css percentage heights on homepage
2. move nav over and get mobile version working
3. rough projects format (picture, title, date....at least)
