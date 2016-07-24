<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 24.07.2016
 * Time: 13:07
 */

namespace MB\Angelshop\Domain\Model;


/**
 * Content
 */
class Content extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * uid
	 *
	 * @var string
	 */
	protected $uid = '';

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 *
	 */
	protected $image = null;

	/**
	 * bodytext
	 *
	 * @var string
	 */
	protected $bodytext = '';

	/**
	 * product
	 *
	 * @var string
	 */
	protected $product = '';

	/**
	 * stock
	 *
	 * @var string
	 */
	protected $stock = '';

	/**
	 * pid
	 *
	 * @var string
	 */
	protected $pid = '';

	/**
	 * header
	 *
	 * @var string
	 */
	protected $header = '';

	/**
	 * sorting
	 *
	 * @var string
	 */
	protected $sorting = '';

	/**
	 * contentType
	 *
	 * @var string
	 */
	protected $contentType = '';

	/**
	 * Gets the uid
	 *
	 * @return string $uid
	 */
	public function getUid() {
		return $this->uid;
	}

	/**
	 * Gets the pid
	 *
	 * @return string $pid
	 */
	public function getPid() {
		return $this->pid;
	}

	/**
	 * Returns the header
	 *
	 * @return string $header
	 */
	public function getHeader() {
		return $this->header;
	}

	/**
	 * Sets the header
	 *
	 * @param string $header
	 *
	 * @return void
	 */
	public function setHeader( $header ) {
		$this->header = $header;
	}

	/**
	 * Returns the sorting
	 *
	 * @return string $sorting
	 */
	public function getSorting() {
		return $this->sorting;
	}

	/**
	 * Sets the sorting
	 *
	 * @param string $sorting
	 *
	 * @return void
	 */
	public function setSorting( $sorting ) {
		$this->sorting = $sorting;
	}

	/**
	 * Returns the contentType
	 *
	 * @return string $contentType
	 */
	public function getContentType() {
		return $this->contentType;
	}

	/**
	 * Sets the contentType
	 *
	 * @param string $contentType
	 *
	 * @return void
	 */
	public function setContentType( $contentType ) {
		$this->contentType = $contentType;
	}

	/**
	 * @return string
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * @param string $product
	 */
	public function setProduct( $product ) {
		$this->product = $product;
	}

	/**
	 * @return string
	 */
	public function getBodytext() {
		return $this->bodytext;
	}

	/**
	 * @param string $bodytext
	 */
	public function setBodytext( $bodytext ) {
		$this->bodytext = $bodytext;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $image
	 */
	public function setImage( $image ) {
		$this->image = $image;
	}

	/**
	 * @return string
	 */
	public function getStock() {
		return $this->stock;
	}

	/**
	 * @param string $stock
	 */
	public function setStock( $stock ) {
		$this->stock = $stock;
	}
}