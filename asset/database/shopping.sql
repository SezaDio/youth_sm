-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 08:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `youth_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
`id_produk` int(100) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` bigint(200) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id_produk`, `nama_produk`, `jenis_produk`, `deskripsi_produk`, `harga_produk`, `posted_by`, `phone_number`, `tanggal_posting`) VALUES
(3, 'Flash Disk Kingston', 'Elektronik', 'Ukuran Simpan 32 Gb', 200000, 'Azies', '089076570989', '2017-05-25 16:00:51'),
(4, 'Mouse DELUX', 'Elektronik', 'Warna : Putih Imut', 300000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(5, 'Kemeja Lengan Panjang', 'Fashion', 'Warna : Putih Imut', 300000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(6, 'Kemeja Lengan Pendek', 'Fashion', 'Warna : Putih Imut', 300000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(7, 'Celana Pendek', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(8, 'Celana Panjang', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(9, 'Sarung', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(10, 'Kain Kafan', 'Fashion', 'Warna : Putih\r\n', 30000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(11, 'Kain Sutera', 'Fashion', 'Warna : Putih\r\n', 30000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(12, 'Kain Katun', 'Fashion', 'Warna : Putih\r\n', 30000, 'Seza', '085640367417', '2017-05-25 16:59:01'),
(13, 'Benang Jahit', 'Fashion', 'Warna : Putih\r\n', 30000, 'Seza', '085640367417', '2017-05-25 16:59:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
 ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
