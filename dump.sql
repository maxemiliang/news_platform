-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `news`;
CREATE DATABASE `news` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `news`;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `aID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` mediumtext NOT NULL,
  `userID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`aID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `tID` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(60) NOT NULL,
  PRIMARY KEY (`tID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tags_post`;
CREATE TABLE `tags_post` (
  `aID` int(11) NOT NULL,
  `tID` int(11) NOT NULL,
  KEY `aID` (`aID`),
  KEY `tID` (`tID`),
  CONSTRAINT `tags_post_ibfk_1` FOREIGN KEY (`aID`) REFERENCES `articles` (`aID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tags_post_ibfk_2` FOREIGN KEY (`tID`) REFERENCES `tags` (`tID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


-- 2016-02-15 20:56:50