-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 12:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `initial_password` varchar(255) NOT NULL,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `status`, `name`, `mobile`, `email`, `password`, `initial_password`, `user_type_id`) VALUES
(1, 1, 'atik Chougule', 848565695, 'afrozmadar2013@gmail.com', '3ed246ef6b2fd0313af0cea4c4810100', '5i3WXW3l', 1),
(26, 1, 'atik', 6545642310, 'atik@gmail.com', '7d76ff048f9e654244e162f50a9844c3', 'jdm0hfWk', 2);

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

CREATE TABLE `document_type` (
  `id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_type`
--

INSERT INTO `document_type` (`id`, `d_name`) VALUES
(1, '11 E Sketch'),
(2, '79 A & B Certificate'),
(3, 'AFFIDAVIT'),
(4, '	AGREEMENT COPY GREEN FIELD'),
(5, 'AMALGAMATION OF KHATA'),
(6, '	ANNUAL MAINTENANCE CHARGE'),
(7, 'APPLICATION ACKNOWLEDGEMENT COPY'),
(8, '	APPLICATION FORM CORRESPONDECES'),
(9, 'APPROVAL REPORT'),
(11, 'AUCTION CONFIRMATION LETTER');

-- --------------------------------------------------------

--
-- Table structure for table `document_upload`
--

CREATE TABLE `document_upload` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `dt_id` int(11) NOT NULL,
  `du_doc_no` bigint(20) NOT NULL,
  `du_description` varchar(255) NOT NULL,
  `pdf_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_upload`
--

INSERT INTO `document_upload` (`id`, `p_id`, `dt_id`, `du_doc_no`, `du_description`, `pdf_file`) VALUES
(1, 1, 2, 5465, 'askjhkj ljhljkk', 'Web_Coding_Development_All-in-One_for_Dummies_(_PDFDrive_).pdf'),
(2, 1, 3, 3233, 'sadf asdf asdf', 'Sign.jpg'),
(4, 3, 2, 3233, 'asffeszf fgvrg', 'html_tutorial.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) UNSIGNED NOT NULL,
  `pt_id` int(11) UNSIGNED NOT NULL,
  `pu_id` int(11) UNSIGNED NOT NULL,
  `prt_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_site_no` varchar(255) NOT NULL,
  `p_sas_no` bigint(20) NOT NULL,
  `p_size` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `p_Latitude` float NOT NULL,
  `p_longitude` float NOT NULL,
  `p_status` varchar(255) NOT NULL,
  `p_purchase_year` varchar(255) NOT NULL,
  `p_oname` varchar(255) NOT NULL,
  `p_omobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `pt_id`, `pu_id`, `prt_id`, `p_name`, `p_site_no`, `p_sas_no`, `p_size`, `address`, `p_Latitude`, `p_longitude`, `p_status`, `p_purchase_year`, `p_oname`, `p_omobile`) VALUES
(1, 3, 7, '406/30/F,NO-407', 'V D BANDI', '406', 1598452, 1830, 'BANGALORE,# 407 3RD FLOOR, RK EXOTICA, KEMPAPURA VILLAGE YELAHANKA HOBLI BANGALORE ', 13.0547, 77.5984, 'OWNED', '2006', 'V D BANDI', 848565690),
(3, 1, 7, '21', 'A D BANDI ', 'SY NO 21', 13, 41724, 'M.HOSAHALLI  VILLAGE JALA HOBLI BANGALORE NORTH ', 12, 33, 'OWNED', '2007', 'A D BANDI ', 7760969906);

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `pt_name` varchar(255) NOT NULL,
  `pt_sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`id`, `pt_name`, `pt_sname`) VALUES
(1, 'AGRICULTURAL', 'AGL'),
(2, 'COMMERCIAL', 'COM'),
(3, 'FLAT', 'FLT'),
(4, 'LAND', 'LND'),
(5, 'NON AGRICULTURAL', 'NAG'),
(6, 'PLOT', 'PLT'),
(7, 'RESIDENTIAL', 'RES'),
(9, 'SITE', 'SIT');

-- --------------------------------------------------------

--
-- Table structure for table `property_unit`
--

CREATE TABLE `property_unit` (
  `id` int(11) UNSIGNED NOT NULL,
  `pu_name` varchar(255) NOT NULL,
  `pu_sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_unit`
--

INSERT INTO `property_unit` (`id`, `pu_name`, `pu_sname`) VALUES
(1, 'ACERES', 'ACR'),
(2, 'GUNTA', 'GUN'),
(3, 'HECTOR', 'HET'),
(4, 'SQUARE METERS', 'SQM'),
(5, 'SQUARE YARDS', 'SQY'),
(7, 'SQURE FEETS', 'SQF');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `initial_password` varchar(255) NOT NULL,
  `user_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `mobile`, `email`, `password`, `initial_password`, `user_type_id`) VALUES
(1, 'admin', 9897256506, 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 'admin@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
(1, 'ADMIN'),
(2, 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`,`email`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `document_type`
--
ALTER TABLE `document_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_upload`
--
ALTER TABLE `document_upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `dt_id` (`dt_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pt_id` (`pt_id`),
  ADD KEY `pu_id` (`pu_id`),
  ADD KEY `pt_id_2` (`pt_id`,`pu_id`),
  ADD KEY `pt_id_3` (`pt_id`,`pu_id`),
  ADD KEY `pt_id_4` (`pt_id`,`pu_id`),
  ADD KEY `pt_id_5` (`pt_id`,`pu_id`),
  ADD KEY `pt_id_6` (`pt_id`,`pu_id`);

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_unit`
--
ALTER TABLE `property_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_2` (`mobile`,`email`),
  ADD KEY `user_type_id` (`user_type_id`),
  ADD KEY `mobile` (`mobile`,`email`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `document_type`
--
ALTER TABLE `document_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `document_upload`
--
ALTER TABLE `document_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_unit`
--
ALTER TABLE `property_unit`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
