<?php

namespace MB\Angelshop\Utility;

class Container
{
    final public const CONFIGURATION = [
        'b13-accordion' => [
            'colPos' => [
                201 => [
                    'allowed' => [
                        'CType' => 'b13-accordion-item',
                    ],
                ],
            ],
            'customLangKey' => true,
            'containerIcon' => 'content-container-columns-1',
        ],
        'b13-fullwidth' => [
            'colPos' => [
                201 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
            ],
            'customLangKey' => true,
            'containerIcon' => 'content-container-columns-1',
        ],
        'b13-accordion-item' => [
            'colPos' => [
                201 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
            ],
            'customLangKey' => true,
            'containerIcon' => 'form-gridcolumn',
        ],
        'b13-50-50' => [
            'colPos' => [
                201 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
                202 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
            ],
            'containerIcon' => 'content-container-columns-2',
        ],
        'b13-40-80' => [
            'colPos' => [
                201 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
                202 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
            ],
            'customLangKey' => true,
            'containerIcon' => 'content-container-columns-2',
        ],
        'b13-80-40' => [
            'colPos' => [
                201 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
                202 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
            ],
            'customLangKey' => true,
            'containerIcon' => 'content-container-columns-2-left',
        ],
        'b13-40-40-40' => [
            'colPos' => [
                201 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
                202 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
                203 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
            ],
            'customLangKey' => true,
            'containerIcon' => 'content-container-columns-3',
        ],
        'b13-30-30-30-30' => [
            'colPos' => [
                201 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
                202 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
                203 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
                204 => [
                    'allowed' => [
                        'CType' => '*',
                    ],
                ],
            ],
            'customLangKey' => true,
            'containerIcon' => 'content-container-columns-3',
        ],
    ];
}
