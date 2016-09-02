<div class="desktop-menu">
	<!-- <nav>
		<ul>
			<li><a href="index.php" rel="home">Home</a>
			</li>
			<li><a href="template-2.php">About us</a></li>
			<li><a href="template-project.php">What we do</a></li>
			<li class="has-dropdown"><a href="template-projects.php">Portfolio</a>
				<ul class="dropdown">
                    <li><a href="/our-work-detail.php">Overview</a></li>
                    <li><a href="#">Group</a></li>
                    <li><a href="#">Corporate Culture</a></li>
                    <li class="has-dropdown"><a href="#">Experience</a>
                        <ul class="dropdown">
                            <li><a href="#">sub 1</a></li>
                            <li><a href="#">sub 2</a></li>
                            <li><a href="#">sub 3</a></li>
                        </ul>
                    </li>
                </ul>	
			</li>
			<li><a href="#">Testimonials</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav> -->
	<nav>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</nav>	
</div> <!-- end of desktop menu -->

<div class="responsive menu-button">Menu</div>
<div class="responsive-menu">
	<nav>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</nav>	
</div>