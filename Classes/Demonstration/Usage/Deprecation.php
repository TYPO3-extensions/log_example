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
 * A demonstration for deprecation Log of the TYPO3 Logging API
 *
 */
class Tx_LogExample_Demonstration_Usage_Deprecation extends Tx_LogExample_Demonstration_Usage_Abstract {

	/**
	 * Execute the demo
	 *
	 * @return string A speaking message
	 */
	static public function execute() {
		self::initializeConfiguration();

		$message = 'This deprecation warning has been written to ' .
			$GLOBALS['TYPO3_CONF_VARS']['LOG']['deprecated']['writerConfiguration'][t3lib_log_Level::WARNING]['t3lib_log_writer_File']['logFile'] .
			' by calling the deprecated method Tx_LogExample_Demonstration_Deprecation::legacyFunction().' .
			' (This demo will only work once the deprecation log has integrated the new Logging API!)'
		;

			// Call a deprecated function
		self::legacyFunction();

		return $message;
	}

	/**
	 * A deprecated function
	 * Triggers an entry in the deprecation log
	 *
	 * @deprecated
	 * @return void
	 */
	static protected function legacyFunction() {
		t3lib_div::logDeprecatedFunction();
	}
}

?>