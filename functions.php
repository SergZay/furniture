<?php


add_theme_support( 'menus' );
add_theme_support( 'title-tag' );

// register blocks for Gutenberg with acf
function register_acf_block_types() {

	$acf_blocks = array(
		'hero' => [ 'block-contact' ],
	);

	foreach ( $acf_blocks as $key => $block ) {
		foreach ( $block as $slug ) {
			acf_register_block_type( array(
				'name'            => "{$key}-{$slug}",
				'title'           => __( "{$key} {$slug} section" ),
				'description'     => __( "{$slug} section for {$key} page" ),
				'render_template' => "inc/templates/blocks/{$key}/{$key}-{$slug}.php",
				'category'        => "formatting",
				'icon'            => "admin-comments",
				'keywords'        => array( "{$slug}, {$key}" ),
				'example'         => array(),
			) );
		}
	}
}

if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}