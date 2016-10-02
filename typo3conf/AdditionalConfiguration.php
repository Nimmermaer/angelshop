<?php
if ((PHP_SAPI == 'cli') && ($_SERVER['argc'] >= 3)) {
    $APPLICATION_ENV = $_SERVER['argv'][2];
    unset($_SERVER['argv'][2]);
} else {
    $APPLICATION_ENV = getenv("APPLICATION_ENV");
}

if (file_exists(realpath(dirname(__FILE__)) . '/AdditionalConfiguration.local.' . $APPLICATION_ENV . '.php') == true) {
    include realpath(dirname(__FILE__)) . '/AdditionalConfiguration.local.' . $APPLICATION_ENV . '.php';
} elseif (file_exists(realpath(dirname(__FILE__)) . '/AdditionalConfiguration.server.' . $APPLICATION_ENV . '.php') == true) {
    include realpath(dirname(__FILE__)) . '/AdditionalConfiguration.server.' . $APPLICATION_ENV . '.php';
}

$GLOBALS['TYPO3_CONF_VARS']['FONT_AWESOME'] = [
    [
        'Kein Icon',
        0
    ],
    [
        'Facebook',
        'fa-facebook-square'
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
];
?> 
