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
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class MapViewHelper
 */
class MapViewHelper extends AbstractViewHelper
{
    /**
     * @param string $address
     * @param string $name
     *
     * @return string
     */
    public function render($address = '', $name = '')
    {
        $mapsLocation = '';
        if ($name) {
            $mapsLocation = trim($name);
        }
        if ($address) {
            $mapsLocation .= trim($address);
        }

        return rawurlencode($mapsLocation);
    }
}