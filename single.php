<?php get_header(); ?>

<?php 
	$this_category = get_the_category();
 ?>
<!-- archive template -->
<section class="projects-banner-wrapper">
	<section class="home-banner-container">
		<div class="swiper-container-home">
			<div class="swiper-wrapper">
				<?php $images = get_field('project_images_gallery'); ?>
					<?php if($images): ?>
						<?php foreach($images as $image): ?>
							<div class="swiper-slide show-loader">
								<section class="home-intro intro show-loader" style="background-image: url('<?php echo $image['url']; ?>');">
															
								</section>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>	
			</div>
			<div class="swiper-button-prev swiper-button-white"></div>
			<div class="swiper-button-next swiper-button-white"></div>
		</div>
		<div class="project-close-button">
			<h2>Project Details</h2>
		</div>
		
		<div class="single-project-content close-content table">
			<div class="table-cell">
				<div class="close-button">&times;</div>
				<h2><?php the_title(); ?></h2>
				<?php the_field('project_address'); ?>

				<?php if (have_rows('project_description')): ?>
				<ul>
					<?php while (have_rows('project_description')): the_row();
						$title = get_sub_field('description_title');
						$value = get_sub_field('description_value');
						?>
						<li>
							<?php if($title): ?>
								<?php echo $title; ?>
							<?php endif; ?>
							<?php if($value): ?>
								: <?php echo $value; ?>
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
					<?php if(get_field('project_content')): ?>
						<li><?php echo get_field('project_content'); ?></li>
					<?php endif; ?>
				</ul>
				<?php endif; ?>
				<div class="row">
					<?php previous_post_link( '%link', 'Previous Project', true ); ?>
					<?php next_post_link( '%link', 'Next Project', true ); ?>
				</div>
			</div>
		</div>
	</section>
</section>  


<?php get_fo0ter(); ?>