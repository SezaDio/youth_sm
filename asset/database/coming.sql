-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 02:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youth_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `coming`
--

CREATE TABLE `coming` (
  `id_coming` int(4) NOT NULL,
  `nama_coming` varchar(100) NOT NULL,
  `deskripsi_coming` text NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming`
--

INSERT INTO `coming` (`id_coming`, `nama_coming`, `deskripsi_coming`, `posted_by`, `tanggal_posting`, `status`) VALUES
(3, 'Lomba Mewarnai', 'Lomba mewarnai anak sd dan tk', 'azies', '2017-05-30 00:13:31', 1),
(5, 'Color Run', 'Color Run hari minggu', 'azies', '2017-05-30 00:17:11', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coming`
--
ALTER TABLE `coming`
  ADD PRIMARY KEY (`id_coming`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coming`
--
ALTER TABLE `coming`
  MODIFY `id_coming` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
