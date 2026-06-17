<?php
/**
 * Title: Newspaper section grid
 * Slug: linea/homepage-section-grid
 * Categories: linea-homepage, linea-sections
 * Description: A responsive grid of native Query Loop sections for latest stories.
 */
?>
<!-- wp:group {"align":"wide","className":"linea-story-grid","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide linea-story-grid">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"className":"linea-section-heading","level":2} -->
		<h2 class="wp-block-heading linea-section-heading">Latest News</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"linea-tight-query"} -->
		<div class="wp-block-query linea-tight-query">
			<!-- wp:post-template -->
				<!-- wp:columns {"verticalAlignment":"center","className":"linea-compact-story","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<div class="wp-block-columns are-vertically-aligned-center linea-compact-story">
					<!-- wp:column {"verticalAlignment":"center","width":"36%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:36%">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"64%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:64%">
						<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
						<!-- wp:group {"className":"linea-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="wp-block-group linea-byline-row">
							<!-- wp:post-author-name {"fontSize":"x-small"} /-->
							<!-- wp:post-date {"fontSize":"x-small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"className":"linea-section-heading","level":2} -->
		<h2 class="wp-block-heading linea-section-heading">Spotlight</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":4,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"linea-tight-query"} -->
		<div class="wp-block-query linea-tight-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
				<!-- wp:post-excerpt {"moreText":"","excerptLength":14,"fontSize":"small"} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"className":"linea-section-heading","level":2} -->
		<h2 class="wp-block-heading linea-section-heading">More Stories</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":7,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"linea-tight-query"} -->
		<div class="wp-block-query linea-tight-query">
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
