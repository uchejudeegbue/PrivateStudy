-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bugtracker`;
CREATE TABLE `bugtracker` (
  `bugID` int(11) NOT NULL AUTO_INCREMENT,
  `bugName` varchar(50) NOT NULL,
  `bugSummary` varchar(400) NOT NULL,
  `bugCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`bugID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bugtracker` (`bugID`, `bugName`, `bugSummary`, `bugCategory`) VALUES
(21,	'StageFright',	'Stagefright is the collective name for a group of software bugs, that affect versions 2.2 and newer of the Android operating system, allowing an attacker to perform arbitrary operations on the victim device through remote code execution and privilege escalation.',	'Android'),
(31,	'Dr Crabbs Evil Bug',	'The DCEB is a very powerful and fictional bug that infects iOS devices and does absolutely nothing at all. Its only purpose is to provide dummy data for assessed labs',	'iOS'),
(41,	'MicroHard Bug',	'The MicroHard bug infects windows machines and makes them harder to use. So hard to use infact that it renders them more useless than they would be in the first place.',	'Microsoft');

-- 2016-04-25 10:48:42