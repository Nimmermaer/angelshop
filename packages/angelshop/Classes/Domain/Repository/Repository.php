<?php

namespace MB\Angelshop\Domain\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

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
 * Class Repository
 * @package MB\Angelshop\Domain\Repository
 */
class Repository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * initialize repository
     */
    public function initializeObject()
    {
        /** @var $querySettings Typo3QuerySettings */
        $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        $querySettings->setRespectStoragePage(false);
        $querySettings->setRespectSysLanguage(false);
        $this->setDefaultQuerySettings($querySettings);
    }

    /**
     * @param $uid
     * @return array|QueryResultInterface
     * @throws InvalidQueryException
     */
    public function findByContentelementUid($uid, $table = 'tx_angelshop_trader_ttcontent_mm')
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($table);
        $rawUids = $queryBuilder->from($table)
            ->select('uid_foreign')
            ->where(
                $queryBuilder->expr()->eq('uid_local', (int) $uid)
            )->execute()
            ->fetchAllAssociative();

        $trader = [];
        if (is_array($rawUids) && ! empty($rawUids)) {
            $query = $this->createQuery();
            $query->matching($query->in('uid', array_keys($rawUids)));
            $trader = $query->execute();
        }

        return $trader;
    }
}
