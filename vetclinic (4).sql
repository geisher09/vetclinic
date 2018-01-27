-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 05:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vetclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(20) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contactno` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `cname`, `email`, `contactno`, `address`) VALUES
(1, 'Geisher Bernabe', 'geisher_09@gmail.com', '09509503518', 'Tondo,Manila'),
(3, 'Glenwin Bernabe', 'glenwinbernabe@gmail.com', '09212156798', 'Tondo,Manila'),
(4, 'Jayson Cruz', 'jayson@cruz.com', '09091765432', 'Makati'),
(5, 'Gerwin Bernabe', 'vangiecusi@ymail.com', '09091765432', 'Tondo,Manila'),
(6, 'John', 'john@yahoo.com', '09822227651', '761 Marcelino St.');

-- --------------------------------------------------------

--
-- Table structure for table `itemhistory`
--

CREATE TABLE `itemhistory` (
  `id` int(11) NOT NULL,
  `itemid` int(11) UNSIGNED NOT NULL,
  `serviceid` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty` int(20) NOT NULL,
  `total_cost` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemhistory`
--

INSERT INTO `itemhistory` (`id`, `itemid`, `serviceid`, `action`, `description`, `date`, `qty`, `total_cost`) VALUES
(1, 1, 'SER-000', 'Add Product', 'Add Product: Item 1 - Anti bacteria with 20 pc/s and price of 300 added ', '0000-00-00 00:00:00', 20, 300),
(2, 1, 'SER-000', 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 3 pc/s with total cost of 900. Only 17 pc/s left ', '2017-10-09 23:41:38', 3, 900),
(3, 1, 'SER-000', 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 3 pc/s', '0000-00-00 00:00:00', 20, 300),
(4, 2, 'SER-000', 'Add Product', 'Add Product: Item 2 - Paracetamol for pups with 50 pc/s and price of 250 added ', '0000-00-00 00:00:00', 50, 250),
(5, 2, 'SER-000', 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 5 pc/s', '2017-10-09 23:41:38', 55, 250),
(6, 1, 'SER-000', 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 7 pc/s with total cost of 2100. Only 13 pc/s left ', '2017-10-10 21:05:52', 7, 2100),
(7, 2, 'SER-000', 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 1 pc/s with total cost of 250. Only 54 pc/s left ', '2017-10-10 21:09:56', 1, 250),
(8, 2, 'SER-000', 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 15 pc/s with total cost of 3750. Only 9 pc/s left ', '2017-10-10 21:37:15', 15, 3750),
(9, 1, 'SER-000', 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 11 pc/s left ', '2017-10-10 21:46:24', 2, 600),
(10, 1, 'SER-000', 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 1 pc/s with total cost of 300. Only 10 pc/s left ', '2017-10-10 21:51:53', 1, 300),
(11, 2, 'SER-000', 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 3 pc/s with total cost of 750. Only 6 pc/s left ', '2017-10-10 21:52:10', 3, 750),
(12, 1, 'SER-000', 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 1 pc/s with total cost of 300. Only 9 pc/s left ', '2017-10-11 01:50:40', 1, 300),
(13, 2, 'SER-000', 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 3 pc/s with total cost of 750. Only 3 pc/s left ', '2017-10-11 01:51:41', 3, 750),
(14, 1, 'SER-000', 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 1 pc/s with total cost of 300. Only 8 pc/s left ', '2017-10-11 02:34:41', 1, 300),
(15, 2, 'SER-000', 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 1 pc/s with total cost of 250. Only 2 pc/s left ', '2017-10-11 02:54:19', 1, 250),
(16, 1, 'SER-000', 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 1 pc/s with total cost of 300. Only 7 pc/s left ', '2017-10-11 11:03:43', 1, 300),
(17, 3, 'SER-000', 'Add Product', 'Add Product: Item 3 - Pet Shampoo with 100 pc/s and price of 12 added ', '2017-10-11 15:44:15', 100, 12),
(18, 1, 'SER-000', 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 3 pc/s', '2017-11-01 12:53:13', 10, 300),
(19, 1, 'SER-000', 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 8 pc/s left ', '2017-11-01 12:54:30', 2, 600);

-- --------------------------------------------------------

--
-- Table structure for table `itemstock`
--

CREATE TABLE `itemstock` (
  `itemid` int(11) UNSIGNED NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `qty_left` int(11) UNSIGNED NOT NULL,
  `item_cost` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemstock`
