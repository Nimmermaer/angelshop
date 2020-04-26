<?php
/**
 * Created by PhpStorm.
 * User: michi
 * Date: 29.06.2019
 * Time: 23:27
 */

namespace MB\Angelshop\Hooks;


use MB\Angelshop\Controller\PageController;
use TYPO3\CMS\Backend\Controller\PageLayoutController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\SysNote\Controller\NoteController;
use TYPO3\CMS\SysNote\Domain\Repository\SysNoteRepository;

class PageHook
{
    /**
     * Add sys_notes as additional content to the header of the page module
     *
     * @param array $params
     * @param \TYPO3\CMS\Backend\Controller\PageLayoutController $parentObject
     * @return string
     */
    public function renderInHeader(array $params = [], PageLayoutController $parentObject)
    {
        $controller = GeneralUtility::makeInstance(PageController::class);
        return $controller->showAction($parentObject->id);
    }
}