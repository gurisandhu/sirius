<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"> 
	<!-- [if IE]>
		<script src="http://html5shiv.google.ecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/compressed/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/compressed/images/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body>

	<!-- header fixed -->
	<section class="header-fixed">
		<!-- Top menu -->
		<section class="top-menu blue-bg desktop">
			<div class="container">
				<ul class="row">
					<li><a href="#">Sirius Consolidated</a></li>
					<li><a href="#">Jasarra Constructions</a></li>
					<li><a href="#">Catalyst Constructions</a></li>
					<li><a href="#">Makcon Group</a></li>
				</ul>
			</div>
		</section>
		
		<!-- Main menu and Banners -->
		<section class="main-header">
			<div class="container">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/compressed/images/logo.svg" alt="Sirius Consolidated Logo"></a>
				</div>

				<?php include (TEMPLATEPATH . '/menu-main.php'); ?>

			</div>
		</section>
		</section>
