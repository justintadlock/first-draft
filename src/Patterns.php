<?php
/**
 * The Patterns class is responsible for registering block pattern categories
 * and block patterns. However, it's recommended to register patterns by placing
 * individual files in the `/patterns` folder.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace FirstDraft;

class Patterns
{
	/**
         * Boots the component, running its actions/filters.
         *
         * @since 1.0.0
         */
	public function boot(): void
	{
		add_action( 'init', [ $this, 'register' ] );
	}

	/**
         * Register block pattern categories. Note that this theme registers
	 * patterns by adding them as individual pattern files in the `/patterns`
	 * folder.
         *
         * @since 1.0.0
	 * @link  https://developer.wordpress.org/reference/functions/register_block_pattern_category/
         */
	public function register(): void
	{
		// Registers a base `theme` category.
		register_block_pattern_category( 'theme', [
			'label' => __( 'Theme', 'first-draft' )
		] );
	}
}
