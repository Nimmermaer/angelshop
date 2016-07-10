<?php
if ( ! defined( 'TYPO3_MODE' ) ) {
	die( 'Access denied.' );
}

$boot = function ( $extensionKey ) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'MB.' . $extensionKey,
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
		'MB.' . $extensionKey,
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
		'MB.' . $extensionKey,
		'Fullwidthvideo',
		array(
			'Video' => 'show',

		),
		// non-cacheable actions
		array(
			'Video' => 'show',

		)
	);
	if ( TYPO3_MODE === 'BE' ) {
		$backendLayoutFileProviderDirectory = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
			'EXT:angelshop/Configuration/TypoScript/Setup/Backendlayouts'
		);
		$beFiles                            = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir( $backendLayoutFileProviderDirectory, 'ts' );
		foreach ( $beFiles as $beLayoutFileName ) {
			$beLayoutPath = $backendLayoutFileProviderDirectory . DIRECTORY_SEPARATOR . $beLayoutFileName;
			\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( file_get_contents( $beLayoutPath ) );
		}
	}

};

$boot( $_EXTKEY );
unset( $boot );