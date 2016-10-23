<?php

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>,
 */

if ( ! defined('TYPO3_MODE')) {
    die( 'Access denied.' );
}


$newTtContentColumns = [
    'tx_abatemplate_product_stock'                  => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_stock',
        'config'  => [
            'type'    => 'check',
            'default' => '0'
        ]
    ],
    'tx_abatemplate_product_price'                  => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_price',
        'config'  => [
            'type' => 'input',
            'size' => '20',

        ]
    ],
    'tx_abatemplate_product_manufacturer_name'      => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_manufacturer_name',
        'config'  => [
            'type' => 'input',
            'size' => '40',

        ]
    ],
    'tx_abatemplate_product_old_price'              => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_old_price',
        'config'  => [
            'type' => 'input',
            'size' => '20',
        ]
    ],
    'tx_abatemplate_product_additional_description' => [
        'exclude'       => 1,
        'label'         => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_additional_description',
        'config'        => [
            'type' => 'text',
            'cols' => '40',
            'rows' => '6'
        ],
        'defaultExtras' => 'richtext[]'
    ],
    'tx_angelshop_cognizance'                       => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_cognizance',
        'config'  => [
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ],
    ],
    'tx_angelshop_owner'                            => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_owner',
        'config'  => [
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ],
    ],
    'tx_angelshop_sales_tax_indicator'              => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_sales_tax_indicator',
        'config'  => [
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ],
    ],
    'tx_angelshop_opentime'                         => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_opentime',
        'config'  => [
            'type' => 'text',
            'row'  => '5',
            'cols' => '30',
            'eval' => 'trim',
        ],
    ],
    'tx_angelshop_address'                          => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_address',
        'config'  => [
            'type' => 'text',
            'row'  => '5',
            'cols' => '30',
            'eval' => 'trim',
        ],
    ],
    'tx_angelshop_phone'                            => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_phone',
        'config'  => [
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ],
    ],
    'tx_angelshop_email'                            => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_email',
        'config'  => [
            'type'    => 'input',
            'size'    => '30',
            'eval'    => 'trim',
            'wizards' => [
                'link' => [
                    'type'         => 'popup',
                    'title'        => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                    'icon'         => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                    'module'       => [
                        'name' => 'wizard_link',
                    ],
                    'params'       => [
                        'blindLinkOptions' => 'url,spec,folder,media,page,file',
                        'blindLinkFields'  => 'class,params,title'
                    ],
                    'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1'
                ]
            ],
            'softref' => 'typolink'
        ],
    ],
    'tx_angelshop_title'                            => [
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_title',
        'config'  => [
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ],
    ],
    'tx_angelshop_link'                             => [
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_link',
        'config'  => [
            'type'    => 'input',
            'size'    => 50,
            'max'     => 1024,
            'eval'    => 'trim',
            'wizards' => [
                'link' => [
                    'type'         => 'popup',
                    'title'        => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                    'icon'         => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                    'module'       => [
                        'name' => 'wizard_link',
                    ],
                    'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                ]
            ],
            'softref' => 'typolink'
        ]
    ],
    'tx_angelshop_fontawesome'                      => [
        'exclude'     => 0,
        'displayCond' => [
            'OR' => [
                'FIELD:layout:=:1',
                'FIELD:CType:=:tx_impressum',
            ],
        ],
        'label'       => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_fontawesome',
        'config'      => [
            'type'          => 'inline',
            'foreign_table' => 'tx_angelshop_domain_model_fontawesome',
            'foreign_field' => 'record',
        ]
    ],
    'tx_angelshop_trader'                           => [
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_trader',
        'config'  => [
            'type'          => 'inline',
            'foreign_table' => 'tx_angelshop_domain_model_trader',
            'foreign_field' => 'record',
        ]
    ],
    'tx_angelshop_tab'                              => [
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_tab',
        'config'  => [
            'type'          => 'inline',
            'foreign_table' => 'tx_angelshop_domain_model_tab',
            'foreign_field' => 'record',
        ]
    ],
    'tx_angelshop_map_small'                        => [
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small',
        'config'  => [
            'type'    => 'check',
            'default' => 0
        ]
    ],
    'subheader'                                     => [
        'exclude'     => 0,
        'displayCond' => [
            'OR' => [
                'FIELD:CType:=:tx_impressum',
                'FIELD:CType:=:tx_service',
            ],
        ],
        'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.subheader',
        'config'      => [
            'type'    => 'input',
            'size'    => '50',
            'max'     => '255',
            'softref' => 'email[subst]'
        ]
    ],
    'tx_angelshop_class'                            => [
        'exclude'     => 0,
        'displayCond' => [
            'OR' => [
                'FIELD:layout:=:4',
                'FIELD:CType:=:tx_service',
            ],
        ],
        'label'       => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_class',
        'config'      => [
            'type'  => 'select',
            'items' => $GLOBALS['TYPO3_CONF_VARS']['FONT_AWESOME'],
        ],
    ],
    'tx_angelshop_salutation'                       => [
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_salutation',
        'config'  => [
            'type'  => 'select',
            'items' => [
                [
                    'Eigene Überschrift', 0
                ],
                [
                    'Hallo "Vorname"',1
                ],
                [
                    'Sehr geehrte/r Frau/Herr',2
                ]
            ]
        ],
    ],
    'tx_angelshop_movement'                         => [
        'exclude'     => 0,
        'displayCond' => [
            'OR' => [
                'FIELD:layout:=:4',
                'FIELD:CType:=:tx_service',
            ],
        ],
        'label'       => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_movement',
        'config'      => [
            'type'  => 'select',
            'items' => $GLOBALS['TYPO3_CONF_VARS']['ANIMATED'],
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['palettes']['fonts']['showitem'] = 'tx_angelshop_class,tx_angelshop_movement';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $newTtContentColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_angelshop_fontawesome', '',
    'after:header');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--palette--;;fonts,', '',
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
    'newsletter_textpic',
    'newsletter_text',
    'newsletter_image',

];
foreach ($contentelements as $contentelement) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_' . $contentelement . '.title',
            'tx_' . $contentelement,
        ],
        '',
        'after'
    );
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:ce_product.title',
        'ce_product',
    ],
    'textmedia',
    'after'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:angelshop_product.title',
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

