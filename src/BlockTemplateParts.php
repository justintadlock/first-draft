<?php
/**
 * The Block Template Parts class is responsible for housing any custom code
 * related to template parts.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace FirstDraft;

class BlockTemplateParts
{
	/**
	 * Boots the component, running its actions/filters.
	 *
	 * @since 1.0.0
	 */
	public function boot(): void
	{
		add_action( 'default_wp_template_part_areas', [ $this, 'filterAreas'] );
	}

	/**
	 * Filter the core template part areas to add custom areas needed for
	 * the theme.
	 *
	 * @since 1.0.0
	 * @link  https://developer.wordpress.org/reference/hooks/default_wp_template_part_areas/
	 */
	public function filterAreas( array $default_area_definitions ): array
	{
		$default_area_definitions[] = [
			'area'        => 'comments',
			'area_tag'    => 'section',
			'label'       => __( 'Comments', 'first-draft' ),
			'description' => __( 'The Comments template defines a page area that typically contains the post comments list and form.', 'first-draft' ),
			// Core only supports four icons at the moment, so this
			// one doesn't actually appear. But the value must be
			// defined to avoid an error.
			// @link https://github.com/WordPress/gutenberg/issues/36814
			'icon'        => 'comments'
		];

		return $default_area_definitions;
	}
}
