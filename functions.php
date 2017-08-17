<?php

define('THEME_URI', get_template_directory_uri());

add_action('init', 'include_scripts_and_styles');

add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_action('init', 'registerMenu');

function include_scripts_and_styles()
{
	wp_enqueue_script('main-script', THEME_URI . '/js/script.js', array(
		'jquery'
	), false, true);

	wp_register_style('main-style', THEME_URI.'/css/style.css' );

}

function registerMenu() {
    $args = array('header_menu' => __('Главное меню'));
    register_nav_menus($args);
}

function getThumbSrc($id)
{
	return wp_get_attachment_url( get_post_thumbnail_id($id) );
}

function getTheDate($id) {

    $date = get_the_date('j n Y', $id);

    $date = explode(' ', $date);

    $day = $date[0];
    $month = $date[1];
    $year = $date[2];

    $months = array(
        'Января',
        'Февраля',
        'Марта',
        'Апреля',
        'Мая',
        'Июня',
        'Июля',
        'Августа',
        'Сентября',
        'Октября',
        'Ноября',
        'Декабря'
    );

    $dayFormatted = '<span class="post_date--large">' . $day . '</span>';

    return $dayFormatted . ' ' . $months[$month-1] . ' <span class="post_date--large">' . $year . '</span>';
}