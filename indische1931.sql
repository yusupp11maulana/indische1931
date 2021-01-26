-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2021 pada 09.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id_detail` varchar(20) NOT NULL,
  `id_order` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah_order` int(11) NOT NULL,
  `harga_order` int(11) NOT NULL,
  `status_order` varchar(20) NOT NULL,
  `statusnya` varchar(20) NOT NULL,
  `jm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id_meja` int(11) NOT NULL,
  `nama_meja` varchar(20) NOT NULL,
  `pax_meja` int(11) NOT NULL,
  `ket_meja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id_meja`, `nama_meja`, `pax_meja`, `ket_meja`) VALUES
(1, 'Meja 1', 2, 'ready'),
(2, 'Meja 2', 2, 'ready'),
(3, 'Meja 3', 2, 'ready'),
(4, 'Meja 4', 1, 'ready'),
(5, 'Meja 5', 1, 'ready'),
(6, 'Meja 6', 1, 'ready'),
(7, 'Meja 7', 2, 'ready'),
(8, 'Meja 8', 6, 'ready'),
(9, 'Meja 9', 2, 'ready'),
(10, 'Meja 10', 2, 'ready'),
(11, 'Meja 11', 2, 'ready'),
(12, 'Meja 12', 4, 'ready'),
(13, 'Meja 13', 1, 'ready'),
(14, 'Meja 14', 1, 'ready'),
(15, 'Meja 15', 1, 'ready'),
(16, 'Meja 16', 8, 'ready'),
(17, 'Meja 17', 2, 'ready'),
(18, 'Meja 18', 4, 'ready'),
(19, 'Meja 19', 4, 'ready'),
(20, 'Meja 20', 4, 'ready'),
(21, 'Meja 21', 4, 'ready'),
(22, 'Meja 22', 2, 'ready'),
(23, 'Meja 23', 2, 'ready'),
(24, 'Meja 24', 2, 'ready');

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
(1, 'Americano Hot', 17000, 'Beverages', 'actived'),
(2, 'Americano Ice', 18000, 'Beverages', 'actived'),
(3, 'Cappucinno Hot', 18000, 'Beverages', 'actived'),
(4, 'Cappucinno Ice', 20000, 'Beverages', 'actived'),
(5, 'Caffe Latte Hot', 18000, 'Beverages', 'actived'),
(6, 'Caffe Latte Ice', 20000, 'Beverages', 'actived'),
(7, 'Affogato Ice', 20000, 'Beverages', 'actived'),
(8, 'Kopi Susu Ice', 20000, 'Beverages', 'actived'),
(9, 'Kopi Gulali Ice', 20000, 'Beverages', 'actived'),
(10, 'Kopi Coklat Ice', 22000, 'Beverages', 'actived'),
(11, 'Filter Hot', 18000, 'Beverages', 'actived'),
(12, 'Japanese Ice', 20000, 'Beverages', 'actived'),
(13, 'Matcha Ice', 25000, 'Beverages', 'actived'),
(14, 'Taro Ice', 25000, 'Beverages', 'actived'),
(15, 'Red Velvet Ice', 25000, 'Beverages', 'actived'),
(16, 'Chocolate Ice', 25000, 'Beverages', 'actived'),
(17, 'Charcoal Ice', 25000, 'Beverages', 'actived'),
(18, 'Afternoon Lemon Tea Ice', 23000, 'Beverages', 'actived'),
(19, 'Tamarind Splash Ice', 23000, 'Beverages', 'actived'),
(20, 'Sunday Green Apple Ice', 23000, 'Beverages', 'actived'),
(21, 'Vanilla Ice', 20000, 'Beverages', 'actived'),
(22, 'Strawberry Ice', 20000, 'Beverages', 'actived'),
(23, 'Chocolate Ice', 20000, 'Beverages', 'actived'),
(24, 'Cookies Ice', 23000, 'Beverages', 'actived'),
(25, 'Regal Ice', 23000, 'Beverages', 'actived'),
(26, 'Caramel Corn Ice', 23000, 'Beverages', 'actived'),
(27, 'Matcha Latte Hot', 22000, 'Beverages', 'actived'),
(28, 'Matcha Latte Ice', 23000, 'Beverages', 'actived'),
(29, 'Taro Latte Hot', 22000, 'Beverages', 'actived'),
(30, 'Taro Latte Ice', 23000, 'Beverages', 'actived'),
(31, 'Red Velvet Latte Hot', 22000, 'Beverages', 'actived'),
(32, 'Red Velvet Latte Ice', 23000, 'Beverages', 'actived'),
(33, 'Chocolate Latte Hot', 22000, 'Beverages', 'actived'),
(34, 'Chocolate Latte Ice', 23000, 'Beverages', 'actived'),
(35, 'Charcoal Latte Hot', 22000, 'Beverages', 'actived'),
(36, 'Charcoal Latte Ice', 23000, 'Beverages', 'actived'),
(37, 'Pancake Vanilla', 20000, 'Foods', 'actived'),
(38, 'Pancake Matcha', 20000, 'Foods', 'actived'),
(39, 'Pancake Chocolate', 20000, 'Foods', 'actived'),
(40, 'Pancake Taro', 20000, 'Foods', 'actived'),
(41, 'Pancake Red Velvet', 20000, 'Foods', 'actived'),
(42, 'Cwie Mie', 23000, 'Foods', 'actived'),
(43, 'Blackpapper Chicken', 23000, 'Foods', 'actived'),
(44, 'Lemon Butte Chicken ', 23000, 'Foods', 'actived'),
(45, 'Salted Spicy Chicken', 23000, 'Foods', 'actived'),
(46, 'Onion Ring', 18000, 'Foods', 'actived'),
(47, 'French Fries', 18000, 'Foods', 'actived');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id_order` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `id_meja` int(11) NOT NULL,
  `jumlah_orderan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `waktu_order` time NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `promo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('PGW0001', 'Kasir', 'Kasir', 'kasir123', '2021-01-01', 2),
('PGW0002', 'Bar', 'Bar', 'bar123', '2021-01-01', 3),
('PGW0003', 'Kitchen', 'Kitchen', 'kitchen123', '2021-01-01', 4);

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
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_detail_order_1` (`id_menu`),
  ADD KEY `fk_detail_order_2` (`no_ktp`);

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_order_1` (`id_meja`),
  ADD KEY `fk_order_3` (`no_ktp`);

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
-- AUTO_INCREMENT untuk tabel `meja`
--
ALTER TABLE `meja`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `fk_detail_order_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_order_2` FOREIGN KEY (`no_ktp`) REFERENCES `customer` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD CONSTRAINT `fk_order_1` FOREIGN KEY (`id_meja`) REFERENCES `meja` (`id_meja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_3` FOREIGN KEY (`no_ktp`) REFERENCES `customer` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
