-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2021 pada 18.10
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
-- Struktur dari tabel `jadwal_sidang`
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
-- Dumping data untuk tabel `jadwal_sidang`
--

INSERT INTO `jadwal_sidang` (`kd_sidang`, `status_pendaftaran`, `no_pendaftaran`, `nama_depan`, `nama_belakang`, `judul_skripsi`, `tanggal_sidang`, `keterangan`) VALUES
(1, 3, 1, 'bangun', 'pasaribu', 'sistem informasi pengembangan database', '12-06-21', 'harap hadir pada tanggal yang sudah ditentukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
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
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `status_pendaftaran`, `nim`, `nama_depan`, `nama_belakang`, `judul_skripsi`, `bukti_kwitansi`, `status_judul`, `keterangan`) VALUES
(1, 3, '160123456789', 'bangun', 'pasaribu', 'sistem informasi pengembangan database', 'bukti.jpg', 'acc', 'jadwal pendaftaran akan dilanjutkan oleh dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nim`, `email`, `nama_depan`, `nama_belakang`, `no_hp`, `tentang`, `level`, `password`, `status`, `token`, `img_users`) VALUES
(1, '16101234', 'admin@gmail.com', 'admin', '', '08124541521', 'Terkadang begitulah !', 'admin', '202cb962ac59075b964b07152d234b70', 1, 'cb1ff5f794030cb5810b1994bb61737d', '1.jpg'),
(2, '16101235', 'bangun.mangatur@student.pelitaindonesia.ac.id', 'bangun', 'mangatur', '08124541522', 'Tidak mudah', 'dosen', '202cb962ac59075b964b07152d234b70', 1, '4f5992924d797be7692b9668aaddc0d2', '2.jpg'),
(3, '16101236', 'bambang@gmail.com', 'bambang', 'sudarmo', '08124541523', 'Ada', 'user', '202cb962ac59075b964b07152d234b70', 2, '7ceab5ce60f56d4c5d2f4e0fe95fa332', '3.jpg'),
(14, '16101238', 'bertonsiagian@gmail.com', 'berton', 'siagian', '0812732', 'oke', 'user', '202cb962ac59075b964b07152d234b70', 2, 'asr', 'p.jpg'),
(15, '16101239', 'ferryantositanggang@gmail.com', 'ferryanto', 'sitanggang', '081239293', '', 'dosen', '202cb962ac59075b964b07152d234b70', 2, 'asd', 'l.png'),
(16, '123', 'bangun@asd.com', '123', '123', '123', '', 'user', '202cb962ac59075b964b07152d234b70', 2, '65b8b775dbb88d258c7fba09a15d1984', 'FB_IMG_1598981169162.jpg'),
(20, '16103057004', 'bangunpsb@gmail.com', 'bangun', 'pasaribu', '08123223', '', 'user', '202cb962ac59075b964b07152d234b70', 1, '11191faa0766a3e59a7c77be1e6dfdac', 'FB_IMG_1598981169162.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal_sidang`
--
ALTER TABLE `jadwal_sidang`
  ADD PRIMARY KEY (`kd_sidang`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
