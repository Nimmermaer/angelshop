<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\Translation\Command\XliffLintCommand;
use Symfony\Component\Yaml\Command\LintCommand;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    if (class_exists(XliffLintCommand::class)) {
        $services->set(XliffLintCommand::class)
            ->public()
            ->tag('console.command', [
                'command' => 'xliff:lint',
            ]);
    }
    if (class_exists(LintCommand::class)) {
        $services->set(LintCommand::class)
            ->public()
            ->args([
                '$name' => 'Yaml Linter',
            ])
            ->tag('console.command', [
                'command' => 'lint:yaml',
            ]);
    }
};
