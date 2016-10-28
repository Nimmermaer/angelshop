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

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}


$pagesColumns = [

    'ce_whatsapp_text' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:pages.ce_whatsapp_text',
        'config' => [
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
            'eval' => 'trim',
        ]
    ],
    'ce_whatsapp_button' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:pages.ce_whatsapp_button',
        'config' => [
            'type' => 'check',
            'default' => '0'
        ]
    ],
    'ce_facebook_button' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:pages.ce_facebook_button',
        'config' => [
            'type' => 'check',
            'default' => '0'
        ]
    ],
    'ce_social_position' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:pages.ce_social_position',
        'config' => [
            'type' => 'select',
            'items' => [
                ['Anfang des Inhalts', 1],
                ['Ende des Inhalts', 0]
            ],
            'default' => 1
        ]
    ],

    'tx_angelshop_facebook_image' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:pages.tx_angelshop_facebook_image',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'tx_angelshop_facebook_image',
            ['maxitems' => 1],
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $pagesColumns, 1);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages',
    '--div--;Soziale Netzwerke,tx_angelshop_facebook_image, ce_facebook_button, ce_whatsapp_button, ce_whatsapp_text', '', 'after:categories');
