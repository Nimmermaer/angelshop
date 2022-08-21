<?php

use TYPO3\CMS\Core\Core\Environment;

$currentApplicationContext = (string)Environment::getContext();
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' (' . (string)$currentApplicationContext . ')';

if (file_exists(realpath(dirname(__FILE__)) . '/AdditionalConfiguration.local.' . str_replace('/', '.',$currentApplicationContext) . '.php') == true) {
    include realpath(dirname(__FILE__)) . '/AdditionalConfiguration.local.' . str_replace('/', '.',$currentApplicationContext) . '.php';
} elseif (file_exists(realpath(dirname(__FILE__)) . '/AdditionalConfiguration.server.' . str_replace('/', '.',$currentApplicationContext) . '.php') == true) {
    include realpath(dirname(__FILE__)) . '/AdditionalConfiguration.server.' . str_replace('/', '.',$currentApplicationContext) . '.php';
}
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['angelshop']['ANIMATED'] = [
    [
        'Keine Bewegung',
        0

    ],
    [
        'Drehen',
        'fa-spin'

    ],
    [
        'Pulsieren',
        'fa-pulse'

    ]
];
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['angelshop']['FONT_AWESOME'] = [
    [
        'Kein Icon',
        0
    ],
    [
        'Facebook',
        'fa-facebook-square'
    ],
    [
        'Messer und Gabel',
        'fa-cutlery'
    ],
    [
        'Zitrone',
        'fa-lemon-o'
    ],
    [
        'Xing',
        'fa-xing-square'
    ],
    [
        'Geschenk',
        'fa-gift'
    ],
    [
        'Check',
        'fa-check'
    ],
    [
        'Kompass',
        'fa-compass'
    ],
    [
        'Twitter',
        'fa-twitter-square'
    ],
    [
        'linkedIn',
        'fa-linkedin-square'
    ],
    [
        'Baum',
        'fa-tree'
    ],
    [
        'Auto',
        'fa-car',
    ],
    [
        'Kalender',
        'fa-calendar-check-o'
    ],
    [
        'Google +',
        'fa-google-plus-square'
    ],
    [
        'Einkaufstasche',
        'fa-shopping-bag'
    ],
    [
        'Buch',
        'fa-book'
    ],
    [
        'Kommentare',
        'fa-comments'
    ],
    [
        'Foto',
        'fa-picture-o'
    ],
    [
        'Telefon',
        'fa-phone-square'
    ],
    [
        'Schiff',
        'fa-ship'
    ],
    [
        'Gruppe',
        'fa-users'
    ],
    [
        'Stift',
        'fa-pencil'
    ],
    [
        'Kamera',
        'fa-camera'
    ],
    [
        'Papierflieger',
        'fa-paper-plane-o'
    ],
    [
        'Ausgefuelltes Herz',
        'fa-heart'
    ],
    [
        'Leeres Herz',
        'fa-heart-o'
    ],
    [
        'Youtube',
        'fa-youtube'
    ],
    [
        'Youtube',
        'fa-youtube'
    ],
    [
        'Vimeo',
        'fa-vimeo'
    ],
    [
        'Zahnrad',
        'fa-cog'
    ],
    [
        'Amazon',
        'fa-amazon'
    ],
    [
        'Lizard Hand',
        'fa-hand-lizard-o'
    ],
    [
        'Zeigende Hand nach unten',
        'fa fa-hand-o-down'
    ],
    [
        'Zeigende Hand nach links',
        'fa-hand-o-left'
    ],
    [
        'Zeigende Hand nach rechts',
        'fa-hand-o-right'
    ],
    [
        'Zeigende Hand nach oben',
        'fa-hand-o-up'
    ],
    [
        'Kreis mit Luecke',
        'fa-circle-o-notch'
    ],
    [
        'Kreis aus Punkten',
        'fa-spinner'
    ],
    [
        'Kreis aus Pfeilen',
        'fa-refresh'
    ],
    [
        'Zahnrad',
        'fa-cog'
    ],
];
