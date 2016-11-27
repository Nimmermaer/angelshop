<?php
namespace MB\Angelshop\Controller;


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
/**
 * Class ProductController
 * @package MB\Angelshop\Controller
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * contentRepository
     * @var \MB\Angelshop\Domain\Repository\ContentRepository
     * @inject
     */
    protected $contentRepository = null;

    /**
     *  list action
     * @return void
     */
    public function listAction()
    {
        $products = $this->contentRepository->findByContentType('ce_product');
        $this->view->assignMultiple(array(
                'products' => $products
            )
        );
    }

    /**
     *
     */
    public function editAction() {
        var_dump($this->request->getArguments());
        $product = '';
        $arguments = $this->request->getArguments('tx_angelshop_web_angelshopproductlist');

        if((int)$arguments['product']) {
            $product = $this->contentRepository->findByUid((int)$arguments['product']);
        }
        $this->view->assignMultiple(array(
                'product' => $product
            )
        );
    }

    /**
     * @param \MB\Angelshop\Domain\Model\Content $content
     *
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     */
    public function updateAction(\MB\Angelshop\Domain\Model\Content $content)
    {
        $this->addFlashMessage('Das Produkt mit dem Title: '.$content->getHeader().' wurde aktualisiert!', 'Produktaktualisierung', \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO);
        $this->contentRepository->update($content);
        $this->redirect('list');
    }
}