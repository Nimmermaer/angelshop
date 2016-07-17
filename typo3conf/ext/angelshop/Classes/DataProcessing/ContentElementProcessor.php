<?php
namespace MB\Angelshop\DataProcessing;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 19.06.2016
 * Time: 22:48
 */

/**
 * Class ContentElementProcessor
 * @package MB\Angelshop\DataProcessing
 */
class ContentElementProcessor implements DataProcessorInterface {


	/**
	 * fontAwesomeRepository
	 *
	 * @var \MB\Angelshop\Domain\Repository\FontawesomeRepository
	 * @inject
	 */
	protected $fontawesomeRepository = null;


	/**
	 * @param ContentObjectRenderer $cObj
	 * @param array $contentObjectConfiguration
	 * @param array $processorConfiguration
	 * @param array $processedData
	 *
	 * @return array
	 */
	public function process(
		ContentObjectRenderer $cObj,
		array $contentObjectConfiguration,
		array $processorConfiguration,
		array $processedData
	) {


		$function = 'processFor' . str_replace( ' ', '',
				ucwords( str_replace( "_", " ", $contentObjectConfiguration['templateName'] ) ) );
		if ( method_exists( $this, $function ) ) {
			$processedData[ $contentObjectConfiguration['templateName'] ] = call_user_func( array(
				$this,
				$function,
			), $processedData );
		}

		return $processedData;
	}

	/**
	 * @param $processedData
	 *
	 * @return string
	 */
	public function processForTextMedia( $processedData ) {
		$objectManager =
			\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( 'TYPO3\\CMS\\Extbase\\Object\\ObjectManager' );
		$repository    = $objectManager->get( 'MB\\Angelshop\\Domain\\Repository\\FontawesomeRepository' );

		return $repository->findByRecord( $processedData['data']['uid'] );
	}
}