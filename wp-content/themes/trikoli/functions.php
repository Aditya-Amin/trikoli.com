<?php
/**
 * Trikoli block theme bootstrap.
 *
 * Registers and enqueues the exact agenio vendor bundle so all patterns render
 * pixel-identical to the HTML site. Each section pattern enqueues its own
 * thin supplement CSS handle (tk-s-*); a wp_footer hook prints those late-
 * enqueued stylesheets so they still reach the browser even though pattern
 * PHP runs after wp_head().
 *
 * @package Trikoli
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TRIKOLI_VERSION', '1.0.0' );

if ( ! function_exists( 'trikoli_setup' ) ) {
	/**
	 * Theme supports (no asset enqueueing here).
	 */
	function trikoli_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
		load_theme_textdomain( 'trikoli', get_template_directory() . '/languages' );
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'trikoli' ),
			'footer'  => __( 'Footer Menu', 'trikoli' ),
			'social'  => __( 'Social Links', 'trikoli' ),
		) );
	}
}
add_action( 'after_setup_theme', 'trikoli_setup' );

// ─────────────────────────────────────────────────────────────────────────────
// Asset registration (priority 5 — before enqueueing at priority 10)
// ─────────────────────────────────────────────────────────────────────────────

/**
 * Register every vendor CSS / JS file with a meaningful named handle.
 * Section pattern PHP files call wp_enqueue_style( 'tk-s-{name}' ) to declare
 * per-section dependencies. The base bundle is always enqueued globally.
 */
