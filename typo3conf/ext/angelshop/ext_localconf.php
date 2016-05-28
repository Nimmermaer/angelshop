<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'MB.' . $_EXTKEY,
	'Gallery',
	array(
		'Gallery' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Gallery' => 'list, show',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'MB.' . $_EXTKEY,
	'Teaserrow',
	array(
		'TeaserRow' => 'list',
		
	),
	// non-cacheable actions
	array(
		'TeaserRow' => 'list',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'MB.' . $_EXTKEY,
	'Fullwidthvideo',
	array(
		'Video' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Video' => 'show',
		
	)
);
