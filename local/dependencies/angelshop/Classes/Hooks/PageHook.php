<?php
/**
 * Created by PhpStorm.
 * User: michi
 * Date: 29.06.2019
 * Time: 23:27
 */

namespace MB\Angelshop\Hooks;


class PageHook
{
    /**
     * @var array
     */
    protected $extbaseConfiguration = [
        'vendorName' => 'MB',
        'extensionName' => 'Angelshop',
        'pluginName' => 'Page',
    ];

    /**
     * @param $vendorName
     * @param $extensionName
     * @param $pluginName
     */
    public function overrideConfiguration($vendorName, $extensionName, $pluginName)
    {
        $this->extbaseConfiguration =
            [
                'vendorName' => $vendorName,
                'extensionName' => $extensionName,
                'pluginName' => $pluginName,
            ];
    }

    /**
     * @param array $params
     * @param \TYPO3\CMS\Backend\Controller\PageLayoutController $parentObject
     * @return string
     */
    public function renderHeader(array $params = [], \TYPO3\CMS\Backend\Controller\PageLayoutController $parentObject)
    {
        /** @var $bootstrap \TYPO3\CMS\Extbase\Core\Bootstrap */
        $bootstrap = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Core\Bootstrap::class);
        return $bootstrap->run('', $this->extbaseConfiguration);
    }
}