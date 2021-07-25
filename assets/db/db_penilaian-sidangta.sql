-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2021 pada 06.57
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tentang` varchar(200) NOT NULL,
  `level` varchar(10) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `token` varchar(300) NOT NULL,
  `img_users` varchar(300) NOT NULL,
  `img_qrcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `nama_depan`, `nama_belakang`, `no_hp`, `tentang`, `level`, `password`, `status`, `token`, `img_users`, `img_qrcode`) VALUES
(1, 'admin@gmail.com', 'budi', 'sentosa', '08124541521', 'Terkadang begitulah !', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 2, 'cb1ff5f794030cb5810b1994bb61737d', '1.jpg', 'contoh.png'),
(9, 'bangun.mangatur@student.pelitaindonesia.ac.id', 'bangun', 'ferguso', '08124541522', 'Tidak mudah', 'admin', '202cb962ac59075b964b07152d234b70', 1, '4f5992924d797be7692b9668aaddc0d2', '2.jpg', ''),
(11, 'bambang@gmail.com', 'bambang', 'sudarmo', '08124541523', 'Ada', 'user', '202cb962ac59075b964b07152d234b70', 1, '7ceab5ce60f56d4c5d2f4e0fe95fa332', '3.jpg', ''),
(13, 'bangunpsb@gmail.com', 'bangun', 'pasaribu', '08124541524', 'Sibuk !', 'user', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'ced8eb015f980de5a7162b368229d602', '5.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
