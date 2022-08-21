<?php

namespace MB\Angelshop\ViewHelpers;

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>
 */

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class MapViewHelper
 * @package MB\Angelshop\ViewHelpers
 */
class MapViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('address', 'string', 'Address');
        $this->registerArgument('name', 'string', 'Name');
    }


    public function render(): string
    {
        $mapsLocation = '';
        if ($this->arguments['name']) {
            $mapsLocation = trim($this->arguments['name']);
        }
        if ($this->arguments['address']) {
            $mapsLocation .= trim($this->arguments['address']);
        }

        return rawurlencode($mapsLocation);
    }
}
