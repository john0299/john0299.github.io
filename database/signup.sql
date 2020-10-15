-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 02:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(255) NOT NULL,
  `civilstatus` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `workstatus` varchar(255) DEFAULT NULL,
  `monthlysalary` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `voter` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `transportation` varchar(255) NOT NULL,
  `q1` varchar(255) DEFAULT NULL,
  `q2` varchar(255) DEFAULT NULL,
  `q3` varchar(255) DEFAULT NULL,
  `residential_status` varchar(255) NOT NULL,
  `residential_date` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `house_number` varchar(255) DEFAULT NULL,
  `house_id` varchar(255) DEFAULT NULL,
  `subdivision` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `suffix`, `nickname`, `email`, `contact`, `gender`, `citizenship`, `birthdate`, `birthplace`, `civilstatus`, `education`, `workstatus`, `monthlysalary`, `occupation`, `company`, `religion`, `voter`, `pwd`, `transportation`, `q1`, `q2`, `q3`, `residential_status`, `residential_date`, `street`, `house_number`, `house_id`, `subdivision`, `unit`, `username`, `password`, `cpassword`) VALUES
(1, 'qw', NULL, '', '', '', 'adminz2@g.c', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, 'qwe', '21232f297a57a5a743894a0e4a801fc3', ''),
(2, 'qwe', ' qwe', 'Den', ' qwe', ' qwe', 'admin@admin.com', '09123456789', '1', '1', '2020-10-16', 'qweqwe', '1', '1', '1', '10000', 'qweqwe', 'qwe', '1', '1', '1', '1', '1', '1', '', '1', '2020-10-31', '1', '', ' ', ' ', ' ', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', ''),
(3, 'qwe', ' ', 'qweqweqwe', ' ', ' ', 'admin@g.c', '123123123', 'Male', 'Filipino', '2020-10-16', 'fabella', 'Single', 'Associate Degree Holder', 'Government Employee', '111', 'qweeee', 'john', 'Roman Catholic', 'Yes', 'No', 'Private Car', 'No', 'Yes', '', 'Renting', '2020-10-17', 'Cabrera Street', '', ' ', ' ', ' ', 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
(4, 'wewe', ' ', 'q', ' ', ' ', 'admin@g.c', 'qwe', 'Male', 'Filipino', '2020-09-18', 'qwe', 'Single', 'Associate Degree Holder', 'Government Employee', 'qwe', 'qwe', 'qwe', 'Roman Catholic', 'Yes', 'No', 'Private Car', 'No', 'Yes', '', 'Renting', '2020-10-30', 'Cabrera Street', '', '333', ' ', ' ', 'russel', '1942a3c6dff2aee890c4c61476abb4e0', ''),
(5, 'e', ' ', 'eeeeee', ' ', ' ', 'admin', '44444444', 'Male', 'Filipino', '2020-10-24', 'wwwwwwwwww', 'Single', 'Associate Degree Holder', 'Government Employee', '111', 'qweqw', 'qweq', 'Roman Catholic', 'Yes', 'No', 'Private Car', 'No', 'Yes', 'Yes', 'Renting', '2020-10-31', 'Cabrera Street', '', ' 2', ' 2', ' 2', 'sample', '5e8ff9bf55ba3508199d22e984129be6', ''),
(6, 'Harry', ' ', 'Den', ' ', ' ', 'admin', '09123456789', 'Male', 'Filipino', '2020-10-16', 'qweqwe', 'Single', 'Associate Degree Holder', 'Government Employee', '10000', 'qweqwe', 'qweqwe', 'Roman Catholic', 'Yes', 'No', 'Private Car', 'No', 'Yes', 'Yes', 'Renting', '2005-12-23', 'Cabrera Street', 'CS-2', ' ', ' ', ' ', 'sample2', '656b38f3402a1e8b4211fac826efd433', ''),
(7, 'Harry', ' ', 'Den', ' ', ' ', 'admin', '09123456789', 'Male', 'Filipino', '2020-10-17', 'wwwwwwwwww', 'Single', 'Associate Degree Holder', 'Government Employee', '1', 'qweqwe', 'qweqwe', 'Roman Catholic', 'No', 'No', 'Private Car', 'No', 'Yes', 'Yes', 'Renting', '2020-10-30', 'Cabrera Street', 'CS-2', ' 2', ' ', ' ', 'sample3', 'd35f70211135de265bc7c66df4dd3605', ''),
(9, 'eqw', ' ', 'eqwe', ' ', ' ', 'admin', 'weqw', 'Male', 'Filipino', '2020-10-21', 'qweq', 'Single', 'Associate Degree Holder', 'Government Employee', '3', 'qweqw', 'we', 'Roman Catholic', 'Yes', 'No', 'Private Car', 'No', 'Yes', 'Yes', 'Renting', '2020-10-16', 'Cabrera Street', 'CS-1', ' ', ' ', ' ', 'sample4', '5e8ff9bf55ba3508199d22e984129be6', ''),
(10, 'john russel', 'fajardo', 'fajardo', 'jr', 'ruzz', 'fajardo.jrsl00@gmail.com', '09513466563', 'Male', 'Filipino', '1999-02-22', 'fabella', 'Single', 'Associate Degree Holder', 'Government Employee', '0', 'none', 'none', 'Roman Catholic', 'Yes', 'No', 'Private Car', 'No', 'Yes', 'Yes', 'Renting', '2005-01-01', 'Cabrera Street', 'CS-1', '333', ' subdivision', ' unit', 'fajardo', 'f243e7d0b284be3449ba104d566008ab', ''),
(11, 'John', ' ', 'Doe', ' ', ' doe', 'johndoe@gmail.com', '09123456789', 'Male', 'Filipino', '2000-01-01', 'Bulacan', 'Single', 'Bachelor Degree Holder', 'Government Employee', '11111', 'Sample Occupation', 'Sample Company Inc.', 'Roman Catholic', 'Yes', 'No', 'Private Car', 'No', 'Yes', 'Yes', 'Renting', '2020-10-15', 'Cabrera Street', 'CS-2', ' 432', ' subdivision sample', ' Unit sample', 'john', 'd3915844cde56f2dccfd24c7d34d12f0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
