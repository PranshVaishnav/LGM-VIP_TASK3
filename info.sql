-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 08:11 PM
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
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `STATE` varchar(255) NOT NULL,
  `DISTRICT` varchar(255) NOT NULL,
  `LOCATION` varchar(255) NOT NULL,
  `SLOTS` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`STATE`, `DISTRICT`, `LOCATION`, `SLOTS`) VALUES
('RAJASTHAN', 'JODHPUR', 'MBM HOSPITAL', 50),
('Andhra Pradesh', 'Anantapur', 'Annpurn Hospital', 30);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `refid` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `yob` varchar(255) NOT NULL,
  `photoid` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `dose1` varchar(1) NOT NULL DEFAULT 'N',
  `dose2` varchar(1) NOT NULL DEFAULT 'N',
  `VACCINE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `mobile`, `refid`, `code`, `yob`, `photoid`, `idno`, `dose1`, `dose2`, `VACCINE`) VALUES
('PRANS', '7737593389', '29854751521442', '1442', '2001', 'Aadhar', '8745-1542-5485', 'Y', 'N', 'COVISHIELD'),
('FVVD', '1111111111', '', '', '4512', 'Aadhar', '1542-8954-8547', 'N', 'N', 'Covishield'),
('FVVD', '1111111111', '', '', '4512', 'Aadhar', '1542-8954-8547', 'N', 'N', 'Covishield'),
('FVVD', '1111111111', '', '', '4512', 'Aadhar', '1542-8954-8547', 'N', 'N', 'Covishield'),
('FDS', '2222222222', '', '', '4578', 'Driver License', '4578-8956-8975', 'N', 'N', 'Pfizer'),
('anan', '8548548548', '', '', '5475', 'Pan Card', '4578-8954-8574', 'N', 'N', 'Moderna'),
('ANUJ', '4578457845', '', '', '2005', 'Pan Card', '1246-9999-8659', 'N', 'N', 'Pfizer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
