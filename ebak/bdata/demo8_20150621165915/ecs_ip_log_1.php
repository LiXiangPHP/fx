<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ip_log`;");
E_C("CREATE TABLE `ecs_ip_log` (
  `id` int(20) NOT NULL auto_increment,
  `ip` varchar(20) default NULL,
  `u_id` int(20) default NULL,
  `state` int(2) default '0',
  `phone_state` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>