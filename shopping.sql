/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : shopping

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-04-28 22:39:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for game_list
-- ----------------------------
DROP TABLE IF EXISTS `game_list`;
CREATE TABLE `game_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `console` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of game_list
-- ----------------------------
INSERT INTO `game_list` VALUES ('1', 'Super Paper Mario', 'img/wii-paper-mario-full.jpg', null, '22.99', 'Wii U');
INSERT INTO `game_list` VALUES ('2', 'Mario Galaxy', 'img/wii-mario-galaxy-full.jpg', null, '25.99', 'Wii U');
INSERT INTO `game_list` VALUES ('3', 'Mario Galaxy 2', 'img/wii-mario-galaxy-2-full.jpg', null, '30.99', 'Wii U');
INSERT INTO `game_list` VALUES ('4', 'Resident Evil', 'img/wii-res-evil-4-full.jpg', null, '25.99', 'Wii U');
INSERT INTO `game_list` VALUES ('5', 'Super Smash Bros. Brawl', 'img/wii-smash-bros-full.jpg', null, '31.99', 'Wii U');
INSERT INTO `game_list` VALUES ('6', 'Zelda Twilight Princess', 'img/wii-zelda-twilight-full.jpg', null, '21.99', 'Wii U');

-- ----------------------------
-- Table structure for shopping_list
-- ----------------------------
DROP TABLE IF EXISTS `shopping_list`;
CREATE TABLE `shopping_list` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shopping_list
-- ----------------------------

-- ----------------------------
-- Table structure for shop_list
-- ----------------------------
DROP TABLE IF EXISTS `shop_list`;
CREATE TABLE `shop_list` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `picture` varchar(100) CHARACTER SET latin1 NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_list
-- ----------------------------
INSERT INTO `shop_list` VALUES ('2', 'Super Paper Mario', 'img/wii-paper-mario-full.jpg', '0.00', '0');
INSERT INTO `shop_list` VALUES ('3', 'Mario Galaxy', 'img/wii-mario-galaxy-full.jpg', '0.00', '0');
INSERT INTO `shop_list` VALUES ('4', 'Mario Galaxy 2', 'img/wii-mario-galaxy-2-full.jpg', '699.99', '0');
INSERT INTO `shop_list` VALUES ('5', 'Resident Evil', 'img/wii-res-evil-4-full.jpg', '0.00', '0');
INSERT INTO `shop_list` VALUES ('6', 'Super Smash Bros. Brawl', 'img/wii-smash-bros-full.jpg', '0.00', '0');
INSERT INTO `shop_list` VALUES ('7', 'Zelda Twilight Princess', 'img/wii-zelda-twilight-full.jpg', '0.00', '0');
