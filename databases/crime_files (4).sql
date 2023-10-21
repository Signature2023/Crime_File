-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 02:21 PM
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
  `citizen_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citizen_reg`
--

INSERT INTO `citizen_reg` (`fname`, `lname`, `gender`, `email`, `dob`, `mobile`, `aadhaar_card`, `hno`, `pincode`, `state`, `district`, `citizen_id`) VALUES
('Abhi', 'shek', 'Male', 'abcd@gmail.com', '2023-09-26', '1234567890', '', '344', '655565', 'ernakulam', 'kerala', '12'),
('eeefv', 'eff', 'Male', 'at2hety@gmail.com', '2023-09-12', '0', '', '0', '0', 'shg', 'ff', ''),
('eeefv', 'eff', 'Female', 'athety@gmail.com', '2023-09-08', '0', '', '0', '0', 'shg', 'wdjfh', ''),
('shone', 'shaji', 'Male', 'shone@gmail.com', '2001-09-18', '8765897467', '85747474848', '65', '98', 'kerala', 'ernakulam', '90'),
('shone', 'shaji', 'Male', 'shoneshaji1@gmail.com', '2001-09-18', '8765897467', '85747474848', '65', '98', 'kerala', 'ernakulam', '90');

-- --------------------------------------------------------

--
-- Table structure for table `crime_login`
--

CREATE TABLE `crime_login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `statusflag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crime_login`
--

INSERT INTO `crime_login` (`email`, `password`, `user_type`, `statusflag`) VALUES
('abcd@gmail.com', '11', 1, 1),
('at2hety@gmail.com', '12', 1, 1),
('atherty@gmail.com', '', 2, 1),
('athety2@gmail.com', '76', 0, 1),
('athety@gmail.com', '1234', 1, 1),
('shone@gmail.com', '10', 1, 1),
('shoneshaji1809@gmail', '', 2, 1),
('shoneshaji1891@gmail', '', 2, 1),
('shoneshaji@gmail.com', '123', 2, 1);

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
('ghhhj', '2023-10-19', 'hbhbjh', 'call-o.png', 'vgvggvhghg', 1, 'athety2@gmail.com', 2);

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
  `pid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `police_reg`
--

INSERT INTO `police_reg` (`fname`, `lname`, `gender`, `email`, `dob`, `mobile_no`, `hn`, `pincode`, `state`, `district`, `city`, `experience`, `designation`, `station_name`, `pid`) VALUES
('Shone', 'shaji', 'Male', 'athety2@gmail.com', '2023-09-17', '9984788886', '6', '674845', 'Kerala', 'Ernakulam', 'Piravom', '5', 'rgerge', 'eger', 13);

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
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ward_reg`
--

INSERT INTO `ward_reg` (`fname`, `ward_no`, `ward_name`, `gender`, `email`, `place`) VALUES
('ffrr', '0', 'nfnfn', 'on', 'atherty@gmail.com', 'gfgfg'),
('Shone', '', 'Piravom', 'on', 'shoneshaji1809@gmail.com', 'Piravom'),
('Shone', '333', 'hbhjb', 'Male', 'shoneshaji@gmail.com', 'bby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_reports`
--
ALTER TABLE `accident_reports`
  ADD KEY `CID` (`CID`);

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
-- AUTO_INCREMENT for table `lost_found`
--
ALTER TABLE `lost_found`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