function trikoli_register_vendor_assets() {
	$vu  = get_template_directory_uri() . '/assets/vendor/';
	$su  = get_template_directory_uri() . '/assets/css/sections/';
	$ver = TRIKOLI_VERSION;

	// ── Vendor CSS ───────────────────────────────────────────────────────────
	wp_register_style( 'tk-swiper-css',    $vu . 'css/swiper.min_d17b64cd.css',    [], $ver );
	wp_register_style( 'tk-metismenu-css', $vu . 'css/metismenu_7a843d61.css',     [], $ver );
	wp_register_style( 'tk-bootstrap-css', $vu . 'css/bootstrap.min_cc104312.css', [], $ver );
	wp_register_style( 'tk-animate-css',   $vu . 'css/animate_06c8c4ff.css',       [], $ver );
	wp_register_style( 'tk-odometer-css',  $vu . 'css/odometer_aca3c3e9.css',      [], $ver );
	wp_register_style( 'tk-fa-css',        $vu . 'css/fontawesome.min_3ba64440.css', [], $ver );
	wp_register_style( 'tk-theme-css',     $vu . 'css/style_5aceec58.css',
		[ 'tk-bootstrap-css', 'tk-fa-css' ], $ver );
	wp_register_style( 'tk-overrides-css', $vu . 'css/trikoli-overrides.css',
		[ 'tk-theme-css' ], $ver );

	// ── Per-section supplement CSS (WordPress-specific fixes per section) ────
	// Dependencies cascade into the base bundle so enqueueing one handle is
	// sufficient to pull in everything that section needs.
	wp_register_style( 'tk-s-header',       $su . 'header.css',
		[ 'tk-metismenu-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-footer',       $su . 'footer.css',
		[ 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-breadcrumb',   $su . 'breadcrumb.css',
		[ 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-blog',         $su . 'blog.css',
		[ 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-hero',         $su . 'hero.css',
		[ 'tk-animate-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-brand',        $su . 'brand.css',
		[ 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-about',        $su . 'about.css',
		[ 'tk-odometer-css', 'tk-animate-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-services',     $su . 'services.css',
		[ 'tk-animate-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-projects',     $su . 'projects.css',
		[ 'tk-swiper-css', 'tk-animate-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-process',      $su . 'process.css',
		[ 'tk-animate-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-marquee',      $su . 'marquee.css',
		[ 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-team',         $su . 'team.css',
		[ 'tk-animate-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-awards',       $su . 'awards.css',
		[ 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-testimonials', $su . 'testimonials.css',
		[ 'tk-swiper-css', 'tk-animate-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-pricing',      $su . 'pricing.css',
		[ 'tk-animate-css', 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-faq',          $su . 'faq.css',
		[ 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-cta',          $su . 'cta.css',
		[ 'tk-overrides-css' ], $ver );
	wp_register_style( 'tk-s-contact',      $su . 'contact.css',
		[ 'tk-overrides-css' ], $ver );

	// ── Vendor JS (named handles, all loaded in footer) ──────────────────────
	wp_register_script( 'tk-jquery',        $vu . 'js/jquery.min_4b283d96.js',     [], $ver, true );
	wp_register_script( 'tk-bootstrap-js',  $vu . 'js/bootstrap.min_f6292ebc.js',  [ 'tk-jquery' ], $ver, true );
	wp_register_script( 'tk-metismenu-js',  $vu . 'js/metismenu_f70da6b3.js',      [ 'tk-jquery' ], $ver, true );
	wp_register_script( 'tk-jqueryui',      $vu . 'js/jqueryui_22f08c96.js',       [ 'tk-jquery' ], $ver, true );
	wp_register_script( 'tk-waypoint',      $vu . 'js/waypoint_20b16684.js',       [ 'tk-jquery' ], $ver, true );
	wp_register_script( 'tk-swiper-js',     $vu . 'js/swiper_0fd764b9.js',         [], $ver, true );
	wp_register_script( 'tk-gsap',          $vu . 'js/gsap.min_49b63498.js',       [], $ver, true );
	wp_register_script( 'tk-scrolltrigger', $vu . 'js/scrolltigger_650c48f2.js',   [ 'tk-gsap' ], $ver, true );
	wp_register_script( 'tk-smoothscroll',  $vu . 'js/smoothscroll_478733d1.js',   [], $ver, true );
	wp_register_script( 'tk-split-text',    $vu . 'js/split-text_118ce412.js',     [ 'tk-gsap' ], $ver, true );
	wp_register_script( 'tk-split-type',    $vu . 'js/split-type_582e99fc.js',     [], $ver, true );
	wp_register_script( 'tk-wow',           $vu . 'js/wow_bf249dbd.js',            [], $ver, true );
	wp_register_script( 'tk-text-plugin',   $vu . 'js/text-plugin_08f0c503.js',    [ 'tk-gsap' ], $ver, true );
	wp_register_script( 'tk-odometer-js',   $vu . 'js/odometer_0e91f571.js',       [], $ver, true );
	wp_register_script( 'tk-contact-form',  $vu . 'js/contact-form_b8774456.js',   [ 'tk-jquery' ], $ver, true );
	wp_register_script( 'tk-main',          $vu . 'js/main_6fdff11f.js', array(
		'tk-jquery', 'tk-bootstrap-js', 'tk-metismenu-js', 'tk-jqueryui',
		'tk-waypoint', 'tk-swiper-js', 'tk-gsap', 'tk-scrolltrigger',
		'tk-smoothscroll', 'tk-split-text', 'tk-split-type', 'tk-wow',
		'tk-text-plugin', 'tk-odometer-js', 'tk-contact-form',
	), $ver, true );
}
add_action( 'wp_enqueue_scripts', 'trikoli_register_vendor_assets', 5 );

// ─────────────────────────────────────────────────────────────────────────────
// Global base bundle (always loaded on every page)
// ─────────────────────────────────────────────────────────────────────────────

/**
 * Enqueue the full vendor CSS + JS bundle globally.
 *
 * The complete CSS set prevents FOUC: all section styles, animations and
 * counters render before JS fires. main.js depends on every library, so the
 * entire JS chain must load too.
 *
 * Per-section tk-s-* supplement files are enqueued separately from each
 * pattern PHP file and flushed to the browser via trikoli_print_late_styles().
 */
function trikoli_enqueue_base_bundle() {
	// Vendor CSS — full set in dependency order.
	wp_enqueue_style( 'tk-swiper-css' );
	wp_enqueue_style( 'tk-metismenu-css' );
	wp_enqueue_style( 'tk-animate-css' );
	wp_enqueue_style( 'tk-odometer-css' );
	wp_enqueue_style( 'tk-overrides-css' ); // cascades: bootstrap → fa → theme → overrides
	// Header and footer are on every page — always enqueue their section CSS.
	wp_enqueue_style( 'tk-s-header' );
	wp_enqueue_style( 'tk-s-footer' );
	// Breadcrumb banner appears on every non-front page; the selector is
	// scoped to .wpr-banner-area.breadcrumb so it is inert elsewhere.
	wp_enqueue_style( 'tk-s-breadcrumb' );
	// Blog styling — scoped to .tk-blog / .wp-block-post*, inert elsewhere.
	if ( is_home() || is_archive() || is_search() || is_singular() ) {
		wp_enqueue_style( 'tk-s-blog' );
	}

	// Theme stylesheet (last, after vendor).
	wp_enqueue_style( 'trikoli-style', get_stylesheet_uri(), [ 'tk-overrides-css' ], TRIKOLI_VERSION );

	// All vendor JS — main.js depends on every library.
	wp_enqueue_script( 'tk-main' );
}
add_action( 'wp_enqueue_scripts', 'trikoli_enqueue_base_bundle', 10 );

// ─────────────────────────────────────────────────────────────────────────────
// Late-style flush (section supplement CSS)
// ─────────────────────────────────────────────────────────────────────────────

/**
 * Print any styles queued after wp_head() into wp_footer.
 *
 * Pattern PHP files run during get_the_block_template_html(), which fires
 * AFTER wp_head(). Styles they enqueue (tk-s-* per-section files) are added
 * to the queue too late for wp_head(), so we flush them here at footer
 * priority 1 — before any other footer output. The base bundle dependencies
 * (bootstrap, animate, etc.) are already in $wp_styles->done so they are not
 * double-printed; only the thin section supplement files get output.
 */
function trikoli_print_late_styles() {
	global $wp_styles;
	if ( empty( $wp_styles ) || ! ( $wp_styles instanceof WP_Styles ) ) {
		return;
	}
	$printed  = array_keys( $wp_styles->done );
	$to_print = array_diff( $wp_styles->queue, $printed );
	if ( ! empty( $to_print ) ) {
		wp_print_styles( $to_print );
	}
}
add_action( 'wp_footer', 'trikoli_print_late_styles', 1 );

// ─────────────────────────────────────────────────────────────────────────────
// Block editor styles
// ─────────────────────────────────────────────────────────────────────────────

/**
 * Load the complete vendor CSS inside the block editor canvas so patterns
 * and blocks look identical while editing. editor-reveal.css forces WOW/GSAP
 * elements visible and hides the preloader in the editor.
 */
function trikoli_editor_styles() {
	$files = array(
		'assets/vendor/css/swiper.min_d17b64cd.css',
		'assets/vendor/css/metismenu_7a843d61.css',
		'assets/vendor/css/bootstrap.min_cc104312.css',
		'assets/vendor/css/animate_06c8c4ff.css',
		'assets/vendor/css/odometer_aca3c3e9.css',
		'assets/vendor/css/fontawesome.min_3ba64440.css',
		'assets/vendor/css/style_5aceec58.css',
		'assets/vendor/css/trikoli-overrides.css',
		'assets/css/sections/header.css',
		'assets/css/sections/footer.css',
		'assets/css/sections/breadcrumb.css',
		'assets/css/sections/blog.css',
		'assets/css/editor-reveal.css',
	);
	foreach ( $files as $f ) {
		add_editor_style( $f );
	}
}
add_action( 'after_setup_theme', 'trikoli_editor_styles' );

// ─────────────────────────────────────────────────────────────────────────────
// Pattern categories
// ─────────────────────────────────────────────────────────────────────────────

/**
 * Register top-level Trikoli pattern categories (theme-owned).
 * The core plugin registers the vertical categories (trikoli-sections, etc.).
 */
function trikoli_register_pattern_categories() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'trikoli',
			array( 'label' => __( 'Trikoli', 'trikoli' ) )
		);
		register_block_pattern_category(
			'trikoli-pages',
			array( 'label' => __( 'Trikoli: Pages', 'trikoli' ) )
		);
	}
}
add_action( 'init', 'trikoli_register_pattern_categories' );
