-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 01:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `dateOfAppointment` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `patient_id`, `dateOfAppointment`, `created_at`, `status`) VALUES
(4, 17, '2021-10-20', '2021-10-15 14:48:47', 1),
(5, 19, '2021-10-25', '2021-10-20 08:06:08', 1),
(6, 19, '2021-10-25', '2021-10-20 08:06:08', 1),
(7, 21, '2021-10-27', '2021-10-20 08:06:19', 1),
(8, 21, '2021-10-27', '2021-10-20 08:06:19', 1),
(9, 17, '2021-11-01', '2021-10-20 08:06:36', 1),
(10, 17, '2021-11-01', '2021-10-20 08:06:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(255) NOT NULL,
  `affected_gender` enum('Male','Female','All') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`, `affected_gender`, `created_at`, `status`) VALUES
(3, '', 'Female', '2021-10-22 08:09:45', 1),
(4, 'Breast Cysts', 'Female', '2021-10-20 14:23:35', 1),
(5, 'Breast Cysts', 'Female', '2021-10-20 14:24:29', 1),
(6, 'Breast Cysts', 'Female', '2021-10-20 14:24:29', 1),
(7, 'High Blood Pressure', 'All', '2021-10-20 14:25:22', 1),
(8, 'High Blood Pressure', 'All', '2021-10-20 14:25:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dosage`
--

CREATE TABLE `dosage` (
  `dosage_id` int(11) NOT NULL,
  `dosage_name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosage`
--

INSERT INTO `dosage` (`dosage_id`, `dosage_name`, `created_at`, `status`) VALUES
(7, 'Pregnant women', '2021-10-15 13:26:31', 1),
(8, 'Pregnant women', '2021-10-15 13:26:31', 1),
(9, 'AIDs patients', '2021-10-15 13:34:59', 1),
(10, 'AIDs patients', '2021-10-15 13:34:59', 1),
(11, 'Children', '2021-10-20 07:29:15', 1),
(12, 'Children', '2021-10-20 07:29:16', 1),
(13, 'Adults', '2021-10-20 07:29:25', 1),
(14, 'Adults', '2021-10-20 07:29:25', 1),
(15, 'All patients', '2021-10-20 07:43:22', 1),
(16, 'All patients', '2021-10-20 07:43:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(40) NOT NULL,
  `employee_gender` enum('Male','Female') NOT NULL,
  `employee_dateOfBirth` date NOT NULL,
  `employee_contact` varchar(20) NOT NULL,
  `employee_email` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `employee_password` varchar(20) NOT NULL,
  `employee_dateOfEntry` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `employee_gender`, `employee_dateOfBirth`, `employee_contact`, `employee_email`, `Address`, `employee_password`, `employee_dateOfEntry`, `created_at`, `status`) VALUES
(71, 'mae pine', 'Female', '1990-11-21', '0783655366', 'pmae@gmail.com', 'Kololo', 'pmae2', '2017-05-05', '2021-10-18 06:54:06', 1),
(72, 'Magumba John', 'Male', '1984-06-26', '0789445221', 'magumbaj@gmail.com', 'Kiwonvu', 'magumba1', '2019-10-30', '2021-10-20 07:02:47', 1),
(73, 'Magumba John', 'Male', '1984-06-26', '0789445221', 'magumbaj@gmail.com', 'Kiwonvu', 'magumba1', '2019-10-30', '2021-10-20 07:02:47', 1),
(74, 'Okello Brian', 'Male', '1999-09-08', '0773459002', 'okellobrian@gmail.com', 'Kikoni', 'okello1', '2020-01-04', '2021-10-20 07:05:47', 1),
(75, 'Okello Brian', 'Male', '1999-09-08', '0773459002', 'okellobrian@gmail.com', 'Kikoni', 'okello1', '2020-01-04', '2021-10-20 07:05:47', 1),
(76, 'Kawunde Rashid', 'Male', '1987-11-23', '0783655366', 'kawunder@gmail.com', 'Kiwonvu', 'rashid', '2020-07-09', '2021-10-21 09:38:15', 1),
(77, 'Kawunde Rashid', 'Male', '1987-11-23', '0783655366', 'kawunder@gmail.com', 'Kiwonvu', 'rashid', '2020-07-09', '2021-10-21 09:38:15', 1),
(78, 'Kawunde Rashid', 'Male', '1987-11-23', '0783655366', 'kawunder@gmail.com', 'Kiwonvu', 'kawunde', '2020-07-09', '2021-10-21 09:52:06', 1),
(79, 'Kawunde Rashid', 'Male', '1987-11-23', '0783655366', 'kawunder@gmail.com', 'Kiwonvu', 'kawunde', '2020-07-09', '2021-10-21 09:52:06', 1),
(80, 'Scarlet Ortiz', 'Female', '1984-07-26', '07899365435', 'scarlet0@gmail.com', 'Kikoni', 'scarlet', '2019-12-05', '2021-10-21 10:46:14', 1),
(81, 'Scarlet Ortiz', 'Female', '1984-07-26', '07899365435', 'scarlet0@gmail.com', 'Kikoni', 'scarlet', '2019-12-05', '2021-10-21 10:46:14', 1),
(82, 'Scarlet Ortiz', 'Female', '1984-07-26', '07899365435', 'scarlet0@gmail.com', 'Kikoni', 'ortiz', '2019-12-05', '2021-10-21 11:02:23', 1),
(83, 'Scarlet Ortiz', 'Female', '1984-07-26', '07899365435', 'scarlet0@gmail.com', 'Kikoni', 'ortiz', '2019-12-05', '2021-10-21 11:02:23', 1),
(84, 'Scarlet Ortiz', 'Female', '1984-07-26', '07899365435', 'scarlet0@gmail.com', 'Kikoni', 'mimi', '2019-12-05', '2021-10-21 11:05:32', 1),
(85, 'Scarlet Ortiz', 'Female', '1984-07-26', '07899365435', 'scarlet0@gmail.com', 'Kikoni', 'mimi', '2019-12-05', '2021-10-21 11:05:32', 1),
(86, 'mymytuty ututyutu', 'Male', '1997-11-19', '07899365435', 'hcvxcvbfgfdg@gmail.com', 'sdffwfsdf', 'zxsfafasdfvxvx', '2021-10-02', '2021-10-21 11:06:55', 1),
(87, 'mymytuty ututyutu', 'Male', '1997-11-19', '07899365435', 'hcvxcvbfgfdg@gmail.com', 'sdffwfsdf', 'zxsfafasdfvxvx', '2021-10-02', '2021-10-21 11:06:55', 1),
(88, 'cv vxcv', 'Male', '2021-09-29', '0783655366', 'vgdgdsfcb@gmail.com', 'qwerwre', 'sddssgdgdg', '2021-10-06', '2021-10-21 12:01:18', 1),
(89, 'cv vxcv', 'Male', '2021-09-29', '0783655366', 'vgdgdsfcb@gmail.com', 'qwerwre', 'sddssgdgdg', '2021-10-06', '2021-10-21 12:01:19', 1),
(90, 'cv vxcv', 'Male', '2021-09-29', '0783655366', 'vgdgdsfcb@gmail.com', 'qwerwre', 'zczxcvxvvv', '2021-10-06', '2021-10-21 12:08:15', 1),
(91, 'cv vxcv', 'Male', '2021-09-29', '0783655366', 'vgdgdsfcb@gmail.com', 'qwerwre', 'zczxcvxvvv', '2021-10-06', '2021-10-21 12:08:16', 1),
(92, 'Atusasiire Zipporah', 'Female', '2000-11-11', '0773459002', 'zippie@gmail.com', 'Kikoni', 'xvxcvbxcbbbxcxxb', '2020-09-09', '2021-10-21 12:11:55', 1),
(93, 'Atusasiire Zipporah', 'Female', '2000-11-11', '0773459002', 'zippie@gmail.com', 'Kikoni', 'xvxcvbxcbbbxcxxb', '2020-09-09', '2021-10-21 12:11:55', 1),
(94, 'cv vxcv', 'Male', '2021-09-29', '0783655366', 'vgdgdsfcb@gmail.com', 'qwerwre', 'zczxcvxvvv', '2021-10-06', '2021-10-21 12:13:35', 1),
(95, 'cv vxcv', 'Male', '2021-09-29', '0783655366', 'vgdgdsfcb@gmail.com', 'qwerwre', 'zczxcvxvvv', '2021-10-06', '2021-10-21 12:13:35', 1),
(96, 'cv vxcv', 'Male', '2021-09-29', '0783655366', 'vgdgdsfcb@gmail.com', 'qwerwre', '1111', '2021-10-06', '2021-10-21 12:14:03', 1),
(97, 'cv vxcv', 'Male', '2021-09-29', '0783655366', 'vgdgdsfcb@gmail.com', 'qwerwre', '1111', '2021-10-06', '2021-10-21 12:14:03', 1),
(98, 'mulondo Ian', 'Male', '2000-11-22', '0789445221', 'mulondo@gmail.com', 'qwerwre', 'mulondo', '2021-01-13', '2021-10-21 12:16:32', 1),
(99, 'mulondo Ian', 'Male', '2000-11-22', '0789445221', 'mulondo@gmail.com', 'qwerwre', 'mulondo', '2021-01-13', '2021-10-21 12:16:32', 1),
(100, 'mulondo Ian', 'Male', '2000-11-22', '0789445221', 'mulondo@gmail.com', 'qwerwre', 'mulondo', '2021-01-13', '2021-10-21 12:18:31', 1),
(101, 'mulondo Ian', 'Male', '2000-11-22', '0789445221', 'mulondo@gmail.com', 'qwerwre', 'mulondo', '2021-01-13', '2021-10-21 12:18:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(40) NOT NULL,
  `patient_gender` enum('Male','Female') NOT NULL,
  `patient_disease` varchar(30) NOT NULL,
  `patient_address` varchar(40) NOT NULL,
  `patient_contact` varchar(20) NOT NULL,
  `patient_email` varchar(40) NOT NULL,
  `patient_dateOfBirth` date NOT NULL,
  `patient_dateOfEntry` date NOT NULL,
  `patient_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_gender`, `patient_disease`, `patient_address`, `patient_contact`, `patient_email`, `patient_dateOfBirth`, `patient_dateOfEntry`, `patient_description`, `created_at`, `status`) VALUES
(17, 'Janet Jackson', 'Male', '', '', '', '', '0000-00-00', '0000-00-00', '', '2021-10-20 06:30:48', 1),
(18, '', 'Male', '', 'US', '', '', '0000-00-00', '0000-00-00', '', '2021-10-20 06:31:21', 1),
(19, 'Kiwanuka Fahad', 'Male', 'dfsdf sd', 'Kiwatule', '0790123456', 'kiwanukaf@gmail.com', '1995-06-29', '2020-11-23', 'comes from far', '2021-10-20 07:10:47', 1),
(20, 'Kiwanuka Fahad', 'Male', 'dfsdf sd', 'Kiwatule', '0790123456', 'kiwanukaf@gmail.com', '1995-06-29', '2020-11-23', 'comes from far', '2021-10-20 07:10:47', 1),
(21, 'Kimbugwe Isaac', 'Male', 'fdssfsf f', 'Mukono', '0753111999', 'kimbugwe1@gmail.com', '2000-01-01', '2020-06-10', 'comes in every month', '2021-10-20 07:13:18', 1),
(22, 'Kimbugwe Isaac', 'Male', 'fdssfsf f', 'Mukono', '0753111999', 'kimbugwe1@gmail.com', '2000-01-01', '2020-06-10', 'comes in every month', '2021-10-20 07:13:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `payed_amount` int(11) NOT NULL,
  `remaining_amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `productUnit_id` int(11) NOT NULL,
  `productCategory_id` int(11) NOT NULL,
  `dosage_id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `product_costPrice` int(11) NOT NULL,
  `product_sellingPrice` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_manufacturer` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `stock_id`, `productUnit_id`, `productCategory_id`, `dosage_id`, `product_name`, `product_costPrice`, `product_sellingPrice`, `product_description`, `product_manufacturer`, `created_at`, `status`) VALUES
(37, 2022, 20, 19, 8, 'panadol', 5000, 7000, '2 x 3', 'earth natural life', '2021-10-15 14:42:50', 1),
(38, 2022, 20, 19, 8, 'panadol', 5000, 7000, '2 x 3', 'earth natural life', '2021-10-15 14:42:50', 1),
(39, 2023, 13, 22, 7, 'cough syrup', 12000, 15000, '1cupX3', 'earth natural life', '2021-10-20 07:28:46', 1),
(40, 2023, 13, 22, 7, 'cough syrup', 12000, 15000, '1cupX3', 'earth natural life', '2021-10-20 07:28:46', 1),
(41, 2022, 14, 24, 14, 'Cinnamon', 5000, 7000, 'take in hot tea', 'earth natural life', '2021-10-20 07:42:43', 1),
(42, 2022, 14, 24, 14, 'Cinnamon', 5000, 7000, 'take in hot tea', 'earth natural life', '2021-10-20 07:42:43', 1),
(43, 2023, 14, 24, 16, 'Cloves', 12000, 14000, '1 tea spoon X 2', 'earth natural life', '2021-10-20 07:44:59', 1),
(44, 2023, 14, 24, 16, 'Cloves', 12000, 14000, '1 tea spoon X 2', 'earth natural life', '2021-10-20 07:44:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `productCategory_id` int(11) NOT NULL,
  `productCategory_name` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`productCategory_id`, `productCategory_name`, `created_at`, `status`) VALUES
(20, 'herb', '2021-10-20 06:33:00', 1),
(22, 'Syrup', '2021-10-15 14:38:29', 1),
(24, 'Powder', '2021-10-15 14:38:33', 1),
(27, 'soap', '2021-10-15 14:38:56', 1),
(28, 'soap', '2021-10-15 14:38:56', 1),
(29, 'jelly', '2021-10-15 14:39:04', 1),
(30, 'jelly', '2021-10-15 14:39:04', 1),
(31, 'tablets', '2021-10-18 08:11:43', 1),
(32, 'tablets', '2021-10-18 08:11:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productunit`
--

CREATE TABLE `productunit` (
  `productUnit_id` int(11) NOT NULL,
  `productUnit_name` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productunit`
--

INSERT INTO `productunit` (`productUnit_id`, `productUnit_name`, `created_at`, `status`) VALUES
(13, 'ltrs', '2021-10-20 06:32:02', 1),
(14, 'gms', '2021-10-15 14:36:46', 1),
(15, 'strip', '2021-10-15 14:36:49', 1),
(16, 'strip', '2021-10-15 14:36:49', 1),
(19, 'box', '2021-10-15 14:36:54', 1),
(20, 'box', '2021-10-15 14:36:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `productCategory_id` int(11) NOT NULL,
  `productUnit_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `remaining_amount` int(11) NOT NULL,
  `dateOfSale` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `employee_id`, `patient_id`, `product_id`, `productCategory_id`, `productUnit_id`, `stock_id`, `quantity`, `total_amount`, `paid_amount`, `remaining_amount`, `dateOfSale`, `created_at`, `status`) VALUES
(30, 77, 22, 44, 24, 14, 10000, 2, 0, 10000, 0, '2021-10-19 00:00:00', '2021-10-22 08:01:53', 1),
(31, 77, 22, 44, 24, 14, 10000, 2, 0, 10000, 0, '2021-10-19 00:00:00', '2021-10-22 08:01:54', 1),
(32, 74, 22, 42, 24, 14, 0, 45, 0, 3000, 0, '2021-10-20 00:00:00', '2021-10-22 09:36:37', 1),
(33, 74, 22, 42, 24, 14, 0, 45, 0, 3000, 0, '2021-10-20 00:00:00', '2021-10-22 09:36:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `stock_expiryDate` date NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `remaining_stock` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `stock_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `productCategory_id` int(11) NOT NULL,
  `productUnit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `employee_id`, `stock_expiryDate`, `stock_quantity`, `remaining_stock`, `unit_price`, `stock_description`, `created_at`, `status`, `productCategory_id`, `productUnit_id`) VALUES
(21, 40, 74, '2022-03-30', 25, 0, 6000, 'keep in a cool place', '2021-10-21 09:06:50', 1, 20, 13),
(22, 40, 74, '2022-03-30', 25, 0, 6000, 'keep in a cool place', '2021-10-21 09:06:51', 1, 20, 13),
(23, 37, 77, '2022-11-22', 100, 0, 1000, 'keep in a cool place', '2021-10-22 09:45:49', 1, 31, 16),
(24, 37, 77, '2022-11-22', 100, 0, 1000, 'keep in a cool place', '2021-10-22 09:45:49', 1, 31, 16),
(25, 40, 98, '2022-10-22', 25, 0, 5000, 'keep in a cool place', '2021-10-22 09:48:19', 1, 20, 13),
(26, 40, 98, '2022-10-22', 25, 0, 5000, 'keep in a cool place', '2021-10-22 09:48:19', 1, 20, 13);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `treatment_status` enum('Completed','Ongoing') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatment_id`, `patient_id`, `product_id`, `start_date`, `end_date`, `treatment_status`, `created_at`, `status`) VALUES
(11, 20, 40, '2021-10-15', '2021-10-22', '', '2021-10-21 12:32:43', 0),
(12, 20, 40, '2021-10-25', '2021-11-07', '', '2021-10-20 07:46:46', 1),
(13, 17, 43, '2021-10-20', '2021-10-23', '', '2021-10-20 13:18:11', 0),
(14, 17, 43, '2021-10-21', '2021-10-23', '', '2021-10-20 08:01:45', 1),
(15, 17, 39, '2021-10-21', '2021-10-22', '', '2021-10-20 14:41:19', 1),
(16, 17, 39, '2021-10-21', '2021-10-22', '', '2021-10-20 14:41:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_name`, `user_password`, `created_at`, `status`) VALUES
(26, 'zippie@gmail.com', 'azipporah', 'zipporah', '2021-10-18 12:03:22', 1),
(27, '', '', '', '2021-10-19 11:21:30', 1),
(28, 'caro@gmail.com', 'caro', 'caro', '2021-10-19 11:50:45', 1),
(29, 'magumba@gmail.com', 'magumba', 'magumba', '2021-10-20 06:09:49', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `dosage`
--
ALTER TABLE `dosage`
  ADD PRIMARY KEY (`dosage_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`productCategory_id`);

--
-- Indexes for table `productunit`
--
ALTER TABLE `productunit`
  ADD PRIMARY KEY (`productUnit_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dosage`
--
ALTER TABLE `dosage`
  MODIFY `dosage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `productCategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `productunit`
--
ALTER TABLE `productunit`
  MODIFY `productUnit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
