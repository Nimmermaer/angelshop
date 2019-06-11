<?php

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>,
 */

return [
    'ctrl' => [
        'title' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tx_angelshop_domain_model_tab',
        'label' => 'header',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => '',
        'iconfile' => 'EXT:angelshop/Resources/Public/Icons/Svg/tab.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, header, icon, text, image',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden,--palette--;;1, header, --palette--;;fonts, text, image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
        'fonts' => ['showitem' => 'icon, movement'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.uid',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0]
                ],
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_angelshop_domain_model_tab',
                'foreign_table_where' => 'AND tx_angelshop_domain_model_tab.pid=###CURRENT_PID### AND tx_angelshop_domain_model_tab.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ]
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'behaviour'=> [
                'allowLanguageSynchronization'=> true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'behaviour'=> [
                'allowLanguageSynchronization'=> true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        'text' => [
            'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.text',
            'config' => [
                'type' => 'text',
                'cols' => '40',
                'rows' => '6',
                'enableRichtext' => true,
            ],
        ],
        'header' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.header',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ]
        ],
        'image' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                ['maxitems' => 1],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'icon' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.icon',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => $GLOBALS['TYPO3_CONF_VARS']['FONT_AWESOME'],
            ],
        ],
        'movement' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.movement',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => $GLOBALS['TYPO3_CONF_VARS']['ANIMATED'],
            ],
        ],
        'record' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
