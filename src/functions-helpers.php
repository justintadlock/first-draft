<?php
/**
 * The helpers function file houses any necessary PHP functions for the theme.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace FirstDraft;

/**
 * Mini container used to reference the various theme components. Bootstraps the
 * theme on first call by executing each component's `boot()` method. The
 * `theme()` function acts as the single instance of the theme, and devs can
 * access any class/component by passing in its reference via the `$abstract`
 * parameter (useful for accessing hooks within classes).
 *
 * @since  1.0.0
 * @return mixed
 * @todo   Add `mixed` return type declaration with PHP 8-only support.
 */
function theme( string $abstract = '' )
{
        static $bindings = [];

	// If there are no bound components, register and boot them.
	if ( [] === $bindings ) {

		// Bind instances of the theme's component classes that need to
		// be booted when the theme launches.
		$bindings = [
			'assets'       => new Assets(),
			'block-styles' => new BlockStyles(),
			'patterns'     => new Patterns()
		];

		// Boot each of the components.
		foreach ( $bindings as $binding ) {
			$binding->boot();
		}
	}

	return '' === $abstract ? $bindings : $bindings[ $abstract ];
}
