-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2016 at 01:16 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licence`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(255) NOT NULL,
  `resetkey` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `resetkey`) VALUES
(1, 'admin@playspread.com', 'b53f45b7b123ea44090f543deeda30e1a4b2bd2acc75513e37ddbbd3ef658293', 'fab0b3b30a9e4726b9722694a70bac12');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(1) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `transporters_id` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `licence_category` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscription_plan` varchar(100) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `licence_id` varchar(20) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `renewal_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `superadmins`
--

CREATE TABLE `superadmins` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmins`
--

INSERT INTO `superadmins` (`id`, `email_address`, `password`, `name`) VALUES
(1, 'admin@playspread.com', 'admin@playspread.com', 'Playspread Nig Ltd');

-- --------------------------------------------------------

--
-- Table structure for table `transporters`
--

CREATE TABLE `transporters` (
  `transporters_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `subscription_plan` varchar(100) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `licence_category` varchar(100) DEFAULT NULL,
  `licence_id` varchar(50) DEFAULT NULL,
  `amount_paid` varchar(100) DEFAULT NULL,
  `renewal_date` varchar(20) DEFAULT NULL,
  `resetkey` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transporters`
--

INSERT INTO `transporters` (`transporters_id`, `full_name`, `email`, `phone_number`, `password`, `subscription_plan`, `duration`, `licence_category`, `licence_id`, `amount_paid`, `renewal_date`, `resetkey`) VALUES
(1, 'Akinde Oluwafemi', 'transporter@playspread.com', '07012773629', 'eb89ef0b527b94fef7fce83eb931703e69c331a6e0dcaa1f6d3ed58bce235f2c', 'Monthly', '3 Months', 'Mini Coach', 'Min-05012017-1dfa0', '13,350.00', '05-01-2017', 'df561a8630d43b3aedc04700183d0559');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(10) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `paid_date` datetime NOT NULL,
  `renewal_date` varchar(100) NOT NULL,
  `licence_id` varchar(100) NOT NULL,
  `licence_category` varchar(100) NOT NULL,
  `subscription_plan` varchar(100) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `resetkey` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `company_name`, `contact_person`, `email_address`, `password`, `phone_number`, `paid_date`, `renewal_date`, `licence_id`, `licence_category`, `subscription_plan`, `duration`, `amount_paid`, `resetkey`) VALUES
(1, 'Playspread Nigeria Limited', 'Akinde Oluwafemi', 'user@playspread.com', '03a509415c7e65ad83839ee84a78a7707216d34e3635191f25e9709a166ad502', '07012278632', '2016-10-07 11:45:32', '07-10-2017', 'Club-07102017-4f5ae', 'Clubs', 'Yearly', '1 Year', '180,900.00', '8cb96b171005d7b14b0c72c73ec3def1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `superadmins`
--
ALTER TABLE `superadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporters`
--
ALTER TABLE `transporters`
  ADD PRIMARY KEY (`transporters_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `superadmins`
--
ALTER TABLE `superadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `transporters_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
