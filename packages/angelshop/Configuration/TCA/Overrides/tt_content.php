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

defined('TYPO3_MODE') or die();

call_user_func(
    function ($extensionKey, $table) {
        $newTtContentColumns = [


            'tx_abatemplate_product_stock' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_stock',
                'config' => [
                    'type' => 'check',
                    'default' => '0'
                ]
            ],
            'tx_abatemplate_product_price' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_price',
                'config' => [
                    'type' => 'input',
                    'size' => '20',

                ]
            ],
            'tx_abatemplate_product_manufacturer_name' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_manufacturer_name',
                'config' => [
                    'type' => 'input',
                    'size' => '40',
                    'eval' => 'double2'

                ]
            ],
            'tx_angelshop_image_collection' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:upload_example/Resources/Private/Language/locallang_db.xlf:tx_uploadexample_domain_model_example.image_collection',
                'config' => ExtensionManagementUtility::getFileFieldTCAConfig('tx_angelshop_image_collection', [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'columns' => [
                            'uid_local' => [
                                'config' => [
                                    'elementBrowserAllowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                                    'elementBrowserType' => 'file'
                                ]
                            ]
                        ]
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'image_collection',
                        'tablenames' => 'tx_uploadexample_domain_model_example',
                        'table_local' => 'sys_file',
                    ],
                ])
            ],
            'tx_abatemplate_product_old_price' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_old_price',
                'config' => [
                    'type' => 'input',
                    'size' => '20',
                    'eval' => 'double2'
                ]
            ],
            'tx_abatemplate_product_additional_description' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_additional_description',
                'config' => [
                    'type' => 'text',
                    'cols' => '40',
                    'rows' => '6',
                    'enableRichtext' => true,
                ],
            ],
            'tx_angelshop_cognizance' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_cognizance',
                'config' => [
                    'type' => 'input',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_owner' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_owner',
                'config' => [
                    'type' => 'input',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_sales_tax_indicator' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_sales_tax_indicator',
                'config' => [
                    'type' => 'input',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_opentime' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_opentime',
                'config' => [
                    'type' => 'text',
                    'row' => '5',
                    'cols' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_address' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_address',
                'config' => [
                    'type' => 'text',
                    'row' => '5',
                    'cols' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_phone' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_phone',
                'config' => [
                    'type' => 'input',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_email' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_email',
                'config' => [
                    'type' => 'input',
                    'renderType' => 'inputLink',
                    'size' => '30',
                    'eval' => 'trim',
                    'softref' => 'typolink'
                ],
            ],
            'tx_angelshop_title' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_title',
                'config' => [
                    'type' => 'input',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'tx_angelshop_link' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_link',
                'config' => [
                    'type' => 'input',
                    'renderType' => 'inputLink',
                    'size' => 50,
                    'max' => 1024,
                    'eval' => 'trim',
                    'softref' => 'typolink'
                ]
            ],
            'tx_angelshop_fontawesome' => [
                'exclude' => 0,
                'displayCond' => [
                    'OR' => [
                        'FIELD:layout:=:1',
                        'FIELD:CType:=:tx_impressum',
                    ],
                ],
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_fontawesome',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tx_angelshop_domain_model_fontawesome',
                    'foreign_field' => 'record',
                ]
            ],
            'tx_angelshop_trader' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_trader',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tx_angelshop_domain_model_trader',
                    'foreign_field' => 'record',
                ]
            ],
            'tx_angelshop_tab' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_tab',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tx_angelshop_domain_model_tab',
                    'foreign_field' => 'record',
                ]
            ],
            'tx_angelshop_map_small' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [
                            'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small.0',
                            0
                        ],
                        [
                            'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small.1',
                            1
                        ],
                        [
                            'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small.2',
                            2
                        ],
                        [
                            'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small.3',
                            3
                        ]
                    ],
                    'size' => 1,
                    'minitems' => 0,
                    'maxitems' => 1
                ]
            ],
            'subheader' => [
                'exclude' => 0,
                'displayCond' => [
                    'OR' => [
                        'FIELD:CType:=:tx_impressum',
                        'FIELD:CType:=:tx_service',
                    ],
                ],
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
                'config' => [
                    'type' => 'input',
                    'size' => '50',
                    'max' => '255',
                    'softref' => 'email[subst]'
                ]
            ],
            'tx_angelshop_class' => [
                'exclude' => 0,
                'displayCond' => [
                    'OR' => [
                        'FIELD:layout:=:4',
                        'FIELD:CType:=:tx_service',
                    ],
                ],
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_class',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['angelshop']['FONT_AWESOME'],
                ],
            ],
            'tx_angelshop_salutation' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_salutation',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [
                            'Eigene Überschrift', 0
                        ],
                        [
                            'Hallo "Vorname"', 1
                        ],
                        [
                            'Sehr geehrte/r Frau/Herr', 2
                        ]
                    ]
                ],
            ],
            'tx_angelshop_movement' => [
                'exclude' => 0,
                'displayCond' => [
                    'OR' => [
                        'FIELD:layout:=:4',
                        'FIELD:CType:=:tx_service',
                    ],
                ],
                'label' => 'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_movement',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['angelshop']['ANIMATED'],
                ],
            ],
        ];

        $GLOBALS['TCA'][$table]['palettes']['fonts']['showitem'] = 'tx_angelshop_class,tx_angelshop_movement';
        ExtensionManagementUtility::addTCAcolumns($table, $newTtContentColumns);
        ExtensionManagementUtility::addToAllTCAtypes($table, 'tx_angelshop_fontawesome', '',
            'after:header');
        ExtensionManagementUtility::addToAllTCAtypes($table, '--palette--;;fonts,', '',
            'after:header');

        $contentelements = [
            'slider',
            'trader_slider',
            'teaser',
            'service',
            'tab',
            'serviceList',
            'impressum',
            'project',
            'gallery',
            'contact',
            'angelshop_menu'
        ];
        foreach ($contentelements as $contentelement) {
            ExtensionManagementUtility::addTcaSelectItem(
                $table,
                'CType',
                [
                    'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:tx_' . $contentelement . '.title',
                    'tx_' . $contentelement,
                ],
                '',
                'after'
            );
        }
        ExtensionManagementUtility::addTcaSelectItem(
            $table,
            'CType',
            [
                'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:ce_product.title',
                'ce_product',
            ],
            'textmedia',
            'after'
        );
        ExtensionManagementUtility::addTcaSelectItem(
            $table,
            'CType',
            [
                'LLL:EXT:'.$extensionKey.'/Resources/Private/Language/locallang_be.xlf:angelshop_product.title',
                'angelshop_product',
            ],
            'textmedia',
            'after'
        );


        $commonFields = '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;Raster Elemente,tx_gridelements_container,tx_gridelements_columns';

        $GLOBALS['TCA'][$table]['types'] ['tx_impressum'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,tx_angelshop_map_small,image;Logo,
          header;Name,tx_angelshop_owner,tx_angelshop_address,tx_angelshop_phone,subheader;Mobil,tx_angelshop_email,
          tx_angelshop_cognizance,tx_angelshop_sales_tax_indicator,tx_angelshop_opentime,
          tx_angelshop_fontawesome;Social Links,' . $commonFields
        ];

        $GLOBALS['TCA'][$table]['types'] ['tx_slider'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields
        ];

        $GLOBALS['TCA'][$table]['types'] ['tx_gallery'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields
        ];
        $GLOBALS['TCA'][$table]['types'] ['angelshop_product'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
        ];

        $GLOBALS['TCA'][$table]['types'] ['tx_trader_slider'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,tx_angelshop_trader,' . $commonFields

        ];
        $GLOBALS['TCA'][$table]['types'] ['tx_service'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header,subheader;Buttontext,header_link;Buttonlink,--palette--;;fonts,bodytext,' . $commonFields
        ];
        $GLOBALS['TCA'][$table]['types'] ['tx_tab'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,tx_angelshop_tab,' . $commonFields
        ];

        $GLOBALS['TCA'][$table]['types'] ['tx_contact'] = [
            'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
    header, header_layout, header_link;Kontaktseite'
        ];

        $GLOBALS['TCA'][$table]['types']['ce_product'] = [
            'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header, tx_abatemplate_product_stock, image, bodytext,
        tx_abatemplate_product_additional_description, tx_abatemplate_product_price,tx_abatemplate_product_old_price,tx_abatemplate_product_manufacturer_name,' . $commonFields,
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => true,
                        'richtextConfiguration' => 'angelshop'
                    ]
                ]
            ]
        ];

        $GLOBALS['TCA'][$table]['columns']['layout']['onChange'] = 'reload';
        $GLOBALS['TCA'][$table]['types'] ['tx_angelshop_menu'] = $GLOBALS['TCA'][$table]['types'] ['menu_pages'];
    },
    'angelshop',
    'tt_content'
);
