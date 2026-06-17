<?php
/**
 * Title: Newsletter callout
 * Slug: linea/newsletter-callout
 * Categories: linea-homepage, linea-modules
 * Description: A simple editable callout for newsletters, announcements, or staff notes.
 */
?>
<!-- wp:group {"align":"wide","className":"linea-callout","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"newsprint","layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignwide linea-callout has-newsprint-background-color has-background" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","className":"linea-kicker"} -->
	<p class="has-text-align-center linea-kicker">Stay connected</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Get Linea updates</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size">Use this module for a newsletter link, school announcements, or a note from the editors.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"url":"/"} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/">Subscribe or learn more</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
