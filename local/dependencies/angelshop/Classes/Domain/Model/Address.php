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
 * Class Address
 * @package MB\Angelshop\Domain\Model
 */
class Address extends \TYPO3\TtAddress\Domain\Model\Address
{
    /**
     * @var bool
     */
    protected $moduleSysDmailHtml;

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

    /**
     * @return boolean
     */
    public function isModuleSysDmailHtml()
    {
        return $this->moduleSysDmailHtml;
    }

    /**
     * @param boolean $moduleSysDmailHtml
     */
    public function setModuleSysDmailHtml($moduleSysDmailHtml)
    {
        $this->moduleSysDmailHtml = $moduleSysDmailHtml;
    }
}
