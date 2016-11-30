<?php
namespace MB\Angelshop\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *  (c) 23.07.2016 Michael <mi.blunck@gmail.com>
 *  All rights reserved
 *  This is a part of the TYPO3 project. The TYPO3 project is
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
 *  Created by PhpStorm.
 ******************************************************************/
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class MapViewHelper
 */
class WeatherViewHelper extends AbstractViewHelper
{
    /**
     * @param string $address
     * @param int    $opt
     * @param string $appId
     *
     * @return mixed
     * @throws \TYPO3\CMS\Fluid\Core\ViewHelper\Exception\InvalidVariableException
     */
    public function render($address = '', $opt = 0, $appId ='')
    {

        $options = [
            0 => 'weather',
            1 => 'forecast/daily',
        ];
        $settings = $this->templateVariableContainer->get('settings');
        $appId = '9e31371905782f75d67d42ff929d711e';
        $request = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(
            'http://api.openweathermap.org/data/2.5/'.$options[$opt].'?q='.rawurlencode($address) .'&units=metric&lang=de&type=day&appid='.$settings['openweathermapApi']
        );
        if($request) {
            return json_decode($request);
        }else{
            return false; 
        }
     }
}