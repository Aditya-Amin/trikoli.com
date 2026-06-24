<?php
/**
 * Server-rendered Contact block (so the form can carry a fresh nonce).
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Inner content.
 * @var WP_Block $block      Block instance.
 * @package TrikoliCore
 */

$email    = isset( $attributes['email'] ) ? $attributes['email'] : '';
$phone    = isset( $attributes['phone'] ) ? $attributes['phone'] : '';
$location = isset( $attributes['location'] ) ? $attributes['location'] : '';
$mapq     = isset( $attributes['mapQuery'] ) ? $attributes['mapQuery'] : '';
$show_map = ! empty( $attributes['showMap'] );
$show_form= ! empty( $attributes['showForm'] );
$recipient= isset( $attributes['recipient'] ) ? $attributes['recipient'] : '';

$wrapper = get_block_wrapper_attributes( array( 'class' => 'tk-contact' ) );
$sent    = isset( $_GET['tk_contact'] ) ? sanitize_key( wp_unslash( $_GET['tk_contact'] ) ) : '';
?>
<div <?php echo $wrapper; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="tk-contact__cards">
		<div class="tk-contact__card"><span class="tk-contact__ic">&#9993;</span><h4><?php esc_html_e( 'Email', 'trikoli' ); ?></h4>
			<p><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p></div>
		<div class="tk-contact__card"><span class="tk-contact__ic">&#9742;</span><h4><?php esc_html_e( 'Phone', 'trikoli' ); ?></h4>
			<p><?php echo esc_html( $phone ); ?></p></div>
		<div class="tk-contact__card"><span class="tk-contact__ic">&#128205;</span><h4><?php esc_html_e( 'Location', 'trikoli' ); ?></h4>
			<p><?php echo esc_html( $location ); ?></p></div>
	</div>

	<div class="tk-contact__main">
		<?php if ( $show_map && $mapq ) : ?>
			<div class="tk-contact__map">
				<iframe title="<?php esc_attr_e( 'Map', 'trikoli' ); ?>" loading="lazy"
					src="https://maps.google.com/maps?q=<?php echo rawurlencode( $mapq ); ?>&amp;z=13&amp;output=embed"></iframe>
			</div>
		<?php endif; ?>

		<?php if ( $show_form ) : ?>
			<div class="tk-contact__form">
				<?php if ( 'sent' === $sent ) : ?>
					<p class="tk-contact__ok"><?php esc_html_e( 'Thanks! Your message has been sent.', 'trikoli' ); ?></p>
				<?php elseif ( 'error' === $sent ) : ?>
					<p class="tk-contact__err"><?php esc_html_e( 'Sorry, something went wrong. Please try again.', 'trikoli' ); ?></p>
				<?php endif; ?>
				<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
					<input type="hidden" name="action" value="trikoli_contact" />
					<input type="hidden" name="_redirect" value="<?php echo esc_url( get_permalink() ); ?>" />
					<input type="hidden" name="_recipient" value="<?php echo esc_attr( $recipient ); ?>" />
					<?php wp_nonce_field( 'trikoli_contact', 'trikoli_contact_nonce' ); ?>
					<p style="display:none"><label>Leave blank<input type="text" name="tk_hp" value="" autocomplete="off" /></label></p>
					<label><?php esc_html_e( 'Your name', 'trikoli' ); ?>
						<input type="text" name="tk_name" required /></label>
					<label><?php esc_html_e( 'Your email', 'trikoli' ); ?>
						<input type="email" name="tk_email" required /></label>
					<label><?php esc_html_e( 'Message', 'trikoli' ); ?>
						<textarea name="tk_message" rows="5" required></textarea></label>
					<button type="submit" class="tk-btn tk-btn--primary tk-btn--lg"><?php esc_html_e( 'Send message', 'trikoli' ); ?></button>
				</form>
			</div>
		<?php endif; ?>
	</div>
</div>
