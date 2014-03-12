/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50535
Source Host           : localhost:3306
Source Database       : db_cuestionario

Target Server Type    : MYSQL
Target Server Version : 50535
File Encoding         : 65001

Date: 2014-03-12 17:33:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `controlador` varchar(255) DEFAULT NULL,
  `metodo` varchar(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Inicio', 'master', null, '1');
INSERT INTO `menu` VALUES ('2', 'Salir', 'master', 'logout', '50');
INSERT INTO `menu` VALUES ('3', 'Usuarios', 'master', 'usuarios', '2');

-- ----------------------------
-- Table structure for `menu_grupo`
-- ----------------------------
DROP TABLE IF EXISTS `menu_grupo`;
CREATE TABLE `menu_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu_grupo
-- ----------------------------
INSERT INTO `menu_grupo` VALUES ('1', 'Admin');
INSERT INTO `menu_grupo` VALUES ('2', 'Normal');
INSERT INTO `menu_grupo` VALUES ('12', 'Los 4 fantasticos');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_menu_grupo` int(11) DEFAULT NULL,
  `id_users_tipo` int(11) DEFAULT '0',
  `activo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_tipo` (`id_users_tipo`),
  KEY `FK_menu` (`id_menu_grupo`),
  CONSTRAINT `FK_menu` FOREIGN KEY (`id_menu_grupo`) REFERENCES `menu_grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_tipo` FOREIGN KEY (`id_users_tipo`) REFERENCES `users_tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'enrique', 'e2b11035f6def07b4f99cbfedcb2d131', 'Enrique Acevedo', 'safdad@dsa.com', '1', '1', '1');

-- ----------------------------
-- Table structure for `users_tipo`
-- ----------------------------
DROP TABLE IF EXISTS `users_tipo`;
CREATE TABLE `users_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_tipo
-- ----------------------------
INSERT INTO `users_tipo` VALUES ('1', 'Administrador');
INSERT INTO `users_tipo` VALUES ('2', 'Encuestado');
