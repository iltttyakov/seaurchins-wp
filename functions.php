<?php
/**
 * SeaUrchins functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SeaUrchins
 */

if ( ! function_exists( 'seaurchins_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function seaurchins_setup() {
        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => 'Main menu',
			'footer-menu' => 'Footer menu',
		) );

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
	}
endif;
add_action( 'after_setup_theme', 'seaurchins_setup' );

/**
 * Enqueue scripts and styles.
 */
function seaurchins_scripts() {
	wp_enqueue_style( 'seaurchins-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.min.css');

    if (!is_admin()) {
        wp_deregister_script('jquery');
    }

    wp_enqueue_script( 'custom-jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script( 'jquery-nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js');
    wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/assets/js/slick.min.js');
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js');
    wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/assets/js/main.js');
}
add_action( 'wp_enqueue_scripts', 'seaurchins_scripts' );

/**
 * Register custom post types
 */
require('inc/post-types/teacher.php');
require('inc/post-types/room.php');

/**
 * PDF generation
 */
require('inc/fpdf/fpdf.php');
require('inc/form-pdf.php');

/**
 * Custom pagination
 */
require('inc/pagination.php');

/**
 * Add options ACF page
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Content settings',
        'menu_title'	=> 'Content settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Contacts',
        'menu_title'	=> 'Contacts',
        'slug'          => 'contacts',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Information for Families',
        'menu_title'	=> 'Information for Families',
        'slug'          => 'info',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'How children learn',
        'menu_title'	=> 'How children learn',
        'slug'          => 'slider',
        'parent_slug'	=> 'theme-general-settings',
    ));
}
