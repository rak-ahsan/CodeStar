-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 07:09 PM
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
-- Stand-in structure for view `availablepro`
-- (See below for the actual view)
--
CREATE TABLE `availablepro` (
`property_id` int(11)
,`property_name` varchar(255)
,`property_location` int(255)
,`property_cost` varchar(255)
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
(1, 'dhaka', '80000', 'Rico Suarez', 2, 1, 1),
(2, 'dhaka', '80000', 'Rico Suarez', 2, 2, 1),
(3, 'barisal', '90000', 'jahangir', 1, 1, 6);

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
-- Stand-in structure for view `dev`
-- (See below for the actual view)
--
CREATE TABLE `dev` (
`land_agent_name` varchar(255)
,`project_name` varchar(255)
,`project_price` varchar(255)
,`spened` int(11)
,`land_agent_contact` int(20)
,`ps_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dev_view`
-- (See below for the actual view)
--
CREATE TABLE `dev_view` (
`land_agent_name` varchar(255)
,`project_name` varchar(255)
,`project_price` varchar(255)
,`ps_id` int(11)
,`spened` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `instalment`
--

CREATE TABLE `instalment` (
  `instal_id` int(11) NOT NULL,
  `appname` varchar(100) NOT NULL,
  `downp` int(11) NOT NULL,
  `ins_per` int(11) NOT NULL,
  `agent` int(11) NOT NULL,
  `from_pic` varchar(50) NOT NULL,
  `apply_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instalment`
--

INSERT INTO `instalment` (`instal_id`, `appname`, `downp`, `ins_per`, `agent`, `from_pic`, `apply_date`) VALUES
(8, 'pial', 100, 1, 1, 'user_1687189623_2643987.png', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `ins_type`
--

CREATE TABLE `ins_type` (
  `ins_id` int(11) NOT NULL,
  `ins_name` varchar(100) NOT NULL,
  `ins_rate` float NOT NULL,
  `ins_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ins_type`
--

INSERT INTO `ins_type` (`ins_id`, `ins_name`, `ins_rate`, `ins_month`) VALUES
(1, '15% For Monthly(12)', 0.15, 12),
(2, '10% For Monthly(6)', 0.1, 6),
(3, '8% For Monthly(3)', 0.08, 3);

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
  `ls_id` int(11) DEFAULT NULL,
  `lme` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`land_id`, `land_name`, `land_area`, `land_cost`, `land_agent_id`, `land_img`, `ls_id`, `lme`) VALUES
(1, 'Jamuna7', 'Danmondi-31', '400000000', 0, '', 0, ''),
(2, 'Jamuna7', 'Danmondi-31', '400000000', 0, 'user_1687018382_1576305.png', 0, ''),
(3, 'gewrg', 'egeweewg', '6790', 0, '', 0, ''),
(4, 'gewrg', 'egeweewg', '6790', 0, '', 0, ''),
(5, 'land', 'Danmondi-31', '400000000', 1, 'user_1687023698_372966.png', 1, ''),
(6, 'Jamuna7', 'Danmondi-31', '400000000', 8, 'user_1687082987_5383995.png', 1, ''),
(7, 'super', 'Danmondi-37', '7444444', 6, 'user_1687083179_8800258.png', 1, '5.5 acor');

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
(1, 'karim', 1985427416, 1, 'user_1687023036_2376443.png'),
(6, 'pial', 1758053665, 0, ''),
(8, 'pial', 1775566771, 2, ''),
(9, 'Bisty', 1745634221, 5, ''),
(10, 'shuly', 1775566771, 6, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `land_agent_property_view`
-- (See below for the actual view)
--
CREATE TABLE `land_agent_property_view` (
`property_name` varchar(255)
,`property_location` int(255)
,`property_cost` varchar(255)
,`land_agent_name` varchar(255)
,`land_agent_contact` int(20)
);

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
(5, 'rak', '58000', 520, '2023-06-17', 1, 2),
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
  `project_location` int(255) DEFAULT NULL,
  `project_price` varchar(255) DEFAULT NULL,
  `spened` int(11) DEFAULT NULL,
  `pc_id` int(11) DEFAULT NULL,
  `ps_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_location`, `project_price`, `spened`, `pc_id`, `ps_id`) VALUES
(1, 'lmc', 0, '48000000', 1000000, 0, 0),
(2, 'lmc', 0, '48000000', 1000000, 0, 0),
(3, 'uiykh', 0, '82000', 900, 0, 0),
(4, 'lmc', 0, '48000000', 1000000, 1, 1),
(7, 'lmc', 2, '48000000', 1000000, 2, 1),
(9, 'suprim', 1, '82000', 900, 1, 1),
(10, 'uiykh', 3, '82000', 900, 2, 1);

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
  `property_location` int(255) DEFAULT NULL,
  `property_cost` varchar(255) DEFAULT NULL,
  `land_img` varchar(255) DEFAULT NULL,
  `ls_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `property_location`, `property_cost`, `land_img`, `ls_id`) VALUES
(1, 'Rakib', 1, '33333', 'user_1687086032_1323542.png', 1),
(2, 'Rakib', 3, '844444', '', 1),
(3, 'kamsu', 1, '844444', 'user_1687086703_575079.png', 1),
(4, 'kam', 2, '8555555', '', 1),
(5, 'Rakib', 5, '844444', '', 1),
(6, 'jacab tower', 6, '1000325', '', 1),
(7, 'jacab tower', 4, '844444', '', 2),
(8, 'Eldorado', 1, '780000', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_contactor`
--

CREATE TABLE `p_contactor` (
  `land_agent_id` int(11) NOT NULL,
  `land_agent_name` varchar(255) DEFAULT NULL,
  `land_agent_contact` int(20) DEFAULT NULL,
  `land_agent_location` int(11) NOT NULL,
  `agent_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_contactor`
--

INSERT INTO `p_contactor` (`land_agent_id`, `land_agent_name`, `land_agent_contact`, `land_agent_location`, `agent_img`) VALUES
(1, 'Rakib', 1775566772, 1, ''),
(2, 'karim', 1745634221, 4, 'user_1687190175_4390178.png'),
(3, 'pial', 1775566771, 3, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `running_pj`
-- (See below for the actual view)
--
CREATE TABLE `running_pj` (
`project_id` int(11)
,`project_name` varchar(255)
,`project_location` int(255)
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
(1, 'kamrul', '01775566772', 'cloudysky121@gmail.com', '', '2023-06-17', '5000', NULL, '957'),
(2, 'kamrul', '01926249330', 'cloudysky121@gmail.com', '', '2023-06-18', '78000', NULL, '5000'),
(3, 'kamrul', '01926249330', 'cloudysky121@gmail.com', NULL, '2023-06-18', '78000', NULL, '5000'),
(4, 'tanvir', '01775566772', 'cloudysky121@gmail.com', NULL, '2023-06-18', '9000000', NULL, '784111');

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
-- Structure for view `availablepro`
--
DROP TABLE IF EXISTS `availablepro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `availablepro`  AS SELECT `property`.`property_id` AS `property_id`, `property`.`property_name` AS `property_name`, `property`.`property_location` AS `property_location`, `property`.`property_cost` AS `property_cost`, `property`.`land_img` AS `land_img`, `property`.`ls_id` AS `ls_id` FROM `property` WHERE `property`.`ls_id` = 1111  ;

-- --------------------------------------------------------

--
-- Structure for view `dev`
--
DROP TABLE IF EXISTS `dev`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dev`  AS SELECT `p`.`land_agent_name` AS `land_agent_name`, `pr`.`project_name` AS `project_name`, `pr`.`project_price` AS `project_price`, `pr`.`spened` AS `spened`, `p`.`land_agent_contact` AS `land_agent_contact`, `pr`.`ps_id` AS `ps_id` FROM (`p_contactor` `p` join `project` `pr`) WHERE `pr`.`project_location` = `p`.`land_agent_location``land_agent_location`  ;

-- --------------------------------------------------------

--
-- Structure for view `dev_view`
--
DROP TABLE IF EXISTS `dev_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dev_view`  AS SELECT `p`.`land_agent_name` AS `land_agent_name`, `pr`.`project_name` AS `project_name`, `pr`.`project_price` AS `project_price`, `pr`.`ps_id` AS `ps_id`, `pr`.`spened` AS `spened` FROM (`p_contactor` `p` join `project` `pr`) WHERE `pr`.`project_location` = `p`.`land_agent_location``land_agent_location`  ;

-- --------------------------------------------------------

--
-- Structure for view `land_agent_property_view`
--
DROP TABLE IF EXISTS `land_agent_property_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `land_agent_property_view`  AS SELECT `p`.`property_name` AS `property_name`, `p`.`property_location` AS `property_location`, `p`.`property_cost` AS `property_cost`, `la`.`land_agent_name` AS `land_agent_name`, `la`.`land_agent_contact` AS `land_agent_contact` FROM (`property` `p` join `land_agent` `la` on(`p`.`property_location` = `la`.`land_agent_location`))  ;

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
  ADD PRIMARY KEY (`instal_id`),
  ADD KEY `FK_instalment_agent` (`agent`),
  ADD KEY `FK_instalment_ins_per` (`ins_per`);

--
-- Indexes for table `ins_type`
--
ALTER TABLE `ins_type`
  ADD PRIMARY KEY (`ins_id`);

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
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `project_location` (`project_location`);

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
  ADD KEY `ls_id` (`ls_id`),
  ADD KEY `property_location` (`property_location`);

--
-- Indexes for table `p_contactor`
--
ALTER TABLE `p_contactor`
  ADD PRIMARY KEY (`land_agent_id`),
  ADD KEY `land_agent_location` (`land_agent_location`);

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
  MODIFY `bking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `instal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ins_type`
--
ALTER TABLE `ins_type`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `land_agent`
--
ALTER TABLE `land_agent`
  MODIFY `land_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p_contactor`
--
ALTER TABLE `p_contactor`
  MODIFY `land_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `instalment`
--
ALTER TABLE `instalment`
  ADD CONSTRAINT `FK_instalment_agent` FOREIGN KEY (`agent`) REFERENCES `land_agent` (`land_agent_id`),
  ADD CONSTRAINT `FK_instalment_ins_per` FOREIGN KEY (`ins_per`) REFERENCES `ins_type` (`ins_id`);

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
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`pc_id`) REFERENCES `p_contactor` (`land_agent_id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`project_location`) REFERENCES `area` (`area_id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_2` FOREIGN KEY (`ls_id`) REFERENCES `land_status` (`ls_id`),
  ADD CONSTRAINT `property_ibfk_3` FOREIGN KEY (`property_location`) REFERENCES `area` (`area_id`);

--
-- Constraints for table `p_contactor`
--
ALTER TABLE `p_contactor`
  ADD CONSTRAINT `p_contactor_ibfk_1` FOREIGN KEY (`land_agent_location`) REFERENCES `area` (`area_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
