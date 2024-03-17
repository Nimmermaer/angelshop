<?php

namespace MB\Angelshop\Controller\Backend;

use MB\Angelshop\Controller\ActionController;
use MB\Angelshop\Domain\Repository\ContentRepository;
use MB\Angelshop\Traits\PaginationTrait;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Persistence\Generic\Session;

/***************************************************************
 *  Copyright notice
 *  (c) 2016 Michael Blunck <mi.blunck@gmail.com>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

#[AsController]
class ProductController extends ActionController
{
    use PaginationTrait;

    public function __construct(
        protected readonly ?ContentRepository $contentRepository,
        protected readonly ?Session $session,
        protected readonly ModuleTemplateFactory $moduleTemplateFactory
    ) {
    }

    /**
     *  list action
     */
    public function listAction(): ResponseInterface
    {
        $products = $this->contentRepository->findByContentType('tx_angelshop_product');
        $this->view->assignMultiple([
            'products' => $products,
        ]);
        return $this->htmlResponse();
    }

    public function searchAction(): ResponseInterface
    {
        $view = $this->moduleTemplateFactory->create($this->request);
        $argument = $this->request->getArguments();

        if ($argument['searchword'] ?? false) {
            $products = $this->contentRepository->findByIndex($argument['searchword']);
            $view->assign('searchword', $argument['searchword']);
        } else {
            $products = $this->contentRepository->findByContentType('tx_angelshop_product');
        }
        $view = $this->buildSlideWindowPagination($products, view: $view);
        return $view->renderResponse();
    }
}
