<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$boot = function ($extensionKey) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'MB.' . $extensionKey,
        'Gallery',
        'Gallery'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'MB.' . $extensionKey,
        'Newsletter',
        'Newsletter'
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'MB.' . $extensionKey,
        'Unsubscribe',
        'Unsubscribe'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'MB.' . $extensionKey,
        'Product',
        'LLL:EXT:angelshop/Resources/Private/Language/locallang_be.xlf:tx_product_list.title'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'MB.' . $extensionKey,
        'Fullwidthvideo',
        'Video'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript',
        'angelshop');


    $tables = [
        'tx_angelshop_domain_model_fontawesome',
        'tx_angelshop_domain_model_trader',
        'tx_angelshop_domain_model_tab',
    ];

    foreach ($tables as $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr($table,
            'EXT:angelshop/Resources/Private/Language/locallang_csh_' . $table);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($table);
    }

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['angelshop']
        = \MB\Angelshop\Hooks\AngelshopPreviewRenderer::class;


    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );

    $newIcons = [
        'map' => 'EXT:angelshop/Resources/Public/Icons/Svg/map.svg',
        'business' => 'EXT:angelshop/Resources/Public/Icons/Svg/business.svg',
        'gallery' => 'EXT:angelshop/Resources/Public/Icons/Svg/gallery.svg',
        'service' => 'EXT:angelshop/Resources/Public/Icons/Svg/service.svg',
        'tab' => 'EXT:angelshop/Resources/Public/Icons/Svg/tab.svg',
        'productlist' => 'EXT:angelshop/Resources/Public/Icons/Svg/productlist.svg',
        'product' => 'EXT:angelshop/Resources/Public/Icons/Svg/product.svg',
    ];

    foreach ($newIcons as $key => $icon) {
        $iconRegistry->registerIcon(
            $key, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => $icon]
        );
    }

};
$boot($_EXTKEY);
unset($boot);