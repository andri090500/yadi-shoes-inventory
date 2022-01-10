-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2022 pada 02.34
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang_sepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id_barang` int(11) NOT NULL,
  `merek` varchar(30) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sepatu`
--

INSERT INTO `sepatu` (`id_barang`, `merek`, `jenis`, `warna`, `stok`, `harga`) VALUES
(1, 'Crocodile', 'Bustong', 'Hitam', 10, 100000),
(2, 'Lois', 'Casual', 'Coklat Krem', 8, 100000),
(3, 'Lois', 'Casual', 'Hitam Abu', 10, 100000),
(4, 'Lois', 'Casual', 'Hitam Coklat', 10, 100000),
(5, 'Lois', 'Casual', 'Merah', 10, 100000),
(6, 'Sport', 'Olahraga', 'Krem', 10, 80000),
(7, 'Sport', 'Olahraga', 'Abu abu', 10, 80000),
(8, 'Sport', 'Olahraga', 'Hitam', 10, 80000),
(9, 'Crocodile', 'Pantopel', 'Hitam', 10, 120000),
(10, 'Crocodile', 'Pantopel', 'Hitam', 10, 120000),
(11, 'Levis', 'Sandal', 'Cokelat', 8, 50000),
(12, 'Levis', 'Sandal', 'Hitam', 8, 50000),
(13, 'Levis', 'Sandal', 'Cokelat Tua', 10, 50000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
