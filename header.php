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
	<?php if (is_single() || is_archive()) : ?>
		<header class="header-fixed projects-header">
			<!-- Main menu and Banners -->
			<section class="main-header">
	<?php else: ?>
		<header class="header-fixed no-projects-header shadow">
			<!-- Main menu and Banners -->
			<section class="main-header blue">
	<?php endif; ?>
			<div class="container">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo-2.svg" alt="Sirius Consolidated Logo"></a>
				</div>

				<?php include (TEMPLATEPATH . '/menu-main.php'); ?>

			</div>
		</section>
		</header>
