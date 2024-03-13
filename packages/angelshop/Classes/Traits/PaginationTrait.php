<?php

namespace MB\Angelshop\Traits;

use TYPO3\CMS\Backend\Template\ModuleTemplate;
use TYPO3\CMS\Core\Pagination\SlidingWindowPagination;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

trait PaginationTrait
{
    private function buildSlideWindowPagination(
        QueryResultInterface $allItems,
        ModuleTemplate $view,
        int $itemsPerPage = 10,
        int $maximumLinks = 15,
    ): ModuleTemplate {
        $currentPage = $this->request->hasArgument('currentPage')
            ? (int) $this->request->getArgument('currentPage')
            : 1;

        $paginator = new QueryResultPaginator($allItems, $currentPage, $itemsPerPage);
        $pagination = new SlidingWindowPagination($paginator, $maximumLinks);
        $view->assign('pagination', [
            'pagination' => $pagination,
            'paginator' => $paginator,
        ]);
        return $view;
    }
}
