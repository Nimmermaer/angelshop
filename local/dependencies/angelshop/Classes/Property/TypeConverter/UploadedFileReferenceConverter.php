<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 28.11.2016
 * Time: 23:05
 */

namespace MB\Angelshop\Property\TypeConverter;

use Exception;
use InvalidArgumentException;
use TYPO3\CMS\Core\Resource\Exception\ExistingTargetFileNameException;
use TYPO3\CMS\Core\Resource\Exception\FileDoesNotExistException;
use TYPO3\CMS\Core\Resource\Exception\ResourceDoesNotExistException;
use TYPO3\CMS\Core\Resource\File as FalFile;
use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\FileReference as FalFileReference;
use TYPO3\CMS\Core\Resource\ResourceFactory;
use TYPO3\CMS\Core\Resource\Security\FileNameValidator;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Error\Error;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;
use TYPO3\CMS\Extbase\Property\Exception\TypeConverterException;
use TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationInterface;
use TYPO3\CMS\Extbase\Property\TypeConverter\AbstractTypeConverter;
use TYPO3\CMS\Extbase\Security\Cryptography\HashService;
use TYPO3\CMS\Extbase\Security\Exception\InvalidArgumentForHashGenerationException;
use TYPO3\CMS\Extbase\Security\Exception\InvalidHashException;

/**
 * Class UploadedFileReferenceConverter
 * @package MB\Angelshop\Property\TypeConverter
 */
class UploadedFileReferenceConverter extends AbstractTypeConverter
{
    /**
     * Folder where the file upload should go to (including storage).
     */
    const CONFIGURATION_UPLOAD_FOLDER = 1;
    /**
     * How to handle a upload when the name of the uploaded file conflicts.
     */
    const CONFIGURATION_UPLOAD_CONFLICT_MODE = 2;
    /**
     * Whether to replace an already present resource.
     * Useful for "maxitems = 1" fields and properties
     * with no ObjectStorage annotation.
     */
    const CONFIGURATION_ALLOWED_FILE_EXTENSIONS = 4;
    /**
     * @var string
     */
    protected string $defaultUploadFolder = '1:/user_upload/';
    /**
     * One of 'cancel', 'replace', 'changeName'
     *
     * @var string
     */
    protected string $defaultConflictMode = 'changeName';
    /**
     * @var array<string>
     */
    protected array $sourceTypes = ['array'];
    /**
     * @var string
     */
    protected string $targetType = FileReference::class;
    /**
     * Take precedence over the available FileReferenceConverter
     *
     * @var int
     */
    protected int $priority = 2;
    /**
     * @var ResourceFactory
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected ResourceFactory $resourceFactory;
    /**
     * @var HashService
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected HashService $hashService;
    /**
     * @var PersistenceManager
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected PersistenceManager $persistenceManager;
    /**
     * @var FileInterface[]
     */
    protected array $convertedResources = [];

    /**
     * Actually convert from $source to $targetType, taking into account the fully
     * built $convertedChildProperties and $configuration.
     *
     * @param string|int $source
     * @param string $targetType
     * @param array $convertedChildProperties
     * @param PropertyMappingConfigurationInterface|null $configuration
     * @throws FileDoesNotExistException
     * @throws ResourceDoesNotExistException
     * @throws InvalidArgumentForHashGenerationException
     * @throws InvalidHashException
     * @api
     */
    public function convertFrom(
        $source,
        string $targetType,
        array $convertedChildProperties = [],
        PropertyMappingConfigurationInterface $configuration = null
    ) {
        if (!isset($source['error']) || $source['error'] === \UPLOAD_ERR_NO_FILE) {
            if (isset($source['submittedFile']['resourcePointer'])) {
                try {
                    $resourcePointer = $this->hashService->validateAndStripHmac($source['submittedFile']['resourcePointer']);
                    if (strpos($resourcePointer, 'file:') === 0) {
                        $fileUid = substr($resourcePointer, 5);
                        return $this->createFileReferenceFromFalFileObject($this->resourceFactory->getFileObject($fileUid));
                    } else {
                        return $this->createFileReferenceFromFalFileReferenceObject($this->resourceFactory->getFileReferenceObject($resourcePointer),
                            $resourcePointer);
                    }
                } catch (InvalidArgumentException $e) {
                    // Nothing to do. No file is uploaded and resource pointer is invalid. Discard!
                }
            }
            return null;
        }
        if ($source['error'] !== \UPLOAD_ERR_OK) {
            switch ($source['error']) {
                case \UPLOAD_ERR_INI_SIZE:
                case \UPLOAD_ERR_FORM_SIZE:
                case \UPLOAD_ERR_PARTIAL:
                    return new Error('Error Code: ' . $source['error'], 1264440823);
                default:
                    return new Error('An error occurred while uploading. Please try again or contact the administrator if the problem remains',
                        1340193849);
            }
        }
        if (isset($this->convertedResources[$source['tmp_name']])) {
            return $this->convertedResources[$source['tmp_name']];
        }
        try {
            $resource = $this->importUploadedResource((array)$source, $configuration);
        } catch (Exception $e) {
            return new Error($e->getMessage(), $e->getCode());
        }
        $this->convertedResources[$source['tmp_name']] = $resource;
        return $resource;
    }

