-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 07:37 PM
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
-- Database: `rak`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bking_id` int(11) NOT NULL,
  `bkng_area` varchar(255) DEFAULT NULL,
  `bkng_cost` varchar(255) DEFAULT NULL,
  `bkng_name` varchar(255) DEFAULT NULL,
  `bt_id` int(11) DEFAULT NULL,
  `Payment` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `booking_area` int(11) NOT NULL,
  `Customar_con` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bking_id`, `bkng_area`, `bkng_cost`, `bkng_name`, `bt_id`, `Payment`, `property_id`, `date`, `booking_area`, `Customar_con`) VALUES
(1, 'dhaka', '80000', 'Rico Suarez', 2, 2, 1, '2023-06-22 00:20:18', 0, ''),
(3, 'qq', '8587', 'shuly', 1, 1, 3, '2023-06-22 00:20:18', 0, ''),
(4, 'ryr', 'ryr', 'rtr', 1, 1, 3, '2023-06-22 21:17:04', 0, ''),
(5, 'barisal', '87400', 'hasan', 1, 1, 1, '2023-06-27 17:30:45', 0, ''),
(6, 'mokamia', '80000', 'kaium', 1, 1, 5, '2023-06-28 11:26:38', 0, ''),
(7, 'betagi', '7844', 'sohan', 2, 2, 4, '2023-06-28 11:27:07', 0, ''),
(8, 'mirpur', '80000', 'rtr', 1, 1, 3, '2023-06-28 12:56:34', 0, ''),
(9, 'mirpur', '80000', 'rtr', 1, 1, 3, '2023-06-28 12:57:04', 3, ''),
(10, 'mirpur', '80000', 'rtr', 1, 1, 3, '2023-06-28 12:58:59', 3, ''),
(11, 'dhaka', '50000', 'Jorge', 1, 1, 1, '2023-06-28 12:59:32', 2, '0177556778'),
(12, '124 gulsan', '80000', 'Jorge', 1, 2, 1, '2023-06-28 13:19:03', 1, '0177556778'),
(13, '185/1 siddur tower', '50000', 'jihad', 1, 1, 1, '2023-06-28 13:39:52', 5, '0177556778');

-- --------------------------------------------------------

--
-- Table structure for table `booking_type`
--

