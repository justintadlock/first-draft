<?php
/**
 * Theme functions file, which is auto-loaded by WordPress. Use this file to run
 * any custom PHP necessary for the theme.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace FirstDraft;

// Load functions files.
require_once get_parent_theme_file_path( 'src/functions-helpers.php' );

// Load class files.
require_once get_parent_theme_file_path( 'src/Assets.php'      );
require_once get_parent_theme_file_path( 'src/BlockStyles.php' );
require_once get_parent_theme_file_path( 'src/Patterns.php'    );

// Bootstrap the theme.
theme();