    /**
     * @param FalFile $file
     * @param int $resourcePointer
     * @return \MB\Angelshop\Domain\Model\FileReference
     */
    protected function createFileReferenceFromFalFileObject(
        FalFile $file,
        int $resourcePointer = 0
    ): \MB\Angelshop\Domain\Model\FileReference {
        $fileReference = $this->resourceFactory->createFileReferenceObject(
            [
                'uid_local' => $file->getUid(),
                'uid_foreign' => uniqid('NEW_'),
                'uid' => uniqid('NEW_'),
                'crop' => null,
            ]
        );
        return $this->createFileReferenceFromFalFileReferenceObject($fileReference, $resourcePointer);
    }

    /**
     * @param FalFileReference $falFileReference
     * @param int $resourcePointer
     * @return \MB\Angelshop\Domain\Model\FileReference
     */
    protected function createFileReferenceFromFalFileReferenceObject(
        FalFileReference $falFileReference,
        int $resourcePointer
    ) {
        if ($resourcePointer === null) {
            /** @var $fileReference \MB\Angelshop\Domain\Model\FileReference */
            $fileReference = $this->objectManager->get(FileReference::class);
        } else {
            $fileReference = $this->persistenceManager->getObjectByIdentifier($resourcePointer,
                FileReference::class, false);
        }
        $fileReference->setOriginalResource($falFileReference);
        return $fileReference;
    }

    /**
     * Import a resource and respect configuration given for properties
     *
     * @param array $uploadInfo
     * @param PropertyMappingConfigurationInterface $configuration
     * @return FileReference
     * @throws TypeConverterException
     * @throws ExistingTargetFileNameException
     */
    protected function importUploadedResource(array $uploadInfo, PropertyMappingConfigurationInterface $configuration)
    {

        if (!GeneralUtility::makeInstance(FileNameValidator::class)->isValid($uploadInfo['name'])) {
            throw new TypeConverterException('Uploading files with PHP file extensions is not allowed!', 1399312430);
        }
        $allowedFileExtensions = $configuration->getConfigurationValue(UploadedFileReferenceConverter::class,
            self::CONFIGURATION_ALLOWED_FILE_EXTENSIONS);
        if ($allowedFileExtensions !== null) {
            $filePathInfo = PathUtility::pathinfo($uploadInfo['name']);
            if (!GeneralUtility::inList($allowedFileExtensions, strtolower($filePathInfo['extension']))) {
                throw new TypeConverterException('File extension is not allowed!', 1399312430);
            }
        }
        $uploadFolderId = $configuration->getConfigurationValue(UploadedFileReferenceConverter::class,
            self::CONFIGURATION_UPLOAD_FOLDER) ?: $this->defaultUploadFolder;
        $conflictMode = $configuration->getConfigurationValue(UploadedFileReferenceConverter::class,
            self::CONFIGURATION_UPLOAD_CONFLICT_MODE) ?: $this->defaultConflictMode;
        $uploadFolder = $this->resourceFactory->retrieveFileOrFolderObject($uploadFolderId);
        $uploadedFile = $uploadFolder->addUploadedFile($uploadInfo, $conflictMode);
        try {
            $resourcePointer = isset($uploadInfo['submittedFile']['resourcePointer']) && strpos($uploadInfo['submittedFile']['resourcePointer'],
                'file:') === false
                ? $this->hashService->validateAndStripHmac($uploadInfo['submittedFile']['resourcePointer'])
                : null;
        } catch (InvalidArgumentForHashGenerationException | InvalidHashException $e) {
        }
        return $this->createFileReferenceFromFalFileObject($uploadedFile, $resourcePointer);
    }
}