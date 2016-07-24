<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 24.07.2016
 * Time: 13:35
 */

namespace MB\Angelshop\Domain\Repository;

/**
 * Class Repository
 * @package MB\Angelshop\Domain\Repository
 */
class Repository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 *
	 */
	public function initializeObject() {
		/** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
		$querySettings = $this->objectManager->get( 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings' );
		$querySettings->setRespectStoragePage( false );
		$querySettings->setRespectSysLanguage( false );
		$this->setDefaultQuerySettings( $querySettings );

	}
}