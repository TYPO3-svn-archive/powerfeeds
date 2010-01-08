#
# Table structure for table 'tx_powerfeeds_feeds'
#
CREATE TABLE tx_powerfeeds_feeds (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	title tinytext,
	uri tinytext,
	update_frequency int(11) DEFAULT '0' NOT NULL,
	is_managed tinyint(3) DEFAULT '0' NOT NULL,
	auto_allow tinyint(3) DEFAULT '0' NOT NULL,
	storage_limit int(11) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_powerfeeds_headlines'
#
CREATE TABLE tx_powerfeeds_headlines (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	guid tinytext,
	feed_id int(11) DEFAULT '0' NOT NULL,
	title tinytext,
	summary text,
	category tinytext,
	author tinytext,
	published int(11) DEFAULT '0' NOT NULL,
	updated int(11) DEFAULT '0' NOT NULL,
	xml_data text,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);