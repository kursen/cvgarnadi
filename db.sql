/*
MySQL Backup
Source Server Version: 5.5.5
Source Database: cvgarnadi
Date: 7/20/2016 09:50:03
*/


-- ----------------------------
--  Table structure for `chat`
-- ----------------------------
DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sent_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `leavemessage`
-- ----------------------------
DROP TABLE IF EXISTS `leavemessage`;
CREATE TABLE `leavemessage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactnumber` varchar(15) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` char(1) NOT NULL,
  `datereceive` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `register_usered`
-- ----------------------------
DROP TABLE IF EXISTS `register_usered`;
CREATE TABLE `register_usered` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `chat` VALUES ('41','1','test','2016-05-26 05:58:39'),  ('42','1','tesing','2016-05-26 11:17:32'),  ('43','1','basri','2016-05-26 06:33:30'),  ('44','1','testing','2016-05-26 06:33:40'),  ('45','1','sdfasdf','2016-05-26 06:34:17'),  ('46','2','yaudah ambil aja','2016-05-26 10:18:06'),  ('47','2','oke lah ya','2016-05-26 10:19:12'),  ('48','1','mana kau ni','2016-05-26 10:19:36');
INSERT INTO `leavemessage` VALUES ('35','joko','muhammadbasri61@gmail.com','081234555554','CV. Trisna','saya mau beli software\r\nmohon penjelasannya','R','2016-05-05 06:45:55'),  ('36','taufik','taufiq.aneukatjeh@yahoo.co.id','081234555554','test','dfasdfasdfasdf','R','2016-05-05 06:46:40'),  ('37','syafriadi buchari','syaf@yahoo.com','0938383938','halotec indonesia','testing software','R','2016-05-10 01:44:08'),  ('38','muhammad basri','basri123@gmail.com','099080980989','testing','mau nanya soal software','R','2016-05-12 01:08:16'),  ('39','Garnadi Tito','tito@yahoo.com','099080980989','CV. Garnadi Tito','gimana software nya ,,uda siap belom','D','2016-05-12 13:07:44'),  ('40','Garnadi Tito','mysteriousdrug@yahoo.co.id','3455345345345','CV. Garnadi Tito','testing','R','2016-05-12 13:09:53');
INSERT INTO `register_usered` VALUES ('1','basri','basri098@gmail.com');
INSERT INTO `user` VALUES ('1','administrator','administrator');
