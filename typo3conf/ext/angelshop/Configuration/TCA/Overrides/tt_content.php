<?php

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>,
 */

if ( ! defined('TYPO3_MODE')) {
    die( 'Access denied.' );
}


$newTtContentColumns = array(
    'tx_abatemplate_product_stock'                  => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_stock',
        'config'  => array(
            'type'    => 'check',
            'default' => '0'
        )
    ),
    'tx_abatemplate_product_price'                  => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_price',
        'config'  => array(
            'type' => 'input',
            'size' => '20',

        )
    ),
    'tx_abatemplate_product_manufacturer_name'      => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_manufacturer_name',
        'config'  => array(
            'type' => 'input',
            'size' => '40',

        )
    ),
    'tx_abatemplate_product_old_price'              => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_old_price',
        'config'  => array(
            'type' => 'input',
            'size' => '20',
        )
    ),
    'tx_abatemplate_product_additional_description' => array(
        'exclude'       => 1,
        'label'         => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tt_content.tx_abatemplate_product_additional_description',
        'config'        => array(
            'type' => 'text',
            'cols' => '40',
            'rows' => '6'
        ),
        'defaultExtras' => 'richtext[]'
    ),
    'tx_angelshop_cognizance'                       => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_cognizance',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ),
    ),
    'tx_angelshop_owner'                            => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_owner',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ),
    ),
    'tx_angelshop_sales_tax_indicator'              => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_sales_tax_indicator',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ),
    ),
    'tx_angelshop_opentime'                         => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_opentime',
        'config'  => array(
            'type' => 'text',
            'row'  => '5',
            'cols' => '30',
            'eval' => 'trim',
        ),
    ),
    'tx_angelshop_address'                          => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_address',
        'config'  => array(
            'type' => 'text',
            'row'  => '5',
            'cols' => '30',
            'eval' => 'trim',
        ),
    ),
    'tx_angelshop_phone'                            => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_phone',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ),
    ),
    'tx_angelshop_email'                            => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_email',
        'config'  => array(
            'type'    => 'input',
            'size'    => '30',
            'eval'    => 'trim',
            'wizards' => array(
                'link' => array(
                    'type'         => 'popup',
                    'title'        => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                    'icon'         => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                    'module'       => array(
                        'name' => 'wizard_link',
                    ),
                    'params'       => Array(
                        'blindLinkOptions' => 'url,spec,folder,media,page,file',
                        'blindLinkFields'  => 'class,params,title'
                    ),
                    'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1'
                )
            ),
            'softref' => 'typolink'
        ),
    ),
    'tx_angelshop_title'                            => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_title',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        ),
    ),
    'tx_angelshop_link'                             => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_link',
        'config'  => array(
            'type'    => 'input',
            'size'    => 50,
            'max'     => 1024,
            'eval'    => 'trim',
            'wizards' => array(
                'link' => array(
                    'type'         => 'popup',
                    'title'        => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                    'icon'         => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                    'module'       => array(
                        'name' => 'wizard_link',
                    ),
                    'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                )
            ),
            'softref' => 'typolink'
        )
    ),
    'tx_angelshop_fontawesome'                      => array(
        'exclude'     => 0,
        'displayCond' => array(
            'OR' => array(
                'FIELD:layout:=:1',
                'FIELD:CType:=:tx_impressum',
            ),
        ),
        'label'       => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_fontawesome',
        'config'      => array(
            'type'          => 'inline',
            'foreign_table' => 'tx_angelshop_domain_model_fontawesome',
            'foreign_field' => 'record',
        )
    ),
    'tx_angelshop_trader'                           => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_trader',
        'config'  => array(
            'type'          => 'inline',
            'foreign_table' => 'tx_angelshop_domain_model_trader',
            'foreign_field' => 'record',
        )
    ),
    'tx_angelshop_tab'                              => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_tab',
        'config'  => array(
            'type'          => 'inline',
            'foreign_table' => 'tx_angelshop_domain_model_tab',
            'foreign_field' => 'record',
        )
    ),
    'tx_angelshop_map_small'                        => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_map_small',
        'config'  => array(
            'type'    => 'check',
            'default' => 0
        )
    ),
    'subheader'                                     => array(
        'exclude'     => 0,
        'displayCond' => array(
            'OR' => array(
                'FIELD:CType:=:tx_impressum',
                'FIELD:CType:=:tx_service',
            ),
        ),
        'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.subheader',
        'config'      => array(
            'type'    => 'input',
            'size'    => '50',
            'max'     => '255',
            'softref' => 'email[subst]'
        )
    ),
    'tx_angelshop_class'                            => array(
        'exclude'     => 0,
        'displayCond' => array(
            'OR' => array(
                'FIELD:layout:=:4',
                'FIELD:CType:=:tx_service',
            ),
        ),
        'label'       => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_class',
        'config'      => array(
            'type'  => 'select',
            'items' => array(
                array(
                    'Kein Icon',
                    0
                ),
                array(
                    'Facebook',
                    'fa-facebook-square'
                ),
                array(
                    'Xing',
                    'fa-xing-square'
                ),
                array(
                    'Geschenk',
                    'fa-gift'
                ),
                array(
                    'Check',
                    'fa-check'
                ),
                array(
                    'Kompass',
                    'fa-compass'
                ),
                array(
                    'Twitter',
                    'fa-twitter-square'
                ),
                array(
                    'linkedIn',
                    'fa-linkedin-square'
                ),
                array(
                    'Baum',
                    'fa-tree'
                ),
                array(
                    'Auto',
                    'fa-car',
                ),
                array(
                    'Kalender',
                    'fa-calendar-check-o'
                ),
                array(
                    'Google +',
                    'fa-google-plus-square'
                ),
                array(
                    'Einkaufstasche',
                    'fa-shopping-bag'
                ),
                array(
                    'Buch',
                    'fa-book'
                ),
                array(
                    'Kommentare',
                    'fa-comments'
                ),
                array(
                    'Foto',
                    'fa-picture-o'
                ),
                array(
                    'Telefon',
                    'fa-phone-square'
                ),
                array(
                    'Schiff',
                    'fa-ship'
                ),
                array(
                    'Gruppe',
                    'fa-users'
                ),
                array(
                    'Stift',
                    'fa-pencil'
                ),
                array(
                    'Kamera',
                    'fa-camera'
                ),
                array(
                    'Papierflieger',
                    'fa-paper-plane-o'
                ),
            ),
        ),
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $newTtContentColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_angelshop_fontawesome', '',
    'after:header');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_angelshop_class', '',
    'after:header');

