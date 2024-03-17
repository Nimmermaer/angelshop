<?php

namespace MB\Angelshop\Updates;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Database\Query\Restriction\DeletedRestriction;
use TYPO3\CMS\Core\Exception;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Attribute\UpgradeWizard;
use TYPO3\CMS\Install\Updates\UpgradeWizardInterface;

#[UpgradeWizard('GridelementsMigrationWizard')]
class GridelementsMigrationWizard extends AbstractMigrationWizard implements UpgradeWizardInterface
{
    public function getTitle(): string
    {
        return 'Gridelements Migration: migrate all active content elements to b13/container';
    }

    public function getDescription(): string
    {
        return 'Migrates all Gridelements to container-based content elements.';
    }

    public function executeUpdate(): bool
    {
        $this->initializeUpdate();

        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tt_content');
        $queryBuilder->getRestrictions()
            ->removeAll()
            ->add(GeneralUtility::makeInstance(DeletedRestriction::class));
        $gridElements = $queryBuilder->select('*')
            ->from('tt_content')
            ->andWhere(
                $queryBuilder->expr()
                    ->eq('tt_content.CType', $queryBuilder->createNamedParameter('gridelements_pi1'))
            )
            ->executeQuery()
            ->fetchAllAssociative();

        $i = 0;
        foreach ($gridElements as $gridElement) {
            ++$i;

            $CType = '';
            $migrateFlexformValues = false;
            foreach ($this->getMapping() as $gridElementName => $mappingInstructions) {
                if ($gridElementName == $gridElement['tx_gridelements_backend_layout']) {
                    $CType = $mappingInstructions['container'];
                    if ($mappingInstructions['migrateFlexformValues']) {
                        $migrateFlexformValues = true;
                    }
                    break;
                }
            }

            if ($CType == '') {
                try {
                    $cmd = [];
                    $cmd['tt_content'][$gridElement['uid']]['delete'] = 1;
                    $this->dataHandler->start([], $cmd);
                    $this->dataHandler->process_cmdmap();
                    $this->deleteContentElementsInGridElement($gridElement);
                } catch (Exception $exception) {
                    var_dump($exception->getMessage());
                }

                continue;
            }

            $data = [];

            if ($migrateFlexformValues == true) {
                $flexformContent = $this->flexformService->convertFlexFormContentToArray($gridElement['pi_flexform']);
                foreach ($flexformContent as $flexForm) {
                    $data['tt_content'][$gridElement['uid']]['tx_avocado_headline'] = $flexForm['headline'] ?? '';
                    $data['tt_content'][$gridElement['uid']]['header_layout'] = $flexForm['headlineType'] ?? '';
                }
            }

            $data['tt_content'][$gridElement['uid']]['CType'] = $CType;

            try {
                $this->dataHandler->start($data, []);
                $this->dataHandler->process_datamap();
            } catch (\Exception $e) {
                var_dump($e->getMessage());
            }

            $this->updateContentElementsInGridElement($gridElement);
            $this->output->writeln('Gridelement' . $gridElement['tx_gridelements_backend_layout'] . ' was updated');
        }

        return true;
    }

    public function updateNecessary(): bool
    {
        $updateNecessary = false;

        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tt_content');
        $queryBuilder->getRestrictions()
            ->removeAll()
            ->add(GeneralUtility::makeInstance(DeletedRestriction::class));
        $elementCount = $queryBuilder->count('tt_content.uid')
            ->from('tt_content')
            ->andWhere(
                $queryBuilder->expr()
                    ->eq('tt_content.CType', $queryBuilder->createNamedParameter('gridelements_pi1'))
            )
            ->executeQuery()
            ->fetchFirstColumn();

        if ($elementCount > 0) {
            $updateNecessary = true;
        }

        return $updateNecessary;
    }

