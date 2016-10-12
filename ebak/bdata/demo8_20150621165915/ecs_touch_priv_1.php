<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_priv`;");
E_C("CREATE TABLE `ecs_touch_priv` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `action_list` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_priv` values('1','1','all');");
E_D("replace into `ecs_touch_priv` values('2','2','all');");

require("../../inc/footer.php");
?>