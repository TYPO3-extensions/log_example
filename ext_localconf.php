<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
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