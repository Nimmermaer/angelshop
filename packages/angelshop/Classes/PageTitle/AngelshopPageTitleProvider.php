<?php

declare(strict_types=1);

namespace MB\Angelshop\PageTitle;

use TYPO3\CMS\Core\PageTitle\PageTitleProviderInterface;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

final readonly class AngelshopPageTitleProvider implements PageTitleProviderInterface
{
    public function __construct(
        private SiteFinder $siteFinder,
    ) {}

    public function getTitle(): string
    {
        $site = $this->siteFinder->getSiteByPageId($this->getTypoScriptFrontendController()->page['uid']);
        $title = $this->getTypoScriptFrontendController()->page['title'];
        if($this->getTypoScriptFrontendController()->page['subtitle']) {
            $title = $this->getTypoScriptFrontendController()->page['title'] .' '. $this->getTypoScriptFrontendController()->page['subtitle'];
        }
        if($this->getTypoScriptFrontendController()->page['uid'] === $site->getRootPageId()) {
            $title = 'I` geh fisch`n';
        }
       return $title;
    }

    private function getTypoScriptFrontendController(): TypoScriptFrontendController
    {
        return $GLOBALS['TSFE'];
    }
}