$contentelements = array(
    'slider',
    'trader_slider',
    'teaser',
    'service',
    'tab',
    'serviceList',
    'impressum',
    'project',
    'gallery',

);
foreach ($contentelements as $contentelement) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_' . $contentelement . '.title',
            'tx_' . $contentelement,
        ],
        'textmedia',
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

$GLOBALS['TCA']['tt_content']['types'] ['tx_impressum'] = array(
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,tx_angelshop_map_small,image;Logo,
          header;Name,tx_angelshop_owner,tx_angelshop_address,tx_angelshop_phone,subheader;Mobil,tx_angelshop_email,
          tx_angelshop_cognizance,tx_angelshop_sales_tax_indicator,tx_angelshop_opentime,
          tx_angelshop_fontawesome;Social Links,' . $commonFields
);

$GLOBALS['TCA']['tt_content']['types'] ['tx_slider'] = array(
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields
);

$GLOBALS['TCA']['tt_content']['types'] ['tx_gallery']        = array(
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['angelshop_product'] = array(
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);

$GLOBALS['TCA']['tt_content']['types'] ['tx_trader_slider'] = array(
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,tx_angelshop_trader,' . $commonFields

);
$GLOBALS['TCA']['tt_content']['types'] ['tx_service']       = array(
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header,subheader;Buttontext,header_link;Buttonlink,tx_angelshop_class,bodytext,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_tab']           = array(
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,tx_angelshop_tab,' . $commonFields
);

$GLOBALS['TCA']['tt_content']['types']['ce_product'] = array(
    'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header, tx_abatemplate_product_stock, image, bodytext;;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
        tx_abatemplate_product_additional_description, tx_abatemplate_product_price,tx_abatemplate_product_old_price,tx_abatemplate_product_manufacturer_name,' . $commonFields

);


$GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] = 'layout';