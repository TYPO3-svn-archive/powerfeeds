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
 * class.feedModel.php
 * 
 * Model for feeds, for the 'powerfeeds' extension.
 *
 * @author	Sebastiaan de Jonge <szebi.eger@gmail.com>
 * @package	TYPO3
 * @subpackage	powerfeeds
 */

require_once('class.baseModel.php');

/**
 * The class provides the model for feeds
 *
 * @author Sebastiaan de Jonge <szebi.eger@gmail.com>
 */
class feedModel extends baseModel
{
	/**
	 * Feed table fields
	 */
	protected $s_title;
	protected $s_uri;
	protected $i_updateFrequency;
	protected $i_isManaged;
	protected $i_storageLimit;
	
	/**
	 * Public getters and setters
	 */
	
	/**
	 * @return the $s_title
	 */
	public function getTitle() {
		return $this->s_title;
	}

	/**
	 * @return the $s_uri
	 */
	public function getUri() {
		return $this->s_uri;
	}

	/**
	 * @return the $i_updateFrequency
	 */
	public function getUpdateFrequency() {
		return $this->i_updateFrequency;
	}

	/**
	 * @return the $i_isManaged
	 */
	public function getIsManaged() {
		return $this->i_isManaged;
	}

	/**
	 * @return the $i_storageLimit
	 */
	public function getStorageLimit() {
		return $this->i_storageLimit;
	}

	/**
	 * @param $s_title the $s_title to set
	 */
	public function setTitle($s_title) {
		$this->title = $s_title;
	}

	/**
	 * @param $s_uri the $s_uri to set
	 */
	public function setUri($s_uri) {
		$this->uri = $s_uri;
	}

	/**
	 * @param $i_updateFrequency the $i_updateFrequency to set
	 */
	public function setUpdateFrequency($i_updateFrequency) {
		$this->updateFrequency = $i_updateFrequency;
	}

	/**
	 * @param $i_isManaged the $i_isManaged to set
	 */
	public function setIsManaged($i_isManaged) {
		$this->isManaged = $i_isManaged;
	}

	/**
	 * @param $i_storageLimit the $i_storageLimit to set
	 */
	public function setStorageLimit($i_storageLimit) {
		$this->storageLimit = $i_storageLimit;
	}

}
?>