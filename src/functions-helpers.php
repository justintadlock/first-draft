<?php
/**
 * Helper functions.
 */

namespace FirstDraft;

/**
 * Mini container used to reference the various theme components. Bootstraps the
 * theme on first call by executing the components' `boot()` method.
 *
 * @since  1.0.0
 * @return mixed
 * @todo   Add return type declaration with PHP 8-only support.
 */
function theme( string $abstract = '' )
{
        static $bindings = [];

	if ( [] === $bindings ) {
		$bindings = [
			'assets' => new Assets()
		];

		foreach ( $bindings as $binding ) {
			$binding->boot();
		}
	}

	return '' === $abstract ? $bindings : $bindings[ $abstract ];
}
