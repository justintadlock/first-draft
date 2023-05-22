<?php
/**
 * The Block Styles class is responsible for registering custom block style
 * variations the theme needs.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace FirstDraft;

class BlockStyleVariations
{
	/**
         * Boots the component, running its actions/filters.
         *
         * @since 1.0.0
         */
	public function boot(): void
	{
		add_action( 'init', [ $this, 'register'] );
	}

	/**
         * Register block styles.
         *
         * @since 1.0.0
	 * @link  https://developer.wordpress.org/reference/functions/register_block_style/
	 */
	public function register(): void
	{
		// Adds a "no gap" style for the Post Template block.
		// CSS in the `/assets/css/blocks/core-post-template.css`.
		// This can be removed with the block supports `blockGap`.
		// @link https://github.com/WordPress/gutenberg/pull/49050
		register_block_style( 'core/post-template', [
			'name' => 'no-gap',
			'label' => __( 'No Gap', 'first-draft' )
		] );
	}
}
