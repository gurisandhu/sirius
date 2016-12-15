<?php 
/*
Template Name: Single
*/
get_header(); ?>

<!-- single template -->
<section class="template-2">
	<!-- Intro Banner -->
	<section class="intro">
	</section>

	<section class="intro-content">
		<div class="container">
			<div class="row white-bg template-2-page">
				<h1 class="blue"><?php the_field('project_address'); ?></h1>
				
				<div class="project-image">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php $images = get_field('project_images_gallery'); ?>
					<?php if($images): ?>
						<?php foreach($images as $image): ?>
							<div class="swiper-slide show-loader" style="background-image: url('<?php echo $image['url']; ?>');">
								
							</div>
						<?php endforeach; ?>
						<?php endif; ?>	
						</div>
						 <!-- Add Arrows -->
				        <div class="swiper-button-next swiper-button-white"></div>
				        <div class="swiper-button-prev swiper-button-white"></div>
					</div>
				</div>
				<?php if (have_rows('project_description')): ?>
				<div class="project-desc">
					<ul>
						<li><div>Address:&nbsp;</div><div><?php the_field('project_address'); ?></div></li>
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
					<?php if(get_field('project_content')): ?>
						<li><?php echo get_field('project_content'); ?></li>
				<?php endif; ?>
					</ul>
				</div> <!-- end of description -->
			<?php endif; ?>
				<div class="row project-navigation">
					<?php previous_post_link( '%link', '< Previous Project', true ); ?>
					<?php next_post_link( '%link', 'Next Project >', true ); ?>
				</div>
<div class="hide">
		<?php 
		$current_post_id = get_the_ID();
		$current_cat_id = the_category_ID();

$args = array(
		// 'cat'		=> $current_cat_id,
		'post_type'	=>	'project',
		'posts_per_page'	=> 3
		);
	$projects = new WP_Query($args);

			if ($projects->have_posts()):?>
</div>
<!-- Current Projects -->
<section class="more-project projects">
	<div class="container">
		<h2 class="row blue">More Projects</h2>
			<?php
				while($projects->have_posts()){
					$projects->the_post();
			?>
			<?php
			$images = get_field('project_images_gallery'); 
			$image = $images[0];
			$each_post_id = get_the_ID();	

			if ($each_post_id != $current_post_id):
		 	?>			
				<a href="<?php echo get_permalink(); ?>" class="col-3 "> 
					<div class="product-image" style="background-image: url('<?php echo $image['url']; ?>');"></div>
					
						<div class="over-project-desc">
							<h3 class="blue"><?php the_title() ?></h3>
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
			<?php endif; ?>
		<?php } ?>
</section>
<?php endif; ?>		
			</div>
		</div> <!-- end of container -->
	</section>

	<?php include (TEMPLATEPATH . '/testimonial.php'); ?>

	<?php include (TEMPLATEPATH . '/contact-form.php'); ?>
</section><!-- end of template-2 -->

<?php get_footer(); ?>