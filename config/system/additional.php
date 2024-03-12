<?php

use TYPO3\CMS\Core\Log\Writer\FileWriter;
use TYPO3\CMS\Core\Core\Environment;
$currentApplicationContext = (string)Environment::getContext();
if (getenv('IS_DDEV_PROJECT') == 'true') {
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'FE' => [
                'disableNoCacheParameter' => 0,
                'debug' => true,
            ],
            'BE' => [
                'loginRateLimit' => 0,
            ],
            'DB' => [
                'Connections' => [
                    'Default' => [
                        'dbname' => 'db',
                        'driver' => 'mysqli',
                        'host' => 'db',
                        'password' => 'db',
                        'port' => '3306',
                        'user' => 'db',
                    ],
                ],
            ],
            'GFX' => [
                'processor' => 'ImageMagick',
                'processor_path' => '/usr/bin/',
                'processor_path_lzw' => '/usr/bin/',
            ],
            'MAIL' => [
                'transport' => 'smtp',
                'transport_smtp_encrypt' => false,
                'transport_smtp_server' => 'localhost:1025',
            ],
            'LOG' => [
                'TYPO3' => [
                    'CMS' => [
                        'deprecations' => [
                            'writerConfiguration' => [
                                'notice' => [
                                    FileWriter::class => [
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'SYS' => [
                'trustedHostsPattern' => '.*.*',
                'devIPmask' => '*',
                'displayErrors' => 1,
            ],
            'EXTCONF' => [
                'filefill'=> [
                    'storages' => [
                        1 => [
                            [
                                'identifier' => 'domain',
                                'configuration' => 'https://aba-angelshop.de',
                            ],
                            [
                                'identifier' => 'placeholder',
                            ],
                        ],
                    ]
                ]
            ]
        ]
    );
}
$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    [
        'DB' => [
            'Connections' => [
                'Default' => [
                    'dbname' => getenv('TYPO3_DB_NAME'),
                    'driver' => 'mysqli',
                    'host' => getenv('TYPO3_HOST_NAME'),
                    'password' => getenv('TYPO3_PASSWORD'),
                    'port' => '3306',
                    'user' => getenv('TYPO3_USER_NAME'),
                ],
            ],
        ],
    ],
);
