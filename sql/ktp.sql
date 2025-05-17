-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 12:18 PM
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
-- Database: `ktp`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` varchar(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status_perkawinan` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `foto_ktp` varchar(100) DEFAULT NULL,
  `tanggal_pendaftaran` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `id_user`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt_rw`, `kelurahan`, `kecamatan`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `foto_ktp`, `tanggal_pendaftaran`) VALUES
(9, 1, 'Maulana Rafi', 'Jakarta', '2005-06-15', 'Laki-laki', 'Jl. Kebon Jeruk No. 123', '001/002', 'Kebon Jeruk', 'Kebon Jeruk', 'Islam', 'Belum Kawin', 'Pelajar', 'Indonesia', NULL, '2025-05-17 08:41:37'),
(10, 1, 'Sarah Putri', 'Bandung', '2004-08-21', 'Perempuan', 'Jl. Asia Afrika No. 45', '003/004', 'Cicendo', 'Cicendo', 'Islam', 'Belum Kawin', 'Mahasiswa', 'Indonesia', NULL, '2025-05-17 08:41:37'),
(11, 1, 'Budi Santoso', 'Surabaya', '2005-03-10', 'Laki-laki', 'Jl. Pemuda No. 78', '005/006', 'Gubeng', 'Gubeng', 'Kristen', 'Belum Kawin', 'Pelajar', 'Indonesia', NULL, '2025-05-17 08:41:37'),
(12, 1, 'Anisa Rahma', 'Yogyakarta', '2004-11-30', 'Perempuan', 'Jl. Malioboro No. 90', '007/008', 'Danurejan', 'Danurejan', 'Islam', 'Belum Kawin', 'Mahasiswa', 'Indonesia', NULL, '2025-05-17 08:41:37'),
(13, 1, 'David Chen', 'Medan', '2005-01-25', 'Laki-laki', 'Jl. Asia No. 156', '009/010', 'Medan Kota', 'Medan Kota', 'Buddha', 'Belum Kawin', 'Pelajar', 'Indonesia', NULL, '2025-05-17 08:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nik` char(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nik`, `password`, `role`, `created_at`) VALUES
(1, 'maulanarafii036@gmail.com', '123456787', 'admin123', 'admin', '2025-05-17 07:26:07'),
(2, 'aku@gmail.com', '12345', 'aku123', 'user', '2025-05-17 09:52:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
