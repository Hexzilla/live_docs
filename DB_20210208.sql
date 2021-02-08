/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.17-MariaDB : Database - wwwclini_musfata
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wwwclini_musfata` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `wwwclini_musfata`;

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `companyid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `companyNo` varchar(100) NOT NULL,
  `CompType` int(3) NOT NULL,
  `CompReg` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Managerid` int(11) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `main_company_id` int(11) NOT NULL,
  PRIMARY KEY (`companyid`),
  UNIQUE KEY `Name` (`Name`) USING BTREE,
  KEY `CompType` (`CompType`),
  KEY `Managerid_2` (`Managerid`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

/*Data for the table `company` */

insert  into `company`(`companyid`,`Name`,`companyNo`,`CompType`,`CompReg`,`email`,`Managerid`,`Remarks`,`main_company_id`) values 
(2,'مكتب خدماتي الراقية للخدمات العامة','',4,'4030171884','',0,'',0),
(3,'مؤسسة خدماتي الراقية للمقاولات','',4,'4030166899','',0,'',0),
(4,'شركة الجاسرية المتقدمة للمقاولات المحدودة ','',2,'4030570580','',0,'',0),
(5,'شركة الجاسرية المتطورة للزراعة','',2,'4030329004','',200,'',0),
(6,'شركة نهار الدولية','',2,'4030238667','',0,'',0),
(7,'ggggggggggggggggggg','',7,'','',2,'',0),
(103,'tatatata','',7,'4030238667','',2,'',0),
(104,'bbb','',1,'4030238667','',0,'',0),
(105,'Stronghold','',7,'','tester@gmail.com',2,'',106),
(106,'HoldingStorm','',5,'','ahmadyasser7@outlook.com',2,'',0),
(109,'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee','gggggggggggggggggggggggggggggggggggg',7,'','',2,'',0),
(110,'hhhhhhhhhhhhhhhhhhhhh','hhhh',4,'','ahmadyasser7@outlook.com',0,'',0),
(111,'Z01','Z01',5,'','',2,'',0),
(112,'Z022','',7,'','',2,'',0),
(113,'XXXXXXXXXXXXXXXXXXXX','gggggggggggggggggggggggggggggggggggg',8,'','x@gmail.com',2,'',106),
(114,'StormKitty_Update','sssss',7,'','ssss@gmail.com',2,'',105),
(115,'StrongBox','StrongBox',7,'','StrongBox@hotmail.com',0,'',0),
(116,'22222222222222222Stronghold','',7,'','',0,'',109),
(117,'Test-Partner-1','',7,'','',2,'',114),
(118,'Test-Partner-2','',7,'','',2,'',0);

/*Table structure for table `company_partners` */

DROP TABLE IF EXISTS `company_partners`;

CREATE TABLE `company_partners` (
  `id` bigint(255) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

/*Data for the table `company_partners` */

insert  into `company_partners`(`id`,`company_id`,`partner_id`) values 
(37,117,103),
(38,117,104),
(39,117,106),
(40,117,115),
(41,118,106),
(42,118,105),
(45,103,103),
(46,103,104),
(47,103,111),
(48,2,114),
(49,2,104),
(50,2,103);

/*Table structure for table `comptypes` */

DROP TABLE IF EXISTS `comptypes`;

CREATE TABLE `comptypes` (
  `CompType` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  PRIMARY KEY (`CompType`),
  KEY `CompType` (`CompType`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `comptypes` */

insert  into `comptypes`(`CompType`,`Name`) values 
(1,'شركة ذ.م.م ذات شخص واحد \r\n'),
(2,'شركة ذات مسؤولية محدودة\r\n'),
(3,'شركة مساهمة مغلقة\r\n'),
(4,'مؤسسة فردية\r\n'),
(5,'شركة قابضة'),
(7,'شركة تضامنية'),
(8,'ggggggggggggggggggg');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_name` varchar(255) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `IDcard` varchar(15) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `Customer_name` (`Customer_name`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

/*Data for the table `customers` */

insert  into `customers`(`customer_id`,`Customer_name`,`Nationality`,`email`,`mobile`,`IDcard`,`Position`,`Remarks`) values 
(3,'ماجد عطية محمد الحارثي ','سعودي','','0599300095','1048893380','المدير العام',''),
(4,'مراد عناني','تركيا','','','210141444','المدير العام',''),
(5,'جهاد عناني','تركيا','','','2122825249','المدير العام',''),
(6,'أحمد ابراهيم على سلطان','سعودي','','','1007624974','المدير العام ',''),
(7,'حاتم منصور محمد حسن فارسي','سعودي','','','1005736291','المدير العام',''),
(8,'ياسر حامد عيسى مزاحم','سعودي','','','1009647544','المدير العام',''),
(9,'محمد عائض القحطاني','سعودي','','','1002292124','المدير العام',''),
(109,'abc','aaa','ahmadyasser7@outlook.com','123123123','123','123123','gggg');

/*Table structure for table `dcategory` */

DROP TABLE IF EXISTS `dcategory`;

CREATE TABLE `dcategory` (
  `dtype` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`dtype`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `dcategory` */

insert  into `dcategory`(`dtype`,`name`) values 
(1,'شخصي'),
(2,'شركة');

/*Table structure for table `doctype` */

DROP TABLE IF EXISTS `doctype`;

CREATE TABLE `doctype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `warndays` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `doctype` */

insert  into `doctype`(`id`,`name`,`warndays`) values 
(6,'ترخيص الاستثمار',90),
(7,'السجل التجاري ',30),
(8,'التامينات الاجتماعية ',10),
(9,'الزكاة والدخل',60),
(10,'رخصة البلدية ',60),
(11,'شهادة السعودة',10),
(12,'ترخيص صناعي مبدئي',30),
(13,'ترخيص صناعي نهائي',30),
(14,'البيئة',30),
(15,'الدفاع المدني',30),
(16,'الغرفة التجارية',30),
(17,'مكتب العمل',10),
(18,'العنوان الوطني-واصل',5),
(19,'ترخيص زراعي',60);

/*Table structure for table `documents` */

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `docno` varchar(100) NOT NULL,
  `issuedate` date DEFAULT NULL,
  `expiredate` date DEFAULT NULL,
  `warndays` int(3) NOT NULL,
  `comapnyid` int(11) NOT NULL,
  `doctype` int(11) NOT NULL,
  `dtype` int(1) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`docid`),
  KEY `comapnyid` (`comapnyid`),
  KEY `doctype` (`doctype`),
  KEY `dtype` (`dtype`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8;

/*Data for the table `documents` */

insert  into `documents`(`docid`,`docno`,`issuedate`,`expiredate`,`warndays`,`comapnyid`,`doctype`,`dtype`,`Remarks`) values 
(5,'4030171884','2007-08-18','2022-11-14',30,2,7,1,''),
(6,'504037444','2021-02-08','2021-02-08',10,2,8,1,''),
(7,'3000963124','2532-11-30','2021-09-07',60,2,9,1,''),
(8,'39111426853','2020-09-29','2021-09-19',60,2,10,1,''),
(9,'4030166899','2007-02-18','2021-09-25',30,3,7,1,''),
(10,'501779253','2021-09-19','2021-09-19',10,3,8,1,''),
(11,'4030570580','2017-04-09','2021-02-24',30,4,7,2,''),
(12,'3105073195','2017-04-09','2019-03-19',60,4,9,2,''),
(13,'4030329004','2014-12-24','2022-05-29',30,5,7,2,''),
(14,'510257782','2532-11-30','2020-11-17',10,5,8,2,''),
(15,'39111432420','2016-04-07','2020-02-22',60,5,10,2,''),
(17,'4030238667','2532-11-30','2021-09-27',30,6,7,2,''),
(19,'507528678','2018-02-20','2020-11-18',10,6,8,2,''),
(20,'40082115098','2020-04-03','2021-03-23',60,6,10,2,''),
(21,'30107346415','2532-11-30','2021-03-27',60,6,9,2,''),
(22,'4030469482','2021-01-28','2021-02-08',3000000,7,7,2,''),
(23,'4030280133','2015-01-21','2016-12-30',30,8,7,2,''),
(24,'508610068','2532-11-30','2015-10-28',10,8,8,2,''),
(25,'209782','2532-11-30','2532-11-30',30,8,16,2,''),
(26,'1100062463','2015-02-09','2018-01-06',60,8,10,2,''),
(27,'1010436705','2015-08-19','2020-06-25',30,9,7,2,''),
(28,'4030287435','2016-01-31','2020-12-06',30,10,7,2,''),
(29,'510051017','2018-10-07','2019-09-26',10,10,8,2,''),
(30,'3100287167','2532-11-30','2532-11-30',60,10,9,2,''),
(31,'237074','2016-10-02','2017-09-20',30,10,16,2,''),
(189,'',NULL,NULL,60,114,19,2,''),
(190,'',NULL,NULL,102,116,17,1,''),
(191,'123123','2021-01-14','2021-01-23',30,116,15,2,'ggg'),
(192,'','2021-01-28',NULL,60000000,117,19,1,'');

/*Table structure for table `documents_attachment` */

DROP TABLE IF EXISTS `documents_attachment`;

CREATE TABLE `documents_attachment` (
  `PK_MediaID` int(11) NOT NULL AUTO_INCREMENT,
  `extension` mediumtext NOT NULL,
  `date` mediumtext NOT NULL,
  `type` mediumtext NOT NULL,
  `FK_DocID` int(11) NOT NULL,
  `Path` mediumtext NOT NULL,
  `filename` mediumtext NOT NULL,
  `attach` mediumtext NOT NULL,
  PRIMARY KEY (`PK_MediaID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `documents_attachment` */

insert  into `documents_attachment`(`PK_MediaID`,`extension`,`date`,`type`,`FK_DocID`,`Path`,`filename`,`attach`) values 
(1,'pdf','2020-11-23 00:36:09','application',5,'media/2020/11/23','السجل التجاري.pdf','media/2020/11/23/1606113369.pdf'),
(2,'doc','2020-12-23 18:43:24','application',22,'media/2020/12/23','Changes.doc','media/2020/12/23/1608745404.doc'),
(3,'pdf','2020-12-23 18:44:50','application',22,'media/2020/12/23','Docker Deep Dive ( PDFDrive ).pdf','media/2020/12/23/1608745490.pdf'),
(4,'jpg','2021-02-08 13:58:15','image',189,'media/2021/02/08','15.jpg','media/2021/02/08/1612789095.jpg'),
(5,'jpg','2021-02-08 14:00:48','image',190,'media/2021/02/08','16.jpg','media/2021/02/08/1612789248.jpg'),
(6,'jpg','2021-02-08 14:01:12','image',22,'media/2021/02/08','16.jpg','media/2021/02/08/1612789272.jpg');

/*Table structure for table `emailgroups` */

DROP TABLE IF EXISTS `emailgroups`;

CREATE TABLE `emailgroups` (
  `groupid` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `groupcount` int(11) NOT NULL,
  `created` varchar(25) NOT NULL,
  `modified` varchar(25) NOT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `emailgroups` */

insert  into `emailgroups`(`groupid`,`groupname`,`groupcount`,`created`,`modified`) values 
(1,'khadamati',3,'2018-07-08 21:19:42','2018-07-08 21:19:42'),
(2,'تنبيه',4,'2018-10-04 14:05:36','2018-10-04 14:05:36'),
(3,'الايميل',1,'2018-12-11 22:06:56','2018-12-11 22:06:56'),
(4,'تصويت الغرفة التجارية',498,'2019-03-27 12:55:10','2019-03-27 12:55:10'),
(5,'الميزانية',27,'2020-08-12 05:08:07','2020-08-12 05:08:07'),
(6,'تجربة',1,'2020-11-26 05:00:51','2020-11-26 05:00:51'),
(7,'fffgggffggfg',6,'2021-02-05 16:02:26','2021-02-05 16:02:26');

/*Table structure for table `emailsettings` */

DROP TABLE IF EXISTS `emailsettings`;

CREATE TABLE `emailsettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` int(3) NOT NULL,
  `smtp_username` varchar(50) NOT NULL,
  `smtp_password` varchar(75) NOT NULL,
  `max_group` varchar(10) NOT NULL,
  `created` varchar(25) NOT NULL,
  `modified` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `emailsettings` */

insert  into `emailsettings`(`id`,`smtp_host`,`smtp_port`,`smtp_username`,`smtp_password`,`max_group`,`created`,`modified`) values 
(2,'mail.clinicupdate.com',26,'info@clinicupdate.com','5hx$u7Sa?z','3','2018-04-30 08:21:08','2018-04-30 08:21:08');

/*Table structure for table `emailstatus` */

DROP TABLE IF EXISTS `emailstatus`;

CREATE TABLE `emailstatus` (
  `statusid` int(10) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`statusid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `emailstatus` */

insert  into `emailstatus`(`statusid`,`status`) values 
(1,'Draft'),
(2,'Sent');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `companyid` int(11) NOT NULL,
  `emp_name` varchar(200) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `Nationality` varchar(100) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `Ctype` int(3) NOT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `emp_name` (`emp_name`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8;

/*Data for the table `employees` */

insert  into `employees`(`employee_id`,`companyid`,`emp_name`,`email`,`mobile`,`Nationality`,`position`,`Ctype`,`Remarks`) values 
(1,3,'abc','mustafa.kai@gmail.com','0543499774','فلسطيني بوثيقة مصرية','فني حاسب آلي',2,'2047086174'),
(2,2,'مراد مصلح عطيه الحارثي','al-harthe93@hotmail.com','0504855047','سعودي','معقب',1,'1083924652'),
(3,14,'ابراهيم عوضه على الشدوى ','','','سعودي','مدير ',1,''),
(4,165,'ايمن ابراهيم محمد المصرى ','','','سعودي','مدير',1,''),
(5,16,'ختام ام بدوى ','','','كندا ','مدير',1,''),
(6,16,'حسام ام بدوى','','','كندا ','مدير',1,''),
(7,168,'احمد حسين بانعمان ','','','اليمن ','مدير ',1,''),
(8,168,'صالح حسين بانعمان ','','','اليمن ','مدير',1,''),
(9,169,'اسامه احمد عباس زينى متوكل ','','','','مدير',1,''),
(10,19,'شهادة حسين شميم ','','','','مدير',1,''),
(11,19,'فالح عايش الذبيانى ','','','سعودي','مدير',1,''),
(12,170,'المعتز بالله الترزى ','','','كندا ','مدير عام ',1,''),
(13,22,'محمدفهد حسين حسين الشرقاوى ','','','الاردن','مدير',1,''),
(14,24,'سهيل محمد هاشم قماش ','','','','مدير',1,''),
(15,24,'احسان عبد الصمد فضل الرحمن القرشى ','','','','مدير',1,''),
(16,24,'محمد عبد الصمد فضل عبد الرحمن القرشى  ','','','','مدير',1,''),
(17,24,'انس عبد الصمد فضل عبد الرحمن القرشى ','','','','مدير',1,''),
(18,24,'يكر احمد نورى قمطرجى ','','','','مدير',1,''),
(19,25,'محمد عبد الرحمن عبودة القدسى ','','','','مدير',1,''),
(20,28,'حسام الدين رجب على خزبك ','','','مصر','مدير',1,''),
(21,28,'حمدى مصطفى عبدة عثمان ','','','مصر ','مدير',1,''),
(22,154,'محمد مازن محمد بترجى  ','','','سعودي','مدير',1,''),
(23,154,'عبد الله مازن محمد بترجى ','','','سعودي','مدير',1,''),
(24,30,'حربى سليمان عاهد عرفات ','','','الاردن ','مدير ',1,''),
(25,177,'عبد الله عوض عبد الربه النقيب ','','','اليمن ','مدير ',1,''),
(203,102,'bbbbbbbbbbbb','','','','',2,''),
(204,0,'ccccccccccccccccccc','','','','',2,'');

/*Table structure for table `emptypes` */

DROP TABLE IF EXISTS `emptypes`;

CREATE TABLE `emptypes` (
  `Ctype` int(3) NOT NULL AUTO_INCREMENT,
  `ctname` varchar(50) NOT NULL,
  PRIMARY KEY (`Ctype`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `emptypes` */

insert  into `emptypes`(`Ctype`,`ctname`) values 
(1,'Manager'),
(2,'Employee');

/*Table structure for table `get_company` */

DROP TABLE IF EXISTS `get_company`;

CREATE TABLE `get_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(100) NOT NULL,
  `companyid` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

/*Data for the table `get_company` */

insert  into `get_company`(`id`,`customer_id`,`companyid`) values 
(46,3,6),
(3,3,3),
(140,109,105),
(5,3,5),
(45,3,2),
(7,4,6),
(8,5,6),
(9,6,7),
(10,7,7),
(11,8,8),
(12,9,8),
(23,19,8),
(14,11,9),
(15,13,10),
(16,12,10),
(17,14,10),
(18,15,10),
(19,16,10),
(20,17,10),
(21,18,10),
(22,19,11),
(24,20,12),
(25,21,12),
(26,22,13),
(27,23,13),
(28,24,14),
(29,25,15),
(30,26,16),
(31,27,17),
(32,28,18),
(33,29,19),
(34,31,20),
(35,32,21),
(36,32,22),
(37,33,23),
(38,33,24),
(39,33,25),
(40,33,26),
(41,36,27),
(43,19,28),
(47,38,29),
(48,38,30),
(49,38,31),
(50,38,32),
(51,39,33),
(52,39,34),
(53,41,35),
(54,42,36),
(55,43,37),
(56,44,38),
(57,45,39),
(58,46,40),
(59,46,41),
(60,48,42),
(61,49,43),
(62,50,44),
(63,51,45),
(64,52,46),
(65,52,47),
(66,53,48),
(67,54,49),
(68,55,50),
(69,56,50),
(70,57,50),
(71,58,51),
(72,59,52),
(73,59,53),
(74,61,54),
(75,62,55),
(76,63,56),
(77,63,57),
(78,65,58),
(79,66,59),
(80,66,60),
(81,67,61),
(82,67,62),
(83,68,63),
(84,69,63),
(85,68,64),
(86,70,65),
(87,71,66),
(88,72,67),
(89,69,64),
(90,73,68),
(91,74,69),
(92,75,70),
(93,75,71),
(94,76,72),
(95,77,73),
(96,78,74),
(97,78,75),
(98,79,76),
(99,80,77),
(100,81,78),
(101,81,79),
(102,81,80),
(153,109,118),
(104,82,82),
(105,83,83),
(106,84,84),
(107,85,85),
(108,86,85),
(109,85,86),
(110,86,86),
(111,86,87),
(112,85,87),
(113,85,88),
(114,86,88),
(115,87,89),
(116,88,89),
(154,109,103),
(118,88,90),
(119,90,91),
(120,91,92),
(121,92,92),
(122,93,93),
(123,94,94),
(124,95,95),
(125,96,95),
(126,97,95),
(127,98,95),
(128,99,96),
(129,100,96),
(130,101,97),
(131,102,97),
(132,102,98),
(133,104,99),
(134,105,100),
(135,106,100),
(137,108,101),
(138,3,101),
(139,0,102),
(141,5,105),
(142,109,106),
(143,109,108),
(144,109,109),
(145,109,110),
(146,109,111),
(147,109,112),
(148,109,113),
(149,109,114),
(150,109,115),
(151,109,116),
(152,109,117);

/*Table structure for table `grdetails` */

DROP TABLE IF EXISTS `grdetails`;

CREATE TABLE `grdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupid` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` varchar(25) NOT NULL,
  `modified` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `grdetails` */

insert  into `grdetails`(`id`,`groupid`,`name`,`email`,`status`,`created`,`modified`) values 
(2,6,'مصطفى رمضان','mustafakaid@gmail.com',0,'2020-12-20 22:41:09','2020-12-20 22:41:09'),
(3,7,'Stronghold','tester@gmail.com',0,'2021-02-05 16:02:27','2021-02-05 16:02:27'),
(4,7,'HoldingStorm','ahmadyasser7@outlook.com',0,'2021-02-05 16:02:27','2021-02-05 16:02:27'),
(5,7,'hhhhhhhhhhhhhhhhhhh','ahmadyasser7@outlook.com',0,'2021-02-05 16:02:27','2021-02-05 16:02:27'),
(6,7,'XXXXXXXXXXXXXXXXXXXX','x@gmail.com',0,'2021-02-05 16:02:27','2021-02-05 16:02:27'),
(7,7,'StormKitty_Update','ssss@gmail.com',0,'2021-02-05 16:02:27','2021-02-05 16:02:27'),
(8,7,'StrongBox','StrongBox@hotmail.com',0,'2021-02-05 16:02:27','2021-02-05 16:02:27');

/*Table structure for table `letters` */

DROP TABLE IF EXISTS `letters`;

CREATE TABLE `letters` (
  `letterid` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mdate` date NOT NULL,
  `sdate` date NOT NULL,
  `recipients` varchar(255) CHARACTER SET utf8 NOT NULL,
  `statusid` int(1) NOT NULL,
  PRIMARY KEY (`letterid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `letters` */

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `subject` varchar(250) CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `mailto` varchar(250) NOT NULL,
  `toemail` varchar(100) DEFAULT NULL,
  `mailcc` varchar(250) NOT NULL,
  `attachments` varchar(250) NOT NULL,
  `uploaded_file_names` varchar(255) NOT NULL,
  `send_date_time` varchar(25) NOT NULL,
  `status` varchar(25) CHARACTER SET utf8 NOT NULL DEFAULT 'pending',
  `created` varchar(25) NOT NULL,
  `modified` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `message` */

insert  into `message`(`id`,`subject`,`content`,`mailto`,`toemail`,`mailcc`,`attachments`,`uploaded_file_names`,`send_date_time`,`status`,`created`,`modified`) values 
(1,'تجربة','مرحبا','6','','','?????_??_??????1.pdf','','26/11/2020','send','2020-11-26 05:01:59','2020-11-26 05:01:59'),
(2,'111111111111111111111111','ggggggggggggggggggggggggggggggggggggggggggggg','','ahmadyasser7@outlook.com','gggggggggggggg','sanct.log','','21/12/2020','pending','2020-12-21 07:01:08','2020-12-21 07:01:08'),
(3,'11111111111111111111111122222222222','gggggggggggggggggg','','ahmadyasser7@outlook.com','gggggggggggggg','sanct1.log','','21/12/2020','pending','2020-12-21 07:07:01','2020-12-21 07:07:01'),
(4,'33333333333333333333333','444444444444444444444444444444444444444444444','','ahmadyasser7@outlook.com','gggggggggggggg','d4ac4633ebd6440fa397b84f1bc94a3c.7z','','21/12/2020','pending','2020-12-21 07:11:31','2020-12-21 07:11:31'),
(5,'aaaaaaaaaaaaaa','ggggggggggg','','test','gggggggggggggg','1.7z','','21/12/2020','pending','2020-12-21 07:12:50','2020-12-21 07:12:50'),
(6,'aaooooooooooooooooooooooooooooooooooo','hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh','','ahmadyasser7@outlook.com','gggggggggggggg','','d69e77a952de527dce0ebc1db649d589.7z,5d935b58a1720c2dd390f529440d6558.7z,5ab20cfc94170f8508a85d97786de2c1.7z','23/12/2020','pending','2020-12-22 18:21:24','2020-12-22 18:21:24'),
(7,'xxxxxxxxxxxxxx','xxxxxxxxxxxxxxx','','ahmadyasser7@outlook.com','xxxxxxxxxxxxxxxxx','100.7z,101.7z,102.7z','f54e456bd92697306dd85b6b4ede65f2.7z,fe268c08bdb0ebe3a0b8c6c5b871a0c5.7z,71821e71d7f696ca2bedec3533af77cd.7z','21/12/2020','send','2020-12-22 18:22:15','2020-12-22 18:22:15'),
(8,'aaooooooooooooooooooooooooooooooooooo','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','3','skonkseter@gmail.com','gggggggggggggg','100.7z,101.7z,102.7z','11ea16e400a16f741b42ff9eaefa4f68.7z,c0b61bb8837a2aa695a3b3ddca4ca69a.7z,6936c6c0b335ff7578b5e69b2bec2740.7z','23/12/2020','send','2020-12-22 18:30:56','2020-12-22 18:30:56'),
(9,'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb','<p><strong><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">aaaaaaaaaaaaaaaaaa</font></font></strong></p>\r\n\r\n<blockquote>\r\n<p><strong><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">bbbbbbbbbbbbbbbb</font></font></strong></p>\r\n</blockquote>\r\n\r\n<p><strong><img alt=\"AAAAAA\" src=\"https://ckeditor.com/assets/images/header/ckeditor-4-0da1800a0c.png\" style=\"height:38px; width:200px\" /></strong></p>\r\n','1,2','geeeeeee@gmail.com','','','','25/03/2021','pending','2021-02-05 23:12:44','2021-02-05 23:12:44');

/*Table structure for table `user_group` */

DROP TABLE IF EXISTS `user_group`;

CREATE TABLE `user_group` (
  `user_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `user_group` */

insert  into `user_group`(`user_group_id`,`name`) values 
(1,'Admin'),
(2,'Employee'),
(3,'Client');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(96) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `privilege` varchar(20) NOT NULL DEFAULT 'user',
  `date_added` datetime NOT NULL,
  `addstatus` tinyint(1) DEFAULT 0,
  `editstatus` tinyint(1) DEFAULT 0,
  `delstatus` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_group_id`,`username`,`password`,`fullname`,`email`,`image`,`status`,`privilege`,`date_added`,`addstatus`,`editstatus`,`delstatus`) values 
(1,1,'admin','21232f297a57a5a743894a0e4a801fc3','supper admin','admin@gmail.com','dav2.jpg',1,'Supper Admin','2020-11-15 21:58:53',1,1,1),
(12,2,'test','21232f297a57a5a743894a0e4a801fc3','tester','tester@gmail.com','dav2.jpg',1,'user','0000-00-00 00:00:00',0,0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
