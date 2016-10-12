<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL auto_increment,
  `log_time` int(10) unsigned NOT NULL default '0',
  `user_id` tinyint(3) unsigned NOT NULL default '0',
  `log_info` varchar(255) NOT NULL default '',
  `ip_address` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1434876389','2','编辑权限管理: admin','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2','1434876478','2','编辑权限管理: tianxin100','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3','1434876610','2','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('4','1434876635','2','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('5','1434876654','2','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('6','1434876694','2','编辑商店设置: ','127.0.0.1');");

require("../../inc/footer.php");
?>