$GLOBALS['TCA']['tt_content']['types'] ['tx_impressum'] = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,tx_angelshop_map_small,image;Logo,
          header;Name,tx_angelshop_owner,tx_angelshop_address,tx_angelshop_phone,subheader;Mobil,tx_angelshop_email,
          tx_angelshop_cognizance,tx_angelshop_sales_tax_indicator,tx_angelshop_opentime,
          tx_angelshop_fontawesome;Social Links,' . $commonFields
];

$GLOBALS['TCA']['tt_content']['types'] ['tx_slider'] = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields
];

$GLOBALS['TCA']['tt_content']['types'] ['tx_gallery']        = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields
];
$GLOBALS['TCA']['tt_content']['types'] ['angelshop_product'] = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
];

$GLOBALS['TCA']['tt_content']['types'] ['tx_trader_slider'] = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,tx_angelshop_trader,' . $commonFields

];
$GLOBALS['TCA']['tt_content']['types'] ['tx_service']       = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header,subheader;Buttontext,header_link;Buttonlink,--palette--;;fonts,bodytext,' . $commonFields
];
$GLOBALS['TCA']['tt_content']['types'] ['tx_tab']           = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,tx_angelshop_tab,' . $commonFields
];

$GLOBALS['TCA']['tt_content']['types']['ce_product'] = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header, tx_abatemplate_product_stock, image, bodytext;;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
        tx_abatemplate_product_additional_description, tx_abatemplate_product_price,tx_abatemplate_product_old_price,tx_abatemplate_product_manufacturer_name,' . $commonFields

];

$GLOBALS['TCA']['tt_content']['types'] ['tx_newsletter_image']   = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        image,' . $commonFields
];
$GLOBALS['TCA']['tt_content']['types'] ['tx_newsletter_text']    = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header,tx_angelshop_salutation, subtitle ,bodytext;;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],' . $commonFields
];
$GLOBALS['TCA']['tt_content']['types'] ['tx_newsletter_textpic'] = [
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header, tx_angelshop_salutation, image, bodytext;;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],' . $commonFields
];

$GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] = 'layout';
