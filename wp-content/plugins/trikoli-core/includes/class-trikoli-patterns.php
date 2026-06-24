<?php
/**
 * Registers pattern categories and auto-loads PHP pattern files from /patterns.
 *
 * Patterns are the "page templates / sections" users drag in. Each file in
 * /patterns returns block markup via a header docblock (WordPress native
 * registered-pattern format). New verticals (woocommerce, magazine, newspaper)
 * just add new categories + pattern files.
 *
 * @package TrikoliCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Trikoli_Patterns {

	private static $instance = null;

	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function register() {
		$this->register_categories();
		$this->register_patterns();
	}

	private function register_categories() {
		if ( ! function_exists( 'register_block_pattern_category' ) ) {
			return;
		}
		$categories = array(
			'trikoli-sections' => __( 'Trikoli: Sections', 'trikoli' ),
			'trikoli-headers'  => __( 'Trikoli: Headers', 'trikoli' ),
			'trikoli-footers'  => __( 'Trikoli: Footers', 'trikoli' ),
			'trikoli-pages'    => __( 'Trikoli: Pages', 'trikoli' ),
		);
		foreach ( $categories as $slug => $label ) {
			register_block_pattern_category( $slug, array( 'label' => $label ) );
		}
	}

	/**
	 * Each pattern file declares its own metadata in a leading docblock:
	 *   Title, Slug, Categories, Block Types, Inserter, Description.
	 */
	private function register_patterns() {
		if ( ! function_exists( 'register_block_pattern' ) ) {
			return;
		}
		foreach ( glob( TRIKOLI_CORE_PATH . 'patterns/*.php' ) as $file ) {
			$headers = get_file_data(
				$file,
				array(
					'title'      => 'Title',
					'slug'       => 'Slug',
					'categories' => 'Categories',
					'blockTypes' => 'Block Types',
					'inserter'   => 'Inserter',
					'description'=> 'Description',
				)
			);

			if ( empty( $headers['slug'] ) ) {
				continue;
			}

			ob_start();
			include $file;
			$content = ob_get_clean();

			register_block_pattern(
				$headers['slug'],
				array(
					'title'       => $headers['title'],
					'description' => $headers['description'],
					'content'     => $content,
					'categories'  => array_filter( array_map( 'trim', explode( ',', $headers['categories'] ) ) ),
					'blockTypes'  => array_filter( array_map( 'trim', explode( ',', $headers['blockTypes'] ) ) ),
					'inserter'    => 'no' !== strtolower( trim( $headers['inserter'] ) ),
				)
			);
		}
	}
}
