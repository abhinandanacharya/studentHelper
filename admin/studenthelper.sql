-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 01:08 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studenthelper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bca`
--

CREATE TABLE `bca` (
  `id` int(4) NOT NULL,
  `file` varchar(50) NOT NULL,
  `path_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bca`
--

INSERT INTO `bca` (`id`, `file`, `path_name`) VALUES
(30, '12-Chemistry-NcertSolutions-chapter-1-exercises.pd', 'testupload/12-Chemistry-NcertSolutions-chapter-1-exercises.pdf'),
(31, 'windows-keyboard-shortcuts.pdf', 'testupload/windows-keyboard-shortcuts.pdf'),
(32, 'sample.pdf', 'testupload/sample.pdf'),
(33, 'sample.pdf', 'testupload/sample.pdf'),
(34, 'CTIS256-Week3.pdf', 'testupload/CTIS256-Week3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mca`
--

CREATE TABLE `mca` (
  `id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca`
--

INSERT INTO `mca` (`id`, `file_name`, `file_path`) VALUES
(27, 'sample.pdf', 'mcapaper/sample.pdf'),
(28, 'windows-keyboard-shortcuts.pdf', 'mcapaper/windows-keyboard-shortcuts.pdf'),
(29, 'CTIS256-Week3.pdf', 'mcapaper/CTIS256-Week3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `msc`
--

CREATE TABLE `msc` (
  `id` int(11) NOT NULL,
  `filenm` varchar(200) NOT NULL,
  `filepth` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msc`
--

INSERT INTO `msc` (`id`, `filenm`, `filepth`) VALUES
(1, 'sample(1).pdf', 'mscpdf/sample(1).pdf'),
(2, '12-Chemistry-NcertSolutions-chapter-1-exercises.pdf', 'mscpdf/12-Chemistry-NcertSolutions-chapter-1-exercises.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca`
--
ALTER TABLE `bca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca`
--
ALTER TABLE `mca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msc`
--
ALTER TABLE `msc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bca`
--
ALTER TABLE `bca`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `mca`
--
ALTER TABLE `mca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `msc`
--
ALTER TABLE `msc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
