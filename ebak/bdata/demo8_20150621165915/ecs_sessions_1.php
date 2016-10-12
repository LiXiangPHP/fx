<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `adminid` mediumint(8) unsigned NOT NULL default '0',
  `ip` char(15) NOT NULL default '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL default '',
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('9af68798586f455964244054d3b426a4','1434905419','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('02bd5d4ffbd9596118786d28c034f936','1434905317','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('69f25142ebc5985906aef228c05cd7d0','1434905498','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('9850977a1057fddfe4bd36752721b924','1434905317','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('fc4aa58cafed3824ea7068dc45fb863b','1434905450','0','2','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:10:\"tianxin100\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1434876549;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('2a56f41d3ab2ac0e068cc79f06ded70b','1434905462','0','0','127.0.0.1','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('574478e0185a089eb28a08ef48e48b36','1434905462','0','0','127.0.0.1','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('7b3d507b0f42a3f18030d803d6741a7b','1434905514','0','2','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:10:\"tianxin100\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1434876670;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('75a69be10d1afd6c32180e70dc17aa6b','1434905792','0','2','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:10:\"tianxin100\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";s:10:\"1434876727\";s:12:\"suppliers_id\";s:1:\"0\";}');");

require("../../inc/footer.php");
?>