    protected function getMapping(): array
    {
        return [
            # Accordion
            'accordion' => [
                'container' => 'b13-accordion',
                'migrateFlexformValues' => false,
                'columns' => [
                    '20' => '201',
                ],
            ],
            # Accordion
            'grid-fullwidth' => [
                'container' => 'b13-fullwidth',
                'migrateFlexformValues' => false,
                'columns' => [
                    '20' => '201',
                ],
            ],
            # Accordion Tab
            'accordionItem' => [
                'container' => 'b13-accordion-item',
                'migrateFlexformValues' => false,
                'columns' => [
                    '20' => '201',
                ],
            ],
            # Two-Columns: 50/50
            'grid-50-50' => [
                'container' => 'b13-50-50',
                'migrateFlexformValues' => false,
                'columns' => [
                    '20' => '201',
                    '21' => '202',
                ],
            ],
            # Two-Columns: 50/50
            'grid-40-80' => [
                'container' => 'b13-40-80',
                'migrateFlexformValues' => false,
                'columns' => [
                    '20' => '201',
                    '21' => '202',
                ],
            ],
            'grid-80-40' => [
                'container' => 'b13-80-40',
                'migrateFlexformValues' => false,
                'columns' => [
                    '20' => '201',
                    '21' => '202',
                ],
            ],
            'grid-40-40-40' => [
                'container' => 'b13-40-40-40',
                'migrateFlexformValues' => false,
                'columns' => [
                    '20' => '201',
                    '21' => '202',
                    '22' => '203',
                ],
            ],
            'grid-30-30-30-30' => [
                'container' => 'b13-30-30-30-30',
                'migrateFlexformValues' => false,
                'columns' => [
                    '20' => '201',
                    '21' => '202',
                    '22' => '203',
                    '23' => '204',
                ],
            ],
        ];
    }

    protected function updateContentElementsInGridElement($gridElement): void
    {
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tt_content');
        $queryBuilder->getRestrictions()
            ->removeAll()
            ->add(GeneralUtility::makeInstance(DeletedRestriction::class));
        $elementsInGridElement = $queryBuilder->select('*')
            ->from('tt_content')
            ->andWhere(
                $queryBuilder->expr()
                    ->eq(
                        'tt_content.tx_gridelements_container',
                        $queryBuilder->createNamedParameter($gridElement['uid'])
                    )
            )->executeQuery()
            ->fetchAllAssociative();

        $data = [];
        foreach ($elementsInGridElement as $elementInGridElement) {
            $colPos = '';
            $fallbackColPos = '';
            foreach ($this->getMapping() as $gridElementName => $mappingInstructions) {
                if ($gridElementName == $gridElement['tx_gridelements_backend_layout']) {
                    foreach ($mappingInstructions['columns'] as $gridElementColumn => $targetColumn) {
                        if ($fallbackColPos == '') {
                            $fallbackColPos = $targetColumn;
                        }

                        if ($gridElementColumn == $elementInGridElement['tx_gridelements_columns']) {
                            $colPos = $targetColumn;
                            break;
                        }
                    }

                    break;
                }
            }

            if ($colPos == '') {
                $data['tt_content'][$elementInGridElement['uid']]['colPos'] = $fallbackColPos;
                $data['tt_content'][$elementInGridElement['uid']]['hidden'] = 1;
                $data['tt_content'][$elementInGridElement['uid']]['tx_container_parent'] = $gridElement['uid'];
                if ($fallbackColPos == '') {
                    // do nothing
                }
            } else {
                $data['tt_content'][$elementInGridElement['uid']]['colPos'] = $colPos;
                $data['tt_content'][$elementInGridElement['uid']]['tx_container_parent'] = $gridElement['uid'];
            }
        }

        try {
            $this->dataHandler->start($data, []);
            $this->dataHandler->process_datamap();
        } catch (Exception $exception) {
            var_dump($exception->getMessage());
        }
    }

    protected function deleteContentElementsInGridElement($gridElement): void
    {
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tt_content');
        $queryBuilder->getRestrictions()
            ->removeAll()
            ->add(GeneralUtility::makeInstance(DeletedRestriction::class));
        $elementsInGridElement = $queryBuilder->select('*')
            ->from('tt_content')
            ->andWhere(
                $queryBuilder->expr()
                    ->eq(
                        'tt_content.tx_gridelements_container',
                        $queryBuilder->createNamedParameter($gridElement['uid'])
                    )
            )->executeQuery()
            ->fetchAllAssociative();

        foreach ($elementsInGridElement as $elementInGridElement) {
            try {
                $cmd = [];
                $cmd['tt_content'][$elementInGridElement['uid']]['delete'] = 1;
                $this->dataHandler->start([], $cmd);
                $this->dataHandler->process_cmdmap();
            } catch (Exception $exception) {
                var_dump($exception->getMessage());
            }
        }
    }
}
