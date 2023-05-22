<?php
/**
 * Theme functions file, which is auto-loaded by WordPress. Use this file to
 * load additional PHP files and bootstrap the theme.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace FirstDraft;

// Load class files.
require_once get_parent_theme_file_path( 'src/Assets.php'               );
require_once get_parent_theme_file_path( 'src/BlockStyleVariations.php' );
require_once get_parent_theme_file_path( 'src/BlockPatterns.php'        );

// Load functions files.
require_once get_parent_theme_file_path( 'src/functions-helpers.php' );

// Bootstrap the theme.
theme();
