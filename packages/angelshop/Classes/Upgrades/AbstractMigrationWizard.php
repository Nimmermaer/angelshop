<?php

namespace MB\Angelshop\Upgrades;

use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;
use TYPO3\CMS\Core\Core\Bootstrap;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Core\SystemEnvironmentBuilder;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Http\NormalizedParams;
use TYPO3\CMS\Core\Http\ServerRequest;
use TYPO3\CMS\Core\Http\ServerRequestFactory;
use TYPO3\CMS\Core\Service\FlexFormService;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Updates\DatabaseUpdatedPrerequisite;

abstract class AbstractMigrationWizard
{
    protected BackendUserAuthentication $backendUser;

    protected ?DataHandler $dataHandler = null;

    protected ?FlexFormService $flexformService = null;

    public function getPrerequisites(): array
    {
        return [DatabaseUpdatedPrerequisite::class];
    }

    protected function initializeUpdate(): void
    {
        if (! array_key_exists('TYPO3_REQUEST', $GLOBALS)) {
            /** @var SiteFinder $siteFinder */
            $siteFinder = GeneralUtility::makeInstance(SiteFinder::class);
            $site = current($siteFinder->getAllSites());

            // explicitly set server request values as on CLI they are empty and out image processors will fail to generate an absolute url
            $_SERVER['HTTP_HOST'] = $site->getBase()->getHost();
            $_SERVER['HTTPS'] = $site->getBase()->getScheme() === 'https' ? 'on' : 'off';

            $request = (new ServerRequest())
                ->withAttribute('applicationType', SystemEnvironmentBuilder::REQUESTTYPE_FE)
                ->withAttribute('site', $site);
            $GLOBALS['TYPO3_REQUEST'] = $request;
        }

        if ($GLOBALS['BE_USER'] === null) {
            $GLOBALS['BE_USER'] = GeneralUtility::makeInstance(BackendUserAuthentication::class);
            $serverRequest = ServerRequestFactory::fromGlobals();
            $normalizedParams = GeneralUtility::makeInstance(
                NormalizedParams::class,
                $serverRequest->getServerParams(),
                $GLOBALS['TYPO3_CONF_VARS']['SYS'],
                Environment::getCurrentScript(),
                Environment::getPublicPath()
            );
            $serverRequest = $serverRequest->withAttribute('normalizedParams', $normalizedParams);
            $GLOBALS['BE_USER']->start($serverRequest);
        }

        Bootstrap::initializeBackendAuthentication();
        Bootstrap::initializeLanguageObject();

        $this->backendUser = $GLOBALS['BE_USER'];

        $this->dataHandler = GeneralUtility::makeInstance(DataHandler::class);

        $this->flexformService = GeneralUtility::makeInstance(FlexFormService::class);
    }
}
