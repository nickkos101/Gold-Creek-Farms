<?php 

include 'autocracy/autocracy.php';

function gcf_scripts() {
	//Stylesheets
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'normalize' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style' );
		wp_register_style( 'slick', get_template_directory_uri() . '/js/slick/slick.css' );
	wp_enqueue_style( 'slick' );
	wp_register_style( 'theme', get_template_directory_uri() . '/css/theme.css' );
	wp_enqueue_style( 'theme' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'responsive' );
	wp_register_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'font-awesome' );

	//Scripts
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/js/function.js', array('jquery'), '1.0.0', true );

}

add_theme_support('post-thumbnails');

add_action( 'wp_enqueue_scripts', 'gcf_scripts' );

function gcf_title( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | '. get_bloginfo( 'name' ). ' | '. get_bloginfo( 'description' );
	}
	return $title;
}
add_filter( 'wp_title', 'gcf_title' );


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}


add_theme_support( 'menus' );
register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	'Footer_Nav' => 'Footer Navigation Area',
	'Sub_Nav' => 'Sub Navigation Area',
	));


function gcf_create_post_type() {
	register_post_type('slider', array(
		'labels' => array(
			'name' => __('Slider'),
			'singular_name' => __('slide')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'slides'),
		'supports' => array('title','thumbnail')
		)
	);
}
add_action('init', 'gcf_create_post_type');

if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();	
}

?>