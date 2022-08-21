<?php

use MB\Angelshop\Controller\ProductController;
use MB\Angelshop\Controller\WeatherController;
use MB\Angelshop\Hooks\PageHook;
use MB\Angelshop\Property\TypeConverter\ObjectStorageConverter;
use MB\Angelshop\Property\TypeConverter\UploadedFileReferenceConverter;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (! defined('TYPO3')) {
    die('Access denied.');
}

$boot = function ($extensionKey) {
    ExtensionUtility::configurePlugin(
        ucfirst($extensionKey),
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
        ucfirst($extensionKey),
        'Weather',
        [
            WeatherController::class => 'show, list, forecast',
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'angelshop';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawHeaderHook'][$extensionKey] = PageHook::class . '->renderInHeader';

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][FileReference::class] = [
        'className' => \MB\Angelshop\Domain\Model\FileReference::class,
    ];

    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['angelshop'] = 'EXT:angelshop/Configuration/RTE/Custom.yaml';

    ExtensionUtility::registerTypeConverter(UploadedFileReferenceConverter::class);
    ExtensionUtility::registerTypeConverter(ObjectStorageConverter::class);

    $newIcons = [
        'business' => 'business',
        'gallery' => 'gallery',
        'service' => 'service',
        'tab' => 'tab',
        'productlist' => 'productlist',
        'product' => 'product',
    ];
    $iconRegistry = GeneralUtility::makeInstance(
        IconRegistry::class
    );
    foreach ($newIcons as $key => $icon) {
        $iconRegistry->registerIcon(
            $key,
            SvgIconProvider::class,
            [
                'source' => 'EXT:angelshop/Resources/Public/Icons/Svg/' . $icon . '.svg',
            ]
        );
    }
    ExtensionManagementUtility::addPageTSConfig('@import "EXT:angelshop/Configuration/PageTS/pageTs.tsconfig"');
};

$boot('angelshop');
unset($boot);
