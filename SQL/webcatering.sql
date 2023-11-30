-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 03:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_acc` int(11) NOT NULL,
  `acc_email` varchar(100) NOT NULL,
  `acc_pass` varchar(50) NOT NULL,
  `acc_access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_acc`, `acc_email`, `acc_pass`, `acc_access`) VALUES
(1, 'admin@admin.com', '123', 1),
(5, '123220031@if.com', '123', 0),
(6, '123220019@if.com', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
(3, 'Prasmanan');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `desc_menu` mediumtext NOT NULL,
  `harga` int(11) NOT NULL,
  `link_gambar` text NOT NULL DEFAULT 'https://www.warisankuliner.com/gfx/recipes/temp_thumb-1658299943.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_kat`, `nama_menu`, `desc_menu`, `harga`, `link_gambar`) VALUES
(3001, 3, 'Paket Prasmanan 1', 'Test1', 50000, 'https://www.warisankuliner.com/gfx/recipes/temp_thumb-1658299943.jpg'),
(3002, 3, 'Contoh 2', 'Input contoh ke-2', 50000, 'https://www.warisankuliner.com/gfx/recipes/temp_thumb-1658299943.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(30) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_acc` int(11) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL,
  `qty_pemesanan` int(11) NOT NULL,
  `status_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_menu`, `id_acc`, `tgl_pemesanan`, `qty_pemesanan`, `status_pemesanan`) VALUES
('5_2311Mon_110804', 2001, 5, '2023-11-27 11:08:04', 10, 1),
('5_2311Mon_221126', 3002, 5, '2023-11-27 22:11:26', 80, -1),
('5_2311Mon_223128', 2001, 5, '2023-11-27 22:31:28', 5, 0),
('6_2311Mon_223231', 1001, 6, '2023-11-27 22:32:31', 15, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
