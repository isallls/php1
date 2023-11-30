-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 05:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isall`
--

-- --------------------------------------------------------

--
-- Table structure for table `kode_barang`
--

CREATE TABLE `kode_barang` (
  `kodebarang` char(4) NOT NULL,
  `namabarang` varchar(40) NOT NULL,
  `hargabarang` int(10) NOT NULL,
  `tahunpembuatan` year(4) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kode_barang`
--

INSERT INTO `kode_barang` (`kodebarang`, `namabarang`, `hargabarang`, `tahunpembuatan`, `stok`) VALUES
('KB01', 'Clame Plates', 40000, '2012', 10),
('KB02', 'Press Coverr', 60000, '2015', 20),
('KB03', 'Terminal', 15000, '2017', 5),
('KB04', 'Kunci Inggris', 175000, '2022', 14),
('KB05', 'RTX 4090TI ', 30000000, '2023', 25),
('KB06', 'RX 6700xt', 7000000, '2022', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kode_barang`
--
ALTER TABLE `kode_barang`
  ADD PRIMARY KEY (`kodebarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
