<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Documentation\Slots\ExtensionManager;

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$boot = function ($extensionKey) {

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        ucfirst($extensionKey),
        'Product',
        [\MB\Angelshop\Controller\ProductController::class => 'list, search'],
        [\MB\Angelshop\Controller\ProductController::class => 'list, search'],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        ucfirst($extensionKey),
        'Weather',
        [\MB\Angelshop\Controller\WeatherController::class => 'show, list, forecast']
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
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'angelshop';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawHeaderHook'][$extensionKey] = \MB\Angelshop\Hooks\PageHook::class . '->renderInHeader';

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Extbase\Domain\Model\FileReference::class] = [
        'className' => \MB\Angelshop\Domain\Model\FileReference::class,
    ];
    
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['angelshop'] = 'EXT:angelshop/Configuration/RTE/Custom.yaml';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('MB\\Angelshop\\Property\\TypeConverter\\UploadedFileReferenceConverter');
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('MB\\Angelshop\\Property\\TypeConverter\\ObjectStorageConverter');

    ExtensionManagementUtility::addPageTSConfig('@import "EXT:angelshop/Configuration/TypoScript/pageTs.tsConfig"');
};

$boot('angelshop');
unset($boot);
