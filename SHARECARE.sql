-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2019 at 12:34 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SHARECARE`
--

-- --------------------------------------------------------

--
-- Table structure for table `FORGOT`
--

CREATE TABLE `FORGOT` (
  `COUNTER` int(11) NOT NULL,
  `ENROLLMENT` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `INFO`
--

CREATE TABLE `INFO` (
  `NAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL,
  `GENDER` varchar(6) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `COLLEGE` varchar(15) DEFAULT NULL,
  `BRANCH` varchar(10) DEFAULT NULL,
  `SEMESTER` int(11) DEFAULT NULL,
  `HOME` varchar(20) DEFAULT NULL,
  `ENROLLMENT` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INFO`
--

INSERT INTO `INFO` (`NAME`, `EMAIL`, `GENDER`, `DOB`, `COLLEGE`, `BRANCH`, `SEMESTER`, `HOME`, `ENROLLMENT`) VALUES
('AAMIR', 'aamiropti@gmail.com', 'male', '2000-03-16', 'JIIT-62', 'cse', 3, 'BOKARO', 18803005),
('KISHAN', 'rajkishan00020@gmail.com', 'male', '2000-03-16', 'JIIT-62', 'cse', 3, 'PATNA', 18104076),
('KAVI', 'sharma.kavi59@gmail.com', 'female', '1999-09-05', 'JIIT-62', 'cse', 3, 'DELHI', 18803007);

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `ENROLLMENT` bigint(11) NOT NULL,
  `SECURITY_QUES` varchar(10) NOT NULL DEFAULT 'NOT NULL',
  `PASSWORD` varchar(100) NOT NULL,
  `SECURITY_PASS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LOGIN`
--

INSERT INTO `LOGIN` (`ENROLLMENT`, `SECURITY_QUES`, `PASSWORD`, `SECURITY_PASS`) VALUES
(18104076, 'holiday', '$argon2i$v=19$m=1024,t=2,p=2$Qi40S2pGTkdqU0tUVjVNRw$No5b/a3/2khBd/y8GCdj4x7NHluL9Zor7MmBhyNy0Ww', '$argon2i$v=19$m=1024,t=2,p=2$MGp5bVAvd2xEQk9SMGxHMQ$nIx4txaX1mrqYI1GyjjzdnPgS8YYV0YCAj6SNJDD1BU'),
(18803005, 'hospital', '$argon2i$v=19$m=1024,t=2,p=2$VzNaVWw4TElyTUUvQWZUUQ$OYrfdh4ehKfI3+p+iWA0D3++5QG+LD9NAvcTO1QkIHM', '$argon2i$v=19$m=1024,t=2,p=2$bU03b2VyL1FkQ2dCZWJVLg$PjJF6SGumgCsLhSsCRazqO8mgB4tkr7tGYCREqDw1yo'),
(18803007, 'holiday', '$argon2i$v=19$m=1024,t=2,p=2$QWtubHVxc1U2a0ZiVDZqdQ$npQg7V1RiUpgryhodaL5slDROiMfC0ogGC+jU0Utifs', '$argon2i$v=19$m=1024,t=2,p=2$VklIVlZiM3FQdGtZN1FTVw$38JNJp4lDGp0NXEA+IY2R8LYsm0wAFW4K3yhovnP7vg');

-- --------------------------------------------------------

--
-- Table structure for table `MESSAGES`
--

CREATE TABLE `MESSAGES` (
  `SENDER` bigint(20) NOT NULL,
  `RECIEVER` bigint(20) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MESSAGES`
--

INSERT INTO `MESSAGES` (`SENDER`, `RECIEVER`, `TYPE`, `STATUS`) VALUES
(18803005, 18104076, 'home', 0),
(18803007, 18104076, 'home', 0),
(18104076, 18803005, 'home', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `INFO`
--
ALTER TABLE `INFO`
  ADD KEY `ENROLLMENT` (`ENROLLMENT`);

--
-- Indexes for table `LOGIN`
--
ALTER TABLE `LOGIN`
  ADD PRIMARY KEY (`ENROLLMENT`);

--
-- Indexes for table `MESSAGES`
--
ALTER TABLE `MESSAGES`
  ADD KEY `SENDER` (`SENDER`),
  ADD KEY `RECIEVER` (`RECIEVER`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `INFO`
--
ALTER TABLE `INFO`
  ADD CONSTRAINT `INFO_ibfk_1` FOREIGN KEY (`ENROLLMENT`) REFERENCES `LOGIN` (`ENROLLMENT`);

--
-- Constraints for table `MESSAGES`
--
ALTER TABLE `MESSAGES`
  ADD CONSTRAINT `MESSAGES_ibfk_1` FOREIGN KEY (`SENDER`) REFERENCES `LOGIN` (`ENROLLMENT`),
  ADD CONSTRAINT `MESSAGES_ibfk_2` FOREIGN KEY (`RECIEVER`) REFERENCES `LOGIN` (`ENROLLMENT`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
