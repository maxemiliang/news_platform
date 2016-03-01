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
  `img` varchar(40) NOT NULL DEFAULT 'default.jpg',
  `userID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`aID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `articles`;
INSERT INTO `articles` (`aID`, `title`, `text`, `img`, `userID`, `date`) VALUES
(1, 'Linus derankar till silver 2', 'Tidigare idag derankade linus till silver 2, denna händelse chockade ingen då han verkligen aldrig var bra på CS:GO',  'default.jpg',  1,  '2016-02-16 08:51:36'),
(2, 'Lastbilssläp hänger över bro på E22 – vägen avstängd', 'Singelolyckan inträffade på E22 vid Gamleby vid 07.30-tiden på tisdagsmorgonen.\r\n\r\nFöraren körde av okänd anledning av Skramstadsbron och polis, ambulans och räddningstjänst kallades till platsen.\r\n\r\nEnligt polisen i Kalmar län hänger lastbilens släp över bron. Förarhytten har däremot åkt över och landat på marken intill ett järnvägsspår.\r\nEn förd till sjukhus\r\n\r\nRäddningstjänsten fokuserade inledningsvis på att få loss föraren, som uppgavs vara vaken och talbar, ur hytten.\r\n\r\n– En person har förts till sjukhus och man kan förmoda att det är föraren. Jag har inga uppgifter om skadeläget, säger Tomas Öberg, vakthavande befäl vid räddningstjänsten i Västervik.\r\n\r\nEnligt räddningstjänsten kan en brand ha uppstått i samband med olyckan.\r\n\r\n– Det fanns ingen brand när räddningstjänsten kom fram, men det kan ha varit något som brann i startskedet, säger Håkan Persson till TT.\r\nAvstängd hela förmiddagen\r\n\r\nE22 har efter olyckan stängts av i båda riktningar mellan trafikplats Skramstad och Björnsholm, norr om Västervik. Bärgningsarbetet vid olycksplatsen väntas vara tidskrävande.\r\n\r\n– På grund av olyckan kommer E22 vara avspärrad under hela förmiddagen, säger Tomas Öberg vid räddningstjänsten.\r\n\r\nDen senaste prognosen från Trafikverket gör gällande att vägen är avstängd till klockan 13.\r\n\r\nEnligt Västerviks-Tidningen stoppas i nuläget all tågtrafik som skulle ha passerat under bron.',  'default.jpg',  1,  '2016-02-16 08:51:36'),
(3, 'Denna artikel är bäst!', 'DENNA ARTIKEL ÄR BÄST!', 'default.jpg',  1,  '2016-02-16 10:54:44'),
(4, 'Linus är ganska dålig',  'Hej, idag lärde jag mig att linus är ganska dålig.', 'default.jpg',  1,  '2016-02-16 10:59:13'),
(5, 'Detta är en artikel!', 'Detta är texten till en arikel!',  'default.jpg',  1,  '2016-02-16 11:09:21');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privileges` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2016-03-01 10:34:41