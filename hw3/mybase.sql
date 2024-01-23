/*
 Navicat Premium Data Transfer

 Source Server         : mytable
 Source Server Type    : MySQL
 Source Server Version : 50744 (5.7.44-log)
 Source Host           : localhost:3306
 Source Schema         : mybase

 Target Server Type    : MySQL
 Target Server Version : 50744 (5.7.44-log)
 File Encoding         : 65001

 Date: 24/01/2024 02:25:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_idx`(`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_german2_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (17, 1, '2024-01-23 12:35:52', '+7 (985) 677 77 23,Lenina,10,1,1,');
INSERT INTO `orders` VALUES (18, 1, '2024-01-23 12:36:41', '+7 (985) 677 77 23,Lenina,10,1,1,');
INSERT INTO `orders` VALUES (19, 2, '2024-01-23 12:37:14', '+7 (985) 677 77 23,Lenina,10,1,1,');
INSERT INTO `orders` VALUES (20, 2, '2024-01-23 12:38:27', '+7 (985) 677 77 23,Lenina,11,2,1,');
INSERT INTO `orders` VALUES (21, 3, '2024-01-23 12:38:52', '+7 (985) 677 77 23,Lenina,11,2,1,');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orders_count` int(11) NULL DEFAULT 1,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'kis-ab@yandex.ru', 7, 'ddsd');
INSERT INTO `users` VALUES (2, 'mail@yandex.ru', 2, 'Dima');
INSERT INTO `users` VALUES (3, 'mail-kis@yandex.ru', 1, 'Misha');

SET FOREIGN_KEY_CHECKS = 1;
