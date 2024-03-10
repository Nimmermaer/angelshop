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
                'config' => [
                    'type' => 'check',
                    'default' => '0',
                ],
            ],
            'ce_facebook_button' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:pages.ce_facebook_button',
                'config' => [
                    'type' => 'check',
                    'default' => '0',
                ],
            ],
            'ce_social_position' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:pages.ce_social_position',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [[
                        'label' => 'Anfang des Inhalts',
                        'value' => 1,
                    ], [
                        'label' => 'Ende des Inhalts',
                        'value' => 0,
                    ]],
                    'default' => 1,
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

        ExtensionManagementUtility::addToAllTCAtypes(
            $table,
            '--div--;Soziale Netzwerke,tx_angelshop_facebook_image, ce_facebook_button, ce_whatsapp_button, ce_whatsapp_text',
            '',
            'after:categories'
        );
    },
    'angelshop',
    'pages'
);
