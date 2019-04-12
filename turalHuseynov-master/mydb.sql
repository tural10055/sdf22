-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 04:03 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `mydb`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `table1`
-- 

CREATE TABLE `table1` (
  `id` int(15) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `table1`
-- 

INSERT INTO `table1` VALUES (1, 'Feugiat consequat tempus ultri');
INSERT INTO `table1` VALUES (2, 'Etiam tristique libero eu nibh');
INSERT INTO `table1` VALUES (3, 'Vehicula ultrices sed ultricie');

-- --------------------------------------------------------

-- 
-- Table structure for table `table2`
-- 

CREATE TABLE `table2` (
  `id` int(15) NOT NULL auto_increment,
  `list` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `table2`
-- 

INSERT INTO `table2` VALUES (1, 'Consequat tempus');
INSERT INTO `table2` VALUES (2, 'Libero nullam');
INSERT INTO `table2` VALUES (3, 'Lorem ipsum dolor');
INSERT INTO `table2` VALUES (4, 'Etiam adipiscing');
INSERT INTO `table2` VALUES (5, 'Blandit condimentum');
INSERT INTO `table2` VALUES (6, 'Nibh amet venenatis');
