<?php
/**
 * Created by PhpStorm.
 * User: michi
 * Date: 29.06.2019
 * Time: 23:28
 */

namespace MB\Angelshop\Controller;

use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Page\PageRepository;

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
     *
     */
    public function showAction()
    {
        $page = $this->pageRepository->getPage(GeneralUtility::_GP('id'));
        $files = $this->fileRepository->findByRelation('pages', 'media', $page['uid']);
        $this->view->assignMultiple([
            'page' => $page,
            'files' => $files
        ]);
    }
}