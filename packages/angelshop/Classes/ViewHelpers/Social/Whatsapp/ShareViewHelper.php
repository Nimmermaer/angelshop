<?php

namespace MB\Angelshop\ViewHelpers\Social\Whatsapp;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2015-2016 Michael <mi.blunck@gmail.com>,
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
        if ($this->arguments['text'] === null) {
            return '';
        }

        $uri = empty($this->arguments['shareurl']) ? GeneralUtility::getIndpEnv(
            'TYPO3_REQUEST_URL'
        ) : $this->arguments['shareurl'];
        $urlEncode = rawurlencode((string) $uri);
        return 'whatsapp://send?text=' . rawurlencode($this->arguments['text'] . ' ') . $urlEncode;
    }
}
