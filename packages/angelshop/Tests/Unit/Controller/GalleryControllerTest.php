<?php

namespace MB\Angelshop\Tests\Unit\Controller;

use MB\Angelshop\Controller\GalleryController;
use MB\Angelshop\Domain\Model\Gallery;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/***************************************************************
 *  Copyright notice
 *  (c) 2016 Michael Blunck <mi.blunck@gmail.com>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class MB\Angelshop\Controller\GalleryController.
 * @author Michael Blunck <mi.blunck@gmail.com>
 */
class GalleryControllerTest extends UnitTestCase
{

    /**
     * @var GalleryController
     */
    protected $subject = null;

    public function setUp()
    {
        $this->subject = $this->getMock('MB\\Angelshop\\Controller\\GalleryController', array(
            'redirect',
            'forward',
            'addFlashMessage'
        ), array(), '', false);
    }

    public function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function listActionFetchesAllGalleriesFromRepositoryAndAssignsThemToView()
    {

        $allGalleries = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', false);

        $galleryRepository = $this->getMock('MB\\Angelshop\\Domain\\Repository\\GalleryRepository', array('findAll'),
            array(), '', false);
        $galleryRepository->expects($this->once())->method('findAll')->will($this->returnValue($allGalleries));
        $this->inject($this->subject, 'galleryRepository', $galleryRepository);

        $view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
        $view->expects($this->once())->method('assign')->with('galleries', $allGalleries);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenGalleryToView()
    {
        $gallery = new Gallery();

        $view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
        $this->inject($this->subject, 'view', $view);
        $view->expects($this->once())->method('assign')->with('gallery', $gallery);

        $this->subject->showAction($gallery);
    }
}
