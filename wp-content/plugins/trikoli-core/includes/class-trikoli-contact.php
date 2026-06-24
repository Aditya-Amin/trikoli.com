<?php
/**
 * Handles the trikoli/contact block form submission via admin-post.
 * Validates a nonce + honeypot and emails the recipient with wp_mail().
 *
 * @package TrikoliCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Trikoli_Contact {

	private static $instance = null;

	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function register() {
		add_action( 'admin_post_nopriv_trikoli_contact', array( $this, 'handle' ) );
		add_action( 'admin_post_trikoli_contact', array( $this, 'handle' ) );
	}

	public function handle() {
		$redirect = isset( $_POST['_redirect'] ) ? esc_url_raw( wp_unslash( $_POST['_redirect'] ) ) : home_url( '/' );

		// Honeypot — bots fill this; humans never see it.
		if ( ! empty( $_POST['tk_hp'] ) ) {
			$this->bounce( $redirect, 'sent' ); // pretend success
		}

		// Nonce.
		if ( ! isset( $_POST['trikoli_contact_nonce'] ) ||
			! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['trikoli_contact_nonce'] ) ), 'trikoli_contact' ) ) {
			$this->bounce( $redirect, 'error' );
		}

		$name    = isset( $_POST['tk_name'] ) ? sanitize_text_field( wp_unslash( $_POST['tk_name'] ) ) : '';
		$email   = isset( $_POST['tk_email'] ) ? sanitize_email( wp_unslash( $_POST['tk_email'] ) ) : '';
		$message = isset( $_POST['tk_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['tk_message'] ) ) : '';
		$to      = isset( $_POST['_recipient'] ) ? sanitize_email( wp_unslash( $_POST['_recipient'] ) ) : '';

		if ( ! $to || ! is_email( $to ) ) {
			$to = get_option( 'admin_email' );
		}

		if ( '' === $name || ! is_email( $email ) || '' === $message ) {
			$this->bounce( $redirect, 'error' );
		}

		$subject = sprintf(
			/* translators: %s: site name */
			__( '[%s] New contact enquiry', 'trikoli' ),
			wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES )
		);
		$body = sprintf(
			"Name: %s\nEmail: %s\n\nMessage:\n%s\n",
			$name,
			$email,
			$message
		);
		$headers = array(
			'Content-Type: text/plain; charset=UTF-8',
			sprintf( 'Reply-To: %s <%s>', $name, $email ),
		);

		$ok = wp_mail( $to, $subject, $body, $headers );
		$this->bounce( $redirect, $ok ? 'sent' : 'error' );
	}

	private function bounce( $redirect, $status ) {
		wp_safe_redirect( add_query_arg( 'tk_contact', $status, $redirect ) . '#contact' );
		exit;
	}
}
