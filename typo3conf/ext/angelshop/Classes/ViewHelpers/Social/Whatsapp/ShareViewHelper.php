<?php
namespace MB\Angelshop\ViewHelpers\Social\Whatsapp;

    /*  | This extension is part of the TYPO3 project. The TYPO3 project is
     *  | free software and is licensed under GNU General Public License.
     *  |
     *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>,
     */

/**
 * Class ShareViewHelper
 * @package MB\Angelshop\ViewHelpers\Social\Whatsapp
 */
class ShareViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * @param string $text
     *
     * @return string|null
     */
    public function render($text)
    {
        if (is_null($text)) {
            return null;
        }

        $uri       = empty( $this->arguments['shareurl'] ) ? \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('TYPO3_REQUEST_URL') : $this->arguments['shareurl'];
        $urlEncode = rawurlencode($uri);
        $content   = 'whatsapp://send?text=' . $text . " " . $urlEncode;

        return $content;
    }
}
