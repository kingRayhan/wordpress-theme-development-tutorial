<?php

add_action('wp_enqueue_scripts','fashion_blog_scripts');
function fashion_blog_scripts(){
/**
 * Stylesheets
 */

wp_enqueue_style('font-awesome' , get_template_directory_uri() . '/css/font-awesome.min.css' , array() , '4.6.3' , 'all');
wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css' , array() , '4.6.3' , 'all');
wp_enqueue_style('theme-main' , get_template_directory_uri() . '/css/style.css' , array() , '4.6.3' , 'all');

wp_enqueue_style('flexslider' , get_template_directory_uri() . '/css/flexslider.css' , array() , '4.6.3' , 'all');
wp_enqueue_style('skdslider' , get_template_directory_uri() . '/css/skdslider.css' , array() , '4.6.3' , 'all');



wp_enqueue_style('google-fonts-1' , '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
wp_enqueue_style('google-fonts-2' , '//fonts.googleapis.com/css?family=Open+Sans');


/**
 * js
 */


wp_enqueue_script('theme-main-js' , get_template_directory_uri() . '/js/main.js' , array('jquery') , '1.0' , false );
wp_enqueue_script('flexslider-js' , get_template_directory_uri() . '/js/jquery.flexslider.js' , array('jquery') , '1.0' , false );
wp_enqueue_script('skdslider-js' , get_template_directory_uri() . '/js/skdslider.min.js' , array('jquery') , '1.0' , false );
wp_enqueue_script('move-top-js' , get_template_directory_uri() . '/js/move-top.js' , array('jquery') , '1.0' , false );
wp_enqueue_script('easing-js' , get_template_directory_uri() . '/js/easing.js' , array('jquery') , '1.1.2' , false );
wp_enqueue_script('bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.js' , array('jquery') , '3.3.7' , true );
}






add_action('after_setup_theme', 'fashionBlog_theme_setup');
function fashionBlog_theme_setup(){


	add_theme_support( 'title-tag' );


	add_theme_support('post-thumbnails');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	
}