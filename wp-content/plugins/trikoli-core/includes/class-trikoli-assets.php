<?php
/**
 * Shared front-end + editor assets for the block library.
 *
 * Per-block styles ship inside each block (block.json -> style/editorStyle),
 * so blocks stay theme-agnostic. This class only enqueues a tiny shared
 * runtime (e.g. scroll-reveal / counter helpers) used by interactive blocks.
 *
 * @package TrikoliCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Trikoli_Assets {

	private static $instance = null;

	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function register() {
		add_action( 'wp_enqueue_scripts', array( $this, 'frontend' ) );
		add_action( 'enqueue_block_assets', array( $this, 'shared' ) );
	}

	/**
	 * Shared lightweight CSS available in both editor and front end.
	 */
	public function shared() {
		$css = TRIKOLI_CORE_PATH . 'assets/css/trikoli-blocks.css';
		if ( file_exists( $css ) ) {
			wp_enqueue_style(
				'trikoli-blocks-shared',
				TRIKOLI_CORE_URL . 'assets/css/trikoli-blocks.css',
				array(),
				TRIKOLI_CORE_VERSION
			);
		}
	}

	/**
	 * Front-end only interactions (no jQuery, vanilla, deferred).
	 */
	public function frontend() {
		$js = TRIKOLI_CORE_PATH . 'assets/js/trikoli-frontend.js';
		if ( file_exists( $js ) ) {
			wp_enqueue_script(
				'trikoli-frontend',
				TRIKOLI_CORE_URL . 'assets/js/trikoli-frontend.js',
				array(),
				TRIKOLI_CORE_VERSION,
				true
			);
		}
	}
}
