<?php

namespace TYPO3\CMS\LogExample\Demonstration\Usage;

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
 * A demonstration for Logging in namespaced classes with the TYPO3 Logging API
 *
 */
class NamespaceDemonstration {

	/**
	 * Execute the demo
	 *
	 * @return string A speaking message
	 */
	static public function execute() {
		$GLOBALS['TYPO3_CONF_VARS']['LOG']['TYPO3']['CMS']['LogExample']['Demonstration']['Usage'] = array(
			'writerConfiguration' => array(
				\TYPO3\CMS\Core\Log\LogLevel::DEBUG => array(
					'\\TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => array(
						'logFile' => 'typo3temp/logs/log_example/demo.log',
					)
				)
			)
		);

			/** @var \TYPO3\CMS\Core\Log\Logger $logger */
		$logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);

			// Log method
		$message = 'This debug message has been written to ' .
			$GLOBALS['TYPO3_CONF_VARS']['LOG']['TYPO3']['CMS']['LogExample']['Demonstration']['Usage']['writerConfiguration'][\TYPO3\CMS\Core\Log\LogLevel::DEBUG]['\\TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter']['logFile'] .
			' by calling $logger->debug($message);';
		$logger->debug($message);

		return $message;
	}
}

?>