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
		'label'   => 'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tca.tt_content.tx_angelshop_link',
		'config'  => array(
			'type'  => 'select',
			'items' => array(
				array( ' --- Bitte wählen --- ', 0 ),
				'foreign_table' => 'tx_angelshop_domain_model_fontawesome',
				'minitems'      => 0,
				'maxitems'      => 1,
				'default'       => ''
			)
		)
	)
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns( 'tt_content', $newTtContentColumns );

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
	'team',
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

$GLOBALS['TCA']['tt_content']['types'] ['tx_teaser']       = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,tx_angelshop_fontawesome,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_slider']       = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,images,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields

);
$GLOBALS['TCA']['tt_content']['types'] ['tx_callToAction'] = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_service']      = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
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
$GLOBALS['TCA']['tt_content']['types'] ['tx_project']      = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_sidebarList']  = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_accordion']    = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_table']        = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);
$GLOBALS['TCA']['tt_content']['types'] ['tx_team']         = array(
	'showitem' => '
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,bodytext;;9;richtext:[*],
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,' . $commonFields
);