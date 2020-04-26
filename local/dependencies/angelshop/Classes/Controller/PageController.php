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
use TYPO3\CMS\Fluid\View\StandaloneView;

/**
 * Class PageController
 * @package MB\Angelshop\Controller
 */
class PageController extends ActionController
{
    /**
     * @var PageRepository
     */
    protected $pageRepository = null;

    /**
     * @var FileRepository
     */
    protected $fileRepository = null;


    /**
     * @param PageRepository $pageRepository
     */
    public function injectPageRepository(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * @param FileRepository $fileRepository
     */
    public function injectFileRepository(FileRepository $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }


    /**
     * Render notes by single PID or PID list
     *
     * @param string $pids Single PID or comma separated list of PIDs
     * @param int|null $position null for no restriction, integer for defined position
     * @return string
     */
    public function showAction($id): string
    {
        $page = $this->pageRepository->getPage($id);
        $files = $this->fileRepository->findByRelation('pages', 'media', $page['uid']);
        if ($page) {
            $view = GeneralUtility::makeInstance(StandaloneView::class);
            $view->setTemplatePathAndFilename(GeneralUtility::getFileAbsFileName(
                'EXT:angelshop/Resources/Private/Templates/Page/Show.html'
            ));
            $view->setLayoutRootPaths(['EXT:angelshop/Resources/Private/Layouts']);
            $view->getRequest()->setControllerExtensionName('Angelshop');
            $view->assignMultiple([
                'page' => $page,
                'files' => $files
            ]);
            return $view->render();
        }

        return '';
    }
}