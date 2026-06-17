<?php
/**
 * Title: Archive story card grid
 * Slug: linea/archive-query-grid
 * Categories: posts, linea-sections
 * Description: A native inherited Query Loop grid for archive and index templates.
 * Inserter: no
 * Template Types: archive, home, index
 */
?>
<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","className":"linea-archive-query"} -->
<div class="wp-block-query alignwide linea-archive-query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->
		<!-- wp:post-terms {"term":"category"} /-->
		<!-- wp:post-title {"isLink":true,"level":2,"fontSize":"large"} /-->
		<!-- wp:group {"className":"linea-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group linea-byline-row">
			<!-- wp:post-author-name {"fontSize":"x-small"} /-->
			<!-- wp:post-date {"fontSize":"x-small"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-excerpt {"moreText":"Read story","excerptLength":22,"fontSize":"small"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:group {"className":"linea-notice-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"newsprint","layout":{"type":"constrained"}} -->
		<div class="wp-block-group linea-notice-box has-newsprint-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:paragraph -->
			<p>No stories found.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
