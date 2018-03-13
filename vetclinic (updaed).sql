-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 11:59 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

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
(1, 'Geisher Bernabe', 'dlvg22@Yahoo.com', '09509503518', 'Tondo,Manila'),
(3, 'Glenwin Bernabe', 'glenwinbernabe@gmail.com', '09212156798', 'Tondo,Manilaaa'),
(4, 'Jayson Cruz', 'jayson@cruz.com', '09091765432', 'Makati'),
(5, 'Gerwin Bernabe', 'vangiecusi@ymail.com', '09091765432', 'Tondo,Manila'),
(6, 'John', 'john@yahoo.com', '09822227651', '761 Marcelino St.'),
(7, 'EDUARDO ', 'dlvg22@yahoo.com', 'Dela vega', 'R.'),
(10, 'audrey', 'dlv123@yahoo.com', '09056504565', 'pasay'),
(11, 'waje', 'dlvg212@yahoo.com', '1234567890', 'ppasay'),
(12, 'Rubick', 'dlvg212@yahoo.com', '09056504565', '123 mkiling'),
(13, 'Rubick', 'dlvg212@yahoo.com', '09056504565', '123 mkiling'),
(14, 'Rubick', 'dlvg212@yahoo.com', '09056504565', '123 mkiling');

-- --------------------------------------------------------

--
-- Table structure for table `itemhistory`
--

