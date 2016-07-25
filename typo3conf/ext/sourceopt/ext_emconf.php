<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "sourceopt".
 *
 * Auto generated | Identifier: eca2094e6eca49afd621502d92f159d4
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Source Optimization',
	'description' => 'Optimization of the final page: reformatting the (x)html output, removal of new lines, and quotes. Move development repository to https://github.com/lochmueller/sourceopt',
	'category' => 'fe',
	'version' => '0.9.3',
	'state' => 'beta',
	'author' => 'Dr. Ronald P. Steiner, Boris Nicolai, Tim Lochmueller',
	'author_email' => 'ronald.steiner@googlemail.com, boris.nicolai@andavida.com, tim@fruit-lab.de',
	'author_company' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-7.99.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'uploadfolder' => true,
	'createDirs' => NULL,
	'clearcacheonload' => true,
	'_md5_values_when_last_written' => 'a:21:{s:36:"Classes/Service/CleanHtmlService.php";s:4:"852f";s:29:"Classes/User/FrontendHook.php";s:4:"e0e5";s:38:"Configuration/TypoScript/constants.txt";s:4:"1779";s:34:"Configuration/TypoScript/setup.txt";s:4:"4441";s:33:"Documentation/Changelog/Index.rst";s:4:"9f7f";s:26:"Documentation/Includes.txt";s:4:"3348";s:23:"Documentation/Index.rst";s:4:"1a70";s:30:"Documentation/Issues/Index.rst";s:4:"3576";s:26:"Documentation/Settings.yml";s:4:"cfc3";s:25:"Documentation/Targets.rst";s:4:"3385";s:55:"Documentation/TyposcriptReferenceForSourceopt/Index.rst";s:4:"c9f7";s:60:"Documentation/TyposcriptSetupForClean(x)htmlOutput/Index.rst";s:4:"443e";s:51:"Documentation/TyposcriptSetupForSourceopt/Index.rst";s:4:"8464";s:35:"Documentation/UsersManual/Index.rst";s:4:"ba83";s:9:"README.md";s:4:"e126";s:40:"Resources/Private/Language/locallang.xlf";s:4:"323c";s:43:"Tests/Unit/Service/CleanHtmlServiceTest.php";s:4:"cffe";s:12:"ext_icon.png";s:4:"454a";s:17:"ext_localconf.php";s:4:"9ab5";s:14:"ext_tables.php";s:4:"95c2";s:13:"composer.json";s:4:"092f";}',
);

?>