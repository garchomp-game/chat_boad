# Host: localhost  (Version 5.5.5-10.1.29-MariaDB)
# Date: 2018-02-13 10:39:10
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "bookmark"
#

DROP TABLE IF EXISTS `bookmark`;
CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "bookmark"
#


#
# Structure for table "buy_item"
#

DROP TABLE IF EXISTS `buy_item`;
CREATE TABLE `buy_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `item_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "buy_item"
#

INSERT INTO `buy_item` VALUES (5,1,'lofo'),(6,1,'meiseishop'),(7,1,'buono-buono'),(8,1,'menstrend'),(9,1,'meiseishop'),(10,1,'lofo');

#
# Structure for table "cart"
#

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "cart"
#

INSERT INTO `cart` VALUES (5,'lofo',0);

#
# Structure for table "comments"
#

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `user_id` int(11) DEFAULT NULL,
  `comment_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

#
# Data for table "comments"
#

INSERT INTO `comments` VALUES (57,'hogehoge',1,'w&#ICPtL6KOF!oa53np%xW0k*lJe$dcV8R1TYvuZsHrMySXgDj','2018-02-12 14:36:29','0000-00-00 00:00:00'),(58,'hogehoge',1,'rOpthYG3MUfBC*HwWNvS&F9Qo5IK$%d68L!4ecVE#?2PnsJq0a','2018-02-12 14:36:34','0000-00-00 00:00:00'),(59,'hogehoge',1,'vOzonfx9c8kga2pEQslH5UD0JyW$Ih?4KwuYSerLCPmRjXiAMF','2018-02-12 14:36:49','0000-00-00 00:00:00'),(60,'hogehoge',1,'y4ToQMp?GZF5INYUV7gt&$R12uanwEejbPCsdrWmkJHSv6iBLh','2018-02-12 14:37:33','0000-00-00 00:00:00'),(61,'hogehoge',1,'DJy?taRjAxfsuW!KeoCY4hBqG*5P$EbdTzwFZiL6cln1p3g20r','2018-02-12 14:39:57','0000-00-00 00:00:00'),(62,'hogehoge',1,'q0ICsBn$guD7cbV?Od#f!&wizFU%mtkhQ6ojKRyJvPpA*rZe1W','2018-02-12 14:43:55','0000-00-00 00:00:00'),(63,'hoge',1,'XrweDU#vPKOtVQBz!Ld28kJ3WF6457hIjH1aulZy*nR&0EC?xm','2018-02-12 15:05:57','0000-00-00 00:00:00'),(64,'hoge',1,'1dunF$QkXjSVKmEI*gAHZa2GCNJ#cP6TiL3hBrY%OUqys!p5Rl','2018-02-12 15:06:01','0000-00-00 00:00:00'),(65,'a',1,'$Qr4ah!G%PvnpZeCqE#NwjlDStcKdJ5Uyfb02koXizuV&x7FOL','2018-02-12 15:06:07','0000-00-00 00:00:00'),(66,'a',1,'w63#g&NcpaW8ZfXGr7qi1kOMsy$!?HCKFhd2SxI9YQJ0Lv*Dln','2018-02-12 15:06:12','0000-00-00 00:00:00'),(67,'a',1,'sGhePT%LM7EdRACg0BWyxHoijZ35*6rnIt4KDav#J9Q8Fquz1O','2018-02-12 15:06:14','0000-00-00 00:00:00'),(68,'a',1,'*DWA1bF$eLjwQk8uTJOI56vg0itVPN3UqfCMh#H9srnzYx&ZE4','2018-02-12 15:06:15','0000-00-00 00:00:00'),(69,'a',1,'*p1DrYv6HocX30JuCyxbwUAz#m$jR8s5ZP7gnQKqf?V&OB4kGl','2018-02-12 15:06:16','0000-00-00 00:00:00'),(70,'a',1,'KvLpDEziBM8Iqdty9eT$kfnwxorYW%HFcG7Q0g&A2#mOXsC?6Z','2018-02-12 15:06:17','0000-00-00 00:00:00'),(71,'a',1,'DMJ0ApsEGrd&8nqB7URigC?VN%wPWZQ#fjz5L1243uScbTtkvl','2018-02-12 15:06:20','0000-00-00 00:00:00'),(72,'あｓｄｆ',1,'wkDO?Jf!3CZ4bvi9KjoValgdnYN2U%SBXtAu67q$GW1me0yMT#','2018-02-12 17:04:41','0000-00-00 00:00:00'),(73,'ｔｙ５４ｔｙ５４',1,'0*oP%n2?GLvQ#D$gAm1KzY7BRVElNiwpqsyf8u!b5t4JdhMaeW','2018-02-12 17:04:53','0000-00-00 00:00:00');

#
# Structure for table "favolite"
#

DROP TABLE IF EXISTS `favolite`;
CREATE TABLE `favolite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comment_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "favolite"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'garchomp(otoka)','garchomp@gmail.com','garchomp_otoka_pass','2018-02-10 23:32:48','0000-00-00 00:00:00'),(11,'hogehoge',NULL,'hogehoge','2018-02-12 01:46:35','0000-00-00 00:00:00'),(12,'hogehoge',NULL,'hogera','2018-02-12 02:04:42','0000-00-00 00:00:00'),(13,'testhoge',NULL,'hogehoge','2018-02-12 02:05:10','0000-00-00 00:00:00'),(14,'hogetest',NULL,'hogehoge','2018-02-12 02:06:24','0000-00-00 00:00:00'),(15,'atatata',NULL,'ataatta','2018-02-12 02:07:53','0000-00-00 00:00:00'),(16,'kljsfljsdfas',NULL,'garchomp_otoka_pass','2018-02-12 02:15:38','0000-00-00 00:00:00'),(17,'kfs;kfsd;fka',NULL,'lkfjlfjsadl','2018-02-12 02:15:49','0000-00-00 00:00:00'),(18,'kasfjgpe',NULL,'jgpejgpe','2018-02-12 02:17:37','0000-00-00 00:00:00'),(19,'garchomp(otoka)dffsd',NULL,'garchomp_otoka_psdfsdfsaass','2018-02-12 02:18:19','0000-00-00 00:00:00');
