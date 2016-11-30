<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$boot = function ($extensionKey) {
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
        'Product',
        array(
            'Product' => 'list',

        ),
        // non-cacheable actions
        array(
            'Product' => 'list',

        ),
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
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
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MB.' . $extensionKey,
        'Newsletter',
        array(
            'Newsletter' => 'subscription, new, create , show, list',

        ),
        array(
            'Newsletter' => 'subscription, new, create , show, list',

        )
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MB.' . $extensionKey,
        'Unsubscribe',
        array(
            'Newsletter' => 'unsubscribe',

        ),
        array(
            'Newsletter' => 'unsubscribe',

        )
    );
    if (TYPO3_MODE === 'BE') {
        $backendLayoutFileProviderDirectory = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
            'EXT:angelshop/Configuration/TypoScript/Setup/Backendlayouts'
        );
        $beFiles = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir($backendLayoutFileProviderDirectory,
            'ts');
        foreach ($beFiles as $beLayoutFileName) {
            $beLayoutPath = $backendLayoutFileProviderDirectory . DIRECTORY_SEPARATOR . $beLayoutFileName;
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(file_get_contents($beLayoutPath));
        }
    }
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_address']['extender']['Address']['angelshop'] =
        'EXT:angelshop/Classes/Domain/Model/Address.php';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('MB\\Angelshop\\Property\\TypeConverter\\UploadedFileReferenceConverter');
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('MB\\Angelshop\\Property\\TypeConverter\\ObjectStorageConverter');

};

$boot($_EXTKEY);
unset($boot);
