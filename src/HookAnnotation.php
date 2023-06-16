<?php
/**
 * The HookAnnotation trait automatically hooks methods based on annotations.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace FirstDraft;

use ReflectionClass;
use ReflectionMethod;

use function add_filter;

/**
 * Implement hooking in method annotation.
 *
 * Format: @hook tag 10
 *         @hook tag first
 *         @hook tag last
 *         @hook skip
 *
 * @see https://github.com/szepeviktor/wordpress-website-lifecycle/blob/master/WordPress-hooks.md
 */
trait HookAnnotation
{
	protected function hookMethods(int $defaultPriority = 10): void
	{
		$classReflection = new ReflectionClass(self::class);
		// Look for hook tag in all public methods.
		foreach ($classReflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
			// Do not hook constructor, use HookConstructorTo.
			if ($method->isConstructor()) {
				continue;
			}
			$hookDetails = $this->getMetadata((string)$method->getDocComment(), $defaultPriority);
			if ($hookDetails === null) {
				continue;
			}

			add_filter(
				$hookDetails['tag'],
				[$this, $method->name],
				$hookDetails['priority'],
				$method->getNumberOfParameters()
			);
		}
	}

	/**
	 * Read hook tag from docblock.
	 *
	 * @return array{tag: string, priority: int}|null
	 */
	protected function getMetadata(string $docComment, int $defaultPriority): ?array
	{
		$matches = [];
		if (
			\preg_match(
				//         @hook   (   tag     )      (   priority   )
				'/^\s+\*\s+@hook\s+([\w\/._=-]+)(?:\s+(\d+|first|last))?\s*$/m',
				$docComment,
				$matches
			) !== 1
		) {
			return null;
		}

		if ($matches[1] === 'skip') {
			return null;
		}

		if (! isset($matches[2])) {
			return [
				'tag' => $matches[1],
				'priority' => $defaultPriority,
			];
		}

		switch ($matches[2]) {
			case 'first':
				$priority = PHP_INT_MIN;
				break;
			case 'last':
				$priority = PHP_INT_MAX;
				break;
			default:
				$priority = \intval($matches[2]);
				break;
		}

		return [
			'tag' => $matches[1],
			'priority' => $priority,
		];
	}
}
