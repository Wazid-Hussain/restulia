<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>

	<?php wp_head();?>
</head>
<body>



	<header>

		<div class="header-bar">
			<div class="site-name">
				<a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div class="site-menu">
				<?php 	$args = array(
							'theme_location'	=> 'primary',
							'container_id'		=> 'primary-menu-container',
							'container_class'	=> 'primary-menu-container',
							'menu_id'			=> 'primary-menu',
							'menu_class'		=> 'primary-menu',
							); ?>		
				<?php wp_nav_menu($args); ?>
			</div>
			<div class="booking">
				<a href="<?php echo get_home_url(); ?>">Book Your Table</a>
			</div>
		</div>	
		<?php if ( get_header_image() ) : ?>
		    <div id="site-header-img">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		            <img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		        </a>
		    </div>
		<?php endif; ?>
</header>




