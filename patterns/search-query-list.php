<?php
/**
 * Title: Search results list
 * Slug: weekly-wildcat/search-query-list
 * Categories: posts, weekly-wildcat-sections
 * Description: A native inherited Query Loop list for search results.
 * Inserter: no
 * Template Types: search
 */
?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","className":"ww-search-query"} -->
<div class="wp-block-query alignwide ww-search-query">
	<!-- wp:post-template -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%">
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:post-title {"isLink":true,"level":2,"fontSize":"large"} /-->
				<!-- wp:group {"className":"ww-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group ww-byline-row">
					<!-- wp:post-author-name {"fontSize":"x-small"} /-->
					<!-- wp:post-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:post-excerpt {"moreText":"Read story","excerptLength":28,"fontSize":"small"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:group {"className":"ww-notice-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"newsprint","layout":{"type":"constrained"}} -->
		<div class="wp-block-group ww-notice-box has-newsprint-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:paragraph -->
			<p>No stories matched your search.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
