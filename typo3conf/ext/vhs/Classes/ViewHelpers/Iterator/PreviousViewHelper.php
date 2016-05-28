<?php
namespace FluidTYPO3\Vhs\ViewHelpers\Iterator;

/*
 * This file is part of the FluidTYPO3/Vhs project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use FluidTYPO3\Vhs\ViewHelpers\Condition\Iterator\ContainsViewHelper;
use TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Returns previous element in array $haystack from position of $needle
 *
 * @author Claus Due <claus@namelesscoder.net>
 * @package Vhs
 * @subpackage ViewHelpers\Iterator
 */
class PreviousViewHelper extends ContainsViewHelper {

	/**
	 * Render
	 *
	 * @return string
	 */
	public function render() {
		return static::renderStatic(
			$this->arguments,
			$this->buildRenderChildrenClosure(),
			$this->renderingContext
		);
	}

	/**
	 * Default implementation for use in compiled templates
	 *
	 * @param array $arguments
	 * @param \Closure $renderChildrenClosure
	 * @param RenderingContextInterface $renderingContext
	 * @return mixed
	 */
	static public function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext) {
		$evaluation = self::assertHaystackHasNeedle($arguments['haystack'], $arguments['needle'], $arguments);
		return self::getNeedleAtIndex($evaluation !== FALSE ? $evaluation - 1 : -1, $arguments);
	}

}
