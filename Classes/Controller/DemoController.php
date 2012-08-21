<?php
/***************************************************************
* Copyright notice
*
* (c) 2012 Steffen Müller <typo3@t3node.com>
*
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller for the demonstration of the TYPO3 Logging API
 *
 */
class Tx_LogExample_Controller_DemoController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * A logger instance for this class
	 *
	 * @var t3lib_log_Logger
	 */
	protected $logger;

	/**
	 * Get a logger for the class
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->logger = t3lib_div::makeInstance('t3lib_log_LogManager')->getLogger(__CLASS__);
	}

	/**
	 * Execute all Demos and assign results to view
	 *
	 * @return void
	 */
	public function demoAction() {
		$demos = array();

		$demoClasses = array(

				// Usage Demos
			'Tx_LogExample_Demonstration_Usage_Basic',
			'Tx_LogExample_Demonstration_Usage_AdditionalData',
			'Tx_LogExample_Demonstration_Usage_ShorthandSyntax',
			'Tx_LogExample_Demonstration_Usage_MethodChaining',
			'Tx_LogExample_Demonstration_Usage_Deprecation',
			'Tx_LogExample_Demonstration_Usage_LogLevels',

				// Writer Demos
			'Tx_LogExample_Demonstration_Writer_Syslog',
			'Tx_LogExample_Demonstration_Writer_PhpErrorLog',
			'Tx_LogExample_Demonstration_Writer_File',
			'Tx_LogExample_Demonstration_Writer_Database',
			'Tx_LogExample_Demonstration_Writer_StdErr',
			'Tx_LogExample_Demonstration_Writer_Email',

				// Processor Demos
			'Tx_LogExample_Demonstration_Processor_Introspection',
			'Tx_LogExample_Demonstration_Processor_Web',
			'Tx_LogExample_Demonstration_Processor_MemoryUsage',
			'Tx_LogExample_Demonstration_Processor_MemoryPeakUsage',
			'Tx_LogExample_Demonstration_Processor_Typo3Version',
		);

		foreach ($demoClasses as $class) {
			$demos[$class] = $class::execute();
		}

		$this->view->assign('demos', $demos);
		$this->view->assign('loggingConfiguration', $GLOBALS['TYPO3_CONF_VARS']['LOG']);

		$version = t3lib_utility_VersionNumber::convertVersionNumberToInteger(TYPO3_version);
		if ($version < 4007000) {
			$this->view->assign('debugLegacy', 'TRUE');
		}
	}

}

?>