<?php
/***************************************************************
 *  Copyright notice
 *  (c) 29.07.2016 Michael <mi.blunck@gmail.com>
 *  All rights reserved
 *  This is a part of the TYPO3 project. The TYPO3 project is
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
 *  Created by PhpStorm.
 ******************************************************************/

defined('TYPO3_MODE') or die();

call_user_func(
    function ($extensionKey, $table) {

        $ttAddressColumns = [
            'tx_angelshop_newsletter' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_address.tx_angelshop_newsletter',
                'config' => [
                    'type' => 'check',
                    'default' => '0'
                ]
            ],
        ];

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $ttAddressColumns, 1);

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table,
            'tx_angelshop_newsletter', '', 'after:last_name');
    },
    'angelshop',
    'tt_address'
);
