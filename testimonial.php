<!-- Testimonial -->
<?php if(get_field('testimonial_client_name', 'option')): ?>
	<?php $testimonial_bg = get_field('testimonial_background_image', 'option'); ?>
<section class="table testimonial" style="background-image: url('<?php echo $testimonial_bg; ?>');">
	<div class="table-cell">
			<div class="container">
			<?php the_field('testimonial_text', 'option'); ?>
			<span><?php the_field('testimonial_client_name', 'option'); ?></span>
		</div>
	</div>
</section>
<?php endif; ?>