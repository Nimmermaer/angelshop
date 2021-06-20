<?php

namespace MB\Angelshop\Domain\Model;

use DateTime;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

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

/**
 * Class Content
 * @package MB\Angelshop\Domain\Model
 */
class Content extends AbstractEntity
{

    /**
     * @var DateTime
     */
    protected $crdate;
    /**
     * @var DateTime
     */
    protected $tstamp;
    /**
     * @var string
     */
    public string $CType = '';

    /**
     * @var string
     */
    public string $headerPosition = '';

    /**
     * @var int
     */
    public int $colPos = 0;

    /**
     * @var int
     */
    public int $imagewidth = 0;
    /**
     * @var int
     */
    public int $imageorient = 0;
    /**
     * @var string
     */
    public string $imagecaption = '';
    /**
     * @var int
     */
    public int $imagecols = 0;
    /**
     * @var int
     */
    public int $imageborder = 0;
    /**
     * @var string
     */
    public string $media = '';
    /**
     * @var string
     */
    public string $layout = '';
    /**
     * @var int
     */
    public int $cols = 0;
    /**
     * @var string
     */
    public string $subheader = '';
    /**
     * @var string
     */
    public string $headerLink = '';
    /**
     * @var string
     */
    public string $imageLink = '';
    /**
     * @var string
     */
    public string $imageZoom = '';
    /**
     * @var string
     */
    public string $altText = '';
    /**
     * @var string
     */
    public string $titleText = '';
    /**
     * @var string
     */
    public string $headerLayout = '';
    /**
     * @var string
     */
    public string $listType = '';


    /**
     * uid
     * @var boolean
     */
    public bool $hidden = false;

    /**
     * image
     * @var ObjectStorage<FileReference> $image
     */
    protected ?ObjectStorage $image = null;

    /**
     * bodytext
     * @var string
     */
    public string $bodytext = '';

    /**
     * product
     * @var string
     */
    public string $product = '';

    /**
     * stock
     * @var boolean
     */
    public bool $stock = false;


    /**
     * header
     * @var string
     */
    public string $header = '';

    /**
     * sorting
     * @var string
     */
    public string $sorting = '';
    /**
     * sorting
     * @var string
     */
    public string $additionalDescription = '';

    /**
     * contentType
     * @var string
     */
    public string $contentType = '';

    /**
     * price
     * @var float
     */
    public float $price = 0.00;

    /**
     * oldPrice
     * @var float
     */
    public float $oldPrice = 0.00;

    /**
     * manufacturer
     * @var string
     */
    public string $manufacturer = '';

    /**
     * Image
     * @var ObjectStorage<FileReference>
     */
    protected ObjectStorage $imageCollection;

    public function __construct()
    {
        $this->imageCollection = new ObjectStorage();
    }

    /**
     * @return ObjectStorage
     */
    public function getImageCollection(): ObjectStorage
    {
        return $this->imageCollection;
    }

    /**
     * @param ObjectStorage $imageCollection
     */
    public function setImageCollection(ObjectStorage $imageCollection)
    {
        $this->imageCollection = $imageCollection;
    }


    /**
     * @return ObjectStorage
     */
    public function getImage(): ?ObjectStorage
    {
        return $this->image;
    }

    /**
     * @param ObjectStorage $image
     */
    public function setImage(ObjectStorage $image)
    {
        $this->image = $image;
    }


    /**
     * @return DateTime
     */
    public function getCrdate(): DateTime
    {
        return $this->crdate;
    }

    /**
     * @param DateTime $crdate
     */
    public function setCrdate(DateTime $crdate)
    {
        $this->crdate = $crdate;
    }

    /**
     * @return DateTime
     */
    public function getTstamp(): DateTime
    {
        return $this->tstamp;
    }

    /**
     * @param DateTime $tstamp
     */
    public function setTstamp(DateTime $tstamp)
    {
        $this->tstamp = $tstamp;
    }
}