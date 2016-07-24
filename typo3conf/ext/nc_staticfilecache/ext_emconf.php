<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "nc_staticfilecache".
 *
 * Auto generated | Identifier: f4e85ae1b65fad013df94b2cba70724f
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Static File Cache',
	'description' => 'Transparent static file cache solution using mod_rewrite and mod_expires. Increase response times for static pages by a factor of 230!!',
	'category' => 'fe',
	'version' => '3.6.0',
	'state' => 'stable',
	'clearcacheonload' => true,
	'author' => 'Static File Cache team',
	'author_email' => 'extensions@netcreators.com',
	'author_company' => 'Netcreators',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-7.99.99',
			'php' => '5.5.0-0.0.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'autoload' => 
	array (
		'psr-4' => 
		array (
			'SFC\\NcStaticfilecache\\' => 'Classes',
		),
	),
	'uploadfolder' => false,
	'createDirs' => NULL,
	'_md5_values_when_last_written' => 'a:81:{s:8:"Classes/";s:4:"d41d";s:14:"Classes/Cache/";s:4:"d41d";s:33:"Classes/Cache/AbstractBackend.php";s:4:"4d8a";s:19:"Classes/Cache/Rule/";s:4:"d41d";s:35:"Classes/Cache/Rule/AbstractRule.php";s:4:"d4fd";s:29:"Classes/Cache/Rule/Enable.php";s:4:"2ac9";s:47:"Classes/Cache/Rule/LoginDeniedConfiguration.php";s:4:"5c76";s:35:"Classes/Cache/Rule/NoIntScripts.php";s:4:"442a";s:32:"Classes/Cache/Rule/NoNoCache.php";s:4:"2913";s:39:"Classes/Cache/Rule/NoUserOrGroupSet.php";s:4:"3e0b";s:41:"Classes/Cache/Rule/NoWorkspacePreview.php";s:4:"fbc9";s:36:"Classes/Cache/Rule/PageCacheable.php";s:4:"574c";s:38:"Classes/Cache/Rule/StaticCacheable.php";s:4:"cc46";s:35:"Classes/Cache/Rule/ValidDoktype.php";s:4:"0ce7";s:31:"Classes/Cache/Rule/ValidUri.php";s:4:"a8bd";s:35:"Classes/Cache/StaticFileBackend.php";s:4:"e5f2";s:29:"Classes/Cache/UriFrontend.php";s:4:"6382";s:16:"Classes/Command/";s:4:"d41d";s:42:"Classes/Command/CacheCommandController.php";s:4:"6453";s:25:"Classes/Configuration.php";s:4:"26e8";s:13:"Classes/Hook/";s:4:"d41d";s:24:"Classes/Hook/Crawler.php";s:4:"c3b5";s:33:"Classes/Hook/InitFrontendUser.php";s:4:"c798";s:27:"Classes/Hook/LogNoCache.php";s:4:"5fde";s:35:"Classes/Hook/LogoffFrontendUser.php";s:4:"ac78";s:15:"Classes/Module/";s:4:"d41d";s:30:"Classes/Module/CacheModule.php";s:4:"05ee";s:27:"Classes/StaticFileCache.php";s:4:"aa48";s:16:"Classes/Utility/";s:4:"d41d";s:32:"Classes/Utility/CacheUtility.php";s:4:"c722";s:33:"Classes/Utility/CookieUtility.php";s:4:"a4ad";s:14:"Documentation/";s:4:"d41d";s:24:"Documentation/ChangeLog/";s:4:"d41d";s:33:"Documentation/ChangeLog/Index.rst";s:4:"7af3";s:28:"Documentation/Configuration/";s:4:"d41d";s:38:"Documentation/Configuration/Global.rst";s:4:"610d";s:40:"Documentation/Configuration/Htaccess.rst";s:4:"64bc";s:37:"Documentation/Configuration/Index.rst";s:4:"a59a";s:37:"Documentation/Configuration/Nginx.rst";s:4:"43b6";s:49:"Documentation/Configuration/PageConfiguration.rst";s:4:"deb2";s:18:"Documentation/Faq/";s:4:"d41d";s:27:"Documentation/Faq/Index.rst";s:4:"e457";s:21:"Documentation/Images/";s:4:"d41d";s:35:"Documentation/Images/monitoring.png";s:4:"af6e";s:29:"Documentation/Images/news.png";s:4:"2d21";s:37:"Documentation/Images/pagesettings.png";s:4:"0de1";s:23:"Documentation/Index.rst";s:4:"8360";s:27:"Documentation/Installation/";s:4:"d41d";s:36:"Documentation/Installation/Index.rst";s:4:"5796";s:27:"Documentation/Introduction/";s:4:"d41d";s:38:"Documentation/Introduction/Credits.rst";s:4:"a905";s:36:"Documentation/Introduction/Index.rst";s:4:"7a23";s:42:"Documentation/Introduction/Recommended.rst";s:4:"8019";s:43:"Documentation/Introduction/Requirements.rst";s:4:"341f";s:43:"Documentation/Introduction/WhatDoesItDo.rst";s:4:"c52e";s:46:"Documentation/Introduction/WhatDoesItNotDo.rst";s:4:"43d5";s:28:"Documentation/KnownProblems/";s:4:"d41d";s:37:"Documentation/KnownProblems/Index.rst";s:4:"2b50";s:25:"Documentation/Monitoring/";s:4:"d41d";s:34:"Documentation/Monitoring/Index.rst";s:4:"0848";s:24:"Documentation/NeedSpeed/";s:4:"d41d";s:33:"Documentation/NeedSpeed/Index.rst";s:4:"9194";s:19:"Documentation/News/";s:4:"d41d";s:28:"Documentation/News/Index.rst";s:4:"bd34";s:26:"Documentation/Settings.yml";s:4:"2546";s:28:"Documentation/StaticDynamic/";s:4:"d41d";s:37:"Documentation/StaticDynamic/Index.rst";s:4:"eaf5";s:19:"Documentation/ToDo/";s:4:"d41d";s:28:"Documentation/ToDo/Index.rst";s:4:"5317";s:21:"ext_conf_template.txt";s:4:"d382";s:12:"ext_icon.png";s:4:"6178";s:17:"ext_localconf.php";s:4:"ccbd";s:14:"ext_tables.php";s:4:"1ed4";s:14:"ext_tables.sql";s:4:"5856";s:10:"Resources/";s:4:"d41d";s:18:"Resources/Private/";s:4:"d41d";s:27:"Resources/Private/Language/";s:4:"d41d";s:40:"Resources/Private/Language/locallang.xml";s:4:"be0e";s:28:"Resources/Private/Templates/";s:4:"d41d";s:41:"Resources/Private/Templates/Htaccess.html";s:4:"357e";s:39:"Resources/Private/Templates/Module.html";s:4:"fe0e";}',
);

?>