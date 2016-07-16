<?php
namespace MB\Angelshop\Hooks;

use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

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
class AngelshopPreviewRenderer implements PageLayoutViewDrawItemHookInterface
{

    /**
     * @param PageLayoutView $parentObject
     * @param bool $drawItem
     * @param string $headerContent
     * @param string $itemContent
     * @param array $row
     */
    public function preProcess(PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row)
    {
        $function = 'show' . str_replace(' ', '', ucwords(str_replace("_", " ", $row['CType'])));

       if (method_exists($this, $function)) {
            $itemContent = call_user_func(array($this, $function,), array($row));
            $drawItem = false;
        }
   }

    /**
     * @return string
     */
    public function showTxSlider($rowData)
    {
        $itemContent = '';
        $itemContent .= '<h3>Slider</h3>';
        return $itemContent;
    }
}