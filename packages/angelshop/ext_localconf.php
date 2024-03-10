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

    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['angelshop']['ANIMATED'] = [
        ['Keine Bewegung', 0],
        ['Drehen', 'fa-spin'],
        ['Pulsieren', 'fa-pulse'],
    ];
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['angelshop']['FONT_AWESOME'] = [
        ['Kein Icon', 0],
        ['Facebook', 'fa-facebook-square'],
        ['Messer und Gabel', 'fa-cutlery'],
        ['Zitrone', 'fa-lemon-o'],
        ['Xing', 'fa-xing-square'],
        ['Geschenk', 'fa-gift'],
        ['Check', 'fa-check'],
        ['Kompass', 'fa-compass'],
        ['Twitter', 'fa-twitter-square'],
        ['linkedIn', 'fa-linkedin-square'],
        ['Baum', 'fa-tree'],
        ['Auto', 'fa-car'],
        ['Kalender', 'fa-calendar-check-o'],
        ['Google +', 'fa-google-plus-square'],
        ['Einkaufstasche', 'fa-shopping-bag'],
        ['Buch', 'fa-book'],
        ['Kommentare', 'fa-comments'],
        ['Foto', 'fa-picture-o'],
        ['Telefon', 'fa-phone-square'],
        ['Schiff', 'fa-ship'],
        ['Gruppe', 'fa-users'],
        ['Stift', 'fa-pencil'],
        ['Kamera', 'fa-camera'],
        ['Papierflieger', 'fa-paper-plane-o'],
        ['Ausgefuelltes Herz', 'fa-heart'],
        ['Leeres Herz', 'fa-heart-o'],
        ['Youtube', 'fa-youtube'],
        ['Youtube', 'fa-youtube'],
        ['Vimeo', 'fa-vimeo'],
        ['Zahnrad', 'fa-cog'],
        ['Amazon', 'fa-amazon'],
        ['Lizard Hand', 'fa-hand-lizard-o'],
        ['Zeigende Hand nach unten', 'fa fa-hand-o-down'],
        ['Zeigende Hand nach links', 'fa-hand-o-left'],
        ['Zeigende Hand nach rechts', 'fa-hand-o-right'],
        ['Zeigende Hand nach oben', 'fa-hand-o-up'],
        ['Kreis mit Luecke', 'fa-circle-o-notch'],
        ['Kreis aus Punkten', 'fa-spinner'],
        ['Kreis aus Pfeilen', 'fa-refresh'],
        ['Zahnrad', 'fa-cog'],
    ];
    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
    if ($versionInformation->getMajorVersion() < 13) {
        ExtensionManagementUtility::addUserTSConfig(
            '@import "EXT:angelshop/Configuration/TypoScript/user.tsconfig"'
        );
    }
};

$boot('angelshop');
unset($boot);
