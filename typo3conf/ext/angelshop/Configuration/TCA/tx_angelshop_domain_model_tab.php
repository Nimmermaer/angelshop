<?php

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>,
 */

return array(
    'ctrl'      => array(
        'title'                    => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tx_angelshop_domain_model_tab',
        'label'                    => 'header',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'dividers2tabs'            => true,
        'versioningWS'             => 2,
        'versioning_followPages'   => true,
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete'                   => 'deleted',
        'enablecolumns'            => array(
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ),
        'searchFields'             => '',
        'iconfile'                 => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('angelshop') . 'Resources/Public/Icons/Svg/tab.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, header, icon, text, image',
    ),
    'types'     => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, header, icon, text, image,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
    ),
    'palettes'  => array(
        '1' => array('showitem' => ''),
    ),
    'columns'   => array(

        'sys_language_uid' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config'  => array(
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.uid',
                'items'               => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', - 1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent'      => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config'      => array(
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'items'               => array(
                    array('', 0),
                ),
                'foreign_table'       => 'tx_angelshop_domain_model_tab',
                'foreign_table_where' => 'AND tx_angelshop_domain_model_tab.pid=###CURRENT_PID### AND tx_angelshop_domain_model_tab.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource'  => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label'      => array(
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max'  => 255,
            )
        ),
        'hidden'           => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config'  => array(
                'type' => 'check',
            ),
        ),
        'starttime'        => array(
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config'    => array(
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime'          => array(
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config'    => array(
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'text'             => array(
            'label'         => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.text',
            'config'        => array(
                'type' => 'text',
                'cols' => '40',
                'rows' => '6'
            ),
            'defaultExtras' => 'richtext[]'
        ),
        'header'           => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.header',
            'config'  => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            )
        ),
        'image'            => array(
            'exclude' => 0,
            'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.image',
            'config'  => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                array('maxitems' => 1),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ),
        'icon'             => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_tab.icon',
            'config'  => array(
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
        'record'           => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
    ),
);