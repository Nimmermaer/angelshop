<?php
namespace MB\Angelshop\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Michael Blunck <mi.blunck@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * TeaserrowController
 */
class TeaserrowController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * teaserrowRepository
     * 
     * @var \MB\Angelshop\Domain\Repository\TeaserrowRepository
     * @inject
     */
    protected $teaserrowRepository = NULL;
    
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $teaserrows = $this->teaserrowRepository->findAll();
        $this->view->assign('teaserrows', $teaserrows);
    }
    
    /**
     * action show
     * 
     * @param \MB\Angelshop\Domain\Model\Teaserrow $teaserrow
     * @return void
     */
    public function showAction(\MB\Angelshop\Domain\Model\Teaserrow $teaserrow)
    {
        $this->view->assign('teaserrow', $teaserrow);
    }

}