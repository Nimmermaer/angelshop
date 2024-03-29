<?php
/**
 * Created by PhpStorm.
 * User: michi
 * Date: 29.06.2019
 * Time: 23:28
 */

namespace MB\Angelshop\Controller;

use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Exception\InvalidExtensionNameException;
use TYPO3\CMS\Fluid\View\StandaloneView;

/**
 * Class BackendController
 * @package MB\Angelshop\Controller
 */
class BackendController
{
    protected ?FileRepository $fileRepository = null;

    protected ?PageRepository $pageRepository = null;

    public function __construct()
    {
        $this->fileRepository = GeneralUtility::makeInstance(FileRepository::class);
        $this->pageRepository = GeneralUtility::makeInstance(PageRepository::class);
    }

    /**
     * Render notes by single PID or PID list
     *
     * @throws InvalidExtensionNameException
     */
    public function showAction(int $id): string
    {
        $page = $this->pageRepository->getPage($id);
        $files = $this->fileRepository->findByRelation('pages', 'media', $page['uid']);
        if ($page !== []) {
            $view = GeneralUtility::makeInstance(StandaloneView::class);
            $view->setTemplatePathAndFilename(GeneralUtility::getFileAbsFileName(
                'EXT:angelshop/Resources/Private/Templates/Page/Show.html'
            ));
            $view->setLayoutRootPaths(['EXT:angelshop/Resources/Private/Layouts']);
            $view->getRequest()->setControllerExtensionName('Angelshop');
            $view->assignMultiple([
                'page' => $page,
                'files' => $files,
            ]);
            return $view->render();
        }

        return '';
    }
}
