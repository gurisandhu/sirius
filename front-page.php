<?php 
/*
* Template Name: Front Page
*/
get_header();
 ?>


 <!-- Intro Banner -->
<section class="home-intro intro">
	<div class="container padding-left-for-star">
		<h1 class="white">A reputation for quality built over 30 years</h1>
	</div>
</section>

<!-- Commercial Development -->
<section class="commercial-dev padding-t-b">
	<div class="container">
		<div class="col-2 padding-left-for-star">
			<h2 class="blue">Committed to excellence in residential and commercial development</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia cupiditate saepe officiis expedita, consequuntur accusamus consectetur nulla laboriosam obcaecati fugit quibusdam impedit voluptatum nesciunt nam! Eaque nostrum magni quo similique?</p>
			<a href="#" class="more">Read more</a>
		</div>
		<div class="col-2">
			<img src="<?php bloginfo('template_url'); ?>/compressed/images/commercial.jpg" alt="Committed to excellence in residential and commercial development">
		</div>
	</div>
</section>

<!-- We take pride ... -->
<section class="pride">
	<div class="container white">
		<div class="col-2 padding-left-for-star">
			<h2 class="white">We take pride in every aspect of our work</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum enim, hic fugiat. Sequi sed, sit, ut tempora sunt odio quos unde cupiditate asperiores tempore facere. Mollitia quis, odit laudantium repudiandae.</p>
			<a href="#" class="more">Read more</a>
		</div>
	</div>
</section>

<!-- Current Projects -->
<section class="current-project projects">
	<div class="container padding-left-for-star">
		<h2 class="blue">Current Projects</h2>
		<div class="col-3 ">
			<img src="<?php bloginfo('template_url'); ?>/compressed/images/current-project-1.jpg" alt="">
			<h3 class="blue">Westmead</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate veniam, fugiat placeat aliquam debitis ipsum eligendi. Inventore alias veniam nesciunt, totam at error minima, temporibus, sit quasi doloribus quisquam iste!</p>
			<a href="#" class="caps">View Project</a>
		</div> <!-- end of col-3 -->
		<div class="col-3">
			<img src="<?php bloginfo('template_url'); ?>/compressed/images/current-project-1.jpg" alt="">
			<h3 class="blue">Westmead</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate veniam, fugiat placeat aliquam debitis ipsum eligendi. Inventore alias veniam nesciunt, totam at error minima, temporibus, sit quasi doloribus quisquam iste!</p>
			<a href="#" class="caps">View Project</a>
		</div> <!-- end of col-3 -->
		<div class="col-3">
			<img src="<?php bloginfo('template_url'); ?>/compressed/images/current-project-1.jpg" alt="">
			<h3 class="blue">Westmead</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate veniam, fugiat placeat aliquam debitis ipsum eligendi. Inventore alias veniam nesciunt, totam at error minima, temporibus, sit quasi doloribus quisquam iste!</p>
			<a href="#" class="caps">View Project</a>
		</div> <!-- end of col-3 -->
		<a href="#" class="more">View More</a>
	</div>
</section>


<!-- Previous Projects -->
<section class="previous-project projects">
	<div class="container padding-left-for-star">
		<h2 class="blue">Previous Projects</h2>
		<div class="col-3 ">
			<img src="<?php bloginfo('template_url'); ?>/compressed/images/current-project-1.jpg" alt="">
			<h3 class="blue">Westmead</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate veniam, fugiat placeat aliquam debitis ipsum eligendi. Inventore alias veniam nesciunt, totam at error minima, temporibus, sit quasi doloribus quisquam iste!</p>
			<a href="#" class="caps">View Project</a>
		</div> <!-- end of col-3 -->
		<div class="col-3">
			<img src="<?php bloginfo('template_url'); ?>/compressed/images/current-project-1.jpg" alt="">
			<h3 class="blue">Westmead</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate veniam, fugiat placeat aliquam debitis ipsum eligendi. Inventore alias veniam nesciunt, totam at error minima, temporibus, sit quasi doloribus quisquam iste!</p>
			<a href="#" class="caps">View Project</a>
		</div> <!-- end of col-3 -->
		<div class="col-3">
			<img src="<?php bloginfo('template_url'); ?>/compressed/images/current-project-1.jpg" alt="">
			<h3 class="blue">Westmead</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate veniam, fugiat placeat aliquam debitis ipsum eligendi. Inventore alias veniam nesciunt, totam at error minima, temporibus, sit quasi doloribus quisquam iste!</p>
			<a href="#" class="caps">View Project</a>
		</div> <!-- end of col-3 -->
		<a href="#" class="more">View More</a>
	</div>
</section>

<?php include (TEMPLATEPATH . '/testimonial.php'); ?>

<?php include (TEMPLATEPATH . '/contact-form.php'); ?>

<?php get_footer(); ?>