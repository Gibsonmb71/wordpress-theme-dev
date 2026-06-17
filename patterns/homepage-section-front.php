<?php
/**
 * Title: Section front module
 * Slug: weekly-wildcat/homepage-section-front
 * Categories: weekly-wildcat-homepage, weekly-wildcat-sections
 * Description: A native section-front layout with a feature story and compact latest-story rail.
 */
?>
<!-- wp:group {"align":"wide","className":"ww-section-front","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ww-section-front" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"className":"ww-section-heading","level":2} -->
		<h2 class="wp-block-heading ww-section-heading">Featured Section</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"x-large"} /-->
				<!-- wp:post-excerpt {"moreText":"Read story","excerptLength":28} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"className":"ww-section-heading","level":2} -->
		<h2 class="wp-block-heading ww-section-heading">More from this section</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ww-tight-query"} -->
		<div class="wp-block-query ww-tight-query">
			<!-- wp:post-template -->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
				<!-- wp:post-date {"fontSize":"x-small"} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
