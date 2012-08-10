<?php
/***************************************************************
* Copyright notice
*
* (c) 2012 Steffen Müller (typo3@t3node.com)
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
 * Web log processor to automatically add TYPO3 version to a log record
 * record.
 *
 * @author Steffen Müller <typo3@t3node.com>
 * @package TYPO3
 * @subpackage t3lib
 */
class Tx_LogExample_Log_Processor_Typo3Version extends t3lib_log_processor_Abstract {

	/**
	 * Processes a log record and adds TYPO3 version data.
	 *
	 * @param t3lib_log_Record $logRecord The log record to process
	 * @return t3lib_log_Record The processed log record with additional data
	 */
	public function processLogRecord(t3lib_log_Record $logRecord) {

		$data = array(
			'TYPO3_version' => TYPO3_version,
		);
		$logRecord->addData($data);

		return $logRecord;
	}

}

?>