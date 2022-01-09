<?php
class StyleScript {
	function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'st_scripts' ) );
	}

	function st_scripts() {

		wp_deregister_script( 'jquery' );
//		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.1.min.js', array(), null, true);
		wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true );

//		wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), null, true );

//		wp_enqueue_script( 'select2', get_template_directory_uri() . '/', array( 'jquery' ) );

//		wp_enqueue_style( 'style-fonts', 'https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900,900i&display=swap' );
//		wp_enqueue_style( 'style-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );

//		wp_enqueue_style('select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css' );
//		wp_enqueue_script('select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js', array('jquery') );

		wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/styles/main.css' );
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
//		wp_enqueue_script( 'script-swiper', 'https://unpkg.com/swiper/swiper-bundle.js', array(), '1.0.0', true );
//		if ( is_page_template( 'page-services.php' ) ):
//			wp_enqueue_script( 'script-scrollify', 'https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js', array( 'jquery' ), '1.0.0', true );
//		endif;
//		wp_enqueue_script( 'woocommerce' );
//		wp_enqueue_script( 'wc-add-to-cart' );

//		wp_enqueue_script('wc-add-to-cart-variation');
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/scripts/main.js', array( 'jquery' ), '1.0.0', true );
	}
}

new StyleScript();