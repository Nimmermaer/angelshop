<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 27.08.2017
 * Time: 11:08
 */

namespace MB\Angelshop\ViewHelpers;


class TrimViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * @param mixed $value The value to output
     * @return string
     */
    public function render($value = NULL) {
        if ($value === NULL) {
            $value =  $this->renderChildren();
        }
        // remove new line - does not matter in html anyway
        $value = str_replace(chr(10), '', $value);
        $value = str_replace(' ', '', $value);
        $value = str_replace('/', '', $value);
        // remove multiple whitespaces
        $value = preg_replace ('#\s+#' , '' , $value);
        return trim($value);
    }
}