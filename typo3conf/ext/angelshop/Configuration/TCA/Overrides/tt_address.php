<?php

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>,
 */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$ttAddressColumns = [
    'tx_angelshop_newsletter' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_address.tx_angelshop_newsletter',
        'config' => [
            'type' => 'check',
            'default' => '0'
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', $ttAddressColumns, 1);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address',
    'tx_angelshop_newsletter', '', 'after:last_name');
