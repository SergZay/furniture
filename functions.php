<?php
require_once 'inc/StyleScript.php';

register_nav_menus( array(
	'main_menu'   => __( 'Main menu', 'furniture' ),
) );

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );

// register blocks for Gutenberg with acf
function register_acf_block_types() {

	acf_register_block( array(
		'name'            => 'hero-main',
		'title'           => __( 'Hero main' ),
		'description'     => __( 'Hero main section' ),
		'render_template' => 'inc/templates/blocks/hero-main.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'testimonial', 'quote' ),
	) );

	acf_register_block( array(
		'name'            => 'about-us',
		'title'           => __( 'Hero main' ),
		'description'     => __( 'Hero main section' ),
		'render_template' => 'inc/templates/blocks/about-us.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'testimonial', 'quote' ),
	) );
}

if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}