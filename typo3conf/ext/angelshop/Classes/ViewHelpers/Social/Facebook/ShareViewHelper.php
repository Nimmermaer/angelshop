<?php
namespace MB\Angelshop\ViewHelpers\Social\Facebook;

	/*  | This extension is part of the TYPO3 project. The TYPO3 project is
	 *  | free software and is licensed under GNU General Public License.
	 *  |
	 *  | (c) 2015-2016 Michael <michael.blunck@phth.de>, PHTH
	 */

/**
 * Class ShareViewHelper
 * @package MB\Angelshop\ViewHelpers\Social\Facebook
 */
class ShareViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	/**
	 * @param string $text
	 *
	 * @return string|null
	 */
	public function render( $text ) {
		if ( is_null( $text ) ) {
			return null;
		}

		$uri       = empty( $this->arguments['shareurl'] ) ? \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv( 'TYPO3_REQUEST_URL' ) : $this->arguments['shareurl'];
		$urlEncode = rawurlencode( $uri );
		$content   = 'https://www.facebook.com/sharer.php?u=' . $urlEncode . '&t=' . $text;

		return $content;
	}
}
