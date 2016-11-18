<?php 
/*
Template Name: Archive Project
*/
get_header(); ?>

<!-- Archive Template -->
<section class="template-2">
	<!-- Intro Banner -->
	<section class="intro">
		
	</section>

	<section class="intro-content">
		<div class="container">
			<div class="row white-bg template-2-page">

				<h1 class="blue"><?php wp_title(''); ?></h1>

				<?php 

					$cat_num = get_queried_object_id();
						
					$args = array(
						'cat'		=> $cat_num,
						'post_type'	=>	'project',
						'posts_per_page'	=> 20
						);
					$projects = new WP_Query($args);
					if( $projects->have_posts()){
						while( $projects->have_posts() ){
							$projects->the_post();
						?>
						<?php 
						$images = get_field('project_images_gallery'); 
						$image = $images[0];

						?>
						<a href="<?php echo get_permalink(); ?>" class="col-3 "> 

							<div class="product-image" style="background-image: url('<?php echo $image['url']; ?>');"></div>
							
							<h3 class="blue"><?php the_title() ?></h3>
							<p><?php the_field('project_content'); ?></p>
							<button class="caps">View Project</button>
						</a> <!-- end of col-3 -->
						
						<?php
						}
					}
					else {
						echo '<h3 class="blue">no projects found</h3>';
					}
				 ?>
			</div>
		</div> <!-- end of container -->
	</section>

	<?php include (TEMPLATEPATH . '/testimonial.php'); ?>

	<?php include (TEMPLATEPATH . '/contact-form.php'); ?>
</section><!-- end of template-2 -->

<?php get_footer(); ?>
