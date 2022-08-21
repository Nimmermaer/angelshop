<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
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

defined('TYPO3') or die();

call_user_func(
    function ($extensionKey, $table) {

        $newsColumns = [
            'tx_angelshop_news_recipe' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_db.xlf:news.tx_angelshop_news_recipe',
                'onChange' => 'reload',
                'config' => [
                    'type' => 'check',
                    'default' => '0'
                ]
            ],
            'tx_angelshop_news_ingredient' => [
                'exclude' => 0,
                'displayCond' => 'FIELD:tx_angelshop_news_recipe:=:1',
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_db.xlf:news.tx_angelshop_news_ingredient',
                'config' => array(
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 6,
                    'enableRichtext' => true,
                ),

            ],
            'tx_angelshop_news_icon' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_db.xlf:news.tx_angelshop_news_icon',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['angelshop']['FONT_AWESOME'],
                ],
            ],
        ];

        ExtensionManagementUtility::addTCAcolumns($table, $newsColumns);
        ExtensionManagementUtility::addFieldsToAllPalettesOfField($table, 'title', 'tx_angelshop_news_recipe', 'before:isTopNews');

        ExtensionManagementUtility::addToAllTCAtypes($table,
            'tx_angelshop_news_ingredient', '', 'before:bodytext');
        ExtensionManagementUtility::addToAllTCAtypes($table,
            'tx_angelshop_news_icon', '', 'before:tags');


    },
    'angelshop',
    'tx_news_domain_model_news'
);
