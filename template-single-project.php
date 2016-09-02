<?php 
/*
Template Name: Single Project
*/
get_header(); ?>


<section class="template-2">
	<!-- Intro Banner -->
	<section class="intro">
		<div class="container">
			<div class="row white-bg template-2-page">
				<h1 class="blue">14 Park Ave, Westmead</h1>

				<div class="project-image">
					<img src="<?php bloginfo('template_url'); ?>/compressed/images/current-project-1.jpg" alt="">
				</div>
				<div class="project-desc">
					<ul>
						<li>
							<div>
								City / Suburb:
							</div>
							<div>
								Westmead
							</div>
						</li>
						<li>
							<div>
								Project Value:
							</div>
							<div>
								$2,755,000.00
							</div>
						</li>
						<li>
							<div>
								Underway:
							</div>
							<div>
								October 2014
							</div>
						</li>
						<li>
							<div>
								Completion:
							</div>
							<div>
								June 2015
							</div>
						</li>
						<li>
							<div>
								Description:
							</div>
							<div>
								10 Units
							</div>
						</li>
					</ul>
				</div>
				
				<div class="row project-navigation">
					<a href="#"><i class="fa fa-angle-left"></i> Previous Project</a>
					<a href="#">Next Project <i class="fa fa-angle-right"></i></a>
				</div>

				<h2 class="row blue">More Projects</h2>
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
				</div><!-- end of col-3 -->
			</div>
		</div> <!-- end of container -->
	</section>

	<?php include (TEMPLATEPATH . '/testimonial.php'); ?>

	<?php include (TEMPLATEPATH . '/contact-form.php'); ?>
</section><!-- end of template-2 -->

<?php get_footer(); ?>
