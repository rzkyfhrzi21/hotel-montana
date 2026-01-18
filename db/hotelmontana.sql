-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 11:15 AM
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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(30) NOT NULL,
  `ket_fasilitas` text NOT NULL,
  `gambar_fasilitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `ket_fasilitas`, `gambar_fasilitas`) VALUES
(1, 'Kolam Renang', 'Kolam renang outdoor yang akan menampilkan pemandangan pantai yang indah nan eksotis.', '67860f622e082.jpg'),
(2, 'Kids Club', 'Area bermain untuk anak-anak yang aman dan luas, dengan berbagai permainan edukasi dan petugas yang menjaga anak-anak ketika bermain.', '67860f531d4fd.jpg'),
(3, 'View Pantai', 'Nikmati pemandangan pantai langsung saat membuka jendela.', '67860f4b7e8f1.jpg'),
(4, 'Convention Center', 'Acara anda akan terasa sangat mewah ketika menggunakan convention center kami, dengan ruangan yang luas dan nyaman bagi tamu undangan anda.', '67860f595b3b5.jpg'),
(5, 'View Sunset', 'Nikmati pemandangan sunset matahari terbenam saat menginap di hotel kami', '67860f3c485c0.jpg'),
(6, 'Restaurant Bintang 5', 'Nikmati hidangan berstandar hotel bintang 5, dengan Chef bersertifikat Internasional dengan menu-menu yang dapat membuat pengalaman menginap anda semakin berkesan.', '67860f43e3961.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `level` enum('admin','resepsionis','cust') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `level`, `username`, `password`) VALUES
(1, 'Madit TI', 'admin', 'madit', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
