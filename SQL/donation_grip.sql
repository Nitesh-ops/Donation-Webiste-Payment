-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 09:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation_grip`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `country`, `description`) VALUES
(1, 'Nitesh', 'Singh', 'india', 'niteshsingh.ns44@gmail.co', 'I am happy to donate'),
(2, 'Nitesh', 'Singh', 'India', 'nitesh@gmail.com', 'helo'),
(3, 'harry', 'potter', 'India', 'haar@gmail.com', 'hey!');

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `id` int(5) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `amount`) VALUES
(1, 'Nitesh', 'Singh', 'niteshsingh.ns44@gmail.com', 7009633270, 5000),
(14, 'dfdsf', 'fsdfdsf', 'dfsf', 87827, 20),
(15, 'hghjgjhg', 'hjgjgjh', 'jkklhjkh@gmail.com', 9287987, 20),
(16, 'Souravdeep', 'Singh', 'souravdeep@gmail.com', 87927779, 20),
(17, 'swati', 'kumari', 'swatikumari@gmail.com', 7894561234, 50),
(18, 'Harry', 'Potter', 'Harry@gmail.com', 789445065, 50),
(19, 'abhisek', 'kumar', 'abhisekk@gmail.com', 289878768, 70),
(20, 'Nitesh', 'Singh', 'nitesh@gmail.com', 9898386868, 20),
(21, 'chil', 'dren', 'children@gmail.com', 298989, 20),
(22, 'Harry', 'Sinfh', 'hs@gmail.com', 56826898, 20);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payer_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`) VALUES
(1, 'PAYID-MDDWCOY5M45254422211204C', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 20.00, 'USD', 'approved'),
(8, 'PAYID-MDEETEI1HM71349GD4141816', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 20.00, 'USD', 'approved'),
(9, 'PAYID-MDEOFHQ9D665171K5506441Y', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 20.00, 'USD', 'approved'),
(10, 'PAYID-MDEZE5Y0UH37135BC653052Y', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 20.00, 'USD', 'approved'),
(11, 'PAYID-MDEZJMI54L7117249133470W', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 50.00, 'USD', 'approved'),
(12, 'PAYID-MDEZNHY23K17401RN9822424', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 50.00, 'USD', 'approved'),
(13, 'PAYID-MDE255Q8BF91541XK507110R', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 70.00, 'USD', 'approved'),
(14, 'PAYID-MDE3MBI2PS001496A5867149', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 20.00, 'USD', 'approved'),
(15, 'PAYID-MDE3QRI9H170501SA8365304', 'MH6TM8FB4P4XY', 'sb-g247fl6506240@personal.example.com', 20.00, 'USD', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donator`
--
ALTER TABLE `donator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donator`
--
ALTER TABLE `donator`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
