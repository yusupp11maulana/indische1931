-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2021 pada 12.18
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indische1931`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `no_ktp` varchar(20) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat_customer` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp_customer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`no_ktp`, `nama_customer`, `email`, `password`, `alamat_customer`, `jenis_kelamin`, `tanggal_lahir`, `no_telp_customer`) VALUES
('3578171611990001', 'Yusup Maulana', 'yusupp11maulana@gmail.com', 'yusup1611', 'Kedinding tengah', 'Laki-laki', '1999-11-16', '085549002851');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `jenis_menu` varchar(200) NOT NULL,
  `ket_menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `jenis_menu`, `ket_menu`) VALUES
(1, 'Americano Hot', 17000, 'Beverages', 'deactived');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `alamat_pegawai` varchar(100) NOT NULL,
  `no_telp_pegawai` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `alamat_pegawai`, `no_telp_pegawai`, `tanggal_lahir`, `id_role`) VALUES
('admin', 'Admin', 'Admin', 'admin123', '0000-00-00', 1),
('bar', 'bar', '', 'bar123', '0000-00-00', 3),
('kasir', 'kasir', '', 'kasir123', '0000-00-00', 2),
('kitchen', 'kitchen', '', 'kitchen123', '0000-00-00', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'Kasir'),
(3, 'Bar'),
(4, 'Kitchen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `fk_role` (`id_role`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
