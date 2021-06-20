<?php

namespace MB\Angelshop\Tests\Unit\Controller;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use MB\Angelshop\Domain\Model\Teaserrow;
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
 * Test case for class MB\Angelshop\Controller\TeaserrowController.
 * @author Michael Blunck <mi.blunck@gmail.com>
 */
class TeaserrowControllerTest extends UnitTestCase
{

    /**
     * @var \MB\Angelshop\Controller\TeaserrowController
     */
    protected $subject = null;

    public function setUp()
    {
        $this->subject = $this->getMock('MB\\Angelshop\\Controller\\TeaserrowController', array(
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
    public function listActionFetchesAllTeaserrowsFromRepositoryAndAssignsThemToView()
    {

        $allTeaserrows = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', false);

        $teaserrowRepository = $this->getMock('MB\\Angelshop\\Domain\\Repository\\TeaserrowRepository',
            array('findAll'), array(), '', false);
        $teaserrowRepository->expects($this->once())->method('findAll')->will($this->returnValue($allTeaserrows));
        $this->inject($this->subject, 'teaserrowRepository', $teaserrowRepository);

        $view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
        $view->expects($this->once())->method('assign')->with('teaserrows', $allTeaserrows);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTeaserrowToView()
    {
        $teaserrow = new Teaserrow();

        $view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
        $this->inject($this->subject, 'view', $view);
        $view->expects($this->once())->method('assign')->with('teaserrow', $teaserrow);

        $this->subject->showAction($teaserrow);
    }
}
