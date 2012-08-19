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
 * Demonstrating the file writer of the TYPO3 Logging API
 *
 */
class Tx_LogExample_Demonstration_Writer_File {

	/**
	 * Set Configuration
	 *
	 * @return void
	 * @static
	 */
	static protected function initializeConfiguration() {
		$GLOBALS['TYPO3_CONF_VARS']['LOG']['Tx']['LogExample']['Demonstration']['Writer']['File'] = array(
			'writerConfiguration' => array(
				t3lib_log_Level::ERROR => array(
					't3lib_log_writer_File' => array(
						'logFile' => 'typo3temp/logs/log_example/demo.log',
					)
				),
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

		$message = 'This error message has been written to file ' .
			$GLOBALS['TYPO3_CONF_VARS']['LOG']['Tx']['LogExample']['Demonstration']['Writer']['File']['writerConfiguration'][t3lib_log_Level::ERROR]['t3lib_log_writer_File']['logFile'] .
			' by using t3lib_log_writer_File'
		;
		$data = array('foo' => 'bar', 'faz' => 'baz');

			// Get a logger for the class
		$logger = t3lib_div::makeInstance('t3lib_log_LogManager')->getLogger(__CLASS__);

			// Write to Log
		$logger->error($message, $data);

		return $message;
	}
}

?>