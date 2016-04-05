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
      <p class="display display--section display--section--about">Work Experience</p>
      <p class="description description--section-top">My relevant work experience in reverse chronological order</p>
    </div>

    <div class="overwatch">

      <div class="container container_section container_section_story">

        <div class="work_div">
          <h1 class="work_head">Content Development Coordinator</h1>
          <p class="work_date">January 2015 - Present</p>
          <p class="work_location">School of Media Sciences — Rochester Institute of Technology, Rochester, NY</p>

          <p>In this position I work part-time (max 20 hours a week) with a group of students in my school, the School of Media Sciences. Our primary goal is to recruit students to our school’s programs, with a focus on undergraduate recruitment.</p>

           <div class="work_responsibilities">
            <h3>Responsibilities</h3>
            <ul class="work_ul">
              <li>Continue development and production of the school’s showcase app</li>
              <li>Produce content for marketing initiatives and school branding</li>
              <li>Design and develop webpages to improve our school’s online presence</li>
              <li>Work with cleaning database entries and producing variable data email campaigns</li>
            </ul>
          </div>

          <p>In addition to these responsibilities, I am also an assistant in two web production classes this semester in which I help students learn JavaScript and other web development techniques.</p>
        </div>

        <div class="work_div">
          <h1 class="work_head">Front-End Developer</h1>
          <p class="work_date">May 2015 - August 2015</p>
          <p class="work_location">School of Media Sciences — Rochester Institute of Technology, Rochester, NY</p>

          <p>This position was a full-time (40 hours a week) cooperative-education position that I was hired for in the summer of 2015.</p>

          <div class="div--button-shadow-padding">
            <a href="coop.php">
              <p class="button button--in-text button--in-text--about button--in-text--right">Learn more about co-op</p>
            </a>
          </div>

          <p>The primary focus of this job was to produce an application featuring information and stories about the School of Media Sciences at the Rochester Institute of Technology. The app was produced with Adobe’s new software, “Adobe Experience Manager—Mobile”.</p>

          <div class="work_responsibilities">
            <h3>Responsibilities</h3>
            <ul class="work_ul">
              <li>Developed and coordinated production and publishing of showcase app</li>
              <li>Created interactive HTML visualizations using HTML, CSS, JavaScript, and D3.js</li>
              <li>Managed licenses and certificates necessary for the distribution of the application</li>
              <li>Managed App Store and Google Play store application submissions and updates</li>
              <li>Participated in weekly assessment and planning meetings with industry members</li>
            </ul>
          </div>

          <p>Read more about the School of Media Sciences App and my role in this project:</p>

          <a href="project_smsApp.php">
            <div class="project-card project-card--in-text-link">
              <div class="div--card-height-limiter">
                <img class="image image_project" src="assets/projects/app/splashscreens-06 copy.jpg"/>
              </div>
              <p class="title title_project">School of Media Sciences App</p>
              <p class="date date_project">May 2015 - Present</p>
            </div>
          </a>
        </div>

        <div class="work_div">
          <h1 class="work_head">Online Student Support Assistant</h1>
          <p class="work_date">September 2014 - December 2014</p>
          <p class="work_location">Wallace Library, Teaching and Learning Services — Rochester Institute of Technology, Rochester, NY</p>

          <p>This was a part-time (~20 hours a week) position in a department that offered support for strictly off-campus students who were taking classes at the Rochester Institute of Technology. The main goal was to produce documents that would teach students how to be more successful in their online college classes.</p>

           <div class="work_responsibilities">
            <h3>Responsibilities</h3>
            <ul class="work_ul">
              <li>Researched topics related to online class success and researched the different tools available to students</li>
              <li>Used InDesign to design and layout “infographics” and other informative documents</li>
            </ul>
          </div>
        </div>




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


