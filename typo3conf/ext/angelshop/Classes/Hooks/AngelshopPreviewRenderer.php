<?php
namespace MB\Angelshop\Hooks;

use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;

/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 19.06.2016
 * Time: 22:42
 */

/**
 * Class PreviewRenderer
 * @package MB\Angelshop\Hooks
 */
class AngelshopPreviewRenderer implements PageLayoutViewDrawItemHookInterface  {

	/**
	 * @param PageLayoutView $parentObject
	 * @param bool $drawItem
	 * @param string $headerContent
	 * @param string $itemContent
	 * @param array $row
	 */
	public function preProcess( PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row ) {

		if ( $row['CType'] === 'tx_slider' ) {
			$itemContent .= '<h3>Slider</h3>';
			if ( $row['assets'] ) {
				$itemContent .= $parentObject->thumbCode( $row, 'tt_content', 'assets' ) . '<br />';
			}
			$drawItem = false;
		}
	}
}