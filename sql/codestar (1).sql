-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 07:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bking_id` int(11) NOT NULL,
  `bkng_name` varchar(50) NOT NULL,
  `bkng_area` varchar(50) NOT NULL,
  `bkng_cost` varchar(50) NOT NULL,
  `ls_id` int(11) NOT NULL,
  `land_agent_id` varchar(50) NOT NULL,
  `land_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bking_id`, `bkng_name`, `bkng_area`, `bkng_cost`, `ls_id`, `land_agent_id`, `land_img`) VALUES
(1, 'tanvir', 'mirpur', '67986544', 1, '3', 'user_1686666278_5650073.jpeg'),
(2, 'tanvir', 'mirpur', '67986544', 1, '3', 'user_1686666300_8617800.jpg'),
(3, 'Rakib', 'mirpur', '54564563', 2, '4', 'user_1686666355_3330067.jpeg'),
(4, 'tanvir', 'mirpur', '67986544', 1, 'Select Agent', ''),
(5, 'tanvir', 'mirpur', '67986544', 1, 'Select Agent', ''),
(6, 'Rakib', 'mirpur', '67986544', 1, '3', 'user_1686670859_4596117.jpg'),
(7, 'rtr', 'ryr', 'ryr', 1, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `instalment`
--

CREATE TABLE `instalment` (
  `id` int(11) NOT NULL,
  `loan_no` varchar(50) NOT NULL,
  `loan_catagory` varchar(50) NOT NULL,
  `date_loan` varchar(50) NOT NULL,
  `ls_id` int(11) NOT NULL,
  `land_agent_id` varchar(50) NOT NULL,
  `land_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instalment`
--

INSERT INTO `instalment` (`id`, `loan_no`, `loan_catagory`, `date_loan`, `ls_id`, `land_agent_id`, `land_img`) VALUES
(1, '75764563', 'hfhgdhg', '23-3-2023', 1, '2', 'user_1686669821_2063506.webp'),
(2, '354254247675', 'student loan', '11-3-2023', 1, '4', 'user_1686669893_9953009.webp'),
(3, '354254247675', 'student loan', '11-3-2023', 1, '4', 'user_1686670698_4145040.webp');

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
  `land_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`land_id`, `land_name`, `land_area`, `land_cost`, `land_agent_id`, `ls_id`, `land_img`) VALUES
