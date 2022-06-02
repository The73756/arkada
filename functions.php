<?php

add_action( 'wp_enqueue_scripts', 'arkada_scripts' );

function arkada_scripts() {
  //подключаем стили
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array('main') );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array('main') );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array('main') );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array('main') );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array('main') );

  //переподключаем JQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
	wp_enqueue_script( 'jquery' );

  //подключаем скрипты
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', 'http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js', array('jquery'), '1.0.0', true );
	
}

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo', [
  'height'      => 45,
  'width'       => 166,
  'flex-width'  => false,
  'flex-height' => false,
  'header-text' => '',
] );

function arkada_thumbnails() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 270, 200 );
}

add_image_size( 'reviews-logo', 40, 40, true );

add_action( 'after_setup_theme', 'arkada_thumbnails' );

//регистрируем несколько меню
function arkada_menus() {
  //собираем несколько зон (областей) меню
	$locations = array(
		'header'  => __( 'Header Menu', 'arkada' ),
	);
  //регистрируем эти области
	register_nav_menus( $locations );
};
// хук
add_action( 'init', 'arkada_menus' );