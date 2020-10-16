-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:10 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `class1`
--

CREATE TABLE `class1` (
  `ID` bigint(90) NOT NULL,
  `name` varchar(90) NOT NULL,
  `sub1` int(90) NOT NULL,
  `sub2` int(90) NOT NULL,
  `sub3` int(90) NOT NULL,
  `sub4` int(90) NOT NULL,
  `sub5` int(90) NOT NULL,
  `total` int(90) NOT NULL,
  `percent` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class1`
--

INSERT INTO `class1` (`ID`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total`, `percent`) VALUES
(1, 'ujwal', 100, 100, 100, 100, 100, 100, 100),
(2, 'omkar', 100, 100, 100, 100, 100, 100, 100),
(3, '', 0, 0, 0, 0, 0, 0, 0),
(4, '90', 90, 90, 100, 90, 0, 460, 92),
(5, '', 0, 0, 0, 0, 0, 0, 0),
(6, 'aadinath', 100, 90, 90, 100, 90, 470, 94),
(7, 'aadinath', 100, 90, 90, 100, 90, 470, 94),
(8, '', 0, 0, 0, 0, 0, 0, 0),
(9, 'aadinath', 100, 90, 90, 100, 90, 470, 94),
(10, '', 0, 0, 0, 0, 0, 0, 0),
(11, 'ashitosh', 90, 90, 90, 100, 90, 460, 92),
(12, '', 0, 0, 0, 0, 0, 0, 0),
(13, 'Rohan', 55, 66, 77, 88, 99, 385, 77);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `username` varchar(50) NOT NULL,
  `sub1` int(59) NOT NULL,
  `sub2` int(50) NOT NULL,
  `sub3` int(50) NOT NULL,
  `percent` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`username`, `sub1`, `sub2`, `sub3`, `percent`) VALUES
('ujwal', 99, 99, 99, 99),
('omkar', 99, 99, 99, 99),
('abc', 50, 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `gender`, `pass`) VALUES
('', '', '', ''),
('ujwal', 'deshpandeujwal5515@gmail.com', 'option1', 'makegaon@27'),
('ujwal', 'deshpandeujwal5515@gmail.com', 'option1', 'asdfg'),
('omkar', 'omkar@gmail.com', 'm', 'bgtrfvcde'),
('abc', 'abc@mail.com', 'm', '12345'),
('aadinath', 'adinath@gmail.com', 'option2', 'bhau123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class1`
--
ALTER TABLE `class1`
  ADD UNIQUE KEY `id` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class1`
--
ALTER TABLE `class1`
  MODIFY `ID` bigint(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
