<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 13.10.2016
 * Time: 20:54
 */

namespace MB\Angelshop\Controller;


use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

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
        $this->addressRepository->add($address);
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