<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 27.08.2017
 * Time: 11:08
 */

namespace MB\Angelshop\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
/**
 * Class TrimViewHelper
 * @package MB\Angelshop\ViewHelpers
 */
class TrimViewHelper extends AbstractViewHelper
{

    /**
     * Arguments initialization
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('value', 'string', 'The value to output');
    }

    /**
     * @return string
     */
    public function render()
    {
        if ($this->arguments['value'] === NULL) {
            $this->arguments['value'] = $this->renderChildren();
        }
        // remove new line - does not matter in html anyway
        $this->arguments['value'] = str_replace(chr(10), '', $this->arguments['value']);
        $this->arguments['value'] = str_replace(' ', '', $this->arguments['value']);
        $this->arguments['value'] = str_replace('/', '', $this->arguments['value']);
        // remove multiple whitespaces
        $this->arguments['value'] = preg_replace('#\s+#', '', $this->arguments['value']);
        return trim($this->arguments['value']);
    }
}