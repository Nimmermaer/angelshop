<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

call_user_func(
    function ($extensionKey, $table): void {
        ExtensionUtility::registerPlugin(
            ucfirst((string) $extensionKey),
            'Product',
            'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_product_list.title',
            'content-image'
        );

        ExtensionUtility::registerPlugin(
            ucfirst((string) $extensionKey),
            'Weather',
            'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_weather.title',
            'content-image'
        );

        ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', 'angelshop');

        $pluginSignature = ExtensionUtility::registerPlugin(
            $extensionKey,
            'Weather',
            'Wetter',
            pluginIcon: 'actions-cloud'
        );
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        ExtensionManagementUtility::addPiFlexFormValue(
            $pluginSignature,
            'FILE:EXT:' . $extensionKey . '/Configuration/FlexForms/' . $pluginSignature . '.xml'
        );
    },
    'angelshop',
    'tt_content'
);
