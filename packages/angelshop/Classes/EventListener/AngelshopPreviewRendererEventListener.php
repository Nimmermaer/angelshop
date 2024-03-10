<?php

namespace MB\Angelshop\EventListener;

use MB\Angelshop\Domain\Model\Tab;
use MB\Angelshop\Domain\Repository\TabRepository;
use TYPO3\CMS\Backend\View\Event\PageContentPreviewRenderingEvent;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/***************************************************************
 *  Copyright notice
 *  (c) 2016 Michael Blunck <mi.blunck@gmail.com>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

final readonly class AngelshopPreviewRendererEventListener
{
    public function __invoke(PageContentPreviewRenderingEvent $event): void
    {
        $itemContent = '';

        $function = 'show' . str_replace(' ', '', ucwords(str_replace('_', ' ', (string) $event->getRecord()['CType'])));
        if (method_exists($this, $function)) {
            $itemContent .= call_user_func(
                [$this, $function],
                [
                    'data' => $event->getRecord(),
                ]
            );
        }
        if ($itemContent) {
            $event->setPreviewContent($itemContent);
        }
    }

    public function showTxSlider(array $arguments): string
    {
        $addContent = 'Slides:' . $arguments['data']['image'];

        return $addContent . '<h3>Slider</h3>';
    }

    public function showTxTab(array $arguments): string
    {
        $addContent = '';
        $i = 1;
        $repository = GeneralUtility::makeInstance(TabRepository::class);
        $tabs = $repository->findByRecord($arguments['data']['uid']);
        if ($tabs) {
            /** @var Tab $item */
            foreach ($tabs as $item) {
                $addContent .= 'Tab-' . $i . '<br/>';
                $addContent .= '<strong>' . $item->header . '</strong>';
                $addContent .= '<p>' . substr(
                    (string) $item->text,
                    0,
                    80
                ) . '</p> <hr style="background-color:black; "  />';
                $i++;
            }
        }

        return $addContent . '<h3>Tab</h3>';
    }

    public function showTxImpressum(array $arguments): string
    {
        $addContent = 'GoogleMap Addresse: ' . $arguments['data']['tx_angelshop_address'];

        return $addContent . '<h3>Impressum</h3>';
    }

    public function showTextmedia(array $arguments): string
    {
        $addContent = '';
        if ($arguments['data']['layout'] == 1) {
            $addContent = '<h3>Team Element</h3>';
        }
        if ($arguments['data']['layout'] == 2) {
            $addContent = '<h3>Projekt Element</h3>';
        }
        if ($arguments['data']['layout'] == 3) {
            $addContent = '<h3>Call To Action Element</h3>';
        }
        if ($arguments['data']['layout'] == 4) {
            $addContent = '<h3>Teaser Element</h3>';
        }
        return $addContent;
    }
}
