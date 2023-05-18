<?php
/**
 * Title: Front Page - Hero Grid
 * Slug: first-draft/front-page-hero-grid
 * Categories: theme
 * Template Types: front-page
 */
?>
<!-- wp:template-part {"slug":"header","theme":"first-draft","tagName":"header"} /-->

<!-- wp:cover {"gradient":"luminous-dusk","isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-white-color has-text-color" style="margin-top:0;margin-bottom:0">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-luminous-dusk-gradient-background"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size">Welcome to my site</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra non diam sed maximus.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link wp-element-button">Read More →</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
</div>
<!-- /wp:cover -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignfull">
	<!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:post-template {"align":"full"} -->
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:post-title {"isLink":true} /-->
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-excerpt {"moreText":"Continue reading →","showMoreOnNewLine":false} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
			<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</main>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer","theme":"first-draft","tagName":"footer"} /-->
