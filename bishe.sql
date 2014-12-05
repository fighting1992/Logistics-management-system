/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : bishe

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2014-04-02 21:24:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_driver`
-- ----------------------------
DROP TABLE IF EXISTS `t_driver`;
CREATE TABLE `t_driver` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(255) NOT NULL,
  `driver_tel` varchar(255) NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_driver
-- ----------------------------
INSERT INTO `t_driver` VALUES ('1', 'gfkhg', '122430000');
INSERT INTO `t_driver` VALUES ('2', 'rert', '544');
INSERT INTO `t_driver` VALUES ('3', 'rtrty', '54656');
INSERT INTO `t_driver` VALUES ('6', 'sds', '34324');
INSERT INTO `t_driver` VALUES ('7', 'hfkfdshg', '0');

-- ----------------------------
-- Table structure for `t_illegal`
-- ----------------------------
DROP TABLE IF EXISTS `t_illegal`;
CREATE TABLE `t_illegal` (
  `illegal_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `illegal_date` date NOT NULL,
  `illegal_reason` varchar(255) NOT NULL,
  PRIMARY KEY (`illegal_id`),
  KEY `fk_id` (`vehicle_id`),
  CONSTRAINT `fk_id` FOREIGN KEY (`vehicle_id`) REFERENCES `t_vehicle` (`vehicle_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_illegal
-- ----------------------------
INSERT INTO `t_illegal` VALUES ('1', '7', '2014-02-23', 'fdgfdg');
INSERT INTO `t_illegal` VALUES ('10', '1', '2014-01-01', 'fgfgf');

-- ----------------------------
-- Table structure for `t_instorage`
-- ----------------------------
DROP TABLE IF EXISTS `t_instorage`;
CREATE TABLE `t_instorage` (
  `instorage_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `instorage_date` date NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `goods_num` varchar(255) NOT NULL,
  `goods_position1` varchar(255) NOT NULL,
  `goods_position2` varchar(255) NOT NULL,
  PRIMARY KEY (`instorage_id`),
  KEY `fk_staff_id` (`staff_id`),
  KEY `goods_name` (`goods_name`),
  CONSTRAINT `fk_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `t_staff` (`staff_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_instorage
-- ----------------------------
INSERT INTO `t_instorage` VALUES ('1', '9', '2014-02-21', '衣服', '7', '仓库三', 'A区域');
INSERT INTO `t_instorage` VALUES ('2', '2', '2014-01-01', '干果', '2', '仓库二', 'C区域');
INSERT INTO `t_instorage` VALUES ('4', '2', '2014-01-08', '电子产品', '87', '仓库三', 'B区域');
INSERT INTO `t_instorage` VALUES ('5', '2', '2014-01-01', '液状', '4', '仓库二', 'B区域');
INSERT INTO `t_instorage` VALUES ('6', '2', '2014-03-21', '水果', '2kg', '仓库一', 'A区域');

-- ----------------------------
-- Table structure for `t_order`
-- ----------------------------
DROP TABLE IF EXISTS `t_order`;
CREATE TABLE `t_order` (
  `order_id` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `goods_weight` int(11) NOT NULL,
  `order_state` varchar(255) NOT NULL,
  `order_cost` int(11) NOT NULL,
  `order_address` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_order
-- ----------------------------
INSERT INTO `t_order` VALUES ('2014022307442223', '2014-01-01', '2', 'dfd', '87', '已收件', '87', 'uiu');
INSERT INTO `t_order` VALUES ('2014022408091123', '2014-01-01', '2', 'rtet', '345', '已收件', '34435', 'ertrey');
INSERT INTO `t_order` VALUES ('2014022614211323', '2014-02-26', '5', 'df', '456', '已收件', '565', '565');
INSERT INTO `t_order` VALUES ('2014031514043134', '2014-01-01', '7', 'ere', '545', '已收件', '454', '45545');
INSERT INTO `t_order` VALUES ('2147483646', '2014-01-01', '6', 'rtret', '354', '已发货', '54', 'rytyh');
INSERT INTO `t_order` VALUES ('2147483647', '2014-01-01', '1', 'rtret', '354', '已收件', '54', 'rytyh');

-- ----------------------------
-- Table structure for `t_outstorage`
-- ----------------------------
DROP TABLE IF EXISTS `t_outstorage`;
CREATE TABLE `t_outstorage` (
  `outstorage_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `outstorage_date` date NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `goods_num` varchar(255) NOT NULL,
  PRIMARY KEY (`outstorage_id`),
  KEY `fk_staff` (`staff_id`),
  KEY `goods_name` (`goods_name`),
  CONSTRAINT `fk_staff` FOREIGN KEY (`staff_id`) REFERENCES `t_staff` (`staff_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_outstorage
-- ----------------------------
INSERT INTO `t_outstorage` VALUES ('2', '1', '2014-01-01', 'ere', '2');

-- ----------------------------
-- Table structure for `t_repaired`
-- ----------------------------
DROP TABLE IF EXISTS `t_repaired`;
CREATE TABLE `t_repaired` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `record_start_date` date NOT NULL,
  `record_end_date` date NOT NULL,
  `broken_part` varchar(255) NOT NULL,
  PRIMARY KEY (`record_id`),
  KEY `fk_vehicle_id` (`vehicle_id`),
  CONSTRAINT `fk_vehicle_id` FOREIGN KEY (`vehicle_id`) REFERENCES `t_vehicle` (`vehicle_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_repaired
-- ----------------------------
INSERT INTO `t_repaired` VALUES ('5', '7', '2014-01-25', '2014-01-29', 'rtrcxdcdx');
INSERT INTO `t_repaired` VALUES ('7', '1', '2014-01-24', '2014-02-23', 'dsadsf');

-- ----------------------------
-- Table structure for `t_send`
-- ----------------------------
DROP TABLE IF EXISTS `t_send`;
CREATE TABLE `t_send` (
  `send_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  PRIMARY KEY (`send_id`),
  KEY `fk_vehicle` (`vehicle_id`),
  CONSTRAINT `fk_vehicle` FOREIGN KEY (`vehicle_id`) REFERENCES `t_vehicle` (`vehicle_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_send
-- ----------------------------
INSERT INTO `t_send` VALUES ('1', '3');
INSERT INTO `t_send` VALUES ('2', '3');
INSERT INTO `t_send` VALUES ('4', '3');
INSERT INTO `t_send` VALUES ('3', '7');

-- ----------------------------
-- Table structure for `t_senditem`
-- ----------------------------
DROP TABLE IF EXISTS `t_senditem`;
CREATE TABLE `t_senditem` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) NOT NULL,
  `send_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `fk_send` (`send_id`),
  KEY `fk_order` (`order_id`),
  CONSTRAINT `fk_order` FOREIGN KEY (`order_id`) REFERENCES `t_order` (`order_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_send` FOREIGN KEY (`send_id`) REFERENCES `t_send` (`send_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_senditem
-- ----------------------------
INSERT INTO `t_senditem` VALUES ('3', '2147483646', '2');
INSERT INTO `t_senditem` VALUES ('4', '2147483647', '4');
INSERT INTO `t_senditem` VALUES ('5', '2014022307442223', '1');
INSERT INTO `t_senditem` VALUES ('6', '2014022408091123', '1');
INSERT INTO `t_senditem` VALUES ('7', '2014022614211323', '2');
INSERT INTO `t_senditem` VALUES ('8', '2014022614211323', '1');

-- ----------------------------
-- Table structure for `t_sendrecord`
-- ----------------------------
DROP TABLE IF EXISTS `t_sendrecord`;
CREATE TABLE `t_sendrecord` (
  `send_record_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `address_record` varchar(255) NOT NULL,
  `date_record` datetime NOT NULL,
  PRIMARY KEY (`send_record_id`),
  KEY `fk_item` (`item_id`),
  CONSTRAINT `fk_item` FOREIGN KEY (`item_id`) REFERENCES `t_senditem` (`item_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_sendrecord
-- ----------------------------
INSERT INTO `t_sendrecord` VALUES ('3', '5', '到达北京', '2014-03-15 15:27:54');
INSERT INTO `t_sendrecord` VALUES ('4', '5', '到达哈尔滨', '2014-03-14 05:00:00');
INSERT INTO `t_sendrecord` VALUES ('5', '5', '到达北林区', '2014-03-22 13:00:00');

-- ----------------------------
-- Table structure for `t_staff`
-- ----------------------------
DROP TABLE IF EXISTS `t_staff`;
CREATE TABLE `t_staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(255) NOT NULL,
  `staff_salary` int(11) NOT NULL,
  `staff_contact` varchar(255) NOT NULL,
  `staff_limit` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_staff
-- ----------------------------
INSERT INTO `t_staff` VALUES ('1', 'retr', '343', '545454', '1', 'lisi', '1234');
INSERT INTO `t_staff` VALUES ('2', '张三', '534', '3543253', '2', 'jone', '1234');
INSERT INTO `t_staff` VALUES ('3', 'dgfh', '3333', '111111111111111', '0', '', '');
INSERT INTO `t_staff` VALUES ('4', 'chen', '8888', '111111111', '3', 'admin', '1234');
INSERT INTO `t_staff` VALUES ('7', 'cy', '8888', '8888888888888', '4', 'qqq', '1234');
INSERT INTO `t_staff` VALUES ('8', 'rtr', '6656', '66666666666', '0', null, null);
INSERT INTO `t_staff` VALUES ('9', '李红', '3243', '44444444444', '2', '0', '1234');

-- ----------------------------
-- Table structure for `t_total`
-- ----------------------------
DROP TABLE IF EXISTS `t_total`;
CREATE TABLE `t_total` (
  `goods_id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(255) NOT NULL,
  `goods_total` varchar(255) NOT NULL,
  PRIMARY KEY (`goods_id`),
  KEY `fk_goods_name` (`goods_name`),
  CONSTRAINT `fk_goods_name` FOREIGN KEY (`goods_name`) REFERENCES `t_instorage` (`goods_name`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_total
-- ----------------------------
INSERT INTO `t_total` VALUES ('4', '干果', '10kg');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `home_add` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', 'gfg', 'dgfg', 'jhj000666', '111', 'etret');
INSERT INTO `t_user` VALUES ('2', 'cy', '1234', 'hhyh', '123', 'erere');
INSERT INTO `t_user` VALUES ('3', 'rtret', 'tret', 'tretre', '4444', 'tgrswegr');
INSERT INTO `t_user` VALUES ('4', 'rtret', 'tret', 'tretre', '33333', 'dgg');
INSERT INTO `t_user` VALUES ('5', 'iuy', 'uiyu', 'uiuy', '5555', 'dfs');
INSERT INTO `t_user` VALUES ('6', 'wangwu', '1234', 'dsfgr', '5643', 'dgdfg');
INSERT INTO `t_user` VALUES ('7', '李四', '1234', '111111111', '45546', 'gdsg');
INSERT INTO `t_user` VALUES ('8', '张三', '1234', '00000000', '45454', 'dfsdg');

-- ----------------------------
-- Table structure for `t_vehicle`
-- ----------------------------
DROP TABLE IF EXISTS `t_vehicle`;
CREATE TABLE `t_vehicle` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_num` varchar(255) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `vehicle_size` varchar(255) NOT NULL,
  `vehicle_max` int(11) NOT NULL,
  PRIMARY KEY (`vehicle_id`),
  KEY `fk_driver_id` (`driver_id`),
  KEY `vehicle_num` (`vehicle_num`),
  CONSTRAINT `fk_driver_id` FOREIGN KEY (`driver_id`) REFERENCES `t_driver` (`driver_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_vehicle
-- ----------------------------
INSERT INTO `t_vehicle` VALUES ('1', '4', '2', '13454', '10');
INSERT INTO `t_vehicle` VALUES ('3', '23', '1', '3e34', '878');
INSERT INTO `t_vehicle` VALUES ('7', '5758', '3', '879', '809');