CREATE TABLE `itemhistory` (
  `id` int(11) NOT NULL,
  `itemid` int(11) UNSIGNED NOT NULL,
  `action` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty` int(20) NOT NULL,
  `total_cost` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemhistory`
--

INSERT INTO `itemhistory` (`id`, `itemid`, `action`, `description`, `date`, `qty`, `total_cost`) VALUES
(2, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 3 pc/s with total cost of 900. Only 17 pc/s left ', '2017-10-09 23:41:38', 3, 900),
(5, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 5 pc/s', '2017-10-09 23:41:38', 55, 250),
(6, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 7 pc/s with total cost of 2100. Only 13 pc/s left ', '2017-10-10 21:05:52', 7, 2100),
(7, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 1 pc/s with total cost of 250. Only 54 pc/s left ', '2017-10-10 21:09:56', 1, 250),
(8, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 15 pc/s with total cost of 3750. Only 9 pc/s left ', '2017-10-10 21:37:15', 15, 3750),
(9, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 11 pc/s left ', '2017-10-10 21:46:24', 2, 600),
(10, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 1 pc/s with total cost of 300. Only 10 pc/s left ', '2017-10-10 21:51:53', 1, 300),
(11, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 3 pc/s with total cost of 750. Only 6 pc/s left ', '2017-10-10 21:52:10', 3, 750),
(12, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 1 pc/s with total cost of 300. Only 9 pc/s left ', '2017-10-11 01:50:40', 1, 300),
(13, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 3 pc/s with total cost of 750. Only 3 pc/s left ', '2017-10-11 01:51:41', 3, 750),
(14, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 1 pc/s with total cost of 300. Only 8 pc/s left ', '2017-10-11 02:34:41', 1, 300),
(15, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 1 pc/s with total cost of 250. Only 2 pc/s left ', '2017-10-11 02:54:19', 1, 250),
(16, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 1 pc/s with total cost of 300. Only 7 pc/s left ', '2017-10-11 11:03:43', 1, 300),
(17, 3, 'Add Product', 'Add Product: Item 3 - Pet Shampoo with 100 pc/s and price of 12 added ', '2017-10-11 15:44:15', 100, 12),
(18, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 3 pc/s', '2017-11-01 12:53:13', 10, 300),
(19, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 8 pc/s left ', '2017-11-01 12:54:30', 2, 600),
(20, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 3 pc/s', '2018-02-07 13:10:19', 11, 300),
(21, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 2 pc/s with total cost of 500. Only 0 pc/s left ', '2018-02-09 21:48:23', 2, 500),
(22, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 9 pc/s left ', '2018-02-09 21:49:21', 2, 600),
(23, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 7 pc/s', '2018-02-25 04:57:53', 7, 250),
(24, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 7 pc/s left ', '2018-02-25 04:58:18', 2, 600),
(25, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 5 pc/s left ', '2018-02-25 04:58:33', 2, 600),
(26, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 3 pc/s left ', '2018-02-25 05:00:10', 2, 600),
(27, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 20 pc/s', '2018-02-28 19:49:58', 21, 300),
(28, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 23 pc/s', '2018-02-28 19:50:03', 28, 250),
(29, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:12:54', 5, 300),
(30, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:13:01', 10, 300),
(31, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:18:58', 5, 300),
(32, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:19:02', 10, 300),
(33, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:24:15', 5, 300),
(34, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:24:18', 10, 300),
(35, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:24:25', 15, 300),
(36, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:24:28', 20, 300),
(37, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:24:31', 25, 300),
(38, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 5 pc/s', '2018-03-03 23:24:40', 30, 300),
(39, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 23 pc/s', '2018-03-03 23:56:39', 23, 300),
(40, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 23 pc/s', '2018-03-03 23:56:47', 46, 300),
(41, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 5 pc/s', '2018-03-04 00:18:54', 5, 250),
(42, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 2 pc/s', '2018-03-04 00:20:46', 2, 250),
(43, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 98 pc/s', '2018-03-04 00:37:40', 100, 250),
(44, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 100 pc/s', '2018-03-04 00:37:48', 100, 300),
(45, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 23 pc/s', '2018-03-04 00:51:14', 123, 300),
(46, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 23 pc/s', '2018-03-04 00:51:16', 123, 250),
(47, 3, 'Add Stock', 'Add Stock: Item 3 - Pet Shampoo added 24 pc/s', '2018-03-04 02:55:07', 100, 12),
(48, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 100 pc/s with total cost of 30000. Only 21 pc/s left ', '2018-03-06 02:09:45', 100, 30000),
(49, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 21 pc/s with total cost of 6300. Only 0 pc/s left ', '2018-03-06 02:09:54', 21, 6300),
(50, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 23 pc/s', '2018-03-06 02:10:07', 23, 300),
(51, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 100 pc/s with total cost of 25000. Only 0 pc/s left ', '2018-03-06 02:12:32', 100, 25000),
(52, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 100 pc/s', '2018-03-06 02:12:39', 100, 250),
(53, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 21 pc/s left ', '2018-03-06 02:13:36', 2, 600),
(54, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 2 pc/s with total cost of 600. Only 19 pc/s left ', '2018-03-06 02:14:41', 2, 600),
(55, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 19 pc/s with total cost of 5700. Only 0 pc/s left ', '2018-03-06 02:14:51', 19, 5700),
(56, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 233 pc/s', '2018-03-06 02:15:16', 233, 300),
(57, 3, 'Sold Item', 'Sold Item: Item 3 - Pet Shampoo sold 97 pc/s with total cost of 1164. Only 0 pc/s left ', '2018-03-06 02:15:33', 97, 1164),
(58, 3, 'Add Stock', 'Add Stock: Item 3 - Pet Shampoo added 233 pc/s', '2018-03-06 02:15:46', 233, 12),
(77, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 100 pc/s', '2018-03-08 03:14:27', 100, 300),
(76, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 100 pc/s with total cost of 30000. Only 0 pc/s left ', '2018-03-08 03:13:47', 100, 30000),
(75, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 100 pc/s', '2018-03-08 03:13:40', 100, 300),
(74, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 100 pc/s with total cost of 30000. Only 0 pc/s left ', '2018-03-08 03:13:21', 100, 30000),
(73, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 100 pc/s', '2018-03-08 03:13:15', 100, 300),
(72, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 111 pc/s with total cost of 33300. Only 0 pc/s left ', '2018-03-08 03:11:18', 111, 33300),
(71, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 111 pc/s left', '2018-03-07 01:06:14', 1, 300),
(70, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 2 pc/s with total cost of 24 only 228 pc/s left', '2018-03-07 01:06:14', 2, 24),
(69, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 3 pc/s with total cost of 750 only 86 pc/s left', '2018-03-07 01:06:14', 3, 750),
(78, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 86 pc/s with total cost of 21500. Only 0 pc/s left ', '2018-03-08 03:15:56', 86, 21500),
(79, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 100 pc/s', '2018-03-08 03:16:02', 100, 250),
(80, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 99 pc/s left', '2018-03-08 03:41:08', 1, 300),
(81, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 98 pc/s left', '2018-03-08 03:42:15', 1, 300),
(82, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 97 pc/s left', '2018-03-08 03:42:55', 1, 300),
(83, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 97 pc/s with total cost of 29100 only 0 pc/s left', '2018-03-08 03:43:26', 97, 29100),
(84, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 100 pc/s', '2018-03-08 03:43:38', 100, 300),
(85, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 99 pc/s left', '2018-03-08 16:38:48', 1, 300),
(86, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 1 pc/s with total cost of 12 only 227 pc/s left', '2018-03-08 23:28:47', 1, 12),
(87, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 98 pc/s left', '2018-03-08 23:28:47', 1, 300),
(88, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 97 pc/s left', '2018-03-08 23:29:48', 1, 300),
(89, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 96 pc/s left', '2018-03-08 23:30:23', 1, 300),
(90, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 95 pc/s left', '2018-03-08 23:32:47', 1, 300),
(91, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 2 pc/s with total cost of 500 only 98 pc/s left', '2018-03-08 23:33:38', 2, 500),
(92, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 94 pc/s left', '2018-03-08 23:33:38', 1, 300),
(93, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 93 pc/s left', '2018-03-08 23:37:00', 1, 300),
(94, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 2 pc/s with total cost of 600 only 91 pc/s left', '2018-03-08 23:43:25', 2, 600),
(95, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 1 pc/s with total cost of 12 only 226 pc/s left', '2018-03-08 23:48:58', 1, 12),
(96, 1, 'Sold Item', 'Sold Item: Item 1 - Anti bacteria sold 91 pc/s with total cost of 27300. Only 0 pc/s left ', '2018-03-08 23:59:22', 91, 27300),
(97, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 1 pc/s with total cost of 250 only 97 pc/s left', '2018-03-09 00:00:22', 1, 250),
(98, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 1 pc/s with total cost of 250 only 96 pc/s left', '2018-03-09 00:03:18', 1, 250),
(99, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 1 pc/s with total cost of 250 only 95 pc/s left', '2018-03-09 00:04:00', 1, 250),
(100, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 1 pc/s with total cost of 250 only 94 pc/s left', '2018-03-09 00:05:40', 1, 250),
(101, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 1 pc/s with total cost of 250 only 93 pc/s left', '2018-03-09 00:06:37', 1, 250),
(102, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 1 pc/s with total cost of 250 only 92 pc/s left', '2018-03-09 00:08:54', 1, 250),
(103, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 2 pc/s with total cost of 24 only 224 pc/s left', '2018-03-09 00:08:54', 2, 24),
(104, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 2 pc/s with total cost of 24 only 222 pc/s left', '2018-03-09 00:10:10', 2, 24),
(105, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 1 pc/s with total cost of 12 only 221 pc/s left', '2018-03-09 00:11:19', 1, 12),
(106, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 2 pc/s with total cost of 24 only 219 pc/s left', '2018-03-09 00:12:41', 2, 24),
(107, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 2 pc/s with total cost of 24 only 217 pc/s left', '2018-03-09 00:13:53', 2, 24),
(108, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 2 pc/s with total cost of 24 only 215 pc/s left', '2018-03-09 00:16:44', 2, 24),
(109, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 100 pc/s', '2018-03-09 00:17:49', 100, 300),
(110, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 99 pc/s left', '2018-03-09 00:18:10', 1, 300),
(111, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 2 pc/s with total cost of 500 only 90 pc/s left', '2018-03-09 00:18:11', 2, 500),
(112, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 2 pc/s with total cost of 600 only 97 pc/s left', '2018-03-09 00:23:14', 2, 600),
(113, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 1 pc/s with total cost of 12 only 214 pc/s left', '2018-03-09 00:23:14', 1, 12),
(114, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 96 pc/s left', '2018-03-09 00:24:00', 1, 300),
(115, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 2 pc/s with total cost of 500 only 88 pc/s left', '2018-03-09 00:24:00', 2, 500),
(116, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 3 pc/s with total cost of 36 only 211 pc/s left', '2018-03-09 00:24:00', 3, 36),
(117, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 3 pc/s with total cost of 900 only 93 pc/s left', '2018-03-09 00:24:42', 3, 900),
(118, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 92 pc/s left', '2018-03-09 00:24:42', 1, 300),
(119, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 2 pc/s with total cost of 500 only 86 pc/s left', '2018-03-09 00:24:42', 2, 500),
(120, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 91 pc/s left', '2018-03-09 00:25:43', 1, 300),
(121, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 2 pc/s with total cost of 500 only 84 pc/s left', '2018-03-09 00:25:43', 2, 500),
(122, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 3 pc/s with total cost of 36 only 208 pc/s left', '2018-03-09 00:25:43', 3, 36),
(123, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 90 pc/s left', '2018-03-09 00:28:32', 1, 300),
(124, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 3 pc/s with total cost of 36 only 205 pc/s left', '2018-03-09 00:28:32', 3, 36),
(125, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 2 pc/s with total cost of 500 only 82 pc/s left', '2018-03-09 00:28:32', 2, 500),
(126, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 3 pc/s with total cost of 36 only 202 pc/s left', '2018-03-09 00:29:51', 3, 36),
(127, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 89 pc/s left', '2018-03-09 00:29:52', 1, 300),
(128, 2, 'Sold Item', 'Sold Item: Item 2-Paracetamol for pups sold 2 pc/s with total cost of 500 only 80 pc/s left', '2018-03-09 00:29:52', 2, 500),
(129, 2, 'Sold Item', 'Sold Item: Item 2 - Paracetamol for pups sold 80 pc/s with total cost of 20000. Only 0 pc/s left ', '2018-03-09 01:01:30', 80, 20000),
(130, 2, 'Add Stock', 'Add Stock: Item 2 - Paracetamol for pups added 100 pc/s', '2018-03-09 01:02:22', 100, 250),
(131, 4, 'Add Product', 'Add Product: Item 4 - Mocha cake with 150 pc/s and price of 150 added ', '2018-03-09 02:49:23', 150, 150),
(132, 5, 'Add Product', 'Add Product: Item 5 - 12321 with 123 pc/s and price of 123 added ', '2018-03-09 02:49:34', 123, 123),
(133, 6, 'Add Product', 'Add Product: Item 6 - PlayGirls with 5 pc/s and price of 1 added ', '2018-03-09 03:00:34', 5, 1),
(134, 1, 'Add Stock', 'Add Stock: Item 1 - Anti bacteria added 23 pc/s', '2018-03-09 04:56:08', 112, 300),
(135, 7, 'Add Product', 'Add Product: Item 7 - Vaseline with 123 pc/s and price of 123 added ', '2018-03-09 05:00:30', 123, 123),
(136, 8, 'Add Product', 'Add Product: Item 8 - Vaseline with 123 pc/s and price of 123 added ', '2018-03-09 05:02:13', 123, 123),
(137, 6, 'Sold Item', 'Sold Item: Item 6 - PlayGirls sold 5 pc/s with total cost of 5. Only 0 pc/s left ', '2018-03-12 22:07:14', 5, 5),
(138, 6, 'Add Stock', 'Add Stock: Item 6 - PlayGirls added 5 pc/s', '2018-03-12 22:32:50', 5, 1),
(139, 6, 'Sold Item', 'Sold Item: Item 6 - PlayGirls sold 5 pc/s with total cost of 5. Only 0 pc/s left ', '2018-03-12 22:38:55', 5, 5),
(140, 6, 'Add Stock', 'Add Stock: Item 6 - PlayGirls added 5 pc/s', '2018-03-12 22:49:43', 5, 1),
(141, 6, 'Sold Item', 'Sold Item: Item 6 - PlayGirls sold 5 pc/s with total cost of 5. Only 0 pc/s left ', '2018-03-12 23:03:42', 5, 5),
(142, 7, 'Sold Item', 'Sold Item: Item 7 - Vaseline sold 123 pc/s with total cost of 15129. Only 0 pc/s left ', '2018-03-12 23:06:12', 123, 15129),
(143, 6, 'Add Stock', 'Add Stock: Item 6 - PlayGirls added 5 pc/s', '2018-03-12 23:10:23', 5, 1),
(144, 7, 'Add Stock', 'Add Stock: Item 7 - Vaseline added 5 pc/s', '2018-03-12 23:10:26', 5, 123),
(145, 3, 'Sold Item', 'Sold Item: Item 3-Pet Shampoo sold 2 pc/s with total cost of 24 only 200 pc/s left', '2018-03-13 01:36:33', 2, 24),
(146, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 111 pc/s left', '2018-03-13 01:36:33', 1, 300),
(147, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 1 pc/s with total cost of 300 only 110 pc/s left', '2018-03-13 01:45:01', 1, 300),
(148, 5, 'Sold Item', 'Sold Item: Item 5-12321 sold 3 pc/s with total cost of 369 only 120 pc/s left', '2018-03-13 01:45:01', 3, 369),
(149, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 5 pc/s with total cost of 1500 only 105 pc/s left', '2018-03-13 02:11:46', 5, 1500),
(150, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 4 pc/s with total cost of 1200 only 101 pc/s left', '2018-03-13 02:12:39', 4, 1200),
(151, 1, 'Sold Item', 'Sold Item: Item 1-Anti bacteria sold 3 pc/s with total cost of 900 only 98 pc/s left', '2018-03-13 02:17:22', 3, 900);

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
(1, 'Anti bacteria', 98, '300'),
(2, 'Paracetamol for pups', 100, '250'),
(3, 'Pet Shampoo', 200, '12'),
(4, 'Mocha cake', 150, '150'),
(5, '12321', 120, '123'),
(6, 'PlayGirls', 5, '1'),
(7, 'Vaseline', 5, '123'),
(8, 'Vaseline', 123, '123');

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
(9, '17-1000-1-1', '1'),
(13, '18-1-1-1', '2'),
(14, '18-1-1-1', '1'),
(15, '18-1-1-1', '1'),
(16, '18-1-1-1', '1'),
(20, '18-1-1-3', '1'),
(19, '18-1-1-3', '1'),
(21, '18-1-1-3', '2'),
(22, '18-1-1-3', '3'),
(23, '18-1-1-3', '3'),
(24, '18-1-1-3', '1'),
(25, '18-1-1-3', '1'),
(26, '18-1-1-3', '1'),
(27, '18-1-1-3', '1'),
(28, '18-1-1-3', '1'),
(29, '18-1-1-3', '1'),
(30, '18-1-1-3', '1'),
(31, '18-1-1-3', '1'),
(32, '18-1-1-3', '1'),
(33, '18-1-1-3', '1'),
(34, '18-1-1-3', '1'),
(35, '18-1-1-3', '1'),
(36, '18-1-1-3', '2'),
(37, '18-7-1-3', '1'),
(38, '18-4-1-1', '1'),
(39, '18-3-1-2', '3'),
(40, '18-6-1-1', '2'),
(41, '18-4-1-1', '1'),
(42, '18-1-1-3', '1'),
(43, '18-1-1-3', '1'),
(44, '18-1-1-3', '1'),
(45, '18-1-1-3', '1'),
(46, '18-4-1-1', '2'),
(47, '18-4-1-1', '2'),
(48, '18-1-1-3', '1'),
(49, '18-1-1-3', '2'),
(50, '18-1-1-3', '3'),
(51, '18-1-1-3', '1'),
(52, '18-1-1-3', '1'),
(53, '18-1-1-3', '1'),
(54, '18-1-1-3', '1'),
(55, '18-4-1-1', '3'),
(56, '18-6-1-1', '1'),
(57, '', '1'),
(58, '', '1'),
(59, '', '2'),
(60, '', '1'),
(61, '', '1'),
(62, '', '1'),
(63, '', '3'),
(64, '18-1-1-4', '1'),
(65, '', '1'),
(66, '18-1-1-5', '1'),
(67, '18-1-1-5', '2'),
(68, '18-1-1-7', '1'),
(69, '18-1-1-7', '3'),
(70, '18-1-1-7', '2'),
(71, '18-1-1-9', '1'),
(72, '18-1-1-10', '1'),
(73, '18-1-1-10', '2'),
(74, '18-1-1-12', '1'),
(75, '18-1-1-13', '1'),
(76, '18-1-1-13', '2'),
(77, '18-1-1-13', '1'),
(78, '18-1-1-13', '2'),
(79, '1', '18-1-1-13'),
(80, '1', '18-1-1-13'),
(81, '1', '18-1-1-13'),
(82, '1', '18-1-1-14'),
(83, '1', '18-1-1-17'),
(84, '1', '18-1-1-17'),
(85, '1', '18-1-1-19'),
(86, '1', '18-1-1-19'),
(87, '', '1'),
(88, '3', '18-1-1-21'),
(89, '2', '18-1-1-21'),
(90, '1', '18-1-1-21'),
(91, '', '1'),
(92, '', '1'),
(93, '', '1'),
(94, '', '2'),
(95, '1', '18-1-1-23'),
(96, '1', '18-1-1-24'),
(97, '1', '18-1-1-25'),
(98, '97', '18-1-1-26'),
(99, '1', '18-6-1-2'),
(100, '1', '18-7-1-3'),
(101, '1', '18-7-1-3'),
(102, '1', '18-7-1-5'),
(103, '1', '18-6-1-3'),
(104, '1', '18-7-1-6'),
(105, '2', '18-5-1-2'),
(106, '1', '18-5-1-2'),
(107, '1', '18-11-1-1'),
(108, '2', '18-11-1-2'),
(109, '1', '18-1-1-27'),
(110, '', '1'),
(111, '1', '18-1-1-28'),
(112, '18-11-1-3', '1'),
(113, '18-11-1-4', '1'),
(114, '18-11-1-4', '2'),
(115, '18-1-1-30', '2'),
(116, '18-11-1-6', '1'),
(117, '18-11-1-7', '2'),
(118, '18-11-1-8', '2'),
(119, '18-11-1-9', '2'),
(120, '18-11-1-10', '1'),
(121, '18-11-1-10', '2'),
(122, '18-11-1-12', '2'),
(123, '18-11-1-12', '1'),
(124, '18-1-1-31', '1'),
(125, '18-1-1-31', '2'),
(126, '18-1-1-32', '3'),
(127, '18-11-1-13', '3'),
(128, '18-11-1-13', '1'),
(129, '18-11-1-14', '2'),
(130, '18-1-1-32', '1'),
(131, '18-1-1-32', '2'),
(132, '18-1-1-32', '3'),
(133, '18-6-1-4', '1'),
(134, '18-6-1-4', '3'),
(135, '18-6-1-4', '2'),
(136, '18-4-1-2', '3'),
(137, '18-4-1-2', '1'),
(138, '18-4-1-2', '2'),
(139, '', '2'),
(140, '', '6'),
(141, '', '6'),
(142, '', '6'),
(143, '', '7'),
(144, '18-13-1-1', '2'),
(145, '18-13-1-1', '1'),
(146, '18-13-1-2', '1'),
(147, '18-13-1-2', '3'),
(148, '18-14-1-1', '5'),
(149, '18-14-1-2', '4'),
(150, '18-14-1-3', '1');

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
('1001-1', '1001', 'Dags', 'Corgi', 'Dog', 'm', '2016-09-09', 'Brown'),
('7-1', '7', 'jaja', 'ajjaja', 'male', 'm', '2018-12-31', 'B;aat'),
('1-1', '1', 'deeg', 'das', 'dohg', 'm', '2019-01-01', 'ss'),
('8-1', '8', '556', '65', 'asdasd', 'm', '2018-02-09', 'asdasda'),
('9-1', '9', '12312', '123123', '123123', 'm', '2018-02-12', '112321'),
('11-1', '11', 'mocha', 'playgirls', 'russian pitbull', 'm', '2018-01-01', 'bilbil'),
('11-2', '11', 'Sasy', 'Monggoloyd', 'PlayGirls', 'm', '2018-01-01', ''),
('13-1', '13', 'greed', 'asd', 'maes', 'm', '2017-12-31', ''),
('14-1', '14', 'greed', 'asd', 'maes', 'm', '2017-12-31', '');

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
(38, 'Flicka\'s Vaccination', '2017-10-17T07:00:00', '2017-10-17T08:30:00', 'Flickaaaaaaaaaaaaaa', 'false'),
(40, 'sample', '2017-10-01', '2017-10-01', 'sample', 'false'),
(41, 'Flicky\'s Vaccination', '2017-10-17T07:30:00', '2017-10-17T08:30:00', 'Flickyyyyyyyyyyyy', 'false'),
(42, 'Flight', '2017-10-26T07:00:00', '2017-10-26T08:30:00', 'aalis ako', 'false'),
(43, 'Sheilaaaaaaaaaaaaaaa\'s bday', '2017-11-05T07:00:00', '2017-11-05T10:00:00', 'bday ni she', 'false'),
(44, 'LEO', '2018-02-25', '2018-02-25', 'LEOO', 'false'),
(45, 'sadsad', '2018-03-09', '2018-03-09', 'asdsad', 'false');

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
(170009, 'kak', 'Treatment'),
(170010, 'ganon parin', 'Treatment'),
(170011, 'LIGO', 'Grooming');

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
  `visit_cost` int(15) NOT NULL,
  `Total` int(11) NOT NULL,
  `itemCost` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`visitid`, `petid`, `vetid`, `serviceid`, `visitdate`, `findings`, `recommendation`, `case_type`, `visit_cost`, `Total`, `itemCost`) VALUES
('17-5-1-1', '5-1', '301-001', '170011', '2017-10-11 02:50:11', 'Findings here.', 'Recommendations.', 'Grooming', 300, 0, 0),
('17-1000-1-1', '1000-1', '301-001', '170011', '2017-10-11 02:35:02', 'None', 'None', 'Grooming', 500, 0, 0),
('17-3-1-1', '3-1', '301-001', '170007', '2017-10-11 11:02:59', 'Findings here.', 'Recommendations.', 'Treatment', 700, 0, 0),
('18-1-1-1', '1-1', '301-001', '170012', '2018-02-09 22:46:34', 'dd', 'sss', 'Grooming', 2147483647, 0, 0),
('18-1-1-2', '1-1', '301-001', '170012', '2018-02-09 22:47:14', 'ssdaas', 'dasdasdsa', 'Grooming', 2147483647, 0, 0),
('18-7-1-1', '7-1', '301-001', '170010', '2018-02-09 22:58:15', 'Findings here.asasd', 'Recommendations.asdasdas', 'Treatment', 444, 0, 0),
('18-7-1-2', '7-1', '301-001', '170012', '2018-02-09 22:58:50', 'Findings here.121', 'Recommendations.', 'Grooming', 2323, 0, 0),
('18-1-1-3', '1-1', '301-001', '170009', '2018-03-04 01:46:08', 'namamagang llamunan', 'Recommendations.', 'Treatment', 0, 0, 0),
('18-4-1-1', '4-1', '301-001', '170009', '2018-03-04 04:01:03', 'Ligo lang', '123', 'Treatment', 360, 0, 0),
('18-6-1-1', '6-1', '301-002', '170010', '2018-03-04 04:02:00', 'WOW ', 'Recommendations.', 'Treatment', 1000, 0, 0),
('18-1-1-4', '1-1', '301-001', '170010', '2018-03-07 00:29:15', 'Findings here.', 'Recommendations.', 'Treatment', 600, 0, 0),
('18-1-1-5', '1-1', '301-001', '170009', '2018-03-07 01:02:28', 'Findings here.', 'Recommendations.', 'Treatment', 1582, 0, 0),
('18-1-1-6', '1-1', '301-001', '170009', '2018-03-07 01:02:29', 'Findings here.', 'Recommendations.', 'Treatment', 1582, 0, 0),
('18-1-1-7', '1-1', '301-001', '170009', '2018-03-07 01:27:21', 'Findings here.', 'Recommendations.', 'Treatment', 1812, 0, 0),
('18-1-1-8', '1-1', '301-001', '170009', '2018-03-07 01:27:23', 'Findings here.', 'Recommendations.', 'Treatment', 1812, 0, 0),
('18-1-1-9', '1-1', '301-001', '170009', '2018-03-07 01:29:02', 'Findings here.', 'Recommendations.', 'Treatment', 700, 0, 0),
('18-1-1-10', '1-1', '301-001', '170010', '2018-03-07 01:32:40', 'Findings here.', 'Recommendations.', 'Treatment', 1800, 0, 0),
('18-1-1-11', '1-1', '301-001', '170010', '2018-03-07 01:32:41', 'Findings here.', 'Recommendations.', 'Treatment', 1800, 0, 0),
('18-1-1-12', '1-1', '301-001', '170010', '2018-03-07 01:33:23', 'Findings here.', 'Recommendations.', 'Treatment', 700, 0, 0),
('18-1-1-13', '1-1', '301-001', '170009', '2018-03-07 01:47:22', 'Findings here.', 'Recommendations.', 'Treatment', 400, 0, 0),
('18-1-1-14', '1-1', '301-001', '170009', '2018-03-07 01:53:44', 'Findings here.', 'Recommendations.', 'Treatment', 400, 0, 0),
('18-1-1-15', '1-1', '301-001', '170009', '2018-03-07 01:59:42', 'Findings here.', 'Recommendations.', 'Treatment', 1550, 0, 0),
('18-1-1-16', '1-1', '301-001', '170009', '2018-03-07 02:00:59', 'Findings here.', 'Recommendations.', 'Treatment', 400, 0, 0),
('18-1-1-17', '1-1', '301-001', '170009', '2018-03-07 02:01:49', 'Findings here.', 'Recommendations.', 'Treatment', 1550, 0, 0),
('18-1-1-18', '1-1', '301-001', '170009', '2018-03-07 02:01:50', 'Findings here.', 'Recommendations.', 'Treatment', 1550, 0, 0),
('18-1-1-19', '1-1', '301-001', '170009', '2018-03-07 02:03:37', 'Findings here.', 'Recommendations.', 'Treatment', 412, 0, 0),
('18-1-1-20', '1-1', '301-001', '170009', '2018-03-07 02:03:37', 'Findings here.', 'Recommendations.', 'Treatment', 412, 0, 0),
('18-1-1-21', '1-1', '301-001', '170009', '2018-03-07 02:06:16', 'Findings here.', 'Recommendations.', 'Treatment', 2074, 0, 0),
('18-1-1-22', '1-1', '301-001', '170009', '2018-03-07 02:06:17', 'Findings here.', 'Recommendations.', 'Treatment', 2074, 0, 0),
('18-1-1-23', '1-1', '301-001', '170009', '2018-03-08 04:41:10', 'Findings here.', 'Recommendations.', 'Treatment', 1300, 0, 0),
('18-1-1-24', '1-1', '301-001', '170009', '2018-03-08 04:42:15', 'Findings here.', 'Recommendations.', 'Treatment', 400, 0, 0),
('18-1-1-25', '1-1', '301-001', '170009', '2018-03-08 04:42:56', 'Findings here.', 'Recommendations.', 'Treatment', 1300, 0, 0),
('18-1-1-26', '1-1', '301-001', '170009', '2018-03-08 04:43:27', 'Findings here.', 'Recommendations.', 'Treatment', 29200, 0, 0),
('18-6-1-2', '6-1', '301-001', '170009', '2018-03-08 17:38:51', 'try mlajj', 'Recommendations.', 'Treatment', 400, 0, 0),
('18-7-1-3', '7-1', '301-001', '170011', '2018-03-09 00:28:48', 'Findings here.', 'Recommendations.', 'Grooming', 1000, 1312, 0),
('18-7-1-4', '7-1', '301-001', '170011', '2018-03-09 00:28:50', 'Findings here.', 'Recommendations.', 'Grooming', 1000, 1312, 0),
('18-7-1-5', '7-1', '301-001', '170009', '2018-03-09 00:29:49', 'Findings here.', 'Recommendations.', 'Treatment', 100, 400, 0),
('18-6-1-3', '6-1', '301-001', '170009', '2018-03-09 00:30:24', 'Findings here.', 'Recommendations.', 'Treatment', 100, 400, 0),
('18-7-1-6', '7-1', '301-001', '170009', '2018-03-09 00:32:50', 'Findings here.', 'Recommendations.', 'Treatment', 123, 423, 0),
('18-5-1-2', '5-1', '301-001', '170009', '2018-03-09 00:33:39', 'Findings here.', 'Recommendations.', 'Treatment', 100, 900, 0),
('18-5-1-3', '5-1', '301-001', '170009', '2018-03-09 00:33:45', 'Findings here.', 'Recommendations.', 'Treatment', 100, 900, 0),
('18-11-1-1', '11-1', '301-001', '170009', '2018-03-09 00:37:01', 'ligo mo lang', 'Recommendations.', 'Treatment', 100, 400, 0),
('18-11-1-2', '11-1', '301-001', '170009', '2018-03-09 00:43:27', 'Findings here.', 'Recommendations.', 'Treatment', 700, 0, 0),
('18-1-1-27', '1-1', '301-001', '170009', '2018-03-09 00:49:00', 'Findings here.', 'Recommendations.', 'Treatment', 112, 0, 0),
('18-1-1-28', '1-1', '301-001', '170009', '2018-03-09 01:00:24', 'Findings here.', 'Recommendations.', 'Treatment', 350, 0, 0),
('18-1-1-29', '1-1', '301-001', '170009', '2018-03-09 01:01:52', 'Findings here.', 'Recommendations.', 'Treatment', 350, 0, 0),
('18-5-1-4', '5-1', '301-001', '170009', '2018-03-09 01:05:43', 'Findings here.', 'Recommendations.', 'Treatment', 1250, 0, 0),
('18-11-1-3', '11-1', '301-001', '170011', '2018-03-09 01:06:39', 'Paliguan sa sbaaw', 'Recommendations.', 'Grooming', 350, 0, 0),
('18-11-1-4', '11-1', '301-001', '170009', '2018-03-09 01:08:55', 'Findings here.', 'ssssssssssssssssssss', 'Treatment', 374, 0, 0),
('18-11-1-5', '11-1', '301-001', '170009', '2018-03-09 01:08:59', 'Findings here.', 'ssssssssssssssssssss', 'Treatment', 374, 0, 0),
('18-1-1-30', '1-1', '301-001', '170009', '2018-03-09 01:10:11', 'Findings here.', 'Recommendations.', 'Treatment', 374, 0, 0),
('18-11-1-6', '11-1', '301-001', '170009', '2018-03-09 01:11:20', 'Findings here.', 'Try eto yun', 'Treatment', 612, 0, 0),
('18-11-1-7', '11-1', '301-001', '170009', '2018-03-09 01:12:46', 'Findings here.', 'Recommendations.', 'Treatment', 374, 0, 0),
('18-11-1-8', '11-1', '301-001', '170009', '2018-03-09 01:13:55', 'Findings here.', 'Recommendations.', 'Treatment', 374, 0, 0),
('18-11-1-9', '11-1', '301-001', '170009', '2018-03-09 01:16:45', 'Findings here.', 'Recommendations.', 'Treatment', 1274, 0, 0),
('18-11-1-10', '11-1', '301-001', '170009', '2018-03-09 01:18:12', 'Findings here.', 'Recommendations.', 'Treatment', 900, 0, 0),
('18-11-1-11', '11-1', '301-001', '170009', '2018-03-09 01:18:13', 'Findings here.', 'Recommendations.', 'Treatment', 900, 0, 0),
('18-11-1-12', '11-1', '301-001', '170009', '2018-03-09 01:23:14', 'Findings here.', 'Recommendations.', 'Treatment', 712, 0, 0),
('18-1-1-31', '1-1', '301-001', '170009', '2018-03-09 01:24:00', 'Findings here.', 'Recommendations.', 'Treatment', 1836, 0, 0),
('18-11-1-13', '11-1', '301-001', '170009', '2018-03-09 01:24:42', 'read this', 'Recommendations.', 'Treatment', 1800, 0, 0),
('18-1-1-32', '1-1', '301-001', '170009', '2018-03-09 01:25:44', 'Findings here.', 'Recommendations.', 'Treatment', 936, 0, 0),
('18-6-1-4', '6-1', '301-001', '170009', '2018-03-09 01:28:33', 'Findings here.', 'Recommendations.', 'Treatment', 1836, 0, 0),
('18-4-1-2', '4-1', '301-001', '170009', '2018-03-09 01:29:53', 'Findings here.', 'Recommendations.', 'Treatment', 1836, 0, 0),
('18-13-1-1', '13-1', '301-001', '170009', '2018-03-13 02:36:35', 'HEREEE', 'HEREE', 'Treatment', 300, 624, 0),
('18-13-1-2', '13-1', '301-001', '170011', '2018-03-13 02:45:03', 'Findings here.', 'Recommendations.', 'Grooming', 100, 769, 669),
('18-14-1-1', '14-1', '301-001', '170009', '2018-03-13 03:11:47', 'Findings here.', 'Recommendations.', 'Treatment', 1000, 2500, 1500),
('18-14-1-2', '14-1', '301-001', '170009', '2018-03-13 03:12:39', 'Findings here.', 'Recommendations.', 'Treatment', 1000, 2200, 1200),
('18-14-1-3', '14-1', '301-001', '170009', '2018-03-13 03:17:22', 'Findings here.', 'Recommendations.', 'Treatment', 100, 1000, 900);

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
  MODIFY `clientid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `itemhistory`
--
ALTER TABLE `itemhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `itemstock`
--
ALTER TABLE `itemstock`
  MODIFY `itemid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `items_used`
--
ALTER TABLE `items_used`
  MODIFY `items_used_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170012;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