CREATE TABLE `booking_type` (
  `bt_id` int(11) NOT NULL,
  `btype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instalment`
--

INSERT INTO `instalment` (`instal_id`, `appname`, `downp`, `ins_per`, `agent`, `from_pic`, `apply_date`) VALUES
(1, 'jahid', 452000, 2, 1, 'Array', '2023-06-19'),
(2, 'jahid', 452000, 1, 6, 'Array', '2023-06-19'),
(3, 'jahid', 452000, 1, 6, 'user_1687157736_194575.png', '2023-06-19'),
(4, 'jahid', 452000, 2, 1, '', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `ins_type`
--

CREATE TABLE `ins_type` (
  `ins_id` int(11) NOT NULL,
  `ins_name` varchar(100) NOT NULL,
  `ins_rate` double NOT NULL,
  `ins_month` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `ls_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`land_id`, `land_name`, `land_area`, `land_cost`, `land_agent_id`, `land_img`, `ls_id`) VALUES
(1, 'Jamuna7', 'Danmondi-31', 400000000, 0, '', 0),
(2, 'Jamuna7', 'Danmondi-31', 400000000, 0, 'user_1687018382_1576305.png', 0),
(3, 'gewrg', 'egeweewg', 6790, 0, '', 0),
(4, 'gewrg', 'egeweewg', 6790, 0, '', 0),
(5, 'land', 'Danmondi-32', 400000000, 1, 'user_1687023698_372966.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `land_agent`
--

CREATE TABLE `land_agent` (
  `land_agent_id` int(11) NOT NULL,
  `land_agent_name` varchar(255) DEFAULT NULL,
  `land_agent_contact` int(20) DEFAULT NULL,
  `land_agent_location` int(15) DEFAULT NULL,
  `agent_img` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `land_agent`
--

INSERT INTO `land_agent` (`land_agent_id`, `land_agent_name`, `land_agent_contact`, `land_agent_location`, `agent_img`, `user_id`, `password`, `user_name`) VALUES
(1, 'karim', 1775566772, 1, 'user_1687023036_2376443.png', 1, '0', ''),
(6, 'pial', 1758053665, 0, '', 2, '0', ''),
(20, NULL, NULL, NULL, NULL, 1, '1', 'admin'),
(21, 'sohan', 1745634221, 1, '', 2, '1', 'sohan'),
(22, 'karim', 177, 4, '', 2, '1', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `land_status`
--

CREATE TABLE `land_status` (
  `ls_id` int(11) NOT NULL,
  `is_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `land_status`
--

INSERT INTO `land_status` (`ls_id`, `is_name`) VALUES
(1, 'Avaiable'),
(2, 'Not Avaiable'),
(3, 'Sold Out');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `metarial`
--

INSERT INTO `metarial` (`metarial_id`, `metarial_name`, `metarial_price`, `mquantity`, `purse_date`, `sup_id`, `u_id`) VALUES
(5, 'rak', '58000', 520, '2023-06-17', 1, 1),
(6, 'rak', '58000', 520, '2023-06-17', 1, 1),
(7, 'rashida', '50000', 50, '2023-06-17', 1, 1),
(8, 'cement', '984000', 50, '2023-06-19', 1, 3),
(9, 'cement', '984000', 50, '2023-06-19', 2, 3),
(11, 'Color Paint', '600', 10, '2023-06-27', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `payname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `ps_id` int(11) DEFAULT NULL,
  `date_column` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_location`, `project_price`, `spened`, `pc_id`, `ps_id`, `date_column`) VALUES
(6, '  MultiBulid', '3', '700000', 95000, 1, 1, '2023-01-08'),
(8, '    Mult', '1', '700000', 95000, 1, 1, '2023-06-27'),
(9, 'wsc', '1', '48000000', 1000000, 1, 1, '2019-06-01'),
(10, '  dream house ', '4', '4587', 9654, 1, 1, '2023-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `ps_id` int(11) NOT NULL,
  `p_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `land_img` varchar(255) DEFAULT NULL,
  `ls_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `property_location`, `property_cost`, `land_img`, `ls_id`) VALUES
(1, 'Rakib', ' fff', '33333', '', 2),
(3, 'motaz plaza', '4', '12331', '', 2),
(4, 'saidur tower ', '5', '80000000', '', 3),
(5, 'bairdsz', '1', '12331', 'user_1687155241_8142615.png', 1),
(9, 'xyz', '4', '12331', '', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_contactor`
--

INSERT INTO `p_contactor` (`land_agent_id`, `land_agent_name`, `land_agent_contact`, `land_agent_location`, `agent_img`) VALUES
(1, 'karim', 1745634221, 1, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`sup_id`, `sup_name`, `sup_contact_no`, `sup_email`, `land_img`, `submission_date`, `tamount`, `tdue`, `tpaid`) VALUES
(1, 'kamrul', '01775566772', 'cloudysky121@gmail.com', '', '2023-06-17', '5000', NULL, '500'),
(2, 'karim', '01775566772', 'karim@yahoo.com', NULL, '2023-06-19', '7000000', NULL, '12000');

-- --------------------------------------------------------

--
-- Table structure for table `unit_om`
--

CREATE TABLE `unit_om` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'Management', 1, '1'),
(2, 'Agent', 2, '2');

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
  ADD KEY `ins_per` (`ins_per`),
  ADD KEY `agent` (`agent`);

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
  ADD KEY `land_agent_location` (`land_agent_location`),
  ADD KEY `user_id` (`user_id`);

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
  ADD KEY `ls_id` (`ls_id`);

--
-- Indexes for table `p_contactor`
--
ALTER TABLE `p_contactor`
  ADD PRIMARY KEY (`land_agent_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `bking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `booking_type`
--
ALTER TABLE `booking_type`
  MODIFY `bt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instalment`
--
ALTER TABLE `instalment`
  MODIFY `instal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ins_type`
--
ALTER TABLE `ins_type`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `land_agent`
--
ALTER TABLE `land_agent`
  MODIFY `land_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `land_status`
--
ALTER TABLE `land_status`
  MODIFY `ls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `metarial`
--
ALTER TABLE `metarial`
  MODIFY `metarial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `p_contactor`
--
ALTER TABLE `p_contactor`
  MODIFY `land_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unit_om`
--
ALTER TABLE `unit_om`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `instalment_ibfk_1` FOREIGN KEY (`ins_per`) REFERENCES `ins_type` (`ins_id`),
  ADD CONSTRAINT `instalment_ibfk_2` FOREIGN KEY (`agent`) REFERENCES `land_agent` (`land_agent_id`);

--
-- Constraints for table `land_agent`
--
ALTER TABLE `land_agent`
  ADD CONSTRAINT `land_agent_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
