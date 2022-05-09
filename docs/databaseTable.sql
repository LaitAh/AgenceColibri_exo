-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

-- -----------------------------------------------------
-- Table `contact`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'The identifier of the contact request',
  `lastname` varchar(64) NOT NULL COMMENT 'The last name of the person initiating the contact request',
  `firstname` varchar(64) NOT NULL COMMENT 'The first name of the person initiating the contact request',
  `email` varchar(128) NOT NULL COMMENT 'The e-mail of the person initiating the contact request',
  `subject` tinytext NOT NULL COMMENT 'The subject of the contact request',
  `message` text NOT NULL COMMENT 'The message of the contact request',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'The identifier of the user',
  `email` varchar(128) NOT NULL COMMENT 'The e-mail of the user',
  `password` varchar(60) NOT NULL COMMENT 'The password of the user',
  `firstname` varchar(64) DEFAULT NULL COMMENT 'The firstname of the user',
  `lastname` varchar(64) DEFAULT NULL COMMENT 'The lastname of the user',
  `status` tinyint(3) unsigned NOT NULL COMMENT '1 = User actif / 2 = User disabled of blocked',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;