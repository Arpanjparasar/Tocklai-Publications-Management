/*
 Navicat Premium Data Transfer

 Source Server         : hp
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : trajorhat

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 15/07/2018 12:29:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for book
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book`  (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `author` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `des` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `publisher` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `edition` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isbn` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int(15) NOT NULL,
  `copies` int(200) NOT NULL,
  PRIMARY KEY (`bid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES (3, 'Tea field Management', 'Sanyal', 'NA', 'Tea Research Association', '2008', '3154316441', 210, 50);
INSERT INTO `book` VALUES (4, 'tea management', 'Wakis', 'NA', 'Tea Research Association', '2006', '6498431144', 340, 40);
INSERT INTO `book` VALUES (5, 'PHP', 'yusub', 'NA', 'Tea Research Association', '5th Edition', '65163543', 250, 30);
INSERT INTO `book` VALUES (6, 'russell', 'yamin', 'NA', 'Tea Research Association', '2007', '.354353', 345, 14);
INSERT INTO `book` VALUES (7, 'TEA mannual', 'saikia', 'NA', 'Tea Research Association', '6 th edition', '456447643434', 420, 45);

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `itemid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `quantity` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rate` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `discount` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for cd
-- ----------------------------
DROP TABLE IF EXISTS `cd`;
CREATE TABLE `cd`  (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `author` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `des` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `edition` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `publisher` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isbn` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `price` int(10) NULL DEFAULT NULL,
  `copies` int(50) NULL DEFAULT NULL,
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cd
-- ----------------------------
INSERT INTO `cd` VALUES (2, 'Tea Culture', 'Ahmed', 'NA', '2004', 'TRA', '4562288', 160, 9);

-- ----------------------------
-- Table structure for ebook
-- ----------------------------
DROP TABLE IF EXISTS `ebook`;
CREATE TABLE `ebook`  (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `author` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `des` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `publisher` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `edition` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isbn` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`eid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ebook
-- ----------------------------
INSERT INTO `ebook` VALUES (2, 'Tea Culture', 'ajklop', 'NA', 'Tea Research Association', '5th Edition', '456344694', 345);

-- ----------------------------
-- Table structure for itemsold
-- ----------------------------
DROP TABLE IF EXISTS `itemsold`;
CREATE TABLE `itemsold`  (
  `id` int(11) NOT NULL,
  `user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `itemid` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `quantity` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rate` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `discount` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `time` datetime(0) NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of itemsold
-- ----------------------------
INSERT INTO `itemsold` VALUES (19, 'hello', '3', 'Tea field Management', 'book', '10', '210', '0', '2018-07-13 02:12:39');
INSERT INTO `itemsold` VALUES (18, 'hello', '6', 'russell', 'book', '10', '345', '0', '2018-07-13 02:09:00');
INSERT INTO `itemsold` VALUES (18, 'hello', '2', 'Tea Culture', 'cd', '20', '160', '0', '2018-07-13 02:09:00');
INSERT INTO `itemsold` VALUES (18, 'hello', '2', 'Tea Culture', 'ebook', '1', '345', '0', '2018-07-13 02:09:00');
INSERT INTO `itemsold` VALUES (20, 'hello', '2', 'Tea Culture', 'cd', '1', '160', '0', '2018-07-14 11:46:55');
INSERT INTO `itemsold` VALUES (21, 'hello', '6', 'russell', 'book', '10', '345', '0', '2018-07-14 11:48:13');
INSERT INTO `itemsold` VALUES (22, 'hello', '6', 'russell', 'book', '11', '345', '0', '2018-07-14 11:49:59');
INSERT INTO `itemsold` VALUES (25, 'User', '7', 'TEA mannual', 'book', '10', '420', '0', '2018-07-15 11:12:13');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `sellername` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `buyername` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `category` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `selltype` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `total` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `orderdate` datetime(0) NOT NULL,
  PRIMARY KEY (`orderid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (19, 'hello', 'Eric J Yang', 'Member', '', '2069  Quarry Drive', '3362013747', '2100', '2018-07-13 02:12:39');
INSERT INTO `orders` VALUES (18, 'hello', 'Lori J Donoho', 'Member', '', '3527  Hart Ridge Road', '9293238998', '6995', '2018-07-13 02:09:00');
INSERT INTO `orders` VALUES (20, 'hello', 'Telusko Learning', 'Member', 'Transfer', 'dewal road', '2345678912', '0', '2018-07-14 11:46:55');
INSERT INTO `orders` VALUES (21, 'hello', 'DJ Mavrik', 'Non-Member', 'Sell', 'dewal road', '2345678912', '3450', '2018-07-14 11:48:13');
INSERT INTO `orders` VALUES (22, 'hello', 'Hitesh Choudhary', 'Member', 'Transfer', 'Doha bora', '8011806046', '0', '2018-07-14 11:49:59');
INSERT INTO `orders` VALUES (23, 'User', 'Lori J Donoho', 'Non-Member', 'Sell', '3527  Hart Ridge Road', '9293238998', '2100', '2018-07-15 11:08:16');
INSERT INTO `orders` VALUES (24, 'User', 'Eric J Yang', 'Member', 'Sell', '2069  Quarry Drive', '3362013747', '4200', '2018-07-15 11:09:15');
INSERT INTO `orders` VALUES (25, 'User', 'hello world', 'Member', 'Sell', 'dewal road', '2345678912', '4200', '2018-07-15 11:12:13');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uemail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ugender` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'admin@gmail.com', 'Male', 'tra785008#', '9876543210');
INSERT INTO `user` VALUES (2, 'user', 'user@gmail.com', 'Male', 'user785008#', '9087654321');

SET FOREIGN_KEY_CHECKS = 1;
