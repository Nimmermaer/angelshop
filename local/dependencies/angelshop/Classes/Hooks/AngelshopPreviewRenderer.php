<?php

namespace MB\Angelshop\Hooks;

/***************************************************************
 *  Copyright notice
 *  (c) 2016 Michael Blunck <mi.blunck@gmail.com>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;

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
            $itemContent .= call_user_func(array($this, $function,), ['data' => $row, 'header'=> $headerContent, 'pagelayoutView' => $parentObject ]);
            $drawItem = false;
        }
    }

    /**
     * @return string
     */
    public function showTxSlider($arguments)
    {
        $addContent = 'Slides:' . $arguments['data']['image'];
        $addContent .= '<h3>Slider</h3>';

        return $addContent;
    }

    /**
     * @return string
     */
    public function showTxTab($arguments)
    {
        $addContent = '';
        $i = 1;
        $objectManager =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository = $objectManager->get('MB\\Angelshop\\Domain\\Repository\\TabRepository');
        $tabs = $repository->findByRecord($arguments['data']['uid']);
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
    public function showTxImpressum($arguments)
    {
        $addContent = 'GoogleMap Addresse: ' . $arguments['data']['tx_angelshop_address'];

        $addContent .= '<h3>Impressum</h3>';

        return $addContent;
    }

    /**
     * @return string
     */
    public function showTextmedia($arguments)
    {
        $addContent = '';
        if ($arguments['data']['layout'] == 1) {
            $addContent = '<h3>Team Element</h3>';
        }
        if ($arguments['data']['layout'] == 2) {
            $addContent = '<h3>Projekt Element</h3>';
        }
        if ($arguments['data']['layout'] == 3) {
            $addContent = '<h3>Call To Action Element</h3>';
        }
        if ($arguments['data']['layout'] == 4) {
            $addContent = '<h3>Teaser Element</h3>';
        }

        return $addContent;
    }

}
