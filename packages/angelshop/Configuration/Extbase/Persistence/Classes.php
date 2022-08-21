<?php
declare(strict_types=1);

use GeorgRinger\News\Domain\Model\News;
use MB\Angelshop\Domain\Model\Content;
use MB\Angelshop\Domain\Model\FileReference;

return [
    News::class => [
        'tableName' => 'tx_news_domain_model_news',
        'properties' => [
            'recipe' => [
                'fieldName' => 'tx_angelshop_news_recipe'
            ],
            'icon' => [
                'fieldName' => 'tx_angelshop_news_icon'
            ],
            'ingredient' => [
                'fieldName' => 'tx_angelshop_news_ingredient'
            ],
        ],
    ],
    FileReference::class => [
        'tableName' => 'sys_file_reference',
        'properties' => [
            'originalFileIdentifier' => [
                'fieldName' => 'uid_local'
            ],
        ],
    ],
    Content::class => [
        'tableName' => 'tt_content',
        'properties' => [
            'uid' => [
                'fieldName' => 'uid'
            ],
            'hidden' => [
                'fieldName' => 'hidden'
            ],
            'pid' => [
                'fieldName' => 'pid'
            ],
            'sorting' => [
                'fieldName' => 'sorting'
            ],
            'contentType' => [
                'fieldName' => 'CType'
            ],
            'header' => [
                'fieldName' => 'header'
            ],
            'product' => [
                'fieldName' => 'tx_abatemplate_product'
            ],
            'stock' => [
                'fieldName' => 'tx_abatemplate_product_stock'
            ],
            'additionalDescription' => [
                'fieldName' => 'tx_abatemplate_product_additional_description'
            ],
            'price' => [
                'fieldName' => 'tx_abatemplate_product_price'
            ],
            'oldPrice' => [
                'fieldName' => 'tx_abatemplate_product_old_price'
            ],
            'manufacturer' => [
                'fieldName' => 'tx_abatemplate_product_manufacturer_name'
            ],
            'imageCollection' => [
                'fieldName' => 'tx_angelshop_image_collection'
            ],
        ],
    ],
];
