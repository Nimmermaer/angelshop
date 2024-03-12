<?php

use MB\Angelshop\Controller\ProductController;
use MB\Angelshop\Controller\SearchController;
use MB\Angelshop\Controller\WeatherController;
use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (! defined('TYPO3')) {
    die('Access denied.');
}

$boot = static function ($extensionKey): void {
    ExtensionUtility::configurePlugin(
        ucfirst((string) $extensionKey),
        'Product',
        [
            ProductController::class => 'list, search',
        ],
        [
            ProductController::class => 'list, search',
        ],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    ExtensionUtility::configurePlugin(
        ucfirst((string) $extensionKey),
        'WeatherShow',
        [
            WeatherController::class => 'show, list',
        ]
    );

    ExtensionUtility::configurePlugin(
        ucfirst((string) $extensionKey),
        'WeatherForecast',
        [
            WeatherController::class => 'forecast',
        ]
    );

    ExtensionUtility::configurePlugin(
        ucfirst((string) $extensionKey),
        'Search',
        [
            SearchController::class => 'search',
        ],
        [
            SearchController::class => 'search',
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'angelshop';

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][FileReference::class] = [
        'className' => \MB\Angelshop\Domain\Model\FileReference::class,
    ];

    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['angelshop'] = 'EXT:angelshop/Configuration/RTE/Custom.yaml';

    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
    if ($versionInformation->getMajorVersion() < 13) {
        ExtensionManagementUtility::addUserTSConfig(
            '@import "EXT:angelshop/Configuration/TypoScript/user.tsconfig"'
        );
    }
};

$boot('angelshop');
unset($boot);
