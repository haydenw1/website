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
      <p class="display display--section">Co-op Map</p>

      <div class="description-button-holder">
        <p class="description description--section-top">An interactive map that shows locations
        where students were hired for a cooperative education position in a company. This map was a
        part of a larger project, The School of Media Sciences App, that I worked on over the summer of 2015.</p>
        <a href="project_smsApp.php">
          <p class="button button--in-text button--in-text--description-right">View my SMS App project</p>
        </a>
      </div>
    </div>

    <div class="overwatch">

      <div class="container container_section container_section_story">

        <h1>Introduction</h1>
        <p>Cooperative education (co-op) is an important aspect of many Rochester Institute of Technology students' programs. This project
        uses the Google Maps API, and HTML, CSS, and JavaScript to generate map points based on the location of School of Media Sciences student's past co-ops.</p>
        <p>Users can zoom in and access each point
        to see the different companies and corresponding industries of the companies at that point. Users can also use a filter to narrow down the amount of map points and search for co-ops in a specific area.</p>

        <h1>Approach</h1>

        <h2>Map Point Generation</h2>
        <p>A JSON file holds the data for every location that will receive a map point.
        The file has a longitude and latitude value which, by using the Google Maps API,
        allows a map point to be generated for each longitude and latitude pair.</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/map/points-resampled2.jpg">
          <p class="description description--image description--image--tall">Map after initial point generation</p>
        </div>

        <h2>Point Interaction</h2>
        <p>If a point is clicked the interface will zoom into that point, and information
        from the data file will be displayed. This information includes the name of this
        location and a list of co-op companies and their corresponding industries. Each
        name in the list is a link that will take the user to that company’s website, where
        they can learn more about the company or the co-op opportunities that the company offers.</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/map/info-resampled2.jpg">
          <p class="description description--image description--image--tall">Information displayed when user clicks a point</p>
        </div>

        <h2>Filter</h2>
        <p>Users can filter the map points by location (by states in the United States only) or by
        industry, or by state and industry. Filter selections are saved if a filter has been applied,
        and a user cannot apply the same filter that is active. Users are notified if their filter
        will return no results, and they can select “All Map Points” to see all of the original map points.</p>

        <div class="div--image--tall">
          <img class="image image--tall" src="assets/projects/map/filter-resampled2.jpg">
          <p class="description description--image description--image--tall">Map filter interface with selections highlighted</p>
        </div>

        <h1>Challenges</h1>
        <p>The biggest challenge in this project was the filter functions. The logic to combine
        location and industry filters and to update the filter selections of the user in real time
        is difficult. I had to break down my functions into smaller pieces that I could understand
        completely before I solved the problems I was having with the filter logic.</p>


        <h1>Summary</h1>
        <p>This project involved a great deal of researching and learning new JavaScript techniques. I learned how to
        read and use the Google Maps API (which are pretty straightforward), and ended up with an interactive map that
        I believe is useable and looks good.</p>
        <p>With some minor improvements (mentioned below in the future improvements section below)
        this project could become an interesting visual tool for students.</p>

        <h2 class="quicklinks_hidden">Live Demo Link</h2>

        <a href="live_map/index.php">
          <div class="div_live-link">
            <img src="assets/projects/map/map_live-demo-link.jpg"/>
            <p class="live-project-link">Try a live demo of this project!</p>
          </div>
        </a>

        <h1>Future Improvements</h1>
        <ul>
          <li>If the industry filter is used, it only filters out points that do not have
          any companies in that industry. If a point has at least one company that matches
          the filtered industry, then the map will still show all companies at that point. The filter should only show companies
          which match that industry at the remaining points.</li>
          <li>Clicking a map point shows a list of co-op companies, with links to their personal websites. Ideally
          we should have a summary of their business that a user can read while staying in our application.</li>
          <li>Currently the co-op data is stored in a JSON file. The data should be moved into a database so that it
          can be easily edited and maintained.</li>
          <li>The industry categories do not accurately represent all of the industries
          in which School of Media Sciences Students get hired for co-ops. The categories
          should be corrected to better represent our student's co-op industries.</li>

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
      swipeSlider.setUp( testData.map);
    });

    quicklinks.setUp();
  </script>
</html>


