<?php


defined('TYPO3') || die();

call_user_func(
    function ($extensionKey, $table): void {
        foreach (\MB\Angelshop\Utility\Container::CONFIGURATION as $key => $columnConfigurations) {
            $colPositions = [];
            $langKey = '.';

            if ($columnConfigurations['customLangKey'] ?? false) {
                $langKey = '.' . $key;
            }
            foreach ($columnConfigurations['colPos'] as $colPosId => $colPosConfiguration) {
                $colPositions[] = [
                    'name' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/Backend/Container/locallang.xlf:tt_content.colPos.' . $colPosId . $langKey,
                    'colPos' => $colPosId,
                    'allowed' => $colPosConfiguration['allowed'],
                ];
            }
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
                (
                new \B13\Container\Tca\ContainerConfiguration(
                    $key,
                    'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/Backend/Container/locallang.xlf:tt_content.CType.' . $key . '.title',
                    'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/Backend/Container/locallang.xlf:tt_content.CType.' . $key . '.description',
                    [$colPositions]
                )
                )->setIcon($columnConfigurations['containerIcon'])
            );
        }
        foreach (\MB\Angelshop\Utility\Container::CONFIGURATION as $containerName => $columnConfigurations) {
            $GLOBALS['TCA']['tt_content']['types'][$containerName]['showitem'] =
                '
                    --palette--;;general,
                    --palette--;;headers,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,';
        }

    },
    'angelshop',
    'tt_content'
);
