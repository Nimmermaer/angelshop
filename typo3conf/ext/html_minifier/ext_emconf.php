<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "html_minifier".
 *
 * Auto generated | Identifier: 97ce00077cced0fc6d0980eec95d6ca2
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'HTML Minifier',
	'description' => 'This extension minifies the output of TYPO3 generated pages.',
	'category' => 'fe',
	'version' => '1.1.2',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Dominik Weber',
	'author_email' => 'post@dominikweber.de',
	'author_company' => 'www.dominikweber.de',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.4.0-0.0.0',
			'typo3' => '6.0.0-7.9.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:21:{s:9:"README.md";s:4:"2b5e";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"a3b5";s:14:"ext_tables.php";s:4:"b8b3";s:8:"Classes/";s:4:"d41d";s:14:"Classes/Hooks/";s:4:"d41d";s:38:"Classes/Hooks/ContentPostProcessor.php";s:4:"f7d6";s:16:"Classes/Utility/";s:4:"d41d";s:28:"Classes/Utility/Minifier.php";s:4:"6254";s:14:"Configuration/";s:4:"d41d";s:25:"Configuration/TypoScript/";s:4:"d41d";s:38:"Configuration/TypoScript/constants.txt";s:4:"4f60";s:34:"Configuration/TypoScript/setup.txt";s:4:"0619";s:14:"Documentation/";s:4:"d41d";s:26:"Documentation/Includes.txt";s:4:"cd93";s:23:"Documentation/Index.rst";s:4:"a511";s:26:"Documentation/Settings.yml";s:4:"a3dd";s:35:"Documentation/AdministratorsManual/";s:4:"d41d";s:44:"Documentation/AdministratorsManual/Index.rst";s:4:"2638";s:27:"Documentation/Introduction/";s:4:"d41d";s:36:"Documentation/Introduction/Index.rst";s:4:"f855";}',
);

?>