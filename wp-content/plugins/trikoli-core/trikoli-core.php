<?php
/**
 * Plugin Name:       Trikoli Core
 * Plugin URI:        https://trikoli.com
 * Description:        Core Gutenberg blocks, patterns and section/header/footer widgets for the Trikoli ecosystem. A namespaced (trikoli/*), reusable and scalable block library for building sites by drag & drop — across business, WooCommerce, magazine and newspaper themes.
 * Version:           1.0.0
 * Requires at least: 6.5
 * Requires PHP:      7.4
 * Author:            Trikoli
 * Author URI:        https://trikoli.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       trikoli
 *
 * @package TrikoliCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TRIKOLI_CORE_VERSION', '1.0.0' );
define( 'TRIKOLI_CORE_FILE', __FILE__ );
define( 'TRIKOLI_CORE_PATH', plugin_dir_path( __FILE__ ) );
define( 'TRIKOLI_CORE_URL', plugin_dir_url( __FILE__ ) );
define( 'TRIKOLI_CORE_NS', 'trikoli' ); // Single source of truth for the namespace.

require_once TRIKOLI_CORE_PATH . 'includes/class-trikoli-blocks.php';
require_once TRIKOLI_CORE_PATH . 'includes/class-trikoli-patterns.php';
require_once TRIKOLI_CORE_PATH . 'includes/class-trikoli-assets.php';
require_once TRIKOLI_CORE_PATH . 'includes/class-trikoli-contact.php';

/**
 * Boot the plugin.
 */
function trikoli_core_init() {
	Trikoli_Blocks::instance()->register();
	Trikoli_Patterns::instance()->register();
	Trikoli_Assets::instance()->register();
}
add_action( 'init', 'trikoli_core_init' );

// Contact form handler must hook on admin-post (registered early).
Trikoli_Contact::instance()->register();

/**
 * Register a dedicated block category so all Trikoli blocks group together
 * in the inserter (like an Elementor widget panel).
 */
function trikoli_core_block_category( $categories ) {
	$custom = array(
		array(
			'slug'  => 'trikoli',
			'title' => __( 'Trikoli', 'trikoli' ),
			'icon'  => 'screenoptions',
		),
		array(
			'slug'  => 'trikoli-sections',
			'title' => __( 'Trikoli: Sections', 'trikoli' ),
			'icon'  => 'layout',
		),
	);
	return array_merge( $custom, $categories );
}
add_filter( 'block_categories_all', 'trikoli_core_block_category', 5 );
