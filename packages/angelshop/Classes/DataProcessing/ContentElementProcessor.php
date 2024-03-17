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
use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class ContentElementProcessor implements DataProcessorInterface
{
    /**
     * fontAwesomeRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected ?FontawesomeRepository $fontawesomeRepository = null;

    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {
        $function = 'processFor' . str_replace(
            ' ',
            '',
            ucwords(str_replace('_', ' ', (string) $contentObjectConfiguration['templateName']))
        );
        if (str_contains($function, 'Angelshop/')) {
            $function = str_replace('Angelshop/', '', $function);
        }

        if (method_exists($this, $function)) {
            $templateName = $contentObjectConfiguration['templateName'];

            if (str_contains((string) $templateName, 'Angelshop/')) {
                $templateName = str_replace('Angelshop/', '', (string) $templateName);
            }
            $processedData[$templateName] = call_user_func([$this, $function], $processedData);
        }

        return $processedData;
    }

    public function processForTextMedia(array $processedData): array|QueryResult
    {
        $repository = self::getRepository(FontawesomeRepository::class);
        /** @var QueryResult $contentElements */
        $contentElements = $repository->findByRecord($processedData['data']['uid']);
        return $contentElements->count() > 0 ? $contentElements : [];
    }

    public function processForImpressum(array $processedData): array|QueryResult
    {
        $repository = self::getRepository(FontawesomeRepository::class);
        return $repository->findBy([
            'record' => $processedData['data']['uid'],
        ]);
    }

    public function processForTraderSlider(array $processedData): array|QueryResult
    {
        $repository = self::getRepository(TraderRepository::class);
        return $repository->findBy([
            'record' => $processedData['data']['uid'],
        ]);
    }

    public function processForTabs(array $processedData): array|QueryResult
    {
        $repository = self::getRepository(TabRepository::class);
        return $repository->findBy([
            'record' => $processedData['data']['uid'],
        ]);
    }

    public function processForProductList(array $processedData): array|QueryResult
    {
        $repository = self::getRepository(ContentRepository::class);
        return $repository->findByContentType('tx_angelshop_product');
    }

    protected function getRepository(string $repositoryName): object
    {
        return GeneralUtility::makeInstance($repositoryName);
    }
}
