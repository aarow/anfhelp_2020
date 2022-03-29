<?php
/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */
add_action( 'after_setup_theme', function() {
	load_theme_textdomain( 'bathe', get_theme_file_uri( 'languages' ) );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	add_theme_support( 'custom-background', apply_filters( 'bathe_custom_background_args', array(
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
		'height'      => 200,
		'width'       => 50,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bathe' ),
	) );
} );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action( 'after_setup_theme', function() {
	$GLOBALS['content_width'] = apply_filters( 'bathe_content_width', 960 );
}, 0 );

/**
 * Register widget area.
 */
add_action( 'widgets_init', function() {
	register_sidebar( array(
		'name'          => __( 'Footer Left Column', 'bathe' ),
		'id'            => 'footer-left-column',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Middle Column', 'bathe' ),
		'id'            => 'footer-middle-column',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Right Column', 'bathe' ),
		'id'            => 'footer-right-column',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
} );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'bathe-main', get_theme_file_uri( 'dist/css/style.css' ) );

	wp_enqueue_script( 'bathe-bundle', get_theme_file_uri( 'dist/js/main.bundle.js' ), array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );


add_theme_support( 'editor-styles');
function bathe_add_editor_styles() {
    add_editor_style( 'style-editor.css' );
}
add_action( 'admin_init', 'bathe_add_editor_styles' );