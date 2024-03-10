<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(
    function ($extensionKey, $table): void {
        $newsColumns = [
            'tx_angelshop_news_recipe' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:news.tx_angelshop_news_recipe',
                'onChange' => 'reload',
                'config' => [
                    'type' => 'check',
                    'default' => '0',
                ],
            ],
            'tx_angelshop_news_ingredient' => [
                'exclude' => 0,
                'displayCond' => 'FIELD:tx_angelshop_news_recipe:=:1',
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:news.tx_angelshop_news_ingredient',
                'config' => [
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 6,
                    'enableRichtext' => true,
                ],
            ],
            'tx_angelshop_news_icon' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:news.tx_angelshop_news_icon',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['angelshop']['FONT_AWESOME'],
                ],
            ],
        ];

        ExtensionManagementUtility::addTCAcolumns($table, $newsColumns);
        ExtensionManagementUtility::addFieldsToAllPalettesOfField(
            $table,
            'title',
            'tx_angelshop_news_recipe',
            'before:isTopNews'
        );

        ExtensionManagementUtility::addToAllTCAtypes(
            $table,
            'tx_angelshop_news_ingredient',
            '',
            'before:bodytext'
        );
        ExtensionManagementUtility::addToAllTCAtypes($table, 'tx_angelshop_news_icon', '', 'before:tags');
    },
    'angelshop',
    'tx_news_domain_model_news'
);
