
-- ----------------------------
-- Table structure for `'.cc_admin_user.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_admin_user`;
CREATE TABLE `cc_admin_user` (
`id` int(11) unsigned NOT NULL  auto_increment COMMENT '表id',
`name` varchar(255) NOT NULL   COMMENT '用户名',
`sex` enum('0','1')    COMMENT '性别',
`nickname` varchar(255)    COMMENT '昵称',
`password` varchar(32)    COMMENT '密码',
`logined` varchar(255)    COMMENT '上传登录时间',
`createtime` varchar(255)    COMMENT '本次登录时间',
`times` int(10)    COMMENT '登录次数',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_advertising.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_advertising`;
CREATE TABLE `cc_advertising` (
`id` int(11) unsigned NOT NULL  auto_increment COMMENT '表id',
`title` varchar(255) NOT NULL   COMMENT '轮播图标题',
`picture` varchar(255) NOT NULL   COMMENT '图片链接',
`hret` varchar(255)    COMMENT '外链，图片链接',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_auth_group.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_auth_group`;
CREATE TABLE `cc_auth_group` (
`id` mediumint(8) unsigned NOT NULL  auto_increment COMMENT '表id',
`title` char(100) NOT NULL   COMMENT '组名',
`status` tinyint(1) NOT NULL DEFAULT 1  COMMENT '状态',
`rules` varchar(255) NOT NULL   COMMENT '权限集合',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_auth_group_access.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_auth_group_access`;
CREATE TABLE `cc_auth_group_access` (
`uid` mediumint(11) unsigned NOT NULL   COMMENT '用户id',
`group_id` mediumint(11) unsigned NOT NULL   COMMENT '权限表id',
PRIMARY KEY (`uid`,`group_id`),
UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
KEY `uid` (`uid`),
KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_auth_rule.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_auth_rule`;
CREATE TABLE `cc_auth_rule` (
`id` mediumint(8) unsigned NOT NULL  auto_increment COMMENT '表id',
`name` char(80) NOT NULL   COMMENT '权限控制器URL',
`title` char(20) NOT NULL   COMMENT '权限名',
`type` tinyint(1) NOT NULL DEFAULT 1  COMMENT '',
`status` tinyint(1) NOT NULL DEFAULT 1  COMMENT '',
`condition` char(100) NOT NULL   COMMENT '',
PRIMARY KEY (`id`),
UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_column.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_column`;
CREATE TABLE `cc_column` (
`id` int(11) unsigned NOT NULL  auto_increment COMMENT '表id',
`name` varchar(255) NOT NULL   COMMENT '',
`parentid` int(11) NOT NULL   COMMENT '父类id',
`path` varchar(255)    COMMENT '一级id，二级id',
`url` varchar(255)    COMMENT '控制器链接',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_news.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_news`;
CREATE TABLE `cc_news` (
`id` int(11) unsigned NOT NULL  auto_increment COMMENT '',
`title` varchar(255) NOT NULL   COMMENT '新闻标题',
`date` int(10) NOT NULL   COMMENT '修改时间',
`times` int(7) NOT NULL   COMMENT '访问次数',
`content` text NOT NULL   COMMENT '内容',
`type` enum('2','1') NOT NULL DEFAULT 1  COMMENT '类型，新闻是1',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_programa.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_programa`;
CREATE TABLE `cc_programa` (
`id` int(11) NOT NULL  auto_increment COMMENT '',
`name` varchar(100)    COMMENT '',
`parentid` int(11)    COMMENT '',
`path` varchar(100)    COMMENT '',
`url` varchar(100)    COMMENT '',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_site_information.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_site_information`;
CREATE TABLE `cc_site_information` (
`id` int(11) unsigned NOT NULL  auto_increment COMMENT '',
`title` varchar(255)    COMMENT '站点标题',
`keyword` varchar(255)    COMMENT '关键字',
`description` varchar(255)    COMMENT '站点描述',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `'.cc_video.'`
-- ----------------------------
DROP TABLE IF EXISTS `cc_video`;
CREATE TABLE `cc_video` (
`id` int(11) unsigned NOT NULL  auto_increment COMMENT '',
`title` varchar(255) NOT NULL   COMMENT '视频标题',
`date` int(10) NOT NULL   COMMENT '最后修改时间',
`times` int(7) NOT NULL   COMMENT '访问次数',
`video` varchar(255)    COMMENT '视频链接',
`file_url` varchar(255)    COMMENT '文件url',
`introduce` text NOT NULL   COMMENT '视频介绍',
`thumbnail` varchar(255) NOT NULL   COMMENT '缩略图',
`column_id` int(11) NOT NULL   COMMENT '分类id',
`type` enum('2','1') NOT NULL DEFAULT 2  COMMENT '类型，视频是2',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `cc_admin_user` VALUES ('1','admin','0','柚子','e10adc3949ba59abbe56e057f20f883e','1472176235','1472286407','38');
INSERT INTO `cc_admin_user` VALUES ('3','sanpang','0','三胖','e10adc3949ba59abbe56e057f20f883e','1471574001','1471574403','6');
INSERT INTO `cc_advertising` VALUES ('3','测试','/Uploads/2016-08-16/imge/57b2a1745c5b7.jpg','');
INSERT INTO `cc_advertising` VALUES ('4','视频2','/Uploads/2016-08-16/imge/57b2a19d54627.jpg','');
INSERT INTO `cc_auth_group` VALUES ('1','管理员','1','2,3,4,5,6,7,8,10,12,13,11,14,15,17,18,19,20,21,1,9,16,23,24,25,26,27,32,31,36,30,29,28,33,35,34');
INSERT INTO `cc_auth_group` VALUES ('19','超级用户','1','1,23,28,25');
INSERT INTO `cc_auth_group_access` VALUES ('1','1');
INSERT INTO `cc_auth_group_access` VALUES ('3','19');
INSERT INTO `cc_auth_rule` VALUES ('1','User/index','查看用户','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('2','User/add','添加用户','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('3','User/insert','插入用户','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('4','User/edit','编辑用户','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('5','User/update','修改用户','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('6','User/delete','删除用户','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('7','Role/index','查看分组角色','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('20','Role/setAuthGroup','修改分组权限','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('9','Role/editTitle','编辑分组角色显示名','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('10','Role/updateTitle','修改分组角色显示名','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('11','Role/add','添加角色分组','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('12','Role/insert','插入角色分组','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('13','Role/delete','删除角色分组','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('14','Auth/index','查看权限','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('15','Auth/add','添加权限','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('16','Auth/insert','插入权限','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('17','Auth/edit','编辑权限','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('18','Auth/update','修改权限','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('19','Auth/opts','权限操作','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('21','User/setAuthGroupAccess','设置用户角色','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('23','Bak/index','查看备份','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('24','Bak/backups','添加备份','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('25','Column/index','查看分类','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('26','Column/add','添加分类','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('27','Column/edit','编辑分类','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('28','News/index','查看新闻','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('29','News/add','添加新闻','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('30','News/edit','编辑新闻','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('31','Video/index','查看视频','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('32','Video/add','添加视频','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('33','Video/edit','编辑视频','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('34','Advertising/index','查看轮播图','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('35','Advertising/add','添加轮播图','1','1','');
INSERT INTO `cc_auth_rule` VALUES ('36','Advertising/edit','编辑轮播图','1','1','');
INSERT INTO `cc_column` VALUES ('1','精彩预告','0','0','foreshow/index');
INSERT INTO `cc_column` VALUES ('2','视频点播','0','0','retrospect/index');
INSERT INTO `cc_news` VALUES ('1','视频','1470981727','0','sssssss','1');
INSERT INTO `cc_news` VALUES ('2','首页大图3','1470990998','0','qrtaasdfg','1');
INSERT INTO `cc_programa` VALUES ('1','栏目管理','0','0','Programa');
INSERT INTO `cc_programa` VALUES ('2','所有栏目','1','0,1','Programa/index');
INSERT INTO `cc_programa` VALUES ('3','添加栏目','1','0,1','Programa/add');
INSERT INTO `cc_programa` VALUES ('4','用户管理','0','0','User');
INSERT INTO `cc_programa` VALUES ('5','用户列表','4','0,4','User/index');
INSERT INTO `cc_programa` VALUES ('6','添加用户','4','0,4','User/add');
INSERT INTO `cc_programa` VALUES ('7','角色管理','0','0','Role');
INSERT INTO `cc_programa` VALUES ('8','角色列表','7','0,7','Role/index');
INSERT INTO `cc_programa` VALUES ('9','添加角色','7','0,7','Role/add');
INSERT INTO `cc_programa` VALUES ('10','权限管理','0','0','Auth');
INSERT INTO `cc_programa` VALUES ('11','权限列表','10','0,10','Auth/index');
INSERT INTO `cc_programa` VALUES ('12','添加权限','10','0,10','Auth/add');
INSERT INTO `cc_programa` VALUES ('13','分类管理','0','0','Column');
INSERT INTO `cc_programa` VALUES ('14','分类列表','13','0,13','Column/index');
INSERT INTO `cc_programa` VALUES ('15','添加分类','13','0,13','Column/add');
INSERT INTO `cc_site_information` VALUES ('1','CCTV 《美丽中国乡村行》 栏目官方网站','美丽中国乡村行,CCTV美丽中国乡村行,CCTV7美丽中国乡村行,中央电视台美丽中国乡村行栏目','《美丽中国乡村行》栏目官方网站，提供CCTV7《美丽中国乡村行》栏目视频预告、点播、栏目动态等内容。');
INSERT INTO `cc_video` VALUES ('4','视频','1471339520','3','','/Uploads/2016-08-16/Video/57b29e6d7472e.mp4','aaaaaaaaaaaaaa','/Uploads/2016-08-16/imge/57b29e6d77226.jpg','1','2');
INSERT INTO `cc_video` VALUES ('5','测试3','1471327469','8','','/Uploads/2016-08-16/Video/57b2aced350b9.mp4','少时诵诗书','/Uploads/2016-08-16/imge/57b2aced35889.jpg','2','2');
INSERT INTO `cc_video` VALUES ('6','测试','1471330666','8','','/Uploads/2016-08-16/Video/57b2b96a37b24.mp4','测试&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;','/Uploads/2016-08-16/imge/57b2b96a382f4.jpg','1','2');
INSERT INTO `cc_video` VALUES ('7','测试1','1471426061','4','','','是是是是是是','/Uploads/2016-08-17/imge/57b42e0dd2be9.jpg','1','2');
