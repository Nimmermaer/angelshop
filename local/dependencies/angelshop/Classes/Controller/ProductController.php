<?php

namespace MB\Angelshop\Controller;


use MB\Angelshop\Domain\Repository\ContentRepository;
use TYPO3\CMS\Extbase\Persistence\Generic\Session;
use TYPO3\CMS\Extbase\Mvc\Exception\NoSuchArgumentException;
use MB\Angelshop\Domain\Model\Content;
use TYPO3\CMS\Extbase\Mvc\Exception\StopActionException;
use TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException;
use TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException;
use TYPO3\CMS\Core\Messaging\AbstractMessage;
use TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException;
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

use MB\Angelshop\Property\TypeConverter\UploadedFileReferenceConverter;
use TYPO3\CMS\Extbase\Property\PropertyMappingConfiguration;

/**
 * Class ProductController
 * @package MB\Angelshop\Controller
 */
class ProductController extends ActionController
{


    /**
     * contentRepository
     * @var ContentRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $contentRepository = null;
    /**
     * @var Session
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $session;

    /**
     * Set TypeConverter option for image upload
     */
    public function initializeCreateAction()
    {
        $this->setTypeConverterConfigurationForImageUpload('content');
    }

    /**
     * @param $argumentName
     */
    protected function setTypeConverterConfigurationForImageUpload($argumentName)
    {
        $uploadConfiguration = [
            UploadedFileReferenceConverter::CONFIGURATION_ALLOWED_FILE_EXTENSIONS => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
            UploadedFileReferenceConverter::CONFIGURATION_UPLOAD_FOLDER => '1:/content/',
        ];
        /** @var PropertyMappingConfiguration $newProductConfiguration */
        $newProductConfiguration = $this->arguments[$argumentName]->getPropertyMappingConfiguration();
        $newProductConfiguration->forProperty('image')
            ->setTypeConverterOptions(
                'MB\\Angelshop\\Property\\TypeConverter\\UploadedFileReferenceConverter',
                $uploadConfiguration
            );
        $newProductConfiguration->forProperty('imageCollection.0')
            ->setTypeConverterOptions(
                'MB\\Angelshop\\Property\\TypeConverter\\UploadedFileReferenceConverter',
                $uploadConfiguration
            );
    }

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
     *  initialized edit Action
     */
    public function initializeEditAction()
    {
        $this->registerContentFromRequest('product');
    }

    /**
     * @param $argumentName
     *
     * @throws NoSuchArgumentException
     */
    protected function registerContentFromRequest($argumentName)
    {
        $argument = $this->request->getArgument($argumentName);
        if ($argument) {
            $content = $this->contentRepository->findHiddenEntryByUid($argument);
            $this->session->registerObject($content, $content->getUid());
        }
    }

    /**
     *  edit Action
     */
    public function editAction()
    {
        $product = '';

        $arguments = $this->request->getArguments();
        if ((int)$arguments['product']) {
            $product = $this->contentRepository->findByIdentifier($arguments['product']);
        }
        $this->view->assignMultiple(array(
                'product' => $product
            )
        );
    }

    /**
     * Set TypeConverter option for image upload
     */
    public function initializeUpdateAction()
    {
        $this->registerContentFromRequest('content');
        $this->setTypeConverterConfigurationForImageUpload('content');
    }

    /**
     * @param Content $content
     * @throws StopActionException
     * @throws IllegalObjectTypeException
     * @throws UnknownObjectException
     */
    public function updateAction(Content $content)
    {
        $this->addFlashMessage('Das Produkt mit dem Title: ' . $content->getHeader() . ' wurde aktualisiert!', 'Produktaktualisierung', AbstractMessage::INFO);
        $this->contentRepository->update($content);
        $this->redirect('list');
    }

    /**
     * @param Content $content
     *
     * @throws UnsupportedRequestTypeException
     * @throws IllegalObjectTypeException
     */
    public function searchAction()
    {
        $argument = '';
        $argument = $this->request->getArguments('tx_angelshop_web_angelshopproductlist');

        if ($argument['searchword']) {
            $products = $this->contentRepository->findByIndex($argument['searchword']);
        } else {
            $products = $this->contentRepository->findByContentType('ce_product');
        }
        $this->view->assignMultiple(array(
                'products' => $products,
                'searchword' => $argument['searchword']
            )
        );
    }
}