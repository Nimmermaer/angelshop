<?php
namespace MB\Angelshop\DataProcessing;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

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

/**
 * Class ContentElementProcessor
 * @package MB\Angelshop\DataProcessing
 */
class ContentElementProcessor implements DataProcessorInterface
{


    /**
     * fontAwesomeRepository
     * @var \MB\Angelshop\Domain\Repository\FontawesomeRepository
     * @inject
     */
    protected $fontawesomeRepository = null;


    /**
     * @param ContentObjectRenderer $cObj
     * @param array                 $contentObjectConfiguration
     * @param array                 $processorConfiguration
     * @param array                 $processedData
     *
     * @return array
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {

        $function = 'processFor' . str_replace(' ', '',
                ucwords(str_replace("_", " ", $contentObjectConfiguration['templateName'])));
        if (strpos($function, 'Angelshop/') !== false) {
            $function = str_replace('Angelshop/', '', $function);
        };

        if (method_exists($this, $function)) {

            $templateName = $contentObjectConfiguration['templateName'];

            if (strpos($templateName, 'Angelshop/') !== false) {

                $templateName = str_replace('Angelshop/', '', $templateName);
            };
            $processedData[$templateName] = call_user_func(array(
                $this,
                $function,
            ), $processedData);
        }

        return $processedData;
    }

    /**
     * @param $processedData
     *
     * @return string
     */
    public function processForTextMedia($processedData)
    {
        $objectManager =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository    = $objectManager->get('MB\\Angelshop\\Domain\\Repository\\FontawesomeRepository');

        return $repository->findByRecord($processedData['data']['uid']);
    }

    /**
     * @param $processedData
     *
     * @return string
     */
    public function processForImpressum($processedData)
    {
        $objectManager =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository    = $objectManager->get('MB\\Angelshop\\Domain\\Repository\\FontawesomeRepository');

        return $repository->findByRecord($processedData['data']['uid']);
    }

    /**
     * @param $processedData
     *
     * @return string
     */
    public function processForTraderSlider($processedData)
    {
        $objectManager =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository    = $objectManager->get('MB\\Angelshop\\Domain\\Repository\\TraderRepository');

        return $repository->findByRecord($processedData['data']['uid']);
    }


    /**
     * @param $processedData
     *
     * @return string
     */
    public function processForTabs($processedData)
    {
        $objectManager =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository    = $objectManager->get('MB\\Angelshop\\Domain\\Repository\\TabRepository');

        return $repository->findByRecord($processedData['data']['uid']);
    }

    /**
     * @param $processedData
     *
     * @return string
     */
    public function processForProductList($processedData)
    {
        $objectManager =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository    = $objectManager->get('MB\\Angelshop\\Domain\\Repository\\ContentRepository');

        return $repository->findByContentType('ce_product');
    }
}