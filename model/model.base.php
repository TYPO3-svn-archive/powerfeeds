<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Sebastiaan de Jonge <szebi.eger@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Base model for the 'powerfeeds' extension.
 *
 * @author	Sebastiaan de Jonge <szebi.eger@gmail.com>
 * @package	TYPO3
 * @subpackage	powerfeeds
 */
class baseModel {
	/**
	 * Default table fields
	 */
	protected $i_uid;
	protected $i_pid;
	protected $i_tstamp;
	protected $i_crdate;
	protected $i_cruser_id;
	protected $i_deleted;
	protected $i_hidden;
	protected $i_starttime;
	protected $i_stoptime;
	
	/**
	 * Getters and setters
	 */
	
	/**
	 * @access public
	 * @return int The $i_uid
	 */
	public function getUid() {
		return $this->i_uid;
	}

	/**
	 * @access public
	 * @return int The $i_pid
	 */
	public function getPid() {
		return $this->i_pid;
	}

	/**
	 * @access public
	 * @return int The $i_tstamp
	 */
	public function getTstamp() {
		return $this->i_tstamp;
	}

	/**
	 * @access public
	 * @return int The $i_crdate
	 */
	public function getCrdate() {
		return $this->i_crdate;
	}

	/**
	 * @access public
	 * @return int The $i_cruser_id
	 */
	public function getCruser_id() {
		return $this->i_cruser_id;
	}

	/**
	 * @access public
	 * @return int The $i_deleted
	 */
	public function getDeleted() {
		return $this->i_deleted;
	}

	/**
	 * @access public
	 * @return int The $i_hidden
	 */
	public function getHidden() {
		return $this->i_hidden;
	}

	/**
	 * @access public
	 * @return int The $i_starttime
	 */
	public function getStarttime() {
		return $this->i_starttime;
	}

	/**
	 * @access public
	 * @return int The $i_stoptime
	 */
	public function getStoptime() {
		return $this->i_stoptime;
	}

	/**
	 * @access public
	 * @param int $i_uid The $i_uid to set
	 * @return void
	 */
	public function setUid($i_uid) {
		$this->i_uid = $i_uid;
	}

	/**
	 * @access public
	 * @param int $i_pid The $i_pid to set
	 * @return void
	 */
	public function setPid($i_pid) {
		$this->i_pid = $i_pid;
	}

	/**
	 * @access public
	 * @param int $i_tstamp The $i_tstamp to set
	 * @return void
	 */
	public function setTstamp($i_tstamp) {
		$this->i_tstamp = $i_tstamp;
	}

	/**
	 * @access public
	 * @param int $i_crdate The $i_crdate to set
	 * @return void
	 */
	public function setCrdate($i_crdate) {
		$this->i_crdate = $i_crdate;
	}

	/**
	 * @access public
	 * @param int $i_cruser_id The $i_cruser_id to set
	 * @return void
	 */
	public function setCruser_id($i_cruser_id) {
		$this->i_cruser_id = $i_cruser_id;
	}

	/**
	 * @access public
	 * @param int $i_deleted The $i_deleted to set
	 * @return void
	 */
	public function setDeleted($i_deleted) {
		$this->i_deleted = $i_deleted;
	}

	/**
	 * @access public
	 * @param int $i_hidden The $i_hidden to set
	 * @return void
	 */
	public function setHidden($i_hidden) {
		$this->i_hidden = $i_hidden;
	}

	/**
	 * @access public
	 * @param int $i_starttime The $i_starttime to set
	 * @return void
	 */
	public function setStarttime($i_starttime) {
		$this->i_starttime = $i_starttime;
	}

	/**
	 * @access public
	 * @param int $i_stoptime The $i_stoptime to set
	 * @return void
	 */
	public function setStoptime($i_stoptime) {
		$this->i_stoptime = $i_stoptime;
	}

}
?>