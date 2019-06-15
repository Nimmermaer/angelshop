<?php

namespace MB\Angelshop\Controller;


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


/**
 * Class WeatherController
 * @package MB\Angelshop\Controller
 */
class WeatherController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{


    /**
     * action list
     * @return void
     */
    public function listAction()
    {
        $address = $this->settings['arguments']['address'];
        $apiId = $this->settings['arguments']['appid'];
        $request = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(
            'http://api.openweathermap.org/data/2.5/weather?q=' . rawurlencode($address) . '&units=metric&lang=de&type=day&appid=' . $apiId
        );
        $this->view->assign('weather', json_decode($request));
    }

    /**
     * @param $gallery
     *
     * @return bool|mixed
     */
    public function showAction()
    {
        $address = $this->settings['arguments']['address'];
        $apiId = $this->settings['arguments']['appid'];
        $request = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(
            'http://api.openweathermap.org/data/2.5/weather?q=' . rawurlencode($address) . '&units=metric&lang=de&type=day&appid=' . $apiId
        );
        $this->view->assign('weather', json_decode($request));
    }

    public function forecastAction()
    {
        $address = $this->settings['arguments']['address'];
        $apiId = $this->settings['arguments']['appid'];
        $request = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(
            'http://api.openweathermap.org/data/2.5/forecast/daily?q=' . rawurlencode($address) . '&units=metric&lang=de&type=day&appid=' . $apiId
        );
        $this->view->assign('forecast', json_decode($request));
    }

}