<?php
namespace MB\Angelshop\ViewHelpers;


    /*  | This extension is part of the TYPO3 project. The TYPO3 project is
     *  | free software and is licensed under GNU General Public License.
     *  |
     *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>
     */

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class MapViewHelper
 * @package MB\Angelshop\ViewHelpers
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