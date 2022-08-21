<?php

namespace MB\Angelshop\ViewHelpers\Social\Facebook;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>
 */

/**
 * Class ShareViewHelper
 * @package MB\Angelshop\ViewHelpers\Social\Facebook
 */
class ShareViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('text', 'string', 'text');
    }


    public function render(): string
    {
        if (is_null($this->arguments['text'])) {
            return '';
        }

        $uri = empty($this->arguments['shareurl']) ? GeneralUtility::getIndpEnv('TYPO3_REQUEST_URL') : $this->arguments['shareurl'];
        $urlEncode = rawurlencode($uri);
        return 'https://www.facebook.com/sharer.php?u=' . $urlEncode . '&t=' . $this->arguments['text'];
    }
}
