<?php
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$newIcons = [
    'map' => 'EXT:angelshop/Resources/Public/Icons/Svg/map.svg',
    'business' => 'EXT:angelshop/Resources/Public/Icons/Svg/business.svg',
    'gallery' => 'EXT:angelshop/Resources/Public/Icons/Svg/gallery.svg',
    'service' => 'EXT:angelshop/Resources/Public/Icons/Svg/service.svg',
    'tab' => 'EXT:angelshop/Resources/Public/Icons/Svg/tab.svg',
    'productlist' => 'EXT:angelshop/Resources/Public/Icons/Svg/productlist.svg',
    'product' => 'EXT:angelshop/Resources/Public/Icons/Svg/product.svg',
];
$iconRegistry = GeneralUtility::makeInstance(
    IconRegistry::class
);
foreach ($newIcons as $key => $icon) {
    $iconRegistry->registerIcon(
        $key, SvgIconProvider::class,
        ['source' => $icon]
    );
}
