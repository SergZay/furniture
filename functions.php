<?php
require_once 'inc/StyleScript.php';
require_once 'inc/CPT.php';

register_nav_menus( array(
	'main_menu'   => __( 'Main menu', 'furniture' ),
) );

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

$projects = new CPT( 'project', array(
	'post_type_name' => 'project',
	'singular'       => 'Project',
	'plural'         => 'Project',
	'slug'           => 'project',
	'show_in_rest'   => true,
	'supports'       => array( 'title', 'editor', 'thumbnail', 'comments' )
) );

$projects->register_taxonomy( 'project_type', array(
	'taxonomy_name' => 'project_type',
	'singular'      => 'Project Type',
	'plural'        => 'Project Type',
	'slug'          => 'project_type'
) );

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
		'title'           => __( 'About us' ),
		'description'     => __( 'About us section' ),
		'render_template' => 'inc/templates/blocks/about-us.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'testimonial', 'quote' ),
	) );

	acf_register_block( array(
		'name'            => 'numbers',
		'title'           => __( 'Numbers' ),
		'description'     => __( 'Numbers section' ),
		'render_template' => 'inc/templates/blocks/numbers.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'testimonial', 'quote' ),
	) );

	acf_register_block( array(
		'name'            => 'features',
		'title'           => __( 'Features' ),
		'description'     => __( 'Features section' ),
		'render_template' => 'inc/templates/blocks/features.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'testimonial', 'quote' ),
	) );

	acf_register_block( array(
		'name'            => 'projects',
		'title'           => __( 'Projects' ),
		'description'     => __( 'Projects section' ),
		'render_template' => 'inc/templates/blocks/projects.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'testimonial', 'quote' ),
	) );

	acf_register_block( array(
		'name'            => 'testimonials',
		'title'           => __( 'Testimonials' ),
		'description'     => __( 'Testimonials section' ),
		'render_template' => 'inc/templates/blocks/testimonials.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'testimonial', 'quote' ),
	) );

	acf_register_block( array(
		'name'            => 'contact-us',
		'title'           => __( 'Contact us' ),
		'description'     => __( 'Contact us section' ),
		'render_template' => 'inc/templates/blocks/contact-us.php',
		'category'        => 'formatting',
		'icon'            => 'admin-comments',
		'keywords'        => array( 'testimonial', 'quote' ),
	) );
}

if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}