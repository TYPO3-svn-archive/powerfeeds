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
 * Model for headlines, for the 'powerfeeds' extension.
 *
 * @author Sebastiaan de Jonge <szebi.eger@gmail.com>
 * @package TYPO3
 * @subpackage powerfeeds
 */
class headlineModel extends baseModel
{
	/**
	 * Headline table fields
	 */
	protected $s_guid;
	protected $i_feedId;
	protected $s_title;
	protected $s_summary;
	protected $s_category;
	protected $s_author;
	protected $i_published;
	protected $i_updated;
	protected $s_xmlData;
	
	/**
	 * Public getters and setters
	 */
	
	/**
	 * @access public
	 * @return string The $s_guid
	 */
	public function getGuid() {
		return $this->s_guid;
	}

	/**
	 * @access public
	 * @return int The $i_feedId
	 */
	public function getFeedId() {
		return $this->i_feedId;
	}

	/**
	 * @access public
	 * @return string The $s_title
	 */
	public function getTitle() {
		return $this->s_title;
	}

	/**
	 * @access public
	 * @return string The $s_summary
	 */
	public function getSummary() {
		return $this->s_summary;
	}

	/**
	 * @access public
	 * @return string The $s_category
	 */
	public function getCategory() {
		return $this->s_category;
	}

	/**
	 * @access public
	 * @return string The $s_author
	 */
	public function getAuthor() {
		return $this->s_author;
	}

	/**
	 * @access public
	 * @return int The $i_published
	 */
	public function getPublished() {
		return $this->i_published;
	}

	/**
	 * @access public
	 * @return int The $i_updated
	 */
	public function getUpdated() {
		return $this->i_updated;
	}

	/**
	 * @access public
	 * @return string The $s_xmlData
	 */
	public function getXmlData() {
		return $this->s_xmlData;
	}

	/**
	 * @access public
	 * @param string $s_guid The $s_guid to set
	 * @return void
	 */
	public function setGuid($s_guid) {
		$this->s_guid = $s_guid;
	}

	/**
	 * @access public
	 * @param int $i_feedId The $i_feedId to set
	 * @return void
	 */
	public function setFeedId($i_feedId) {
		$this->i_feedId = $i_feedId;
	}

	/**
	 * @access public
	 * @param string $s_title The $s_title to set
	 * @return void
	 */
	public function setTitle($s_title) {
		$this->s_title = $s_title;
	}

	/**
	 * @access public
	 * @param string $s_summary The $s_summary to set
	 * @return void
	 */
	public function setSummary($s_summary) {
		$this->s_summary = $s_summary;
	}

	/**
	 * @access public
	 * @param string $s_category The $s_category to set
	 * @return void
	 */
	public function setCategory($s_category) {
		$this->s_category = $s_category;
	}

	/**
	 * @access public
	 * @param string $s_author The $s_author to set
	 * @return void
	 */
	public function setAuthor($s_author) {
		$this->s_author = $s_author;
	}

	/**
	 * @access public
	 * @param int $i_published The $i_published to set
	 * @return void
	 */
	public function setPublished($i_published) {
		$this->i_published = $i_published;
	}

	/**
	 * @access public
	 * @param int $i_updated The $i_updated to set
	 * @return void
	 */
	public function setUpdated($i_updated) {
		$this->i_updated = $i_updated;
	}

	/**
	 * @access public
	 * @param string $s_xmlData The $s_xmlData to set
	 * @return void
	 */
	public function setXmlData($s_xmlData) {
		$this->s_xmlData = $s_xmlData;
	}
}	
?>