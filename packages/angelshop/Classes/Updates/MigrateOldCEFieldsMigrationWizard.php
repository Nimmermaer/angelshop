<?php

namespace MB\Angelshop\Updates;

use Doctrine\DBAL\Exception;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Attribute\UpgradeWizard;
use TYPO3\CMS\Install\Updates\UpgradeWizardInterface;

#[UpgradeWizard('MigrateOldFields')]
class MigrateOldCEFieldsMigrationWizard extends AbstractMigrationWizard implements UpgradeWizardInterface
{
    final public const TABLE = 'pages';

    public function getTitle(): string
    {
        return 'Migrate old ce fields to more specific fields';
    }

    public function getDescription(): string
    {
        return '';
    }

    public function executeUpdate(): bool
    {
        $this->initializeUpdate();
        $this->migrateFields();
        $this->migrateFalFields();
        $this->dataHandler->clear_cacheCmd('all');
        return true;
    }

    public function updateNecessary(): bool
    {
        return true;
    }

    /**
     * @throws Exception
     */
    private function migrateFields(): void
    {
        $data = [];
        $this->initializeUpdate();
        $fieldsToMigrate = [
            'ce_facebook_button' => 'tx_angelshop_facebook_button',
            'ce_whatsapp_button' => 'tx_angelshop_whatapp_button',
            'ce_whatsapp_text' => 'tx_angelshop_whatsapp_text',
        ];
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable(self::TABLE);
        $pages = $connection->select(
            ['*'],
            self::TABLE,
            [
                'deleted' => 0,
            ],
        )->fetchAllAssociative();
        foreach ($pages as $page) {
            foreach ($fieldsToMigrate as $oldField => $newField) {
                $data[self::TABLE][$page['uid']][$newField] = $page[$oldField];
            }
            $this->output->writeln('Page with uid:' . $page['uid'] . ' and title:' . $page['title'] . ' was updated');
        }
        $this->dataHandler->start($data, []);
        $this->dataHandler->process_datamap();

    }

    private function migrateFalFields(): void
    {
        $fileFieldsToMigrate = [
            'tx_angelshop_facebook_image' => 'og_image',
        ];

        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('sys_file_reference');

        foreach ($fileFieldsToMigrate as $field => $newField) {

            $connection->update(
                'sys_file_reference',
                [
                    'fieldname' => $newField,
                ],
                [
                    'fieldname' => $field,
                ],
            );
        }

    }
}
