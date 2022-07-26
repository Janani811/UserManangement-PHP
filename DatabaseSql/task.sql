-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 07:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(70) NOT NULL,
  `mobilenumber` bigint(20) NOT NULL,
  `education` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `firstname`, `lastname`, `emailid`, `password`, `age`, `address`, `mobilenumber`, `education`) VALUES
(1, 'JANANI', 'Janani', 'G', 'jananigopalsanthi@gmail.com', 'janani', 21, '22,MGR Nagar,Karur.', 888401180, 'B.E-COMPUTER SCIENCE ENGINNERING');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` int(11) NOT NULL,
  `deptname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `deptname`) VALUES
(1, 'WEB DEVELOPER'),
(8, 'ENGINEER'),
(9, 'FRONT END DEVELOPER'),
(10, 'SOFTWARE DEVELOPER'),
(13, 'FRONT END DEVELOPER'),
(14, 'TRAINER'),
(15, 'BACK END DEVELOPER'),
(17, 'ENGINEER');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `emailid` varchar(45) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`uid`, `firstname`, `lastname`, `username`, `emailid`, `password`, `age`, `dob`) VALUES
(1, 'Janani', 'G', 'Janani Jana', 'jananijana@gmail.com', 'jananijana', 21, '1998-11-24'),
(8, 'Surya', 'S', 'Surya', 'surya@gmail.com', 'surya', 25, '1992-10-28'),
(9, 'Vishali', 'M', 'Vishali', 'vishali@gmail.com', 'vishali', 20, '1999-05-31'),
(10, 'Remya', 'M', 'Remya', 'remya@gmail.com', 'remya@', 22, '1997-12-29'),
(13, 'Bhavani', 'R', 'Bhavani', 'bhavanig@gmail.com', 'bhavani', 23, '1996-07-15'),
(14, 'Enba Tamilan', 'M', 'Enba', 'enbatamilan@gmail.com', 'enba', 19, '2001-12-05'),
(15, 'Sonu', 'R', 'Sonu', 'sonur@gmail.com', 'sonur', 20, '2000-03-11'),
(17, 'Santhi', 'K', 'Santhi', 'santhi@gmai.com', 'santhi@', 43, '1975-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `uid` int(11) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`uid`, `emailid`, `password`) VALUES
(1, 'jananijana@gmail.com', 'jananijana'),
(8, 'surya@gmail.com', 'surya'),
(9, 'vishali@gmail.com', 'vishali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
