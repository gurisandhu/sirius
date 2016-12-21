<!-- Contact us -->
<section class= "padding-t-b contact-form">
	<div class="container padding-left-for-star">
		<h2 class="blue">Contact us</h2>
		<ul class="company-info">
                        <?php if(get_field('contact_description', 'option')): ?>
				<li><?php the_field('contact_description', 'option') ?></li>
			<?php endif; ?>

			<?php if(get_field('company_title', 'option')): ?>
				<li class="u-case"><?php the_field('company_title', 'option') ?></li>
			<?php endif; ?>

			<?php if(get_field('street_address', 'option')): ?>
				<li><a target="_blank" href="http://maps.google.com/?q=<?php the_field('street_address', 'option') ?>"><?php the_field('street_address', 'option') ?></a></li>
			<?php endif; ?>

			<?php if(get_field('postal_address', 'option')): ?>
				<li><?php the_field('postal_address', 'option') ?></li>
			<?php endif; ?>

			<li>&nbsp;</li>
			<?php if(get_field('telephone', 'option')): ?>
				<li><a href="tel:<?php the_field('telephone', 'option') ?>">Tel: <?php the_field('telephone', 'option') ?></a></li>
			<?php endif; ?>

			<?php if(get_field('fax', 'option')): ?>
				<li>Fax: <?php the_field('fax', 'option') ?></li>
			<?php endif; ?>

			<?php if(get_field('email', 'option')): ?>
				<li><a href="mailto:<?php the_field('email', 'option') ?>">Email: <?php the_field('email', 'option') ?></a></li>
			<?php endif; ?>

		</ul>
		<form name="contactForm" onsubmit="return validateForm()" method="POST" class="contact-form">
			<?php if(get_field('form_email', 'option')): ?>
				<input type="hidden" name="receiver-email" value="<?php the_field('form_email', 'option') ?>">
			<?php endif; ?>

			<input type="hidden" name="siteurl" value="<?php bloginfo('template_url'); ?>">
			<div id="form-validation" class="form-validation">
				
			</div>
			<!-- required="required" -->
			<input type="text" name="flname" placeholder="Name">
			<input type="email" name="email" placeholder="Email">
			<textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
			<button class="blue-bg" type="submit">Send</button>
		</form>
	</div>
</section>
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