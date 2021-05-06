<?php

add_action( 'wp_enqueue_scripts', 'pr_parent_styles' );
function pr_parent_styles() {
    wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri().'/slick.css' );
    wp_enqueue_style( 'magnific-popup-style', get_stylesheet_directory_uri().'/magnific-popup.css' );
 	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Header & Footer Logo',
		'menu_title'	=> 'Header & Footer Logo',
		'menu_slug' 	=> 'theme-header-footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Social Menu',
		'menu_title'	=> 'Social Menu',
		'menu_slug' 	=> 'theme-social-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Announcement Bar',
		'menu_title'	=> 'Announcement Bar',
		'menu_slug' 	=> 'theme-banner-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Footer Options',
		'menu_title'	=> 'Footer Options',
		'menu_slug' 	=> 'theme-footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
