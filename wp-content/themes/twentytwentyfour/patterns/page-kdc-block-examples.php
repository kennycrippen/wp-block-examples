<?php
/**
 * Title: KDC Block Examples
 * Slug: twentytwentyfour/page-kdc-block-examples
 * Categories: twentytwentyfour_page
 * Keywords: page, starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
?>
<!-- wp:kdc/kdc-progress-bar {"align":"full","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-kdc-kdc-progress-bar alignfull is-layout-constrained" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","className":"progress-bar\u002d\u002dheading is-style-default","fontSize":"medium"} -->
<p class="progress-bar--heading is-style-default has-base-2-color has-text-color has-link-color has-medium-font-size">This is a place to write some content</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"social-share-col"} -->
<div class="wp-block-column is-vertically-aligned-center social-share-col" style="flex-basis:50%"><!-- wp:kdc/kdc-social-share {"printText":"Print Page"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --><div class="progressBar"></div></div>
<!-- /wp:kdc/kdc-progress-bar -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Page Content"},"align":"wide","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:kdc/table-of-contents-sticky-nav {"listStyleType":"numbered"} -->
<nav class="wp-block-kdc-table-of-contents-sticky-nav"><ol class="toc-list numbered"></ol></nav>
<!-- /wp:kdc/table-of-contents-sticky-nav --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading -->
<h2 class="wp-block-heading">Hello There</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:kdc/kdc-buttons {"className":"undefined","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-kdc-kdc-buttons undefined" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:kdc/kdc-button {"buttonText":"Read More","url":"https://google.com","target":true,"className":"undefined"} -->
<a class="wp-block-kdc-kdc-button undefined button" href="https://google.com" rel="noopener noreferrer" target="_blank"><span class="text">Read More</span></a>
<!-- /wp:kdc/kdc-button -->

<!-- wp:kdc/kdc-button {"buttonText":"Donate","afterText":"to a specific research fund now.","url":"#","className":"undefined"} -->
<a class="wp-block-kdc-kdc-button undefined button" href="#" rel="noopener noreferrer" target="_self"><span class="text">Donate</span><span class="after-text screen-reader-text"> to a specific research fund now.</span></a>
<!-- /wp:kdc/kdc-button --></div>
<!-- /wp:kdc/kdc-buttons -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">This is an H3 Tag</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:kdc/kdc-advanced-pullquote {"bracketColor":"green","bracketSize":true,"quoteColor":"red","quoteSize":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<figure style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)" class="wp-block-kdc-kdc-advanced-pullquote is-style-bracket-color-green is-style-quotes-color-red is-style-quotes-large is-style-bracket-small is-style-animate"><!-- wp:group {"tagName":"blockquote","className":"advanced-pullquote-cite"} -->
<blockquote class="wp-block-group advanced-pullquote-cite"><!-- wp:paragraph -->
<p>A very interesting quote by a very interesting person. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:group -->

<!-- wp:group {"tagName":"figcaption","className":"advanced-pullquote-cite"} -->
<figcaption class="wp-block-group advanced-pullquote-cite"><!-- wp:paragraph {"placeholder":"This group is for author photo and attribution"} -->
<p>~ John Smith</p>
<!-- /wp:paragraph --></figcaption>
<!-- /wp:group --></figure>
<!-- /wp:kdc/kdc-advanced-pullquote -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">This is another H3 Tag</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Another H3 Tag so We Can See More Items in the Scroll Navigation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">This is an H2 Tag</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget <a href="https://google.com">risus varius</a> blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:kdc/kdc-buttons {"className":"undefined is-three-up-layout","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-kdc-kdc-buttons undefined is-three-up-layout" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:kdc/kdc-button {"buttonText":"Buttons","url":"#","className":"undefined"} -->
<a class="wp-block-kdc-kdc-button undefined button" href="#" rel="noopener noreferrer" target="_self"><span class="text">Buttons</span></a>
<!-- /wp:kdc/kdc-button -->

<!-- wp:kdc/kdc-button {"buttonText":"Laid","className":"undefined"} -->
<a class="wp-block-kdc-kdc-button undefined button" href="#" rel="noopener noreferrer" target="_self"><span class="text">Laid</span></a>
<!-- /wp:kdc/kdc-button -->

<!-- wp:kdc/kdc-button {"buttonText":"Out","className":"undefined"} -->
<a class="wp-block-kdc-kdc-button undefined button" href="#" rel="noopener noreferrer" target="_self"><span class="text">Out</span></a>
<!-- /wp:kdc/kdc-button -->

<!-- wp:kdc/kdc-button {"buttonText":"In a","className":"undefined"} -->
<a class="wp-block-kdc-kdc-button undefined button" href="#" rel="noopener noreferrer" target="_self"><span class="text">In a</span></a>
<!-- /wp:kdc/kdc-button -->

<!-- wp:kdc/kdc-button {"buttonText":"Three-up"} -->
<a class="wp-block-kdc-kdc-button button" href="#" rel="noopener noreferrer" target="_self"><span class="text">Three-up</span></a>
<!-- /wp:kdc/kdc-button -->

<!-- wp:kdc/kdc-button {"buttonText":"Grid"} -->
<a class="wp-block-kdc-kdc-button button" href="#" rel="noopener noreferrer" target="_self"><span class="text">Grid</span></a>
<!-- /wp:kdc/kdc-button --></div>
<!-- /wp:kdc/kdc-buttons -->

<!-- wp:paragraph -->
<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">This is another H2 Tag</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Lorem Ipsum Heading Title Placeholder</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum id ligula porta felis euismod semper.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Subheading H3</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum id ligula porta felis euismod semper.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
