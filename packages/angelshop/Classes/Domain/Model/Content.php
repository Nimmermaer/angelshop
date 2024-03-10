<?php

namespace MB\Angelshop\Domain\Model;

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

class Content extends AbstractEntity
{
    public string $CType = '';

    public string $headerPosition = '';

    public int $colPos = 0;

    public int $imagewidth = 0;

    public int $imageorient = 0;

    public string $imagecaption = '';

    public int $imagecols = 0;

    public int $imageborder = 0;

    public string $media = '';

    public string $layout = '';

    public int $cols = 0;

    public string $subheader = '';

    public string $headerLink = '';

    public string $imageLink = '';

    public string $imageZoom = '';

    public string $altText = '';

    public string $titleText = '';

    public string $headerLayout = '';

    public string $listType = '';

    public bool $hidden = false;

    public string $bodytext = '';

    public string $product = '';

    public bool $stock = false;

    public string $header = '';

    public string $sorting = '';

    public string $additionalDescription = '';

    public string $contentType = '';

    public float $price = 0.00;

    public float $oldPrice = 0.00;

    public string $manufacturer = '';

    protected \DateTime $crdate;

    protected \DateTime $tstamp;

    /**
     * image
     * @var ObjectStorage<FileReference>|null
     */
    protected ?ObjectStorage $image = null;

    /**
     * Image
     * @var ObjectStorage<FileReference>
     */
    protected ObjectStorage $imageCollection;

    public function __construct()
    {
        $this->imageCollection = new ObjectStorage();
    }

    public function getImageCollection(): ObjectStorage
    {
        return $this->imageCollection;
    }

    public function setImageCollection(ObjectStorage $imageCollection): void
    {
        $this->imageCollection = $imageCollection;
    }

    public function getImage(): ?ObjectStorage
    {
        return $this->image;
    }

    public function setImage(ObjectStorage $image): void
    {
        $this->image = $image;
    }

    /**
     * @return \DateTime|\DateTimeImmutable
     */
    public function getCrdate(): \DateTime
    {
        return $this->crdate;
    }

    /**
     * @param \DateTime|\DateTimeImmutable $crdate
     */
    public function setCrdate(\DateTimeInterface $crdate): void
    {
        $this->crdate = $crdate;
    }

    /**
     * @return \DateTime|\DateTimeImmutable
     */
    public function getTstamp(): \DateTime
    {
        return $this->tstamp;
    }

    /**
     * @param \DateTime|\DateTimeImmutable $tstamp
     */
    public function setTstamp(\DateTimeInterface $tstamp): void
    {
        $this->tstamp = $tstamp;
    }
}
