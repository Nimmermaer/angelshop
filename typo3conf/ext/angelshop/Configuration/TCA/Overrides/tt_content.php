<?php

if ( ! defined( 'TYPO3_MODE' ) ) {
	die( 'Access denied.' );
}


$newTtContentColumns = array(
	'tx_angelshop_title'       => array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_title',
		'config'  => array(
			'type' => 'input',
			'size' => '20',
			'eval' => 'trim',
		),
	),
	'tx_angelshop_link'        => array(
		'exclude' => 1,
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
	'tx_angelshop_fontawesome' => array(
		'exclude' => 1,
		'displayCond' => 'FIELD:layout:=:1',
		'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_fontawesome',
		'config'  => array(
			'type'  => 'inline',
			'foreign_table' => 'tx_angelshop_domain_model_fontawesome',
			'foreign_field' => 'record',
		)
	),
	'subheader' => array(
		'exclude' => 1,
		'displayCond' =>'FIELD:CType:=:tx_service',
		'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.subheader',
		'config' => array(
			'type' => 'input',
			'size' => '50',
			'max' => '255',
			'softref' => 'email[subst]'
		)
	),
	'tx_angelshop_class' => array(
		'exclude' => 1,
		'displayCond' =>array(
			'OR' => array(
				'FIELD:layout:=:4',
				'FIELD:CType:=:tx_service',
			),
		),
		'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_class',
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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns( 'tt_content', $newTtContentColumns );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_angelshop_fontawesome', '', 'after:header');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_angelshop_class', '', 'after:header');

$contentelements = array(
	'slider',
	'teaser',
	'callToAction',
	'service',
	'tab',
	'serviceList',
	'impressum',
	'project',
	'table',
	'accordion',
	'sidebarList'
);
foreach ( $contentelements as $contentelement ) {
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

$commonFields = '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';

$GLOBALS['TCA']['tt_content']['types'] ['tx_slider']       = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,image,' . $commonFields

);
$GLOBALS['TCA']['tt_content']['types'] ['tx_service']      = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         header,subheader;Buttontext,header_link;Buttonlink,tx_angelshop_class,bodytext,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_tab']          = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_serviceList']  = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_impressum']    = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_sidebarList']  = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);

$GLOBALS['TCA']['tt_content']['types'] ['tx_table']        = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);

$GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] = 'layout';