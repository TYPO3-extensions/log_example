<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	$_EXTKEY,
	'Logexample',
	array(
		'Demo' => 'demo',

	),
	array(
		'Demo' => 'demo',

	)
);

?>