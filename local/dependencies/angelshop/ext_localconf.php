<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Documentation\Slots\ExtensionManager;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

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
            'Product' => 'list, search',

        ),
        // non-cacheable actions
        array(
            'Product' => 'list, search',

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
        'Weather',
        array(
            'Weather' => 'show, list, forecast',

        ),
        array(
            'Weather' => '',

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
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['news']['extender']['GeorgRinger\News\Domain\Model\News']['angelshop'] =
        'EXT:angelshop/Classes/Domain/Model/News.php';
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['Angelshop']['modules']['Page']['controllers'] = [
        'Page' => [
            'actions' => ['show']
        ]
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawHeaderHook'][$extensionKey] = \MB\Angelshop\Hooks\PageHook::class . '->renderHeader';

    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['angelshop'] = 'EXT:angelshop/Configuration/RTE/Custom.yaml';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('MB\\Angelshop\\Property\\TypeConverter\\UploadedFileReferenceConverter');
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('MB\\Angelshop\\Property\\TypeConverter\\ObjectStorageConverter');

    ExtensionManagementUtility::addPageTSConfig('@import "EXT:angelshop/Configuration/TypoScript/pageTs.tsConfig"');
};

$boot($_EXTKEY);
unset($boot);
