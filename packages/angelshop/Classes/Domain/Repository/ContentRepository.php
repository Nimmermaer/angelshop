<?php

namespace MB\Angelshop\Domain\Repository;

use MB\Angelshop\Domain\Model\Content;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

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
 * @method findByContentType(string $string)
 */
class ContentRepository extends Repository
{
    /**
     * Repository for tt_content objects
     * @var class-string<\\MB\Angelshop\Domain\Model\Content>
     */
    protected $objectType = '\\' . Content::class;

    public function initializeObject(): void
    {
        /** @var Typo3QuerySettings $querySettings */
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $querySettings->setIgnoreEnableFields(true);
        $querySettings->setEnableFieldsToBeIgnored(['hidden', 'starttime']);
        $this->setDefaultQuerySettings($querySettings);
    }

    public function findProducts(): QueryResultInterface|array
    {
        $query = $this->createQuery();
        $query->like('tx_abatemplate_product', 1);

        return $query->execute();
    }

    public function findHiddenEntryByUid($uid): ?object
    {
        if (array_key_exists('__identity', $uid)) {
            $uid = $uid['__identity'];
        }
        $query = $this->createQuery();
        $query->getQuerySettings()
            ->setIgnoreEnableFields(true);
        $query->getQuerySettings()
            ->setEnableFieldsToBeIgnored(['hidden']);

        return $query->matching($query->equals('uid', (int) $uid))
            ->execute()
            ->getFirst();
    }

    public function findByIndex($term): array|QueryResultInterface
    {
        $constraints = [];
        $query = $this->createQuery();
        $query->getQuerySettings()
            ->setIgnoreEnableFields(false);
        $constraints[] = $query->logicalOr(
            $query->like('bodytext', "%{$term}%"),
            $query->like('product', "%{$term}%"),
            $query->like('additionalDescription', "%{$term}%"),
            $query->like('header', "%{$term}%"),
            $query->like('manufacturer', "%{$term}%")
        );
        $constraints[] = $query->logicalAnd($query->equals('contentType', 'ce_product'));
        $query->matching($query->logicalAnd(...$constraints));
        return $query->execute();
    }
}
