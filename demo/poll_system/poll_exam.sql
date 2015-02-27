-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 27, 2009 at 06:31 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `poll_exam`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `answer`
-- 

CREATE TABLE `answer` (
  `aid` int(10) unsigned NOT NULL auto_increment,
  `qid` int(10) unsigned NOT NULL,
  `atitle` varchar(255) NOT NULL,
  `acount` int(10) NOT NULL default '0',
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `answer`
-- 

INSERT INTO `answer` VALUES (1, 1, 'Nhin rat dep', 1);
INSERT INTO `answer` VALUES (2, 1, 'Nhin Dep', 4);
INSERT INTO `answer` VALUES (3, 1, 'Nhin Cung duoc', 1);
INSERT INTO `answer` VALUES (4, 1, 'Nhin qua xau', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `question`
-- 

CREATE TABLE `question` (
  `qid` int(10) unsigned NOT NULL auto_increment,
  `qtitle` varchar(255) NOT NULL,
  `qdate` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `question`
-- 

INSERT INTO `question` VALUES (1, 'Ban thay qhonline the nao ?', '2009-10-10');
