<?php

/***************************************************************
* Extension Manager/Repository config file for ext "log_example".
*
* Auto generated 07-08-2012 12:30
*
* Manual updates:
* Only the data in the array - everything else is removed by next
* writing. "version" and "dependencies" must not be touched!
***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Demo for Logging API',
	'description' => 'Demonstrates the features and the usage of the Logging API of TYPO3 core (>=6.0). Install Extension and add plugin to page',
	'category' => 'example',
	'author' => 'Steffen Müller',
	'author_email' => 'typo3@t3node.com',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'test',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '6.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:20:{s:12:"ext_icon.gif";s:4:"691d";s:17:"ext_localconf.php";s:4:"c03b";s:14:"ext_tables.php";s:4:"7c1e";s:37:"Classes/Controller/DemoController.php";s:4:"df89";s:49:"Classes/Demonstration/Processor/Introspection.php";s:4:"fc52";s:51:"Classes/Demonstration/Processor/MemoryPeakUsage.php";s:4:"30a4";s:47:"Classes/Demonstration/Processor/MemoryUsage.php";s:4:"ca4d";s:39:"Classes/Demonstration/Processor/Web.php";s:4:"7f60";s:40:"Classes/Demonstration/Usage/Abstract.php";s:4:"ba06";s:46:"Classes/Demonstration/Usage/AdditionalData.php";s:4:"67e9";s:37:"Classes/Demonstration/Usage/Basic.php";s:4:"dfd6";s:43:"Classes/Demonstration/Usage/Deprecation.php";s:4:"e17c";s:46:"Classes/Demonstration/Usage/MethodChaining.php";s:4:"ae0a";s:47:"Classes/Demonstration/Usage/ShorthandSyntax.php";s:4:"bd52";s:41:"Classes/Demonstration/Writer/Database.php";s:4:"8256";s:37:"Classes/Demonstration/Writer/File.php";s:4:"a2ea";s:44:"Classes/Demonstration/Writer/PhpErrorLog.php";s:4:"547a";s:39:"Classes/Demonstration/Writer/Syslog.php";s:4:"7ab7";s:38:"Resources/Private/Layouts/Default.html";s:4:"7cb6";s:42:"Resources/Private/Templates/Demo/Demo.html";s:4:"f421";}',
);

?>