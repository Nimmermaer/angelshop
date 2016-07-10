<?php
namespace MB\Angelshop\DataProcessing;

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
		$processedData['foo'] = 'This variable will be passed to Fluid';

		return $processedData;
	}
}