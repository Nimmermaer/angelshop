<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 20.06.2016
 * Time: 23:28
 */

namespace MB\Angelshop\Domain\Model;


class Fontawesome extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * @var string
	 */
	protected $title = '';

	/**
	 * @var string
	 */
	protected $class = '';

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle( $title ) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getClass() {
		return $this->class;
	}

	/**
	 * @param string $class
	 */
	public function setClass( $class ) {
		$this->class = $class;
	}

}