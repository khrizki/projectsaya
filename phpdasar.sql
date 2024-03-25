-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2023 pada 06.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` char(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Khairul Rizky', '2201183002', 'khrizki95@gmail.com', 'Teknologi Informasi', '65434420249fa.jpg'),
(3, 'Halil Nustadia', '2201183001', 'halil123@gmail.com', 'Teknik Komputer', 'h.JPEG'),
(4, 'Sepri', '2201182007', 'aridas78@gmail.com', 'Teknik Komputer', 'a.jpeg'),
(5, 'Rahmat Arif Lubek', '2201183003', 'lubekajh@gmail.com', 'Teknologi Informasi', 'lubex.jpeg'),
(6, 'Siapa saja', '2201983004', 'siapaajh@gmail.com', 'Teknologi Informasi', 's.jpeg'),
(12, '10678679', 'Rizky', 'dsgdfxhs@gmail.com', 'Komputer', '6535d50755af3.jpg'),
(13, '2311050146', 'Silvia', 'saldisilvia444@gmail.com', 'Ilmu Perpustakaan dan Informas', '653fb4e0dd7bc.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'rizky', '$2y$10$XCptfL/AOrzkazNyZqxnkeqfeJqmTnvCdl/oihGHikx3Ss3CPaD4W'),
(5, 'admin', '$2y$10$yBR10RJmb4svjZlKEBBuseVy1s1x2OWWRMH/CJF.nY2Cc5gcuNxIi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
