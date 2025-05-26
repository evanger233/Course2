/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : laravel_blog1

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2024-12-02 17:06:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('3', 'admin1', 'admin@qq.com', '$2y$10$1prypLO3weBao/7lbFO19ewvF9nBLbfM5kkYW8Bg7exn64FdbR/Qu', '2024-12-02 02:14:38', '2024-12-01 18:14:38');
INSERT INTO `admin` VALUES ('7', 'peter', '1@qq.com', '$2y$10$z98P40hH0T9b8kjvGx3khuAdB3mjweJf.Tgjri.4IrVkX3bdTWQz6', '2024-12-01 16:26:01', '2024-12-01 16:26:01');
INSERT INTO `admin` VALUES ('9', '66', '666@qq.com', '$2y$10$vffVSACXjWpkB2vXhebX8e1mWOvMECKS2ORbPYsJYPRR5ACPFBACq', '2024-12-02 02:15:25', '2024-12-01 18:15:25');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容 ',
  `admin_id` int(11) DEFAULT NULL COMMENT '管理员id',
  `likes_count` varchar(255) DEFAULT '0' COMMENT '喜欢个数',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间 ',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', 'Laurie Petrou on editing', 'Praesent venenatis ultricies erat. Nunc fringilla eros vitae nisl posuere, ut consectetur nulla feugiat. Nullam ut mauris vitae tortor sodales efficitur. Quisque ac orci ante. Proin “sit amet turpis lobortis”, imperdiet nisi ut, viverra lorem. Nullam ex massa, euismod vel metus non, pellentesque tincidunt neque. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lo aliquip. Etiam venenatis elit in tortor dapibus, ut euismod tortor posuere. Sed id mt ligula vel, pellentesque loreassa urna. Nam est ex, maximus bibendum magna ac. Maecenas a urna rhoncus, laoreet ligula vel, pellentesque lorem. Mauris fringilla sem enim, eget maximus elit lacinia at. Nulla sit amet semper massa, ac volutpat turpis.Maecenas a urna rhoncus, laoreet ligula vel, pellentesque lorem. Mauris fringilla sem enim, eget maximus elit lacinia at. Nulla sit amet semper massa, ac volutpat turpis.11111111112', '1', '6', '2024-12-02 00:22:49', '2024-12-01 16:22:49');
