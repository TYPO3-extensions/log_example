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
 * A demonstration for using Email LogWriter from the log_emailwriter extension.
 *
 */
class Tx_LogExample_Demonstration_Writer_Email {

	/**
	 * Set Configuration
	 *
	 * @return void
	 * @static
	 */
	static protected function initializeConfiguration() {
		$GLOBALS['TYPO3_CONF_VARS']['LOG']['Tx']['LogExample']['Demonstration']['Writer']['Email'] = array(
			'writerConfiguration' => array(
				\TYPO3\CMS\Core\Log\LogLevel::EMERGENCY => array(
					'Tx_LogWriteremail_Log_Writer_Email' => array(
						'recipient' => 'foo@example.com',
						'sender' => 'bar@example.com',
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

		$extKey = 'log_writeremail';
		if (!\TYPO3\CMS\Core\Extension\ExtensionManager::isLoaded($extKey)) {
			return 'Warning. Could not send log to E-Mail, because Extension ' . $extKey . ' is not installed. It can be found at forge.typo3.org';
		}

		self::initializeConfiguration();

			/** @var \TYPO3\CMS\Core\Log\Logger $logger */
		$logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);

			// Temporarily set mail transport to mbox.
		$originalMailConfiguration = $GLOBALS['TYPO3_CONF_VARS']['MAIL'];
		$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = 'mbox';
		$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_mbox_file'] = 'typo3temp/logs/log_example/email-logs.mbox';

		$message = 'This emergency message has been send by email to ' .
			$GLOBALS['TYPO3_CONF_VARS']['LOG']['Tx']['LogExample']['Demonstration']['Writer']['Email']['writerConfiguration'][\TYPO3\CMS\Core\Log\LogLevel::EMERGENCY]['Tx_LogWriteremail_Log_Writer_Email']['recipient'] .
			' by using Tx_LogWriteremail_Log_Writer_Email shipped with EXT:' . $extKey .
			'. The mail was not sent via smtp, but saved into file ' . $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_mbox_file'];
		$data = array('foo' => 'bar', 'faz' => 'baz');

			// Log method
		$logger->emergency($message, $data);

			// Now reset the mail configuration.
		$GLOBALS['TYPO3_CONF_VARS']['MAIL'] = $originalMailConfiguration;

		return $message;
	}
}

?>