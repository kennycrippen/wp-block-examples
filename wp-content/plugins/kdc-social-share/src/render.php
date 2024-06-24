<?php
/**
 * Render.
 *
 * Render files output code to the front-end using PHP.
 *
 * @link https://developer.wordpress.org/block-editor/getting-started/fundamentals/static-dynamic-rendering/#dynamic-rendering
 *
 * @package kdc
 */
?>

<div <?php echo get_block_wrapper_attributes(); // phpcs:ignore ?>>
	<button
		class="js--trigger-mobile-share mobile-share-button"
		data-share-url="<?php the_permalink(); ?>"
		data-share-text="<?php esc_attr( the_title() ); ?>"
	>
		<span class="is-icon icon-share"></span>
		<span class="screen-reader-text">Share This</span>
	</button>
	<div class="result"></div>
	<button class="is-style-outline-black button js--trigger-social-share-dropdown" aria-expanded="false">
		Share This<span class="is-icon icon-chevron-down"></span>
	</button>
	<?php echo wp_kses_post( generate_social_share_dropdown( get_the_id(), $attributes['printText'] ) ); ?>
</div>
