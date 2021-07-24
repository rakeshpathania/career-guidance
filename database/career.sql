-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2017 at 06:57 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `career`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `ansid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `qualname` varchar(30) NOT NULL,
  `joname` varchar(30) NOT NULL,
  `userquestion` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ansid`, `questionid`, `userid`, `fname`, `qualname`, `joname`, `userquestion`, `answer`) VALUES
(1908, 9912, 2, 'vishal', 'MSC.Computer Science', 'Government', 'eferfrerf', 'vjxkgkigikikgi'),
(1909, 9901, 2, 'vishal', 'MBBS', 'Goverment', 'want to become s/w engg.', 'u must go gor noida'),
(1910, 9901, 2, 'vishal', 'MBBS', 'Goverment', 'want to become s/w engg.', 'helo'),
(1911, 9902, 2, 'vishal', '108', '1102', 'i done n/w and how to get job?', 'go to noida...'),
(1912, 9913, 5, 'shallu123', 'MSC.IT', 'Part-Time', 'iwant to get a job regaring my career..', 'u must continue ur further studies..');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cid` int(11) NOT NULL,
  `field` varchar(70) NOT NULL,
  `qid` int(11) NOT NULL,
  `qname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `field`, `qid`, `qname`) VALUES
(101, 'army', 2, 'NDA'),
(102, 'computer', 3, 'MCA'),
(103, 'medical', 2, 'MBBS'),
(104, 'computer', 4, 'MSC.IT'),
(105, 'computer', 3, 'MSC.Computer Science'),
(106, 'medical', 4, 'Doctrate'),
(107, 'medical', 2, 'Biotechnology'),
(108, '0', 2, 'networking'),
(109, '0', 0, 'java-android'),
(110, '0', 0, 'fashion desioning'),
(111, '0', 3, 'msc physics'),
(115, '0', 1, 'php'),
(116, '0', 1, 'asp.net'),
(117, '0', 2, 'bcom'),
(118, 'computer', 1, 'shipment, defense co');

-- --------------------------------------------------------

--
-- Table structure for table `jobtypes`
--

CREATE TABLE IF NOT EXISTS `jobtypes` (
  `jid` int(11) NOT NULL,
  `jname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtypes`
--

INSERT INTO `jobtypes` (`jid`, `jname`) VALUES
(1101, 'private'),
(1102, 'Government'),
(1103, 'Part-Time'),
(1104, 'accounting'),
(1105, 'marketing'),
(1106, 'clericalll job');

-- --------------------------------------------------------

--
-- Table structure for table `mainqualification`
--

CREATE TABLE IF NOT EXISTS `mainqualification` (
  `qid` int(11) NOT NULL,
  `qualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainqualification`
--

INSERT INTO `mainqualification` (`qid`, `qualification`) VALUES
(1, 'matric'),
(2, 'senior secondary'),
(3, 'graduation'),
(4, 'masters');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `questionid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `qname` varchar(30) NOT NULL,
  `jname` varchar(30) NOT NULL,
  `question` varchar(200) NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionid`, `uid`, `username`, `qname`, `jname`, `question`) VALUES
(9901, 2, 'vishal', 'MBBS', 'Goverment', 'want to become s/w engg.'),
(9902, 2, 'vishal', '108', '1102', 'i done n/w and how to get job?'),
(9903, 3, 'chetna', '102', '1102', 'i am doing PHP.'),
(9904, 3, 'chetna', '102', '1103', 'any job regarding my career for part time..?'),
(9905, 3, 'chetna', '101', '1101', 'kndcksdndns'),
(9906, 4, 'monika', '106', '1102', 'how rto get a job?'),
(9907, 5, 'shallu123', '105', '1102', 'how to get a job?'),
(9908, 5, 'shallu123', '105', '1103', 'i am doing a MSC cs.'),
(9909, 2, 'vishal', '101', '1103', 'bfgfgftghtf'),
(9910, 2, 'vishal', '104', '1102', 'nvnidngirngier'),
(9911, 2, 'vishal', '102', '1102', 'abcklndkcnsdnisd'),
(9912, 2, 'vishal', 'MSC.Computer Science', 'Government', 'eferfrerf'),
(9913, 5, 'shallu123', 'MSC.IT', 'Part-Time', 'iwant to get a job regaring my career..');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
  `rid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `field` varchar(60) NOT NULL,
  `qname` varchar(100) NOT NULL,
  `college` varchar(50) NOT NULL,
  `eligibilty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`rid`, `qid`, `cid`, `field`, `qname`, `college`, `eligibilty`) VALUES
(1, 1, 101, 'army', 'NDA', 'kcl', 'above 75%'),
(2, 2, 101, 'computer', 'BCA', 'Lyalpur Khalsa collgeg', '60%'),
(4, 4, 106, 'medical', 'doctrate', 'apj', '80%'),
(5, 3, 105, 'computer', 'M.sc computer Science', 'Aims', '60%'),
(6, 1, 101, 'army', 'defence couching', 'GNDU university', 'above 75%');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `snap` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `firstname`, `lastname`, `username`, `password`, `dob`, `gender`, `snap`, `type`) VALUES
(1, 'manik', 'sharma', 'admin', 'admin', '1992-01-01', 'male', '1.jpeg', 'admin'),
(2, 'vishal', 'sharma', 'vishal', 'vishal', '1992-03-03', 'male', '2.jpeg', 'user'),
(3, 'chetna', 'kapoor', 'chetna', '123', '1991-03-03', 'female', '3.jpeg', 'user'),
(4, 'monika', 'sharma', 'monika', '123456', '1990-01-01', 'female', 'default.jpg', 'user'),
(5, 'shallu', 'rajput', 'shallu123', '123', '1991-02-02', 'female', '5.jpeg', 'user'),
(6, 'monika', 'gupta', 'monika123', '1234', '1991-03-06', 'female', '6.jpeg', 'user');
