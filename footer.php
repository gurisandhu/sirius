
<?php if (is_single() || is_archive()): ?>

<?php else: ?>
	<section class="footer-menu">
	<div class="container">
		<ul class="row">

			<?php if(get_field('privacy_policy_file', 'option')): ?>
				<li><a target="_blank" href="<?php the_field('privacy_policy_file', 'option') ?>">Privacy Policy</a></li>
			<?php endif; ?>
			<?php if(get_field('privacy_policy_link', 'option')): ?>
				<li><a target="_blank" href="<?php the_field('privacy_policy_link', 'option') ?>">Privacy Policy</a></li>
			<?php endif; ?>
			<li>Copright Sirius Construction</li>
			<li><a href="http://www.sailorstudio.com.au">Website by Sailor Studio</a></li>
		</ul>
	</div>
</section>
<?php endif; ?>
<span class='hide-body'></span>
</body>
</html>
<?php wp_footer(); ?>