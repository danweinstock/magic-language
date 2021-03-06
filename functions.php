<?php
/**
 * magic_language functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package magic_language
 */

if ( ! function_exists( 'magic_language_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function magic_language_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on magic_language, use a find and replace
	 * to change 'magic_language' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'magic_language', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'magic_language' ),
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

	/*  Brandon - adding roles for login section  */

	$result = add_role(
	    'Pending',
	    __( 'Pending' ),
	    array(
	        'read'         => true,  // true allows this capability
	        'edit_posts'   => false,
	        'delete_posts' => false, // Use false to explicitly deny
	    )
	);

	$result = add_role(
	    'Teacher',
	    __( 'Teacher' ),
	    array(
	        'read'         => true,  // true allows this capability
	        'edit_posts'   => false,
	        'delete_posts' => false, // Use false to explicitly deny
	    )

	);

	$result = add_role(
	    'Parent',
	    __( 'Parent' ),
	    array(
	        'read'         => true,  // true allows this capability
	        'edit_posts'   => false,
	        'delete_posts' => false, // Use false to explicitly deny
	    )
	);

	/*  Brandon - this function will remove admin bar (not working) */

	add_filter('show_admin_bar', '__return_false');


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'magic_language_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'magic_language_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */


function magic_language_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'magic_language_content_width', 640 );
}
add_action( 'after_setup_theme', 'magic_language_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function magic_language_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'magic_language' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'magic_language' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-2', 'magic_language' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'magic_language' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="blue-text sidebar2-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-3', 'magic_language' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'magic_language' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="blue-text sidebar3-title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'magic_language_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function magic_language_scripts() {
	//wp_enqueue_script ('jquery');
	wp_enqueue_style ('foundation',get_bloginfo("stylesheet_directory").'/foundation-6.2.3/css/foundation.css');
wp_enqueue_style( 'magic_language-style', get_stylesheet_uri() );



	wp_enqueue_script( 'magic_language-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'magic_language-plugin', get_template_directory_uri() . '/js/plugin.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'magic_language-custom-scripts', get_template_directory_uri(). '/js/site.js');

	wp_enqueue_script( 'magic_language-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script('foundation-init',get_bloginfo("stylesheet_directory").'/foundation-6.2.3/js/app.js');
	wp_enqueue_script('foundation-min-js',get_bloginfo("stylesheet_directory").'/foundation-6.2.3/js/vendor/foundation.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'magic_language_scripts' );


function my_excerpt_length($length) {
return 20; // Or whatever you want the length to be.
}
add_filter("excerpt_length","my_excerpt_length");
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/form-parts/form-register.php';


add_image_size('front-blog', 567, 320, true);

function get_custom_title($ID){
	if (is_home()){
		$our_title = get_the_title( get_option('page_for_posts', true), $ID);
		echo $our_title;
	}
	elseif (CFS()->get('custom_banner_title') == ""){
		echo get_the_title($ID);

	}
	else{
		echo CFS()->get('custom_banner_title');
	}
}

function template_chooser($template)   {
 	global $wp_query;
 	$post_type = get_query_var('post_type');
 	if( $wp_query->is_search && $post_type == 'resources' ) {
   		return locate_template('resources-search.php');
 	}
 	return $template;
}
add_filter('template_include', 'template_chooser');
