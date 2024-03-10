<?php

namespace MB\Angelshop\Domain\Model;

use TYPO3\CMS\Core\Resource\ResourceInterface;

class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference
{
    /**
     * Uid of a sys_file
     */
    protected int $originalFileIdentifier;

    public function setOriginalResource(ResourceInterface $originalResource): void
    {
        $this->setFileReference($originalResource);
    }

    private function setFileReference(\TYPO3\CMS\Core\Resource\FileReference $originalResource): void
    {
        $this->originalResource = $originalResource;
        $this->originalFileIdentifier = (int) $originalResource->getOriginalFile()
            ->getUid();
    }
}
