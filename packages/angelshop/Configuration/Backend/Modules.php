<?php

declare(strict_types=1);
use MB\Angelshop\Controller\Backend\ProductController;

use T3docs\Examples\Controller\AdminModuleController;
use T3docs\Examples\Controller\ModuleController;

return [
    'angelshop_products' => [
        'parent' => 'web',
        'position' => [
            'after' => 'web_list',
        ],
        'access' => 'user',
        'workspaces' => 'live',
        'path' => '/module/angelshop/prouducts',
        'labels' => 'LLL:EXT:angelshop/Resources/Private/Language/Module/locallang_mod.xlf',
        'extensionName' => 'Angelshop',
        'iconIdentifier' => 'module-dbal',
        'controllerActions' => [
            ProductController::class => [
                'search', 'update', 'edit', 'list',
            ],
        ],
    ],
];
