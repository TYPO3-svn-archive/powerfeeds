<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$TCA['tx_powerfeeds_feeds'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_feeds',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
			'starttime' => 'starttime',	
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_powerfeeds_feeds.gif',
	),
);

$TCA['tx_powerfeeds_headlines'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',	
			'starttime' => 'starttime',	
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_powerfeeds_headlines.gif',
	),
);


if (TYPO3_MODE == 'BE') {
	t3lib_extMgm::addModulePath('web_txpowerfeedsM1', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');
		
	t3lib_extMgm::addModule('web', 'txpowerfeedsM1', '', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');
}


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types'][$_EXTKEY . '_pi1']['showitem'] = 'CType;;4;button;1-1-1, header;;3;;2-2-2';


t3lib_extMgm::addPlugin(array(
	'LLL:EXT:powerfeeds/locallang_db.xml:tt_content.CType_pi1',
	$_EXTKEY . '_pi1',
	t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'CType');
?>