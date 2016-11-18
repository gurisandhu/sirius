<?php 
/*
Template Name: Third Template
*/
get_header(); ?>

<!-- Template third -->
<section class="template-2">
	<!-- Intro Banner -->
	<section class="intro">
	</section>

	<section class="intro-content">
		<div class="container">
			<div class="row white-bg template-2-page">
				<h1 class="blue"><?php the_title(); ?></h1>
				<div class="page-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'page-menu-second' ) ); ?>
				</div>
				<div class="template-2-content">
					<?php
					// TO SHOW THE PAGE CONTENTS
						while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
					<?php the_content(); ?> <!-- Page Content -->
					<?php
						endwhile; //resetting the page loop
					wp_reset_query(); //resetting the page query
					?>

				</div>
			</div>
		</div> <!-- end of container -->
	</section>

	<section class="testimonial" style="background-image: url('http://103.9.170.95/~sirius/wp-content/uploads/background-dark.jpg');">
		<div class="container">
			<?php the_field('testimonial_text'); ?>
			<span>- <?php the_field('testimonial_client_name'); ?></span>
		</div>
	</section>


	<?php include (TEMPLATEPATH . '/contact-form.php'); ?>
</section><!-- end of template-2 -->

<?php get_footer(); ?>
