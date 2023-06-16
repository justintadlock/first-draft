<?php
/**
 * The Assets class is responsible for registering and/or enqueuing the theme's
 * CSS and JavaScript.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace FirstDraft;

class Assets
{
	/**
	 * Boots the component, running its actions/filters.
	 *
	 * @since 1.0.0
	 */
	public function boot(): void
	{
		// Editor styles.
		add_action( 'after_setup_theme', [ $this, 'addEditorStyles' ] );

		// Front-end only.
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueueAssets'] );

		// Enqueue block-specific styles.
		add_action( 'init', [ $this, 'enqueueBlockStyles' ] );
	}

	/**
	 * Add editor stylesheets.
	 *
	 * @since 1.0.0
	 * @link  https://developer.wordpress.org/reference/functions/add_editor_style/
	 */
	public function addEditorStyles(): void
	{
		add_editor_style( [
			get_parent_theme_file_uri( 'style.css' )
		] );
	}

	/**
	 * Enqueue scripts/styles for the front end.
	 *
	 * @since 1.0.0
	 */
	public function enqueueAssets(): void
	{
		// Loads the primary `style.css` file.
		wp_enqueue_style(
			'first-draft-style',
			get_parent_theme_file_uri( 'style.css' ),
			null,
			filemtime( get_parent_theme_file_path( 'style.css' ) )
		);
	}

	/**
	 * Enqueues block-specific styles so that they only load when the block
	 * is in use. Block styles are stored under `/assets/css/blocks` are
	 * automatically enqueued. Each file should be named
	 * `{$block_namespace}-{$block_slug}.css`.
	 *
	 * @since 1.0.0
	 * @link  https://developer.wordpress.org/reference/functions/wp_enqueue_block_style/
	 */
	public function enqueueBlockStyles(): void
	{
		// Gets all the block stylesheets.
		$files = glob( get_parent_theme_file_path( 'assets/css/blocks/*.css' ) );

		foreach ( $files as $file ) {

			// Gets the filename without the path or extension.
			$name = str_replace( [
				get_parent_theme_file_path( 'assets/css/blocks/' ),
				'.css'
			], '', $file );

			// Sanitize the name to make sure it contains only
			// characters allowed in a block type name.
			$name = preg_replace( '/[^a-z0-9-]/', '', strtolower( $name ) );

			// Get the position of the first hyphen.
			$pos = strpos( $name, '-' );

			// Bail if there is no hyphen.
			if ( false === $pos ) {
				continue;
			}

			// Converts the filename to its associated block name by
			// replacing the first `-` with a `/`. Filenames must
			// use `{namespace}-{slug}` for this to work.
			$block = substr_replace( $name, '/', $pos, 1 );

			// Register the block style.
			wp_enqueue_block_style( $block, [
				'handle' => "first-draft-block-{$name}",
				'src'    => get_parent_theme_file_uri( "assets/css/blocks/{$name}.css" ),
				'path'   => get_parent_theme_file_path( "assets/css/blocks/{$name}.css" ),
				'ver'    => filemtime( get_parent_theme_file_path( "assets/css/blocks/{$name}.css" ) )
			] );
		}
	}
}
