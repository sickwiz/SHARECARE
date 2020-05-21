
CREATE DATABASE IF NOT EXISTS `SHARECARE` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `SHARECARE`;

-- --------------------------------------------------------

--
-- Table structure for table `FORGOT`
--

CREATE TABLE `FORGOT` (
  `COUNTER` int(11) NOT NULL,
  `ENROLLMENT` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FORGOT`
--

INSERT INTO `FORGOT` (`COUNTER`, `ENROLLMENT`) VALUES
(1, 18803019);

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
  `ENROLLMENT` bigint(11) NOT NULL,
  `MOBILE` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INFO`
--

INSERT INTO `INFO` (`NAME`, `EMAIL`, `GENDER`, `DOB`, `COLLEGE`, `BRANCH`, `SEMESTER`, `HOME`, `ENROLLMENT`, `MOBILE`) VALUES
('AHMAD', 'JHASJH@c.com', 'male', '2000-03-16', 'JIIT-62', 'cse', 3, 'BOKARO', 18803005, 1234567890),
('KISHAN', 'rajkishan00020@gmail.com', 'male', '2000-03-16', 'JIIT-62', 'cse', 3, 'PATNA', 18104076, 1234567890),
('KAVI', 'sharma.kavi59@gmail.com', 'female', '1999-09-05', 'JIIT-62', 'cse', 3, 'DELHI', 18803007, 1234567890),
('MARK', 'tmkg6247@gmail.com', 'male', '2019-11-13', 'JIIT-62', 'cse', 3, 'BOKARO', 18803003, 1234567890),
('VATSAL', 'brijbhu@gmail.com', 'male', '2019-11-29', 'JIIT-62', 'cse', 3, 'PATNA', 18102182, 1234567890),
('DHEERAJ', 'dheeraj@gmail.com', 'male', '2019-11-13', 'JIIT-62', 'cse', 3, 'BOKARO', 18103099, 1234567890),
('BHARAT', 'bharat@gmail.com', 'male', '2019-11-21', 'JIIT-62', 'cse', 3, 'DELHI', 18803028, 1234567890),
('VIBHAV', 'vibhav@gmail.com', 'male', '2000-11-21', 'JIIT-62', 'cse', 3, 'GWALIOR', 18103019, 9876547809),
('aniket', 'ankit@gmail.com', 'male', '2000-11-14', 'JIIT-62', 'cse', 3, 'DELHI', 18803002, 1234567890),
('sneha', 'sn@gmail.com', 'female', '2000-11-21', 'JIIT-62', 'cse', 3, 'DELHI', 18103009, 987654321),
('TOMAR', 'tomar@gmail.com', 'male', '2019-10-30', 'JIIT-62', 'cse', 3, 'DELHI', 18803019, 7263548901);

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
(18102182, 'holiday', '$argon2i$v=19$m=65536,t=4,p=1$a05PNTVKcU42WmhXTFZjOA$9Oy4snHUSXzSJ+67WmzmsZfvW5XfXclkcVyvCdqo6ws', '$argon2i$v=19$m=65536,t=4,p=1$MFE4cDFYYlo3emEvRGhFQg$zhpaGthMjJTOyQDjy01Z360fHrU9XOhQKQKNxE7WLSc'),
(18103009, 'holiday', '$argon2i$v=19$m=65536,t=4,p=1$NGxLbXF1Y3ZQaEVINTdKWg$sIBcXpzD0XHKAnfswbhHbk3zu6LurGqlfZsJvhepzls', '$argon2i$v=19$m=65536,t=4,p=1$U1lTamJ6SmJIaG5QbFJGTw$4ArlCuX4+doBn1UtoCKFJkIrOaTUOc6CANSPJiQF5ww'),
(18103019, 'holiday', '$argon2i$v=19$m=65536,t=4,p=1$bzJGWDZqVmFhbEozTXRnaQ$N2Ha+t2DhaATW8QPoui2bRapCJ+zdJpDGcAhF3+EgOo', '$argon2i$v=19$m=65536,t=4,p=1$Wm1qZWt4NHJGeXN3OVZMRA$1nA+lnME9o5v+UI3hkweBtCa1PTszg4wNZLw9DxEywI'),
(18103099, 'holiday', '$argon2i$v=19$m=65536,t=4,p=1$SGN0bTdsQlBsbDNXRzdHTQ$WDF0q+oMvj+IKVO71nuhS4cgT0yms4DgH/5Zd03hvHM', '$argon2i$v=19$m=65536,t=4,p=1$Q0YuUUZKSHNlSENmamVXTQ$uyD7CWWW2vedYVhu4a6ENJkIQIk4Sv/PwpZQ5u9jYDk'),
(18104076, 'holiday', '$argon2i$v=19$m=1024,t=2,p=2$Qi40S2pGTkdqU0tUVjVNRw$No5b/a3/2khBd/y8GCdj4x7NHluL9Zor7MmBhyNy0Ww', '$argon2i$v=19$m=1024,t=2,p=2$MGp5bVAvd2xEQk9SMGxHMQ$nIx4txaX1mrqYI1GyjjzdnPgS8YYV0YCAj6SNJDD1BU'),
(18803002, 'holiday', '$argon2i$v=19$m=65536,t=4,p=1$cHpZWWJWM2sxRGtXcE4yYg$nIx7O7XlhgVIA0GqF2H5wHbVpS+6eAhf5rCGXCDht74', '$argon2i$v=19$m=65536,t=4,p=1$dXludnk5aEtRdi9jZC45Ug$/D8jqh0RfcAh9j4qCWK4XZXuUH1SqRCROQZcwFiULS8'),
(18803003, 'holiday', '$argon2i$v=19$m=65536,t=4,p=1$VDlwWHI2SkdBc09IUEFYRw$h3Od0xvrY1QUHXG9LZGm7czc2TudtlGXa9ufmSPzwBg', '$argon2i$v=19$m=65536,t=4,p=1$WlRFcjNNNFlLaUlOLlkxeg$RMEH6v4PGOJ+s/iFEO1sm5vuhY7NAEo/t8jvkrjXXLY'),
(18803005, 'hospital', '$argon2i$v=19$m=1024,t=2,p=2$VzNaVWw4TElyTUUvQWZUUQ$OYrfdh4ehKfI3+p+iWA0D3++5QG+LD9NAvcTO1QkIHM', '$argon2i$v=19$m=1024,t=2,p=2$bU03b2VyL1FkQ2dCZWJVLg$PjJF6SGumgCsLhSsCRazqO8mgB4tkr7tGYCREqDw1yo'),
(18803007, 'holiday', '$argon2i$v=19$m=1024,t=2,p=2$QWtubHVxc1U2a0ZiVDZqdQ$npQg7V1RiUpgryhodaL5slDROiMfC0ogGC+jU0Utifs', '$argon2i$v=19$m=1024,t=2,p=2$VklIVlZiM3FQdGtZN1FTVw$38JNJp4lDGp0NXEA+IY2R8LYsm0wAFW4K3yhovnP7vg'),
(18803019, 'holiday', '$argon2i$v=19$m=65536,t=4,p=1$bTVkWGJlSmxnODVNelBMTQ$ChJVW/qoEpO7cc+VpS3Py3pMD/G5oCh/TUm5fy6LuqA', '$argon2i$v=19$m=65536,t=4,p=1$cmZvdmlSd1U4YmpDNEpXMw$fWhy06aHHx70y6jHiC0bZFs2/dn8bu27UnFLrHnayB0'),
(18803028, 'holiday', '$argon2i$v=19$m=65536,t=4,p=1$R0JjQkpJYlFncjFoUXl6dg$+001zfYn/5yLuBEkkuLSRIv6UCZeDCTpZ6h7OY923Ps', '$argon2i$v=19$m=65536,t=4,p=1$SGRhTkJqU1pPbWl2TW1QSQ$Hx7dipcZhVVRzzYafBcLchU2Rdo9uTnKJvH5uVDMcMU');

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
(18803005, 18803003, 'home', 1),
(18103099, 18803005, 'home', 1),
(18102182, 18104076, 'home', 0),
(18102182, 18803005, 'REDFORT', 1),
(18102182, 18103099, 'REDFORT', 0),
(18803028, 18103009, 'home', 0),
(18803028, 18803005, 'CP', 0),
(18803003, 18103099, 'home', 0),
(18803007, 18803002, 'home', 0),
(18803007, 18803005, 'SHIPRA', 1),
(18803005, 18103099, 'REDFORT', 1),
(18803005, 18803003, 'CP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `TRAVEL`
--

CREATE TABLE `TRAVEL` (
  `ENROLLMENT` bigint(11) NOT NULL,
  `DESTINATION` varchar(100) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TRAVEL`
--

INSERT INTO `TRAVEL` (`ENROLLMENT`, `DESTINATION`, `DATE`) VALUES
(18803005, 'CP', '2019-12-01'),
(18803005, 'REDFORT', '2019-12-20'),
(18803005, 'INDIRAPURAM', '2019-12-04'),
(18103099, 'SHIPRA', '2019-11-30'),
(18103099, 'REDFORT', '2019-12-02'),
(18803003, 'REDFORT', '2019-12-01'),
(18803003, 'CP', '2019-12-02'),
(18102182, 'REDFORT', '2019-11-30'),
(18803028, 'CP', '2019-11-30'),
(18803007, 'SHIPRA', '2019-12-03'),
(18803005, 'SAROJINI', '2019-12-07');

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
-- Indexes for table `TRAVEL`
--
ALTER TABLE `TRAVEL`
  ADD KEY `ENROLLMENT` (`ENROLLMENT`);

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

--
-- Constraints for table `TRAVEL`
--
ALTER TABLE `TRAVEL`
  ADD CONSTRAINT `TRAVEL_ibfk_1` FOREIGN KEY (`ENROLLMENT`) REFERENCES `LOGIN` (`ENROLLMENT`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `total_loan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bname`, `city`, `total_loan`) VALUES
('BOM', 'NASIK', 2300),
('ICICI', 'LUCKNOW', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cname` varchar(30) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cname`, `bname`, `balance`) VALUES
('AAMIR', 'BOM', 123),
('RAHUL', 'BOM', 1234),
('MARK', 'ICICI', 24000);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan-number` int(11) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `amount` float NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan-number`, `bname`, `amount`, `cname`) VALUES
(1, 'BOM', 100, 'AAMIR'),
(2, 'BOM', 200, 'RAHUL'),
(3, 'BOM', 2000, 'RAHUL'),
(4, 'ICICI', 5000, 'MARK');

--
-- Triggers `loan`
--
DELIMITER $$
CREATE TRIGGER `TOTAL_LOAN` AFTER INSERT ON `loan` FOR EACH ROW BEGIN
DECLARE SUMS FLOAT;
DECLARE NAME VARCHAR(30);
DECLARE FLAG BOOLEAN;
DECLARE CUR CURSOR FOR SELECT SUM(amount),bname FROM loan GROUP BY bname;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET FLAG=TRUE;
OPEN CUR;
REPEAT
FETCH CUR INTO SUMS,NAME;
UPDATE bank SET total_loan=SUMS WHERE bname=NAME;
UNTIL FLAG
END REPEAT;
CLOSE CUR;
END
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
