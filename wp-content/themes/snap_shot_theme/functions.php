<?php

function add_style_css() {
	wp_register_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'maincss' );
}
add_action( 'wp_enqueue_scripts', 'add_style_css' );

function add_style_js() {

	wp_register_script( 'poptrox', get_template_directory_uri() . '/assets/js/jquery.poptrox.min.js', 'jquery', TRUE );
	wp_enqueue_script( 'poptrox' );
	wp_register_script( 'scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', 'jquery', TRUE );
	wp_enqueue_script( 'scrolly' );
	wp_register_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', 'jquery', TRUE );
	wp_enqueue_script( 'skel');
	wp_register_script( 'util', get_template_directory_uri() . '/assets/js/util.js', 'jquery', TRUE );
	wp_enqueue_script( 'util');
	wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js', 'jquery', TRUE );
	wp_enqueue_script( 'main');
}
add_action( 'wp_enqueue_scripts', 'add_style_js' );
// Init 
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
//feature img
add_theme_support( 'post-thumbnails' );
add_theme_support( 'category-thumbnails' );
add_theme_support( 'html5' );
//hide admin bar
show_admin_bar( false );
//css wp admin
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
?>