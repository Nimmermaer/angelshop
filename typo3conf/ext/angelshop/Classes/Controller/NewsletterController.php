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


use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class NewsletterController
 * @package MB\Angelshop\Controller
 */
class NewsletterController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var \TYPO3\TtAddress\Domain\Repository\AddressRepository
     * @inject
     */
    protected $addressRepository;

    /**
     * @var  \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
     * @inject
     */
    protected $frontendUserRepository;

    /**
     *
     */
    public function subscriptionAction()
    {
    }

    /**
     *
     */
    public function unsubscribeAction()
    {
        $uid   = GeneralUtility::_GP('tx_angelshop_newsletter_uid');
        $email = GeneralUtility::_GP('tx_angelshop_newsletter_email');
        if ((int) $uid) {
            $frontendUser = $this->frontendUserRepository->findOneByEmail($email);
            $addressUser  = $this->addressRepository->findOneByEmail($email);
            if ($frontendUser) {
                $this->frontendUserRepository->remove($frontendUser);
            }
            if ($addressUser) {
                $this->addressRepository->remove($addressUser);

            }
        }
    }

    /**
     * @param \TYPO3\TtAddress\Domain\Model\Address $address
     *
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     */
    public function newAction(\TYPO3\TtAddress\Domain\Model\Address $address)
    {
        $address->setPid($this->settings['address']['newsletterStoragePid']);
        $this->addressRepository->add($address);


        $link = $this->uriBuilder->setCreateAbsoluteUri(1)
                                 ->setTargetPageUid($this->settings['newsletterThankYouPid'])
                                 ->build();

        $this->redirectToUri($link);

    }

    /**
     * @param \TYPO3\TtAddress\Domain\Model\Address $address
     *
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     */
    public function deleteAction(\TYPO3\TtAddress\Domain\Model\Address $address)
    {
        $this->addressRepository->remove($address);
    }
}