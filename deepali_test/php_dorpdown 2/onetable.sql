-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 08, 2008 at 02:11 PM
-- Server version: 4.1.20
-- PHP Version: 4.4.4
-- 
-- Database: `mydb`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `onetable`
-- 

CREATE TABLE `onetable` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `pid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `onetable`
-- 

INSERT INTO `onetable` (`id`, `name`, `pid`) VALUES (1, 'computers', 0),
(2, 'chemical', 0),
(3, 'sub of computer', 1),
(4, 'sub of chemical', 2),
(5, 'sub of computer 2', 1),
(6, 'sub of chemical 2', 2),
(7, '2sub of sub of chem', 3),
(8, '2sub of sub of comp', 4);
