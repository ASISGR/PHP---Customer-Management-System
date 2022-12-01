/*
 Navicat Premium Data Transfer

 Source Server         : ProjectAKMI
 Source Server Type    : MariaDB
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : adatabases

 Target Server Type    : MariaDB
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 01/12/2022 16:22:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for administrator
-- ----------------------------
DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `phone`(`phone`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of administrator
-- ----------------------------
INSERT INTO `administrator` VALUES (1, 'Admin127', '21qw21epoli123', 'admin@gmail.com', 'tasos', 'dimitriadis', '6989168354', 'Iwannh kragia 4 56121 ampelokipi thessaloniki', '2022-11-30');
INSERT INTO `administrator` VALUES (2, 'AdminTest', '1234', 'test@gmail.com', 'admin', 'testadmin', '6989168355', 'Iwannh kragia 4 56121 ampelokipi thessaloniki', '2022-11-30');

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `comments` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `registered_at` timestamp(0) NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES (3, 'Kwstas', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:11', 1);
INSERT INTO `customers` VALUES (4, 'Alex', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:14', 0);
INSERT INTO `customers` VALUES (5, 'Dionisis', 'mdoeddd', 'salougka skg re 6, 51224 thessaloniki', '45923494848', 'Dikomo@gmail.com', 'ssssssssssssssssssssss', '2022-11-30 12:10:21', 1);
INSERT INTO `customers` VALUES (6, 'Antreas', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:24', 1);
INSERT INTO `customers` VALUES (7, 'Kuriakos', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:28', 0);
INSERT INTO `customers` VALUES (8, 'Spiros', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:30', 1);
INSERT INTO `customers` VALUES (9, 'Giannis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-28 14:59:16', 0);
INSERT INTO `customers` VALUES (10, 'Teo', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-28 18:17:09', 1);
INSERT INTO `customers` VALUES (11, 'Lampros', 'georgiou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:40', 0);
INSERT INTO `customers` VALUES (12, 'Thanasis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:43', 0);
INSERT INTO `customers` VALUES (13, 'Petros', 'Πέτρου', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:48', 0);
INSERT INTO `customers` VALUES (14, 'Xarhs', 'Δημητριάδης', 'Ιωάννη Κραγιά 4, 51621 Αμπελόκοιπη', '6989168354', 'asisgr01@gmail.com', 'Έχει κάνει τις περισσότερες πωλήσεις τον τελευταίο μήνα.', '2022-11-30 12:10:54', 1);
INSERT INTO `customers` VALUES (15, 'Loukas', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168355', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:10:58', 0);
INSERT INTO `customers` VALUES (16, 'Zisis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:11:05', 1);
INSERT INTO `customers` VALUES (17, 'Sakis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-28 14:59:16', 0);
INSERT INTO `customers` VALUES (18, 'Antonis', 'mdoeddd', 'salougka skg re 6, 51224 thessaloniki', '45923494848', 'Dikomo@gmail.com', 'ssssssssssssssssssssss', '2022-11-30 12:11:15', 1);
INSERT INTO `customers` VALUES (19, 'Xaralampos', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:11:23', 1);
INSERT INTO `customers` VALUES (20, 'Rafail', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:11:26', 0);
INSERT INTO `customers` VALUES (22, 'Mixalis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:11:50', 0);
INSERT INTO `customers` VALUES (23, 'Makis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 12:11:54', 1);
INSERT INTO `customers` VALUES (27, 'Thanos', 'Nikou', 'street 5, 54214 boston USA', '6989146217', 'nikou@gmail.com', 'New customer', '2022-12-01 16:18:03', 1);
INSERT INTO `customers` VALUES (28, 'test', 'test2', 'odos', '696696969', 'test@gmail.com', 'commnet', '2022-12-01 16:17:38', 1);

SET FOREIGN_KEY_CHECKS = 1;
