-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 08:45 PM
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
-- Database: `rak`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`) VALUES
(1, 'Gulshan'),
(2, 'Banani'),
(3, 'Dhanmondi'),
(4, 'Uttara'),
(5, 'Mirpur'),
(6, 'Mohammadpur');

-- --------------------------------------------------------

--
-- Stand-in structure for view `avaiablepro`
-- (See below for the actual view)
--
CREATE TABLE `avaiablepro` (
`property_id` int(11)
,`property_name` varchar(255)
,`property_location` varchar(255)
,`property_cost` varchar(255)
,`land_agent_id` int(11)
,`land_img` varchar(255)
,`ls_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bking_id` int(11) NOT NULL,
  `bkng_area` varchar(255) DEFAULT NULL,
  `bkng_cost` varchar(255) DEFAULT NULL,
  `bkng_name` varchar(255) DEFAULT NULL,
  `bt_id` int(11) DEFAULT NULL,
  `Payment` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bking_id`, `bkng_area`, `bkng_cost`, `bkng_name`, `bt_id`, `Payment`, `property_id`) VALUES
(1, 'dhaka', '80000', 'Rico Suarez', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking_type`
--

CREATE TABLE `booking_type` (
  `bt_id` int(11) NOT NULL,
  `btype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_type`
--

INSERT INTO `booking_type` (`bt_id`, `btype`) VALUES
(1, 'Buy'),
(2, 'For Rent');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_contact` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_img` varchar(255) DEFAULT NULL,
  `national_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instalment`
--

CREATE TABLE `instalment` (
  `id` int(11) NOT NULL,
  `date_loan` varchar(255) DEFAULT NULL,
  `loan_no` varchar(255) DEFAULT NULL,
  `loan_category` varchar(255) DEFAULT NULL,
  `ls_id` int(11) DEFAULT NULL,
  `land_agent_id` varchar(255) DEFAULT NULL,
  `land_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `land_id` int(11) NOT NULL,
  `land_name` varchar(255) DEFAULT NULL,
  `land_area` varchar(255) DEFAULT NULL,
  `land_cost` decimal(10,0) DEFAULT NULL,
  `land_agent_id` int(11) DEFAULT NULL,
  `land_img` varchar(255) DEFAULT NULL,
  `ls_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`land_id`, `land_name`, `land_area`, `land_cost`, `land_agent_id`, `land_img`, `ls_id`) VALUES
(1, 'Jamuna7', 'Danmondi-31', '400000000', 0, '', 0),
(2, 'Jamuna7', 'Danmondi-31', '400000000', 0, 'user_1687018382_1576305.png', 0),
(3, 'gewrg', 'egeweewg', '6790', 0, '', 0),
(4, 'gewrg', 'egeweewg', '6790', 0, '', 0),
(5, 'land', 'Danmondi-31', '400000000', 1, 'user_1687023698_372966.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `land_agent`
--

CREATE TABLE `land_agent` (
  `land_agent_id` int(11) NOT NULL,
  `land_agent_name` varchar(255) DEFAULT NULL,
  `land_agent_contact` int(20) DEFAULT NULL,
  `land_agent_location` int(15) DEFAULT NULL,
  `agent_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land_agent`
--

INSERT INTO `land_agent` (`land_agent_id`, `land_agent_name`, `land_agent_contact`, `land_agent_location`, `agent_img`) VALUES
(1, 'karim', 1, 1, 'user_1687023036_2376443.png'),
(6, 'pial', 1758053665, 0, ''),
(8, 'pial', 1775566771, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `land_status`
--

CREATE TABLE `land_status` (
  `ls_id` int(11) NOT NULL,
  `is_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `metarial_id` int(11) NOT NULL,
  `metarial_name` varchar(255) DEFAULT NULL,
  `metarial_price` varchar(255) DEFAULT NULL,
  `mquantity` int(11) DEFAULT NULL,
  `purse_date` date DEFAULT curdate(),
  `sup_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metarial`
--

INSERT INTO `metarial` (`metarial_id`, `metarial_name`, `metarial_price`, `mquantity`, `purse_date`, `sup_id`, `u_id`) VALUES
(5, 'rak', '58000', 520, '2023-06-17', 1, 1),
(6, 'rak', '58000', 520, '2023-06-17', 1, 1),
(7, 'rashida', '50000', 50, '2023-06-17', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `payname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `payname`) VALUES
(1, 'Full Payment'),
(2, 'Installment ');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_location` varchar(255) DEFAULT NULL,
  `project_price` varchar(255) DEFAULT NULL,
  `spened` int(11) DEFAULT NULL,
  `pc_id` int(11) DEFAULT NULL,
  `ps_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_location`, `project_price`, `spened`, `pc_id`, `ps_id`) VALUES
(1, 'lmc', 'Uttara', '48000000', 1000000, 0, 0),
(2, 'lmc', 'Uttara', '48000000', 1000000, 0, 0),
(3, 'uiykh', 'svsf', '82000', 900, 0, 0),
(4, 'lmc', 'Uttara', '48000000', 1000000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `ps_id` int(11) NOT NULL,
  `p_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`ps_id`, `p_status`) VALUES
(1, 'ongoing'),
(2, 'on hold'),
(3, 'complete ');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `property_name` varchar(255) DEFAULT NULL,
  `property_location` varchar(255) DEFAULT NULL,
  `property_cost` varchar(255) DEFAULT NULL,
  `land_agent_id` int(11) DEFAULT NULL,
  `land_img` varchar(255) DEFAULT NULL,
  `ls_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `property_location`, `property_cost`, `land_agent_id`, `land_img`, `ls_id`) VALUES
(1, 'Rakib', ' fff', '33333', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_contactor`
--

CREATE TABLE `p_contactor` (
  `pc_id` int(11) NOT NULL,
  `con_name` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_contactor`
--

INSERT INTO `p_contactor` (`pc_id`, `con_name`, `phone`) VALUES
(1, 'Rakib', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `running_pj`
-- (See below for the actual view)
--
CREATE TABLE `running_pj` (
`project_id` int(11)
,`project_name` varchar(255)
,`project_location` varchar(255)
,`project_price` varchar(255)
,`spened` int(11)
,`pc_id` int(11)
,`ps_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(255) DEFAULT NULL,
  `sup_contact_no` varchar(255) DEFAULT NULL,
  `sup_email` varchar(255) DEFAULT NULL,
  `land_img` varchar(255) DEFAULT NULL,
  `submission_date` date DEFAULT curdate(),
  `tamount` varchar(255) DEFAULT NULL,
  `tdue` decimal(10,0) DEFAULT NULL,
  `tpaid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`sup_id`, `sup_name`, `sup_contact_no`, `sup_email`, `land_img`, `submission_date`, `tamount`, `tdue`, `tpaid`) VALUES
(1, 'kamrul', '01775566772', 'cloudysky121@gmail.com', '', '2023-06-17', '5000', NULL, '957');

-- --------------------------------------------------------

--
-- Table structure for table `unit_om`
--

CREATE TABLE `unit_om` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_om`
--

INSERT INTO `unit_om` (`u_id`, `u_name`) VALUES
(1, 'Kilograms (kg)'),
(2, 'Liters (L)'),
(3, 'Bags '),
(4, 'Feet (ft)');

-- --------------------------------------------------------

--
-- Structure for view `avaiablepro`
--
DROP TABLE IF EXISTS `avaiablepro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `avaiablepro`  AS SELECT `property`.`property_id` AS `property_id`, `property`.`property_name` AS `property_name`, `property`.`property_location` AS `property_location`, `property`.`property_cost` AS `property_cost`, `property`.`land_agent_id` AS `land_agent_id`, `property`.`land_img` AS `land_img`, `property`.`ls_id` AS `ls_id` FROM `property` WHERE `property`.`ls_id` = 11  ;

-- --------------------------------------------------------

--
-- Structure for view `running_pj`
--
DROP TABLE IF EXISTS `running_pj`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `running_pj`  AS SELECT `project`.`project_id` AS `project_id`, `project`.`project_name` AS `project_name`, `project`.`project_location` AS `project_location`, `project`.`project_price` AS `project_price`, `project`.`spened` AS `spened`, `project`.`pc_id` AS `pc_id`, `project`.`ps_id` AS `ps_id` FROM `project` WHERE `project`.`ps_id` = 11  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bking_id`),
  ADD KEY `bt_id` (`bt_id`),
  ADD KEY `Payment` (`Payment`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `booking_type`
--
ALTER TABLE `booking_type`
  ADD PRIMARY KEY (`bt_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

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
  ADD KEY `land_agent_id` (`land_agent_id`),
  ADD KEY `ls_id` (`ls_id`);

--
-- Indexes for table `land_agent`
--
ALTER TABLE `land_agent`
  ADD PRIMARY KEY (`land_agent_id`),
  ADD KEY `land_agent_location` (`land_agent_location`);

--
-- Indexes for table `land_status`
--
ALTER TABLE `land_status`
  ADD PRIMARY KEY (`ls_id`);

--
-- Indexes for table `metarial`
--
ALTER TABLE `metarial`
  ADD PRIMARY KEY (`metarial_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `sup_id` (`sup_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `ps_id` (`ps_id`),
  ADD KEY `pc_id` (`pc_id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `land_agent_id` (`land_agent_id`),
  ADD KEY `ls_id` (`ls_id`);

--
-- Indexes for table `p_contactor`
--
ALTER TABLE `p_contactor`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `unit_om`
--
ALTER TABLE `unit_om`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_type`
--
ALTER TABLE `booking_type`
  MODIFY `bt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instalment`
--
ALTER TABLE `instalment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `land_agent`
--
ALTER TABLE `land_agent`
  MODIFY `land_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `land_status`
--
ALTER TABLE `land_status`
  MODIFY `ls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metarial`
--
ALTER TABLE `metarial`
  MODIFY `metarial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_contactor`
--
ALTER TABLE `p_contactor`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unit_om`
--
ALTER TABLE `unit_om`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`bt_id`) REFERENCES `booking_type` (`bt_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`Payment`) REFERENCES `payment` (`pay_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);

--
-- Constraints for table `land`
--
ALTER TABLE `land`
  ADD CONSTRAINT `land_ibfk_2` FOREIGN KEY (`ls_id`) REFERENCES `land_status` (`ls_id`);

--
-- Constraints for table `land_agent`
--
ALTER TABLE `land_agent`
  ADD CONSTRAINT `land_agent_ibfk_1` FOREIGN KEY (`land_agent_location`) REFERENCES `area` (`area_id`);

--
-- Constraints for table `metarial`
--
ALTER TABLE `metarial`
  ADD CONSTRAINT `metarial_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `unit_om` (`u_id`),
  ADD CONSTRAINT `metarial_ibfk_3` FOREIGN KEY (`sup_id`) REFERENCES `suplier` (`sup_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`ps_id`) REFERENCES `project_status` (`ps_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`pc_id`) REFERENCES `p_contactor` (`pc_id`);

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
