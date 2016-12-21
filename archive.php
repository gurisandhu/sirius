<?php get_header(); ?>

<?php 
$categories = get_queried_object();
	$cat_num = $categories->term_id;
	$args = array(
		'cat'		=> $cat_num,
		'post_type'	=>	'project',
		);
	$projects = new WP_Query($args);

	if ($projects->have_posts()):
 ?>
<!-- archive template -->
<section class="projects-banner-wrapper">
	<section class="home-banner-container">
		<div class="swiper-container-home">
			<div class="swiper-wrapper">
				<?php while($projects->have_posts()): $projects->the_post(); 
					$images = get_field('project_images_gallery'); 
					$image = $images[0];
				?>
					<div class="swiper-slide">
						<section class="home-intro intro show-loader" style="background-image: url('<?php echo $image['url']; ?>')">
							<div class="table">
								<div class="table-cell">
									<div class="container">
										<div class="project-intro-content">
											<h1><?php the_title(); ?></h1>
											<a class="more-white" href="<?php echo get_permalink(); ?>">View Project</a>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="swiper-button-prev swiper-button-white"></div>
			<div class="swiper-button-next swiper-button-white"></div>
		</div>
	</section>
</section>  

<?php endif; ?>	<!-- if $projects->have -->

<?php get_footer(); ?>