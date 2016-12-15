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
			<div class="row">	
				<h4>Current Projects</h3>
					<?php 

						$cat_num = 3;
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
								
								<div class="over-project-desc">
									<h3 class="blue"><?php the_title() ?></h3>
									<p><?php the_field('project_content'); ?></p>
									<?php if (have_rows('project_description')): ?>
										<div class="project-desc">
											<ul>
												<?php while (have_rows('project_description')): the_row();
												$title = get_sub_field('description_title');
												$value = get_sub_field('description_value');
												 ?>
												<li>
													<?php if($title): ?>
														<div>
															<?php echo $title; ?>
														</div>
													<?php endif; ?>
													<?php if($value): ?>
														<div>
															: <?php echo $value; ?>
														</div>
													<?php endif; ?>
												</li>
											<?php endwhile; ?>
											</ul>
										</div> <!-- end of description -->
									<?php endif; ?>								
									<button class="caps">View Project</button>
								</div>
							</a> <!-- end of col-3 -->
							
							<?php
							}
						}
						else {
							echo '<h3 class="blue">no projects found</h3>';
						}
					 ?>
				</div>
				<div class="row">
					<h4>Previous Projects</h3>
					<?php 

						$cat_num = 1;
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
								<div class="over-project-desc">
									<h3 class="blue"><?php the_title() ?></h3>
									<p><?php the_field('project_content'); ?></p>
									<?php if (have_rows('project_description')): ?>
										<div class="project-desc">
											<ul>
												<?php while (have_rows('project_description')): the_row();
												$title = get_sub_field('description_title');
												$value = get_sub_field('description_value');
												 ?>
												<li>
													<?php if($title): ?>
														<div>
															<?php echo $title; ?>
														</div>
													<?php endif; ?>
													<?php if($value): ?>
														<div>
															: <?php echo $value; ?>
														</div>
													<?php endif; ?>
												</li>
											<?php endwhile; ?>
											</ul>
										</div> <!-- end of description -->
									<?php endif; ?>								
									<button class="caps">View Project</button>
								</div>
							</a> <!-- end of col-3 -->
							
							<?php
							}
						}
						else {
							echo '<h3 class="blue">no projects found</h3>';
						}
					 ?>
				</div>
			</div>
		</div> <!-- end of container -->
	</section>

	<?php include (TEMPLATEPATH . '/testimonial.php'); ?>

	<?php include (TEMPLATEPATH . '/contact-form.php'); ?>
</section><!-- end of template-2 -->

<?php get_footer(); ?>
