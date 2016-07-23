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
            $itemContent .= call_user_func(array($this, $function,), array('data' => $row));
            $drawItem = false;
        }
    }

    /**
     * @return string
     */
    public function showTxSlider($row)
    {
        $addContent = 'Slides:' . $row['data']['image'];
        $addContent .= '<h3>Slider</h3>';

        return $addContent;
    }

    /**
     * @return string
     */
    public function showTxTab($row)
    {
        $addContent = '';
        $i = 1;
        $objectManager =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository = $objectManager->get('MB\\Angelshop\\Domain\\Repository\\TabRepository');
        $tabs = $repository->findByRecord($row['data']['uid']);
        if ($tabs) {
            foreach ($tabs as $item) {
                $addContent .= 'Tab-' . $i . '<br/>';
                $addContent .= '<strong>' . $item->getHeader() . '</strong>';
                $addContent .= '<p>' . substr($item->getText(), 0,
                        80) . '</p> <hr style="background-color:black; "  />';
                $i++;
            };
        }
        $addContent .= '<h3>Tab</h3>';

        return $addContent;
    }


    /**
     * @return string
     */
    public function showTxImpressum($row)
    {
        $addContent = 'GoogleMap Addresse: ' . $row['data']['tx_angelshop_address'];

        $addContent .= '<h3>Impressum</h3>';

        return $addContent;
    }

    /**
     * @return string
     */
    public function showTextmedia($row)
    {
        $addContent = '';
        if ($row['data']['layout'] == 1) {
            $addContent = '<h3>Team Element</h3>';
        }
        if ($row['data']['layout'] == 2) {
            $addContent = '<h3>Projekt Element</h3>';
        }
        if ($row['data']['layout'] == 3) {
            $addContent = '<h3>Call To Action Element</h3>';
        }
        if ($row['data']['layout'] == 4) {
            $addContent = '<h3>Teaser Element</h3>';
        }

        return $addContent;
    }
}