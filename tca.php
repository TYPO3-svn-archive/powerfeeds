<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_powerfeeds_feeds'] = array (
	'ctrl' => $TCA['tx_powerfeeds_feeds']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,starttime,endtime,title,uri,update_frequency,is_managed,auto_allow,storage_limit'
	),
	'feInterface' => $TCA['tx_powerfeeds_feeds']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0',
				'range'    => array (
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_feeds.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '24',	
				'eval' => 'required',
			)
		),
		'uri' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_feeds.uri',		
			'config' => array (
				'type'     => 'input',
				'size'     => '15',
				'max'      => '255',
				'checkbox' => '',
				'eval'     => 'trim',
				'wizards'  => array(
					'_PADDING' => 2,
					'link'     => array(
						'type'         => 'popup',
						'title'        => 'Link',
						'icon'         => 'link_popup.gif',
						'script'       => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
					)
				)
			)
		),
		'update_frequency' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_feeds.update_frequency',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'is_managed' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_feeds.is_managed',		
			'config' => array (
				'type' => 'check',
			)
		),
		'auto_allow' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_feeds.auto_allow',		
			'config' => array (
				'type' => 'check',
			)
		),
		'storage_limit' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_feeds.storage_limit',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2, uri;;;;3-3-3, update_frequency, is_managed, auto_allow, storage_limit')
	),
	'palettes' => array (
		'1' => array('showitem' => 'starttime, endtime')
	)
);



$TCA['tx_powerfeeds_headlines'] = array (
	'ctrl' => $TCA['tx_powerfeeds_headlines']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,starttime,endtime,guid,feed_id,title,summary,category,author,published,updated,xml_data'
	),
	'feInterface' => $TCA['tx_powerfeeds_headlines']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0',
				'range'    => array (
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		'guid' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.guid',		
			'config' => array (
				'type' => 'input',	
				'size' => '48',	
				'eval' => 'required',
			)
		),
		'feed_id' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.feed_id',		
			'config' => array (
				'type' => 'select',	
				'foreign_table' => 'tx_powerfeeds_feeds',	
				'foreign_table_where' => 'AND tx_powerfeeds_feeds.pid=###CURRENT_PID### ORDER BY tx_powerfeeds_feeds.uid',	
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'title' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '40',
			)
		),
		'summary' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.summary',		
			'config' => array (
				'type' => 'text',
				'cols' => '48',	
				'rows' => '3',
			)
		),
		'category' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.category',		
			'config' => array (
				'type' => 'input',	
				'size' => '24',
			)
		),
		'author' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.author',		
			'config' => array (
				'type' => 'input',	
				'size' => '24',
			)
		),
		'published' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.published',		
			'config' => array (
				'type'     => 'input',
				'size'     => '12',
				'max'      => '20',
				'eval'     => 'datetime',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'updated' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.updated',		
			'config' => array (
				'type'     => 'input',
				'size'     => '12',
				'max'      => '20',
				'eval'     => 'datetime',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'xml_data' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:powerfeeds/locallang_db.xml:tx_powerfeeds_headlines.xml_data',		
			'config' => array (
				'type' => 'text',
				'cols' => '48',	
				'rows' => '8',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, guid, feed_id, title;;;;2-2-2, summary;;;;3-3-3, category, author, published, updated, xml_data')
	),
	'palettes' => array (
		'1' => array('showitem' => 'starttime, endtime')
	)
);
?>