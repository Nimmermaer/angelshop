<?php

use MB\Angelshop\Utility\FontawesomeIcons;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(
    function ($extensionKey, $table): void {

        ExtensionManagementUtility::addTCAcolumns($table, [
            'tx_angelshop_product_stock' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.tx_angelshop_product_stock',
                'config' => [
                    'type' => 'check',
                    'default' => '0',
                ],
            ],
            'tx_angelshop_product_price' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.tx_angelshop_product_price',

                'config' => [
                    'type' => 'number',
                    'size' => '40',
                    'format' => 'decimal',
                ],
            ],
            'tx_angelshop_product_manufacturer_name' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.tx_angelshop_product_manufacturer_name',
                'config' => [
                    'type' => 'input',
                    'size' => '20',
                ],
            ],
            'tx_angelshop_product_old_price' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.tx_angelshop_product_old_price',
                'config' => [
                    'type' => 'number',
                    'size' => '20',
                    'format' => 'decimal',
                ],
            ],
            'tx_angelshop_product_additional_description' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.tx_angelshop_product_additional_description',
                'config' => [
                    'type' => 'text',
                    'cols' => '40',
                    'rows' => '6',
                    'enableRichtext' => true,
                ],
            ],
            'tx_angelshop_cognizance' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_cognizance',
                'config' => [
                    'type' => 'number',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_owner' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_owner',
                'config' => [
                    'type' => 'number',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_sales_tax_indicator' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_sales_tax_indicator',
                'config' => [
                    'type' => 'number',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_opentime' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_opentime',
                'config' => [
                    'type' => 'text',
                    'row' => '5',
                    'cols' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_address' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_address',
                'config' => [
                    'type' => 'text',
                    'row' => '5',
                    'cols' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_phone' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_phone',
                'config' => [
                    'type' => 'number',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_email' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_email',
                'config' => [
                    'type' => 'link',
                ],
            ],
            'tx_angelshop_title' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_title',
                'config' => [
                    'type' => 'number',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_link' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_link',
                'config' => [
                    'type' => 'link',
                ],
            ],
            'tx_angelshop_fontawesome' => [
                'exclude' => 0,
                'displayCond' => [
                    'OR' => ['FIELD:layout:=:1', 'FIELD:CType:=:tx_angelshop_impressum'],
                ],
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_fontawesome',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tx_angelshop_domain_model_fontawesome',
                    'foreign_field' => 'record',
                ],
            ],
            'tx_angelshop_trader' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_trader',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tx_angelshop_domain_model_trader',
                    'foreign_field' => 'record',
                ],
            ],
            'tx_angelshop_tab' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_tab',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tx_angelshop_domain_model_tab',
                    'foreign_field' => 'record',
                ],
            ],
            'tx_angelshop_map_small' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [
                            'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small.0',
                            'value' => 0,
                        ],
                        [
                            'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small.1',
                            'value' => 1,
                        ],
                        [
                            'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small.2',
                            'value' => 2,
                        ],
                        [
                            'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small.3',
                            'value' => 3,
                        ],
                    ],
                    'size' => 1,
                    'minitems' => 0,
                    'maxitems' => 1,
                ],
            ],
            'subheader' => [
                'exclude' => 0,
                'displayCond' => [
                    'OR' => ['FIELD:CType:=:tx_angelshop_impressum', 'FIELD:CType:=:tx_angelshop_service'],
                ],
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
                'config' => [
                    'type' => 'input',
                    'size' => '50',
                    'softref' => 'email[subst]',
                ],
            ],
            'tx_angelshop_class' => [
                'exclude' => 0,
                'displayCond' => [
                    'OR' => ['FIELD:layout:=:4', 'FIELD:CType:=:tx_angelshop_service'],
                ],
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_class',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => FontawesomeIcons::ICONS,
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
            ],
            'tx_angelshop_salutation' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_salutation',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [
                            'label' => 'Eigene Überschrift',
                            'value' => 0,
                        ],
                        [
                            'label' => 'Hallo "Vorname"',
                            'value' => 1,
                        ],
                        [
                            'label' => 'Sehr geehrte/r Frau/Herr',
                            'value' => 2,
                        ],
                    ],
                ],
            ],
            'tx_angelshop_movement' => [
                'exclude' => 0,
                'displayCond' => [
                    'OR' => ['FIELD:layout:=:4', 'FIELD:CType:=:tx_angelshop_service'],
                ],
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_movement',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => FontawesomeIcons::ANIMATED,
                ],
            ],
        ]);
        $GLOBALS['TCA'][$table]['palettes']['fonts']['showitem'] = 'tx_angelshop_class,tx_angelshop_movement';
        ExtensionManagementUtility::addToAllTCAtypes($table, 'tx_angelshop_fontawesome', '', 'after:header');
        ExtensionManagementUtility::addToAllTCAtypes($table, '--palette--;;fonts,', '', 'after:header');

        $contentElements = [
            'menu',
            'contact',
            'gallery',
            'impressum',
            'product',
            'service',
            'slider',
            'tab',
            'trader_slider',
        ];
        foreach ($contentElements as $contentElement) {
            ExtensionManagementUtility::addTcaSelectItem(
                $table,
                'CType',
                [
                    'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_be.xlf:tx_angelshop_' . $contentElement . '.title',
                    'tx_angelshop_' . $contentElement,
                ],
                '',
                'after'
            );
        }

        $commonFields = '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,';

        $GLOBALS['TCA'][$table]['types']['tx_angelshop_impressum'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,tx_angelshop_map_small,image;Logo,
          header;Name,tx_angelshop_owner,tx_angelshop_address,tx_angelshop_phone,subheader;Mobil,tx_angelshop_email,
          tx_angelshop_cognizance,tx_angelshop_sales_tax_indicator,tx_angelshop_opentime,
          tx_angelshop_fontawesome;Social Links,' . $commonFields,
        ];

        $GLOBALS['TCA'][$table]['types']['tx_angelshop_slider'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields,
        ];

        $GLOBALS['TCA'][$table]['types']['tx_angelshop_gallery'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields,
        ];

        $GLOBALS['TCA'][$table]['types']['tx_angelshop_trader_slider'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,tx_angelshop_trader,' . $commonFields,

        ];
        $GLOBALS['TCA'][$table]['types']['tx_angelshop_service'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header,subheader;Buttontext,header_link;Buttonlink,--palette--;;fonts,bodytext,' . $commonFields,
        ];
        $GLOBALS['TCA'][$table]['types']['tx_angelshop_tab'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,tx_angelshop_tab,' . $commonFields,
        ];

        $GLOBALS['TCA'][$table]['types']['tx_angelshop_contact'] = [
            'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
    header, header_layout, header_link;Kontaktseite',
        ];

        $GLOBALS['TCA'][$table]['types']['tx_angelshop_product'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header, tx_angelshop_product_stock, image, bodytext,
        tx_angelshop_product_additional_description, tx_angelshop_product_price,tx_angelshop_product_old_price,tx_angelshop_product_manufacturer_name,' . $commonFields,
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => true,
                        'richtextConfiguration' => 'angelshop',
                    ],
                ],
            ],
        ];

        $GLOBALS['TCA'][$table]['columns']['layout']['onChange'] = 'reload';
        $GLOBALS['TCA'][$table]['types']['tx_angelshop_menu'] = $GLOBALS['TCA'][$table]['types']['menu_pages'];
    },
    'angelshop',
    'tt_content'
);
