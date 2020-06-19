CREATE TABLE IF NOT EXISTS `__PREFIX__manystoreextend_auth_groupx` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned DEFAULT '1' COMMENT '父组别',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '组名',
  `rules` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '规则ID',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='商家超级管理员分组表';

CREATE TABLE IF NOT EXISTS `__PREFIX__manystoreextend_auth_groupx_lead` (
  `manystore_id` int(10) unsigned NOT NULL COMMENT '超级管理员ID',
  `manystore_auth_groupx_id` int(10) unsigned NOT NULL COMMENT '权限ID',
  PRIMARY KEY (`manystore_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='商家权限分组表';

INSERT INTO `__PREFIX__manystoreextend_auth_groupx` (`id`,`pid`, `name`, `rules`, `createtime`,`updatetime`)
VALUES ('1','0','超管','*','1589954927','1589954927');