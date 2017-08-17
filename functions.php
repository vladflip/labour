<?php

define('THEME_URI', get_template_directory_uri());

add_action('init', 'include_scripts_and_styles');

add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

function include_scripts_and_styles()
{
	wp_enqueue_script('main-script', THEME_URI . '/js/script.js', array(
		'jquery'
	), false, true);

	wp_register_style('main-style', THEME_URI.'/css/style.css' );

}

function getThumbSrc($id)
{
	return wp_get_attachment_url( get_post_thumbnail_id($id) );
}