<?php
function creative_enqueue_scripts() {
	require_once get_theme_file_path( 'wptt-webfont-loader.php' );
	wp_enqueue_style( "creative-font-awesome-css-one", get_template_directory_uri() . "/assets/fontawesome/css/all.min.css" );
	wp_enqueue_style( "creative-font-awesome-css-two", get_template_directory_uri() . "/assets/fontawesome/css/fontawesome.min.css" );
	wp_enqueue_style( "creative-google-font", wptt_get_webfont_url( 'http//fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap' ), array(), time() );
	wp_enqueue_style( "creative-style-css", get_template_directory_uri() . "/assets/css/style.css" );
	wp_enqueue_style( "creative-home-css", get_template_directory_uri() . "/assets/css/home.css" );
	wp_enqueue_style( 'creative-style', get_stylesheet_uri() );

	wp_enqueue_script( "creative_main_js", get_template_directory_uri() . "/assets/js/main.js", null, time(), true );

	$image_url = get_template_directory_uri();
	wp_localize_script( 'creative_main_js', 'image', array( 'image_url' => $image_url ) );
}

add_action( "wp_enqueue_scripts", "creative_enqueue_scripts" );

function creative_theme_setup() {
	load_theme_textdomain( 'creative', get_template_directory() . '/languages' );
	add_theme_support( "automatic-feed-links" );
	add_theme_support( "title-tag" );
	add_theme_support( "post-thumbnails" );

	register_nav_menu( "navmenu", _( "Nav Menu", "creative" ) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	) );

	add_theme_support( "customize-selective-refresh-widgets" );

	add_theme_support( "custom-logo", array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}

add_action( "after_setup_theme", "creative_theme_setup" );

function creative_theme_custom_post() {
	register_post_type( 'hero', array(
		'labels'   => array(
			'name' => __( 'hero', 'creative' ), // Change to a plural label
		),
		'supports' => array( 'title', 'thumbnail', 'page-attributes', 'custom-fields', 'editor' ),
		'public'   => false,
		'show_ui'  => true,
	) );
}

add_action( 'init', 'creative_theme_custom_post' );































