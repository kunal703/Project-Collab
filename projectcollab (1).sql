-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 07:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectcollab`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `Id` int(11) NOT NULL,
  `Language` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`Id`, `Language`) VALUES
(1, 'CSS'),
(1, 'Java'),
(1, 'PHP'),
(1, 'Ruby'),
(6, 'JS'),
(6, 'PHP'),
(7, 'C#'),
(7, 'C/C++'),
(8, 'C/C++'),
(9, 'Java'),
(9, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdesc` longtext NOT NULL,
  `posneeded` char(100) NOT NULL,
  `contact` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Id`, `username`, `pname`, `pdesc`, `posneeded`, `contact`) VALUES
(1, 'abc123', 'Android', 'Application', 'Full Stack Dev', 'sadsad@gmail.com'),
(2, 'abc123', 'Android', 'jhkjh', 'Full Stack Dev', 'wewew'),
(3, 'abc123', 'erer', 'mmn,mn', 'Full Stack Dev', 'qwqw'),
(4, 'abc123', '', '', '', ''),
(5, 'abc123', 'android', 'ewffggewn fvcxm fsdghsdj btt', 'Back End Dev', 'asskjkdshavrbf@dsjfe f.com'),
(6, 'abc123', 'jhdfkjse ', 'kjassfh ', 'Front End Dev', 'rhtnvtkjy@jlhfd.com'),
(7, 'abc123', 'qwqwq', 'ojmnn', 'Full Stack Dev', 'khgmn'),
(8, 'abc123', 'sad', '', '', ''),
(9, 'abc123', 'hdgfhead', 'jhkjh', 'Full Stack Dev', 'lklklkkl');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `password`) VALUES
(1, 'abc123', 'xyz'),
(2, 'qwe123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`Id`,`Language`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
