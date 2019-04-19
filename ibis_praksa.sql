/*
Navicat MySQL Data Transfer

Source Server         : Mateja
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : ibis_praksa

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2019-04-19 06:52:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clanci
-- ----------------------------
DROP TABLE IF EXISTS `clanci`;
CREATE TABLE `clanci` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naslov` varchar(65) NOT NULL,
  `tekst` varchar(255) NOT NULL,
  `urlSlike` varchar(255) NOT NULL,
  `tipClanka` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clanci
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Ime` varchar(65) NOT NULL,
  `Prezime` varchar(65) NOT NULL,
  `Mail` varchar(65) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('Mateja', 'Radojicic', 'mateja@xiitech.org', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');
