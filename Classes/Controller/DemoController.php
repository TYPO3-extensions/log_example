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
		$this->logger = t3lib_log_LogManager::getLogger(__CLASS__);
	}

	/**
	 * Demo Action
	 *
	 * @return void
	 */
	public function demoAction() {
		$demos = array();

			// Basic usage Demos
		$demos[] = Tx_LogExample_Demonstration_Usage_Basic::execute();
		$demos[] = Tx_LogExample_Demonstration_Usage_AdditionalData::execute();
		$demos[] = Tx_LogExample_Demonstration_Usage_ShorthandSyntax::execute();
		$demos[] = Tx_LogExample_Demonstration_Usage_MethodChaining::execute();
		$demos[] = Tx_LogExample_Demonstration_Usage_Deprecation::execute();

			// Writer Demos
		$demos[] = Tx_LogExample_Demonstration_Writer_Syslog::execute();
		$demos[] = Tx_LogExample_Demonstration_Writer_PhpErrorLog::execute();
		$demos[] = Tx_LogExample_Demonstration_Writer_File::execute();
		$demos[] = Tx_LogExample_Demonstration_Writer_Database::execute();

			// Processor Demos
		$demos[] = Tx_LogExample_Demonstration_Processor_Introspection::execute();
		$demos[] = Tx_LogExample_Demonstration_Processor_Web::execute();
		$demos[] = Tx_LogExample_Demonstration_Processor_MemoryUsage::execute();
		$demos[] = Tx_LogExample_Demonstration_Processor_MemoryPeakUsage::execute();

		$this->view->assign('loggingConfiguration', $GLOBALS['TYPO3_CONF_VARS']['LOG']);
		$this->view->assign('demos', $demos);

		$this->logger->debug('demoAction in DemoController was executed');
	}

}

?>