-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 06:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `login` varchar(250) NOT NULL,
  `createdBY` varchar(250) NOT NULL,
  `modifiedBY` varchar(250) NOT NULL,
  `createDateTime` varchar(250) NOT NULL DEFAULT current_timestamp(),
  `modifiedDateTime` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `age`, `contact_no`, `address`, `item_code`, `login`, `createdBY`, `modifiedBY`, `createDateTime`, `modifiedDateTime`) VALUES
(27, 'ankit', '23', '8371738944', 'dimond city', '201', 'ank123@gmail.com', 'root', 'root', '12/08/2019 09:32:58', '12/08/2019 09:32:58'),
(29, 'demo', '55', '124568957', 'gigiiig', '670', 'Demo', 'root', 'root', '12/10/2019 11:00:38', '12/10/2019 11:00:38'),
(43, 'ankit', '22', '798889555567', 'demo', '', 'ank123@gmail.com', 'root', 'root', '12/22/2019 12:51:15', '12/22/2019 12:51:15'),
(44, 'savan', '22', '7658564654', 'gfdsgvfdgfdg', '', 'ank123@gmail.com', 'root', 'root', '12/22/2019 01:10:02', '12/22/2019 01:10:02'),
(45, 'savan', '22', '7658564654', 'gfdsgvfdgfdg', '', 'ank1253@gmail.com', 'root', 'root', '12/22/2019 01:10:43', '12/22/2019 01:10:43'),
(46, 'savan', '22', '7658564654', 'gfdsgvfdgfdg', '', 'ank123@gmail.com', 'root', 'root', '12/22/2019 01:11:06', '12/22/2019 01:11:06'),
(47, 'ankit', '22', '8875436325', 'manavta nagar', '', 'ank123@gmail.com', 'root', 'root', '12/22/2019 01:11:56', '12/22/2019 01:11:56'),
(48, 'ankit', '22', '8875436325', 'manavta nagar', '', 'ank123@gmail.com', 'root', 'root', '12/22/2019 01:12:13', '12/22/2019 01:12:13'),
(49, 'ankit', '22', '8371738944', 'demo', '', 'ankd123@gmail.com', 'root', 'root', '12/22/2019 01:31:20', '12/22/2019 01:31:20'),
(50, 'dbd', '44', '555555', 'test', '', 'demo@demo.com', 'root', 'root', '09/17/2020 09:46:34', '09/17/2020 09:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_date` varchar(250) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `booking` int(20) NOT NULL COMMENT '''1BOOK'', ''0CANCEL''',
  `createdBY` varchar(250) NOT NULL,
  `modifiedBY` varchar(250) NOT NULL,
  `creatDateTime` varchar(250) NOT NULL DEFAULT current_timestamp(),
  `modifiedDateTime` varchar(250) NOT NULL DEFAULT current_timestamp(),
  `login` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `product_id`, `customer_id`, `payment_date`, `amount`, `booking`, `createdBY`, `modifiedBY`, `creatDateTime`, `modifiedDateTime`, `login`) VALUES
(1, 4, 27, '2019-12-07', '222', 1, 'root', 'root', '12/08/2019 10:02:05', '12/08/2019 10:02:05', 'ank123'),
(2, 3, 28, '2019-12-07', '250', 1, 'root', 'root', '12/08/2019 11:45:19', '12/08/2019 11:45:19', 'shub1233'),
(3, 3, 27, '2019-12-07', '224', 1, 'root', 'root', '12/08/2019 12:49:48', '12/08/2019 12:49:48', 'ank123'),
(6, 4, 27, '2019-12-18', '222', 1, 'ank123@gmail.com', 'ank123@gmail.com', '12/17/2019 11:32:21', '12/17/2019 11:32:21', 'ank123@gmail.com'),
(7, 7, 48, '2020-10-02', '432', 0, 'ank123@gmail.com', 'ank123@gmail.com', '09/17/2020 09:16:15', '09/17/2020 09:16:15', 'ank123@gmail.com'),
(8, 3, 0, '2020-09-09', '250', 0, 'demo@demo.com', 'demo@demo.com', '09/17/2020 09:40:37', '09/17/2020 09:40:37', 'demo@demo.com'),
(9, 7, 0, '2020-09-25', '432', 0, 'demo@demo.com', 'demo@demo.com', '09/17/2020 09:41:47', '09/17/2020 09:41:47', 'demo@demo.com'),
(10, 3, 0, '2020-09-18', '250', 0, 'demo@demo.com', 'demo@demo.com', '09/17/2020 09:43:04', '09/17/2020 09:43:04', 'demo@demo.com'),
(11, 3, 0, '2020-09-18', '250', 0, 'demo@demo.com', 'demo@demo.com', '09/17/2020 09:43:45', '09/17/2020 09:43:45', 'demo@demo.com'),
(12, 3, 0, '2020-09-23', '250', 0, 'demo@demo.com', 'demo@demo.com', '09/17/2020 09:44:00', '09/17/2020 09:44:00', 'demo@demo.com'),
(13, 3, 0, '2020-10-01', '250', 0, 'demo@demo.com', 'demo@demo.com', '09/17/2020 09:44:29', '09/17/2020 09:44:29', 'demo@demo.com'),
(14, 3, 50, '2020-09-30', '250', 0, 'demo@demo.com', 'demo@demo.com', '09/17/2020 09:47:06', '09/17/2020 09:47:06', 'demo@demo.com'),
(15, 3, 50, '2020-09-30', '250', 0, 'demo@demo.com', 'demo@demo.com', '09/17/2020 09:47:46', '09/17/2020 09:47:46', 'demo@demo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_quantity` varchar(250) NOT NULL,
  `product_choice` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `createdBY` varchar(250) NOT NULL,
  `modifiedBY` varchar(250) NOT NULL,
  `creteDateTime` varchar(250) NOT NULL DEFAULT current_timestamp(),
  `modifiedDate` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `item_code`, `product_name`, `product_quantity`, `product_choice`, `price`, `image`, `createdBY`, `modifiedBY`, `creteDateTime`, `modifiedDate`) VALUES
(3, '3002', 'watch', '2', 'demo', '250', 'img4.jpg', 'root', 'root', '12/06/2019 10:43:11', '12/06/2019 10:43:11'),
(4, '201234445', 'tsirta45', '545', 'dgbjasc45', '222454545', 'banner-01.jpg', 'root', 'root', '12/22/2019 11:12:56', '12/22/2019 11:12:56'),
(7, 'xsxs2235', 'tsirta', '22', 'kbkbkbgk', '432', 'add-img-01.jpg', 'root', 'root', '12/22/2019 01:32:46', '12/22/2019 01:32:46'),
(10, '3001', 'tsirta45', '5', 'demo', '1231', 'big-img-01.jpg', 'savan123@gmail.com', 'savan123@gmail.com', '12/23/2019 08:51:21', '12/23/2019 08:51:21'),
(11, '54', 'fcewcffdc', '7', 'fsdfvdc', '222', 'gallery-img-12.jpg', 'savan123@gmail.com', 'savan123@gmail.com', '12/23/2019 08:52:19', '12/23/2019 08:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `createdBY` varchar(250) NOT NULL,
  `modifiedBY` varchar(250) NOT NULL,
  `createDateTime` varchar(250) NOT NULL DEFAULT current_timestamp(),
  `modifiedDateTime` varchar(250) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `role`, `login`, `password`, `createdBY`, `modifiedBY`, `createDateTime`, `modifiedDateTime`) VALUES
(1, 1, 'admin@admin.com', '12345', 'root', 'root', '12/03/2019 09:16:02', '12/03/2019 09:16:02'),
(28, 3, 'Demo', 'Demo', 'root', 'root', '12/10/2019 11:00:38', '12/10/2019 11:00:38'),
(53, 3, 'demo@demo.com', '12345', 'root', 'root', '09/17/2020 09:46:34', '09/17/2020 09:46:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
