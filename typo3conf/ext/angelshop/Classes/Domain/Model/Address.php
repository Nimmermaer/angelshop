<?php
namespace MB\Angelshop\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */



/**
 * The domain model of a Address
 * @entity
 */
class Address extends \TYPO3\TtAddress\Domain\Model\Address
{
    /**
     * @var bool
     */
    protected $newsletter;

    /**
     * @return boolean
     */
    public function isNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param boolean $newsletter
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;
    }
}
