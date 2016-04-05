<!DOCTYPE html>
<html lang="en">

  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
  <?php include "php_includes/header.php"; ?>
  <link rel="stylesheet" type="text/css" href="css/wagner.css"/>
  <script type"text/javascript" src="https://assets.gfycat.com/gfycat.js"></script>
  <!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

  <body>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <?php include "php_includes/nav.php"; ?>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="section section_projects">
      <div class="gradient"></div>
      <p class="display display--section">Database Publishing Project</p>

      <div class="description-button-holder">
        <p class="description description--section-top">An individual final project to create a marketing campaign that used variable data promotional pieces</p>
        <!--<a href="project_smsApp.php">
          <p class="button button--in-text button--in-text--description-right">View my SMS App project</p>
        </a>-->
      </div>
    </div>

    <div class="overwatch">

      <div class="container container_section container_section_story">

        <h1>Introduction</h1>

        <p>This project was an individual final project for a class called Database Publishing. The final deliverable for this project was a personalized marketing campaign for an insurance company.</p>

        <p>The direction of the marketing campaign was determined by analysis of real insurance company data that held information on around 100,000 customers. The personalized marketing content was dynamically generated using InDesign and XMPie, an InDesign plugin. </p>

        <h1>Approach</h1>

        <h2>Data Cleaning and Data Analysis with Tableau</h2>

        <p>The first step of this project was to determine a marketing approach for my campaign by analyzing the data set that I was given. The provided data set was intentionally ‘dirty’ (filled with duplicates and bad entries), and it needed to be cleaned before it could be analyzed to find any patterns that could lead to a successful marketing approach.</p>

        <p>After the duplicates and bad entries had been deleted from the data I used Tableau, an analytics and data visualization software, to visualize the cleaned data in different ways. By combining the different data fields in Tableau a possible marketing strategy emerged based of the level of collision coverage of drivers in certain states. </p>

        <div class="swipeSlider swipeSlider--no-caption" id="0"></div>

        <h2>Strategy for Marketing Campaign</h2>

        <p>Based on the Tableau data analysis I decided that the strategy for my marketing campaign would be to market to consumers who currently had less than maximum collision coverage on their car insurance plan.</p>

        <p>Customers were only selected if they had been in fewer than 2 previous accidents to limit the potential risk of increased collision payouts to the insurance company. For overall cost reasons, the marketing campaign was limited to the 5 states that had the most customers with a collision level of 0 or 1 (Florida, New York, Pennsylvania, Ohio, Maryland).</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/datapub/tab3.jpg">
          <p class="description description--image description--image--tall">Sorting in Tableau revealed the 5 best states in which to focus marketing efforts</p>
        </div>

        <h2>InDesign</h2>

        <p>I used InDesign to create the page layout for the projects two graphic deliverables, the trans-promotional marketing piece and the direct mail piece. Static elements of the promotional pieces were positioned alongside dynamic elements that would change for each consumer (name, address etc.).</p>

        <h2>XMPie</h2>

        <p>I added dynamic content to the promo pieces by integrating the cleaned data set into the static documents using a variable printing InDesign plugin called XMPie. XMPie allowed me to use Boolean logic to place customer information from the dataset into my InDesign documents, and quickly generate multiple personalized promo pieces.</p>

        <p>In addition to allowing me to personalize the text information in my promo pieces, XMPie also allowed me to include personalized images in my marketing material.</p>

        <h2>Trans-promotional Piece</h2>

        <p>The idea of trans-promotional marketing is to include an advertisement with a non-advertisement to cause greater customer engagement than if the consumer was only seeing an ad. Our project deliverable was a realistic insurance company bill that included an advertisement that matched our marketing strategy.</p>

        <p>My trans-promotional marketing piece included variable customer data in the bill portion (such as customer name and address, policy info, bill amount, and collision coverage level), and it included a personalized image and message at the bottom that was determined by the customer’s collision coverage level.</p>

        <div class="swipeSlider swipeSlider--no-caption" id="1"></div>

        <h2>Direct Mail Piece</h2>

        <p>Direct mail is different from trans-promotional marketing because direct mail is pure advertising that is mailed directly to the customer. My direct mail piece was a postcard mailer that included a personalized message to the customer advertising the benefits of upgrading their collision coverage.</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/datapub/directMail-large.jpg">
          <p class="description description--image description--image--tall">A direct mail piece, before being printed and cut, with 4 variable data postcards</p>
        </div>

        <h1>Summary</h1>

        <p>This project gave me an opportunity to explore new software such as XMPie, and Tableau, and new techniques such as variable data printing, and data cleaning and analysis.</p>

        <p>I believe the trans-promotional piece was the strongest deliverable that I produced for the project; it included a large amount of variable customer data in the bill portion, and the variable image and message at the bottom were eye-catching and they fit in the rest of the bill.</p>

        <h1>Possible Improvements</h1>

        <ul>
          <li>The promotional pieces for a car insurance company should not show any wrecked cars. I never thought of this until I was presenting and the teacher mentioned it—if I were to do this project again I would choose different images.</li>
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
      swipeSlider.setUp( testData.dataPub );
    });

    quicklinks.setUp();
  </script>
</html>


