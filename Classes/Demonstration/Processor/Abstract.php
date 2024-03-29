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
 * Abstract Class for TYPO3 Logging Demos
 *
 */
abstract class Tx_LogExample_Demonstration_Processor_Abstract {

	/**
	 * Set Configuration
	 *
	 * @return void
	 * @static
	 */
	static protected function initializeConfiguration() {
		$GLOBALS['TYPO3_CONF_VARS']['LOG']['Tx']['LogExample']['Demonstration']['Processor'] = array(
			'writerConfiguration' => array(
				\TYPO3\CMS\Core\Log\LogLevel::DEBUG => array(
					'\\TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => array(
						'logFile' => 'typo3temp/logs/log_example/demo.log',
					)
				)
			)
		);
	}
}

?>