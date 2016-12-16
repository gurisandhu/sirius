<?php 
/*
* Template Name: Front Page
*/
get_header();
 ?>

<!-- Front page -->
<!-- Intro Banner -->
<?php if (have_rows('home_slider')): ?>
<section class="home-banner-wrapper">
	<section class="home-banner-container">
		<div class="swiper-container-home">
			<div class="swiper-wrapper">
				<?php while (have_rows('home_slider')): the_row(); ?>

				<?php if(get_sub_field('home_slider_image')): ?>

					<div class="swiper-slide">
						<section class="home-intro intro show-loader" style="background-image: url('<?php echo get_sub_field('home_slider_image'); ?>')">
							<div class="table">
								<div class="table-cell">
									<div class="container">
										<div class="home-intro-content">
											<h1 class="white"><?php echo get_sub_field('home_slider_headline'); ?></h1>
											<a class="transparent more" href="<?php echo get_sub_field('home_slider_page_link'); ?>"><?php echo get_sub_field('home_slider_button_text'); ?></a>
										</div>
									</div>	
								</div>
							</div>
						</section>
					</div>

				<?php endif; ?>

				<?php endwhile; ?>
				
			</div>
			<div class="swiper-button-prev swiper-button-white"></div>
			<div class="swiper-button-next swiper-button-white"></div>
		</div>
	</section>
</section>  
<?php endif; ?>

<!-- Commercial Development -->
 <?php $commDevBg = get_field('commercial_dev_image');
  ?>
<section class="section commercial-dev padding-t-b">
	<div class="container">
		<div class="col-2 padding-left-for-star">
			<h2 class="blue"><?php the_field('commercial_dev_title'); ?></h2>

			<?php the_field('commercial_dev_textarea'); ?>
			<a href="<?php the_field('commercial_dev_link'); ?>" class="more"><?php the_field('commercial_dev_button_text'); ?></a>
		</div>
		<div class="col-2">
			<img src="<?php echo $commDevBg; ?>" alt="Committed to excellence in residential and commercial development">
		</div>
	</div>
</section>

<!-- We take pride ... -->
<?php $ourPrideBg = get_field('our_pride_background_image'); ?>

<section class="pride table" style="background-image: url('<?php echo $ourPrideBg; ?>');">
	<div class="table-cell">
		<div class="container white">
			<div class="col-2 padding-left-for-star">
				<h2 class="white"><?php the_field('our_pride_title'); ?></h2>
				
				<?php the_field('our_pride_textarea'); ?>

				<a href="<?php the_field('our_pride_page_link'); ?>" class="more"><?php the_field('our_pride_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>



<?php 
		$args = array(
				// 'cat'		=> 3,
				'post_type'	=>	'project',
				'posts_per_page'	=> 3,
				'orderby'	=> 'rand'
				);
			$projects = new WP_Query($args);
			$category_id = get_cat_ID('current-project');
			$category_link = get_category_link($category_id);

			if ($projects->have_posts()):?>
<!-- Current Projects -->
<section class="current-project projects">
	<div class="container padding-left-for-star">
		<h2 class="blue">Projects</h2>
			<?php
				while($projects->have_posts()){
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
				<?php if (have_rows('project_description')): ?>
					<div class="project-desc">
						<ul>
							<li><?php the_field('project_address'); ?></li>
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
			</div> <!-- end of overview-projects -->
		</a> <!-- end of col-3 -->
		<?php } ?>
		<div class="row"><a href="<?php echo esc_url( home_url( '/' ) ); ?>projects" class="more">View More</a></div>
	</div> <!-- container -->	
</section>
<?php endif; ?>

<?php include (TEMPLATEPATH . '/testimonial.php'); ?>

<?php include (TEMPLATEPATH . '/contact-form.php'); ?>

<div class="scroll-down-wrapper">
	<div class="scroll-down">
	<!-- Scroll more button on home page -->
	</div>
</div>

<?php get_footer(); ?>