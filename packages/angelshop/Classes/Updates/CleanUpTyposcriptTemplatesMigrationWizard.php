<?php

namespace MB\Angelshop\Updates;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Attribute\UpgradeWizard;
use TYPO3\CMS\Install\Updates\UpgradeWizardInterface;

#[UpgradeWizard('CleanUpTyposcriptTemplate')]
class CleanUpTyposcriptTemplatesMigrationWizard extends AbstractMigrationWizard implements UpgradeWizardInterface
{
    public function getTitle(): string
    {
        return 'Clean up typoscript templates';
    }

    public function getDescription(): string
    {
        return '';
    }

    public function executeUpdate(): bool
    {
        $this->initializeUpdate();
        $this->cleanUpPageTs();
        $this->cleanUpSysTemplate();
        $this->dataHandler->clear_cacheCmd('all');
        return true;
    }

    public function updateNecessary(): bool
    {
        return true;
    }

    private function cleanUpPageTs(): void
    {
        $data = [];
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('pages');
        $connection->select('*')
            ->from('pages')
            ->where(
                $connection->expr()->neq('TSconfig', '""')
            );
           $pages = $connection
               ->executeQuery()
               ->fetchAllAssociative();
        foreach ($pages as $page) {
            $data['pages'][$page['uid']]['TSconfig'] = '';
        }
        $this->dataHandler->start($data, []);
        $this->dataHandler->process_datamap();
    }

    private function cleanUpSysTemplate(): void
    {
        $data = [];
        $typoscriptTemplates = [
            1 => [
                'constants' => '',
                'config' => '',
                'include_static_file' => 'EXT:angelshop/Configuration/TypoScript',
            ],
        ];
        foreach ($typoscriptTemplates as $templateUid => $configuration) {
            foreach ($configuration as $field => $value) {
                $data['sys_template'][$templateUid][$field] = $value;
            }
            $this->output->writeln('Update Sys_Template with uid:' . $templateUid);
        }
        $this->dataHandler->start($data, []);
        $this->dataHandler->process_datamap();
    }
}
