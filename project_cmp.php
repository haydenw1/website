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
      <p class="display display--section">Cross Media Publishing Project</p>

      <div class="description-button-holder">
        <p class="description description--section-top">A final group project which involved organizing and structuring information before publishing to multiple media</p>
        <!--<a href="project_smsApp.php">
          <p class="button button--in-text button--in-text--description-right">View my SMS App project</p>
        </a>-->
      </div>
    </div>

    <div class="overwatch">

      <div class="container container_section container_section_story">

        <h1>Introduction</h1>

        <p>This was a final group project I did in a class called Cross Media Publishing; the project's main goal was to improve the organization of a set of existing documents that had been published by our school’s Digital Publishing Center (DPC), before republishing those documents in both print and web format.</p>

        <h2>Information Structuring</h2>
        <p>Initially, we created user personas, use cases, and wireframes to focus the project scope and determine a structure for the different information types in in the documents. The information structure was then used to create an extensible markup language (XML) that was applied to the information from the original DPC documentation.</p>

        <h2>Document Generation and Hosting</h2>
        <p>After we structured our information we generated a set of HTML documents and a set of printed documents, with both document sets originating from a single set of XML files. The HTML documents were hosted on a mobile friendly website that used AJAX to quickly switch between the documents.</p>

        <h1>Approach</h1>

        <h2>User Personas and Use Cases</h2>

        <p>Our initial group task was to brainstorm possible users who would access the documents, and the different use cases they could have when using the documents; this was important to ensure our end product would be accessible to all of our potential users.</p>

        <h2>XML Schemas</h2>

        <p>With our example personas and use cases in mind we created our project’s XML schema. Our schema defined the different types of possible information that could be contained in the documents, the relationships of the different information types, and the allowed number of occurrences of every information type.</p>

        <p>For example, our schema specified that every document should have one and only one title, and the number of paragraphs in a document should not be limited.</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/cmp-final/schema.jpg"/>
          <p class="description description--image description--image--tall">Visualization of our schema made in Oxygen XML editor</p>
        </div>

        <h2>XML Document Markup</h2>

         <p>With all of the different information types defined in our schema, our groups next task was to create our own XML markup language that assigned a different ‘tag’ to each specific information type in the documents. Our group used XSL, a family of languages that allows users to navigate and transform XML documents, to generate our final documents.</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/cmp-final/xsl-screenshot.jpg"/>
          <p class="description description--image description--image--tall">Sample XSL commands used to transform our XML documents</p>
        </div>

        <h2>Print Documents</h2>

        <p>The group’s print document team used XSL to transform the team’s XML documents in to XSL:FO format. XSL:FO is a specific transformation language that is used for creating page layouts with XML documents. The result of the XSL transformation and the XSL:FO formatting is a pdf document similar to one that would be created in InDesign.</p>

        <h2>HTML Documents</h2>

        <p>Our group’s HTML document team used XSL to create HTML files that would be hosted on a webpage. This process is different from the print document generation process; first a static html “skeleton” is created, and then XSL statements are placed in the skeleton. These XSL statements grab certain information from an XML document and place that information within the HTML skeleton.</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/cmp-final/html-screenshot.jpg"/>
          <p class="description description--image description--image--tall">A sample HTML document before CSS styling</p>
        </div>

        <h2>Wireframes</h2>

        <p>Wireframes were created to aid in the planning of the website that would host the finished HTML documents. The wireframes specified the possible appearance of navigation elements, menus, and the website homepage and document page. Wireframes for the mobile version of the website were also produced.</p>

        <div class="swipeSlider swipeSlider--no-caption" id="0"></div>

        <h2>Website</h2>

        <p>In the planning stages of this project, my group determined that accessibility and ease of use were paramount to our users. With this in mind we created a desktop and mobile layout for the website so that users could access and use the online documents from a computer or mobile device.</p>

        <h3>AJAX</h3>

        <p>The website incorporates Asynchronous JavaScript and XML (AJAX) in the navigation between categories and documents. AJAX allows the website to only reload the parts of the webpage that need to change when a user switches documents or categories, which is must faster than reloading the entire webpage.</p>

        <div class="div_gif">
          <div class="gfyitem" data-title=true data-autoplay=true data-controls=false data-expand=true data-id="DefiniteWhimsicalElectriceel" ></div>
          <p class="description description--image description--image--tall">Webpage using AJAX to switch documents and avoid a full page reload</p>
        </div>


        <h1>Summary</h1>
        <p>This project took students through all of the steps of creating a real-life cross media publishing application. The project was very process heavy—we spent much of our time planning and creating information structures so that we could streamline the process of publishing the documents to multiple media.</p>

        <h2 class="quicklinks_hidden">Website Demo Link</h2>
        <a href="live_cmp-final/index.php">
          <div class="div_live-link">
            <img src="assets/projects/cmp-final/cmp_home-links-open--small.jpg"/>
            <p class="live-project-link">Try a live demo of this project!</p>
          </div>
        </a>


        <!--
        <a href="live_cmp-final/index.html">
          <div class="div_live-link">
            <img src="assets/projects/cmp-final/cmp_home-links-open--small.jpg"/>
            <p class="live-project-link">Try a live demo of this project!</p>
          </div>
        </a>
        -->

        <h1>Future Improvements</h1>
        <ul>
          <li>The homepage should have an initial description that explains the Document Publishing Center and the document categories to first time users.</li>
          <li>Because the website loads new content using AJAX, and does not reload the entire webpage, if a user hits the back button it will take them off the website. This should be changed so that it is less disorienting for users who are used to the back button returning them to the last page.</li>
          <li>The document paragraphs have a first line indent and a space before the next paragraph. This is unnecessary and wrong, and the problem could be quickly fixed by changing the paragraph’s CSS properties.</li>
          <li>The dropdown to switch to other documents in the same category provides document descriptions, however, the descriptions are long and their font size is very small, especially on mobile devices. The descriptions should be shorter and more readable.</li>

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
      swipeSlider.setUp( testData.cmp);
    });

    quicklinks.setUp();
  </script>
</html>


