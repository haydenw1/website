<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Hayden Wagner</title>
    <link rel="stylesheet" type="text/css" href="../../css/wagner.css"/>
    <link type="text/css" rel="stylesheet" href="css/sms.css"/>
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css"/>

    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> <!-- gets jquery -->
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> <!-- gets jquery -->
    <script src="../js/navMenu.js"></script>

    <!--<script src="js_dps_api/dpsHTMLGestureAPI.min.js"></script>
    <script src="js_dps_api/api.js"></script>-->
    <script src="js/dps_api/dpsHTMLGestureAPI.min.js"></script>
    <script src="js/dps_api/api.js"></script>
    <script src="js/back.js"></script>
    <!--<script src="buttons/js/buttons.js"></script>-->
    <script src="js/sms_map.js"></script>
    <script src="js/scrollArrows.js"></script>
</head>
<body>

    <?php include "../php_includes/nav_live-map.php"; ?>
    <!--<div class="navigation">
      <div class="navigation_back-button">
        <a href="goto://FolioNavigation/lastview">BACK</a>
      </div>
    </div>-->

    <article id="wrapper">

        <div id="info-div">
          <div class="close info"><div class="close--position">&#215;</div></div>
          <!--<p class="label location">Location</p>-->
          <div class="replace" id="city-holder">

          </div>
          <p class="label companies">Co-op Companies List <span>(click&nbsp;to&nbsp;visit&nbsp;website)</span>   </p>
            <div>
              <div class="replace" id="companies-holder">
                <p id="default">We're sorry, we can't find the company names, but someone did go on co-op in this city!</p>
              </div>
            </div>
        </div>

        <div id="filter">
          <div class="close filter"><div class="close--position">&#215;</div></div>

          <div class="filter-special all">
            <h1 class="label--all">Filter</h1>
            <div id="all-div">

            </div>
          </div>

          <div class="filter-position state" id="stateFilter">
            <p class="label state">Filter by <span>US&nbsp;State</span></p>
            <div class="scrollArrows_div" id="arrowTop"></div>
            <div class="filter-selection" id="state-div">

            </div>
            <div class="scrollArrows_div" id="arrowBottom"></div>
          </div>

          <div class="filter-position industry" id="industryFilter">
            <p class="label industry">Filter by <span>Industry<span></p>
            <div class="scrollArrows_div" id="arrowTop"></div>
            <div class="filter-selection" id="industry-div">

            </div>
            <div class="scrollArrows_div" id="arrowBottom"></div>
          </div>

          <!--<div class="filter-selection" id="state-div-past">
            <div class="label past-filter">Current Map Filter</div>
          </div>-->

          <div class="filter-button" id="filter-calc">
            <p>Filter Now</p>
          </div>
          <div class="filter-warning">
            <p class="top"><!--Your selection matches the current map filter-->The selected filter has no results</p>
            <!--<p class="bottom">Please choose a new filter selection</p>-->
          </div>

        </div>

        <div id="sms-map">

        </div>

        <div class="filter-button" id="filter-display">
          <p>Filter</p>
        </div>

<!--
        <div class="button nav">


      <!--<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
      <g>
        <rect x="0.4" y="3.7" fill="#FFFFFF" width="59.5" height="20.1"/>
        <g>
          <g>
            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="29" y1="46" x2="29" y2="4"/>
            <g>
              <polygon fill="#FFFFFF" points="36.4,40.5 29.4,43.5 22.5,40.5 29.4,57"/>
            </g>
          </g>
        </g>
      </g>
      </svg>
    </div>


    <div class="button help">?</div>-->




    </article>

    <?php include "../php_includes/footer.php" ?>

    <script>
      //api.setUp();
      //back.setup();

      SMSMap.setWrapperSize();
      SMSMap.initiateMap();
      //SMSMap.drawMap();
      //api.setUp(); //for now until the buttons work ** CHANGE
      //buttons.createButtons();

      $ ( document ).ready( function() {
        scrollArrows.setUp();
        scrollArrows.getScrollArrows( "stateFilter", "state-div" );
        scrollArrows.getScrollArrows( "industryFilter", "industry-div" );
      });
    </script>
</body>
</html>
