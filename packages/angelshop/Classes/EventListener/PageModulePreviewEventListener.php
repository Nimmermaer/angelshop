<?php

declare(strict_types=1);

namespace MB\Angelshop\EventListener;

use MB\Angelshop\Renderer\PagePropertiesRenderer;
use TYPO3\CMS\Backend\Controller\Event\ModifyPageLayoutContentEvent;

/**
 * Event listener to render notes in the page module.
 */
final readonly class PageModulePreviewEventListener
{
    public function __construct(
        protected PagePropertiesRenderer $pageRenderer
    ) {
    }

    /**
     * Add page properties as visible content to the header of the page module
     */
    public function __invoke(ModifyPageLayoutContentEvent $event): void
    {
        $event->addHeaderContent($this->pageRenderer->showPageProperties($event->getRequest()));
    }
}
