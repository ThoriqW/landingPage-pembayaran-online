-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 02:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_klien`
--

CREATE TABLE `tb_klien` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `id_modul` varchar(50) NOT NULL,
  `status_transaksi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_klien`
--

INSERT INTO `tb_klien` (`id`, `nama`, `nomor`, `alamat`, `order_id`, `id_modul`, `status_transaksi`, `email`, `password`) VALUES
(35, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '2075265689', 'MD1', '1', 'thoriqwajedi88@gmail.com', '$2y$10$YhdwHKCywNEx.EDGWwddVelAMFQkzSHglBOBgGr8Khnro3DTE/bnS'),
(36, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '938850596', 'MD1', '1', 'thoriqwajedi55@gmail.com', '$2y$10$c8mnnYTnX7gbWDwE6KmjA.UNZFItCWXW/zS5qfMI5l3smbR8gnKKK'),
(38, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '1243746146', 'MD2', '1', 'thoriqwajedi99@gmail.com', '$2y$10$hTOCl5YHEykfCSVQsrdSbuKmMqur3Ja5v9WKLqmPPHv9Hy7jYwfOy'),
(40, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '1425448358', 'MD2', '1', 'thoriqwajedi18@gmail.com', '$2y$10$D5.YL3ToK86b1shHbdOGE.aUvg0Cb9ztBVaCjTPDvh3j7dKkL9Y02'),
(41, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '192926820', 'MD2', '1', 'thoriqwajedi77@gmail.com', '$2y$10$mwkG55WpRUcSY4RBuajH7.XKfgZZzyLtvSlrqvojNj8lfwqnLNQZS'),
(42, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '1707184922', 'MD2', '1', 'thoriqwajedi17@gmail.com', '$2y$10$hWF918FnCDBtCbAPzAEPz.7IIZCBWn.WDGBqLTZggyy6j8tmBDM1C'),
(43, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '197568744', 'MD2', '1', 'thoriqwajedi04@gmail.com', '$2y$10$ZAj.rtRcsUq/c5PBU8qGm.m8M9lIvM6cCuqcfXSaSPuxo4QMY41oO'),
(44, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '805961492', 'MD1', '1', 'thoriqwajedi33@gmail.com', '$2y$10$wWm8mj/d/syxw33aJx48aeidCU6yeJUHn7L0.q9M0Rytuv6GoWMqC'),
(45, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '1302333189', 'MD1', '1', 'thoriqwajedi44@gmail.com', '$2y$10$mNce.Ij2LC/fBdsFlQjiTuyc5mF.TIJxaHHtN633VC3b0ehEWTyma'),
(46, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '939083931', 'MD1', '1', 'thoriqwajedi666@gmail.com', '$2y$10$S/ejX7sJ76qMGkTP8t9NjeFyGVKK/Yn4U9YCssYeUi9TxEnnHZK1S'),
(47, 'Moh Thoriq Wajedi', '082296709235', 'Jl. Hangtuah', '326501847', 'MD2', '1', 'thoriqwajedi123456@gmail.com', '$2y$10$2BQb69qjaYKKMcT0vPu76eZE2jjhIDDkAm51kM.SvGNSwCTTExs8e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_modul`
--

CREATE TABLE `tb_modul` (
  `id_modul` varchar(50) NOT NULL,
  `nama_modul` varchar(100) NOT NULL,
  `harga_modul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_modul`
--

INSERT INTO `tb_modul` (`id_modul`, `nama_modul`, `harga_modul`) VALUES
('MD1', 'Paket 1', '50000'),
('MD2', 'Paket 2', '50000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_klien`
--
ALTER TABLE `tb_klien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_modul` (`id_modul`);

--
-- Indexes for table `tb_modul`
--
ALTER TABLE `tb_modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_klien`
--
ALTER TABLE `tb_klien`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_klien`
--
ALTER TABLE `tb_klien`
  ADD CONSTRAINT `tb_klien_ibfk_1` FOREIGN KEY (`id_modul`) REFERENCES `tb_modul` (`id_modul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
