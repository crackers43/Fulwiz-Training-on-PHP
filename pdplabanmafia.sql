-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 09:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdplabanmafia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `E_ID` int(11) NOT NULL,
  `E_FNAME` varchar(255) NOT NULL,
  `E_LNAME` varchar(255) NOT NULL,
  `E_GENDER` varchar(6) NOT NULL,
  `E_BDATE` date NOT NULL,
  `E_DEPT` varchar(100) NOT NULL,
  `E_RANK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`E_ID`, `E_FNAME`, `E_LNAME`, `E_GENDER`, `E_BDATE`, `E_DEPT`, `E_RANK`) VALUES
(1, 'Juan', 'Wosho', 'Male', '1993-11-25', 'IT', '2'),
(2, 'Jan Francis Ian', 'Lasaca', 'Male', '1984-01-07', 'IT', '4'),
(3, 'Ida Rio', 'Niñeza', 'Female', '1984-01-06', 'MANDAUE LHIO', '3'),
(4, 'Ricardo', 'Morales', 'Male', '1960-12-25', 'CENTRAL OFFICE', '1'),
(5, 'Bong', 'Go', 'Male', '1972-08-15', 'SENATE', '3'),
(6, 'Rody', 'Buterte', 'Male', '1959-07-30', 'MALACAÑANG PALACE', '3'),
(7, 'Lewis', 'Hamilton', 'Male', '1984-01-07', 'MOTORPOOL', '9'),
(8, 'Ricardo', 'Dalisay', 'Male', '1982-02-09', 'PUBLIC AFFAIRS', '3'),
(9, 'Alyana', 'Dalisay', 'Female', '1986-04-10', 'PUBLIC AFFAIRS', '5'),
(10, 'Renato', 'Hipolito', 'Male', '1972-06-13', 'LEGAL', '11'),
(11, 'Optimus', 'Prime', 'Male', '2010-01-07', 'ROBOTICS LAB', '1'),
(15, 'Megatron', 'Megatronus', 'Male', '2010-01-07', 'ROBOTICS LAB', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `U_ID` int(11) NOT NULL,
  `U_USERNAME` varchar(255) NOT NULL,
  `U_PASSWORD` varchar(16) NOT NULL,
  `U_ROLE` varchar(10) NOT NULL,
  `U_NICKNAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`U_ID`, `U_USERNAME`, `U_PASSWORD`, `U_ROLE`, `U_NICKNAME`) VALUES
(1, 'jlasaca43', 'Xxxxx12345', 'Admin', 'EL CRACKERS'),
(2, 'crackers7', 'abcdef098765', 'Staff', ''),
(3, 'crackers07', 'crackers123', 'Admin', ''),
(4, 'wildrider43', 'xxxxx12345', 'Staff', ''),
(5, 'swindle43', 'Xxxxx12345', 'Staff', 'Decepticon Swindle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `E_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
