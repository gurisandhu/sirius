<!-- Footer Menu -->
	<!-- <section class="top-menu blue-bg responsive">
		<div class="container">
			<ul class="row">
				<li><a href="#">Sirius Consolidated</a></li>
				<li><a href="#">Jasarra Constructions</a></li>
				<li><a href="#">Catalyst Constructions</a></li>
				<li><a href="#">Makcon Group</a></li>
			</ul>
		</div>
	</section> -->
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
<span class='hide-body show-loader'></span>
</body>
</html>
<?php wp_footer(); ?>