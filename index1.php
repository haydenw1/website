<!DOCTYPE html>
<html lang="en">


	<!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
	<?php include "php_includes/header.php"; ?>
	<!--%%%%%%%%%%%%%%%%%%%%%%%%    HEADER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


	<body>


		<!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
		<?php include "php_includes/nav.php"; ?>
		<!--%%%%%%%%%%%%%%%%%%%%%%%%    NAV    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


		<!--%%%%%%%%%%%%%%%%%%%%%%%%    MEAT    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
		<!--<div class="container">-->

			<div class="backing-color" id="index-blurb-color">
				<div class="backing" id="index-blurb">
					<div id="middle-text" class="first-blurb">
					<p class="blurb-front">Hi, my name is Hayden Wagner. <span class="semibold">I'm currently in college at <a class="text-link" href="http://rit.edu" target"_blank">RIT</a>, and I'm interested in programming, web design, UI design, and project management.</span></p>
					<p class="front">In the different sections of my website listed below you can learn more about me and what I am doing in my work and studies.</p>
					</div>
				</div>
			</div>

			<div class="backing-color" id="index-about-color">
				<div class="backing" id="index-about">
					<div id="middle-text">
						<h2 class="masthead">About</h2>
						<p class="front">In my about section you can learn more about more about my education, the activities that I am involved in, and things that I am interested in.</p>
						<a class="button" href="about.php">More About Me</a>
					</div>
				</div>
			</div>

			<div class="backing-color" id="index-portfolio-color">
				<div class="backing" id="index-portfolio">
						<!--<div id="middle-text" class="above-slider">-->
						<div id="middle-text" class="above-slider">
							<h2 class="masthead">Portfolio</h2><!--maybe portfolio??? maybe not-->
							<p class="front">In my portfolio section you can view my completed class, work, or organization <!-- have 'organization' be a link or say 'silver wings' and have it be a link...class and work people will understand but this could be confusing (link could go to about page section that explains silver wings involvement)-->projects.</p>
							<a class="button" href="portfolio.php" alt="portfolio">Full Portolio</a>
			      </div>
			      <div id="index_port"></div>
			     	<!--<a class="button below-slider" alt="portfolio" href="pages/portfolio/app.php">Full Portfolio</a>-->
			  </div>
			</div>

			<div class="backing-color" id="index-ideas-color">
		    <div class="backing" id="index-ideas">
					<!--<div id="middle-text" class="above-slider below-slider">-->
					<div id="middle-text">
						<h2 class="masthead">Ideas</h2>
						<p class="front">In my ideas section you can view any independent projects or ideas that I am working on outside of work or school.</p>
						<a class="button" alt="ideas" href="ideas.php">My Ideas</a>
		      </div>
		      <!--<div id="test1"></div>-->
		      <!--<a class="button below-slider" alt="idea">View this idea</a>-->
		    </div>
		  </div>

		  <div class="backing-color" id="index-work-color">
		    <div class="backing" id="index-work">
						<!--<div id="middle-text" class="below-slider">-->
						<div id="middle-text">
							<h2 class="masthead">Work</h2><!--maybe portfolio??? maybe not-->
							<p class="front">In my work section you can view my past and current employment positions, and see the experience and skills that I've gained in these positions.<!-- have 'organization' be a link or say 'silver wings' and have it be a link...class and work people will understand but this could be confusing (link could go to about page section that explains silver wings involvement)--></p>
							<a class="button" alt="portfolio" href="work.php">Work</a>
						</div>
				</div>
			</div>

			<div class="backing-color" id="index-contact-color">
				<div class="backing" id="index-contact">
					<div id="middle-text">
						<h2 class="masthead">Contact</h2>
						<p class="front italic">Email is the best way to reach me&#8212;currently I have a busy schedule with school, work, and practice, so I don't always answer my phone.</p>
						<p class="contact-text" id="email"><span class="heavy italic note">Click below to show email</p>
						<a class="button contact-show" id="showEmail">Show Email</a>
						<a class="button contact-copy" id="copyEmail">Copy Email</a>
						<p class="contact-text" id="phone"><span class="heavy italic note">Click below to show phone #</span></p>
						<a class="button contact-show" id="showPhone">Show Phone #</a>
						<a class="button contact-copy" id="copyPhone">Copy Phone #</a>
					</div>
				</div>
			</div>
				<!--<div id="middle-text" class="below-contact"></div>-->
		<!--</div>-->
		<!--%%%%%%%%%%%%%%%%%%%%%%%%   MEAT    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


	<!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
	<?php include "php_includes/footer.php" ?>
	<!--%%%%%%%%%%%%%%%%%%%%%%%%  FOOTER   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


	</body>
	<script>
		new Slider("index_port");
	</script>
</html>
