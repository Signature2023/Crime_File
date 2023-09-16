-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 08:09 AM
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
-- Table structure for table `citizen_reg`
--

CREATE TABLE `citizen_reg` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `hno` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `citizen_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citizen_reg`
--

INSERT INTO `citizen_reg` (`fname`, `lname`, `gender`, `email`, `dob`, `mobile`, `hno`, `pincode`, `state`, `district`, `citizen_id`) VALUES
('eeefv', 'eff', 'on', 'athety@gmail.com', '2023-09-08', '0', '0', '0', 'shg', 'wdjfh', ''),
('eeefv', 'eff', 'on', 'at2hety@gmail.com', '2023-09-12', '0', '0', '0', 'shg', 'ff', ''),
('Abhi', 'shek', 'on', 'abcd@gmail.com', '2023-09-26', '1234567890', '344', '655565', 'ernakulam', 'kerala', '12');

-- --------------------------------------------------------

--
-- Table structure for table `crime_login`
--

CREATE TABLE `crime_login` (
  `email` varchar(20) NOT NULL,
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
('athety@gmail.com', '1234', 1, 1);

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
('ffrr', '0', 'nfnfn', 'on', 'atherty@gmail.com', 'gfgfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crime_login`
--
ALTER TABLE `crime_login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `police_reg`
--
ALTER TABLE `police_reg`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