(5, 'superrr', 'nowparaaaaaaaa', '74', 3, 1, ''),
(6, 'Jamuna11', 'Danmondi-37', '400000000', 2, 2, ''),
(7, 'Jamuna11', 'Danmondi-3', '874444', 4, 2, ''),
(9, 'land', 'Danmondi-37', '400000000', 3, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `land_agent`
--

CREATE TABLE `land_agent` (
  `land_agent_id` int(11) NOT NULL,
  `land_agent_name` varchar(55) NOT NULL,
  `land_agent_location` varchar(55) NOT NULL,
  `land_agent_contact` varchar(55) NOT NULL,
  `agent_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_agent`
--

INSERT INTO `land_agent` (`land_agent_id`, `land_agent_name`, `land_agent_location`, `land_agent_contact`, `agent_img`) VALUES
(2, 'Tanvir', 'danmondi', '01775566772', 'user_1686572349_9775457.jpg'),
(3, 'jahangir', 'jurain', '01987457', 'user_1686572360_8360812.png'),
(4, 'karim', 'gazi', '0177', ''),
(5, 'karim', 'gazi', '0177', 'user_1686574067_2297661.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `land_status`
--

CREATE TABLE `land_status` (
  `ls_id` int(11) NOT NULL,
  `is_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_status`
--

INSERT INTO `land_status` (`ls_id`, `is_name`) VALUES
(1, 'Avaiable'),
(2, 'Not Avaiable');

-- --------------------------------------------------------

--
-- Table structure for table `metarial`
--

CREATE TABLE `metarial` (
  `metarial_id` int(101) NOT NULL,
  `metarial_name` varchar(100) NOT NULL,
  `metarial_listing` varchar(100) NOT NULL,
  `metarial_price` varchar(100) NOT NULL,
  `metarial_agent_id` int(50) NOT NULL,
  `metarial_img` varchar(100) NOT NULL,
  `ls_id` int(11) NOT NULL,
  `land_agent_id` int(11) NOT NULL,
  `land_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metarial`
--

INSERT INTO `metarial` (`metarial_id`, `metarial_name`, `metarial_listing`, `metarial_price`, `metarial_agent_id`, `metarial_img`, `ls_id`, `land_agent_id`, `land_img`) VALUES
(6, 'rashida', ' ooooooo', '70000', 0, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(101) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_location` varchar(100) NOT NULL,
  `project_price` varchar(10) NOT NULL,
  `ls_id` int(55) NOT NULL,
  `land_agent_id` int(55) NOT NULL,
  `land_img` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_location`, `project_price`, `ls_id`, `land_agent_id`, `land_img`) VALUES
(2, ' kasful', 'dhanmpondi', '12345678', 0, 0, ''),
(3, 'rojoni', 'dhaka', '345789', 0, 0, ''),
(4, 'bonoful', 'dhanmpondi', '12345678', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(101) NOT NULL,
  `property_name` varchar(100) NOT NULL,
  `property_location` varchar(100) NOT NULL,
  `property_cost` varchar(100) NOT NULL,
  `ls_id` int(50) NOT NULL,
  `land_agent_id` int(100) NOT NULL,
  `land_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `property_location`, `property_cost`, `ls_id`, `land_agent_id`, `land_img`) VALUES
(1, 'kunjolota', ' dhanmondi', '12345678890', 0, 0, ''),
(2, 'ff', ' fff', '33333', 0, 2, ''),
(3, 'Rakib', ' dhaka', '844444', 0, 3, 'user_1686591966_5244339.png'),
(6, 'Rakib', 'bdaa', '844444', 2, 3, 'user_1686594706_3275612.png'),
(7, 'kamsu', ' uttara', '8555555', 1, 2, 'user_1686593268_6408202.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `sup_id` int(101) NOT NULL,
  `sup_name` varchar(100) NOT NULL,
  `sup_contact_no` varchar(100) NOT NULL,
  `sup_email` varchar(100) NOT NULL,
  `tamount` varchar(100) NOT NULL,
  `tpaid` varchar(100) NOT NULL,
  `land_img` varchar(100) NOT NULL,
  `tdue` decimal(10,2) GENERATED ALWAYS AS (`tamount` - `tpaid`) VIRTUAL,
  `submission_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`sup_id`, `sup_name`, `sup_contact_no`, `sup_email`, `tamount`, `tpaid`, `land_img`, `submission_date`) VALUES
(1, 'kamrul', '01775566772', 'cloudysky121@gmail.com', '5000', '500', '', '2023-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bking_id`);

--
-- Indexes for table `instalment`
--
ALTER TABLE `instalment`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `metarial`
--
ALTER TABLE `metarial`
  ADD PRIMARY KEY (`metarial_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `land_agent_id` (`land_agent_id`),
  ADD KEY `ls_id` (`ls_id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instalment`
--
ALTER TABLE `instalment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `land_agent`
--
ALTER TABLE `land_agent`
  MODIFY `land_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `land_status`
--
ALTER TABLE `land_status`
  MODIFY `ls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `metarial`
--
ALTER TABLE `metarial`
  MODIFY `metarial_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `sup_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `land`
--
ALTER TABLE `land`
  ADD CONSTRAINT `land_ibfk_1` FOREIGN KEY (`ls_id`) REFERENCES `land_status` (`ls_id`),
  ADD CONSTRAINT `land_ibfk_2` FOREIGN KEY (`land_agent_id`) REFERENCES `land_agent` (`land_agent_id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`land_agent_id`) REFERENCES `land_agent` (`land_agent_id`),
  ADD CONSTRAINT `property_ibfk_2` FOREIGN KEY (`ls_id`) REFERENCES `land_status` (`ls_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
