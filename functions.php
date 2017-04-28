<?php
/**
 * Inside Voice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inside_Voice
 */

if ( ! function_exists( 'inside_voice_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function inside_voice_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Inside Voice, use a find and replace
	 * to change 'inside-voice' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'inside-voice', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'inside-voice' ),
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
	add_theme_support( 'custom-background', apply_filters( 'inside_voice_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'inside_voice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inside_voice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inside_voice_content_width', 640 );
}
add_action( 'after_setup_theme', 'inside_voice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inside_voice_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inside-voice' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'inside-voice' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'inside_voice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inside_voice_scripts() {
	wp_enqueue_style( 'inside-voice-style', get_stylesheet_uri() );

	wp_enqueue_script( 'inside-voice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'inside-voice-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inside_voice_scripts' );

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

add_filter('show_admin_bar', '__return_false');

function get_ivoice_username() {
	return bp_core_get_username( get_current_user_id() );
}

function get_ivoice_member_url( $target = 'root') {
	switch ($target) {
		case 'root':
			return '/members/'. get_ivoice_username();
			break;
		case 'notifications':
			return '/members/'. get_ivoice_username() .'/notifications/';
			break;
		case 'messages':
			return '/members/'. get_ivoice_username() .'/messages/';
			break;
		case 'activity':
			return '/members/'. get_ivoice_username() .'/activity/';
			break;
		case 'news':
			return '/';
			break;
		case 'connections':
			return '/members/'. get_ivoice_username() .'/friends/';
			break;
		case 'friends':
			return '/members/'. get_ivoice_username() .'/friends/';
			break;
		case 'groups':
			return '/members/'. get_ivoice_username() .'/groups/';
			break;
		case 'forums':
			return '/members/'. get_ivoice_username() .'/forums/';
			break;
		case 'places':
			return '/members/'. get_ivoice_username() .'/blogs/';
			break;
		case 'blogs':
			return '/members/'. get_ivoice_username() .'/blogs/';
			break;
		case 'profile':
			return '/members/'. get_ivoice_username() .'/profile/';
			break;
		case 'edit':
			return '/members/'. get_ivoice_username() .'/profile/edit/';
			break;
		default:
			return '/members/'. get_ivoice_username();
			break;
	}
}

function get_ivoice_member_name() {
	return 'My Name';
}


