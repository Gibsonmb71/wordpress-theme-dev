<?php
/**
 * Title: Newspaper front page lead
 * Slug: weekly-wildcat/homepage-featured
 * Categories: weekly-wildcat-homepage
 * Description: A native Query Loop front page with a lead story and editor picks rail.
 */
?>
<!-- wp:group {"align":"wide","className":"ww-home-layout","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ww-home-layout" style="margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ww-lead-query"} -->
	<div class="wp-block-query ww-lead-query">
		<!-- wp:post-template -->
			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":58,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":520,"minHeightUnit":"px","className":"ww-lead-story","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"720px","wideSize":"720px","justifyContent":"left"}} -->
			<div class="wp-block-cover ww-lead-story" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container">
				<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|paper"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"paper"} /-->

				<!-- wp:post-title {"isLink":true,"level":2,"style":{"typography":{"fontSize":"clamp(2.2rem, 6vw, 4.8rem)","lineHeight":"0.96"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"paper"} /-->

				<!-- wp:post-excerpt {"moreText":"","excerptLength":28,"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.35"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"paper"} /-->

				<!-- wp:group {"className":"ww-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group ww-byline-row">
					<!-- wp:post-author-name {"isLink":true,"fontSize":"x-small"} /-->
					<!-- wp:paragraph {"fontSize":"x-small"} -->
					<p class="has-x-small-font-size">•</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
			</div></div>
			<!-- /wp:cover -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:group {"className":"ww-home-rail","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group ww-home-rail">
		<!-- wp:heading {"className":"ww-section-heading","level":2} -->
		<h2 class="wp-block-heading ww-section-heading">Editor’s Picks</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ww-card-list"} -->
		<div class="wp-block-query ww-card-list">
			<!-- wp:post-template -->
				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<div class="wp-block-columns are-vertically-aligned-center">
					<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0px"}}} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
						<!-- wp:post-terms {"term":"category"} /-->
						<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
						<!-- wp:post-date {"fontSize":"x-small"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->

		<!-- wp:group {"className":"ww-newsletter-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"newsprint","layout":{"type":"constrained"}} -->
		<div class="wp-block-group ww-newsletter-box has-newsprint-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"level":2,"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size">Stay informed</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Add a newsletter, announcements, or staff note block here from the Site Editor.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
