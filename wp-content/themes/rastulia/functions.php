<?php
	function enqueue_scripts() {
		wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0', 'all');

		wp_enqueue_style('mainstyle', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
	}

	add_action('wp_enqueue_scripts', 'enqueue_scripts');

/*=========================================
		Registring Menu Bar
==========================================*/

	register_nav_menus(array(

			'primary' => __('Primary Menu'),
	));



/*====================================
 ADD CUSTOM HEADER TO THEME
====================================*/

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/img/default-header.jpg',
        'default-text-color' => 'fff',
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
?>
