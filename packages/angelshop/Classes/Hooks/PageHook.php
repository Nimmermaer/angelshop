<?php
/**
 * Created by PhpStorm.
 * User: michi
 * Date: 29.06.2019
 * Time: 23:27
 */

namespace MB\Angelshop\Hooks;

use MB\Angelshop\Controller\BackendController;
use TYPO3\CMS\Backend\Controller\PageLayoutController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Exception\InvalidExtensionNameException;

class PageHook
{
    /**
     * @throws InvalidExtensionNameException
     */
    public function renderInHeader(array $params = [], PageLayoutController $parentObject): string
    {
        $controller = GeneralUtility::makeInstance(BackendController::class);
        return $controller->showAction($parentObject->id);
    }
}
