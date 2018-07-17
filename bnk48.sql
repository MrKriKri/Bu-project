-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 04:36 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnk48`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(1) NOT NULL,
  `password` varchar(16) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `addr` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `cash` int(11) NOT NULL DEFAULT '0',
  `username` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `password`, `name`, `addr`, `email`, `tel`, `cash`, `username`) VALUES
(1, '123', 'rat', '11/12', 'cat@dog.com', '12312121', 59000, 'hello'),
(2, '123', 'asdasdasdasd', 'kanjsjd', 'asjhdahsdha@gnjasd.com', '02102', 3500, 'feefuu');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_id` int(11) NOT NULL,
  `Event_type` varchar(30) NOT NULL,
  `Event_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_id`, `Event_type`, `Event_name`) VALUES
(1, 'concert', 'BNK x BodySlam');

-- --------------------------------------------------------

--
-- Table structure for table `event_row`
--

CREATE TABLE `event_row` (
  `Row_ID` int(11) NOT NULL,
  `Row_date` datetime NOT NULL,
  `Row_place` varchar(30) NOT NULL,
  `Event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_row`
--

INSERT INTO `event_row` (`Row_ID`, `Row_date`, `Row_place`, `Event_id`) VALUES
(1, '2018-04-30 17:30:00', 'Central', 1),
(2, '2018-04-29 17:30:00', 'Central', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Ticket_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `customer_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`Ticket_id`, `zone_id`, `customer_ID`) VALUES
(2, 3, NULL),
(3, 3, NULL),
(4, 3, NULL),
(5, 2, NULL),
(6, 2, NULL),
(7, 2, NULL),
(12, 1, NULL),
(13, 1, NULL),
(14, 1, NULL),
(15, 1, NULL),
(16, 1, NULL),
(17, 1, NULL),
(18, 1, NULL),
(25, 5, NULL),
(26, 5, NULL),
(27, 5, NULL),
(28, 4, NULL),
(29, 4, NULL),
(31, 4, NULL),
(32, 4, NULL),
(33, 4, NULL),
(34, 4, NULL),
(35, 4, NULL),
(36, 4, NULL),
(37, 4, NULL),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(22, 6, 1),
(23, 6, 1),
(24, 6, 1),
(30, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zone_row`
--

CREATE TABLE `zone_row` (
  `zone_id` int(11) NOT NULL,
  `zone_name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `zone_desc` varchar(50) NOT NULL,
  `Row_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone_row`
--

INSERT INTO `zone_row` (`zone_id`, `zone_name`, `price`, `zone_desc`, `Row_ID`) VALUES
(1, 'Stand', 1500, 'stand near stage', 1),
(2, 'Premium R', 5000, 'sit right side stage', 1),
(3, 'Premium L', 5000, 'sit left side stage', 1),
(4, 'Stand', 1500, 'stand near stage', 2),
(5, 'Premium R', 5000, 'sit right side stage', 2),
(6, 'Premium L', 5000, 'sit left side stage', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `event_row`
--
ALTER TABLE `event_row`
  ADD PRIMARY KEY (`Row_ID`),
  ADD KEY `event_ibfk_1` (`Event_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Ticket_id`,`zone_id`),
  ADD KEY `zone_ID_ibfk_1` (`zone_id`),
  ADD KEY `customer_ID_ibfk_1` (`customer_ID`);

--
-- Indexes for table `zone_row`
--
ALTER TABLE `zone_row`
  ADD PRIMARY KEY (`zone_id`),
  ADD KEY `row_ibfk_1` (`Row_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_row`
--
ALTER TABLE `event_row`
  MODIFY `Row_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `zone_row`
--
ALTER TABLE `zone_row`
  MODIFY `zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_row`
--
ALTER TABLE `event_row`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`Event_id`) REFERENCES `event` (`Event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `customer_ID_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `zone_ID_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zone_row` (`zone_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zone_row`
--
ALTER TABLE `zone_row`
  ADD CONSTRAINT `row_ibfk_1` FOREIGN KEY (`Row_ID`) REFERENCES `event_row` (`Row_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
