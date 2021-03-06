<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_name` varchar(120) NOT NULL default '',
  `goods_sn` varchar(60) NOT NULL default '',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_number` smallint(5) unsigned NOT NULL default '1',
  `market_price` decimal(10,2) NOT NULL default '0.00',
  `goods_price` decimal(10,2) NOT NULL default '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL default '0',
  `is_real` tinyint(1) unsigned NOT NULL default '0',
  `extension_code` varchar(30) NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `is_gift` smallint(5) unsigned NOT NULL default '0',
  `goods_attr_id` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=385 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('230','223','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('231','224','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('232','225','121','肌研极润玻尿酸保湿沫面乳100g','ECS000121','0','1','89.00','60.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('233','226','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('234','227','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('235','228','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('236','229','77','资生堂男士黑炭洁面膏130g','ECS000077','0','1','148.00','49.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('237','230','12','雅顿保湿调理露200ml','ECS000012','20','1','200.00','50.00','外        观: 红色','0','1','','0','0','321,2');");
E_D("replace into `ecs_order_goods` values('238','231','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('239','232','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('240','233','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('243','236','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('242','235','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','1','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('244','237','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('245','238','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('246','239','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('247','240','5','索爱原装M2卡读卡器','ECS000005','0','1','24.00','20.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('248','241','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('249','242','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','1','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('250','243','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('251','244','150','甜心100测试','ECS000150','0','1','0.00','0.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('252','245','78','倩碧男士洁面乳（加强型）150ml','ECS000078','0','1','220.00','155.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('253','246','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('254','247','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('255','248','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('256','249','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('257','250','71','阿迪达斯男士征服沐浴露250ml','ECS000071','0','1','97.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('258','251','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','400.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('259','252','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','400.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('260','253','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','400.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('261','254','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','2','820.00','400.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('262','255','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','400.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('263','256','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','400.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('264','257','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('265','258','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('266','259','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('267','260','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('268','261','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('269','262','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('270','263','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('271','264','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('272','265','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('273','266','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('274','267','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('275','268','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('276','269','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('277','270','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','5','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('278','270','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','400.00','外        观:金色 \n','0','1','','0','0','299');");
E_D("replace into `ecs_order_goods` values('279','271','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('280','272','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('281','273','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('282','274','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('283','275','24','贝玲妃留声机粉底霜9.5g','ECS000024','2','12','330.00','240.00','颜色:灰色 \n','0','1','','0','0','167');");
E_D("replace into `ecs_order_goods` values('284','275','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','3','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('285','275','5','索爱原装M2卡读卡器','ECS000005','0','8','24.00','20.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('286','276','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('287','277','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('288','278','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('289','279','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('290','280','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('291','281','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('292','282','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('293','283','71','阿迪达斯男士征服沐浴露250ml','ECS000071','0','1','97.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('294','284','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('295','285','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('296','286','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','1','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('297','287','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('298','288','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('299','289','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('300','290','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('301','291','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('302','292','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('303','293','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('304','294','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('305','295','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('306','296','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('307','297','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('308','298','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('309','299','66','NYR薰衣草精油10ml','ECS000066','0','1','85.00','65.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('310','300','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('311','301','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('312','302','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('313','303','121','肌研极润玻尿酸保湿沫面乳100g','ECS000121','0','1','89.00','60.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('314','304','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('315','305','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('316','306','50','大卫杜夫冷水男士香水40ml','ECS000050','0','1','300.00','129.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('317','307','47','浮生若梦丝柔蜜粉08#（紫色)28g','ECS000047','0','1','345.00','229.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('318','308','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('319','309','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('320','309','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('321','310','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('322','311','78','倩碧男士洁面乳（加强型）150ml','ECS000078','0','1','220.00','155.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('323','312','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','2','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('324','313','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('325','314','78','倩碧男士洁面乳（加强型）150ml','ECS000078','0','1','220.00','155.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('326','315','78','倩碧男士洁面乳（加强型）150ml','ECS000078','0','1','220.00','155.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('327','316','78','倩碧男士洁面乳（加强型）150ml','ECS000078','0','1','220.00','155.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('328','317','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('330','319','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('331','320','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('332','321','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('333','322','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('334','323','121','肌研极润玻尿酸保湿沫面乳100g','ECS000121','0','1','89.00','60.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('335','324','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','2','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('336','325','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('337','326','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('338','327','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('339','328','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','3','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('340','329','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('341','330','76','阿玛尼黑钥匙男士精华液75ml','ECS000076','0','1','1200.00','439.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('342','331','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('343','332','117','嘉娜宝玫瑰药用洗面奶150g','ECS000117','0','1','95.00','39.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('344','333','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('345','334','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','118.00','95.00','颜色:黑色 \n配件:数据线[20] \n','0','1','','0','0','188,190');");
E_D("replace into `ecs_order_goods` values('346','335','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('347','336','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('348','337','78','倩碧男士洁面乳（加强型）150ml','ECS000078','0','1','220.00','155.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('349','337','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','2','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('350','338','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('351','339','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','1','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('352','340','152','黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('353','341','152','黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('354','342','152','黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('355','342','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('356','343','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('357','344','152','黄油弹','1001','0','3','180.00','180.00','','3','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('358','345','152','黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('359','346','152','友邦黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('360','347','152','友邦黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('361','348','152','友邦黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('362','349','152','友邦黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('363','349','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('364','350','152','友邦黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('365','351','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('366','351','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('367','351','64','多芬滋润顺滑柔亮沐浴露750ml','ECS000064','0','1','96.00','35.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('368','351','70','碧欧泉男士温泉保湿露75ml','ECS000070','0','1','450.00','235.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('369','351','76','阿玛尼黑钥匙男士精华液75ml','ECS000076','0','1','1200.00','439.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('370','351','75','契尔氏男士全效洁面啫喱250ml','ECS000075','0','1','200.00','179.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('371','352','152','友邦黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('372','353','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','98.00','75.00','颜色:黑色 \n','0','1','','0','0','188');");
E_D("replace into `ecs_order_goods` values('373','354','21','蜜丝佛陀纤柔眼线液1#0.75ml','ECS000021','4','1','118.00','95.00','颜色:黑色 \n配件:数据线[20] \n','0','1','','0','0','188,190');");
E_D("replace into `ecs_order_goods` values('374','355','153','测试商品不要购买','ECS000153','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('375','356','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('376','357','24','贝玲妃留声机粉底霜9.5g','ECS000024','2','1','330.00','60.00','颜色: 灰色\r\n配件: 数据线','0','1','','0','0','167,0,168');");
E_D("replace into `ecs_order_goods` values('377','358','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('378','359','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('379','360','33','兰蔻小黑瓶精华肌底液（新版）30ml','ECS000033','0','1','780.00','400.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('380','361','35','雅诗兰黛红石榴鲜活晚霜50ml新','ECS000035','0','1','620.00','489.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('381','362','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('382','362','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('383','363','114','思亲肤绿茶泡沫洁面摩丝160ml','ECS000114','0','1','105.00','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('384','364','152','友邦黄油弹','1001','0','1','180.00','180.00','','0','1','','0','0','');");

require("../../inc/footer.php");
?>