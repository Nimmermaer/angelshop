<?php

namespace MB\Angelshop\Controller;

use Psr\Http\Message\ResponseInterface;
use stdClass;
use TYPO3\CMS\Core\Http\RequestFactory;
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

class WeatherController extends ActionController
{
    public string $address = '';

    public string $appId = '';

    public string $statusCode = '';

    public ?stdClass $apiRequest = null;

    public function listAction(): ResponseInterface
    {
        $this->view->assign('weather', $this->apiRequest);
        $this->view->assign('status', $this->statusCode);
        return $this->htmlResponse();
    }

    public function showAction(): ResponseInterface
    {
        $this->view->assign('weather', $this->apiRequest);
        $this->view->assign('status', $this->statusCode);
        return $this->htmlResponse();
    }

    public function forecastAction(): ResponseInterface
    {
        $this->view->assign('forecast', $this->apiRequest);
        $this->view->assign('status', $this->statusCode);
        return $this->htmlResponse();
    }

    protected function initializeAction(): void
    {
        parent::initializeAction();
        $this->address = $this->settings['arguments']['address'];
        $this->appId = $this->settings['arguments']['appid'];
        $requestFactory = GeneralUtility::makeInstance(RequestFactory::class);
        $request = match ($this->request->getControllerActionName()) {
            'forecast' => $requestFactory->request(
                'http://api.openweathermap.org/data/2.5/forecast/daily?q=' . rawurlencode(
                    (string) $this->address
                ) . '&units=metric&lang=de&type=day&appid=' . $this->appId,
                'GET',
                [
                    'http_errors' => false,
                ]
            ),
            default => $requestFactory->request(
                'http://api.openweathermap.org/data/2.5/weather?q=' . rawurlencode(
                    (string) $this->address
                ) . '&units=metric&lang=de&type=day&appid=' . $this->appId,
                'GET',
                [
                    'http_errors' => false,
                ]
            ),
        };

        $this->statusCode = $request->getStatusCode();
        $this->apiRequest = json_decode($request->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
    }
}
