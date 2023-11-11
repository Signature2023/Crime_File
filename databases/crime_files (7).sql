-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 11:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_files`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_reports`
--

CREATE TABLE `accident_reports` (
  `location` varchar(50) NOT NULL,
  `descr` varchar(150) NOT NULL,
  `acc_status` int(10) NOT NULL,
  `CID` int(11) NOT NULL,
  `sdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accident_reports`
--

INSERT INTO `accident_reports` (`location`, `descr`, `acc_status`, `CID`, `sdate`, `email`) VALUES
('Kochi', 'frvfvf', 2, 1, '2023-10-07 05:47:31', ''),
('Kochi', 'frvfvf', 2, 5, '2023-10-07 06:02:08', '');

-- --------------------------------------------------------

--
-- Table structure for table `anonymous_reports`
--

CREATE TABLE `anonymous_reports` (
  `title` varchar(25) NOT NULL,
  `location` varchar(50) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `acc_status` int(10) NOT NULL,
  `AID` int(50) NOT NULL,
  `adate` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anonymous_reports`
--

INSERT INTO `anonymous_reports` (`title`, `location`, `descr`, `acc_status`, `AID`, `adate`, `email`) VALUES
('fefeff', 'eewww', 'sddwwdwdddw', 2, 2, '2023-10-28 17:15:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_reg`
--

CREATE TABLE `citizen_reg` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `aadhaar_card` varchar(50) NOT NULL,
  `hno` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `citizen_id` varchar(50) NOT NULL,
  `security` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citizen_reg`
--

INSERT INTO `citizen_reg` (`fname`, `lname`, `gender`, `email`, `dob`, `mobile`, `aadhaar_card`, `hno`, `pincode`, `state`, `district`, `citizen_id`, `security`, `ans`) VALUES
('Abhi', 'shek', 'Male', 'abcd@gmail.com', '2023-09-26', '1234567890', '', '344', '655565', 'ernakulam', 'kerala', '12', '', ''),
('abhishek', 'vishnu', 'Male', 'abhishek@gmail.com', '2000-08-17', '9887383222', '984373834289', '34', '675645', 'kerala', 'ernakulam', '90', 'what was the name of your pet?', 'sugu'),
('eeefv', 'eff', 'Male', 'at2hety@gmail.com', '2023-09-12', '0', '', '0', '0', 'shg', 'ff', '', '', ''),
('eeefv', 'eff', 'Female', 'athety@gmail.com', '2023-09-08', '0', '', '0', '0', 'shg', 'wdjfh', '', '', ''),
('shone', 'shaji', 'Male', 'shone@gmail.com', '2001-09-18', '8765897467', '85747474848', '65', '98', 'kerala', 'ernakulam', '90', '', ''),
('shone', 'shaji', 'Male', 'shoneshaji1@gmail.com', '2001-09-18', '8765897467', '85747474848', '65', '98', 'kerala', 'ernakulam', '90', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `crime_login`
--

CREATE TABLE `crime_login` (
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `statusflag` tinyint(4) NOT NULL,
  `security_que` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'photo1.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crime_login`
--

INSERT INTO `crime_login` (`email`, `password`, `user_type`, `statusflag`, `security_que`, `ans`, `image`) VALUES
('abcd@gmail.com', '11', 1, 1, '', '', 'photo1.jpeg'),
('abhishek2@gmail.com', '12', 2, 1, 'What is your favorite movie?', 'kgf', 'photo4.jpg'),
('abhishek@gmail.com', '10', 1, 1, 'what was the name of your pet?', 'sugu', 'photo8.jpg'),
('at2hety@gmail.com', '12', 1, 1, '', '', 'photo1.jpeg'),
('atherty@gmail.com', '', 2, 1, '', '', 'photo1.jpeg'),
('athety2@gmail.com', '12', 0, 1, '', '', 'photo1.jpeg'),
('athety@gmail.com', '1234', 1, 1, '', '', 'photo1.jpeg'),
('shone@gmail.com', '10', 1, 1, '', '', 'photo1.jpeg'),
('shoneshaji1809@gmail', '', 2, 1, '', '', 'photo1.jpeg'),
('shoneshaji1891@gmail', '', 2, 1, '', '', 'photo1.jpeg'),
('shoneshaji@gmail.com', '123', 2, 1, '', '', 'photo1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `lost_found`
--

CREATE TABLE `lost_found` (
  `name` varchar(100) NOT NULL,
  `ldate` varchar(50) NOT NULL,
  `categ` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `lid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lost_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lost_found`
--

INSERT INTO `lost_found` (`name`, `ldate`, `categ`, `photo`, `descr`, `lid`, `email`, `lost_status`) VALUES
('ghhhj', '2023-10-19', 'hbhbjh', 'call-o.png', 'vgvggvhghg', 1, 'athety2@gmail.com', 2),
('hhhjnj', '2023-10-27', 'ggygy', 'client.jpg', 'hhhugytfrrytfguyguy', 2, 'abhishek@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `event_name` varchar(50) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `edate` datetime NOT NULL DEFAULT current_timestamp(),
  `descr` varchar(200) NOT NULL,
  `eve_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`event_name`, `event_type`, `location`, `edate`, `descr`, `eve_status`) VALUES
(' political', 'shooting', 'Kochi', '2023-11-05 11:18:04', 'gkeufel', '0'),
(' political', 'others', 'ms', '2023-11-05 11:38:00', 'sj', '2'),
(' yybihjhb', 'political', 'Kochi', '2023-11-05 11:50:24', 'ufhfienjckcje', '1'),
(' shhuhhuuh', 'criminal', 'eewww', '2023-11-05 11:51:06', 'bbcbcbcbcbc', '0');

-- --------------------------------------------------------

--
-- Table structure for table `police_reg`
--

CREATE TABLE `police_reg` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `hn` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `station_name` varchar(50) NOT NULL,
  `pid` int(30) NOT NULL,
  `security` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `police_reg`
--

INSERT INTO `police_reg` (`fname`, `lname`, `gender`, `email`, `dob`, `mobile_no`, `hn`, `pincode`, `state`, `district`, `city`, `experience`, `designation`, `station_name`, `pid`, `security`, `ans`) VALUES
('abhishek', 'vishnu', 'Male', 'abhishek1@gmail.com', '2023-11-09', '8537357378', '54', '954833', 'kerala', 'ernakulam', 'kochi', '1', 'si', 'piravom', 78, 'What was your favorite favorite food as a child?', 'biriyani'),
('Shone', 'shaji', 'Male', 'athety2@gmail.com', '2023-09-17', '9984788886', '6', '674845', 'Kerala', 'Ernakulam', 'Piravom', '5', 'rgerge', 'eger', 13, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `aadhaar` varchar(50) NOT NULL,
  `hno` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `veri_status` int(10) NOT NULL,
  `vid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`fname`, `lname`, `gender`, `dob`, `mobile_no`, `aadhaar`, `hno`, `pincode`, `state`, `district`, `veri_status`, `vid`) VALUES
('abhishek', 'vishnu', 'Male', '2023-11-09', '5443345666', '55665', '555', '776677', 'kerala', 'ernakulam', 2, 1),
('abhishek', 'vishnu', 'Male', '2023-11-09', '5443345666', '55665', '555', '776677', 'kerala', 'ernakulam', 0, 2),
('shone', 'shaji', 'Male', '2023-11-22', '6646464664', '4433', '3333', '334433', 'kerala', 'ernakulam', 2, 3),
('shone', 'shaji', 'Male', '2023-11-22', '6646464664', '4433', '3333', '334433', 'kerala', 'ernakulam', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ward_reg`
--

CREATE TABLE `ward_reg` (
  `fname` varchar(30) NOT NULL,
  `ward_no` varchar(30) NOT NULL,
  `ward_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `security` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ward_reg`
--

INSERT INTO `ward_reg` (`fname`, `ward_no`, `ward_name`, `gender`, `email`, `place`, `security`, `ans`) VALUES
('abhishek', '23', 'piravom', 'Male', 'abhishek2@gmail.com', 'piravom', 'What is your favorite movie?', 'kgf'),
('ffrr', '0', 'nfnfn', 'on', 'atherty@gmail.com', 'gfgfg', '', ''),
('Shone', '', 'Piravom', 'on', 'shoneshaji1809@gmail.com', 'Piravom', '', ''),
('Shone', '333', 'hbhjb', 'Male', 'shoneshaji@gmail.com', 'bby', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_reports`
--
ALTER TABLE `accident_reports`
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `anonymous_reports`
--
ALTER TABLE `anonymous_reports`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `citizen_reg`
--
ALTER TABLE `citizen_reg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `crime_login`
--
ALTER TABLE `crime_login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `lost_found`
--
ALTER TABLE `lost_found`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `police_reg`
--
ALTER TABLE `police_reg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `ward_reg`
--
ALTER TABLE `ward_reg`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident_reports`
--
ALTER TABLE `accident_reports`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `anonymous_reports`
--
ALTER TABLE `anonymous_reports`
  MODIFY `AID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lost_found`
--
ALTER TABLE `lost_found`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `vid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
