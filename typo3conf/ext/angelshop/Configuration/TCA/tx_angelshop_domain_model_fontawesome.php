<?php
return array(
	'ctrl'      => array(
		'title'                    => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_db.xlf:tx_angelshop_domain_model_fontawesome',
		'label'                    => 'title',
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
		'searchFields'             => 'title',
		'iconfile'                 => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( 'angelshop' ) . 'Resources/Public/Icons/tx_angelshop_domain_model_fontawesome.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title,class,link,',
	),
	'types'     => array(
		'1' => array( 'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1,title,class,link, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime' ),
	),
	'palettes'  => array(
		'1' => array( 'showitem' => '' ),
	),
	'columns'   => array(

		'sys_language_uid' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config'  => array(
				'type'                => 'select',
				'renderType'          => 'selectSingle',
				'foreign_table'       => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items'               => array(
					array( 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', - 1 ),
					array( 'LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0 )
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
					array( '', 0 ),
				),
				'foreign_table'       => 'tx_angelshop_domain_model_fontawesome',
				'foreign_table_where' => 'AND tx_angelshop_domain_model_fontawesome.pid=###CURRENT_PID### AND tx_angelshop_domain_model_fontawesome.sys_language_uid IN (-1,0)',
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
					'lower' => mktime( 0, 0, 0, date( 'm' ), date( 'd' ), date( 'Y' ) )
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
					'lower' => mktime( 0, 0, 0, date( 'm' ), date( 'd' ), date( 'Y' ) )
				),
			),
		),
		'title'            => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_fontawesome.tx_angelshop_title',
			'config'  => array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim',
			),
		),
		'class'            => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_angelshop_domain_model_fontawesome.class',
			'config'  => array(
				'type'    => 'select',
				'items'   => array(
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
						'fa-fw fa-gift'
					),
					array(
						'Check',
						'fa-fw fa-check'
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
		'link'             => array(
			'label'   => 'LLL:EXT:cms/locallang_ttc.xlf:header_link',
			'exclude' => 1,
			'config'  => array(
				'type'    => 'input',
				'size'    => '50',
				'max'     => '256',
				'eval'    => 'trim',
				'wizards' => array(
					'link' => array(
						'type'         => 'popup',
						'title'        => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
						'icon'         => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
						'module'       => array(
							'name' => 'wizard_link',
						),
						'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1'
					)
				),
				'softref' => 'typolink'
			)
		),
	),
);