-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 11:04 AM
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
  `id` int(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
(1001, 'ikacantik');

-- --------------------------------------------------------

--
-- Table structure for table `brother`
--

CREATE TABLE `brother` (
  `b_id` int(250) NOT NULL,
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

INSERT INTO `brother` (`b_id`, `b_model`, `b_type`, `b_colour`, `b_ds`, `b_price`, `bimage_location`) VALUES
(2, 'WE123', 'toner', 'Yellow', 'page yield 1300 size 23ml', '30', ''),
(3, 'B3090', 'cartridge', 'Cyan', 'page yield 1300 size 14ml', '30', 'aesthetic-desktop-wallpaper-best-of-desktop-wallpaper-background-4chan-1920c2971080-headers-of-aesthetic-desktop-wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `canon`
--

CREATE TABLE `canon` (
  `c_id` int(250) NOT NULL,
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

INSERT INTO `canon` (`c_id`, `c_model`, `c_type`, `c_colour`, `c_ds`, `c_price`, `cimage_location`) VALUES
(1, 'C2340', 'ink bottle', 'Cyan', 'page yield 1000', '345', 'photo-1467810563316-b5476525c0f9.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `epson`
--

CREATE TABLE `epson` (
  `e_id` int(250) NOT NULL,
  `e_model` varchar(250) NOT NULL,
  `e_type` varchar(250) NOT NULL,
  `e_colour` varchar(250) NOT NULL,
  `e_ds` varchar(250) NOT NULL,
  `e_price` varchar(250) NOT NULL,
  `eimage_location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epson`
--

INSERT INTO `epson` (`e_id`, `e_model`, `e_type`, `e_colour`, `e_ds`, `e_price`, `eimage_location`) VALUES
(2, 'E4579', 'ink bottle', 'Cyan', 'page yield 320', '234', 'street2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

CREATE TABLE `hp` (
  `hp_id` int(250) NOT NULL,
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

INSERT INTO `hp` (`hp_id`, `hp_model`, `hp_type`, `hp_colour`, `hp_ds`, `hp_price`, `image_location`) VALUES
(77, 'BT1234', 'ink bottle', 'Black', 'page yield 4000', 100, 'aesthetic-desktop-wallpaper-best-of-desktop-wallpaper-background-4chan-1920c2971080-headers-of-aesthetic-desktop-wallpaper.jpg'),
(78, 'HP100', 'toner', 'Magenta', 'page yield 500', 450, 'korean4.png');

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
-- Indexes for table `epson`
--
ALTER TABLE `epson`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`hp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
--
-- AUTO_INCREMENT for table `brother`
--
ALTER TABLE `brother`
  MODIFY `b_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `canon`
--
ALTER TABLE `canon`
  MODIFY `c_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epson`
--
ALTER TABLE `epson`
  MODIFY `e_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hp`
--
ALTER TABLE `hp`
  MODIFY `hp_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