INSERT INTO `article` VALUES ('2', '“Norte” – The book was sold with the biggest edition', 'It is a long established fact that will be distracted by the readab.\r\n\r\nQuis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur erit qui in ea voluptate. Feugiat consequat eu sed eros. Cras suscipit eu est sed imperdiet. Curabitur ultrices dolor magna, at vene natis lacus rutrum nec.', '1', '3', '2024-11-30 18:02:17', '2024-11-30 10:02:17');
INSERT INTO `article` VALUES ('3', 'Tell me who you are, I’ll tell you what to drink', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Praesent venenatis ultricies erat. Nunc fringilla eros vitae nisl posuere, ut consectetur nulla feugiat. Nullam ut mauris vitae tortor sodales efficitur. Quisque ac orci ante.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', '1', '1', '2024-11-30 17:35:29', '2024-11-30 09:35:29');
INSERT INTO `article` VALUES ('4', 'Space for effective reading after hours', 'Praesent venenatis ultricies erat. Nunc fringilla eros vitae nisl posuere, ut consectetur nulla feugiat. Nullam ut mauris vitae tortor sodales efficitur. Quisque ac orci ante. Proin “sit amet turpis lobortis”, imperdiet nisi ut, viverra lorem. Nullam ex massa, euismod vel metus non, pellentesque tincidunt neque. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lo aliquip. Etiam venenatis elit in tortor dapibus, ut euismod tortor posuere. Sed id mt ligula vel, pellentesque loreassa urna. Nam est ex, maximus bibendum magna ac.', '1', '1', '2024-11-30 18:02:36', '2024-11-30 10:02:36');
INSERT INTO `article` VALUES ('5', 'Proin “sit amet turpis lobortis”, imperdiet nisi ut, viverra', 'It is a long established fact that will be distracted by the readab.\r\n\r\nvoluptate velitesse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur erit qui in ea voluptate. Feugiat consequat eu sed eros. Cras suscipit eu est sed imperdiet. Curabitur ultrices dolor magna, at vene natis lacus rutrum nec. molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur erit.', '1', '0', '2024-11-30 16:58:14', null);
INSERT INTO `article` VALUES ('6', 'Prepare the future for a genius', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', '1', '0', '2024-11-30 16:58:33', null);
INSERT INTO `article` VALUES ('7', '6666', '7777', '3', '0', '2024-12-01 15:49:05', '2024-12-01 15:49:05');
INSERT INTO `article` VALUES ('9', '2', '3', '3', '0', '2024-12-01 16:22:53', '2024-12-01 16:22:53');

-- ----------------------------
-- Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES ('3', '6666', '008@qq.com', '098123', '2024-12-01 18:19:10', '2024-12-01 18:19:10');

-- ----------------------------
-- Table structure for `likes`
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of likes
-- ----------------------------
INSERT INTO `likes` VALUES ('1', '5', '2', '2024-11-30 08:29:47', '2024-11-30 08:29:47');
INSERT INTO `likes` VALUES ('2', '5', '1', '2024-11-30 08:29:55', '2024-11-30 08:29:55');
INSERT INTO `likes` VALUES ('3', '4', '1', '2024-11-30 08:54:43', '2024-11-30 08:54:43');
INSERT INTO `likes` VALUES ('4', '4', '2', '2024-11-30 08:56:39', '2024-11-30 08:56:39');
INSERT INTO `likes` VALUES ('5', '4', '3', '2024-11-30 09:35:29', '2024-11-30 09:35:29');
INSERT INTO `likes` VALUES ('6', '6', '1', '2024-11-30 10:02:02', '2024-11-30 10:02:02');
INSERT INTO `likes` VALUES ('7', '6', '2', '2024-11-30 10:02:17', '2024-11-30 10:02:17');
INSERT INTO `likes` VALUES ('8', '6', '4', '2024-11-30 10:02:36', '2024-11-30 10:02:36');

-- ----------------------------
-- Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('1', 'Welcom to Auteur1', 'Imagine two men facing each other, pointing past one another. One is pointing at a tornado\r\n                    that is\r\n                    coming, and the other at a raging fire headed towards them. Each sees their own truth and is angry\r\n                    at the sight of the other’s hand. Each feels that the other’s hand is “wrong.” This may seem silly,\r\n                    but replace the tornado and fire with any modern issues, and the hands with words, and this scene\r\n                    describes how we often try to communicate.</p>\r\n             We want to prove our words are the right ones, instead of learning to look at what the\r\n                    other’s words\r\n                    are pointing at. Words are seductive, and for all their undeniable usefulness, they also can lead us\r\n                    away from understanding when we focus on them, when we make them more important than the truth they\r\n                    are meant to point at.11111111111111111111111111', '2024-12-02 02:19:46', '2024-12-01 18:19:46');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', '1234', '1234@qq.com', '$2y$10$JtF8SajMltW83eJbag5qCeigmZcynV5YEcOJZIyEWlsTiX.bDhbY.', '2024-12-02 01:34:06', '2024-12-01 17:34:06');
INSERT INTO `users` VALUES ('4', '66', '66@qq.com', '$2y$10$cxzzHvbJWiiZ3BBaSCm9oe3GLnb0zU0JGdlOQtAXbDoA7f445sRAa', '2024-11-30 06:50:26', '2024-11-30 06:50:26');
INSERT INTO `users` VALUES ('8', '99', '99@qq.com', '$2y$10$C8Xyg8AmD2ylECo5jvsCVuUnGXI.NDvHS92KvEQlvw3SBTw6EATha', '2024-12-01 18:17:55', '2024-12-01 18:17:55');
