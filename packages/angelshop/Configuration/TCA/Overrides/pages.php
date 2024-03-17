<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(
    function ($extensionKey, $table): void {
        $pagesColumns = [
            'ce_whatsapp_text' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:pages.ce_whatsapp_text',
                'config' => [
                    'type' => 'text',
                    'cols' => '30',
                    'rows' => '5',
                    'eval' => 'trim',
                ],
            ],
            'ce_whatsapp_button' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:pages.ce_whatsapp_button',
                'description' => 'Zeigt einen Teilen Button am Ende der Seite an',
                'config' => [
                    'type' => 'check',
                    'default' => '0',
                ],
            ],
            'ce_facebook_button' => [
                'description' => 'Zeigt einen Teilen Button am Ende der Seite an',
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:pages.ce_facebook_button',
                'config' => [
                    'type' => 'check',
                    'default' => '0',
                ],
            ],
            'tx_angelshop_facebook_image' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:pages.tx_angelshop_facebook_image',
                'config' => [
                    'type' => 'file',
                    'maxitems' => 1,
                    'allowed' => 'common-media-types',
                ],
            ],
        ];

        ExtensionManagementUtility::addTCAcolumns($table, $pagesColumns);
        $GLOBALS['TCA'][$table]['palettes']['whatsapp'] = [
            'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:pages.palette.whatsapp',
            'showitem' => 'ce_whatsapp_button,--linebreak--,ce_whatsapp_text',
        ];
        ExtensionManagementUtility::addToAllTCAtypes(
            $table,
            '--palette--;;whatsapp',
            '',
            'after:twitter_card'
        );
        ExtensionManagementUtility::addToAllTCAtypes(
            $table,
            'ce_facebook_button',
            '',
            'before:og_title'
        );
    },
    'angelshop',
    'pages'
);
