<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'MB.' . $_EXTKEY,
	'Gallery',
	'Gallery'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'MB.' . $_EXTKEY,
	'Teaserrow',
	'TeaserRow'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'MB.' . $_EXTKEY,
	'Fullwidthvideo',
	'Video'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'angelshop');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_angelshop_domain_model_gallery', 'EXT:angelshop/Resources/Private/Language/locallang_csh_tx_angelshop_domain_model_gallery.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_angelshop_domain_model_gallery');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_angelshop_domain_model_teaserrow', 'EXT:angelshop/Resources/Private/Language/locallang_csh_tx_angelshop_domain_model_teaserrow.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_angelshop_domain_model_teaserrow');
