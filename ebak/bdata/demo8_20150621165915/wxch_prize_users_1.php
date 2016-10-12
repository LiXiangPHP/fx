<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_users`;");
E_C("CREATE TABLE `wxch_prize_users` (
  `id` int(7) unsigned NOT NULL auto_increment,
  `wxid` char(28) NOT NULL default '',
  `fun` varchar(10) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `prize_id` int(5) default NULL,
  `prize_name` varchar(64) default NULL,
  `prize_sn` varchar(35) NOT NULL,
  `register` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) default NULL,
  `yn` varchar(3) NOT NULL,
  `dateline` int(10) default NULL,
  PRIMARY KEY  (`id`),
  KEY `prize_id` (`prize_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>