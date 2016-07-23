<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "realurl".
 *
 * Auto generated | Identifier: ad9aa95277c7eec20d9231321e515c28
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Speaking URLs for TYPO3',
	'description' => 'Makes TYPO3 URLs search engine friendly. Donations are welcome to dmitry.dulepov@gmail.com. They help to support the extension!',
	'category' => 'services',
	'version' => '2.0.14',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry.dulepov@gmail.com',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-8.0.999',
			'php' => '5.3.2-7.0.999',
		),
		'conflicts' => 
		array (
			'cooluri' => '',
			'simulatestatic' => '',
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:54:{s:9:"README.md";s:4:"3620";s:20:"class.ext_update.php";s:4:"d4bc";s:13:"composer.json";s:4:"7151";s:21:"ext_conf_template.txt";s:4:"db8e";s:12:"ext_icon.gif";s:4:"fec8";s:17:"ext_localconf.php";s:4:"58cf";s:14:"ext_tables.php";s:4:"c64c";s:14:"ext_tables.sql";s:4:"00da";s:24:"ext_typoscript_setup.txt";s:4:"5ecd";s:29:"Classes/EncodeDecoderBase.php";s:4:"e084";s:19:"Classes/Utility.php";s:4:"b815";s:30:"Classes/Cache/CacheFactory.php";s:4:"a704";s:32:"Classes/Cache/CacheInterface.php";s:4:"31c4";s:31:"Classes/Cache/DatabaseCache.php";s:4:"d985";s:27:"Classes/Cache/NullCache.php";s:4:"75e9";s:32:"Classes/Cache/PathCacheEntry.php";s:4:"319d";s:31:"Classes/Cache/UrlCacheEntry.php";s:4:"df10";s:47:"Classes/Configuration/AutomaticConfigurator.php";s:4:"4d30";s:45:"Classes/Configuration/ConfigurationReader.php";s:4:"fb7e";s:40:"Classes/Controller/AliasesController.php";s:4:"eda4";s:46:"Classes/Controller/BackendModuleController.php";s:4:"9723";s:41:"Classes/Controller/OverviewController.php";s:4:"1c79";s:42:"Classes/Controller/PathCacheController.php";s:4:"8985";s:41:"Classes/Controller/UrlCacheController.php";s:4:"4e46";s:30:"Classes/Decoder/UrlDecoder.php";s:4:"a579";s:30:"Classes/Domain/Model/Alias.php";s:4:"8344";s:39:"Classes/Domain/Model/PathCacheEntry.php";s:4:"e988";s:38:"Classes/Domain/Model/UrlCacheEntry.php";s:4:"1901";s:48:"Classes/Domain/Repository/AbstractRepository.php";s:4:"caa5";s:45:"Classes/Domain/Repository/AliasRepository.php";s:4:"f66a";s:54:"Classes/Domain/Repository/PathCacheEntryRepository.php";s:4:"071a";s:53:"Classes/Domain/Repository/UrlCacheEntryRepository.php";s:4:"a792";s:30:"Classes/Encoder/UrlEncoder.php";s:4:"8a47";s:41:"Classes/Evaluator/SegmentFieldCleaner.php";s:4:"6a3b";s:23:"Classes/Hooks/Cache.php";s:4:"9479";s:29:"Classes/Hooks/DataHandler.php";s:4:"f64b";s:48:"Classes/ViewHelpers/LanguageFromIdViewHelper.php";s:4:"9e93";s:45:"Classes/ViewHelpers/SetVariableViewHelper.php";s:4:"f57e";s:49:"Classes/ViewHelpers/TranslateToJsonViewHelper.php";s:4:"19ae";s:42:"Configuration/TCA/tx_realurl_pathcache.php";s:4:"1c65";s:42:"Configuration/TCA/tx_realurl_uniqalias.php";s:4:"b55a";s:41:"Configuration/TCA/tx_realurl_urlcache.php";s:4:"a59f";s:37:"Configuration/TCA/Overrides/pages.php";s:4:"2c37";s:54:"Configuration/TCA/Overrides/pages_language_overlay.php";s:4:"7140";s:40:"Resources/Private/Language/locallang.xlf";s:4:"008a";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"3e3e";s:38:"Resources/Private/Layouts/Backend.html";s:4:"7731";s:45:"Resources/Private/Templates/Aliases/Edit.html";s:4:"9d0c";s:46:"Resources/Private/Templates/Aliases/Index.html";s:4:"0b19";s:47:"Resources/Private/Templates/Overview/Index.html";s:4:"0ebb";s:48:"Resources/Private/Templates/PathCache/Index.html";s:4:"e976";s:47:"Resources/Private/Templates/UrlCache/Index.html";s:4:"dd01";s:31:"Resources/Public/realurl_be.css";s:4:"9aa1";s:30:"Resources/Public/realurl_be.js";s:4:"a488";}',
);

?>