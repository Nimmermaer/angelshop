<?php

namespace MB\Angelshop\DataProcessing;

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

use MB\Angelshop\Domain\Repository\ContentRepository;
use MB\Angelshop\Domain\Repository\FontawesomeRepository;
use MB\Angelshop\Domain\Repository\TabRepository;
use MB\Angelshop\Domain\Repository\TraderRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\Exception;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;


/**
 * Class ContentElementProcessor
 * @package MB\Angelshop\DataProcessing
 */
class ContentElementProcessor implements DataProcessorInterface
{


    /**
     * fontAwesomeRepository
     * @var FontawesomeRepository | null
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected ?FontawesomeRepository $fontawesomeRepository = null;


    /**
     * @param ContentObjectRenderer $cObj
     * @param array $contentObjectConfiguration
     * @param array $processorConfiguration
     * @param array $processedData
     *
     * @return array
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {

        $function = 'processFor' . str_replace(' ', '',
                ucwords(str_replace("_", " ", $contentObjectConfiguration['templateName'])));
        if (strpos($function, 'Angelshop/') !== false) {
            $function = str_replace('Angelshop/', '', $function);
        }

        if (method_exists($this, $function)) {

            $templateName = $contentObjectConfiguration['templateName'];

            if (strpos($templateName, 'Angelshop/') !== false) {

                $templateName = str_replace('Angelshop/', '', $templateName);
            }
            $processedData[$templateName] = call_user_func(array(
                $this,
                $function,
            ), $processedData);
        }

        return $processedData;
    }

    /**
     * @param array $processedData
     * @return array
     * @throws Exception
     */
    public function processForTextMedia(array $processedData): array
    {
        $repository = self::getRepository(FontawesomeRepository::class);
        return $repository->findByRecord($processedData['data']['uid']);
    }

    /**
     * @param string $repositoryName
     * @return object
     */
    protected function getRepository(string $repositoryName): object
    {
        return GeneralUtility::makeInstance($repositoryName);
    }

    /**
     * @param array $processedData
     * @return array
     * @throws Exception
     */
    public function processForImpressum(array $processedData): array
    {
        $repository = self::getRepository(FontawesomeRepository::class);
        return $repository->findByRecord($processedData['data']['uid']);
    }

    /**
     * @param array $processedData
     * @return array
     * @throws Exception
     */
    public function processForTraderSlider(array $processedData): array
    {
        $repository = self::getRepository(TraderRepository::class);
        return $repository->findByRecord($processedData['data']['uid']);
    }

    /**
     * @param array $processedData
     * @return array
     * @throws Exception
     */
    public function processForTabs(array $processedData): array
    {
        $repository = self::getRepository(TabRepository::class);
        return $repository->findByRecord($processedData['data']['uid']);
    }

    /**
     * @param array $processedData
     * @return array
     * @throws Exception
     */
    public function processForProductList(array $processedData): array
    {
        $repository = self::getRepository(ContentRepository::class);
        return $repository->findByContentType('ce_product');
    }
}
