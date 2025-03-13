-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 08:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(35) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` int(7) NOT NULL,
  `contact` bigint(13) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `street`, `city`, `state`, `country`, `zip`, `contact`, `create_date`, `ip`) VALUES
(19, 'b/5 ramji nagar, katargam', 'Surat', 'Gujarat', 'India', 787878, 9859855985, '2023-03-01 09:40:42', '::1'),
(20, '90, green park township, jakatnaka', 'Anand', 'Gujarat', 'India', 324569, 7458755222, '2023-03-12 12:10:44', '::1'),
(21, '65,silver residency, dandi road', 'baroda', 'Gujarat', 'India', 214569, 9638527412, '2023-03-12 12:11:56', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `id` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `semail` varchar(25) NOT NULL,
  `saddress` varchar(70) NOT NULL,
  `scontact` bigint(11) NOT NULL,
  `rname` varchar(20) NOT NULL,
  `remail` varchar(25) NOT NULL,
  `raddress` varchar(70) NOT NULL,
  `rcontact` bigint(11) NOT NULL,
  `pnumber` bigint(11) NOT NULL,
  `pheight` int(3) NOT NULL,
  `pweight` int(3) NOT NULL,
  `pwidth` int(3) NOT NULL,
  `plength` int(3) NOT NULL,
  `pprice` int(5) NOT NULL,
  `dp` int(1) NOT NULL,
  `dbranchid` int(2) NOT NULL,
  `pbranchid` int(2) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`id`, `sname`, `semail`, `saddress`, `scontact`, `rname`, `remail`, `raddress`, `rcontact`, `pnumber`, `pheight`, `pweight`, `pwidth`, `plength`, `pprice`, `dp`, `dbranchid`, `pbranchid`, `status`, `date`) VALUES
(5, 'sunny', 'lyxesezic@mailinator.com', 'xumigevic@mailinator.com', 9193544455, 'bezinec@mailinator.c', 'xemu@mailinator.com', 'wovo@mailinator.com', 7287622536, 1669906273, 266, 254, 110, 429, 615, 2, 20, 19, 5, '2023-03-12 13:32:21'),
(6, 'hamix@mailinator.com', 'vohuponuly@mailinator.com', 'puciq@mailinator.com', 6805844996, 'kokijeby@mailinator.', 'secavyc@mailinator.com', 'wemuvep@mailinator.com', 2158698775, 843168809, 401, 658, 553, 124, 433, 1, 20, 19, 5, '2023-03-12 13:39:32'),
(7, 'zeduroqe@mailinator.', 'risi@mailinator.com', 'ciwokyr@mailinator.com', 4211825506, 'myculus@mailinator.c', 'hygocobuk@mailinator.com', 'pukinoros@mailinator.com', 3461567616, 1590338520, 4, 1000, 693, 787, 457, 1, 19, 0, 3, '2023-03-20 12:51:16'),
(8, 'rijohex@mailinator.c', 'puqym@mailinator.com', 'mewasuto@mailinator.com', 7451884712, 'qidi@mailinator.com', 'zanyvicur@mailinator.com', 'nafezivyja@mailinator.com', 2418461185, 1875078230, 734, 817, 340, 340, 594, 1, 21, 19, 1, '2023-03-20 12:51:41'),
(9, 'faxoliriga@mailinato', 'qulywiv@mailinator.com', 'kapi@mailinator.com', 3263769682, 'jaheduvezu@mailinato', 'cuvozi@mailinator.com', 'gajimy@mailinator.com', 8337439285, 1229073018, 812, 151, 844, 867, 333, 2, 21, 19, 2, '2023-03-20 12:58:45'),
(10, 'magan', 'mymiqybadu@mailinator.com', 'pavad@mailinator.com', 3827855461, 'duquqonin@mailinator', 'jonifiwivi@mailinator.com', 'pire@mailinator.com', 4852080944, 937950347, 797, 701, 414, 543, 382, 2, 21, 21, 1, '2023-03-26 11:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(3) NOT NULL,
  `branchid` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `contact`, `email`, `password`, `role`, `branchid`, `ip`, `status`) VALUES
(21, 'dhruvit gadhiya', 6564646667, '20bca002@charusat.edu.in', '123', 1, 21, '::1', 1),
(22, 'manav patel', 6325632566, 'manav@gmail.com', '123', 2, 20, '::1', 1),
(23, 'dhruvit gadhiya', 7458745874, 'dhruvitgadhiya77@gmail.com', '123', 1, 21, '::1', 1),
(26, 'ramesh patel', 6547896654, 'ramesh@outlook.com', '123', 2, 20, '::1', 1),
(28, 'Kieran', 4203412705, 'vyzatady@mailinator.com', '123', 1, 20, '::1', 1),
(29, 'meet monapara', 6547896547, 'meet@gmail.con', '123', 1, 19, '::1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zip` (`zip`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branchid` (`branchid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
