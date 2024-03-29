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
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

require_once(PATH_tslib.'class.tslib_pibase.php');
require_once(t3lib_extMgm::extPath('powerfeeds', 'control/class.feedControl.php'));
require_once(t3lib_extMgm::extPath('powerfeeds', 'control/class.headlineControl.php'));

/**
 * Plugin 'Powerfeeds' for the 'powerfeeds' extension.
 *
 * @author Sebastiaan de Jonge <szebi.eger@gmail.com>
 * @package TYPO3
 * @subpackage powerfeeds
 */
class tx_powerfeeds_pi1 extends tslib_pibase {
	public $prefixId = 'tx_powerfeeds_pi1';		// Same as class name
	public $scriptRelPath = 'pi1/class.tx_powerfeeds_pi1.php';	// Path to this script relative to the extension dir.
	public $extKey = 'powerfeeds';	// The extension key.
	
	/**
	 * The main method of the PlugIn
	 *
	 * @param	string		$content: The PlugIn content
	 * @param	array		$conf: The PlugIn configuration
	 * @return	The content that is displayed on the website
	 */
	public function main($content, $conf)	{
		return 'Hello World!<HR>
			Here is the TypoScript passed to the method:'.
					t3lib_div::view_array($conf);
	}
	
	/**
	 * Initialize
	 * - Set plugin defaults
	 * - Load FlexForm configuration
	 */
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/powerfeeds/pi1/class.tx_powerfeeds_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/powerfeeds/pi1/class.tx_powerfeeds_pi1.php']);
}

?>