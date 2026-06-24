<?php
/**
 * Auto-registers every compiled block found in /build/blocks.
 *
 * Adding a new block requires zero PHP changes: create src/blocks/<name>/,
 * run `npm run build`, and it is discovered and registered automatically.
 * This is what makes the library scalable.
 *
 * @package TrikoliCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Trikoli_Blocks {

	private static $instance = null;

	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Register all blocks from the build directory.
	 */
	public function register() {
		$blocks_dir = TRIKOLI_CORE_PATH . 'build/blocks';

		if ( ! is_dir( $blocks_dir ) ) {
			// Surface a friendly admin notice if the assets were never built.
			add_action( 'admin_notices', array( $this, 'build_notice' ) );
			return;
		}

		// WordPress 6.7+: register the whole collection in one optimized call.
		$manifest = TRIKOLI_CORE_PATH . 'build/blocks-manifest.php';
		if ( function_exists( 'wp_register_block_metadata_collection' ) && file_exists( $manifest ) ) {
			wp_register_block_metadata_collection( $blocks_dir, $manifest );
		}

		foreach ( glob( $blocks_dir . '/*', GLOB_ONLYDIR ) as $block_path ) {
			if ( file_exists( $block_path . '/block.json' ) ) {
				register_block_type( $block_path );
			}
		}
	}

	/**
	 * Admin notice when the build step has not been run yet.
	 */
	public function build_notice() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		echo '<div class="notice notice-warning"><p><strong>Trikoli Core:</strong> blocks are not built yet. Run <code>npm install && npm run build</code> in <code>wp-content/plugins/trikoli-core</code>.</p></div>';
	}
}
