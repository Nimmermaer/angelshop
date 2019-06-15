<?php

namespace MB\Angelshop\Domain\Model;

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

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Content
 * @package MB\Angelshop\Domain\Model
 */
class Content extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var \DateTime
     */
    protected $crdate;
    /**
     * @var \DateTime
     */
    protected $tstamp;
    /**
     * @var string
     */
    protected $CType;

    /**
     * @var string
     */
    protected $headerPosition;

    /**
     * @var int
     */
    protected $colPos;

    /**
     * @var int
     */
    protected $imagewidth;
    /**
     * @var int
     */
    protected $imageorient;
    /**
     * @var string
     */
    protected $imagecaption;
    /**
     * @var int
     */
    protected $imagecols;
    /**
     * @var int
     */
    protected $imageborder;
    /**
     * @var string
     */
    protected $media;
    /**
     * @var string
     */
    protected $layout;
    /**
     * @var int
     */
    protected $cols;
    /**
     * @var string
     */
    protected $subheader;
    /**
     * @var string
     */
    protected $headerLink;
    /**
     * @var string
     */
    protected $imageLink;
    /**
     * @var string
     */
    protected $imageZoom;
    /**
     * @var string
     */
    protected $altText;
    /**
     * @var string
     */
    protected $titleText;
    /**
     * @var string
     */
    protected $headerLayout;
    /**
     * @var string
     */
    protected $listType;

    /**
     * uid
     * @var string
     */
    protected $uid = '';

    /**
     * uid
     * @var boolean
     */
    protected $hidden;

    /**
     * image
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     */
    protected $image = null;

    /**
     * bodytext
     * @var string
     */
    protected $bodytext = '';

    /**
     * product
     * @var string
     */
    protected $product = '';

    /**
     * stock
     * @var boolean
     */
    protected $stock;

    /**
     * pid
     * @var string
     */
    protected $pid = '';

    /**
     * header
     * @var string
     */
    protected $header = '';

    /**
     * sorting
     * @var string
     */
    protected $sorting = '';
    /**
     * sorting
     * @var string
     */
    protected $additionalDescription = '';

    /**
     * contentType
     * @var string
     */
    protected $contentType = '';

    /**
     * price
     * @var float
     */
    protected $price = '';

    /**
     * oldPrice
     * @var float
     */
    protected $oldPrice = '';

    /**
     * manufacturer
     * @var string
     */
    protected $manufacturer = '';

    /**
     * Image
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $imageCollection;

    public function __construct()
    {
        $this->imageCollection = new ObjectStorage();
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $imageCollection
     */
    public function setImageCollection($imageCollection)
    {
        $this->imageCollection = $imageCollection;
    }

    /**
     * Gets the uid
     * @return string $uid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return boolean
     */
    public function isHidden()
    {
        return $this->hidden;
    }

    /**
     * @param boolean $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    /**
     * @return boolean
     */
    public function isStock()
    {
        return $this->stock;
    }

    /**
     * @param boolean $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }


    /**
     * Gets the pid
     * @return string $pid
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Returns the header
     * @return string $header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets the header
     *
     * @param string $header
     *
     * @return void
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * Returns the sorting
     * @return string $sorting
     */
    public function getSorting()
    {
        return $this->sorting;
    }

    /**
     * Sets the sorting
     *
     * @param string $sorting
     *
     * @return void
     */
    public function setSorting($sorting)
    {
        $this->sorting = $sorting;
    }

    /**
     * Returns the contentType
     * @return string $contentType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets the contentType
     *
     * @param string $contentType
     *
     * @return void
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return string
     */
    public function getBodytext()
    {
        return $this->bodytext;
    }

    /**
     * @param string $bodytext
     */
    public function setBodytext($bodytext)
    {
        $this->bodytext = $bodytext;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getAdditionalDescription()
    {
        return $this->additionalDescription;
    }

    /**
     * @param string $additionalDescription
     */
    public function setAdditionalDescription($additionalDescription)
    {
        $this->additionalDescription = $additionalDescription;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getOldPrice()
    {
        return $this->oldPrice;
    }

    /**
     * @param float $oldPrice
     */
    public function setOldPrice($oldPrice)
    {
        $this->oldPrice = $oldPrice;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return \DateTime
     */
    public function getCrdate()
    {
        return $this->crdate;
    }

    /**
     * @param \DateTime $crdate
     */
    public function setCrdate($crdate)
    {
        $this->crdate = $crdate;
    }

    /**
     * @return \DateTime
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * @param \DateTime $tstamp
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;
    }

    /**
     * @return string
     */
    public function getCType()
    {
        return $this->CType;
    }

    /**
     * @param string $CType
     */
    public function setCType($CType)
    {
        $this->CType = $CType;
    }

    /**
     * @return string
     */
    public function getHeaderPosition()
    {
        return $this->headerPosition;
    }

    /**
     * @param string $headerPosition
     */
    public function setHeaderPosition($headerPosition)
    {
        $this->headerPosition = $headerPosition;
    }

    /**
     * @return int
     */
    public function getColPos()
    {
        return $this->colPos;
    }

    /**
     * @param int $colPos
     */
    public function setColPos($colPos)
    {
        $this->colPos = $colPos;
    }

    /**
     * @return int
     */
    public function getImagewidth()
    {
        return $this->imagewidth;
    }

    /**
     * @param int $imagewidth
     */
    public function setImagewidth($imagewidth)
    {
        $this->imagewidth = $imagewidth;
    }

    /**
     * @return int
     */
    public function getImageorient()
    {
        return $this->imageorient;
    }

    /**
     * @param int $imageorient
     */
    public function setImageorient($imageorient)
    {
        $this->imageorient = $imageorient;
    }

    /**
     * @return string
     */
    public function getImagecaption()
    {
        return $this->imagecaption;
    }

    /**
     * @param string $imagecaption
     */
    public function setImagecaption($imagecaption)
    {
        $this->imagecaption = $imagecaption;
    }

    /**
     * @return int
     */
    public function getImagecols()
    {
        return $this->imagecols;
    }

    /**
     * @param int $imagecols
     */
    public function setImagecols($imagecols)
    {
        $this->imagecols = $imagecols;
    }

    /**
     * @return int
     */
    public function getImageborder()
    {
        return $this->imageborder;
    }

    /**
     * @param int $imageborder
     */
    public function setImageborder($imageborder)
    {
        $this->imageborder = $imageborder;
    }

    /**
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param string $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

    /**
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * @param string $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * @return int
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * @param int $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    /**
     * @return string
     */
    public function getSubheader()
    {
        return $this->subheader;
    }

    /**
     * @param string $subheader
     */
    public function setSubheader($subheader)
    {
        $this->subheader = $subheader;
    }

    /**
     * @return string
     */
    public function getHeaderLink()
    {
        return $this->headerLink;
    }

    /**
     * @param string $headerLink
     */
    public function setHeaderLink($headerLink)
    {
        $this->headerLink = $headerLink;
    }

    /**
     * @return string
     */
    public function getImageLink()
    {
        return $this->imageLink;
    }

    /**
     * @param string $imageLink
     */
    public function setImageLink($imageLink)
    {
        $this->imageLink = $imageLink;
    }

    /**
     * @return string
     */
    public function getImageZoom()
    {
        return $this->imageZoom;
    }

    /**
     * @param string $imageZoom
     */
    public function setImageZoom($imageZoom)
    {
        $this->imageZoom = $imageZoom;
    }

    /**
     * @return string
     */
    public function getAltText()
    {
        return $this->altText;
    }

    /**
     * @param string $altText
     */
    public function setAltText($altText)
    {
        $this->altText = $altText;
    }

    /**
     * @return string
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * @param string $titleText
     */
    public function setTitleText($titleText)
    {
        $this->titleText = $titleText;
    }

    /**
     * @return string
     */
    public function getHeaderLayout()
    {
        return $this->headerLayout;
    }

    /**
     * @param string $headerLayout
     */
    public function setHeaderLayout($headerLayout)
    {
        $this->headerLayout = $headerLayout;
    }

    /**
     * @return string
     */
    public function getListType()
    {
        return $this->listType;
    }

    /**
     * @param string $listType
     */
    public function setListType($listType)
    {
        $this->listType = $listType;
    }
}