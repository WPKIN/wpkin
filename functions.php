<?php

function pl_assets() {
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap' );
	wp_enqueue_style( 'google-cartoon-font', '//fonts.googleapis.com/css2?family=Cookie&display=swap' );

	wp_enqueue_style( 'bootstrap_css', get_theme_file_uri( './assets/css/bootstrap.min.css' ), null, microtime() );
	wp_enqueue_style( 'wt_main_style_css', get_theme_file_uri( './assets/css/style.css' ), null, microtime() );
	wp_enqueue_style( 'wt_main_styles', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap.bundle.min_js', get_theme_file_uri( './assets/js/bootstrap.bundle.min.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wt_main_js', get_theme_file_uri( './assets/js/script.js' ), array( 'jquery' ), '1.0', true );

	wp_localize_script(
		'wt_main_js',
		'wt_data',
		array(
			'root_url'       => get_site_url(),
			'root_directory' => get_theme_file_uri(),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'pl_assets' );

function wpte_theme_setup() {
	global $woocommerce;

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'wpte_theme_setup' );


