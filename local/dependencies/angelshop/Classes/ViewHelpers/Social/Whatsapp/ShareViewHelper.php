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
class ShareViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     * Arguments initialization
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('text', 'string', 'text');
    }

    /**
     * @param string $text
     *
     * @return string|null
     */
    public function render()
    {
        if (is_null($this->arguments['text'])) {
            return null;
        }

        $uri       = empty( $this->arguments['shareurl'] ) ? \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('TYPO3_REQUEST_URL') : $this->arguments['shareurl'];
        $urlEncode = rawurlencode($uri);
        $text = rawurlencode($this->arguments['text']. " ");
        $content   = 'whatsapp://send?text=' . $this->arguments['text']  . $urlEncode;

        return $content;
    }
}
