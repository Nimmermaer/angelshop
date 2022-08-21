<?php

namespace MB\Angelshop\Property\TypeConverter;

use const UPLOAD_ERR_NO_FILE;

/**
 * Class ObjectStorageConverter
 * @package MB\Angelshop\Property\TypeConverter
 */
class ObjectStorageConverter extends \TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter
{
    /**
     * @var string[]
     */
    protected $sourceTypes = ['array'];

    /**
     * Take precedence over the available ObjectStorageConverter
     *
     * @var int
     */
    protected $priority = 2;

    /**
     * @param mixed $source
     */
    public function getSourceChildPropertiesToBeConverted($source): array
    {
        $propertiesToConvert = [];
        // TODO: Find a nicer way to throw away empty uploads
        foreach ($source as $propertyName => $propertyValue) {
            if ($this->isUploadType($propertyValue)) {
                if ($propertyValue['error'] !== UPLOAD_ERR_NO_FILE || isset($propertyValue['submittedFile']['resourcePointer'])) {
                    $propertiesToConvert[$propertyName] = $propertyValue;
                }
            } else {
                $propertiesToConvert[$propertyName] = $propertyValue;
            }
        }
        return $propertiesToConvert;
    }

    /**
     * Check if this is an upload type
     *
     * @param mixed $propertyValue
     */
    protected function isUploadType($propertyValue): bool
    {
        return is_array($propertyValue) && isset($propertyValue['tmp_name']) && isset($propertyValue['error']);
    }
}
