<?php
/**
 * Numero functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Numero
 */

if ( ! function_exists( 'numero_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function numero_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Numero, use a find and replace
		 * to change 'numero' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'numero', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

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
			'menu-1' => esc_html__( 'Primary', 'numero' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'numero_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'numero_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function numero_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'numero_content_width', 640 );
}
add_action( 'after_setup_theme', 'numero_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function numero_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'numero' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'numero' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'numero_widgets_init' );
/**
 * Enqueue  styles.
 */
function numero_styles() {
    
    wp_enqueue_style( 'numero-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css');
    wp_enqueue_style( 'numero-font-awesome',get_template_directory_uri().'/assets/css/font-awesome.css');
    wp_enqueue_style( 'numero-owl-carousel',get_template_directory_uri().'/assets/css/owl.carousel.css');
    wp_enqueue_style( 'numero-owl-theme',get_template_directory_uri().'/assets/css/owl.theme.css');
    wp_enqueue_style( 'numero-animate',get_template_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style( 'numero-googleapis', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900|Lato:300,400|Crimson+Text:400,400i,600');    

    }
add_action( 'wp_enqueue_scripts', 'numero_styles' );

/**
 * Enqueue scripts .
 */
function numero_scripts() {
	wp_enqueue_style( 'numero-style', get_stylesheet_uri() );

	wp_enqueue_script( 'numero-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'numero-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'numero-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '20151215', true );

	wp_enqueue_script( 'numero-SmoothScroll-js', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array(), '20151215', true );

	wp_enqueue_script( 'numero-jquery-isotope-js', get_template_directory_uri() . '/assets/js/jquery.isotope.js', array(), '20151215', true );

	wp_enqueue_script( 'numero-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), '20151215', true );

	wp_enqueue_script( 'numero-jquery-waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), '20151215', true );
    
	wp_enqueue_script( 'numero-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'numero-wow-min-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true );

	wp_add_inline_script('numero-wow-min-js','new WOW().init();');

	wp_add_inline_script('numero-main-js','jQuery(document).ready(function( $ ) {
        $(".counter").counterUp({
            delay: 10,
            time: 1000
        });
    });');
}
add_action( 'wp_enqueue_scripts', 'numero_scripts' );

add_image_size( 'numero_our_work', 262, 163,  array( 'top', 'center' ) );
add_image_size( 'choose-medium', 840, 527,  array( 'top', 'center' ) );
add_image_size( 'numero-blog', 262, 163,  array( 'top', 'center' ) );

add_image_size( 'numero_portfolio', 555, 347,  array( 'top', 'center' ) );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
