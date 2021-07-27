-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 08:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penilaian-sidangta`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_sidang`
--

CREATE TABLE `jadwal_sidang` (
  `kd_sidang` int(11) NOT NULL,
  `status_pendaftaran` int(11) NOT NULL,
  `no_pendaftaran` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `judul_skripsi` text NOT NULL,
  `tanggal_sidang` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_sidang`
--

INSERT INTO `jadwal_sidang` (`kd_sidang`, `status_pendaftaran`, `no_pendaftaran`, `nama_depan`, `nama_belakang`, `judul_skripsi`, `tanggal_sidang`, `keterangan`) VALUES
(1, 3, 1, 'bangun', 'pasaribu', 'sistem informasi pengembangan database', '12-06-21', 'harap hadir pada tanggal yang sudah ditentukan');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pendaftaran` int(11) NOT NULL,
  `status_pendaftaran` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `judul_skripsi` text NOT NULL,
  `bukti_kwitansi` text NOT NULL,
  `status_judul` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `status_pendaftaran`, `nim`, `nama_depan`, `nama_belakang`, `judul_skripsi`, `bukti_kwitansi`, `status_judul`, `keterangan`) VALUES
(1, 3, '160123456789', 'bangun', 'pasaribu', 'sistem informasi pengembangan database', 'bukti.jpg', 'acc', 'jadwal pendaftaran akan dilanjutkan oleh dosen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tentang` varchar(200) NOT NULL,
  `level` varchar(10) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `token` varchar(300) NOT NULL,
  `img_users` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `email`, `nama_depan`, `nama_belakang`, `no_hp`, `tentang`, `level`, `password`, `status`, `token`, `img_users`) VALUES
(1, '16101234', 'admin@gmail.com', 'admin', '', '08124541521', 'Terkadang begitulah !', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 2, 'cb1ff5f794030cb5810b1994bb61737d', '1.jpg'),
(2, '16101235', 'bangun.mangatur@student.pelitaindonesia.ac.id', 'bangun', 'mangatur', '08124541522', 'Tidak mudah', 'dosen', '202cb962ac59075b964b07152d234b70', 1, '4f5992924d797be7692b9668aaddc0d2', '2.jpg'),
(3, '16101236', 'bambang@gmail.com', 'bambang', 'sudarmo', '08124541523', 'Ada', 'user', '202cb962ac59075b964b07152d234b70', 1, '7ceab5ce60f56d4c5d2f4e0fe95fa332', '3.jpg'),
(4, '16101237', 'bangunpsb@gmail.com', 'bangun', 'psb', '08124541524', 'Sibuk !', 'user', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'ced8eb015f980de5a7162b368229d602', '5.jpg'),
(14, '16101238', 'bertonsiagian@gmail.com', 'berton', 'siagian', '0812732', 'oke', 'user', '123', 2, 'asr', 'p.jpg'),
(15, '16101239', 'ferryantositanggang@gmail.com', 'ferryanto', 'sitanggang', '081239293', '', 'dosen', 'zasd', 2, 'asd', 'l.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_sidang`
--
ALTER TABLE `jadwal_sidang`
  ADD PRIMARY KEY (`kd_sidang`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
