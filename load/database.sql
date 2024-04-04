-- Adminer 4.8.1 MySQL 5.5.5-10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `customer` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `customer`;

DROP TABLE IF EXISTS `collection`;
CREATE TABLE `collection` (
  `customer_id` int(11) NOT NULL,
  `fat` float NOT NULL,
  `snf` float NOT NULL,
  `price` float NOT NULL,
  `qty` float NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `shift` char(1) NOT NULL,
  KEY `customer_id` (`customer_id`),
  CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `collection` (`customer_id`, `fat`, `snf`, `price`, `qty`, `amount`, `date`, `time`, `shift`) VALUES
(1,	4,	8,	35,	2,	70,	'2024-03-21',	'16:39:06',	'E'),
(2,	4,	8,	33.33,	2.4,	66.33,	'2024-03-21',	'17:10:02',	'M'),
(1,	4,	8,	33.33,	2.4,	66.33,	'2024-03-21',	'17:12:23',	'M'),
(4,	3.5,	7.9,	30.5,	2,	61,	'2024-03-21',	'17:17:05',	'E'),
(3,	3.3,	7.7,	33,	3.1,	100,	'2024-03-26',	'12:33:47',	'M');

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `alt_phone` varchar(10) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `village` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `bank_branch` varchar(30) NOT NULL,
  `acc_no` varchar(16) NOT NULL,
  `ifsc` varchar(16) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `customer` (`customer_id`, `customer_name`, `gender`, `phone`, `alt_phone`, `aadhar`, `village`, `bank`, `bank_branch`, `acc_no`, `ifsc`, `date_time`) VALUES
(1,	'vignesh',	'M',	'1278903456',	'2413789743',	'123456789012',	'thorappadi',	'bank of india',	'sivalapuri',	'838210110008382',	'bkid0008382',	'2024-03-20 22:08:07'),
(2,	'poorna',	'M',	'1234567890',	'0987654321',	'678905432112',	'thorappadi',	'boi',	'sivalapuri',	'838310110001111',	'bkid0008382',	'2024-03-21 15:35:57'),
(3,	'collection',	'M',	'2345',	'dsfa',	'afds',	'ksjadfh',	'vsda',	'edcedc',	'sadv',	'sdv',	'2024-03-21 15:41:42'),
(4,	'arun',	'M',	'8967542310',	'6789542312',	'675478238901',	'thorappadi',	'sbi',	'gingee',	'348934893489',	'1111122222',	'2024-03-21 16:11:19');

DROP TABLE IF EXISTS `c_detail`;
CREATE TABLE `c_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `blocked` int(11) NOT NULL DEFAULT 0,
  `active` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `c_detail` (`id`, `user_name`, `email`, `password`, `blocked`, `active`) VALUES
(1,	'admin',	'admin@gmail.com',	'admin@123',	0,	1),
(2,	'demo',	'demo@gmail.com',	'1234',	0,	1);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-04-04 03:29:23
