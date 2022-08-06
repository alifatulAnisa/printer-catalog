-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 08:56 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entregreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brother`
--

CREATE TABLE `brother` (
  `b_id` int(250) NOT NULL,
  `type_id` varchar(250) NOT NULL,
  `b_model` varchar(250) NOT NULL,
  `b_type` varchar(250) NOT NULL,
  `b_colour` varchar(250) NOT NULL,
  `b_ds` varchar(250) NOT NULL,
  `b_price` varchar(250) NOT NULL,
  `bimage_location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brother`
--

INSERT INTO `brother` (`b_id`, `type_id`, `b_model`, `b_type`, `b_colour`, `b_ds`, `b_price`, `bimage_location`) VALUES
(9, '001', 'TN150BK', 'Toner Cartridge', 'Black', 'Page Yield 6600', '0', 'TN150BK.png'),
(10, '001', 'TN155Y', 'Toner Cartridge', 'Yellow', 'Page Yield 4000', '0', 'TN155Y.png'),
(11, '001', 'TN240M', 'Toner Cartridge', 'Magenta', 'Page Yield 1400', '0', 'TN240M.png'),
(12, '001', 'TN240Y', 'Toner Cartridge', 'Yellow', 'Page Yield 1400', '0', 'TN240Y.png'),
(13, '001', 'TN261M', 'Toner Cartridge', 'Magenta', 'Page Yield 1400', '0', 'TN261M.PNG'),
(14, '001', 'TN265C', 'Toner Cartridge', 'Cyan', 'Page Yield 2200', '0', 'TN265C.jpg'),
(15, '001', 'TN340Y', 'Toner Cartridge', 'Yellow', 'Page Yield 1500', '0', 'TN340Y.png'),
(16, '001', 'TN451BK', 'Toner Cartridge', 'Black', 'Page Yield 3000', '0', 'TN451BK.jpg'),
(17, '001', 'TN451M', 'Toner Cartridge', 'Magenta', 'Page Yield 1800', '0', 'TN451M.jpg'),
(18, '001', 'TN459C', 'Toner Cartridge', 'Cyan', 'Page Yield 9000', '0', 'TN459C.png'),
(19, '002', 'LC37BK', 'Ink Cartridge', 'Black', 'Page Yield 350', '0', 'LC37BK.png'),
(20, '002', 'LC38BK 2PK', 'Ink Cartridge', 'Black', 'Page Yield 300 X 2', '0', 'LC37BK2PK.png'),
(21, '002', 'LC37C', 'Ink Cartridge', 'Cyan', 'Page Yield 300', '0', 'LC37C.png'),
(22, '002', 'LC37M', 'Ink Cartridge', 'Magenta', 'Page Yield 300', '0', 'LC37M.PNG'),
(23, '002', 'LC39Y', 'Ink Cartridge', 'Yellow', 'Page Yield 260', '0', 'LC39Y.png'),
(24, '002', 'LC47BK', 'Ink Cartridge', 'Black', 'Page Yield 2400', '0', 'LC47BK.png'),
(26, '002', 'LC47M', 'Ink Cartridge', 'Magenta', 'Page Yield 400', '0', 'LC47M.png'),
(27, '002', 'LC67HYCL 3PK', 'Ink Cartridge', 'YellowMagentaCyan', 'Page Yield 750 x 3', '0', 'LC67HYCL3PK.PNG'),
(28, '002', 'LC38BK', 'Ink Cartridge', 'Black', 'Page Yield 300', '0', 'TN451M.png');

-- --------------------------------------------------------

--
-- Table structure for table `canon`
--

CREATE TABLE `canon` (
  `c_id` int(250) NOT NULL,
  `type_id` varchar(250) NOT NULL,
  `c_model` varchar(250) NOT NULL,
  `c_type` varchar(250) NOT NULL,
  `c_colour` varchar(250) NOT NULL,
  `c_ds` varchar(250) NOT NULL,
  `c_price` varchar(250) NOT NULL,
  `cimage_location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canon`
--

INSERT INTO `canon` (`c_id`, `type_id`, `c_model`, `c_type`, `c_colour`, `c_ds`, `c_price`, `cimage_location`) VALUES
(4, '002', 'PFI50B', 'Ink Cartridge', 'Blue', 'Size 80ml', '0', 'PFI50B.PNG'),
(5, '002', 'PFI50CO', 'Ink Cartridge', 'Chroma', 'Size 80ml', '0', 'PFI50CO.png'),
(6, '002', 'PFI50PC', 'Ink Cartridge', 'Cyan', 'Size 80ml', '0', 'PFI50CO.png'),
(7, '002', 'PFI50PM', 'Ink Cartridge', 'Magenta', 'Size 80ml', '0', 'PFI50PM.png'),
(8, '002', 'PGI29C', 'Ink Cartridge', 'Cyan', 'Size 80ml', '0', 'PGI29C.png'),
(9, '002', 'PGI29DGY', 'Ink Cartridge', 'Gray', 'Size 36ml', '0', 'PGI29DGY.png'),
(10, '002', 'PGI29PBK', 'Ink Cartridge', 'Black', 'Size 36ml', '0', 'PGI29PBK.PNG'),
(11, '002', 'PGI29R', 'Ink Cartridge', 'Red', 'Size 36ml', '0', 'PGI29R.png'),
(12, '002', 'PGI29Y', 'Ink Cartridge', 'Yellow', 'Size 36ml', '0', 'PGI29Y.PNG'),
(13, '002', 'PGI72Y', 'Ink Cartridge', 'Yellow', 'Size 14ml', '0', 'PGI72Y.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `f_name`, `l_name`, `email`, `phone`, `message`) VALUES
(1, 'alifatul', 'anisa', 'nisa.azlan@gmail.com', '0122609525', 'dtydersdrtfg'),
(2, 'ika', 'a', 'ika@gmail.com', '0122609525', 'anything'),
(3, 'anisa', 'azlan', 'luqhakeem18@gmail.com', '0122609525', 'dbqwfibejwnfiqehi'),
(4, 'ika', 'azlan', 'ika@gmail.com', '34567', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

CREATE TABLE `hp` (
  `hp_id` int(250) NOT NULL,
  `type_id` varchar(250) NOT NULL,
  `hp_model` varchar(250) NOT NULL,
  `hp_type` varchar(250) NOT NULL,
  `hp_colour` varchar(250) NOT NULL,
  `hp_ds` varchar(1000) NOT NULL,
  `hp_price` double NOT NULL,
  `image_location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hp`
--

INSERT INTO `hp` (`hp_id`, `type_id`, `hp_model`, `hp_type`, `hp_colour`, `hp_ds`, `hp_price`, `image_location`) VALUES
(85, '002', 'CN621AA', 'Ink Cartridge', 'Black', 'Page Yield 3000', 0, 'CN621AA.png'),
(86, '002', 'CN622AA', 'Ink cartridge', 'Cyan', 'Page Yield 2500', 0, 'CN622AA.png'),
(87, '002', 'CN623AA', 'Ink Cartridge', 'Magenta', 'Page Yield 2500', 0, 'CN623AA.png'),
(88, '002', 'CN624AA', 'Ink Cartridge', 'Yellow', 'Page Yield 2500', 0, 'CN624AA.png'),
(89, '002', 'CN626AA', 'Ink Cartridge', 'Cyan', 'Page Yield 6600', 0, 'CN626AA.png'),
(90, '002', 'CN627AA', 'Ink Cartridge', 'Magenta', 'Page Yield 6600', 0, 'CN627AA.png'),
(91, '002', 'CN625AA', 'Ink Cartridge', 'Black', 'Page Yield 6600', 0, 'CN625AA.png'),
(92, '002', 'CN628AA', 'Ink Cartridge', 'Yellow', 'Page Yield 6600', 0, 'CN628AA.png'),
(93, '002', 'D8J08A', 'Ink Cartridge', 'Magenta', 'Page Yield 6000', 0, 'D8J08A.png'),
(94, '002', 'D8J07A', 'Ink Cartridge', 'Cyan', 'Page Yield 6000', 0, 'D8J07A.png'),
(95, '001', 'CB541A', 'Toner Cartridge', 'Cyan', 'Page Yield 1400', 0, 'CB541A.png'),
(96, '001', 'CB542A', 'Toner Cartridge', 'Yellow', 'Page Yield 1400', 0, 'CB542A.png'),
(97, '001', 'CB543A', 'Toner Cartridge', 'Magenta', 'Page Yield 1400', 0, 'CB543A.png'),
(98, '001', 'CE311A', 'Toner Cartridge', 'Cyan', 'Page Yield 1000', 0, 'CE311A.png'),
(99, '001', 'CE312A', 'Toner Cartridge', 'Yellow', 'Page Yield 1000', 0, 'CE312A.png'),
(100, '001', 'CE313A', 'Toner Cartridge', 'Magenta', 'Page Yield 1000', 0, 'CE313A.png'),
(101, '001', 'CF353A', 'Toner Cartridge', 'Magenta', 'Page Yield 1000', 0, 'CF353A.png'),
(102, '001', 'CF501A', 'Toner Cartridge', 'Cyan', 'Page Yield 1300', 0, 'CF501A.png'),
(103, '001', 'CF503X', 'Toner Cartridge', 'Magenta', 'Page Yield 2500', 0, 'CF503X.png'),
(104, '001', 'CF511A', 'Toner Cartridge', 'Magenta', 'Page Yield 900', 0, 'CF511A.png'),
(106, '', 'BT1235', 'ink bottle', 'Cyan', 'ASDFG', 12, 'banggali.png');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` varchar(250) NOT NULL,
  `type_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
('001', 'Toner Cartridge'),
('002', 'Ink Cartridge');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brother`
--
ALTER TABLE `brother`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `canon`
--
ALTER TABLE `canon`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`hp_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brother`
--
ALTER TABLE `brother`
  MODIFY `b_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `canon`
--
ALTER TABLE `canon`
  MODIFY `c_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hp`
--
ALTER TABLE `hp`
  MODIFY `hp_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
