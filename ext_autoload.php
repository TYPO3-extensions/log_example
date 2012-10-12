<?php

$extensionPath = \TYPO3\CMS\Core\Extension\ExtensionManager::extPath('log_example');
$extensionClassesPath = $extensionPath . 'Classes/';
return array(
	'tx_logexample_controller_democontroller' => $extensionClassesPath . 'Controller/DemoController.php',
	'tx_logexample_demonstration_processor_abstract' => $extensionClassesPath . 'Demonstration/Processor/Abstract.php',
	'tx_logexample_demonstration_processor_introspection' => $extensionClassesPath . 'Demonstration/Processor/Introspection.php',
	'tx_logexample_demonstration_processor_memorypeakusage' => $extensionClassesPath . 'Demonstration/Processor/MemoryPeakUsage.php',
	'tx_logexample_demonstration_processor_memoryusage' => $extensionClassesPath . 'Demonstration/Processor/MemoryUsage.php',
	'tx_logexample_demonstration_processor_typo3version' => $extensionClassesPath . 'Demonstration/Processor/Typo3Version.php',
	'tx_logexample_demonstration_processor_web' => $extensionClassesPath . 'Demonstration/Processor/Web.php',
	'tx_logexample_demonstration_usage_abstract' => $extensionClassesPath . 'Demonstration/Usage/Abstract.php',
	'tx_logexample_demonstration_usage_additionaldata' => $extensionClassesPath . 'Demonstration/Usage/AdditionalData.php',
	'tx_logexample_demonstration_usage_basic' => $extensionClassesPath . 'Demonstration/Usage/Basic.php',
	'tx_logexample_demonstration_usage_deprecation' => $extensionClassesPath . 'Demonstration/Usage/Deprecation.php',
	'tx_logexample_demonstration_usage_loglevels' => $extensionClassesPath . 'Demonstration/Usage/LogLevels.php',
	'tx_logexample_demonstration_usage_methodchaining' => $extensionClassesPath . 'Demonstration/Usage/MethodChaining.php',
	'tx_logexample_demonstration_usage_shorthandsyntax' => $extensionClassesPath . 'Demonstration/Usage/ShorthandSyntax.php',
	'tx_logexample_demonstration_writer_database' => $extensionClassesPath . 'Demonstration/Writer/Database.php',
	'tx_logexample_demonstration_writer_file' => $extensionClassesPath . 'Demonstration/Writer/File.php',
	'tx_logexample_demonstration_writer_phperrorlog' => $extensionClassesPath . 'Demonstration/Writer/PhpErrorLog.php',
	'tx_logexample_demonstration_writer_stderr' => $extensionClassesPath . 'Demonstration/Writer/StdErr.php',
	'tx_logexample_demonstration_writer_syslog' => $extensionClassesPath . 'Demonstration/Writer/Syslog.php',
	'tx_logexample_log_processor_typo3version' => $extensionClassesPath . 'Log/Processor/Typo3Version.php',
	'tx_logexample_log_writer_stderr' => $extensionClassesPath . 'Log/Writer/StdErr.php',
);
?>