<?php 
/*
Template Name: Page with Links
*/
get_header(); ?>

<!-- template second -->
<section class="template-2">
	<!-- Intro Banner -->
	<section class="intro">
		
	</section>
	
		<section class="intro-content">
		<div class="container">
			<div class="row white-bg template-2-page">
				<h1 class="blue"><?php the_title(); ?></h1>
				<?php if(have_rows('page_with_links_repeater')): ?>
					<div class="page-menu">
						<ul><?php $link_num = 1; ?>
							<?php while(have_rows('page_with_links_repeater')): the_row(); ?>
							<li class="page-with-links-title-<?php echo $link_num; ?>">
								<button type="button" onclick="showPageWithLinksCotent(<?php echo $link_num; ?>);"><?php echo get_sub_field('page_with_links_title'); ?></button>
							</li>
							<?php $link_num++; ?>
						<?php endwhile;?>
						</ul>
					</div>	
				<?php endif; ?>
				<div class="template-2-content">
					<div class="page-with-links-content page-with-links-content-0">
						<?php if (have_rows('column_content')): while (have_rows('column_content')): the_row(); ?>
							<?php $full_content = get_sub_field('full_column_content'); ?>
							<?php if($full_content): ?>
								<section class="custom-cols full-width">
									<?php echo $full_content; ?>
								</section>
							<?php endif; ?> 
					
							<?php if (have_rows('two_columns')): ?>
								<section class="custom-cols">
									<?php while (have_rows('two_columns')): the_row(); ?>

									<?php $two_cols = get_sub_field('two_column_content'); ?>
									<div class="col-2">
										<?php echo $two_cols; ?>
									</div>
									<?php endwhile; ?>
								</section>
							<?php endif; ?> 

						<?php if (have_rows('three_columns')): ?>
						<section class="custom-cols">
						<?php while (have_rows('three_columns')): the_row(); ?>

							<?php $three_cols = get_sub_field('three_column_content'); ?>

							<div class="col-3">
								<?php echo $three_cols; ?>
							</div>
						<?php endwhile; ?>
						</section>
						<?php endif; ?> 

						<?php if (have_rows('four_columns')): ?>
						<section class="custom-cols">
						<?php while (have_rows('four_columns')): the_row(); ?>

							<?php $four_cols = get_sub_field('four_column_content'); ?>
		
							<div class="col-4">
								<?php echo $four_cols; ?>
							</div>
						<?php endwhile; ?>
						</section>
						<?php endif; ?> 
						 <?php $oneThird = get_sub_field('13_column'); ?>
						 <?php $twoThird = get_sub_field('23_column'); ?>

						 <?php if ($oneThird): ?>
						 <section class="custom-cols">
						 	 <?php if(get_sub_field('position_13_and_23') == '2/3 than 1/3'): ?>
						 	 <div class="row">
						 	 	<div class="two-third">
								 	<?php echo $twoThird; ?>
								 </div>
								 <div class="one-third">
								 	<?php echo $oneThird; ?>
								 </div>
						 	 </div>
							<?php elseif(get_sub_field('position_13_and_23') == '1/3 than 2/3'): ?>
							<div class="row">
								<div class="one-third">
								 	<?php echo $oneThird; ?>
								 </div>

								 <div class="two-third">
								 	<?php echo $twoThird; ?>
								 </div>
							</div>
							<?php endif; ?>	 
						</section>	
							
						<?php endif; ?>

						<?php endwhile; endif; ?> 
					</div> <!-- page-with-links-content -->

					<?php if(have_rows('page_with_links_repeater')): ?>
						<?php $content_num = 1; ?>
						<?php while(have_rows('page_with_links_repeater')): the_row(); ?>
						<div class="page-with-links-content page-with-links-content-<?php echo $content_num; ?>">
								<?php echo get_sub_field('page_with_links_content'); ?>
						</div> <!-- page-with-links-content -->
						<?php $content_num++; ?>
					<?php endwhile; endif; ?>
				</div> <!-- template-2-content -->
			</div>
		</div> <!-- end of container -->
	</section>


	<?php if(get_field('testimonial_text')): ?>
		<section class="testimonial" style="background-image: url('http://103.9.170.95/~sirius/wp-content/uploads/background-dark.jpg');">
			<div class="container">
				<?php the_field('testimonial_text'); ?>
				<span>- <?php the_field('testimonial_client_name'); ?></span>
			</div>
		</section>
	<?php endif; ?>



	<?php include (TEMPLATEPATH . '/contact-form.php'); ?>
</section><!-- end of template-2 -->

<?php get_footer(); ?>
