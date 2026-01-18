-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmontana`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `ket_kamar` text NOT NULL,
  `jumlah_kasur` int(2) NOT NULL,
  `harga_kamar` int(30) NOT NULL,
  `ukuran_kamar` varchar(2) NOT NULL,
  `gambar_kamar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `ket_kamar`, `jumlah_kasur`, `harga_kamar`, `ukuran_kamar`, `gambar_kamar`) VALUES
(1, 'Kamar Duluxe Jumbo', 'Televisi LED, Sofa , View Pantai, Kulkas 2x.', 2, 150000, '30', '67860ed06bd70.jpg'),
(2, 'Kamar Superior Jumbo', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang, Ruang Kerja, Dapur', 3, 250000, '30', '67860ec0a4e2a.jpg'),
(3, 'Kamar Keluarga Jumbo', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang.', 6, 500000, '40', '67860ea4b7a6a.jpg'),
(4, 'Kamar Exclusive Jumbo', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang, Ruang Kerja', 2, 1000000, '40', '67860eb372132.jpg'),
(5, 'Kamar View Alam Terbuka', 'Televisi LED, Sofa , View Pantai, Kulkas, Teras Terhubung Ke Kolam Renang', 1, 300000, '20', '67860d9fc9e83.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
