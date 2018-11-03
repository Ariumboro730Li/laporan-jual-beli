-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2018 at 01:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viany`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id` bigint(20) NOT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `suplier` varchar(200) DEFAULT NULL,
  `jumlah_barang` varchar(200) DEFAULT NULL,
  `harga_beli_semua` varchar(200) DEFAULT NULL,
  `harga_beli` varchar(200) DEFAULT NULL,
  `harga_pokok` varchar(200) DEFAULT NULL,
  `harga_jual` varchar(200) DEFAULT NULL,
  `laba_barang` varchar(200) DEFAULT NULL,
  `laba_barang_semua` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `pres` varchar(50) DEFAULT NULL,
  `lo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id`, `nama_barang`, `suplier`, `jumlah_barang`, `harga_beli_semua`, `harga_beli`, `harga_pokok`, `harga_jual`, `laba_barang`, `laba_barang_semua`, `status`, `pres`, `lo`) VALUES
(28, 'Samsung s 9', 'PT Samsung Indonesia', '60', '600000000', '10000000', '14500000', '17400000', '0', '0', '', '0.45', '45'),
(29, 'Ipad 10', 'PT Apple Indonesia', '98', '980000000', '10000000', '15500000', '18600000', '0', '0', '', '0.55', '55'),
(30, 'Laptop LeLove', 'LeLove Indonesia', '0', '0', '', '14500000', '17400000', '0', '0', '', '0.45', '45'),
(31, 'Google Glass', 'Pt Google Indonesia', '0', '0', '0', '0', '0', '0', '0', '', '0.55', '55');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(100) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_akses` enum('gratis','premium','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `email`, `username`, `password`, `user_akses`) VALUES
(26, 'Ari Umboro Seno', 'ariumboro@gmail.com', 'Ari Umboro Seno', 'deviosa', 'gratis');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` bigint(6) NOT NULL,
  `no_identitas` varchar(200) DEFAULT NULL,
  `kartu_identitas` varchar(200) DEFAULT NULL,
  `nama_pelanggan` varchar(200) DEFAULT NULL,
  `barang_favorit` varchar(200) DEFAULT NULL,
  `no_handphone` varchar(200) DEFAULT NULL,
  `ultah` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `no_identitas`, `kartu_identitas`, `nama_pelanggan`, `barang_favorit`, `no_handphone`, `ultah`, `status`) VALUES
(1, '91891', 'KTP', 'Alo', 'Polihe', '09891', '2018-07-06', 'Sudah Menikah'),
(2, '01010101', 'SIM', 'Kamulah satu satunya', 'Kamus Bahasa Planet Mars', '000123', '2018-07-07', 'Belum Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` bigint(9) NOT NULL,
  `tgl_beli` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `jumlah_barang` varchar(200) DEFAULT NULL,
  `Suplier` varchar(200) DEFAULT NULL,
  `harga_beli_semua` varchar(200) DEFAULT NULL,
  `pembayaran` varchar(200) DEFAULT NULL,
  `lo` varchar(40) DEFAULT NULL,
  `pres` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `tgl_beli`, `time`, `nama_barang`, `jumlah_barang`, `Suplier`, `harga_beli_semua`, `pembayaran`, `lo`, `pres`) VALUES
(175, '2018-07-07', '20:51:56', 'Samsung s 9', '100', 'PT Samsung Indonesia', '1000000000', 'Lunas', '', '0'),
(176, '2018-07-07', '21:08:59', 'Ipad 10', '135', 'PT Apple Indonesia', '1350000000', 'Lunas', '', '0'),
(177, '2018-07-07', '21:22:38', 'Laptop LeLove', '5', 'LeLove Indonesia', '50000000', 'Lunas', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` bigint(50) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `nama_pembeli` varchar(200) DEFAULT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `jumlah_barang` varchar(200) DEFAULT NULL,
  `harga_barang` varchar(200) DEFAULT NULL,
  `total_penjualan` varchar(200) DEFAULT NULL,
  `keuntungan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `date`, `time`, `nama_pembeli`, `nama_barang`, `jumlah_barang`, `harga_barang`, `total_penjualan`, `keuntungan`) VALUES
(72, '2018-07-07', '21:03:08', 'Mr Skaddosh', 'Samsung s 9', '5', '17400000', '87000000', '37000000'),
(73, '2018-07-07', '21:09:34', 'PT GaJah Mada Melawan Arjuna', 'Ipad 10', '22', '18600000', '409200000', '189200000'),
(74, '2018-07-07', '21:16:32', 'PT GaJah Mada Melawan Arjuna', 'Ipad 10', '15', '18600000', '279000000', '129000000'),
(75, '2018-07-07', '21:16:47', 'PT GaJah Mada Melawan Arjuna', 'Samsung s 9', '35', '17400000', '609000000', '259000000'),
(76, '2018-07-07', '21:29:44', 'Universitas indonesia', 'Laptop LeLove', '5', '17400000', '87000000', '37000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` bigint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
