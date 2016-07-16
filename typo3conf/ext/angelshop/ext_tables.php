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
        'Teaserrow',
        'TeaserRow'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'MB.' . $extensionKey,
        'Fullwidthvideo',
        'Video'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript',
        'angelshop');


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_angelshop_domain_model_gallery',
        'EXT:angelshop/Resources/Private/Language/locallang_csh_tx_angelshop_domain_model_gallery.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_angelshop_domain_model_gallery');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_angelshop_domain_model_teaserrow',
        'EXT:angelshop/Resources/Private/Language/locallang_csh_tx_angelshop_domain_model_teaserrow.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_angelshop_domain_model_teaserrow');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_angelshop_domain_model_fontawesome',
        'EXT:angelshop/Resources/Private/Language/locallang_csh_tx_angelshop_domain_model_fontawesome.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_angelshop_domain_model_fontawesome');

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['angelshop']
        = \MB\Angelshop\Hooks\AngelshopPreviewRenderer::class;

};
$boot($_EXTKEY);
unset($boot);