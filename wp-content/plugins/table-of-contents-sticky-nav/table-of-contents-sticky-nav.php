<?php
/**
 * Plugin Name:       Table Of Contents Sticky Nav
 * Description:       A block that scrapes H2/H3 tags and appends them to a list to use as a sticky navigation.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Kenny Crippen
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       table-of-contents-sticky-nav
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
function kdc_table_of_contents_sticky_nav_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'kdc_table_of_contents_sticky_nav_block_init' );
