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
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MB.' . $extensionKey,
            'Gallery',
            'Gallery'
        );


        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MB.' . $extensionKey,
            'Product',
            'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_product_list.title'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MB.' . $extensionKey,
            'Weather',
            'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_weather.title'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MB.' . $extensionKey,
            'Fullwidthvideo',
            'Video'
        );
        if (TYPO3_MODE === 'BE') {

            /**
             * Registers a Backend Module
             */
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'MB.' . $extensionKey,
                'web',     // Make module a submodule of 'tools'
                'Productlist',    // Submodule key
                '',                        // Position
                array(
                    'Product' => 'list, edit, update, search',

                ),
                array(
                    'access' => 'user,group',
                    'icon' => 'EXT:' . $extensionKey . '/ext_icon.gif',
                    'labels' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang.xlf',
                )
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript',
            'angelshop');


        $tables = [
            'tx_angelshop_domain_model_fontawesome',
            'tx_angelshop_domain_model_trader',
            'tx_angelshop_domain_model_tab',
        ];

        foreach ($tables as $table) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr($table,
                'EXT:angelshop/Resources/Private/Language/locallang_csh_' . $table);
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($table);
        }

        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['angelshop']
            = \MB\Angelshop\Hooks\AngelshopPreviewRenderer::class;




        $pluginSignature = 'Weather';
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            $extensionKey,
            $pluginSignature,
            'Wetter'
        );
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$extensionKey . '_' . strtolower($pluginSignature)] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($extensionKey . '_' . strtolower($pluginSignature),
            'FILE:EXT:' . $extensionKey . '/Configuration/FlexForms/' . $pluginSignature . '.xml');
    }, 'angelshop',
    'tt_content'
);