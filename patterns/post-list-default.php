<?php
/**
 * Title: Post List: Default
 * Slug: first-draft/post-list-default
 * Description: Displays the queried posts in a list with the title, date, and excerpt.
 * Categories: theme, query
 * Keywords: query, posts
 * Block Types: core/query
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull">

	<!-- wp:post-template {"align":"full","className":"is-style-no-gap"} -->

		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
		<article class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

			<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<header class="wp-block-group alignfull">

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"lg"} -->
				<div class="wp-block-group has-lg-font-size">
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-title {"isLink":true} /-->
			</header>
			<!-- /wp:group -->

			<!-- wp:post-excerpt {"moreText":"Continue reading →","showMoreOnNewLine":false} /-->

		</article>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->
