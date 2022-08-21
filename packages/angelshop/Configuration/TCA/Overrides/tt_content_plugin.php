<?php

use MB\Angelshop\Hooks\AngelshopPreviewRenderer;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

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

defined('TYPO3') || die();

call_user_func(
    function ($extensionKey, $table) {
        ExtensionUtility::registerPlugin(
            ucfirst($extensionKey),
            'Product',
            'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_product_list.title',
            'content-image'
        );

        ExtensionUtility::registerPlugin(
            ucfirst($extensionKey),
            'Weather',
            'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_weather.title',
            'content-image'
        );

        ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript',
            'angelshop'
        );

        $tables = [
            'tx_angelshop_domain_model_fontawesome',
            'tx_angelshop_domain_model_trader',
            'tx_angelshop_domain_model_tab',
        ];

        foreach ($tables as $table) {
            ExtensionManagementUtility::addLLrefForTCAdescr(
                $table,
                'EXT:angelshop/Resources/Private/Language/locallang_csh_' . $table
            );
            ExtensionManagementUtility::allowTableOnStandardPages($table);
        }

        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['angelshop']
            = AngelshopPreviewRenderer::class;

        $pluginSignature = 'Weather';
        ExtensionUtility::registerPlugin(
            $extensionKey,
            $pluginSignature,
            'Wetter'
        );
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$extensionKey . '_' . strtolower($pluginSignature)] = 'pi_flexform';
        ExtensionManagementUtility::addPiFlexFormValue(
            $extensionKey . '_' . strtolower($pluginSignature),
            'FILE:EXT:' . $extensionKey . '/Configuration/FlexForms/' . $pluginSignature . '.xml'
        );
    },
    'angelshop',
    'tt_content'
);
