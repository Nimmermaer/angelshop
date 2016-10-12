<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "jumpurl".
 *
 * Auto generated | Identifier: 78a0885fb7aa184563a969fe02867aa2
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'JumpURL',
	'description' => 'Allows to modify links to create Jump URLs created in the frontend of the TYPO3 Core.',
	'category' => 'fe',
	'version' => '7.6.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => false,
	'author' => 'Friends of TYPO3',
	'author_email' => 'friendsof@typo3.org',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '7.6.0-7.99.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:18:{s:11:"LICENSE.txt";s:4:"2c1c";s:9:"README.md";s:4:"da76";s:13:"composer.json";s:4:"b870";s:12:"ext_icon.png";s:4:"419e";s:17:"ext_localconf.php";s:4:"780c";s:26:"Classes/JumpUrlHandler.php";s:4:"ccf8";s:28:"Classes/JumpUrlProcessor.php";s:4:"5059";s:26:"Classes/JumpUrlUtility.php";s:4:"27fb";s:26:"Documentation/Includes.txt";s:4:"3348";s:23:"Documentation/Index.rst";s:4:"016e";s:26:"Documentation/Settings.yml";s:4:"8dac";s:25:"Documentation/Targets.rst";s:4:"3385";s:37:"Documentation/Configuration/Index.rst";s:4:"7fa8";s:36:"Documentation/Introduction/Index.rst";s:4:"9bc8";s:40:"Tests/Unit/ContentObjectRendererTest.php";s:4:"719b";s:33:"Tests/Unit/JumpUrlHandlerTest.php";s:4:"ef7c";s:35:"Tests/Unit/JumpUrlProcessorMock.php";s:4:"29cb";s:35:"Tests/Unit/JumpUrlProcessorTest.php";s:4:"5256";}',
);

?>