--

INSERT INTO `itemstock` (`itemid`, `item_desc`, `qty_left`, `item_cost`) VALUES
(1, 'Anti bacteria', 8, '300'),
(2, 'Paracetamol for pups', 2, '250'),
(3, 'Pet Shampoo', 97, '12');

-- --------------------------------------------------------

--
-- Table structure for table `items_used`
--

CREATE TABLE `items_used` (
  `items_used_id` int(11) NOT NULL,
  `visitid` varchar(50) NOT NULL,
  `items_used` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_used`
--

INSERT INTO `items_used` (`items_used_id`, `visitid`, `items_used`) VALUES
(12, '17-3-1-1', '1'),
(11, '17-3-1-1', '1'),
(10, '17-5-1-1', '2'),
(9, '17-1000-1-1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `itemusage`
--

CREATE TABLE `itemusage` (
  `itemid` int(11) UNSIGNED NOT NULL,
  `serviceid` int(1) NOT NULL DEFAULT '3',
  `date_used` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty_used` int(11) UNSIGNED NOT NULL,
  `total_cost` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemusage`
--

INSERT INTO `itemusage` (`itemid`, `serviceid`, `date_used`, `qty_used`, `total_cost`) VALUES
(1, 3, '2017-10-02 00:00:26', 2, '20'),
(2, 3, '2017-10-02 01:01:29', 12, '112'),
(1, 3, '2017-10-02 01:55:51', 12, '1234'),
(1, 3, '2017-10-02 02:18:21', 2, '1231231'),
(1, 3, '2017-10-02 02:22:48', 2, '0'),
(1, 3, '2017-10-02 02:23:31', 2, '0'),
(1, 3, '2017-10-02 02:24:35', 2, '0'),
(1, 3, '2017-10-02 02:27:33', 2, '600'),
(1, 3, '2017-10-02 02:28:02', 2, '600'),
(1, 3, '2017-10-02 02:29:09', 3, '900'),
(1, 3, '2017-10-02 02:30:20', 1, '301'),
(1, 3, '2017-10-02 02:31:50', 1, '301'),
(3, 3, '2009-12-07 05:50:33', 45, '54540'),
(6, 3, '2009-12-07 05:52:31', 4, '1296'),
(6, 3, '2009-12-07 05:56:00', 4, '1296'),
(1, 3, '2009-12-07 05:56:53', 0, '0'),
(6, 3, '2009-12-07 05:57:02', 3, '972');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petid` varchar(20) NOT NULL,
  `clientid` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `breed` varchar(30) NOT NULL,
  `species` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `markings` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petid`, `clientid`, `pname`, `breed`, `species`, `sex`, `birthday`, `markings`) VALUES
('6-1', '6', 'brocky', 'Corgi', 'dog', 'm', '2012-03-01', 'brown'),
('5-1', '5', 'chuk', 'Corgi', 'Dog', 'f', '2015-08-17', 'Brown'),
('4-1', '4', 'Hangry', 'Bulldog', 'Dog', 'm', '2015-09-27', 'pink'),
('1003-1', '1003', 'Hangry', 'Sphinx', 'Cat', 'm', '2017-07-18', 'Brown'),
('3-1', '3', 'Flick', 'Corgi', 'Dog', 'm', '2015-10-28', 'White'),
('1002-1', '1002', 'Winter', 'Siberian Husky', 'Dog', 'f', '2016-10-21', 'Black & Yellow'),
('1000-1', '1000', 'Flicka', 'Husky', 'Dog', 'f', '2016-12-07', 'White'),
('1001-1', '1001', 'Dags', 'Corgi', 'Dog', 'm', '2016-09-09', 'Brown');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `startdate` varchar(48) NOT NULL,
  `enddate` varchar(48) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `allDay` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`ID`, `title`, `startdate`, `enddate`, `description`, `allDay`) VALUES
(11, 'Appointment', '2017-09-29T14:00:00', '2017-09-29T14:00:00', 'Kay Flicka Pet ni Gelo', 'false'),
(13, 'Meeting with Shei', '2017-09-29', '2017-09-29', 'To Witness Greatness', 'false'),
(33, 'Random Appointment', '2017-09-30T11:00:00', '2017-09-30T15:00:00', 'Description for Random Appointment allDay', 'false'),
(35, 'Try ', '2017-09-30T14:00:00', '2017-09-30T16:30:00', 'Try', 'false'),
(38, 'Flicka''s Vaccination', '2017-10-17T07:00:00', '2017-10-17T08:30:00', 'Flickaaaaaaaaaaaaaa', 'false'),
(40, 'sample', '2017-10-01', '2017-10-01', 'sample', 'false'),
(41, 'Flicky''s Vaccination', '2017-10-17T07:30:00', '2017-10-17T08:30:00', 'Flickyyyyyyyyyyyy', 'false'),
(42, 'Flight', '2017-10-26T07:00:00', '2017-10-26T08:30:00', 'aalis ako', 'false'),
(43, 'Sheilaaaaaaaaaaaaaaa''s bday', '2017-11-05T07:00:00', '2017-11-05T10:00:00', 'bday ni she', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `desc` varchar(40) NOT NULL,
  `servcost` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `type`, `desc`, `servcost`) VALUES
('SERT-001', 'treatment', 'deworming', 1500),
('SERT-002', 'treatment', 'vacination', 1000),
('SERG-001', 'grooming', 'Cleaning of pet', 200);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) UNSIGNED NOT NULL,
  `desc` varchar(300) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `desc`, `type`) VALUES
(170007, 'Sample 2 Description Treatment', 'Treatment'),
(170009, 'dfghjk', 'Grooming'),
(170010, 'ganon parin', 'Treatment'),
(170011, 'summer cut', 'Grooming'),
(170012, 'puppy cut', 'Grooming');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockno` varchar(20) NOT NULL,
  `item_desc` varchar(30) NOT NULL,
  `qty_left` int(10) NOT NULL,
  `item_cost` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockno`, `item_desc`, `qty_left`, `item_cost`) VALUES
('401-001', 'Syringe', 99, 100),
('401-002', 'paracetamol (test data)  ', 99, 100),
('401-003', 'Dog food deluxe', 99, 300),
('401-004', 'dog food regular', 99, 150);

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE `veterinarian` (
  `vetid` varchar(20) NOT NULL,
  `vetname` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veterinarian`
--

INSERT INTO `veterinarian` (`vetid`, `vetname`) VALUES
('301-001', 'Dr. Cerdz'),
('301-002', 'Dr. Christian');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `visitid` varchar(30) NOT NULL,
  `petid` varchar(20) NOT NULL,
  `vetid` varchar(20) NOT NULL,
  `serviceid` varchar(20) NOT NULL,
  `visitdate` varchar(25) NOT NULL,
  `findings` varchar(20) NOT NULL,
  `recommendation` varchar(30) NOT NULL,
  `case_type` varchar(15) NOT NULL,
  `visit_cost` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`visitid`, `petid`, `vetid`, `serviceid`, `visitdate`, `findings`, `recommendation`, `case_type`, `visit_cost`) VALUES
('17-5-1-1', '5-1', '301-001', '170011', '2017-10-11 02:50:11', 'Findings here.', 'Recommendations.', 'Grooming', 300),
('17-1000-1-1', '1000-1', '301-001', '170011', '2017-10-11 02:35:02', 'None', 'None', 'Grooming', 500),
('17-3-1-1', '3-1', '301-001', '170007', '2017-10-11 11:02:59', 'Findings here.', 'Recommendations.', 'Treatment', 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `itemhistory`
--
ALTER TABLE `itemhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemstock`
--
ALTER TABLE `itemstock`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `items_used`
--
ALTER TABLE `items_used`
  ADD PRIMARY KEY (`items_used_id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockno`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
  ADD PRIMARY KEY (`vetid`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`visitid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `itemhistory`
--
ALTER TABLE `itemhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `itemstock`
--
ALTER TABLE `itemstock`
  MODIFY `itemid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items_used`
--
ALTER TABLE `items_used`
  MODIFY `items_used_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170013;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
