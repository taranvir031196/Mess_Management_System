-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2018 at 09:44 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `messmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(30) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `contactno` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `emailid`, `password`, `contactno`, `address`, `gender`) VALUES
(4, 'simran', 'simranwadhwa50@gmail.com', 'simranwadhwa', '9898565609', 'kkr', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `rollno` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `stream` varchar(30) DEFAULT NULL,
  `year` varchar(30) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `contactno` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`rollno`, `name`, `password`, `class`, `stream`, `year`, `emailid`, `contactno`) VALUES
(100, 'sumit', 'sumit', 'btech', 'civil', 'secondyear', 'sumit@gmail.com', '7699598965'),
(101, 'ayush', 'ayush', 'btech', 'mechanical', 'secondyear', 'emailid', 'contactno');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(30) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `contactno` varchar(30) DEFAULT NULL,
  `views` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `emailid`, `contactno`, `views`) VALUES
('aman', 'amankumar@gmail.com', '9797989845', 'mess menu should be updated.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE IF NOT EXISTS `issue` (
  `productid` varchar(30) DEFAULT NULL,
  `productname` varchar(30) DEFAULT NULL,
  `productquantity` varchar(30) DEFAULT NULL,
  `productprice` varchar(30) DEFAULT NULL,
  `totalprice` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`productid`, `productname`, `productquantity`, `productprice`, `totalprice`, `date`) VALUES
('1022', 'dal', '10', '50', '500', '2018-05-23'),
('1022', 'dal', '20', '50', '1000', '2018-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productid` int(11) DEFAULT NULL,
  `productname` varchar(30) DEFAULT NULL,
  `productquantity` varchar(30) DEFAULT NULL,
  `productprice` varchar(30) DEFAULT NULL,
  `totalprice` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `productquantity`, `productprice`, `totalprice`, `date`) VALUES
(1011, 'dal', '10', '50', '500', '2018-05-23'),
(1022, 'dal', '10', '50', '500', '2018-05-23');
