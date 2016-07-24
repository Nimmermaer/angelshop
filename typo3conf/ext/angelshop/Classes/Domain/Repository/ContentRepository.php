<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 24.07.2016
 * Time: 12:41
 */

namespace MB\Angelshop\Domain\Repository;

/**
 * Class ContentRepository
 * @package MB\Angelshop\Domain\Repository
 */

class ContentRepository extends Repository{

	/**
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findProducts() {
		$query = $this->createQuery();
		$query->like('tx_abatemplate_product', 1);
		return $query->execute();
	}

}