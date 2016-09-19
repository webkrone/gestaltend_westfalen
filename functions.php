<?php
/**
 * westfalen functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package westfalen
 */

if ( ! function_exists( 'westfalen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function westfalen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on westfalen, use a find and replace
	 * to change 'westfalen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'westfalen', get_template_directory() . '/languages' );

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
   * Enable support for custom logo.
   *
   */

  add_theme_support( 'custom-logo');



	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'westfalen' ),
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

  /*
   * Enable support for Post Formats.
   *
   * See: https://codex.wordpress.org/Post_Formats
   */
  add_theme_support( 'post-formats', array(
    'video',
  ) );



	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'westfalen_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'westfalen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function westfalen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'westfalen_content_width', 640 );
}
add_action( 'after_setup_theme', 'westfalen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function westfalen_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'westfalen' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'westfalen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'westfalen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function westfalen_scripts() {
	wp_enqueue_style( 'westfalen-style', get_stylesheet_uri() );

	wp_enqueue_script( 'westfalen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'westfalen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'westfalen_scripts' );


function theme_settings_page(){

    ?>
      <div class="wrap">
      <h1>Theme Panel</h1>
      <form method="post" action="options.php">
          <?php
              settings_fields("section");
              do_settings_sections("theme-options");      
              submit_button(); 
          ?>          
      </form>
    </div>
  <?php


}

function add_theme_menu_item()
{
  add_menu_page("Theme Options", "Theme Options", "manage_options", "theme-options", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");


function westfalen_unregister_categories() {
    register_taxonomy( 'category', array() );
}
add_action( 'init', 'westfalen_unregister_categories' );


/* Add bootstrap support to the Wordpress theme*/
 
function theme_add_bootstrap() {
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.1.0', true );  
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
  wp_enqueue_script( 'westfalen-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );

}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

/* Function to Enable Post Order */

function en_westfalen_posts_order() 
{
    add_post_type_support( 'post', 'page-attributes' );
}

add_action( 'admin_init', 'en_westfalen_posts_order' );





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/westfalen-post-types.php';


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
