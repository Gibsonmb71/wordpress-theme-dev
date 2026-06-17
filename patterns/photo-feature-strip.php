<?php
/**
 * Title: Photo feature strip
 * Slug: linea/photo-feature-strip
 * Categories: linea-homepage, linea-modules
 * Description: A responsive three-story visual strip for photo-heavy coverage.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"className":"linea-section-heading","level":2} -->
	<h2 class="wp-block-heading linea-section-heading">Photos</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"linea-photo-strip"} -->
	<div class="wp-block-query linea-photo-strip">
		<!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
			<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
			<!-- wp:post-date {"fontSize":"x-small"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
