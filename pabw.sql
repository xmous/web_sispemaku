-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2022 pada 12.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pabw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL DEFAULT '',
  `nomor` varchar(15) NOT NULL,
  `alamat` text DEFAULT NULL,
  `level` char(1) DEFAULT '3',
  `api_key` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `del` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nim`, `password`, `nama`, `nomor`, `alamat`, `level`, `api_key`, `remember_token`, `created_at`, `updated_at`, `del`) VALUES
(1, '181080200022', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Muhammad Sayfudin', '081911868280', 'Jl. Raya Kemantren ', '3', '181080200022_20221247312', '', '2022-01-24 06:54:53', '2022-01-24 00:03:12', '0'),
(2, '123456789', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Irwan A. Kautsar, S.Kom., M.Kom., Ph.D', '081911868280', 'Jl. Sidoarjo', '2', '123456789_2022124175655', NULL, '2022-01-24 11:29:28', '2022-01-24 11:29:28', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE `jam` (
  `id` int(11) NOT NULL,
  `jamke` int(1) NOT NULL,
  `masuk` time DEFAULT NULL,
  `keluar` time DEFAULT NULL,
  `del` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`id`, `jamke`, `masuk`, `keluar`, `del`) VALUES
(1, 1, '08:00:00', '08:30:00', '0'),
(2, 2, '08:30:00', '09:00:00', '0'),
(3, 3, '09:30:00', '10:00:00', '0'),
(4, 4, '10:00:00', '10:30:00', '0'),
(5, 5, '10:30:00', '11:00:00', '0'),
(6, 6, '11:00:00', '11:30:00', '0'),
(7, 7, '11:30:00', '12:00:00', '0'),
(8, 8, '12:00:00', '12:30:00', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `dosen` int(11) NOT NULL,
  `hari` int(1) DEFAULT NULL,
  `jam_mulai` int(11) DEFAULT NULL,
  `jam_akhir` int(11) DEFAULT NULL,
  `ruangan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `del` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `dosen`, `hari`, `jam_mulai`, `jam_akhir`, `ruangan`, `created_at`, `updated_at`, `del`) VALUES
(1, '7A1 PABW', 2, 4, 4, 6, 1, NULL, NULL, '0'),
(2, '7A2 PABW', 2, NULL, 2, 5, 2, '2022-01-24 07:14:06', '2022-01-24 07:14:06', '1'),
(3, '7A2 PABW', 2, NULL, 1, 4, 2, '2022-01-24 07:08:59', '2022-01-24 07:08:59', '0'),
(4, 'abcd', 2, NULL, 2, 4, 1, '2022-01-24 03:03:53', '2022-01-24 03:03:53', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_mhs`
--

CREATE TABLE `kelas_mhs` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mhs` int(11) DEFAULT NULL,
  `del` char(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_mhs`
--

INSERT INTO `kelas_mhs` (`id`, `id_kelas`, `id_mhs`, `del`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0', NULL, NULL),
(2, 3, 1, '1', '2022-01-24 07:06:57', '2022-01-24 00:14:37'),
(3, 3, 1, '0', '2022-01-24 07:14:45', '2022-01-24 00:14:45'),
(4, 1, 1, '0', '2022-01-24 11:10:42', '2022-01-24 04:10:42'),
(5, 1, 1, '0', '2022-01-24 11:10:47', '2022-01-24 04:10:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id` int(11) NOT NULL,
  `nama_ruang` varchar(255) DEFAULT NULL,
  `del` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `nama_ruang`, `del`) VALUES
(1, 'Ruang 01', '0'),
(2, 'Ruang 02', '0'),
(3, 'Ruang 03', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas_mhs`
--
ALTER TABLE `kelas_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelas_mhs`
--
ALTER TABLE `kelas_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
