<?php
/**
 * Plugin Name:       Social Share
 * Description:       This block outputs a dropdown menu with social sharing links.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Kenny Crippen
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       kdc-social-share
 *
 * @package Kdc
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function kdc_kdc_social_share_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'kdc_kdc_social_share_block_init' );

/**
 * A function to generate the social share links to various platforms within a dropdown.
 *
 * @param int    $post_id The post ID of the single page/post we wish to share.
 * @param string $print_text The text of the print page link.
 * @return string The actual block of HTML to return.
 */
function generate_social_share_dropdown( $post_id, $print_text = '' ): string {
	$facebook_link     = 'http://www.facebook.com/share.php?u=' . get_the_permalink( $post_id );
	$linkedin_link     = 'https://www.linkedin.com/shareArticle?mini=true&url=' . get_the_permalink( $post_id );
	$twitter_link      = 'https://twitter.com/intent/tweet?text=' . get_the_permalink( $post_id );
	$threads_link      = 'https://threads.net/intent/post?text=' . get_the_permalink( $post_id );
	$the_post_title    = get_the_title( $post_id );
	$print_button_text = '' !== $print_text ? $print_text : 'Print';

	ob_start();
	?>
	<ul class="k-block--social-networks-dropdown">
		<li>
			<a href="<?php echo esc_url($facebook_link); ?>" target="_blank" rel="noopener noreferrer">
				<span class="is-icon icon-facebook">
					<span class="screen-reader-text">Share <?php echo esc_html($the_post_title); ?> to Facebook</span>
				</span> 
				Facebook
			</a>
		</li>
		<li>
			<a href="<?php echo esc_url($twitter_link); ?>" target="_blank" rel="noopener noreferrer">
				<span class="is-icon icon-x">
					<span class="screen-reader-text">Share <?php echo esc_html($the_post_title); ?> to X</span>
				</span> 
				X
			</a>
		</li>
		<li>
			<a href="<?php echo esc_url($threads_link); ?>" target="_blank" rel="noopener noreferrer">
				<span class="is-icon icon-threads">
					<span class="screen-reader-text">Share <?php echo esc_html($the_post_title); ?> to Threads</span>
				</span> 
				Threads
			</a>
		</li>
		<li>
			<a href="<?php echo esc_url($linkedin_link); ?>" target="_blank" rel="noopener noreferrer">
				<span class="is-icon icon-linkedin">
					<span class="screen-reader-text">Share <?php echo esc_html($the_post_title); ?> to LinkedIn</span>
				</span> 
				LinkedIn
			</a>
		</li>
		<li>
			<a href="#" class="copy-button">
				<span class="is-icon icon-link">
					<span class="screen-reader-text">Copy <?php echo esc_html($the_post_title); ?> to clipboard</span>
				</span> 
				Copy Link
			</a>
			<div class="report-url-for-copy screen-reader-text"><?php echo esc_url(get_the_permalink($post_id)); ?></div>
			<span class="custom-tooltip">Event URL copied to clipboard</span>
		</li>
		<li>
			<a class="js-print-button" href="#">
				<span class="is-icon icon-print">
					<span class="screen-reader-text">Print <?php echo esc_html($the_post_title); ?></span>
				</span> 
				<?php echo $print_button_text; ?>
			</a>
		</li>
	</ul>
	<?php
	return ob_get_clean();
}
