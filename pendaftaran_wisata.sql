-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2022 pada 15.35
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_wisata`
--

CREATE TABLE `pendaftaran_wisata` (
  `id_pendaftar` int(32) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `no_identitas` int(32) NOT NULL,
  `no_hp` int(32) NOT NULL,
  `nama_wisata` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `dewasa` int(11) NOT NULL,
  `anak` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_wisata`
--

INSERT INTO `pendaftaran_wisata` (`id_pendaftar`, `nama_lengkap`, `no_identitas`, `no_hp`, `nama_wisata`, `tanggal`, `dewasa`, `anak`, `harga`, `total_bayar`) VALUES
(13, 'YUSRAN', 2147483647, 2131231, '3', '2022-11-02', 3, 2, 110000, 440000),
(14, 'test', 2414, 3423, '3', '2022-11-09', 2, 1, 110000, 275000),
(15, '', 0, 0, '1', '0000-00-00', 1, 1, 20000, 30000),
(16, 'Yusran', 2147483647, 2147483647, '1', '2022-11-04', 2, 1, 20000, 50000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran_wisata`
--
ALTER TABLE `pendaftaran_wisata`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_wisata`
--
ALTER TABLE `pendaftaran_wisata`
  MODIFY `id_pendaftar` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
