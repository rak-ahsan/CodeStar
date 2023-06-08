-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 09:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codestar`
--

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `land_id` int(11) NOT NULL,
  `land_name` varchar(55) NOT NULL,
  `land_area` varchar(55) NOT NULL,
  `land_cost` decimal(10,0) NOT NULL,
  `land_agent_id` int(55) NOT NULL,
  `ls_id` int(11) NOT NULL,
  `land_img` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`land_id`, `land_name`, `land_area`, `land_cost`, `land_agent_id`, `ls_id`, `land_img`) VALUES
(7, 'KMC', 'gazipur', '880000', 13, 1, 'user_1686207710_3070174.webp');

-- --------------------------------------------------------

--
-- Table structure for table `land_agent`
--

CREATE TABLE `land_agent` (
  `land_agent_id` int(11) NOT NULL,
  `land_agent_name` varchar(55) NOT NULL,
  `land_agent_location` varchar(55) NOT NULL,
  `land_agent_contact` varchar(55) NOT NULL,
  `agent_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `land_agent`
--

INSERT INTO `land_agent` (`land_agent_id`, `land_agent_name`, `land_agent_location`, `land_agent_contact`, `agent_img`) VALUES
(11, 'bisty', 'jurain', '0198564777', 'user_1686207583_2094644.jpg'),
(12, 'Shuly', 'Sayedabad', '01778899554', 'user_1686207614_8144640.jpg'),
(13, 'tanvir', 'mirpur', '01775566771', 'user_1686207641_5586506.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `land_status`
--

CREATE TABLE `land_status` (
  `ls_id` int(11) NOT NULL,
  `is_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `land_status`
--

INSERT INTO `land_status` (`ls_id`, `is_name`) VALUES
(1, 'Avaiable'),
(2, 'Not Avaiable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`land_id`),
  ADD KEY `ls_id` (`ls_id`),
  ADD KEY `land_agent_id` (`land_agent_id`);

--
-- Indexes for table `land_agent`
--
ALTER TABLE `land_agent`
  ADD PRIMARY KEY (`land_agent_id`);

--
-- Indexes for table `land_status`
--
ALTER TABLE `land_status`
  ADD PRIMARY KEY (`ls_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `land_agent`
--
ALTER TABLE `land_agent`
  MODIFY `land_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `land_status`
--
ALTER TABLE `land_status`
  MODIFY `ls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `land`
--
ALTER TABLE `land`
  ADD CONSTRAINT `land_ibfk_1` FOREIGN KEY (`ls_id`) REFERENCES `land_status` (`ls_id`),
  ADD CONSTRAINT `land_ibfk_2` FOREIGN KEY (`land_agent_id`) REFERENCES `land_agent` (`land_agent_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
