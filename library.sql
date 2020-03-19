-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2019 at 02:32 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bookno` varchar(20) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `authorname` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `idate` date NOT NULL,
  `odate` date NOT NULL,
  `adate` date NOT NULL,
  `days` int(20) NOT NULL,
  PRIMARY KEY (`bookno`),
  KEY `authorname` (`authorname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookno`, `bookname`, `subject`, `authorname`, `uid`, `idate`, `odate`, `adate`, `days`) VALUES
('100', 'fa', 'toc', 'ulmann', '234', '2019-03-04', '2019-03-18', '0000-00-00', 0),
('101', 'ds', 'as', 'asdf', 'ashok', '2019-02-10', '2019-02-25', '0000-00-00', 0),
('102', 'dse', 'ash', 'asdfg', 'ashok', '2019-02-10', '2019-02-25', '0000-00-00', 0),
('103', 'dld', 'de', 'chandu', '3002', '2019-03-04', '2019-03-18', '0000-00-00', 0),
('104', 'databases', 'dbms', 'ashok', '3003', '2019-03-04', '2019-03-18', '0000-00-00', 0),
('105', 'co', 'coa', 'ashok', '3004', '2019-03-06', '2019-03-20', '0000-00-00', 0),
('106', 'c language', 'C', 'Dennis', '234', '2019-03-04', '2019-03-18', '0000-00-00', 0),
('107', 'java', 'java', 'harsha', '', '0000-00-00', '0000-00-00', '0000-00-00', 0),
('108', 'python', 'python', 'jagadish', '', '0000-00-00', '0000-00-00', '0000-00-00', 0),
('109', '.net', '.net', 'jagadish', '', '0000-00-00', '0000-00-00', '0000-00-00', 0),
('1234', 'Ritchie', 'C', 'Dennis', '234', '2019-03-04', '2019-03-18', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE IF NOT EXISTS `librarian` (
  `lfname` varchar(20) NOT NULL,
  `llname` varchar(20) NOT NULL,
  `lid` varchar(20) NOT NULL,
  `lpass` varchar(20) NOT NULL,
  `ldate` date NOT NULL,
  `lmail` varchar(50) NOT NULL,
  `lphone` varchar(10) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`lfname`, `llname`, `lid`, `lpass`, `ldate`, `lmail`, `lphone`) VALUES
('Gunturu', 'Ashok', '0001', 'ashok', '1999-01-22', 'ashokgunturu135@gmrit.edu.in', '9182734254'),
('nagulakonda', 'harsha', '0002', 'harsha', '1999-02-22', 'harsha@gmrit.edu.in', '9182734254');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE IF NOT EXISTS `registeration` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `question` varchar(20) NOT NULL,
  `ans` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`fname`, `lname`, `uid`, `pass`, `date`, `mail`, `phone`, `question`, `ans`) VALUES
('gunturu', 'ashok', '234', 'ashok', '1999-02-21', 'asffsfsfsaf@gmrit.ed', '1234567890', '2', 'me only'),
('mahesh', 'venkat', '3002', 'mahesh', '1999-12-23', 'mahesh@gmrit.edu.in', '8786858483', '3', '1234'),
('chandu', 'sai', '3003', 'chandu', '1999-12-23', 'chandu@gmrit.edu.in', '8786858483', '3', '9876'),
('jagadish', 'beppam', '3004', 'jagadish', '1999-12-23', 'jagadish@gmrit.edu.i', '9798969594', '4', 'here only'),
('ashok', 'rakesh', 'ashok', 'ashokkkk', '2009-06-25', 'ashok@gmrit.edu.in', '9182734254', '1', 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `reqbooks`
--

CREATE TABLE IF NOT EXISTS `reqbooks` (
  `subject` varchar(30) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `author_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reqbooks`
--

INSERT INTO `reqbooks` (`subject`, `book_name`, `author_name`) VALUES
('ashok', 'ashijk', 'AHSDFUJK');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `question` int(50) NOT NULL,
  `ans` int(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

