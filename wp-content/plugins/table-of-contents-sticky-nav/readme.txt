=== Table Of Contents Sticky Nav ===
Contributors:      Kenny Crippen
Tags:              block
Tested up to:      6.1
Stable tag:        0.1.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

A block that scrapes H2/H3 tags and appends them to a list to use as a sticky navigation.

== Description ==

This block accomplishes a number of things:

1. The view.js file scrapes through the entry content to find H2 and H3 tags
2. Those tags are cloned and added to the Table of Contents block as list items. List items which correspond with H3 tags are added as nested list items underneath their respective H2 parent.
3. Each list item contains an anchor tag which will smooth scroll the page to its respective header on click.
4. Block options have been included to change the appearance of the list items on the front-end. There are 3 options to choose from a SelectControl.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin zip folder through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Note that the node_modules dir has been omitted. You may need to run npm run build.

== Usage ==
The easiest way to get an example of this block up and running is as follows:
1. Add a Core Columns block to a page with 2 columns. The left column should be narrow and the right column should be wide.
2. Add the Table of Contents block to the left column.
3. Add some placeholder content to the right column. Add a decent number of H2 and H3 tags.
4. View the front-end, click an item in the Table of Contents block and verify the page scrolls to the correct place.

== Changelog ==

= 0.1.0 =
* Release
