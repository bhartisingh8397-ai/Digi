<?php
/**
 * Digi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Digi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function digi_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and WordPress will
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Header Menu', 'digi' ),
			'menu-footer' => esc_html__( 'Footer Menu', 'digi' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'digi_setup' );

/**
 * Enqueue scripts and styles.
 */
function digi_scripts() {
	// Enqueue Google Fonts
	wp_enqueue_style( 'digi-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Syne:wght@700;800&display=swap', array(), null );

	// Enqueue main stylesheet.
	wp_enqueue_style( 'digi-style', get_stylesheet_uri(), array( 'digi-google-fonts' ), '1.0.0' );

	// Enqueue custom JavaScript
	wp_enqueue_script( 'digi-main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'digi_scripts' );

/**
 * Helper to display fallback navigation if menu is not set.
 */
function digi_header_menu_fallback() {
	echo '<ul class="fallback-menu">';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/about-us/' ) ) . '">About Us</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/our-services/' ) ) . '">Services</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/testimonials/' ) ) . '">Testimonials</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/blog-of-digigyapan/' ) ) . '">Blog</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/free-tools/' ) ) . '">Free Tools</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">Contact</a></li>';
	echo '</ul>';
}
