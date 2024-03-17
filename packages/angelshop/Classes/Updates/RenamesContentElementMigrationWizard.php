<?php

namespace MB\Angelshop\Updates;

use Doctrine\DBAL\Exception;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Attribute\UpgradeWizard;
use TYPO3\CMS\Install\Updates\UpgradeWizardInterface;

#[UpgradeWizard('RenamesContentElements')]
class RenamesContentElementMigrationWizard extends AbstractMigrationWizard implements UpgradeWizardInterface
{
    public function getTitle(): string
    {
       return 'Renames Content elements';
    }

    public function getDescription(): string
    {
       return '';
    }

    /**
     * @throws Exception
     */
    public function executeUpdate(): bool
    {
        $this->initializeUpdate();
        $data = [];
        $renameContentElements = [
            'tx_trader_slider' => 'tx_angelshop_trader_slider',
            'tx_gallery' => 'tx_angelshop_gallery',
            'tx_service' => 'tx_angelshop_service',
            'tx_tab' => 'tx_angelshop_tab',
            'tx_impressum' => 'tx_angelshop_impressum',
            'tx_project' => 'tx_angelshop_project',
            'tx_contact' => 'tx_angelshop_contact',
            'ce_product' => 'tx_angelshop_product',
            'tx_slider' => 'tx_angelshop_slider',
        ];
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tt_content');
       $contentElements = $connection->select(
           ['*'],
           'tt_content',
       )->fetchAllAssociative();
       foreach ($contentElements as $contentElement) {
           foreach ($renameContentElements as $oldType => $newType) {
               if($contentElement['CType'] === $oldType) {
                   $data['tt_content'][$contentElement['uid']]['CType'] = $newType;
               }
           }
       }
       $this->dataHandler->start($data, []);
       $this->dataHandler->process_datamap();
       $this->dataHandler->clear_cacheCmd('all');
       return true;
    }

    public function updateNecessary(): bool
    {
        return true;
    }
}
