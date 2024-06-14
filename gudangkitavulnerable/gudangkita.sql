-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 08:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudangkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `KodeBarang` varchar(30) NOT NULL,
  `NamaBarang` varchar(50) NOT NULL,
  `JumlahStok` double(15,2) DEFAULT NULL,
  `Harga` double(15,2) DEFAULT NULL,
  `Satuan` varchar(15) NOT NULL,
  `TglAuditTerakhir` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`KodeBarang`, `NamaBarang`, `JumlahStok`, `Harga`, `Satuan`, `TglAuditTerakhir`) VALUES
('4970129727514', 'Spidol Boardmarker SNOWMAN Warna Hitam', 280.00, 0.00, 'pak', '2023-12-11 00:00:00'),
('8901057510028', 'Staples Kangoro No.10-1M', 200.00, 0.00, 'pak', '2023-12-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `barangdigudang`
--

CREATE TABLE `barangdigudang` (
  `IdTransaksi` int(11) NOT NULL,
  `WaktuTransaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `StatusTransaksi` enum('Masuk','Keluar') NOT NULL,
  `Jumlah` double(15,2) DEFAULT NULL,
  `Keterangan` text DEFAULT NULL,
  `KodeGudang` int(11) NOT NULL,
  `KodeBarang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangdigudang`
--

INSERT INTO `barangdigudang` (`IdTransaksi`, `WaktuTransaksi`, `StatusTransaksi`, `Jumlah`, `Keterangan`, `KodeGudang`, `KodeBarang`) VALUES
(1, '2023-12-11 00:00:00', 'Masuk', 100.00, '', 3, '4970129727514'),
(2, '2023-12-11 00:00:00', 'Masuk', 100.00, '', 3, '8901057510028'),
(3, '2023-12-11 00:00:00', 'Masuk', 200.00, '', 4, '4970129727514'),
(4, '2023-12-11 00:00:00', 'Keluar', 20.00, '', 3, '4970129727514'),
(5, '2023-12-11 00:00:00', 'Masuk', 100.00, '', 4, '8901057510028');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `KodeGudang` int(11) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`KodeGudang`, `Alamat`) VALUES
(3, 'Gudang 1'),
(4, 'Gudang 2');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `KodeLogin` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `NamaPengguna` varchar(50) NOT NULL,
  `Alamat` text DEFAULT NULL,
  `waktudaftar` datetime DEFAULT current_timestamp(),
  `level` enum('Admin','Operator','Umum') NOT NULL DEFAULT 'Umum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`KodeLogin`, `Password`, `NamaPengguna`, `Alamat`, `waktudaftar`, `level`) VALUES
('Admin', 'Admin', '', NULL, '2023-12-11 14:05:48', 'Admin'),
('Operator', 'Operator', '', NULL, '2023-12-11 14:23:55', 'Operator'),
('Umum', 'Umum', '', NULL, '2023-12-11 14:24:04', 'Umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`KodeBarang`);

--
-- Indexes for table `barangdigudang`
--
ALTER TABLE `barangdigudang`
  ADD PRIMARY KEY (`IdTransaksi`),
  ADD KEY `KodeGudang` (`KodeGudang`),
  ADD KEY `KodeBarang` (`KodeBarang`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`KodeGudang`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`KodeLogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangdigudang`
--
ALTER TABLE `barangdigudang`
  MODIFY `IdTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `KodeGudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangdigudang`
--
ALTER TABLE `barangdigudang`
  ADD CONSTRAINT `barangdigudang_ibfk_1` FOREIGN KEY (`KodeGudang`) REFERENCES `gudang` (`KodeGudang`),
  ADD CONSTRAINT `barangdigudang_ibfk_2` FOREIGN KEY (`KodeBarang`) REFERENCES `barang` (`KodeBarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
