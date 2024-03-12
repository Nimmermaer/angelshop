<?php

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

$svg = [
    'business',
    'gallery',
    'map',
    'product',
    'product_box',
    'productlist',
    'service',
    'tab',
    'trader',
];
foreach ($svg as $icon) {
    $icons['angelshop-' . $icon] = [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:angelshop/Resources/Public/Icons/Svg/' . $icon . '.svg',
    ];
}
$icons['angelshop-smile'] = [
    'provider' => BitmapIconProvider::class,
    'source' => 'EXT:angelshop/Resources/Public/Icons/tx_angelshop_domain_model_fontawesome.gif',
];

$icons['angelshop-gallery'] = [
    'provider' => BitmapIconProvider::class,
    'source' => 'EXT:angelshop/Resources/Public/Icons/tx_angelshop_domain_model_gallery.gif',
];

$icons['angelshop-teaser'] = [
    'provider' => BitmapIconProvider::class,
    'source' => 'EXT:angelshop/Resources/Public/Icons/tx_angelshop_domain_model_teaserrow.gif',
];

$icons['angelshop-home'] = [
    'provider' => BitmapIconProvider::class,
    'source' => 'EXT:packages/angelshop/Resources/Public/Icons/start_template.png',
];

return $icons;
