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
 * Demonstrating the MemoryUsage Processor of the TYPO3 Logging API
 *
 */
class Tx_LogExample_Demonstration_Processor_MemoryUsage extends Tx_LogExample_Demonstration_Processor_Abstract {

	/**
	 * Set Configuration
	 *
	 * @return void
	 * @static
	 */
	static protected function initializeConfiguration() {
		parent::initializeConfiguration();

			// Configure Processor
		$GLOBALS['TYPO3_CONF_VARS']['LOG']['Tx']['LogExample']['Demonstration']['Processor']['MemoryUsage'] = array(
			'processorConfiguration' => array(
				t3lib_log_Level::DEBUG => array(
					't3lib_log_processor_MemoryUsage' => array(
					)
				)
			)
		);
	}

	/**
	 * Execute the demo
	 *
	 * @return string A speaking message
	 */
	static public function execute() {

		self::initializeConfiguration();

		$message = 'This debug message has been written to ' .
			$GLOBALS['TYPO3_CONF_VARS']['LOG']['Tx']['LogExample']['Demonstration']['Processor']['writerConfiguration'][t3lib_log_Level::DEBUG]['t3lib_log_writer_File']['logFile'] .
			' with additional data from t3lib_log_processor_MemoryUsage'
		;

			// Get a logger for the class
		$logger = t3lib_log_LogManager::getLogger(__CLASS__);

			// Write to Log
		$logger->debug($message);

		return $message;
	}
}

?>